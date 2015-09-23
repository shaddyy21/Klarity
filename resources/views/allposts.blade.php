@extends('template.template')         
@section('content')         
                  <div class="content section" id="content">
                    @foreach($post as $post)
                       @include("template.singlepost",["post"=>$post])
                    @endforeach
                     </div>
                     @include('template.pager')  
                  </div>
@stop
