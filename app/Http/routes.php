<?php

/*
|==========================================================================
|                         Application Routes
|==========================================================================
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*==========================================================================*/
/*                            All Posts                                     */                              
/*==========================================================================*/
    Route::get('/', function () {
       $post = \App\Models\Post::all();
       return $post;
//     return view('allposts');
    });
/*==========================================================================*/


Route::get('post', function () {
    return view('post');
});

Route::get('label', function () {
    return view('label');
});

Route::get('login', function () {
    return view('login');
});