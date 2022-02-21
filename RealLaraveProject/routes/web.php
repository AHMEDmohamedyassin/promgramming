<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::get('post/{id}' , [App\Http\Controllers\HomeController::class , 'post'])->name('post');

route::middleware('auth')->group(function(){
    route::get('Admin' , [App\Http\Controllers\AdminController::class , 'index'])->name('admin');
    route::get('Admin/post/create' , [App\Http\Controllers\HomeController::class , 'CreatePost'])->name('post.create');
    route::post('Admin/post/store' , [\App\Http\Controllers\HomeController::class , 'StorePost'])->name('post.store');
    route::get('Admin/post' , [\App\Http\Controllers\HomeController::class , 'ShowPost'])->name('post.show');
    route::get('Admin/post/update/{id}' , [\App\Http\Controllers\HomeController::class , 'UpdatePost'])->name('post.update');
    route::post('Admin/post/update' , [\App\Http\Controllers\HomeController::class , 'EditPost'])->name('post.edit');
    route::DELETE('Admin/post/delete' , [App\Http\Controllers\HomeController::class , 'DeletePost'])->name('post.delete');
    route::get('Admin/User/profile/{id}' , [App\Http\Controllers\HomeController::class , 'UserProfile'])->name('user.profile');
    route::put('Admin/user/update/{id}' , [App\Http\Controllers\HomeController::class , 'UserUpdate'])->name('user.update');
    route::delete('Admin/user/delete/{id}' , [App\Http\Controllers\HomeController::class , 'UserDelete'])->name('user.delete');
    route::delete('deattach/{id}' , [App\Http\Controllers\HomeController::class , 'deattach'])->name('deattach');
    route::put('attach/{id}' , [App\Http\Controllers\HomeController::class , 'attach'])->name('attach');
});

route::middleware('\App\Http\Middleware\URole:Admin')->group(function(){
    route::get('Admin/user/creat' , [App\Http\Controllers\HomeController::class , 'UserCreate'])->name('user.create');
    route::get('Admin/user/show' , [App\Http\Controllers\HomeController::class , 'UserShow'])->name('user.show');
    route::delete('Admin/user/role/delete/{id}' , [App\Http\Controllers\HomeController::class , 'RoleDelete'])->name('role.delete');
});
