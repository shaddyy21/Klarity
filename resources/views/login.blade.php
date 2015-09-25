@extends('template.template')         
@section('content')         
                  <div class="content section form-page">   

                     <div class="main-heading">
                        <h2>Login</h2>
                     </div>

                     {!! Form::open(['url' => 'login']) !!}
                         <fieldset>
                            {!! Form::label('emaile', 'E-mail:', array('class'=>'labels')) !!}
                            {!! Form::text('email', null, array('class'=>'inputs')) !!}
                            {!! $errors->first('email','<p class="error">:message</p>')!!}

                            {!! Form::label('password', 'Password:', array('class'=>'labels')) !!}
                            {!! Form::password('password', array('class'=>'inputs')) !!}
                            {!! $errors->first('password','<p class="error">:message</p>')!!}

                            <p class="error">{{Session::get('message')}}</p>

                             <button type="submit" class="sub" class="pure-button pure-button-primary">Sign in</button>
                         </fieldset>
                     {!! Form::close() !!}

                  </div>
@stop
