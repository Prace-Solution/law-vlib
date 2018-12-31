@extends('layouts.panel')


@section('title', 'Login Page')

@section('head_meta')
@endsection

@section('head_styles')

 <!-- bootstrap-css -->
  <link rel="stylesheet" href="custom/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/cdn.3.3.7.bootstrap.min.css" >

  <!-- //bootstrap-css -->
  <!-- Custom CSS -->
  <link href="custom/css/style.css" rel='stylesheet' type='text/css' >
  <link href="custom/css/style-responsive.css" rel="stylesheet">
  <!-- font CSS -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- font-awesome icons -->
  <link rel="stylesheet" href="custom/css/font.css" type="text/css">
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

@section('main_content_header')
@endsection


@section('body_main_content')
<section id="container main-wrapper" style="overflow-y: scroll;">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="/developer" class="logo">
        Developer
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
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="custom/images/3.png"></span>
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
                        <span class="photo"><img alt="avatar" src="custom/images/1.png"></span>
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
                        <span class="photo"><img alt="avatar" src="custom/images/3.png"></span>
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
                        <span class="photo"><img alt="avatar" src="custom/images/2.png"></span>
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
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
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

            </ul>
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
                <img alt="" src="custom/images/2.png">
                <span class="username">Johnson Mark Kwaku Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="/"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a href="/developer">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
            <li><a href="typography.html">Typography</a></li>
            <li><a href="glyphicon.html">glyphicon</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Font awesome </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
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
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
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
  </section>
 <!-- footer -->
      <div class="footer">
      <div class="wthree-copyright">
        <p style="color: rgb(0, 0, 102);/*#2c702d*/;"> &copy;<?php echo date("Y");?>, University of Ghana, Law School. All rights reserved | Design by <a href="http://crust-media.com">Crust</a></p>
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
  <script src="custom/js/bootstrap.js"></script>
  <script src="custom/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="custom/js/scripts.js"></script>
  <script src="custom/js/jquery.slimscroll.js"></script>
  <script src="custom/js/jquery.nicescroll.js"></script>
  <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
  <script src="custom/js/jquery.scrollTo.js"></script>
   <!-- <script src="js/app.js"></script> -->
@endsection
