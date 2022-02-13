<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\User;
use App\Models\Address;
use App\Models\role;
use App\Models\Staff;
use App\Models\product;
use App\Models\photo;
use App\Models\video;
use App\Models\tag;
use App\Models\taggable;
use App\Models\post;
use Carbon\Carbon;         // class for timing
use App\Http\Controllers\HomeController;   // علشان أشغل ال Auth


route::get('insert_address' , function(){
    $user = User::find(1);
    $address = new Address(['name'=>'الشيخ زايد الحي العاشر']);
    $user->address()->save($address);
});

route::get('delete_address' , function(){
    $address = User::find(1)->address()->delete();
});

route::get('show_user_addresses' , function(){ // one to many
    $address = user::find(1);
    // return $address->addresses;
    foreach($address->addresses as $address){
        echo $address->name . '<br>';
    }
});

route::get('update_address_from_user' , function(){ // update one to one and one to many relations
    User::find(1)->addresses()->where('id' , 4)->update(['name'=>'elshikh zayed']);
});

route::get('show_user_from_address' , function(){  // show user from address
    $address = Address::find(4)->user->name;
    return $address;
});

route::get('delete_address_from_user' , function(){  // deleting
    User::find(1)->addresses()->where('id' , 4)->delete();
});

route::get('user_role' , function(){  // get role of user many to many relation
    // $user = User::find(1);
    // foreach($user->role as $role ){
    //     echo $role->name;
    // }

    $role  = role::find(1);
    foreach($role->user as $user ){
        echo $user->name;
    }
});

route::get('add_role' , function(){ // adding role to user many to many
    $user = User::find(1);
    $role = new role;
    $role->name = 'admin';
    $user->role()->save($role);
});

route::get('update_role' , function(){  // many to many deleteing and updating
    $user = User::find(1);
    if($user->has('role')){
        foreach($user->role as $role){
            // $role ->where('id' , 5)->delete();
            if($role->name == 'admin'){
                // $role -> name = 'subscriber';
                // $role->save();
                $role->delete();
            }
        }
    }
});

route::get('pivot' , function(){   // ملهاش لزمة
    $user = User::find(1);
    foreach($user->role as $role){
        echo $role->pivot . '<br>' ;
    }
});

route::get('AttachAndDetach' , function(){
    $user = USER::findorfail(1);
    // $user->role()->attach(4); // يضيف 4 إلي المستخدم الأول
    // $user->role()->detach(4);   // سوف يحذف المستخدم رقم 1 المضاف له 4
    // $user->role()->detach(); //سوف يحذف المستخدم رقم 1 من جميع ال role

});

route::get('sync' , function(){
    $user=USER::find(1);
    $user->role()->sync([4,5]); // سوف يحذف جميع الrole في المستخدم رقم واحد يضيف الrole 4 لذلك المستخدم

});


// morph relation

route::get('morphInsert' , function(){
    $staff = Staff::find(1);
    $staff->photo() -> create(['path'=>'examples.png']);
});

route::get('morphRead', function(){
    $staff = Staff::find(1);
    foreach($staff->photo as $photo){
        echo $photo->path . '<br>';
    }
    // return $staff->photo[1]->path;
});

route::get('morphUpdate' , function(){
    // $staff = Staff::find(1)->photo[1]->update(['path'=>'exa']);
    $staff = Staff::find(1);
    $update = $staff->photo()->where('id' , 1)->first();
    $update->path='exam';
    $update->save();
});

route::get('morphDelete' , function(){
    $staff = Staff::find(1);
    $delete = $staff->photo()->where('id' , 2)->delete();
});


route::get('asign' , function(){       // تبديل ملكيةالصورة الموجودة مسبقا
    $product = product::find(2);
    $photo = photo::find(4);
    $product->photo()->save($photo);
});

// morph many to many 

route::get('morphmanyInsert' , function(){
    $video = video::find(1);
    $tag = tag::find(1);
    $video->taggable()->save($tag);
});

route::get('morphmanyRead' , function(){
    $video = video::find(1);
    foreach($video->taggable as $taggable){
        echo $taggable->name . '<br>';
    }
});

route::get('morphmanyUpdate' , function(){
    $video = video::find(1);
    // $tag = $video->taggable->where('id' , 1)->first();
    // $tag->name='laravel' ;
    // $tag->save();

    // foreach($video->taggable as $tag){
    //     $tag->where('name' , 'laravel')->update(['name' => 'php']);
    // }
    


    // $tag = tag::find(2);
    // $video->taggable()->sync($tag);

    $video->taggable()->sync([1,2]);
});

route::get('morphmanyDelete' , function(){
    $video = video::find(1);
    foreach($video->taggable as $taggable){
        $taggable->where('id' , 1)->delete();
    }
});


// form form form form form form form form 
// form form form form form form form form 
// form form form form form form form form 

route::group(['middleware' => 'web'] , function(){  // تم استخدامه للتمكن من إستخدام المتغير الخاص بالأخطاء middleware

    route::resource('Post' , 'App\Http\Controllers\Project_form');

});

// dates
route::get('date' , function(){
    $date = new DateTime('+1 week');
    echo $date->format('m-d-Y');
    
    echo '<br>';

    echo Carbon::now()->addDay('10')->addSecond('3')->diffForHumans();

    echo '<br>';

    echo Carbon::yesterday()->diffForHumans();
});

//auth

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// middleware

route::get('middleware' , ['middleware' => 'MyMiddleware'  , function(){
    return 'hello';
}]);

use App\Http\Controllers\IsAdminController;
route::get('/subscriber' , [IsAdminController::class , 'index']);

Route::get('/', function () {

    // if(Auth::Check()){
    //     echo 'you are checked';
    // }

    // if(Auth::user()->role()->first()->name == 'subscriber'){   // Auth : علشان أوصل إلي الوظيفة بتاعت تسجيل الدخول
    //     return 'this user isnot admin' ;
    // }
    Auth::user()->IsAdmin();

    return view('welcome');
});


// sessions

route::get('session' , function() {
    session(['name' => 'ahmed' , 'age' => 19]);

    // return session()->get('name');

    // session()->forget('age');
    // session()->flush();
    // session()->flash('age');
    // session()->flash('age' , 25);   تعدل القيمة
    // session(['age' => 21]);
    // session()->reflash();     مش عارف أهميتها لكن هي تحافظ علي السيشن وقت أطول
    // session()->keep('age');     مش عارف أهميتها لكن هي تحافظ علي السيشن وقت أطول

    return session()->all();
});

//emails
use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

route::get('email' , function(){
    
    $details = [
        'title' => 'email from laravel and ahmed',
        'content' => 'this email is important , laravel is php framwork and it is very useful'
    ];

    Mail::to('ahmedmohamed982025@outlook.com')->send(new testMail($details));

    return 'email sended';
});

//adding template to laravel

route::get('template' , function(){
    return view('the_extreme_file');
});