<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>View / Manage Services - Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/vendor/webui-popover/webui-popover.css">

<link rel="stylesheet" href="../assets/assets/css/custom.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/formvalidation/formValidation.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/jt-timepicker/jquery-timepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/vendor/multi-select/multi-select.css">

<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
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
<h1 class="page-title">View / Manage Services</h1>
<div class="page-header-actions">
<!--button type="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i> ADD COMPANY</button-->
<a href="serviceAdd" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>ADD SERVICE</a>
</div>
</div>
<div class="page-content container-fluid">
<div class="row">
<div class="col-lg-12"> 
<!-- Panel Add &amp; Remove Rows -->
<div class="panel">
<header class="panel-heading">
<h3 class="panel-title">&nbsp;</h3>
</header>
<div class="panel-body"> 

<table id="exampleFooAddRemove" class="table table-bordered table-hover toggle-circle" data-page-size="5">
<thead>
<tr>
<th data-sort-initial="true" data-toggle="true">Service Name</th>
<th data-hide="phone" data-sort-ignore="true">Description</th>
<th data-hide="phone" class="min-width text-center">Duration</th>
<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">Add Dietitian</th>
<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">Edit Service Details</th>
<th data-hide="phone" data-sort-ignore="true" class="min-width text-center">DELETE</th>
</tr>
</thead>
<tbody>
<?php
$serviceList = array();
foreach( $servieDetails as $service ){
	// print_r( $service );

	// data-target="#exampleMultipleOne"
	echo <<< EOT
	<tr>
	<td>{$service->name}</td>
	<td width="30%">{$service->description}</td>
	<td class="text-center">{$service->duration}</td>
	<td class="text-center"><button type="button" onclick="addDietitian({$service->service_id})" class="btn btn-icon btn-warning btn-round" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i></button></td>
	<td class="text-center"><button type="button" onclick="editService({$service->service_id})" class="btn btn-icon btn-warning btn-round" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
	<!--td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn"><i class="icon wb-trash" aria-hidden="true"></i></button></td-->
	<td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round" onclick="deleteService({$service->service_id}, this)" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i></button></td>
	</tr>
EOT;
	$serviceList[$service->service_id] = $service;
}

?>
<!-- <tr>
<td>Family Food Nutrition Boot Camp</td>
<td width="30%">Sign up to become a Family Food Nutrition Boot Camper! You will receive 6 individualized nutrition classes that will provide you with the foundation of nutrition plus your choice of additional nutrition topics. *MUST BRING HEALTH INSURANCE CARD.
</td>
<td class="text-center">60</td>
<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#addservice" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i></button></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#exampleMultipleOne" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn"><i class="icon wb-trash" aria-hidden="true"></i></button></td
<td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i></button></td>
</tr>

<tr>
<td>Hamilton Lane Nutrition Boot Camp</td>
<td width="30%">Sign up to become a Family Food Nutrition Boot Camper! You will receive 6 individualized nutrition classes that will provide you with the foundation of nutrition plus your choice of additional nutrition topics. *MUST BRING HEALTH INSURANCE CARD
</td>
<td class="text-center">60</td>
<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#addservice" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i></button></td>
<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#exampleMultipleOne" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button></td>
td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn"><i class="icon wb-trash" aria-hidden="true"></i></button></td
<td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i></button></td>
</tr>
 -->
</tbody>
<tfoot>

<tr>
<td colspan="6">
<div class="text-right">
<ul class="pagination">
</ul>
</div>
</td>
</tr>

</tfoot>
</table>
</div>
</div>
<!-- End Panel Add &amp; Remove Rows --> 
</div>
</div>
</div>
</div>
<!-- End Page --> 

