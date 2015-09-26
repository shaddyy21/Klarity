@extends('template.template')

@section('title')
    Edit User
@stop

@section('content')
			<div class="main-heading">
                <h2>Edit Profile</h2>
            </div>
			{!! Form::model($user,array('url' => 'users/'.$user->id,'method'=> 'put')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name', array('class' => 'editLabel')) !!}
					{!! Form::text('firstname', null, array('class' => 'editInput')) !!}
                    {!! $errors->first('firstname','<p class="error">:message</p>')!!}
					
					{!! Form::label('lastname', 'Last Name', array('class' => 'editLabel')) !!}
					{!! Form::text('lastname', null, array('class' => 'editInput')) !!}
                    {!! $errors->first('lastname','<p class="error">:message</p>')!!}
					
					{!! Form::label('email', 'E-mail', array('class' => 'editLabel')) !!}
					{!! Form::text('email', null, array('class' => 'editInput')) !!}
					{!! $errors->first('email','<p class="error">:message</p>')!!}
					
					
					<input type="submit" class="sub" class="pure-button pure-button-primary" value="Update">
				</fielset>
				
            {!! Form::close() !!}
@stop