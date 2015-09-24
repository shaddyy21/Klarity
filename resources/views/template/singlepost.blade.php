                        <!-- Individual post -->
                        <div class="post hentry">
                           <div class="post-wrapper left col1">
                              <div class="post-info">
                                 <div class="date">
                                    <span class="month">{{$post->created_at->format('M')}}</span>
                                    <span class="day">{{$post->created_at->day}}</span>
                                    <span class="year"> {{$post->created_at->year}}</span>
                                 </div>
                                 <a class="comment-number" href="">
                                 <span class="comment-num">{{$post->comments->count()}}</span>
                                 <span>Comments</span>
                                 </a>
                              </div>
                           </div>
                           <div class="post-wrapper right col2">
                              <div class="post-body">
                                 <div class="featimg left" style="position:relative;">
                                    <div class="item-label">
                                       <span><a href="label/Minimal" rel="tag"></a></span>
                                    </div>
                                    <div class="item-thumb entry-image" style="position:relative;">
                                       <a href="">
                                          <img src="{{asset('images/main01.jpg')}}" style="max-width:100%;" alt="Commodo omittam copiosae ">
                                       </a>
                                    </div>
                                    <div class="entry-feat-overlay">
                                    </div>
                                 </div>
                                 <div class="clr"></div>
                                 <div class="post-meta">
                                    <div class="small">Posted by <a href="#" rel="author" title="Posts by{{$post->user->firstname}} {{$post->user->lastname}}">{{$post->user->firstname}} {{$post->user->lastname}}</a> in 
                                       <span class="post-categories">
                                       <a href="Minimal" rel="tag">Minimal</a>,
                                       <a href="Photography" rel="tag">Photography</a>,
                                       <a href="Taste" rel="tag">Taste</a>,
                                       <a href="Web%20design" rel="tag">Web design</a>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="post-title">
                                   <h2><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h2>
                                 </div>
                                 <div class="item-content">
                                    <p style="margin:0;">
                                        {{$post->content}}
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
