<!DOCTYPE html>

<html class="no-js before-run" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="description" content="bootstrap admin template">

<meta name="author" content="">

<title>User Panel - Select Service | Familyfood Dashboard</title>

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

<h3>SELECT SERVICE</h3>

<div class="progress">

<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 33.2%" role="progressbar"> <span class="sr-only">33% Complete</span> </div>

</div>

<!-- end progress bar -->



<div class="row padding-bottom-50">

<div class="col-md-6 text-left"><a href="searchdietitian" class="btn btn-danger"><i class="icon wb-chevron-left" aria-hidden="true"></i> BACK</a></div>

<div class="col-md-6 text-right"><a href="searchdietitian3" class="btn btn-success">AVAILABLE TIMESLOTS <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

</div>



<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">

<thead>

<tr>

<th>Service Name</th>

<th data-hide="phone, tablet">Description</th>

</tr>

</thead>



<div class="form-inline padding-bottom-15">

<div class="row">

<div class="col-sm-6">

<div class="form-group">

<label class="control-label">Status</label>

<select id="filteringStatus" class="form-control">

<option value="">Show all</option>

<!--option value="active">Active</option>

<option value="disabled">Disabled</option>

<option value="suspended">Suspended</option-->

</select>

</div>

</div>

<div class="col-sm-6 text-right">

<div class="form-group">

<input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off">

</div>

</div>

</div>

</div>

<tbody>

<tr>

<td style="width: 30%">

<div class="radio-custom radio-primary">

<input type="radio" id="inputRadiosChecked" name="inputRadios" checked />

<label for="inputRadiosChecked">INDIVIDUALIZED NUTRITION COUNSELING</label>

</div>

</td>

<td>Don't lose your visits! Sign up for 1-on-1 nutrition counseling with a Family Food Registered Dietitian at your job for free! *Must bring health insurance card to the first visit. *$30 cancellation fee for no-shows or cancellations less than 24hr prior</td>

</tr>



<tr>

<td>

<div class="radio-custom radio-primary">

<input type="radio" id="inputRadiosUnchecked" name="inputRadios" />

<label for="inputRadiosUnchecked">INDIVIDUALIZED NUTRITION COUNSELING</label>

</div>

</td>

<td>Don't lose your visits! Sign up for 1-on-1 nutrition counseling with a Family Food Registered Dietitian at your job for free! *Must bring health insurance card to the first visit. *$30 cancellation fee for no-shows or cancellations less than 24hr prior</td>

</tr>



</tbody>

<tfoot>

<tr>

<td colspan="5"><div class="text-right">

<ul class="pagination">

</ul>

</div></td>

</tr>

</tfoot>

</table>







<div class="row">

<div class="col-md-6 text-left"><a href="searchdietitian" class="btn btn-danger"><i class="icon wb-chevron-left" aria-hidden="true"></i> BACK</a></div>

<div class="col-md-6 text-right"><a href="searchdietitian3" class="btn btn-success">AVAILABLE TIMESLOTS <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

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

<script src="../assets/assets/vendor/footable/footable.all.min.js"></script>



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



<script>

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;



      $(document).ready(function($) {

        Site.run();

      });



      // Example Row Toggler

      // -------------------

      (function() {

        $('#exampleRowToggler').footable();

      })();



      // Expand / Collapse All Rows

      // --------------------------

      (function() {

        var fooColExp = $('#exampleAccordion');

        fooColExp.footable().trigger('footable_expand_first_row');



        $('#exampleCollapseBtn').on('click', function() {

          fooColExp.trigger('footable_collapse_all');

        });

        $('#exampleExpandBtn').on('click', function() {

          fooColExp.trigger('footable_expand_all');

        })

      })();



      // Accordion

      // ---------

      (function() {

        $('#exampleFooAccordion').footable().on('footable_row_expanded',

          function(e) {

            $('#exampleFooAccordion tbody tr.footable-detail-show').not(

              e.row).each(function() {

              $('#exampleFooAccordion').data('footable').toggleDetail(

                this);

            });

          });

      })();



      // Pagination

      // ----------

      (function() {

        $('#examplePagination').footable();

        $('#exampleShow').change(function(e) {

          e.preventDefault();

          var pagesize = $(this).find('option:selected').val();

          $('#examplePagination').data('page-size', pagesize);

          $('#examplePagination').trigger('footable_initialized');

        });

      })();



      // Filtering

      // ---------

      (function() {

        var filtering = $('#exampleFootableFiltering');

        filtering.footable().on('footable_filtering', function(e) {

          var selected = $('#filteringStatus').find(':selected').val();

          e.filter += (e.filter && e.filter.length > 0) ? ' ' +

            selected : selected;

          e.clear = !e.filter;

        });



        // Filter status

        $('#filteringStatus').change(function(e) {

          e.preventDefault();

          filtering.trigger('footable_filter', {

            filter: $(this).val()

          });

        });



        // Search input

        $('#filteringSearch').on('input', function(e) {

          e.preventDefault();

          filtering.trigger('footable_filter', {

            filter: $(this).val()

          });

        });

      })();



      // Add & Remove Row

      // ----------------

      (function() {

        var addrow = $('#exampleFooAddRemove');

        addrow.footable().on('click', '.delete-row-btn', function() {



          //get the footable object

          var footable = addrow.data('footable');



          //get the row we are wanting to delete

          var row = $(this).parents('tr:first');



          //delete the row

          footable.removeRow(row);

        });



        // Search input

        $('#addRemoveSearch').on('input', function(e) {

          e.preventDefault();



          addrow.trigger('footable_filter', {

            filter: $(this).val()

          });

        });



        // Add Row Button

        $('#addRowBtn').click(function() {



          //get the footable object

          var footable = addrow.data('footable');



          //build up the row we are wanting to add

          var newRow =

            '<tr><td><button class="btn btn-icon btn-danger btn-outline btn-round btn-xs demo-delete-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">Active</span></td></tr>';



          //add it

          footable.appendRow(newRow);

        });

      })();



    })(document, window, jQuery);

  </script>



</body>

</html>