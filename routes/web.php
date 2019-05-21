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



Route::get('/about', function () {
    return view('profile');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/test', function () {
    return view('templates.default');
});

Route::get('/', 'PostController@index');

Route::get('/post/{post}', 'PostController@show')->name('post.show');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function() {

    Route::get('/post', 'Admin\PostController@index')->name('admin.post.index');

    Route::get('/post/create', 'Admin\PostController@create')->name('admin.post.create');

    Route::post('/post', 'Admin\PostController@store')->name('admin.post.store');

    Route::get('/post/{post}/edit', 'Admin\PostController@edit')->name('admin.post.edit');

    Route::put('/post/{post}/edit', 'Admin\PostController@update')->name('admin.post.update');

    Route::delete('/post/{post}', 'Admin\PostController@destroy')->name('admin.post.destroy');

});
