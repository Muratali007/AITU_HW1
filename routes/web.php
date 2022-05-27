<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
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

Route::get('/f', function () {
    //return view('welcome');
    return 'AAA';
});
Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');
Route::get('auth/logout',[MainController::class,'logout'])->name('auth.logout');
Route::post('/send',[MainController::class,'send'])->name('send.email');


Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
    Route::get('/admin/dashboard',[MainController::class,'dashboard']);
    Route::get('upload',[MainController::class,'upload']);
    Route::get('course',[MainController::class,'course']);
    Route::get('java2',[MainController::class,'javas']);
    Route::get('linear',[MainController::class,'ln']);
    Route::get('discrete',[MainController::class,'dm']);
    Route::get('calculus1',[MainController::class,'calc1']);
    Route::get('calculus2',[MainController::class,'calc2']);
    Route::get('Back-end',[MainController::class,'be']);
    Route::get('CourseMath',[MainController::class,'CourseMath']);
    Route::get('CourseProgramming',[MainController::class,'CourseProgramming']);
});


