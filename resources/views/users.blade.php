@extends('template.template')

@section('title')
    My Profile
@stop

@section('content')
			<div class="main-heading">
                <h2>My Profile</h2>
            </div>
			
			<h5 class="proLabel">First Name:</h5>
			<h4 class="proInput">{{$user->firstname}}</h4>
			
			<h5 class="proLabel">Last Name:</h5>
			<h4 class="proInput">{{$user->lastname}}</h4>
			
			<h5 class="proLabel">E-mail:</h5>
			<h4 class="proInput">{{$user->email}}</h4>
			
			<h5 class="proLabel">User Name:</h5>
			<h4 class="proInput">{{$user->username}}</h4>
			
			
            <a href="{{url('users/'.Auth::user()->id.'/edit')}}" class="sub">Edit Profile</a>
			
			
@stop