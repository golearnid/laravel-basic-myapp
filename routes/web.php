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

Route::get('/','HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/contact','ContactController@index')->name('contact');

/*
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::redirect('/test','/about');

Route::get('/test/{name}', function( $name ){
    echo $name;
});

Route::get('/view/{id?}', function( $id = -1 ){
    echo $id;
});
*/