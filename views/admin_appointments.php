<?php
$companyOPTIONS = '<option value="">Choose Company</option>';
if( $companyuser != '' && !empty($companyuser) ){ 
    $companyOPTIONS = '';
}
$serviceOPTIONS = '<option value="">Choose Service</option>';
$dietitianOPTIONS = '<option value="">Choose Dietitian</option>';
$locationOPTIONS = '<option value="">Choose Location</option>';
if( !empty( $Co_Loc_Srvc_Dietitian ) ){
	foreach( $Co_Loc_Srvc_Dietitian as $options ){
		if( $options['table_check'] == 'company' ){
			$companyOPTIONS .= "<option value='".$options['id']."'>".$options['name']."</option>";
		}

		if( $options['table_check'] == 'dietitian' ){
			$dietitianOPTIONS .= "<option value='".$options['id']."'>".$options['name']." ".$options['secondname']."</option>";
		}

		if( $options['table_check'] == 'service' ){
			$serviceOPTIONS .= "<option value='".$options['id']."'>".$options['name']."</option>";
		}

		if( $options['table_check'] == 'location' ){
			$locationOPTIONS .= "<option value='".$options['id']."'>".$options['name']."</option>";
		}
	}
}
?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>View Appointments | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<link rel="stylesheet" href="../assets/assets/vendor/filament-tablesaw/tablesaw.min.css">

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
<style>
.table-striped>tbody>tr:nth-of-type(odd) {
 background-color: transparent;
}
.hati{
float: left;
width: 50%;
}
</style>
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
<?php 
if( $companyuser != "" ){
	include("inc_left_menu_company.php"); 
}else{
	include("inc_left_menu.php"); 	
}
?>
<!-- end left menu --> 
<!-- Page -->
<div class="page animsition">
<div class="page-content container-fluid">
<div class="page-header">
<h1 class="page-title">Scan Appointments:</h1>
<div class="page-header-actions">
<button type="button" class="btn btn-success" onclick="exportAppointmentsData()"><i class="icon fa fa-file-excel-o" aria-hidden="true"></i> DOWNLOAD AS EXCEL</button>
</div>
</div>
<form autocomplete="off">
<div class="row height-full form-group" data-plugin="matchHeight">
<div class="col-lg-6">
<div class="widget widget-shadow widget-responsive bg-blue-600 white" id="widgetLineareaColor">
<div class="widget-content">
<div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
<p class="font-size-20 text-nowrap">Scan by Date</p>
<div class="nav-tabs-horizontal">
<ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
<li class="active" role="presentation"><a id="singleTab" style="color: #ffffff" data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab" aria-expanded="true">SINGLE DATE SELECT</a></li>
<li role="presentation" class=""><a id="rangeTab" style="color: #ffffff" data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab" aria-expanded="false">RANGE DATE SELECT</a></li>
<li class="dropdown" role="presentation" style="display: none;"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> <span class="caret"></span>Menu </a>
<ul class="dropdown-menu" role="menu">
<li class="" role="presentation"><a data-toggle="tab" style="color: #ffffff" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">SINGLE DATE SELECT</a></li>
<li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">RANGE DATE SELECT</a></li>
</ul>
</li>
</ul>
<div class="tab-content padding-top-40">
<div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" name='singleDate' class="form-control" id="singleTabDate" data-plugin="datepicker">
</div>
</div>
<div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
<div class="input-daterange"><!-- data-plugin="datepicker" -->
<div class="input-group"> <span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i> </span>
<input type="text" name='rangeDateFrom' class="form-control" id="rangeTabFrom" data-plugin="datepicker">
</div>
<div class="input-group"> <span class="input-group-addon">to</span>
<input type="text" name='rangeDateTo' class="form-control" id="rangeTabTo" data-plugin="datepicker">
</div>
</div>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-md-12 padding-top-20">
<button type="submit" class="btn btn-default pull-right black">SEARCH</button>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="widget widget-shadow widget-responsive bg-purple-600 white" id="widgetLineareaColor">
<div class="widget-content">
<div class="padding-top-30 padding-30" style="height:calc(100% - 250px);">
<p class="font-size-20 text-nowrap">Scan by Details</p>
<div class="form-group row padding-top-25">
<div class="col-sm-6">
<label class="control-label" for="nameInput">Name</label>
<input type="text" class="form-control focus" id="client_name" name="nameInput" placeholder="Name" autocomplete="off">
</div>
<div class="col-sm-6">
<label class="control-label" for="inputAddress">Choose Advice</label>
<select name="followup_input" class="form-control" data-plugin="select2" id="selectFollowup" >
    <option value="">N/A</option>
    <option value="Seen - F/U scheduled">Seen-F/U scheduled</option>
    <option value="Seen - F/U not scheduled">Seen-F/U not scheduled</option>
    <option value="No-show">No-show</option>
    <option value="Cancelled">Cancelled</option>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="inputAddress">Choose Company</label>
