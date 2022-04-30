<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

// start web main page

Route::get('/' , [MainController::class , 'index'])->name('mainpage');
Route::get('/account' , [MainController::class , 'account'])->name('account');

// end web main page

// start web item

Route::get('/item/{id}' , [MainController::class , 'itempage'])->name('item.page');
Route::get('/item/view/paid' , [MainController::class , 'itemviewpaid'])->name('item.view.paid');
Route::get('/item/page/paid/{id}' , [MainController::class , 'itempagepaid'])->name('item.page.paid');

// end web item

//start exam

Route::get('/exam/choose/' , [MainController::class , 'examchoose'])->name('exam.choose');
Route::get('/exam/view/{id}' , [MainController::class , 'examview'])->name('exam.view');
Route::post('/exam/grade/save' , [MainController::class , 'gradesave'])->name('grade.save');

//end exam

//start pay

Route::post('/paying' , [MainController::class , 'paying'])->name('paying');

//end pay


// Route::get('/test' , function(){
//     echo date( 'Y' , time()) . '<br>';
//     echo date( 'm' , time()) . '<br>';
//     echo date( 'd' , time()) . '<br>';
//     echo date( 'Y-m-d' , time()) . '<br>';
//     return ;
//     // return getdate(1651148295);
//     echo '<form action="'.route('test').'">
//     <input type="time" name="date">
//     <button>submit</button>
//     </form>';
//     if(request('date') === date('Y-m-d' ,time())){
//         echo 'true';
//     }
//     timezone_open('+2');
//     echo date('Y-m-d' ,time()) . '<br>';
//     return request('date');
// })->name('test');
