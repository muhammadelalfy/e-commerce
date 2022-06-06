<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use \App\Http\Controllers\Dashboard\{DashboardController , SettingsController};
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
//'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

Route::group(['namespace' => 'Dashboard' , 'middleware' => ['auth:admin' ] ,'prefix' => 'admin'] , function (){

    Route::get('/dashboard' , [DashboardController::class , 'index'])->name('admin.dashboard');

    //setting
    Route::group(['prefix' => 'setting'],function (){

        Route::get('shipping/{type}' , [SettingsController::class , 'editShippingMethod'])->name('shippingmethod');
        Route::get('shipping/{id}' , [SettingsController::class , 'updateShippingMethod'])->name('update.shipping.method');

    });
});

Route::group(['namespace' => 'Dashboard' ,'prefix' => 'admin' , 'middleware'=>'guest:admin'] , function () {

    Route::get('/login', [\App\Http\Controllers\Dashboard\LoginController::class, 'login'])->name('admin.login');
    Route::get('/login', [\App\Http\Controllers\Dashboard\LoginController::class, 'login'])->name('user.login');

    Route::post('/login', [\App\Http\Controllers\Dashboard\LoginController::class, 'postLogin'])->name('admin.post.login');
});

Route::get('/user' , function (){
    return 'user';
})->middleware('auth');
});
