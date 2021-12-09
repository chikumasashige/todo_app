<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Resist\ResistController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('home', function(){
//     return view('main.home');
// })->name('home');


// 新規登録画面遷移
Route::get('/resist',[ResistController::class,'showResist'])->name('showResist');
//確認画面遷移
Route::post('/resist/confirm',[ResistController::class, 'confirm'])->name('confirm');
//登録完了画面遷移
Route::post('/resist/confirm/complete',[ResistController::class, 'complete'])->name('complete');

//ログイン画面遷移
Route::get('/',[AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/',[AuthController::class, 'login'])->name('login');


//会員一覧取得
Route::get('home',[AuthController::class, 'user'])->name('user');
Route::get('home/{id}',[UserController::class, 'deleteDate'])->name('delteDate');

// 詳細ページ
Route::get('/home/detail/{id}',[UserController::class, 'showDetail'])->name('showDetail');

