<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Manage Dietitians | Familyfood Dashboard</title>
<link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
<link rel="shortcut icon" href="../assets/images/favicon.ico">

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

<!-- plugins -->
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/formvalidation/formValidation.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">

<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/pages/user.css">

<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<script src="https://use.fontawesome.com/286c52578e.js"></script>

<!--[if lt IE 9]>
    <script src="../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

<!--[if lt IE 10]>
    <script src="../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

<!-- Scripts -->
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
    Breakpoints();
  </script>
</head>
<body class="page-user dashboard site-menubar-unfold" data-auto-menubar="false">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<?php include("inc_menu_header.php"); ?>
<?php include("inc_left_menu.php"); ?>
<!-- Page -->
<div class="page animsition">
<div class="page-content">
<div class="page-header">
<h1 class="page-title">View / Manage Dietitian</h1>
<div class="page-header-actions"> <a href="dietitianAdd" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>ADD DIETITIAN</a>
</div>
</div>

<div class="modal fade modal-info" id="loadModal" aria-hidden="true" aria-labelledby="loadModal"
  role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center modal-sm">
      	<div class='center-block'>
	      	<img src="../images/spinner.gif" alt="...">
		</div>
        <!-- <div class="modal-body">
          <div class="example-grid">
            
          </div>
        </div> -->
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="impactModal" aria-hidden="false" aria-labelledby="impactModal"
role="dialog" tabindex="-1">
	<div class="modal-dialog">
	  <form class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">�</span>
	      </button>
	      <h4 class="modal-title" id="impactModal">RD Impact</h4>
	    </div>
	    <div class="modal-body">
	      <div class="row">
	      	<div class="pull-left">
	      		<a href="javascript:void(0);" id="addImpact" role="button" class="btn btn-primary btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>ADD IMPACT</a>
	      	</div>
	      	<div class="clearfix"></div>
	        <table class="table" id="table_impact">
          		<thead><th>Title</th><th>Details</th><th>Make Public</th><th>Added by</th></thead>
          		<tbody></tbody>
          	</table>
	      </div>
	    </div>
	  </form>
	</div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade" id="insertImpact" aria-hidden="false" aria-labelledby="impactLabel"
role="dialog" tabindex="-1">
	<div class="modal-dialog">
	  <form class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        <span aria-hidden="true">�</span>
	      </button>
	      <h4 class="modal-title" id="impactLabel">Add RD Impact</h4>
	    </div>
	    <div class="modal-body">
	      <div class="row">
	        <div class="col-lg-6 form-group">
	          <input type="text" class="form-control" id="di_title" name="firstName" placeholder="First Name">
	        </div>
	        <div class="col-lg-6 form-group">
	          <div class="checkbox-custom checkbox-danger">
                <input name="inputCheckboxes" id="di_status" type="checkbox">
                <label>View Status</label>
              </div>
	        </div>
	        <div class="col-lg-12 form-group">
	          <textarea class="form-control" id="di_details" rows="5" placeholder="Type your details"></textarea>
	        </div>
	        
	        
	        <div class="col-sm-12 pull-right">
	          <button class="btn btn-primary btn-outline" id="insertData" type="button">Add Comment</button>
	        </div>
	      </div>
	    </div>
	  </form>
	</div>
</div>
<!-- End Modal -->

<!-- Panel -->
<div class="panel">
<div class="panel-body">
<div class="col-md-12">
<div class="form-group">
<div class="input-group">
<input type="search" id="container-search" value="" class="form-control" placeholder="Search Dietitian">
<span class="input-group-btn">
<button type="submit" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
</span> </div>
</div>
</div>

