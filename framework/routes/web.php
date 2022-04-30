<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TheAdminController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

// start admin

route::middleware('auth')->group(function(){

    // start admin main page
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/Admin', [TheAdminController::class , 'index'])->name('Admin');  // هو هو نفس الذي فوقه
    route::get('/logout' , [TheAdminController::class , 'AuthLogout'])->name('auth.logout');
    // end admin main page
});
route::middleware(['\App\Http\Middleware\UserRole:admin' , 'auth'])->group(function(){
    // start item in admin

    Route::get('/Admin/item/create' , [TheAdminController::class , 'itemcreate'])->name('item.create');
    Route::get('/Admin/item/update/{id}' , [TheAdminController::class , 'itemupdate'])->name('item.update');
    Route::get('/Admin/item/view' , [TheAdminController::class , 'itemview'])->name('item.view');

    Route::get('/Admin/item/delete/{id}' , [TheAdminController::class , 'itemdelete'])->name('item.delete');
    Route::post('/Admin/item/save' , [TheAdminController::class , 'itemsave'])->name('item.save');
    Route::post('/Admin/item/edite' , [TheAdminController::class , 'itemedite'])->name('item.edite');

    // end item in admin

    // start user in admin

    Route::get('/Admin/user/create' , [TheAdminController::class , 'usercreate'])->name('user.create');
    Route::get('/Admin/user/update/{id}' , [TheAdminController::class , 'userupdate'])->name('user.update');
    Route::get('/Admin/user/view' , [TheAdminController::class , 'userview'])->name('user.view');

    Route::get('/Admin/user/delete/{id}' , [TheAdminController::class , 'userdelete'])->name('user.delete');
    Route::post('/Admin/user/save' , [TheAdminController::class , 'usersave'])->name('user.save');
    Route::post('/Admin/user/edite' , [TheAdminController::class , 'useredite'])->name('user.edite');

    // end user in admin

    // start category in admin

    Route::post('/Admin/category/add' , [TheAdminController::class , 'categoryadd'])->name('category.add');
    Route::get('/Admin/category/delete/{id}' , [TheAdminController::class , 'categorydelete'])->name('category.delete');

    // end category in admin

    // start image in admin

    Route::get('/Admin/image/delete/{image_id}' , [TheAdminController::class , 'imagedelete'])->name('image.delete');
    Route::post('/Admin/image/delete' , [TheAdminController::class , 'imagemultidelete'])->name('images.delete');
    Route::get('/Admin/image' , [TheAdminController::class , 'imageadd'])->name('image.add');

    // end image in admin

    // start exam in admin
    Route::get('/Admin/exam' , [TheAdminController::class , 'examview'])->name('exam.view.admin');
    Route::get('/Admin/exam/add' , [TheAdminController::class , 'examadd'])->name('exam.add.admin');
    Route::post('/Admin/exam/add' , [TheAdminController::class , 'examsave'])->name('exam.save.admin');
    Route::get('/Admin/exam/update/{id}' , [TheAdminController::class , 'examupdate'])->name('exam.update');
    Route::get('/Admin/exam/delete/{id}' , [TheAdminController::class , 'examdelete'])->name('exam.delete');
    Route::post('/Admin/exam/edite' , [TheAdminController::class , 'examedite'])->name('exam.edite.admin');

    // end exam in admin

    // start search

    Route::post('/Admin/search' , [TheAdminController::class , 'search'])->name('search');

    // end search

    // start buying codes

    Route::get('/Admin/code' , [TheAdminController::class , 'codeview'])->name('code.view');
    Route::get('/Admin/code/create' , [TheAdminController::class , 'codecreate'])->name('code.create');
    Route::get('/Admin/code/delete/{id}' , [TheAdminController::class , 'codedelete'])->name('code.delete');
    Route::post('/Admin/code/save' , [TheAdminController::class , 'codesave'])->name('code.save');

    // end buying codes
});

// end admin
