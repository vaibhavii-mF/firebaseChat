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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/header',function()
{
    return view('header');
});

Route::get('/chat',function()
{
    return view('chat');
});

Route::get('/chatWithAdmin',function()
{
    return view('chatUsers');
});

Route::get('/login',function()
{
    return view('auth/login');
});

// Route::post('/submitFaculty','Admin\facultyManager@submitFaculty');
Route::get('getUserDetails', 'laravelChat@getUserDetails');
Route::get('getAdminDetails', 'laravelChat@getAdminDetails');
Route::get('userDetails/{id}', 'laravelChat@userDetails');
Route::post('saveUser', 'laravelChat@saveUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
