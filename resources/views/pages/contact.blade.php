<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/cdn.3.3.7.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    <!--     <link rel="stylesheet" href="css/responsive-nav.css">
        <script src="js/responsive-nav.js"></script> -->
      
        <!-- Styles -->
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
        <style>
            body {margin:0;}

            .topnav {
              overflow: hidden;
              background-color: #D98B24;
            }

            .topnav a {
              float: left;
              display: block;
              color: #f2f2f2;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
              font-size: 17px;
            }

            .topnav a:hover {
              background-color: #ddd;
              color: black;
            }

            .active {
              background-color: #161616;
              color: white;
            }

            .topnav .icon {
              display: none;
            }

            @media screen and (max-width: 600px) {
              .topnav a:not(:first-child) {display: none;}
              .topnav a.icon {
                float: right;
                display: block;
              }
            }

            @media screen and (max-width: 600px) {
              .topnav.responsive {position: relative;}
              .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
              }
              .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
              }

            }
    </style>
    </head>
    <body>
    <!-- Page navigation Links -->
    <!-- <nav class="navbar navbar-inverse">
        <div class="container-fluid">
           <div class="navbar-header">
              <a class="navbar-brand" href="#">WebSiteName</a>
           </div>
           <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Page 1</a></li>
              <li><a href="#">Page 2</a></li>
              <li><a href="#">Page 3</a></li>
            </ul>
        </div>
     </nav> -->

     <div class="topnav" id="myTopnav">
      <a href="/home" class="active">Home</a>
      <a href="/news">News</a>
      <a href="/contact">Contact</a>
      <a href="/about">About</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
        <div class="container">
            
           <div class="row">
            <div class="col-md-8">
                <p>Hello world here</p>
            </div>
             <div class="col-offset-3">
                <p>Hello world there</p>
                
            </div>
          </div>
        </div>
      
           
       <!--  <nav class="nav-collapse">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
           </ul>
        </nav> -->

        <script src="js/jquery.3.2.1.min.js"></script>
        <script src="js/cdn.3.3.7.bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        
        <script>
         /* var nav = responsiveNav(".nav-collapse");*/
        </script>

    </body>
</html>
