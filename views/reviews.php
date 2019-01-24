<!DOCTYPE html>

<html class="no-js before-run" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="description" content="bootstrap admin template">

<meta name="author" content="">

<title>Reviews | Familyfood Dashboard</title>

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

<link rel="stylesheet" href="../../assets/assets/vendor/raty/jquery.raty.css">



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

<!--?php include("inc_meta.php"); ?-->

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

<div class="page-content">

<div class="page-header">

<h1 class="page-title">Reviews</h1>

<div class="page-header-actions"><a href="#" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>eh?</a> </div>

</div>

<div class="panel"> 

<!-- Panel Filtering -->

<header class="panel-heading">

<h3 class="panel-title">Filtering</h3>

</header>

<div class="panel-body">

<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">

<thead>

<tr>

<th data-toggle="true">Customer</th>

<th>Rating</th>

<th data-hide="phone, tablet">Review</th>

<th data-hide="phone, tablet">Received</th>

<th data-hide="phone, tablet">Status</th>

</tr>

</thead>

<div class="form-inline padding-bottom-15">

<div class="row">

<div class="col-sm-6">

<div class="form-group">

<label class="control-label">Status</label>

<select id="filteringStatus" class="form-control">

<option value="">Show all</option>

<option value="published">Published</option>

<option value="archived">Archived</option>

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

<td>Corinth Ford</td>

<td><div class="rating" data-plugin="rating"></div></td>

<td class="small" style="width:50%"><h6>Nutrition Counseling</h6>The Counselor, Anthony, was knowledgeable and had a lot of good suggestions which address my family's situation. I intend to do a follow-up visit, and I certainly am going to incorporate some of the suggested foods/tips/tricks in planning our family menus. The Counselor made the session both informative and fun. Thank you for this service.</td>

<td>2014-05-21</td>

<td><span class="label label-table label-success">PUBLISHED</span></td>

</tr>



<tr>

<td>Mary Powell</td>

<td><div class="rating" data-plugin="rating"></div></td>

<td class="small" style="width:50%"><h6>Lifestyle Change</h6>The session was informative and helped me to remember information that I already knew but did not remember or use in my daily life.</td>

<td>2014-07-29</td>

<td><span class="label label-table label-dark">ARCHIVED</span></td>

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

</div>

<!-- End Panel Filtering --> 

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

<script src="../assets/assets/vendor/raty/jquery.raty.js"></script> 



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

<script src="../assets/assets/js/components/raty.js"></script> 

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

            '<tr><td><button class="btn btn-icon btn-danger btn-outline btn-round btn-xs demo-delete-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button></td><td>Adam</td><td>Doe</td><td>Traffic Court Referee</td><td>22 Jun 1972</td><td><span class="label label-table label-success">PUBLISHED</span></td></tr>';



          //add it

          footable.appendRow(newRow);

        });

      })();



    })(document, window, jQuery);

  </script>

</body>

</html>