<div class="nav-tabs-horizontal" id="searchable-container">
<div class="tab-content">
<div class="tab-pane active" id="all_contacts" role="tabpanel">
<div id="searchable-container">
<ul class="list-group">
<!-- start -->
<?php
$dietitianObject = array();
if( !empty( $dietitianList ) ){
	foreach( $dietitianList as $dietitian ){
		$dietitianName = $dietitian->first_name.' '.$dietitian->last_name;
		$actionButton = '<button type="button" class="btn btn-icon btn-danger" onclick="deleteDietitian('.$dietitian->dietitian_id.', this)" ><i class="icon fa fa-ban" aria-hidden="true"></i> DEACTIVATE</button>';
		if( !$dietitian->status ){
			$actionButton = '<button type="button" class="btn btn-icon btn-info" onclick="activateDietitian('.$dietitian->dietitian_id.', this)" ><i class="icon wb-loop" aria-hidden="true"></i> RESTORE</button>';
		}
		// data-target="#editdietitian"
		echo <<< EOT
			<div class="row">
			<div class="col-md-12">
			<li class="list-group-item">
			<div class="media">
			<div class="media-left hidden-xs">
			<div class="avatar"><img src="../assets/assets/portraits/user-icon.png" alt="..."></div>
			</div>
			<div class="media-body">
			<h4 class="media-heading">{$dietitianName}<small>"{$dietitian->alias_name}"</small></h4>
			<p><i class="icon icon-color wb-envelope" aria-hidden="true"></i>{$dietitian->email}</p>
			<p><i class="icon icon-color wb-mobile" aria-hidden="true"></i>{$dietitian->phone}</p>
			<button type="button" class="btn btn-default btn-sm" onclick="setDietitianID({$dietitian->dietitian_id})" data-toggle="modal"><i class="icon wb-calendar" aria-hidden="true"></i>SET AVAILABILITY</button>
			<button type="button" class="btn btn-default btn-sm" onclick="editDietitian({$dietitian->dietitian_id})" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i>EDIT</button>
			<button type="button" class="btn btn-default btn-sm" onclick="locDietitian({$dietitian->dietitian_id})" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i>LOCATION AVAILABILITY</button>
			<button type="button" class="btn btn-default btn-sm" onclick="viewRDImpact({$dietitian->dietitian_id})" data-toggle="modal"><i class="icon wb-calendar" aria-hidden="true"></i>VIEW RD-IMPACT</button>
			</div>
			<div class="media-right" id="actionButton_{$dietitian->dietitian_id}">
			{$actionButton}
			</div>
			</div>
			</li>
			</div>
			</div>
EOT;
		$dietitianObject[$dietitian->dietitian_id] = $dietitian;
	}
}
?>
<!-- end -->
<!-- <div class="row">
<div class="col-md-12">
<li class="list-group-item">
<div class="media">
<div class="media-left hidden-xs">
<div class="avatar"><img src="../assets/assets/portraits/user-icon.png" alt="..."></div>
</div>
<div class="media-body">
<h4 class="media-heading">Alyson Heller<small>"Allyson"</small></h4>
<p><i class="icon icon-color wb-envelope" aria-hidden="true"></i>alysonroseheller@gmail.com</p>
<p><i class="icon icon-color wb-mobile" aria-hidden="true"></i>8002038657</p>
<button type="button" class="btn btn-default btn-sm" data-target="#setavailability" data-toggle="modal"><i class="icon wb-calendar" aria-hidden="true"></i>SET AVAILABILITY</button>
<button type="button" class="btn btn-default btn-sm" data-target="#editdietitian" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i>EDIT</button>
</div>
<div class="media-right">
<button type="button" class="btn btn-icon btn-danger" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i> DELETE</button>
</div>
</div>
</li>
</div>
</div>
<div class="row">
<div class="col-md-12">
<li class="list-group-item">
<div class="media">
<div class="media-left hidden-xs">
<div class="avatar"><img src="../assets/assets/portraits/user-icon.png" alt="..."></div>
</div>
<div class="media-body">
<h4 class="media-heading">Amanda Sajczuk<small>"Amanda"</small></h4>
<p><i class="icon icon-color wb-envelope" aria-hidden="true"></i>amanda.sajczuk@gmail.com</p>
<p><i class="icon icon-color wb-mobile" aria-hidden="true"></i>8002038657</p>
<button type="button" class="btn btn-default btn-sm" data-target="#setavailability" data-toggle="modal"><i class="icon wb-calendar" aria-hidden="true"></i>SET AVAILABILITY</button>
<button type="button" class="btn btn-default btn-sm" data-target="#editdietitian" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i>EDIT</button>
</div>
<div class="media-right">
<button type="button" class="btn btn-icon btn-danger" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i> DELETE</button>
</div>
</div>
</li>
</div>
</div>
<div class="row">
<div class="col-md-12">
<li class="list-group-item">
<div class="media">
<div class="media-left hidden-xs">
<div class="avatar"><img src="../assets/assets/portraits/user-icon.png" alt="..."></div>
</div>
<div class="media-body">
<h4 class="media-heading">Chelsea Anderson<small>"Chelsea"</small></h4>
<p><i class="icon icon-color wb-envelope" aria-hidden="true"></i>chelseakaeanderson@gmail.com</p>
<p><i class="icon icon-color wb-mobile" aria-hidden="true"></i>8002038657</p>
<button type="button" class="btn btn-default btn-sm" data-target="#setavailability" data-toggle="modal"><i class="icon wb-calendar" aria-hidden="true"></i>SET AVAILABILITY</button>
<button type="button" class="btn btn-default btn-sm" data-target="#editdietitian" data-toggle="modal"><i class="icon wb-edit" aria-hidden="true"></i>EDIT</button>
</div>
<div class="media-right">
<button type="button" class="btn btn-icon btn-danger" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i> DELETE</button>
</div>
</div>
</li>
</div>
</div> -->
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- End Panel --> 
</div>
</div>
<!-- End Page --> 

