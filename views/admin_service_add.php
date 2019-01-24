<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Add Service - Familyfood Dashboard</title>

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

<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

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

<?php include("inc_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_left_menu.php"); ?>

<!-- end left menu --> 

<!-- Page -->

<div class="page animsition">
<div class="page-header">
<h1 class="page-title">Add Service</h1>
<div class="page-header-actions"> 

<!--button type="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i> ADD COMPANY</button--> 

<a href="service" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>VIEW / MANAGE SERVICES</a> </div>
</div>
<div class="page-content container-fluid">
<div class="row">
<div class="col-lg-12"> 

<!-- Panel Add &amp; Remove Rows -->

<div class="panel">
<div class="panel-body">
<div class="row">
<div class="col-md-4">
<div class="example-col">&nbsp;</div>
</div>
<div class="col-md-4">
<div class="form-group row">
<div class="col-sm-12">
<label class="control-label" for="inputAddress">Service Name</label>
<span class="required">*</span>
<input type="text" class="form-control" id="inputServiceName" name="svname" placeholder="Service Name" autocomplete="off">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label class="control-label" for="inputAddress">Description</label>
<span class="required">*</span>
<textarea id="svdescription" class="form-control" name="svdescription" placeholder="Description" required></textarea>
</div>
</div>
<div class="form-group row">
<div class="col-sm-4">
<div class="input-group">
<input type="number" id="serviceDuration" name="svduration" class="form-control" placeholder="Duration">
</div>
</div>
<div class="col-sm-4">
<div class="input-group"> <span class="input-group-addon">$</span>
<input type="text" id="serviceCost" class="form-control" name="svprice" placeholder="Cost">
</div>
</div>
<div class="col-sm-4">
<div class="input-group">
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="publishServiceCost" name="enableShowServicePrice" class="form-control">
<label for="publishServiceCost">Publish cost</label>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="example-col">&nbsp;</div>
</div>
</div>
<div class=" col-md-6 pull-right">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" onclick="serviceAdd()" class="btn btn-animate btn-animate-vertical btn-success"> <span><i class="icon wb-add-file" aria-hidden="true"></i>Add Selected</span> </button>
</div>
</div>
</div>

<!-- End Panel Add &amp; Remove Rows --> 

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
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

    })(document, window, jQuery);



    //functions

    function serviceAdd(){

      var srvcName = $( '#inputServiceName' ).val();

      var srvcDesc = $( '#svdescription' ).val();

      var srvcDuration = $( '#serviceDuration' ).val();

      var srvcCost = $( '#serviceCost' ).val();

      var srvcPubCost = "No";

      if( srvcName != "" && srvcDesc != "" && srvcDuration != "" ){

        if( !(isNaN( srvcDuration ) ) && !(isNaN( srvcCost ) ) ){

          if( $( '#publishServiceCost' ).is( ':checked' ) ){

            srvcPubCost = "Yes";

          }

          $.ajax({

            type: 'POST',

            datatype: 'JSON',

            url: 'addNewService',

            data: { 

              'servicename': srvcName,

              'description': srvcDesc,

              'duration': srvcDuration,

              'cost': srvcCost,

              'showprice': srvcPubCost,

            },

            success: function( data ){

              alert( data );

            },

          });

        }else{

          alert( 'Duration and Cost should be in number format' );

        }



      }else{

        alert( 'Please fill up service details' );

      }

    }

  </script>
</body>
</html>