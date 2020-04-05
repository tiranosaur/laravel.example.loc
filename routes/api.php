<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/delete', 'MainController@delete')->name('main.delete');

Route::get('/add', 'MainController@addRolePermission');

Route::get('/role', 'RbacController@getRole');

Route::post('/role', 'RbacController@createRole');
Route::post('/roleAddPermission', 'RbacController@roleAddPermission');
Route::post('/userAddPermission', 'RbacController@userAddPermission');
Route::post('/userAddRole', 'RbacController@userAddRole');