<!-- start availability modal -->
<div class="modal fade modal-fill-in" id="setavailability" aria-hidden="false" aria-labelledby="setavailability" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">Set Availabilty Date</h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-6 form-group">
<select id="company">
<?php
if( count( $companies ) > 0 ){
	echo '<option value="">Choose Company</option>';
	foreach( $companies as $co ){
		echo <<< EOT
		<option value="{$co['company_id']}">{$co['company_name']}</option>
EOT;
	}
}
?>
</select>
</div>
<div class="col-lg-6 form-group">
<select id="location">
<?php
if( count( $locations ) > 0 ){
	echo '<option value="">Choose Location</option>';
	foreach( $locations as $loc ){
		echo <<< EOT
		<option value="{$loc->locatio_id}">{$loc->address2}</option>
EOT;
	}
}
?>
</select>
</div>

<!--div class="col-lg-4 form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email">
</div-->

<div class="col-lg-12 form-group">
<select id="conference">
	<option value="">Choose Conference</option>
</select>
</div>
<div class="col-lg-12 form-group">
<div class="nav-tabs-horizontal">
<ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
<li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab" id="singleTab">SINGLE DATE SELECT</a></li>
<li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab" id="rangeTab">RANGE DATE SELECT</a></li>
<li class="dropdown" role="presentation" style="display: none;"> <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"> <span class="caret"></span>Menu </a>
<ul class="dropdown-menu" role="menu">
<li class="" role="presentation"><a data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne" role="tab">SINGLE DATE SELECT</a></li>
<li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo" role="tab">RANGE DATE SELECT</a></li>
</ul>
</li>
</ul>
<div class="tab-content padding-top-40">
<div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" id="singleTabDate" class="form-control" data-plugin="datepicker">
</div>
</div>
<div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
<div class="input-daterange">
<div class="input-group"> <span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i> </span>
<input type="text" id="rangeTabFrom" class="form-control" data-plugin="datepicker" name="start">
</div>
<div class="input-group"> <span class="input-group-addon">to</span>
<input type="text" id="rangeTabTo" class="form-control" data-plugin="datepicker" name="end">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-success" onclick="saveDietAvailability()"><i class="icon wb-check" aria-hidden="true"></i> SUBMIT</button>
</div>
</div>
</div>
</div>

<!-- end availability modal --> 

<!-- start edit modal -->
<div class="modal fade modal-fill-in" id="editdietitian" aria-hidden="false" aria-labelledby="editdietitian" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="exampleFillInModalTitle">Edit Dietitian</h4>
</div>
<div class="modal-body">

<form class="form-horizontal method="POST" fv-form fv-form-bootstrap" id="exampleStandardForm" autocomplete="off" novalidate>
<button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
<input type="hidden" id="diet_id" name="dietitian_id">
<div class="form-group">
<label class="col-sm-3 control-label">First name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="dt_fname" name="standard_fullName" data-fv-field="standard_fullName">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="standard_fullName" data-fv-result="INVALID" style="">The first name is required and cannot be empty</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Last name</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="dt_lname" name="standard_lastName" data-fv-field="standard_lastName">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="standard_lastName" data-fv-result="NOT_VALIDATED" style="display: none;">Your last name is required and cannot be empty</small>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Alias</label>
<div class="col-sm-6">
<input type="text" class="form-control" id="dt_alias" name="standard_Alias" data-fv-field="standard_Alias">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="standard_Alias" data-fv-result="NOT_VALIDATED" style="display: none;">Your alias name is required</small>
</div>
</div>

