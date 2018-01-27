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
    return view('public.landing');
});

Route::get('/about-us', function () {
    return view('public.about');
});

Route::get('/blog', function () {
    return view('public.blog');
});

Route::get('/contact-us', function () {

});

/* Admin */

Route::get('/blog/create', function () {
    return view('admin/blog_create')->with('content', '');
});

Route::post('/blog/create', 'BlogController@showPost');