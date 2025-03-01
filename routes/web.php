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

Auth::routes(['register' => false]);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');

/*--  Admin side  --*/
Route::group(['middleware' => ['status', 'auth']], function (){
    $groupData = [
      'namespace' => 'Admin',
      'prefix' => 'admin',
    ];

    Route::group($groupData, function (){
        Route::resource('index', 'MainController')
            ->names('admin.index');
    });
});