<div class="form-group has-error">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="dt_email" name="standard_email" data-fv-field="standard_email">
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="standard_email" data-fv-result="INVALID" style="">The email address is required and cannot be empty</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="standard_email" data-fv-result="VALID" style="display: none;">The email address is not valid</small></div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">Cellphone</label>
<div class="col-sm-9">
<input name="phone_num" type="text" class="form-control" id="dt_phone" data-plugin="formatter" data-pattern="([[999]]) [[999]]-[[9999]]">
<p class="help-block">(123) 123-1234</p>
</div>
</div>

<div class="form-group">
<label class="col-sm-3 control-label">&nbsp;</label>
<div class="col-sm-9">
<div class="checkbox-custom checkbox-primary">
<input type="checkbox" id="phone_stat" name="showPhonenumberToCustomer">
<label for="phone_stat"><small>Display your phone number to customers scheduling appointments online</small></label>
</div>
</div>
</div>

<div class="text-right">
<button type="button" class="btn btn-outline btn-primary" data-dismiss="modal">Cancel</button>
<button type="submit" class="btn btn-primary disabled" id="validateButton2" disabled="disabled">Submit</button>
</div>
</form>

</div>

</div>
</div>
</div>

<!-- end edit modal --> 

<!-- start of edit location availability -->
<div class="modal fade modal-fill-in" id="editAvailability" style="overflow-y: scroll;" aria-hidden="false" aria-labelledby="editAvailability" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content" style="width:100%">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<h4 class="modal-title" id="exampleFillInModalTitle">Edit Dietitian</h4>
</div>

<div class="modal-body">
<div class="col-lg-12"> 
<div class="panel">
<header class="panel-heading">
<h3 class="panel-title">Filtering</h3>
</header>
<div class="panel-body">
<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">

<thead>
<tr>
<th data-toggle="true">Company</th>
<th>Conference</th>
<th data-hide="phone, tablet">Location</th>
<th data-hide="phone, tablet">Date Range</th>
<th data-hide="phone, tablet">Delete</th>
</tr>
</thead>


<div class="form-inline padding-bottom-15">
<div class="row">

<div class="col-sm-6">
<div class="form-group">
<input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off">
</div>
</div>

<div class="col-sm-6 text-right">
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

</div>
</div>

<tbody>

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
</div>
</div>

</div>

</div>
</div>
</div>
<!-- end of edit location availability -->

<!-- Footer -->
<?php include("inc_footer.php"); ?>
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
<script src="../assets/assets/vendor/search/jquery.searchable-1.0.0.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-sweetalert/sweet-alert.js"></script> 
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script> 
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/vendor/formvalidation/formValidation.min.js"></script>
<script src="../assets/assets/vendor/formvalidation/framework/bootstrap.min.js"></script>
<script src="../assets/assets/vendor/formatter-js/jquery.formatter.js"></script>
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
<script src="../assets/assets/js/plugins/responsive-tabs.js"></script> 
<script src="../assets/assets/js/components/tabs.js"></script> 
<script src="../assets/assets/js/components/bootstrap-select.js"></script> 
<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/js/components/formatter-js.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>

<script>
//functions

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


var dietitianObject = <?php print_r( json_encode( $dietitianObject ) ); ?>;
var edit_dietitian_result = <?php print_r( json_encode( $edit_dietitian_result ) ); ?>;
if( edit_dietitian_result != "" ){
	alert( edit_dietitian_result );
	window.location.href = 'dietitian';
}
var currDietitian = "";
function editDietitian( dietitian_id ){
	$( '#editdietitian' ).modal( 'show' );
	currDietitian = dietitianObject[dietitian_id];
	$( '#diet_id' ).val( currDietitian.dietitian_id );
	$( '#dt_fname' ).val( currDietitian.first_name );
	$( '#dt_lname' ).val( currDietitian.last_name );
	$( '#dt_alias' ).val( currDietitian.alias_name );
	$( '#dt_email' ).val( currDietitian.email );
	$( '#dt_phone' ).val( currDietitian.phone );
	
	if( currDietitian.phone_status == "Yes"){
		$( '#phone_stat' ).prop( 'checked', true );
	}
}