<select name="company" class="form-control" data-plugin="select2" id="companyselection" >
<?php echo $companyOPTIONS; ?>
</select>
</div>
<div class="col-sm-6">
<label class="control-label" for="inputAddress">Choose Location</label>
<select name="location" class="form-control" data-plugin="select2" id="locationselection">
<?php echo $locationOPTIONS; ?>
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="inputService">Service</label>
<select name="service" data-plugin="select2" id="serviceselection" class="form-control">
<?php echo $serviceOPTIONS; ?> 
<!-- <option value="15">Family Food Nutrition Boot Camp</option>
<option value="16">Hamilton Lane Nutrition Boot Camp</option>
<option value="12">HMO - Nutrition Counseling</option>
<option value="13">HSA/Open Access Plan Nutrition Counseling</option>
<option value="9">Individualized Nutrition Counseling</option>
<option value="10">Nutrition Counseling</option>
<option value="11">Virtual Nutrition Counseling</option>
<option value="14">VWR Eat Right Award Nutrition Counseling</option> -->
</select>
</div>
<?php
if( $companyuser == '' && empty($companyuser) ){ 
echo <<< EOT
<div class="col-sm-6">
<label class="control-label" for="inputDietitian">Dietitian</label>
<select name="dietitian" data-plugin="select2" id="dietitianselection" class="form-control">
{$dietitianOPTIONS}
</select>
</div>
EOT;
}
?>
</div>
<div class="form-group row">
<div class="col-sm-12">
<button type="submit" class="btn btn-default pull-right black">SEARCH</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<div class="panel">
<header class="panel-heading">
<h2 class="panel-title">Scan Results<!--span class="panel-desc">Swipe Mode, ModeSwitch, Minimap, Sortable, SortableSwitch</span--></h2>
</header>
<div class="panel-body">
<div class="form-group">
<table id="appointments_list" class="tablesaw table-striped table-bordered table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch  data-page-size="10">
<thead>
<tr>
<th data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="persist">Name</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="3">Company</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="2">Location</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="Service Name">Service Name</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="4">Date</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="5">Time</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="6">Booked By:</th>
<?php
if( $companyuser == '' && empty($companyuser) ){
echo '<th data-tablesaw-sortable-col data-tablesaw-priority="7">Advice</th>
<th data-tablesaw-sortable-col data-tablesaw-priority="8">Action</th>';
}else{
echo '<th data-tablesaw-sortable-col data-tablesaw-priority="7">Advised</th>';
}
?>
</tr>
</thead>

