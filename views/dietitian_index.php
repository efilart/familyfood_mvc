<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Dietitian | Familyfood Dashboard</title>

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

<link rel="stylesheet" href="../assets/assets/vendor/filament-tablesaw/tablesaw.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<!-- Fonts -->

<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"-->

<!--[if lt IE 9]>

    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>

    <![endif]-->

<!--[if lt IE 10]>

    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>

    <script src="../assets/assets/vendor/respond/respond.min.js"></script>

    <![endif]-->

<!-- Scripts -->
<script src="https://use.fontawesome.com/286c52578e.js"></script>
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

<?php include("inc_dietitian_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_dietitian_left_menu.php"); ?>

<!-- end left menu --> 

<!--div class="site-gridmenu">

<ul>

<li> <a href="apps/mailbox/mailbox.html"> <i class="icon wb-envelope"></i> <span>Mailbox</span> </a> </li>

<li> <a href="apps/calendar/calendar.html"> <i class="icon wb-calendar"></i> <span>Calendar</span> </a> </li>

<li> <a href="apps/contacts/contacts.html"> <i class="icon wb-user"></i> <span>Contacts</span> </a> </li>

<li> <a href="apps/media/overview.html"> <i class="icon wb-camera"></i> <span>Media</span> </a> </li>

<li> <a href="apps/documents/categories.html"> <i class="icon wb-order"></i> <span>Documents</span> </a> </li>

<li> <a href="apps/projects/projects.html"> <i class="icon wb-image"></i> <span>Project</span> </a> </li>

<li> <a href="apps/forum/forum.html"> <i class="icon wb-chat-group"></i> <span>Forum</span> </a> </li>

<li> <a href="index.php"> <i class="icon wb-dashboard"></i> <span>Dashboard</span> </a> </li>

</ul>

</div--> 

<!-- Page -->

<div class="page-header padding-0 hidden-xs">
<div class="widget-header cover overlay"> <img src="../assets/assets/images/banners/header_dietitian.jpg" alt="">
<div class="overlay-panel text-center vertical-align">
<div class="widget-metas vertical-align-middle blue-grey-800">
<h1><span>We Are Family Food RDs!</span></h1>
<ul class="list-inline font-size-14">
<li> <i class="icon wb-map margin-right-5" aria-hidden="true"></i> Central and southern Alaska </li>
<li class="margin-left-20"> <i class="icon wb-heart margin-right-5" aria-hidden="true"></i> 26,428 </li>
</ul>
</div>
</div>
</div>
</div>
<div class="page animsition">
<div class="page-content">
<div class="page-header">
<h1 class="page-title">Appointments</h1>
</div>
<div class="panel">
<div class="panel-body">
<header class="panel-heading">
<h3 class="panel-title">&nbsp;</h3>
<div class="page-header-actions">
<button type="button" onclick="window.print()" class="btn btn-floating btn-success" value="Print Appointment"><i class="icon wb-print" aria-hidden="true"></i></button>
</div>
</header>

<!-- start tables-->

<table class="tablesaw table-striped table-bordered table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
<thead>
<tr>
<th data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="persist">Name</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="2">Username</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="3">Service</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="4">Phone No.</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="5">Date</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="6">Time</th>
<th>Reason</th>
<th class="text-center">View Details</th>
<th class="text-center">Follow-Up</th>
<th class="text-center">Edit</th>
</tr>
</thead>
<tbody>
<tr>
<td>Nicole Kwatny</td>
<td>Nicole</td>
<td>Individualized Nutrition Counseling</td>
<td>2152006798</td>
<td>2015-11-30</td>
<td>11:00 AM EST</td>
<td></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-success btn-outline"><i class="icon wb-search" aria-hidden="true"></i></button></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-success btn-outline"><i class="icon wb-calendar" aria-hidden="true"></i></button></td>
<td class="text-center"><button class="btn btn-icon btn-success" data-target="#exampleFillIn" data-toggle="modal" type="button" aria-hidden="true"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
</tr>
<tr>
<td>Laura Herschel</td>
<td>Nicole</td>
<td>Individualized Nutrition Counseling</td>
<td>2152006798</td>
<td>2014-11-30</td>
<td>11:00 AM EST</td>
<td></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-success btn-outline"><i class="icon wb-search" aria-hidden="true"></i></button></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-success btn-outline"><i class="icon wb-calendar" aria-hidden="true"></i></button></td>
<td class="text-center"><button class="btn btn-icon btn-success" data-target="#exampleFillIn" data-toggle="modal" type="button" aria-hidden="true"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
</tr>
</tbody>
</table>