function locDietitian( dietitian_id ){
	$( '#loadModal' ).modal( 'show' );
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getDietitianAvailability',
		data: { 
			'dietitian_id': dietitian_id,
		},
		success: function( data ){
			var availabilityList = jQuery.parseJSON(data);
			$( '#loadModal' ).modal( 'hide' );
			setAvailabilityList( availabilityList );
		},
		failure: function( data ){
			$( '#loadModal' ).modal( 'hide' );
			alert( 'Connection Failed' );
		}
	});
}

function viewRDImpact( dietitian_id ){
	$( '#loadModal' ).modal( 'show' );
	$.ajax({
		type: 'GET',
		datatype: 'JSON',
		url: 'getImpact',
		data: { 
			'dietitian_id': dietitian_id,
		},
		success: function( data ){
			var impactList = jQuery.parseJSON(data);
			var impact_html = "";
			$.each( impactList, function( key, value ){
				var status = "";
				if( value.di_status == 1 ){
					status = '<a href="javascript:void(0)" onclick="updateStatus('+value.di_id+', 0 )" id="di_'+value.di_id+'" ><i class="icon wb-eye" aria-hidden="true"></i></a>';
				}else{
					status = '<a href="javascript:void(0)" onclick="updateStatus('+value.di_id+', 1)" id="di_'+value.di_id+'"><i class="icon wb-eye-close" aria-hidden="true"></i></a>';
				}
				var by = "Admin";
				if( value.di_created_by > 0 ){
					by = value.first_name+' '+value.last_name;
				}

				impact_html += '<tr><td>'+value.di_title+'</td><td>'+value.di_details+'</td><td>'+status+'</td><td>'+by+'</td></tr>';
				$( '#addImpact' ).unbind( 'click' );
				$( '#addImpact' ).on( 'click', function(){
					showInsertModal( dietitian_id );
				});
			});
			$( '#impactModal #table_impact tbody' ).html( impact_html );
			$( '#loadModal' ).modal( 'hide' );
			$( '#impactModal' ).modal( 'show' );
		},
		failure: function( data ){
			$( '#loadModal' ).modal( 'hide' );
			alert( 'Connection Failed' );
		}
	});
}

function showInsertModal( dietitian_id ){
	$( '#impactModal' ).modal( 'hide' );
	$( '#insertImpact' ).modal( 'show' );
	$( '#di_title' ).val( '' );
    $( '#di_details' ).val( '' );
    $( '#di_status' ).prop( 'checked', false );

    $( '#insertData' ).unbind( 'click' );

    $( '#insertData' ).on( 'click', function(){
	    var status = 0;
	    if( $( '#di_status' ).is( ':checked' ) === true ){
	    	status = 1;
	    }
	    if( $( '#di_title' ).val() != "" && $( '#di_details' ).val() != "" ){
	    	$.ajax({ 
				type: 'GET',
				datatype: 'JSON',
				//async: false,
				url: 'saveimpact',
				data: { 
					'dietitian_id': dietitian_id,
					'di_title': $( '#di_title' ).val(),
					'di_details': $( '#di_details' ).val(),
		    		'di_status' : status,
		    		'by' : 0,
				},
				success: function( data ){
					if( data == 1 ){
			          	swal("Saved!",
			                "RD Impact Saved!",
			                "success");
			          	$( '#insertImpact' ).modal( 'hide' );
			          	viewRDImpact( dietitian_id );
			        }else{
			          	swal("Error", "Something went wrong, please try again.", "error");
			        }
				}
			});
	    }else{
	    	alert( 'Please fill up the Title and Details' );
	    }
    });
}

function updateStatus( id, status ){
	$.ajax({ 
		type: 'GET',
		datatype: 'JSON',
		//async: false,
		url: 'updateImpactStatus',
		data: { 
			'di_id': id,
    		'di_status' : status
		},
		success: function( data ){
			if( data == 1 ){
	          	swal("Saved!",
	                "RD Impact Saved!",
	                "success");
	          	$( '#di_'+id ).unbind( 'click' );
	          	if( status == 1 ){
	          		$( '#di_'+id ).html( '<i class="icon wb-eye" aria-hidden="true">' );
	          		$( '#di_'+id ).on( 'click', function(){
	          			updateStatus( id, 0 );
	          		});
	          	}else{
	          		$( '#di_'+id ).html( '<i class="icon wb-eye-close" aria-hidden="true">' );
	          		$( '#di_'+id ).on( 'click', function(){
	          			updateStatus( id, 1 );
	          		});
	          	}
	        }else{
	          	swal("Error", "Something went wrong, please try again.", "error");
	        }
		}
	});
}

