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

Route::get('/chat',function()
{
    return view('chat');
});

Route::get('/chatWithAdmin',function()
{
    return view('chatUsers');
});

Route::get('/chatWithTithi',function()
{
    return view('chatWithTithi');
});

Route::get('/login',function()
{
    return view('auth/login');
});

Auth::routes();

