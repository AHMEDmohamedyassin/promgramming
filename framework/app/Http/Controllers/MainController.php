<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Item;
use App\Models\exam;
use App\Models\Grade;
use App\Models\paid;
use App\Models\paidexam;
use App\Models\PayingCodes;
use App\Models\StudentClass;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{


// start main page


    public function index (){
        $items = item::orderBy('id' , 'DESC')->paginate(2);
        return view('homepage' , compact(['items']));
    }

    public function account (){
        $info = Auth()->user();
        return view('account' , compact(['info']));
    }



// end main page

//start item page


    public function itempage($id){
        $items = [];
        $user_item = Auth()->user()->paid()->get();
        foreach($user_item as $e){
            $items[] = $e->item_id;
        }
        $item = Item::find($id);
        $image = $item->image()->where(['freeorpaid' => 0])->get();
        return view('itempage' , compact(['item' , 'items' , 'image']));
    }

    public function itemviewpaid(){   // يجب التعديل عند تعديل قاعدة البيانات بإضافة إذا كان المنتج مجاني
        $paid = paid::where(['user_id' => Auth()->user()->id])->orderBy('id' , 'DESC')->get();
        $item = [];
        $items=[];
        foreach($paid as $paid){
            $items[] = Item::find($paid->item_id);
        }
        return view('itemviewpaid' , compact(['items']));
    }

    public function itempagepaid($id){
        $items = [];
        $item = Auth()->user()->paid()->get();
        foreach($item as $item){
            $items[] = $item->item_id;
        }
        if( in_array($id , $items ) ){
            $item = item::find(request('id'));
            return view('itempagepaid' , compact(['item']));
        }
        else{
            return redirect(route('mainpage'));
        }
    }


// end item page



    //start exam

    public function examchoose(){
        $all_exam = [];
        $exam = [];
        if(Auth()->user()){
            if(Auth()->user()->studentclass){
                $all_exam = exam::where(['student'=>Auth()->user()->studentclass->class ])->orderBy('id' , 'DESC')->get();
            }
        }else{
            return redirect(route('login'));
        }

        foreach($all_exam as $ele){
            if($ele->start <= date('Y-m-d' , time()) && $ele->end > date('Y-m-d' , time()))
            $exam[] = $ele ;
        }

        $paid = [];
        foreach(paidexam::where(['user_id' => Auth()->user()->id])->get() as $ele){
            $paid[] = $ele->exam_id;
        }

        $user_grade = [];
        foreach(Grade::where(['user_id' => Auth()->user()->id ])->get() as $ele){
            $user_grade[] = $ele->exam_id;
        }

        return view('exam.examchoose' , compact(['exam' , 'paid' , 'user_grade']));
    }

    public function examview ($id){
        $paid = [];
        foreach(Auth()->user()->paidexam()->get() as $ele){
            $paid[] = $ele->exam_id;
        }
        if(!in_array($id , $paid)){
            if(!(exam::find($id)->price == 0))
            return redirect(route('exam.choose'));
        }

        $user_grade = [];
        foreach(Grade::where(['user_id' => Auth()->user()->id ])->get() as $ele){
            $user_grade[] = $ele->exam_id;
        }

        if(in_array($id , $user_grade)){
            return redirect(route('exam.choose'));
        }

        $exam = exam::find($id);
        return view('exam.examview' , compact(['exam']));
    }

    public function gradesave(){
        if(Grade::where(['user_id' => request('user') , 'exam_id' => request('exam')])->get() == '[]'){
            Grade::create(['user_id' => request('user') , 'exam_id' => request('exam') , 'grade' =>request('grade')]);
        }
        return redirect(route('exam.choose'));
    }

    //end exam


// start paying

    public function paying(){  /* هام يجب التعديل عند تعديل قاعدة البيانات تعديل قيمة المنتج */
        if(request('type') == 'item'){
            $price = Item::find(request('id'))->price;
        }
        if(request('type') == 'exam'){
            $price = exam::find(request('id'))->price;
        }
        if(PayingCodes::where(['code' => request('code')])->get() == '[]' || PayingCodes::where(['code' => request('code')])->first()->value !== $price){
            return back();
        }
        if(request('type') == 'item'){
            paid::create(['user_id' => Auth()->user()->id , 'item_id' => request('id')]);
        }
        elseif(request('type') == 'exam'){
        paidexam::create(['user_id' => Auth()->user()->id , 'exam_id' => request('id')]);
        }
        PayingCodes::where(['code' => request('code')])->delete();
        return back();
    }

// end paying
}
