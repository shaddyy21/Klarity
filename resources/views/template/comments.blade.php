                                <li class="comment">
                                    <div class="avatar-image-container"><img src="{{asset('images/avatar01.png')}}"></div>
                                    <div  class="comment-block">
                                       <div class="comment-header">
                                          <cite class="user"><a  href=""></a></cite>
                                          <span class="icon user"></span>
                                          <span class="datetime secondary-text">
                                          <a rel="nofollow" href="">{{$comment->created_at->format('l jS \\of F Y h:i A')}}</a></span>
                                       </div>
                                       <p class="comment-content">{{$comment->comment}}</p>
                                       <div class="comment-actions">
                                          <a class="pure-button pure-button-primary">Reply</a>
                                          <a class="pure-button pure-button-primary" href="">Delete</a>
                                       </div>
                                    </div>
                                </li>