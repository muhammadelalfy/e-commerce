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

Route::group(['namespace' => 'Dashboard' , 'middleware' => 'auth:admin'] , function (){

    Route::get('/dashboard' , [\App\Http\Controllers\Dashboard\DashboardController::class , 'index'])->name('admin.dashboard');

});

Route::group(['namespace' => 'Dashboard'  , 'middleware' => 'guest:admin'] , function () {

    Route::get('/login', [\App\Http\Controllers\Dashboard\LoginController::class, 'login'])->name('admin.login');

    Route::post('/login', [\App\Http\Controllers\Dashboard\LoginController::class, 'postLogin'])->name('admin.post.login');
});

Route::get('/user' , function (){
    return 'user';
})->middleware('auth');


