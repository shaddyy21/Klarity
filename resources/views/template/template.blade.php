<!DOCTYPE html>
<html class="v2">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta content="blogger" name="generator">
      <link href="http://klarity-soratemplates.blogspot.in/favicon.ico" rel="icon" type="image/x-icon">
      <title>Klarity</title>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
      <link href="css/css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/forms-nr-min.css">
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/buttons-min.css">
     <link rel="stylesheet" href="{{asset('css/styles.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
   </head>
   <body>
      <div class="container">


         <!-- Header  -->
         <div class="header-wrapper white">
            <div class="ct-wrapper">
               <div class="header section" id="header">
                  <div id="header-inner">
                     <div class="titlewrapper">
                        <h1 class="title">
                           <a href="{{url('/')}}">Klarity</a>
                        </h1>
                     </div>
                     <div class="descriptionwrapper">
                        <p class="description"><span>Fashion Book</span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clr"></div>


         <!-- Main Menu -->
         <div class="nav-menu white">
            <div class="ct-wrapper">
               <ul>
                  <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href=""><i class="fa fa-pencil"></i> Blog</a></li>
                  <li><a href=""><i class="fa fa-briefcase"></i></span> Portfolio</a></li>
                  @if(Auth::check())
                      <li class="clear"><a href="{{url('users/'.Auth::user()->id)}}">Account <i class="icon-user"></i></a></li>
                      <li><a href="{{url('logout')}}">Logout <i class="icon-lock"></i></a></li>
                  @else
                      <li><a href="{{url('login')}}"><i class="fa fa-sign-in"></i></span> Log-in</a></li>
                      <li><a href="{{url('users/create')}}"><i class="fa fa-user"></i></span> Register</a></li>
                  @endif
               </ul>
            </div>
            <div class="clr"></div>
         </div>


         <!-- Main section -->
         <div class="ct-wrapper page-wrapper">
            <div class="outer-wrapper">
               <div class="main-wrapper">
                  @yield('content')
               </div>
               
               <div class="sidebar-wrapper">
                  <div class="sidebar section" id="sidebar">
                     @include('template.search')
                     @include('template.trendings')
                     @include('template.labels')
                  </div>
               </div>
      
               <div class="clr"></div>
            </div>
         </div>


         <!-- Footer section -->
         <div id="footer">
            <div class="ct-wrapper">
               <div class="footer section" id="footer1">
               @include('template.about')
               </div>
               <div class="footer section" id="footer2">
               @include('template.portfolios')
               </div>
               <div class="footer section" id="footer3">
               @include('template.contact')
               </div>
               <div class="clr"></div>
            </div>
         </div>


         <!-- page footer credits-->
         <div class="footer-credits">
            <div class="ct-wrapper">
               <p>
                  © Copyright 2015
                  <a href="images//Klarity.html">Klarity</a>
                  <br>
                  <span></span>
               </p>
               <div id="mycontent">Created By <a href="http://www.soratemplates.com/" rel="dofollow" target="_blank" title="Blogger Templates">Sora Templates</a> and <a href="http://mybloggerthemes.com/" rel="dofollow" target="_blank" title="Blogger Templates">My Blogger Themes</a></div>
               <p></p>
            </div>
         </div>
         <!-- end of page footer credits -->


      </div>
      <!--==========jQuery==============================-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('js/jQScript.js')}}"></script>
    <!--==================================================  -->
   </body>
</html>