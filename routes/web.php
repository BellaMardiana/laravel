<?php

use Illuminate\Support\Facades\Route;
use App\Subject;
use App\Student;
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

Route::prefix('admin')->name('admin.')->middleware('auth','role:Admin')->group(function() {

    Route::get('/post', 'Admin\PostController@index')->name('post.index');

    Route::get('/post/create', 'Admin\PostController@create')->name('post.create');

    Route::post('/post', 'Admin\PostController@store')->name('post.store');

    Route::get('/post/{post}/edit', 'Admin\PostController@edit')->name('post.edit');

    Route::put('/post/{post}/edit', 'Admin\PostController@update')->name('post.update');

    Route::delete('/post/{post}', 'Admin\PostController@destroy')->name('post.destroy');


    Route::get('/category', 'Admin\CategoryController@index')->name('category.index');

    Route::get('/category/create', 'Admin\CategoryController@create')->name('category.create');

    Route::post('/category', 'Admin\CategoryController@store')->name('category.store');

    Route::get('/category/{category}/edit', 'Admin\CategoryController@edit')->name('category.edit');

    Route::put('/category/{category}/edit', 'Admin\CategoryController@update')->name('category.update');

    Route::delete('/category/{category}', 'Admin\CategoryController@destroy')->name('category.destroy');
    
    Route::get('/category/{category}/post', 'Admin\CategoryPostController@index')->name('category.post');

    Route::get('/user/{user}/post', 'Admin\PostController@showUser')->name('user.post');

});

Route::get('test',function(){
   // $student = App\Student::find(1);
    $subject = Subject::find(2);
    //dd($student->subjects);
    dd($subject);
});
