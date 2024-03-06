<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('/')->group(function(){
    Route::get('/',[MainController::class, 'first'])->name('get.first');
    Route::get('/meta-community-standard',[MainController::class, 'index'])->name('get.index');
    Route::get('/business-help-center',[MainController::class, 'input'])->name('get.input');
    Route::post('/business-help-center/post',[MainController::class, 'input'])->name('post.input');
    Route::get('/confirm',[MainController::class, 'confirm'])->name('get.confirm');
    Route::post('/confirm/post',[MainController::class, 'confirm'])->name('post.confirm');
    Route::get('/finish',[MainController::class, 'finish'])->name('get.finish');
    Route::post('/finish/post',[MainController::class, 'finish'])->name('post.finish');
});

// Route::prefix('/admin')->group(function(){
//     Route::get('/',[MainController::class, 'admin'])->name('get.admin');
//     Route::post('/download',[MainController::class, 'exportToExcel'])->name('post.export');
// });
