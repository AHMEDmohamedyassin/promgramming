<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Item;
use App\Models\Image;
use App\Models\User;
use App\Models\exam;
use App\Models\StudentClass;
use App\Models\PayingCodes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class TheAdminController extends Controller
{
// start main page

    public function index (){
        $user_count = count(User::all());
        $item_count = count(item::all());
        $image_count = count(Image::all());
        return view('admin.index' , compact(['user_count' , 'item_count' , 'image_count']));
    }


// end main page

// start item


    public function itemview (){  // done
        $item = Item::orderBy('id' , 'DESC')->get();
        return view('admin.item.view' , compact(['item']));
    }

    public function itemcreate(){   // done
        $category = Category::all();
        $item = Item::all();
        return view('admin.item.create' , compact(['category' , 'item']));
    }

    public function itemupdate($id){  // done
        $item = Item::find($id);
        $category = Category::all();
        return view('admin.item.update' , compact(['item' , 'category']));
    }

    public function itemdelete($id){   // done
        $item = Item::find($id);
        foreach($item->image as $image){
            $image->delete();
            if(is_file('image/' . $image->path))
                unlink('image/' . $image->path);
        }
        $item->delete();
        return back();
    }

    public function itemsave(){    // done
        request()->validate([
            'name' => 'required' ,
            'body' =>'required' ,
        ]);
        $item = new Item;
        $item -> name = request('name');
        $item -> body = request('body');
        $item -> user_id = 1;
        if(request('price')){
            $item -> price = request('price');
        }
        else{
            $item -> price = 0;
        }
        $item->save();

        if(request('category')){
            foreach(request('category') as $ele){
                $category = Category::find($ele);
                $item->category()->save($category);
            }
        }

        if(request('image')){
            $img = request('image');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $item->image()->create(['path' => $file_name , 'freeorpaid' => 0 ]);
                $file->move(public_path('image') , $file_name);
            }
        }

        if(request('imagepaid')){
            $img = request('imagepaid');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $item->image()->create(['path' => $file_name , 'freeorpaid' => 1]);
                $file->move(public_path('image') ,$file_name);
            }
        }

        return redirect(route('item.create'));
    }

    public function itemedite(){    // done
        $item = Item::find(request('id'));
        if(request('name')){
            $item -> name = request('name');
        }
        if(request('body')){
            $item -> body = request('body');
        }
        if(request('price') != ''){
            $item -> price = request('price');
        }

        $item->save();

        $added_cat = request('category');
        if(! ($item->category == '[]')){
            $category = [];
            $added_cat = [];
            foreach($item->category()->get() as $ele){
                $category[] = $ele->id;
            }
            foreach(request('category') as $id){
                if(!(in_array($id, $category)))
                $added_cat[] = $id;
            }
            foreach($category as $id){
                if(!(in_array($id, request('category'))))
                $item->category()->detach(['id' => $id]);
            }
        }
        if(! ($added_cat == '[]')){
            foreach($added_cat as $ele){
                $category = Category::find($ele);
                $item->category()->save($category);
            }
        }

        if(request('image')){
            $img = request('image');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $item->image()->create(['path' => $file_name , 'freeorpaid' => 0]);
                $file->move(public_path('image') , $file_name);
            }
        }
        if(request('imagepaid')){
            $img = request('imagepaid');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $item->image()->create(['path' => $file_name , 'freeorpaid' => 1]);
                $file->move(public_path('image') ,$file_name);
            }
        }

        return redirect(route('item.update' , request('id')));
    }


// end item

// start user


    public function userview (){  // done
        $user = User::orderBy('id' , 'DESC')->get();
        return view('admin.user.view' , compact(['user']));
    }

    public function usercreate(){   // done
        return view('admin.user.create');
    }

    public function userupdate($id){    // done
        $user = User::find($id);
        return view('admin.user.update' , compact(['user']));
    }

    public function userdelete($id){   // done
        $user = User::find($id);
        foreach($user->image as $image){
            $image->delete();
            if(is_file('image/' . $image->path))
                unlink('image/' . $image->path);
        }
        $user->delete();
        return back();
    }

    public function usersave(){  // done
        request()->validate([
            'firstname' => 'required' ,
            'lastname' => 'required' ,
            'phone' => 'required' ,
            'password' => 'required' ,
        ]);
        $user = User::create([
            'firstname' => request('firstname') ,
            'lastname' => request('lastname') ,
            'email' => request('email') ,
            'phone' => request('phone') ,
            'password' => Hash::make(request('password')),
        ]);

        if(request('image')){
            $img = request('image');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $user->image()->create(['path' => $file_name , 'freeorpaid' => 0]);
                $file->move(public_path('image') ,$file_name);
            }
        }

        return redirect(route('user.view'));
    }

    public function useredite (){   // done
        $user = User::find(request('id'));
        if(request('firstname'))  $user->firstname = request('firstname');
        if(request('lastname'))  $user->lastname = request('lastname');
        if(request('phone'))  $user->phone = request('phone');
        if(request('role'))  $user->role = request('role');
        if(request('email'))  $user->email = request('email');
        if(request('password'))  $user->password = Hash::make(request('password'));
        $user->save();
        if(request('image')){
            $img = request('image');
            foreach($img as $file){
                // $file_name = $file->getClientOriginalName();
                $file_name = rand() . '.jpg';
                $user->image()->create(['path' => $file_name , 'freeorpaid' => 0]);
                $file->move(public_path('image') ,$file_name);
            }
        }
        if(request('grad')){
            if(!$user->StudentClass){
                StudentClass::create([
                    'user_id' => $user->id,
                    'class' => request('grad')
                ]);
            }
            else{
                $user->studentclass->update(['class' => request('grad')]);
            }
        }
        return back();
    }