<!-- end table --> 

</div>
</div>
</div>
</div>

<!-- End Page --> 

<!-- start edit -->

<div class="modal fade modal-fill-in in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1">
<div class="modal-dialog" style="width: 800px">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>

<!--h4 class="modal-title" id="exampleFillInModalTitle">Set The Messages</h4--> 

</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-md-3 form-group">
<select data-plugin="selectpicker" data-style="btn-outline btn-primary">
<option>Follow-Up</option>
<option>Seen - F/U scheduled</option>
<option>Seen - F/U not scheduled</option>
<option>No-show</option>
<option>Cancelled</option>
</select>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-4 form-group">
<div class="input-group">
<input type="text" value="" onfocus="setBMI(`table_target0`)" class="form-control" id="table_target0_weight" placeholder="Weight">
<span class="input-group-addon">lbs</span> </div>
</div>
<div class="col-md-4 form-group">
<div class="input-group">
<input type="text" value="" onfocus="setBMI(`table_target0`)" class="form-control" id="table_target0_height" placeholder="Height">
<span class="input-group-addon">inches</span> </div>
</div>
<div class="col-md-4 form-group">
<div class="input-group">
<input type="text" value="" class="form-control" id="table_target0_bmi" placeholder="BMI" disabled="">
<div class="input-group-addon">BMI</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small">Whole Grains / day</label>
</div>
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small">Vegetables / day</label>
</div>
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small"> Low fat dairy / day</label>
</div>
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small">Fruit / day</label>
</div>
</div>
<div class="row">
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small">Fish / week</label>
<span></span> </div>
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<label class="small">Cups of water / day</label>
</div>
<div class="col-md-3 form-group">
<select class="form-control" data-plugin="selectpicker" data-style="btn-outline btn-primary" data-width="auto">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select>
<label class="small">Physical Activity - days / week</label>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-4">
<textarea class="form-control" id="textareaDefault" rows="3"></textarea>
<h4 class="example-title">Nutrition Goal</h4>
</div>
<div class="col-md-4">
<textarea class="form-control" id="textareaDefault" rows="3"></textarea>
<h4 class="example-title">Physical Activity Goal</h4>
</div>
<div class="col-md-4">
<textarea class="form-control" id="textareaDefault" rows="3"></textarea>
<h4 class="example-title">Family/Social/Environmental Goal</h4>
</div>
</div>
<hr>
<div class="row">
<h4>Download PDF</h4>
<div class="radio-custom radio-primary form-group">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label>Sports Nutrition Handout</label>
</div>
<div class="radio-custom radio-primary form-group">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label>Shop the Walls</label>
</div>
<div class="radio-custom radio-primary form-group">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label>Menu Planner</label>
</div>
<div class="radio-custom radio-primary form-group">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label>Grocery List</label>
</div>
<div class="radio-custom radio-primary form-group">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label>Family Food Plate</label>
</div>
</div>
<div class="row">
<button type="button" class="btn btn-success margin-top-20">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- start footer -->

<?php include("inc_footer.php"); ?>

<!-- end footer --> 

<!-- Core  --> 

<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 

<!--script src="../assets/assets/vendor/jquery/jquery.js"></script--> 

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
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script> 
<script src="../assets/assets/vendor/filament-tablesaw/tablesaw.js"></script> 

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
<script src="../assets/assets/js/components/bootstrap-select.js"></script> 
<script>

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

// start fufu



//end fufu

    })(document, window, jQuery);

  </script>
</body>
</html>