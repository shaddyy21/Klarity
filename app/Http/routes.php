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
/*                            Shows All Posts                               */
/*==========================================================================*/
    Route::get('/', function () {
       $post = \App\Models\Post::all();
//       return $post;
     return view('allposts',['post'=>$post]);
    });
/*==========================================================================*/


/*==========================================================================*/
/*                            Shows Posts by ID                             */
/*==========================================================================*/
    Route::get('posts/{id}', function ($id) {
        $post = \App\Models\Post::find($id);
        return view('post',compact('post'));
    });
/*==========================================================================*/


/*==========================================================================*/
/*                           Shows All Comments                             */
/*==========================================================================*/
    Route::get('comments',function(){
        $comment = \App\Models\Comment::all();
        return $comment;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                           Shows Comments by ID                           */
/*==========================================================================*/
    Route::get('comments/{id}',function($id){
        $comment = \App\Models\Comment::find($id);
        return $comment;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                          Shows All Labels                                */
/*==========================================================================*/
    Route::get('labels', function(){
        $label = \App\Models\Label::all();
        return $label;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                          Shows Labels by ID                              */
/*==========================================================================*/
    Route::get('labels/{id}', function($id){
        $label = \App\Models\Label::find($id);
        return $label;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                          Shows All Users                                 */
/*==========================================================================*/
    Route::get('users', function(){
        $user = \App\Models\User::all();
        return $user;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                          Shows Users by ID                               */
/*==========================================================================*/
    Route::get('users/{id}', function($id){
        $user = \App\Models\User::find($id);
        return $user;
    });
/*==========================================================================*/


/*==========================================================================*/
/*                          Shows All Label_Post                            */
/*==========================================================================*/
    Route::get('labelnpost', function(){
        $label_post = \App\Models\Label_Post::all();
        return $label_post;
    });
/*==========================================================================*/


Route::get('login', function () {
    return view('login');
});