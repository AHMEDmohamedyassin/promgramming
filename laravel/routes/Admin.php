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

Route::get('/admin', function () {
    return ' admin function from admine page  in providers in routeserviceprovider.php ';
})->name('a');

Route::get('/number/{id}' , function($id){
    return 'the number is ' . $id;
});

Route::group(['prefix' => 'users'] , function(){

    Route::get('{name}' , function($name){
        return $name;
    });

});

// Route::get('first' , 'App\Http\Controllers\Firstcontroller@first');  // هذه طريقة ثانية بسبب التحديث

use App\Http\Controllers\Firstcontroller;

Route::get('/first', [Firstcontroller::class, 'first']);   //هذه الطريقة الأولي بسبب التحديث

// php artisan route:list (in terminal)
Route::resource('news' ,'App\Http\Controllers\Newscontroller' );        //resources = get + post + delete  هذا في حالة الحاجة لأكثر من دالة

Route::get('view/{id} {name} {age}' , [Firstcontroller::class , 'view']); 

Route::get('viewbootstrap' , [Firstcontroller::class , 'viewbootstrap']);  // view bootstrap