<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('main');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['as' => 'profile::'], function() {
    Route::get('/{user}/profile/edit/roles', [
        'as' => 'edit',
        'uses' => 'UserController@role_edit',
        'roles' => ['Role', 'Admin'],
    ])->middleware('roles');
    Route::post('/{user}/profile/save/roles', [
        'as' => 'save',
        'uses' => 'UserController@role_save',
        'roles' => ['Role', 'Admin'],
        ])->middleware('roles');    
});