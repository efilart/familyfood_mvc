<!DOCTYPE html>

<html class="no-js before-run" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="description" content="bootstrap admin template">

<meta name="author" content="">

<title>User Panel - Select Timeslot | Family Food Dashboard</title>

<!-- meta & scripts -->

<!-- Favicon -->

<link rel="icon" type="image/ico" href="../../../favicon.ico"/>

<link rel="apple-touch-icon" sizes="57x57" href="../../../apple-icon-57x57.png">

<link rel="apple-touch-icon" sizes="60x60" href="../../../apple-icon-60x60.png">

<link rel="apple-touch-icon" sizes="72x72" href="../../../apple-icon-72x72.png">

<link rel="apple-touch-icon" sizes="76x76" href="../../../apple-icon-76x76.png">

<link rel="apple-touch-icon" sizes="114x114" href="../../../apple-icon-114x114.png">

<link rel="apple-touch-icon" sizes="120x120" href="../../../apple-icon-120x120.png">

<link rel="apple-touch-icon" sizes="144x144" href="../../../apple-icon-144x144.png">

<link rel="apple-touch-icon" sizes="152x152" href="../../../apple-icon-152x152.png">

<link rel="apple-touch-icon" sizes="180x180" href="../../../apple-icon-180x180.png">

<link rel="icon" type="image/png" sizes="192x192" href="../../../android-icon-192x192.png">

<link rel="icon" type="image/png" sizes="32x32" href="../../../favicon-32x32.png">

<link rel="icon" type="image/png" sizes="96x96" href="../../../favicon-96x96.png">

<link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">



<!-- Stylesheets -->

<link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/assets/css/bootstrap-extend.min.css">

<link rel="stylesheet" href="../assets/assets/css/site.min.css">

<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">

<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">

<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">

<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">

<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">

<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">

<link rel="stylesheet" href="../assets/assets/css/custom.css">



<!-- Plugin -->

<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">

<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">

<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">

<link rel="stylesheet" href="../assets/assets/vendor/fullcalendar/fullcalendar.css">



<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<link rel="stylesheet" href="../assets/assets/css/apps/calendar.css">



<!-- Fonts -->

<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">

<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">

<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

<script src="https://use.fontawesome.com/286c52578e.js"></script>



<!--[if lt IE 9]>

    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>

    <![endif]-->



<!--[if lt IE 10]>

    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>

    <script src="../assets/assets/vendor/respond/respond.min.js"></script>

    <![endif]-->



<!-- Scripts -->

<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>

<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>

<script>

    Breakpoints();

</script>

</head>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">

<!--[if lt IE 8]>

        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

    <![endif]--> 



<!-- start header menu -->

<?php include("inc_user_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_user_left_menu.php"); ?>

<!-- end left menu --> 



<!-- Page -->

<div class="page animsition">

<div class="page-content">

<div class="page-header">

<h1 class="page-title">New Appointment</h1>

<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="fa fa-edit" aria-hidden="true"></i> Manage Appointments</a>

</div>

</div>

<div class="panel">

<div class="panel-body"> 



<!-- start progress bar -->

<h3>AVAILABLE TIMESLOTS</h3>

<div class="progress">

<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 49.8%" role="progressbar"> <span class="sr-only">49% Complete</span> </div>

</div>

<!-- end progress bar --> 



<div class="row padding-bottom-50">

<div class="col-md-6 text-left"><a href="searchdietitian2" class="btn btn-danger"><i class="icon wb-chevron-left" aria-hidden="true"></i> BACK</a></div>

<div class="col-md-6 text-right"><a href="searchdietitian4" class="btn btn-success">INSURANCE INFORMATION <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

</div>



<!-- start calendar -->

<div class=" col-md-7">

<div class="page-content calendar-container padding-horizontal-30 container-fluid">

<div class="row">

<div class="panel">

<div class="padding-30" id="calendar"></div>

</div>

</div>

</div>

</div>

<div class=" col-md-5">

<div class="example table-responsive padding-top-50">

<h3>Thursday, Mar 17 EST</h3>

<table class="table">

<thead>

<tr>

<th>Morning</th>

<th>Afternoon</th>

<th>Evening</th>

</tr>

</thead>



<tbody>

<tr>

<td>8:00am</td>

<td>12:00pm</td>

<td>3:00pm</td>

</tr>

</tbody>

</table>

</div>

</div>



<!-- end calendar -->



<div class="row">

<div class="col-md-6 text-left"><a href="searchdietitian2" class="btn btn-danger"><i class="icon wb-chevron-left" aria-hidden="true"></i> BACK</a></div>

<div class="col-md-6 text-right"><a href="searchdietitian4" class="btn btn-success">INSURANCE INFORMATION <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

</div>



</div>

</div>

</div>

</div>

<!-- End Page --> 



<!-- start footer -->

<?php include("inc_footer.php"); ?>

<!-- end footer --> 

<!-- Core  --> 

<script src="../assets/assets/vendor/jquery/jquery.js"></script> 

<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 

<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 

<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 

<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 

<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 



<!-- Plugins --> 

<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 

<script src="../assets/assets/vendor/intro-js/intro.js"></script> 

<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 

<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 

<script src="../assets/assets/vendor/moment/moment.min.js"></script> 

<script src="../assets/assets/vendor/fullcalendar/fullcalendar.js"></script> 

<script src="../assets/assets/vendor/jquery-selective/jquery-selective.min.js"></script> 

<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 

<script src="../assets/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script> 



<!-- Scripts --> 

<script src="../assets/assets/js/core.js"></script> 

<script src="../assets/assets/js/site.js"></script> 

<script src="../assets/assets/js/sections/menu.js"></script> 

<script src="../assets/assets/js/sections/menubar.js"></script> 

<script src="../assets/assets/js/sections/sidebar.js"></script> 

<script src="../assets/assets/js/configs/config-colors.js"></script> 

<script src="../assets/assets/js/configs/config-tour.js"></script> 

<script src="../assets/assets/js/components/asscrollable.js"></script> 

<script src="../assets/assets/js/components/animsition.js"></script> 

<script src="../assets/assets/js/components/slidepanel.js"></script> 

<script src="../assets/assets/js/components/switchery.js"></script> 

<script src="../assets/assets/js/components/bootstrap-touchspin.js"></script> 

<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 

<script src="../assets/assets/js/apps/app.js"></script> 

<script src="../assets/assets/js/apps/calendar.js"></script> 

<script>

    (function(document, window, $) {

      'use strict';

      var AppCalendar = window.AppCalendar;



      $(document).ready(function() {

        AppCalendar.run();

      });

    })(document, window, jQuery);

</script>

</body>

</html>