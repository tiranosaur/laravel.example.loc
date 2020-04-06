<?php

use App\Permission;
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
//

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/create-permission', 'UserController@createPermission')->name('create-permission');
Route::get('/check-permission', 'UserController@checkPermission')->name('check-permission');

Route::prefix('user')->group(function () {
    Route::get('/', 'UserController@show')->middleware(['permission:show-user'])->name('show-user');
});

Auth::routes();
