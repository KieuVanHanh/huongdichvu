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
    return view('gioithieuchung');
});
Route::get('/index-2.html', function () {
    return view('index-2');
});
Route::get('/about.html', function () {
    return view('about');
});
Route::get('/contact.html',function()
{
    return view('contact');
});
Route::get('/service.html',function()
{
    return view('service');
});
Route::get('/search.html',function()
{
    return view('search');
});
        
