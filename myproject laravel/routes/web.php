<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

route::get('post/categories/tags' , function(){
    $url = route('a');
    return $url ;
})->name('a');

route::get('passingparameter/{id}' , function($id){
    echo '<a href="'. route("a") .'">click here</a><br>';  // من الخطأ تقريبا استخدام ال php 
    return $id;
});

route::get('view/{code?}' , '\App\Http\Controllers\controllersfolder\Mycontroller@view');

route::resource('resource' , '\App\Http\Controllers\controllersfolder\Resoursecontroller');

route::get('contact/{str}' , '\App\Http\Controllers\controllersfolder\Mycontroller@contact');

//************************************************************ */
//************************************************************ */
// ****************row*****databases****************************/
//************************************************************ */
//************************************************************ */

route::get('insert' , function(){  // insert into database

    DB::insert(' insert into posts (title , writer) value(? , ?)',  ['php with laravel' , 'mohamed']);
    
    return 'inserted';

});

route::get('read', function(){    // read data from database

    $result = DB::select('select * from posts where id=?' , [17]);

    foreach($result as $posts){

        return 'the title is : ' . $posts->title .  ' , the writer is : ' . $posts -> writer;
    
    }

});

route::get('update' , function(){

    $update = DB::update('update posts set title=? where id=?' , ['title updated' , 17]);
    
    return $update;
});

route::get('delete' , function(){

    $delete = DB::delete('delete from posts where id=?' , [15]);

    return $delete;
});

// *********************************
// ELOQUENT ************************
//**********************************

use App\Models\Posts;
use App\Models\User;
use App\Models\Role;
use App\Models\country;
use App\Models\Photo;
use App\Models\Tag;
use App\Models\Video;

ROUTE::get('eloquent/read' , function(){
    
//$posts = App\Models\posts::all();  ممكن الطريقة ده من غير ال use    
    $posts = Posts::all();
    
    foreach($posts as $post){
    
        echo 'the id : ' . $post->id . ' , the title : ' . $post->title . '<br>';
    
    }
    // foreach($array as $array){
    //     echo $array . '<br>';
    // }

});

route::get('eloquent/find' , function(){

    $posts = Posts::find(1);

    return $posts->title;
});

route::get('eloquent/where' , function(){

    $posts = Posts::where('writer' , 'heba')->get();

    return $posts[0]->title; // ملحوظة هنا بيرجع داخل مصفوفة
});

// route::get('eloquent/insert' , function(){  // inserting

//     $post = new Posts;

//     $post -> title = 'this title is added from eloquent';
//     $post -> writer = 'eloquent';

//     $post -> save();

//     echo $post->id;
// });

route::get('eloquent/update' , function(){  // inserting

    $post =  Posts::find(2);

    $post -> title = 'this title is update from eloquent';
    $post -> writer = 'eloquent';

    $post -> save();
});

route::get('eloquent/create' , function(){

    Posts::create(['title'=>'this created by create in eloquent' , 'writer'=>'eloquent/create']);

    // insert multible data in same time used in <forms/>

    // fillable property
});

route::get('eloquent/update/adv' , function(){
    
    // Posts::where('id' , 1)->where('writer' , 'mohamed')->update(['title'=>'advanced update' , 'writer'=>'updated mohamed']);
    $updating = Posts::where(['id'=> 1 , 'writer' => 'mohamed' ])->update(['title'=>'advanced update' , 'writer'=>'updated mohamed']);
    return $updating; // مهمة ترجع حالة التعديل
});

route::get('eloquent/deleting' , function(){

    // $delete = Posts::find(9)->delete();  هنا يعطي خطأ إن لم يكن يوجد ما يحذف
    $delete = Posts::destroy([10,11]); // هنا إن لم يكن هناك ما يحذف يعطي قيمة بصفر و إن حذف يعطي عدد العناصر المحذوفة

    return $delete;
});

route::get('eloquent/read/trash' , function(){

    // $post = Posts::withTrashed()->get();
    $post = Posts::onlyTrashed()->get();

    foreach($post as $post){
        echo $post->id .' , ' . $post -> title . '<br>';
    }

});

route::get('eloquent/restore' , function(){
    
    $post = Posts::onlyTrashed()->restore();
    
    return $post;
});

route::get('eloquent/forcedelete' , function(){
    Posts::onlyTrashed()->forcedelete();
});


// *********************************
// ELOQUENT RELATIONS***************
//**********************************

route::get('adduser' , function(){
    User::create(['name' => 'ahmed' , 'email' => 'ahmed@gmail.com' , 'password' => '12345']);
});

route::get('eloquent/insert' , function(){  // inserting

    $post = new Posts;

    $post -> title = 'this title is added from eloquent linked with users';
    $post -> writer = 'eloquent';
    $post -> user_id = 1;

    $post -> save();

    echo $post->id;
});

route::get('userspost' , function(){    // one to one relationship
    
    return User::find(1)->linkModel->title;

});

route::get('postuser' , function(){     // inverted one to one relationship
    return Posts::find(15)->linkModel->name;
});

route::get('userallposts' , function(){  // one to many relationship
    $posts = User::find(1);

    foreach($posts->linkModelmany as $posts){
        echo $posts->title . '<br>';
    }
});

route::get("userrole" , function(){   // many to many relation

    $role = User::find(1);
    
    foreach ($role->Role as $rol ){
        return $rol->name;
    }
});

route::get('roleuserpivot' , function(){ // use pivot
    $users = User::find(1);

    foreach($users->role as $usr){
        echo $usr->pivot . '<br><br>' . $usr->pivot->created_at;
    }
    
});

route::get("role" , function(){   // many to many inverse relation

    $role = Role::find(1)->users()->get();
    
    return $role;
});

route::get('getcountry' , function(){   // إعادة ل one to one and on to many
    $country = User::find(1)->country->name;
    return $country;
});

route::get('postfromcountry' , function(){ // relation through
    $posts = country::find(1);
    
    foreach($posts->posts as $posts){
        echo $posts->writer . '<br>';
    }
});

// *********************************
// morphic RELATIONS****************
//**********************************

route::get('user/photo' , function(){   // morphic relation one to many get user photos
    $photo = User::find(1)->photos()->get();
    return $photo;
});

route::get('photo' , function(){         // morphic inverse relation one to many
    return Photo::findorfail(1)->imageable;
});

route::get('posts/tags' , function(){   // morphic many to many
    $tag = Posts::find(1);
    foreach($tag->tag as $tag){
        echo $tag->name;
    }
});

// route::get('tags/posts' , function(){
//     $post = Tag::find(1);
//     foreach($post->post as $post){
//         echo $post->writer;
//     }
// });