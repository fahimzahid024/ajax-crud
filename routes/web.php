<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('post','PostController');
Route::get('all/post','PostController@allpost')->name('all.post');
