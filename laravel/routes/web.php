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
    return view('index');
});

Route::get('/posts', 'PostsController' );
Route::get('/posts/{id}', 'SinglePostController' )->where('id', '[0-9]+');
Route::get('/about', function () {
    return view('about-us');
});
Route::get('/admin/{id?}', 'Admin\AdminController@admin' )->where('id', '[0-9]+');
Route::get('/admin/registration', 'Admin\AdminRegistrationController@AdminRegistration' );
Route::post('/admin/registration', 'Admin\AdminRegistrationController@AdminCheckData' );
Route::get('/admin/new-post', 'Admin\AdminPostController@CreatePost' );
//Route::match(['get', 'post'], '/admin/registration', 'Admin\AdminRegistrationController@AdminRegistration');
//Route::match(['get', 'post'], '/admin/sign-in', 'Admin\AdminSignInController@AdminSignIn');