@extends('layouts.app')

@section('title', 'Login Page')

@section('head_meta')
@endsection

@section('head_styles')

 <!-- bootstrap-css -->
  <link rel="stylesheet" href="custom/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/cdn.3.3.7.bootstrap.min.css" >

  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="custom/css/style.css" rel='stylesheet' type='text/css' />
  <link href="custom/css/style-responsive.css" rel="stylesheet"/>
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="custom/css/font.css" type="text/css"/>
  <link href="custom/css/font-awesome.css" rel="stylesheet"> 
  <!-- //font-awesome icons -->
 
  <style type="text/css">
    .w3layouts-main{  
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0014ac+0,010e73+30,010e73+52,010e73+81,00108a+100 */
    background: #0014ac; /* Old browsers */
    background: -moz-linear-gradient(45deg, #0014ac 0%, #010e73 30%, #010e73 52%, #010e73 81%, #00108a 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, #0014ac 0%,#010e73 30%,#010e73 52%,#010e73 81%,#00108a 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, #0014ac 0%,#010e73 30%,#010e73 52%,#010e73 81%,#00108a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0014ac', endColorstr='#00108a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    }
  </style>
@endsection

@section('head_scripts')
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- jquery  script -->
  <script src="custom/js/jquery2.0.3.min.js"></script>
@endsection

@section('website_name', 'UG Law VirtuaLib')

@section('nav_links')
 <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
              <li><a href="#">Page 1-2</a></li>
              <li><a href="#">Page 1-3</a></li>
            </ul>
          </li> -->
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Instructions</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
           <li><a href="#"><span class="glyphicon glyphicon-header"></span></a></li> 
        </ul>

@endsection

@section('main_content_header')
@endsection


@section('body_main_content')

<div class="container backbg" >

  <!-- login section -->
  <br><br><br>
   @if (session('success'))
     <div class="alert alert-success alert-dismissable">
        {{ session('success') }}
     </div>
     @elseif (session('fail'))
     <div class="alert alert-danger alert-dismissable">
        {{ session('fail') }}
     </div>
   @endif
  <div class="log-w3">
    <div class="w3layouts-main">
      <h2>Sign In Now</h2>
        <form action="/login" method="post">
          {{csrf_field()}}
          <br><br>
          <input type="email" class="ggg" name="email" placeholder="Email" required>
          <input type="password" class="ggg" name="password" placeholder="Password" required>

          <div>
            <span style="margin-left: 2px; margin-top: 18px;">Login As: </span>
            <select class="decorated" name="role" style="margin-top: 10px;" > 

            @foreach($roles as $role)  
              <option value="{{$role}}">{{$role}}</option>
            @endforeach
          </select>
          </div>
          

         <!--  <span ><input type="checkbox" />Remember Me</span> -->
             <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
            <div class="clearfix"></div>
             <p><a href="/forgotPassword">Forgot Password?</a></p>
        </form>
         <p><hr><hr></p>
        <p>Don't Have an Account ?<a href="/register">Request an account</a></p>

     </div>
   </div> 

   <div class="text-center">Designed by Crust-Media (c) 2018, All rights reserved.</div>
 </div>
@endsection

@section('main_content_footer')
@endsection

@section('body_footer')
@endsection


@section('body_scripts')
  <script src="custom/js/bootstrap.js"></script>
  <script src="custom/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="custom/js/scripts.js"></script>
  <script src="custom/js/jquery.slimscroll.js"></script>
  <script src="custom/js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="custom/js/jquery.scrollTo.js"></script>
   <!-- <script src="js/app.js"></script> -->
@endsection
