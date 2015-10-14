<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /*===============================================================*/
    /*                     Shows all posts                           */
    /*===============================================================*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = \App\Models\Post::all();
        return view('allposts',compact('post'));
    }
    /*================================================================*/

    
    /*================================================================*/
    /*                    Shows create post form                      */
    /*================================================================*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPost');
    }
    /*=================================================================*/
    
    
    /*=================================================================*/
    /*                  Adds post to the DB                            */
    /*=================================================================*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = \App\Models\Post::create($request->all());
        $filename = \Carbon\Carbon::now()->timestamp."_post.jpg";
        $request->file('photo')->move('images',$filename);
        $post->photo = $filename;
        $post->save();
        return redirect('posts/'.$post->id);
    }
    /*=================================================================*/

    
    /*=================================================================*/
    /*                    shows post by id                             */
    /*=================================================================*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Models\Post::find($id);
        return view('post',compact('post'));
    }
    /*=================================================================*/
    
    
    /*=================================================================*/
    /*                   Edits post by id                              */
    /*=================================================================*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /*=================================================================*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = \App\Models\Post::find($id);
        $value = $request->input("value");
        $field = $request->input("field");
        
        $post->$field = $value;
        $post->save();
        return $value;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