<tbody>
<?php
if( !empty( $searchResult ) ){
	foreach( $searchResult as $result ){
		$timeWalkIn = "";
		if( $result['appointment_time'] == "00:00" ){
			$timeWalkIn = "Walk-in";
		}else{
			$timeWalkIn = $result['appointment_time'];
		}
		$action_row = '';
		if( $companyuser == '' && empty($companyuser) ){
		    $action_row = <<< EOT
		    <td>{$result['da_followup']}</td>
		    <td><button onclick="cancelAppointment( {$result['confirmation_number']}, this )" class="btn btn-danger btn-xs delete-row-btn"><i class="icon wb-close" aria-hidden="true"></i> DELETE</button></td>
EOT;
		}else{
		    $action_row = <<< EOT
		    <td>{$result['followup']}</td>
EOT;
		}
		echo <<< EOT
		<tr>
		<td><a href="javascript:void(0)">{$result['firstname']} {$result['lastname']}</a></td>
		<td>{$result['company_name']}</td>
		<td>{$result['address2']}</td>
		<td>{$result['name']}</td>
		<td>{$result['appointment_date']}</td>
		<td>{$timeWalkIn}</td>
		<td>{$result['booked_by']}</td>
		{$action_row}
		</tr>
EOT;
	}
}
?>

</tbody>
<tfoot>
<tr>
<td colspan="2" style="border:none">
<ul data-plugin="paginator" class="pagination pagination-no-border" data-skin="pagination-no-border"></ul>
</td>
</tr>
</tfoot>
</table>

