<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

    <title>Chat Demo</title>
<style>
.checked {
  color: orange;
}
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}

.chip {
  display: inline-block;
  padding: 0 15px;
  height: 25px;
  font-size: 16px;
  /* line-height: 50px; */
  border-radius: 25px;
  background-color: #f1f1f1;
}
.btn-click{background: darkgrey;}

</style>   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    
    <!-- Bootstrap -->
    <link href='{{url("theme/vendors/bootstrap/dist/css/bootstrap.min.css")}}' rel="stylesheet">
    <!-- Font Awesome -->
    <link href='{{url("theme/vendors/font-awesome/css/font-awesome.min.css")}}' rel="stylesheet">
    <!-- NProgress -->
    <link href='{{url("theme/vendors/nprogress/nprogress.css")}}' rel="stylesheet">
    <!-- iCheck -->
    <link href='{{url("theme/vendors/iCheck/skins/flat/green.css")}}' rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href='{{url("theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}' rel="stylesheet">
    <!-- JQVMap -->
    <link href='{{url("theme/vendors/jqvmap/dist/jqvmap.min.css")}}' rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href='{{url("theme/vendors/bootstrap-daterangepicker/daterangepicker.css")}}' rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href='{{url("theme/build/css/custom.min.css")}}' rel="stylesheet">

    <link href='https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css' rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><i class="fa fa-home"></i> <span>MyYodaa</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src='{{url("theme/images/img.jpg")}}' alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a href="{{url('/chat')}}"><i class="fa fa-user" style="color:white"></i>Chat with User</a>
                  </li>
                  <li><a href="{{url('/')}}"><i class="fa fa-user" style="color:white"></i>#</a>
                  </li>
                  <li><a href="{{url('/')}}"><i class="fa fa-users" style="color:white"></i>#</a>
                  </li>
                  <!-- <li><a href="{{url('/rating')}}"><i class="fa fa-star-half-empty" style="color:white"></i>Rating</a>
                  </li> -->
                  <li><a href="{{url('/')}}"><i class="fa fa-table"></i>#</a>
                  </li>
                  <li><a href="{{url('/')}}"><i class="fa fa-money" aria-hidden="true"></i>#</a>
                  </li>
                  <!-- <li><a href="{{url('/lectureDetails')}}"><i class="fa fa-table"></i>Lecture</a>
                  </li> -->
                  <!-- <li><a href="{{url('/yogaType')}}"><i class="fa fa-table"></i>Yoga Type Details</a>
                  <li><a href="{{url('/yogaStyle')}}"><i class="fa fa-table"></i>Yoga Level Details</a></li>
                  <li><a href="{{url('/meditationType')}}"><i class="fa fa-table"></i>Meditation Type Details</a></li>
                  <li><a href="{{url('/meditationStyle')}}"><i class="fa fa-table"></i>Meditation Level Details</a></li>
                  <li><a href="{{url('/currency')}}"><i class="fa fa-table"></i>Currency Details</a></li>
                  <li><a href="{{url('/chatScreen')}}"><i class="fa fa-envelope-o" id="chatTeacher" style="color:white"></i>Chat with Teacher</a></li>
                  <li><a href="{{url('/chatScreenStudent')}}"><i class="fa fa-envelope-o" id="chatStudent" style="color:white"></i>Chat with Student</a></li>
                  <li><a href="{{url('/admin')}}"><i class="fa fa-user" style="color:white"></i>Admin</a></li>
                  <li><a href="{{url('/teacherPayout')}}"><i class="fa fa-user" style="color:white"></i>Teachers' Payout</a></li>-->
                  <li><a href="{{ url('/logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    
                    </li>
                    


                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle">
                  <!-- <i class="fa fa-bars"></i> -->
                </a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              </ul>
            </nav>
          </div>
        </div>
       

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src ="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <!-- jQuery -->
    <script src='{{url("theme/vendors/jquery/dist/jquery.min.js")}}'></script>
    <!-- Bootstrap -->
    <script src='{{url("theme/vendors/bootstrap/dist/js/bootstrap.min.js")}}'></script>
    <!-- FastClick -->
    <script src='{{url("theme/vendors/fastclick/lib/fastclick.js")}}'></script>
    <!-- NProgress -->
    <script src='{{url("theme/vendors/nprogress/nprogress.js")}}'></script>
    <!-- Chart.js")}}' -->
    <script src='{{url("theme/vendors/Chart.js/dist/Chart.min.js")}}'></script>
    <!-- gauge.js")}}' -->
    <script src='{{url("theme/vendors/gauge.js/dist/gauge.min.js")}}'></script>
    <!-- bootstrap-progressbar -->
    <script src='{{url("theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}'></script>
    <!-- iCheck -->
    <script src='{{url("theme/vendors/iCheck/icheck.min.js")}}'></script>
    <!-- Skycons -->
    <script src='{{url("theme/vendors/skycons/skycons.js")}}'></script>
    <!-- Flot -->
    <script src='{{url("theme/vendors/Flot/jquery.flot.js")}}'></script>
    <script src='{{url("theme/vendors/Flot/jquery.flot.pie.js")}}'></script>
    <script src='{{url("theme/vendors/Flot/jquery.flot.time.js")}}'></script>
    <script src='{{url("theme/vendors/Flot/jquery.flot.stack.js")}}'></script>
    <script src='{{url("theme/vendors/Flot/jquery.flot.resize.js")}}'></script>
    <!-- Flot plugins -->
    <script src='{{url("theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}'></script>
    <script src='{{url("theme/vendors/flot-spline/js/jquery.flot.spline.min.js")}}'></script>
    <script src='{{url("theme/vendors/flot.curvedlines/curvedLines.js")}}'></script>
    <!-- DateJS -->
    <script src='{{url("theme/vendors/DateJS/build/date.js")}}'></script>
    <!-- JQVMap -->
    <script src='{{url("theme/vendors/jqvmap/dist/jquery.vmap.js")}}'></script>
    <script src='{{url("theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}'></script>
    <script src='{{url("theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}'></script>
    <!-- bootstrap-daterangepicker -->
    <script src='{{url("theme/vendors/moment/min/moment.min.js")}}'></script>
    <script src='{{url("theme/vendors/bootstrap-daterangepicker/daterangepicker.js")}}'></script>

    <!-- Custom Theme Scripts -->
    <!-- <script src='{{url("theme/build/js/custom.min.js")}}'></script> -->

     <!-- bootstrap-daterangepicker -->
     <script src='{{url("theme/vendors/moment/min/moment.min.js")}}'></script>
    <script src='{{url("theme/vendors/bootstrap-daterangepicker/daterangepicker.js")}}'></script>
    <!-- bootstrap-datetimepicker -->    
    <script src='{{url("theme/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}'></script>
	
    <!--<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    -->

    <!-- <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script> -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-firestore.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>


    