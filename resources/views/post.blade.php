@extends('template.template')
@section('content')
                  <div class="content section single-post-page" id="content">   
                     <div class="post-outer">
                        <div class="post hentry uncustomized-post-template">
                           <h1 class="the-main-title single-post-title">{{$post->title}}</h1>
                           <div class="post-meta">
                              <div class="small">Posted by <a href="" rel="author" title="Posts bySora Templates">{{$post->user->firstname}} {{$post->user->lastname}}</a> in 
                                 <span class="post-categories">
                                 <a href="" rel="tag">Minimal</a>,
                                 <a href="" rel="tag">Photography</a>,
                                 <a href="" rel="tag">Taste</a>,
                                 <a href="" rel="tag">Web design</a>
                                 </span>
                              </div>
                           </div>
                           <div class="post-body">        
                              <a href="{{url('images/'.$post->photo)}}" class="main-image"><img src="{{asset('images/'.$post->photo)}}"></a>
                              <p>
                                {{$post->contents}}
                              </p>
                                 
                           </div>
                            <div id="related-posts"
                              <h5>Related Posts</h5>
                              <ul>
                                 <li>
                                    <a href="" title="Make your personal website" rel="nofollow"><img alt="Make your personal website" src="{{asset('images/related01.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Make your personal website</a>
                                 </li>
                                 <li>
                                    <a href="" title="Commodo omittam copiosae " rel="nofollow"><img alt="Commodo omittam copiosae " src="{{asset('images/related02.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Commodo omittam copiosae </a>
                                 </li>
                                 <li>
                                    <a href="" title="Mea labores feugait temporibus" rel="nofollow"><img alt="Mea labores feugait temporibus" src="{{asset('images/related03.jpg')}}"></a>
                                    <div class="clr"></div>
                                    <a class="related-title" href="">Mea labores feugait temporibus</a>
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <div class="comments" id="comments">
                           <h4>{{$post->comments->count()}} comments:</h4>
                           <div class="comments-content">
                              <ol>
                                 @foreach($post->comments as $comment)
                                   @include("template.comments",["comment"=>$comment])
                                @endforeach
                              </ol>
                              <h4><a href="">Add comment</a></h4>
                              <div class="comment-replybox-thread">
                                 <form class="pure-form pure-form-stacked">
                                    <fieldset>
                                      <label for="comment">Comment</label>
                                      <textarea id="comment" class="pure-input-1" placeholder=""></textarea>
                                      <button type="submit" class="pure-button pure-button-primary">Publish</button>
                                    </fieldset>
                              </form>
                              </div>
                                               
                           </div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     @include('template.pager')
                  </div>
@stop
