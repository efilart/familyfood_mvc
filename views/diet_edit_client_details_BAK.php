<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Edit Client Details | Familyfood Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">

<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/jt-timepicker/jquery-timepicker.css">

<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">
<link rel="stylesheet" href="../assets/assets/fonts/ionicons/ionicons.css">

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
<style>
    .bootstrap-select {
      width: 100% !important;
    }
    
    .datepair-wrap {
      position: relative;
      overflow: hidden;
    }
    
    .input-daterange-wrap {
      float: left;
    }
    
    .input-daterange-to {
      float: left;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
    }
    
    @media (max-width: 1360px) {
      .input-daterange-wrap,
      .input-daterange-to {
        display: block;
        float: none;
      }
    }
  </style>

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

<div class="page animsition">

<div class="page-header">
<h2><span class="label label-success">Client details for <span style="text-transform: uppercase" id="client_name_title"><?php echo $user_full_name ?></span></span></h2>

<h3>Client Search</h3>
<div class="input-group col-md-6">
<input type="text" class="form-control" value="<?php echo $user_full_name ?>" name="client_name" placeholder="Search Client" id="client_name" data-fv-field="client_name" >
<span class="input-group-btn">
<button onclick="getUserDetails()" class="btn btn-primary">Load Details<!-- <i class="icon wb-search" aria-hidden="true"></i> --></button>
</span>
</div>
</div>

<div class="page-content">
<div class="panel">
<div class="panel-body container-fluid">
<div class="row row-lg">
<div class="col-lg-12">
<form autocomplete="off">
<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="inputBasicFirstName">First Name</label>
<input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" placeholder="First Name" autocomplete="off">
</div>
<div class="col-sm-6">
<label class="control-label" for="inputBasicLastName">Last Name</label>
<input type="text" class="form-control" id="inputBasicLastName" name="inputLastName" placeholder="Last Name" autocomplete="off">
</div>
</div>
<div class="form-group row">

<div class="col-sm-6">
<label class="control-label">Phone</label>
<div class="input-group input-group-icon">
<span class="input-group-addon"><span class="icon wb-mobile" aria-hidden="true"></span></span>
<input type="text" class="form-control" placeholder="Phone">
</div>
</div>
<div class="col-sm-6">
<label class="control-label">Email</label>
<div class="input-group input-group-icon">
<span class="input-group-addon"><span class="icon wb-envelope" aria-hidden="true"></span></span>
<input type="text" class="form-control" placeholder="Email">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<label class="control-label">Chosen Date and Time</label>
<div class="input-daterange-wrap">
<div class="input-daterange">
<div class="input-group">
<span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span><input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">
</div>
<div class="input-group">
<span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span><input type="text" class="form-control datepair-time datepair-start ui-timepicker-input" data-plugin="timepicker" autocomplete="off">
</div>
</div>
</div>
</div>

<div class="col-sm-6">
<label class="control-label">Health Insurance Company</label>
<input type="text" class="form-control" id="inputPlaceholder" placeholder="Personal choice">
</div>
</div>

<div class="form-group row">
<div class="col-md-6">
<div class="input-group">

<span class="input-group-addon"><i class="icon ion-pound" aria-hidden="true"></i></span><input type="text" class="form-control" id="inputPlaceholder" placeholder="Health Insurance number">
</div>
</div>

<div class="col-md-6">
<select data-plugin="selectpicker" class="bs-select-hidden" title='Healthy Weight Desired'>
<option>Seksy</option>
<option>Bulemic baga yung mala super-mowdel</option>
<option>Tipong "Ervin-sexy"</option>
</select>
</div>

</div>

<div class="form-group row">
<div class="col-md-6">
<button type="button" class="btn btn-primary">Save</button>
</div>
</div>

</form>
</div>
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
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<!--script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.js"></script--> 
<script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script> 
<script src="../assets/assets/vendor/datepair-js/datepair.min.js"></script>
<script src="../assets/assets/vendor/datepair-js/jquery.datepair.min.js"></script>


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

<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script>
<script src="../assets/assets/js/components/jt-timepicker.js"></script>
<script src="../assets/assets/js/components/datepair-js.js"></script>
<script src="../assets/assets/js/components/datepair-js.min.js"></script>

<script>

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

    })(document, window, jQuery);

  </script>
</body>
</html>