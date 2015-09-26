<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth',['except' => ['create','store']]);
//        $this->middleware('account',['except' => ['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /*===========================================================================*/
    /*                        Shows create user form                             */
    /*===========================================================================*/
    /*
     * Show the form for creating a new resource.
     *
     * @return Response
     */
        public function create()
        {
           return view('createUser');
        }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                        Adds created user to DB                            */
    /*===========================================================================*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
        public function store(\App\Http\Requests\CreateUserRequest $request)
        {
            $user = \App\Models\User::create($request->all());
            $user->password = bcrypt($user->password);
            $user->save();
            return redirect('users/'.$user->id);
        }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                        Shows users profile by ID                          */
    /*===========================================================================*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
        public function show($id)
        {
            $user = \App\Models\User::find($id);
            return view('users',compact('user'));
        }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                        Shows edit profile by ID                           */
    /*===========================================================================*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
        public function edit($id)
        {
            $user = \App\Models\User::find($id);
            return view('editUser',compact('user'));
        }
    /*===========================================================================*/
    
    
    /*===========================================================================*/
    /*                        Adds edited profile by ID to DB                    */
    /*===========================================================================*/
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
        public function update(\App\Http\Requests\UpdateUserRequest $request, $id)
        {
            $user = \App\Models\User::find($id);
            $user->fill($request->all());
            $user->save();
            return redirect('users/'.$user->id);
        }
    /*===========================================================================*/


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