<!-- modal popup for service -->
<div class="modal fade modal-fill-in" id="addDietitian" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1" style="display: none;">
<div class="modal-dialog" style="height:100%">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">&nbsp;</h4>
</div>
<div class="modal-body">
<div class="modal fade modal-fill-in in" id="exampleFillIn" aria-hidden="false" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1" style="display: block; padding-right: 17px;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">Add Dietitian</h4>
</div>
<div class="modal-body">
<div class="form-group row">
<div class="col-sm-12">
<div class="button-group" id="confDietitian1">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-user-plus">&nbsp;Select Dietitian</i></span> <span class="caret"></span></button>
<ul id='dietitianList' class="dropdown-menu" style="OVERFLOW-Y:scroll; width:auto; height:300px">
<!-- <li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" id="deitID" />&nbsp;<strong>Dietitian Name</strong> <span class="small" style="white-space:normal">SERVICE</span></a></li> -->
<!-- <?php echo $dietitianList1; ?> -->
</ul>
</div>

</div>
</div>
</div>

<div class="modal-footer">
<div class="pull-right">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" onclick="submitDietitian()" class="btn btn-animate btn-animate-vertical btn-success"> <span><i class="icon wb-add-file" aria-hidden="true"></i>Add Selected</span> </button>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end service modal --> 

<!-- modal popup for details page 1 -->
<div class="modal fade modal-fill-in" id="exampleMultipleOne" aria-hidden="true" aria-labelledby="exampleFillIn" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">Edit Service Details</h4>
</div>
<!-- end step 1 header -->                 
</div>

<div class="modal-body"> 
<!-- insert form here -->
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
<textarea rows=5 id="svdescription" class="form-control" name="svdescription" placeholder="Description" required></textarea>
</div>
</div>

<div class="form-group row">
<div class="col-sm-4">
<div class="input-group">
<input type="number" id="serviceDuration" class="form-control" placeholder="Duration">
</div>
</div>

<div class="col-sm-4">
<div class="input-group">
<span class="input-group-addon">$</span>
<input type="text" id="serviceCost" class="form-control" placeholder="Cost">
</div>
</div>

<div class="col-sm-4">
<div class="input-group">
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="publishServiceCost">
<label for="inputUnchecked">Publish cost</label>
</div>
</div>
</div>

</div>


<!-- end form content --> 
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" id="editServiceSubmit" class="btn btn-success"><i class="icon wb-check" aria-hidden="true"></i> SUBMIT</button>
</div>

</div>
</div>
</div>
<!-- details page 1 modal --> 

<!-- modal popup for details page 2 -->
<div class="modal fade modal-fill-in" id="exampleMultipleTwo" aria-hidden="false" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
<!-- start step 2 -->
<!-- step 1 header -->
<div class="steps row">

<div class="step col-md-6">
<span class="step-number">1</span>
<div class="step-desc">
<span class="step-title">Edit Location</span>
<p>Choose company details</p>
</div>
</div>

<div class="step col-md-6 current">
<span class="step-number">2</span>
<div class="step-desc">
<span class="step-title">Conference Room</span>
<p>Assign Dietitian</p>
</div>
</div>
</div>
<!-- end step 2 header -->

<div class="modal-body">

<!-- page 2 content -->
<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" name="cmpconfr1" placeholder="Conference Room 1" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<select class="form-control" multiple data-plugin="selectpicker" data-max-options="99" data-live-search="true" title="Search / Select Dietitians">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" name="cmpconfr2" placeholder="Conference Room 2" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<select class="form-control" multiple data-plugin="selectpicker" data-max-options="99"  data-live-search="true" title="Search / Select Dietitians">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" name="cmpconfr3" placeholder="Conference Room 3" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<select class="form-control" multiple data-plugin="selectpicker" data-max-options="99"  data-live-search="true" title="Search / Select Dietitians">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" name="cmpconfr4" placeholder="Conference Room 4" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<select class="form-control" multiple data-plugin="selectpicker" data-max-options="99"  data-live-search="true" title="Search / Select Dietitians">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="text" class="form-control" name="cmpconfr5" placeholder="Conference Room 5" data-fv-field="type_digits">
</div>
<div class="col-sm-6">
<select class="form-control" multiple data-plugin="selectpicker" data-max-options="99"  data-live-search="true" title="Search / Select Dietitians">
<option>Alyson Heller</option>
<option>Amanda Sajczuk</option>
<option>Andrea Gekoff</option>
</select>
</div>
</div>


