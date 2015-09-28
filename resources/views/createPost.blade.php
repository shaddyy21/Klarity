@extends('template.template')

@section('content')
			<div class="main-heading">
                <h2>Register</h2>
             </div>
			{!! Form::open(array('url' => 'posts', 'files'=>true)) !!}
				<fielset>
					{!! Form::label('title', 'Title:', array('class' => 'labels')) !!}
					{!! Form::textarea('title', null, array('class' => 'inputsText')) !!}
                    {!! $errors->first('title','<p class="error">:message</p>')!!}
                    
                    {!! Form::label('contents', 'Content:', array('class' => 'labels')) !!}
					{!! Form::textarea('contents', null, array('class' => 'inputsText')) !!}
                    {!! $errors->first('contents','<p class="error">:message</p>')!!}
                    
					{!! Form::label('photo', 'Photo:', array('class' => 'labels')) !!}
					{!! Form::file('photo', array('class' => 'inputs')) !!}
					{!! $errors->first('photo','<p class="error">:message</p>')!!}
                    
                    @foreach(\App\Models\Label::all() as $labels)
                    {!! Form::checkbox('labels[]',$labels->id, array('class' => 'labels')) !!}
                    {!! Form::label('', $labels->label, array('class' => 'labels')) !!}
                    
                    @endforeach


                    <button type="submit" class="sub" class="pure-button pure-button-primary">Register</button>
				</fielset>
            {!! Form::close() !!}
            
@stop