function setAvailabilityList( list ){
	if( typeof list != 'undefined' ){
		if( list.length > 0 ){
			var htmlList = "";
			$.each( list, function( key, value ){
				// htmlList += '<tr><td>'+value['company_name']+'</td><td>'+value['address2']+'</td><td>'+value['conf_room']+'</td><td>'+value['available_date_from']+'</td><td>'+value['available_date_to']+'</td><td><button type="button" class="btn btn-icon btn-danger" onclick="cancelAppointment('+value['id']+', this)" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i> DELETE</button></td></tr>';
				htmlList += '<tr>';
				htmlList += '<td>'+value['company_name']+'</td>';
				htmlList += '<td>'+value['address2']+'</td>';
				htmlList += '<td>'+value['conf_room']+'</td>';
				htmlList += '<td>'+value['available_date_from']+' | '+value['available_date_to']+'</td>';
				htmlList += '<td><button type="button" class="btn btn-icon btn-danger" onclick="cancelAppointment('+value['id']+', this)" id="exampleWarningConfirm"><i class="icon wb-trash" aria-hidden="true"></i> DELETE</button></td>';
				htmlList += '</tr>';
			});
			
			$( '#editAvailability table tbody' ).html( htmlList );
		}else{
			$( '#editAvailability table tbody' ).html( 'No Location Available' );
		}
		$( '#editAvailability' ).modal( 'show' );
	}
}

var globalDieitianID = 0;
function setDietitianID( dietitian_id ){
	$( '#setavailability' ).modal( 'show' );
	globalDieitianID = dietitian_id;
}

$( '#company' ).on( 'change', function(){
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getAllLocationNames',
		data: { 
			'company_id': $(this).val(),
		},
		success: function( data ){
			var locList = jQuery.parseJSON(data);
			var newLocList = "";
			if( locList.length > 0 ){
				newLocList = "<option value=''>Choose Location</option>";
				$.each( locList, function( key, val ){
					newLocList = newLocList + "<option value="+val.location_id+">"+val.address2+"</option>";
				});
			}
			$( '#location' ).empty();
			$( '#location' ).append( newLocList );
		}
	});
});

$( '#location' ).on( 'change', function(){
	var locID = $( this ).val();
	if( locID != null ){
		postConfernce( locID );
	}
});

function postConfernce( locID ){
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getAllConferenceNames',
		data: { 
			'location_id': locID,
		},
		success: function( conf ){
			var confList = jQuery.parseJSON(conf);
			var newConfList = "";
			if( confList.length > 0 ){
				newConfList = "<option value=''>Choose Conference</option>";
				$.each( confList, function( key, val ){
					newConfList = newConfList + "<option value="+val.conference_id+">"+val.conf_room+"</option>";
				});
			}
			$( '#conference' ).empty();
			$( '#conference' ).append( newConfList );
		}
	});
}

$( '#singleTab' ).on( 'click', function(){
	$( '#rangeTabFrom' ).val( '' );
	$( '#rangeTabTo' ).val( '' );
});

$( '#rangeTab' ).on( 'click', function(){
	$( '#singleTabDate' ).val( '' );
});

