@extends('student.layouts.panel')


@section('title', 'Admin| Home ')

@section('head_meta')
<meta name="_token" content="{{ csrf_token() }}">
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
   {{-- <link href="../../custom/css/font-awesome-all.css" rel="stylesheet" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  --}}
  <link rel="stylesheet" href="../custom/css/font.css" type="text/css">
  <link href="../../custom/css/font-awesome.css" rel="stylesheet"> 
 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

     <!-- load icon font -->
    {{-- <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.7/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- load MUI -->
    <link href="//cdn.muicss.com/mui-0.9.40/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.9.40/js/mui.min.js"></script>
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

{{-- style="overflow-y: scroll; --}}
@section('body_main_content')
<section id="main-wrapper" class='main-wrapper'>
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="{{ route('admin.home') }}" class="logo">
        Admin
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
     
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-square"></i>
                <span class="badge  bg-success">4</span>
            </a>
          
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell"></i>
                <span class="badge bg-warning">3</span>
            </a>
          
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
                <span class="username">{{ @Auth::guard("admin")->user()->fullname }}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{ route('admin.logout') }}"><i class="fa fa-key"></i> Log Out</a></li>
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
                    <a href="#" id="admin-dashboard">
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
                        <li id="admin-course-add"><a href="#">Add Course</a></li>
                        <li id="admin-course-view"><a href="#">View Course</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Learning Materials Upload</span>
                    </a>
                    <ul class="sub">
                        <li id="admin-course-material-upload"><a href="#">Course</a></li>
                        <li id="admin-course-resource-material-upload-ui"><a href="#">Resource</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                       <i class="fa fa-eye"> </i>
                        <span>View Materials Uploaded</span>
                    </a>
                    <ul class="sub">
                        <li id="admin-course-material-view"><a >Course</a></li>
                        <li id="admin-course-resource-material-view"><a >Resource</a></li>
                    </ul>
                </li>

            
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Students Record</span>
                    </a>
                    <ul class="sub">
                        <li id="admin-student-add-ui"><a >Add Student</a></li>
                        <li id="admin-student-undergrad-view"><a >View Undergraduate</a></li>
                        <li id="admin-student-postgrad-view" ><a>View Post-First Degree</a></li>
                    </ul>
                </li>

                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Lecturers Record</span>
                    </a>
                    <ul class="sub">
                        <li id="admin-lecturer-add-ui"><a>Add Lecturer</a></li>
                        <li id="admin-lecturer-view"><a>View Lecturers</a></li>
                    </ul>
                </li>

                 <li class="sub-menu">
                    <a href="javascript:;">
                       <i class="fa fa-clipboard-list"> </i>
                        <span>Departments</span>
                    </a>
                    <ul class="sub">
                        <li id="admin-department-add"><a href="#">Add</a></li>
                        <li id="admin-department-view"><a href="#">View</a></li>
                    </ul>
                </li>
              
                {{-- <li class="sub-menu" id="admin-lecturer-view">
                
                    <a>
                        <i class="fa fa-th"></i>
                        <span>Lecturers Record</span>
                    </a>
                </li> --}}

                

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
{{-- <br><br><br> --}}
<section id="main-content">
   <section id="id-wrapper" class="wrapper">
  
   <div id="inner-wrapper" class="inner-wrapper">
    {{-- This is the actual body of the document start --}}
       
    {{-- This is the actual body of the document end --}}
   </div>

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
  <script src="../custom/js/content-observer.js"></script>


   <!-- <script src="js/app.js"></script> -->
@endsection