</div>
<!-- end search results --> 
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
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/vendor/footable/footable.all.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script> 
<script src="../assets/assets/vendor/matchheight/jquery.matchHeight-min.js"></script> 
<script src="../assets/assets/vendor/filament-tablesaw/tablesaw.js"></script> 
<script src="../assets/assets/vendor/filament-tablesaw/tablesaw-init.js"></script> 

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
<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/js/components/bootstrap-sweetalert.js"></script> 
<script src="../assets/assets/js/components/matchheight.min.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script> 
<script>
	//functions
	var firstload  = '<?php echo $firstload?>';
	if( firstload ){
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url:'getListOfAllAppointments' ,
			success: function( data ){
				var allList = jQuery.parseJSON(data);
				displayAppointment( allList );
			}
		});	
	}

	function displayAppointment( list ){
		if( list.length > 0 ){
			var innerHtml = "";
			$( '#appointments_list tbody' ).empty();
			$.each( list, function( key, value ){
				var timeWalkIn = "";
				if( value['appointment_time'] == "00:00" ){
					timeWalkIn = "Walk-in";
				}else{
					timeWalkIn = value['appointment_time'];
				}
				innerHtml += "<tr>"+
				"<td>"+value['firstname']+" "+value['lastname']+"</td>"+
				"<td>"+value['company_name']+"</td>"+
				"<td>"+value['address2']+"</td>"+
				"<td>"+value['name']+"</td>"+
				"<td>"+value['appointment_date']+"</td>"+
				"<td>"+timeWalkIn+"</td>"+
				"<td>"+value['booked_by']+"</td>"+
				"<td><button onclick='cancelAppointment( "+value['confirmation_number']+", this )' class='btn btn-danger btn-xs delete-row-btn'><i class='icon wb-close' aria-hidden='true'></i> DELETE</button></td>"+
				"</tr>";
			});
			$( '#appointments_list tbody' ).html( innerHtml );
		}
	}


	// refresh location list on change
	$( '#companyselection' ).on( 'change', function(){
		var companyID = $(this).val();
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'getAllLocationNames',
			data: { 
				'company_id': companyID,
			},
			success: function( data ){
				var newLocList = '<option value="">Choose Location</option>';
				var retData = jQuery.parseJSON( data );
				if( retData.length > 0 ){
					$.each( retData, function( key, val ){
						newLocList += '<option value="'+val.location_id+'">'+val.address2+'</option>';
					});
					$( '#locationselection' ).html( newLocList );
				}
			},
		});
	});

	// refresh service list on change
	$( '#locationselection' ).on( 'change', function(){
		var locationID = $(this).val();
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'getAllServiceNames',
			data: { 
				'locationid': locationID,
			},
			success: function( data ){
				var newSrvcList = '<option value="">Choose Service</option>';
				var retData = jQuery.parseJSON( data );
				if( retData.length > 0 ){
					$.each( retData, function( key, val ){
						newSrvcList += '<option value="'+val.service_id+'">'+val.name+'</option>';
					});
					$( '#serviceselection' ).html( newSrvcList );
				}
			},
		});
	});

	// refresh location list on change
	$( '#serviceselection' ).on( 'change', function(){
		var serviceID = $(this).val();
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'getAllDietitianNames',
			data: { 
				'serviceid': serviceID,
			},
			success: function( data ){
				var newLocList = '<option value="">Choose Dietitian</option>';
				var retData = jQuery.parseJSON( data );
				if( retData.length > 0 ){
					$.each( retData, function( key, val ){
						newLocList += '<option value="'+val.dietitian_id+'">'+val.first_name+" "+val.last_name+'</option>';
					});
					$( '#dietitianselection' ).html( newLocList );
				}
			},
		});
	});

	function cancelAppointment( conf_num, elem ){
	  	swal({
	        title: "Are you sure?",
	        text: "This will cancel the appointment.",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: '#DD6B55',
	        confirmButtonText: 'Yes, cancel it please.',
	        closeOnConfirm: false,
	        //closeOnCancel: false
	    },
	    function() {
	    	var d = new Date();
			var addzero = "";
			if(d.getMonth() < 10) {
				addzero = "0";
			}
	    	$.ajax({
				type: 'POST',
				datatype: 'JSON',
				url: 'deleteAppointments',
				data: { 
					'confirmationid': conf_num,
					'date': d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),
				},
				 success: function(msg) {
				    if(msg == "success" ) {
					  	$( elem ).closest( 'tr' ).remove();
						swal("Canceled!",
				        "Appointment has been canceled!",
				        "success");
					}
				},
                failure: function(msg) {
				    if(msg == "fail" ) {
						swal("Failed!",
				        "Failed to cancel appointment!",
				        "failed");
					}
				},
			});
	    });
	}

	$( '#singleTab' ).on( 'click', function(){
		$( '#rangeTabFrom' ).val( '' );
		$( '#rangeTabTo' ).val( '' );
	});

	$( '#rangeTab' ).on( 'click', function(){
		$( '#singleTabDate' ).val( '' );
	});

	function exportAppointmentsData() {
		var client_name = '<?php echo $client_name?>';
		var company = '<?php echo $company?>';
		var location = '<?php echo $location?>';
		var followup_input = '<?php echo $followup_input?>';
		var service = '<?php echo $service?>';
		var dietitian = '<?php echo $dietitian?>';
		var nameInput = '<?php echo $nameInput?>';
		var singleDate = '<?php echo $singleDate?>';
		var rangeDateFrom = '<?php echo $rangeDateFrom?>';
		var rangeDateTo = '<?php echo $rangeDateTo?>';

	    if((singleDate != "") || ((rangeDateFrom !="") || (rangeDateTo !="") ) || (company !="") || (location !="") || (service !="") || (dietitian !="") || (client_name !="") || (followup_input !="")) {
	        document.location = "exportSearchList/?client_name="+client_name+"&singledate="+singleDate+"&fromdate="+rangeDateFrom+"&todate="+rangeDateTo+"&company_id="+company+"&locationid="+location+"&serviceid="+service+"&dietitian_id="+dietitian+"&DL="+1+"&followup_input="+followup_input;
	    }else{
	    //	document.location = "exportDataInCSV";
	  //       $.ajax({
	  //   		url:'exportDataInCSV' ,
			// 	type:'POST',
			// 	success: function() {
			//         document.location = "exportDataInCSV";
			//     },
			//     error: function() {
			//         console.log("Failed!");
			//     }
								
			// });
	        
	    }
	}

	///
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
        var filtering = $('#appointments_list');
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
        var addrow = $('#appointments_list');
        // addrow.footable().on('click', '.delete-row-btn', function() {

        //   //get the footable object
        //   var footable = addrow.data('footable');

        //   //get the row we are wanting to delete
        //   var row = $(this).parents('tr:first');

        //   //delete the row
        //   footable.removeRow(row);
        // });

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