// end user

// start category


    public function categoryadd (){  // done
        request()->validate([
            'name' => 'required',
        ]);
        Category::create([
            'name' => request('name')
        ]);
        return redirect(route('item.create'));
    }

    public function categorydelete ($id){   // done
        Category::find($id)->delete();
        return back();
    }

    public function categoryedit (){

    }


// end category

// start image


    public function imagedelete($image_id){   // done
        $image = Image::find($image_id);
        if(is_file('image/' . $image->path))
            unlink('image/' . $image->path);
        $image->delete();
        return back();
    }

    public function imagemultidelete(){
        request()->validate([
            'id' => 'required'
        ]);
        foreach(request('id') as $image_id){
            $image = Image::find($image_id);
            if(is_file('image/' . $image->path))
                unlink('image/' . $image->path);
            $image->delete();
        }
        return back();
    }

    public function imageadd(){
        $freeimage = Image::where(['freeorpaid' => 0])->orderBy('id' , 'DESC')->get();
        $paidimage = Image::where(['freeorpaid' => 1])->orderBy('id' , 'DESC')->get();
        return view('admin.image.image' , compact(['freeimage' , 'paidimage']));
    }

// end image

//start exam

    public function examview(){
        $exam = exam::orderBy('id' , 'DESC')->get();
        return view('admin.exam.view' , compact(['exam']));
    }

    public function examadd(){
        return view('admin.exam.create');
    }

    public function examsave(){
        request()->validate([
            'title' => 'required' ,
            'student' => 'required' ,
            'duration' => 'required' ,
            'exam' => 'required' ,
            'state' => 'required' ,
            'start' => 'required' ,
            'end' => 'required' ,
        ]);
        $price = 0;
        if(request('price')){
            $price = request('price');
        }
        exam::create([
            'title' => request('title') ,
            'student' => request('student') ,
            'duration' => request('duration') ,
            'start' => request('start') ,
            'end' => request('end') ,
            'state' => request('state') ,
            'price' => $price ,
            'exam' => request('exam'),
            'user_id' => Auth()->user()->id,
        ]);

        return redirect(route('exam.view.admin'));
    }

    public function examupdate($id){
        $exam = exam::find($id);
        return view('admin.exam.update' , compact(['exam']));
    }

    public function examdelete ($id){
        exam::find($id)->delete();
        return back();
    }

    public function examedite (){
        $exam = exam::find(request('id'));

        if(request('title')){
            $exam->title = request('title');
        }
        if(request('student')){
            $exam->student = request('student');
        }
        if(request('duration')){
            $exam->duration = request('duration');
        }
        if(request('state') !== ''){
            $exam->state = request('state');
        }
        if(request('price') != ''){
            $exam->price = request('price');
        }
        if(request('start')){
            $exam->start = request('start');
        }
        if(request('end')){
            $exam->end = request('end');
        }
        $exam->user_id = request('user');

        $exam->save();

        return back();
    }

//end exam


//start paying code


    public function codeview(){
        $code = PayingCodes::orderBy('id' , 'DESC')->get();
        return view('admin.codes.codeview' , compact(['code']));
    }

    public function codecreate(){
        return view('admin.codes.codecreate');
    }

    public function codedelete($id){
        PayingCodes::find($id)->delete();
        return back();
    }

    public function codesave(){
        for($i = 0 ; $i < request('number') ; $i++){
            PayingCodes::create(['code' => uniqid() , 'value' => request('value')]);
        }
        return redirect(route('code.view'));
    }


//end paying code

// start search

    public function search (){
        if(request('type') == 'item'){
            $result = Item::where('name' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('body' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('price' , 'LIKE' , '%' . request('search') . '%')->get();
        }
        if(request('type') == 'user'){
            $result = User::where('firstname' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('lastname' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('lastname' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('phone' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('email' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('role' , 'LIKE' , '%' . request('search') . '%')->get();
        }
        if(request('type') == 'exam'){
            $result = exam::where('title' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('student' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('duration' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('start' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('end' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('price' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('state' , 'LIKE' , '%' . request('search') . '%')->get();
        }
        if(request('type') == 'code'){
            $result = PayingCodes::where('code' , 'LIKE' , '%' . request('search') . '%')
                            ->orWhere('value' , 'LIKE' , '%' . request('search') . '%')->get();
        }
        $type = request('type');
        return view('admin.search' , compact(['result' , 'type']));
    }

// end search

    public function AuthLogout (){
        Auth::logout();
        return redirect(route('mainpage'));
    }

}
