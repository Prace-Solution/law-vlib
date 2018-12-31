@extends('lecturer.layouts.panel')


@section('title', 'Login Page')

@section('head_meta')
@endsection

@section('head_styles')

 <!-- bootstrap-css -->
  <link rel="stylesheet" href="../custom/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../css/cdn.3.3.7.bootstrap.min.css" >

  <!-- //bootstrap-css -->
  <!-- ../custom CSS -->
  <link href="../custom/css/style.css" rel='stylesheet' type='text/css' >
  <link href="../custom/css/style-responsive.css" rel="stylesheet">
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="../custom/css/font.css" type="text/css">
  <link href="../../custom/css/font-awesome.css" rel="stylesheet">
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
  <script src="../custom/js/jquery2.0.3.min.js"></script>
@endsection

@section('main_content_header')
@endsection



@section('body_main_content')
<section id="container main-wrapper" style="overflow-y: scroll;">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="/student/home" class="logo">
        Student
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
      {{--
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
             <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
     --}}
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-square"></i>
                <span class="badge  bg-success">4</span>
            </a>
            {{-- <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="../custom/images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul> --}}
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell"></i>
                <span class="badge bg-warning">3</span>
            </a>
            {{-- <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul> --}}
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="../custom/images/2.png">
                {{-- {!!{$data}!!} --}}
                <span class="username">{{ @Auth::guard("student")->user()->fullname }}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{ @Auth::guard("student")->logout() }}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="/admin/home">
                        <i class="fa fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                       <i class="fa fa-clipboard-list"> </i>
                        <span>Courses</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Add Course</a></li>
                        <li><a href="#">View Course</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Learning Materials Upload</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Course</a></li>
                        <li><a href="#">Resource</a></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                       <i class="fa fa-eye"> </i>
                        <span>View Materials Uploaded</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Course</a></li>
                        <li><a href="#">Resource</a></li>
                        <li><a href="#">Others</a></li>
                    </ul>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Students Record</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Undergraduate First Degree</a></li>
                        <li><a href="#">Post First Degree</a></li>
                    </ul>
                </li>
                <li class="sub-menu">

                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Lecturers Record</span>
                    </a>
                </li>



            {{--
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Form Elements</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
            <li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="chartjs.html">Chart js</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.html">Google Map</a></li>
                        <li><a href="vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
            <li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li> --}}
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<br><br><br>
<section id="main-content">
  <section id="id-wrapper" class="wrapper">
   <div id="inner-wrapper" class="inner-wrapper">
      <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Course Material Upload</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"  action="{{ route('admin.upload') }}">
                            {{ csrf_field() }}

                            <br><br>

                             <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">

                                   <label for="course_code_option" class="col-md-4 control-label">Course Code:</label>
                                   <div class="col-md-6">

                                       <select  onchange="requestSemOption.call(this)"   class="form-control" id="course_code_option"  name="course_code_option">
                                           <option value="1">GF381</option>
                                           <option value="2">GF383</option>
                                           <option value="3">GF383</option>
                                           <option value="4">GF384</option>
                                       </select>
                                    </div>
                             </div>

                              <div class="form-group{{ $errors->has('available_in') ? ' has-error' : '' }}">

                                   <label for="available_in" class="col-md-4 control-label">Available In:</label>
                                   <div class="col-md-6">

                                       <select  onchange="requestSemOption.call(this)"   class="form-control" id="available_in"  id="available_in">
                                           <option value="0">Any</option>
                                           <option value="1">SEMESTER 1</option>
                                           <option value="2">SEMESTER 2</option>
                                       </select>
                                    </div>
                             </div>

                              <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"
                                           value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <TextArea id="description" class="form-control" name="description"   placeholder ="Enter the material description here"  required autofocus>
                                            {{ old('description') }}
                                    </TextArea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                           <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                <label for="slug" class="col-md-4 control-label">Slug</label>

                                <div class="col-md-6">
                                    <input id="slug" type="text" class="form-control" name="slug"
                                           value="{{ old('slug') }}" required autofocus>

                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('uploadable') ? ' has-error' : '' }}">
                                <label for="uploadable" class="col-md-4 control-label">Uploadable Pdf File</label>

                                <div class="col-md-6">
                                    <input id="uploadable" type="file" class="form-control" name="uploadable" required>

                                    @if ($errors->has('uploadable'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('uploadable') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                              <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                                      Submit
                                    </button>

                                   {{--
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }} ">
                                        Forgot Your Password?
                                    </a>
                                   --}}
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>


  {{--
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                     </label>
                </div>
             </div>
        </div>
   --}}

{{--  --}}
<!-- Default form login -->

               {{-- <div class="row fs">  <!-- The fileinput-button span is used to style the file input field as button -->
				   <div class="col-sm-12">

						<span class="btn btn-success fileinput-button">
							<i class="glyphicon glyphicon-plus"></i>
							<span>Select file(s)...</span>

							<input id="upload" type="file" name="upload[]" multiple>

						</span>

						   <!--
						    The file input field used as target for the file upload widget
						 	<input id="upload" type="file" name="upload[]" multiple>
								 -->
					</div>
				</div>

                <div class="row fs">
					    <div class="col-sm-12">
					  	  <span id="btnSubmit" class="btn btn-primary button">
							<i class="glyphicon glyphicon-send"></i>
							<span>Upload Document</span>
							<!-- The file input field used as target for the file upload widget -->
						   </span>
					    </div>
				</div>

            --}}

<!-- Default form login -->
{{--  --}}

{{-- Notification section --}}
    {{--

     <div class="col-md-6 w3agile-notifications">
      <div class="notifications">
        <!--notification start-->

          <header class="panel-heading">
            Notification
          </header>
          <div class="notify-w3ls">
            <div class="alert alert-info clearfix">
              <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  Urgent meeting for next proposal
                </p>
              </div>
            </div>
            <div class="alert alert-danger">
              <span class="alert-icon"><i class="fa fa-facebook"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> mentioned you in a post </li>
                  <li class="pull-right notification-time">7 Hours Ago</li>
                </ul>
                <p>
                  Very cool photo jack
                </p>
              </div>
            </div>
            <div class="alert alert-success ">
              <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender">You have 5 message unread</li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                </p>
              </div>
            </div>
            <div class="alert alert-warning ">
              <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead</li>
                  <li class="pull-right notification-time">5 Days Ago</li>
                </ul>
                <p>
                  Next 5 July Thursday is the last day
                </p>
              </div>
            </div>
            <div class="alert alert-info clearfix">
              <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
              <div class="notification-info">
                <ul class="clearfix notification-meta">
                  <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> send you a mail </li>
                  <li class="pull-right notification-time">1 min ago</li>
                </ul>
                <p>
                  Urgent meeting for next proposal
                </p>
              </div>
            </div>

          </div>

        <!--notification end-->
        </div>
      </div>
    --}}

  </section>
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p style="color: rgb(0, 0, 102);/*#2c702d*/; text-align:center"> &copy;<?php echo date("Y");?>, University of Ghana, Law School. All rights reserved | Design by <a href="http://crust-media.com">Crust</a></p>
      </div>
      </div>
  <!-- / footer -->
</section>
@endsection

@section('main_content_footer')
@endsection

@section('body_footer')
@endsection


@section('body_scripts')
  <script src="../custom/js/bootstrap.js"></script>
  <script src="../custom/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../custom/js/scripts.js"></script>
  <script src="../custom/js/jquery.slimscroll.js"></script>
  <script src="../custom/js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="../custom/js/jquery.scrollTo.js"></script>
   <!-- <script src="js/app.js"></script> -->
@endsection