<!-- end page 2 content -->
</div>

<div class="modal-footer">

<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-info" data-target="#exampleMultipleOne" data-toggle="modal" data-dismiss="modal"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Back to Location</button>
<button type="button" class="btn btn-success"><i class="icon wb-check" aria-hidden="true"></i> SUBMIT</button>

</div>
</div>
</div>
</div>
<!-- modal popup for details page 2 --> 

<!-- Footer -->
<?php include("inc_footer.php"); ?>

<!-- Core  --> 
<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 
<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 
<script src="../assets/assets/js/components/bootbox.js"></script> 



<!-- Plugins --> 
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/bootbox/bootbox.js"></script>
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script>
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/footable/footable.all.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/multi-select/jquery.multi-select.js"></script>

<!-- popover -->
<script src="../assets/assets/vendor/webui-popover/jquery.webui-popover.min.js"></script>
<script src="../assets/assets/js/components/webui-popover.js"></script>

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
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script>
<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/js/components/jt-timepicker.js"></script>
<script src="../assets/assets/js/components/bootstrap-select.js"></script>
<script src="../assets/assets/js/components/multi-select.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>

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

          //replicate new row hurrR
          var newRow =
            '<tr><td>Chesterbrook</td><td>PA</td><td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#addservice" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i></button></td>'+
            '<td class="text-center"><button type="button" class="btn btn-icon btn-warning btn-round" data-target="#exampleMultipleOne" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i></button></td>'+
            '<td class="text-center"><button type="button" class="btn btn-icon btn-danger btn-round delete-row-btn" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i></button></td></tr>';

          //add it
          footable.appendRow(newRow);
        });
      })();

    })(document, window, jQuery);
				
				$("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>

<script>
//functions
var serviceList = <?php print_r( json_encode( $serviceList ) ); ?>;
var dietitianList = <?php print_r( json_encode( $dietitianList ) ); ?>;
var srvcID;
function editService( service_id ){
	srvcID = service_id;
	var currService = serviceList[service_id];
	$( '#exampleMultipleOne' ).modal( 'show' );
	$( '#inputServiceName' ).val( currService.name );
	$( '#svdescription' ).text( currService.description );
	$( '#serviceDuration' ).val( currService.duration );
	$( '#serviceCost' ).val( currService.cost );
	// alert( JSON.stringify( currService ) );
	if( currService.publish_cost == "Yes" ){
		$( '#publishServiceCost' ).prop( 'checked', true );
	}
	// 
}

var checkedList = new Array();
var removedList = new Array();
var initialList = new Array();

function addDietitian( service_id ){
	srvcID = service_id;
	diethtml = '';
	$.each( dietitianList, function( key, value ){
		diethtml += '<li><a href="javascript:void(0);" data-value="option1" tabIndex="-1"><input type="checkbox" onclick="addRemoveDietitian(`'+value.dietitian_id+'`)" id="'+value.dietitian_id+'_dietitian" />&nbsp;<strong>'+value.first_name+" "+value.last_name+'</strong><br /><span class="small" style="white-space:normal">'+value.alias_name+'</span></a></li>'
	});
	$( '#addDietitian' ).modal( 'show' );
	$( '#dietitianList' ).html( diethtml );
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'selectDietitianCheckboxes',
		data: { 
			'service_id': srvcID,
		},
		success: function( data ){
			checkedList = new Array();
			var result = jQuery.parseJSON(data);
			$.each( result, function( key, value ){
				$( '#'+value.dietitian_id+"_dietitian" ).prop( "checked", true );
				checkedList.push( value.dietitian_id );
				initialList.push( value.dietitian_id );
			});
		},
	});
}

