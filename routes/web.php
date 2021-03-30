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

Route::get('/','AuthController@index')->name('login');
Route::post('/','AuthController@login')->name('login');

Route::resource('register','RegisterController');


Route::group(['middleware' => 'auth'] , function(){
    //landingpage
    Route::get('dashboard','DashboardController@index')->name('dashboard');    
    Route::resource('/siswa','StudentController');
    
    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('admin', 'AdminController');        
    });

    Route::get('logout','AuthController@logout')->name('logout');
});