function saveDietAvailability(){
	var dateFrom = "";
	var dateTo = "";
	
	if( $( '#singleTabDate' ).val() != "" ){
		var dString = $( '#singleTabDate' ).val();
		var d = dString.split( '-' );
		dateFrom = d[2]+"-"+d[0]+"-"+d[1];
		dateTo = dateFrom;
	}else {
		var fromString = $( '#rangeTabFrom' ).val();
		var dateToString = $( '#rangeTabTo' ).val();
		var dFrom = fromString.split( '-' );
		var dTo = dateToString.split( '-' );
		dateFrom = dFrom[2]+"-"+dFrom[0]+"-"+dFrom[1];
		dateTo = dTo[2]+"-"+dTo[0]+"-"+dTo[1];
	}

	if( dateFrom != "" && dateTo != "" && $( '#company' ).val() != "" &&
		$( '#conference' ).val() != "" && $( '#location' ).val() != "" && globalDieitianID > 0 ){

		//check first if dietitian is already booked on the date
		$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'saveavailableDates',
			data: { 
				'availabledatefrom': dateFrom,
				'dietitian_id': globalDieitianID,
				'availabledateto': dateTo,
				'company_id': $( '#company' ).val(),
				'locationid': $( '#location' ).val(),
				'conferenceid': $( '#conference' ).val(),
			},
			success: function( result ){
				if( result == true ){
					alert( "Available date  is stored" );
					$( '#setavailability' ).modal( 'hide' );
					$( '#rangeTabFrom' ).val( "" );
					$( '#rangeTabTo' ).val( "" );
					$( '#singleTabDate' ).val( "" );
					$( '#company' ).val( "" );
					$( '#location' ).val( "" );
					$( '#conference' ).val( "" );
					globalDieitianID = 0;
				}else{
					var parseData = jQuery.parseJSON( result );
					
					if( parseData.length > 0 ){
						var dates = "";
						if( parseData.length > 1 ){
							$.each( parseData, function( key, value ){
								dates += value.available_date_from+' TO '+value.available_date_to+'\n';
							});

							alert( 'Sorry some dates within the date period are already booked!\nDates already available\n'+dates )
						}else{
							alert( 'This date is already set for the user' );
						}
					}else{
						alert( 'Dietitian successfully booked!' );
					}
				}
			}
		});
	}else{
		alert( 'Please Complete all the information needed for searching' );
	}
}

function cancelAppointment( diet_avail_id, elem ){
	swal({
        title: "Are you sure?",
        text: "You will not be able to recover dietitian Appointment.",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, delete it',
        closeOnConfirm: false,
        //closeOnCancel: false
    },
    function() {
    	$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'cancelDietitianAppointment',
			data: { 
				'diet_avail_id': diet_avail_id,
			},
			success: function( data ){
				if( data ){
					$( elem ).closest( 'tr' ).remove();
					swal("Cancel!",
			        "Dietitian location availablility canceled!",
			        "success");
				}else{
					swal("Failed!",
			        "Dietitian location availablility cancel failed!",
			        "Failed");
				}
			},
		});
    });
}

function deleteDietitian( dietitian_id, elem ){
  	swal({
        title: "Are you sure?",
        text: "Are you sure you want to deactivate this dietitian?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, deactivate dietitian.',
        closeOnConfirm: false,
        //closeOnCancel: false
    },
    function() {
    	$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'removeDietitianMember',
			data: { 
				'dietitian_id': dietitian_id,
			},
			success: function( data ){
				$( '#actionButton_'+dietitian_id ).html( '<button type="button" class="btn btn-icon btn-info" onclick="activateDietitian('+dietitian_id+', this)" ><i class="icon wb-loop" aria-hidden="true"></i> RESTORE</button>' );
				swal("Deleted!",
		        "Dietitian info has been deleted!",
		        "success");
			},
		});
    });
}

function activateDietitian( dietitian_id, elem ){
  	swal({
        title: "Activate Dietitian",
        text: "Acitvating Dietitian allows him/her to login to his/her account again",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: '#DD6B55',
        confirmButtonText: 'Yes, activate it',
        closeOnConfirm: false,
        //closeOnCancel: false
    },
    function() {
    	$.ajax({
			type: 'POST',
			datatype: 'JSON',
			url: 'activateDietitianMember',
			data: { 
				'dietitian_id': dietitian_id,
			},
			success: function( data ){
				$( '#actionButton_'+dietitian_id ).html( '<button type="button" class="btn btn-icon btn-danger" onclick="deleteDietitian('+dietitian_id+', this)" ><i class="icon wb-trash" aria-hidden="true"></i> DEACTIVATE</button>' );
				swal("Activated!",
		        "Dietitian has been activated!",
		        "success");
			},
		});
    });
}
// delete address popup
    //   (function() {
    //     $('#exampleWarningConfirm').on("click", function() {
    //       swal({
    //           title: "Are you sure?",
    //           text: "You will not be able to recover dietitian info.",
    //           type: "warning",
    //           showCancelButton: true,
    //           confirmButtonColor: '#DD6B55',
    //           confirmButtonText: 'Yes, delete it',
    //           closeOnConfirm: false,
    //           //closeOnCancel: false
    //         },
    //         function() {
    //           swal("Deleted!",
    //             "Dietitian info has been deleted!",
    //             "success");
    //         });
    //     });


    // })(document, window, jQuery);

