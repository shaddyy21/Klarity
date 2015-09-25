@extends('template.template')

@section('content')
			<h2 class="cHead">Create new Account</h2>
			{!! Form::open(array('url' => 'users')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name:', array('class' => 'labels')) !!}
					{!! Form::text('firstname', null, array('class' => 'inputs')) !!}
                    {!! $errors->first('firstname','<p class="error">:message</p>')!!}
                    
                    {!! Form::label('lastname', 'Last Name:', array('class' => 'labels')) !!}
					{!! Form::text('lastname', null, array('class' => 'inputs')) !!}
                    {!! $errors->first('lastname','<p class="error">:message</p>')!!}
					
					{!! Form::label('email', 'E-Mail:', array('class' => 'labels')) !!}
					{!! Form::text('email', null, array('class' => 'inputs')) !!}
                    {!! $errors->first('email','<p class="error">:message</p>')!!}
					
					{!! Form::label('username', 'User Name:', array('class' => 'labels')) !!}
					{!! Form::text('username', null, array('class' => 'inputs')) !!}
					{!! $errors->first('username','<p class="error">:message</p>')!!}
					
					{!! Form::label('password', 'Password:', array('class' => 'labels')) !!}
					{!! Form::password('password', array('class' => 'inputs')) !!}
                    {!! $errors->first('password','<p class="error">:message</p>')!!}
					
					{!! Form::label('password_confirmation', 'Confirm Password:', array('class' => 'labels')) !!}
					{!! Form::password('password_confirmation', array('class' => 'inputs')) !!}
                    {!! $errors->first('password_confirmation','<p class="error">:message</p>')!!}
					
					<input type="submit" id="sub" value="Create account">
				</fielset>
				
            {!! Form::close() !!}
@stop