function addRemoveDietitian( dietitian_id ){
	if( jQuery.inArray( dietitian_id, checkedList ) == -1 ){
		checkedList.push( dietitian_id );
		if( jQuery.inArray( dietitian_id, removedList ) == -1 ){
	  		
	  	}else{
	  		removedList = jQuery.grep(removedList, function( value ) {
			  	return value != dietitian_id;
			});
	  	}
	}else{
		checkedList = jQuery.grep(checkedList, function( value ) {
		  	return value != dietitian_id;
		});
		if( jQuery.inArray( dietitian_id, initialList ) == -1 ){
	  	}else{
	  		removedList.push( dietitian_id );
	  	}
	}
}

function submitDietitian(){
	var arrForInsert = $(checkedList).not(initialList).get();
	$.ajax({
	type: 'POST',
	datatype: 'JSON',
	url: 'saveDietitianService',
	data: { 
		'service_id': srvcID,
		'dietAddList': arrForInsert,
		'dietDelList': removedList,
	},
	success: function( data ){
		alert( data );
	},
});

}

$( '#editServiceSubmit' ).on( 'click', function(){
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
				url: 'editExistingService',
				data: { 
					'service_id': srvcID,
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
});

function deleteService( service_id, elem ){
	swal(
	{
      	title: "Are you sure?",
      	text: "You will not be able to recover this address.",
      	type: "warning",
      	showCancelButton: true,
      	confirmButtonColor: '#DD6B55',
      	confirmButtonText: 'Yes, delete it',
      	closeOnConfirm: false,
      	//closeOnCancel: false
    },
    function() {
    	// alert( service_id );
    	$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'removeServiceDetails',
			data: { 
				'service_id': service_id,
			},
			success: function( data ){
				$( elem ).closest( 'tr' ).remove();
				swal("Deleted!",
		        "Service has been deleted!",
		        "success");
			},
		});
    });
}
// delete address popup
      // (function() {
      //   $('#exampleWarningConfirm').on("click", function() {
      //     swal({
      //         title: "Are you sure?",
      //         text: "You will not be able to recover this address.",
      //         type: "warning",
      //         showCancelButton: true,
      //         confirmButtonColor: '#DD6B55',
      //         confirmButtonText: 'Yes, delete it',
      //         closeOnConfirm: false,
      //         //closeOnCancel: false
      //       },
      //       function() {

      //         swal("Deleted!",
      //           "Address has been deleted!",
      //           "success");
      //       });
      //   });


    // })(document, window, jQuery);

</script>

<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      var defaults = $.components.getDefaults("webuiPopover");

      // Example Webui Popover Pop with Table
      // ------------------------------------
      (function() {
        var tableContent = $('#examplePopoverTable').html(),
          tableSettings = {
            title: 'WebUI Popover',
            content: tableContent,
            width: 500
          };

        $('#examplePopWithTable').webuiPopover($.extend({}, defaults,
          tableSettings));
      })();

      // Example Webui Popover Pop with List
      // -----------------------------------
      (function() {
        var listContent = $('#examplePopoverList').html(),
          listSettings = {
            content: listContent,
            title: '',
            padding: false
          };

        $('#examplePopWithList').webuiPopover($.extend({}, defaults,
          listSettings));

      })();

      // Example Webui Popover Pop with Large Content
      // --------------------------------------------
      (function() {
        var largeContent = $('#examplePopoverLargeContent').html(),
          largeSettings = {
            title: 'WebUI Popover',
            content: largeContent,
            width: 400,
            height: 350,
            closeable: true
          };

        $('#examplePopWithLargeContent').webuiPopover($.extend({},
          defaults, largeSettings));
      })();

    })(document, window, jQuery);
  </script>

</body>
</html>