</script> 
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script> 
<script>
$(function () {
    $( '#table' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-md-12',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});

// Example inline datepicker
      // ---------------------
      (function() {
        // Reset Current
        $('#inlineDatepicker').datepicker();
        $("#inlineDatepicker").on("changeDate", function(event) {
          $("#inputHiddenInline").val(
            $("#inlineDatepicker").datepicker('getFormattedDate')
          );
        });
      })();
						
</script>
<script>
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });

      // Example Validataion Full
      // ------------------------
      (function() {
        $('#exampleFullForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton1',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9]+$/
                }
              }
            },
            email: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                stringLength: {
                  min: 8
                }
              }
            },
            birthday: {
              validators: {
                notEmpty: {
                  message: 'The birthday is required'
                },
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            github: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            skills: {
              validators: {
                notEmpty: {
                  message: 'The skills is required'
                },
                stringLength: {
                  max: 300
                }
              }
            },
            porto_is: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            'for[]': {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            company: {
              validators: {
                notEmpty: {
                  message: 'Please company'
                }
              }
            },
            browsers: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one browser you use daily for development'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Constraints
      // -------------------------------
      (function() {
        $('#exampleConstraintsForm, #exampleConstraintsFormTypes').formValidation({
          framework: "bootstrap",
          icon: null,
          fields: {
            type_email: {
              validators: {
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            type_url: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            type_digits: {
              validators: {
                digits: {
                  message: 'The value is not digits'
                }
              }
            },
            type_numberic: {
              validators: {
                integer: {
                  message: 'The value is not an number'
                }
              }
            },
            type_phone: {
              validators: {
                phone: {
                  message: 'The value is not an phone(US)'
                }
              }
            },
            type_credit_card: {
              validators: {
                creditCard: {
                  message: 'The credit card number is not valid'
                }
              }
            },
            type_date: {
              validators: {
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            type_color: {
              validators: {
                color: {
                  type: ['hex', 'hsl', 'hsla', 'keyword', 'rgb',
                    'rgba'
                  ], // The default value for type
                  message: 'The value is not valid color'
                }
              }
            },
            type_ip: {
              validators: {
                ip: {
                  ipv4: true,
                  ipv6: true,
                  message: 'The value is not valid ip(v4 or v6)'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Standard Mode
      // ---------------------------------
      (function() {
        $('#exampleStandardForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton2',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            standard_fullName: {
              validators: {
                notEmpty: {
                  message: 'Your first name is required and cannot be empty'
                }
              }
            },
												standard_lastName: {
              validators: {
                notEmpty: {
                  message: 'Your last name is required and cannot be empty'
                }
              }
            },
												standard_Alias: {
              validators: {
                notEmpty: {
                  message: 'Your alias is required'
                }
              }
            },
            standard_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            standard_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Summary Mode
      // -------------------------------
      (function() {
        $('.summary-errors').hide();

        $('#exampleSummaryForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton3',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            summary_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            summary_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            summary_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        })

        .on('success.form.fv', function(e) {
          // Reset the message element when the form is valid
          $('.summary-errors').html('');
        })

        .on('err.field.fv', function(e, data) {
          // data.fv     --> The FormValidation instance
          // data.field  --> The field name
          // data.element --> The field element
          $('.summary-errors').show();

          // Get the messages of field
          var messages = data.fv.getMessages(data.element);

          // Remove the field messages if they're already available
          $('.summary-errors').find('li[data-field="' + data.field +
            '"]').remove();

          // Loop over the messages
          for (var i in messages) {
            // Create new 'li' element to show the message
            $('<li/>')
              .attr('data-field', data.field)
              .wrapInner(
                $('<a/>')
                .attr('href', 'javascript: void(0);')
                // .addClass('alert alert-danger alert-dismissible')
                .html(messages[i])
                .on('click', function(e) {
                  // Focus on the invalid field
                  data.element.focus();
                })
              ).appendTo('.summary-errors > ul');
          }

          // Hide the default message
          // $field.data('fv.messages') returns the default element containing the messages
          data.element
            .data('fv.messages')
            .find('.help-block[data-fv-for="' + data.field + '"]')
            .hide();
        })

        .on('success.field.fv', function(e, data) {
          // Remove the field messages
          $('.summary-errors > ul').find('li[data-field="' + data.field +
            '"]').remove();
          if ($('#exampleSummaryForm').data('formValidation').isValid()) {
            $('.summary-errors').hide();
          }
        });
      })();
    })(document, window, jQuery);
  </script>

</body>
</html>
