<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Select Service | Familyfood Dashboard</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/jvectormap/jquery-jvectormap.css">
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
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
<style>
.alert-info {
color: #808080 !important;
font-weight: 500 !important;
}
</style>
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!-- popup -->
<div id="myModal" class="modal fade modal-danger">
<div class="modal-dialog modal-center">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">A QUICK NOTE ON SPAM</h4>
</div>

<div class="modal-body text-dark padding-bottom-30">
<h4>We have been receiving information that some of our confirmation and reminder emails have been going straight to the recipients' Spam folder.</h4>
<p style="padding-bottom: 15px">While we are fully compliant with the <a href="https://en.wikipedia.org/wiki/CAN-SPAM_Act_of_2003" target="_blank">CAN-SPAM Act of 2003</a>, most hosts aggresively block what they think is spam. Remember to check your Spam folder and whitelist our domain. Instructions for most popular email hosts can be found <a href="https://www.benchmarkemail.com/help-FAQ/answer/what-is-whitelisting-how-do-i-add-email-addresses-to-my-safe-senders-list-in-my-email-client-or-my-security-software" target="_blank">here</a>.</p>

<div class="alert alert-info alert-dismissible" role="alert">
For corporate emails, please contact your IT administrator.
</div>
																
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">I understand</button>
</div>

</div>
</div>
</div>
<!-- end popup -->
<!--[if lt IE 8]>
 <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
<?php
// start header menu
if( $companyuser != "" ){
    include("inc_menu_header.php");
    include("inc_left_menu_company.php");
}else{
    include("inc_user_menu_header.php");
    include("inc_user_left_menu.php");
}
?>
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
<h1 class="page-title">New Appointment</h1>
<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>Manage Appointments</a>
</div>
</div>

<!--div class="row">
<div class="col-xlg-4 col-md-6">
<div class="panel panel-transparent">
<div class="panel-heading">
<h4 class="panel-title">Transparent Panel</h4>
<div class="panel-actions">
<a class="panel-action icon wb-minus" aria-controls="exampleTransparentBody" aria-expanded="true" data-toggle="panel-collapse" href="#exampleTransparentBody" aria-hidden="true"></a>
<a class="panel-action icon wb-close" data-toggle="panel-close" aria-hidden="true"></a>
</div>
</div>

<div class="panel-body">
<p>Lorem ipsum Ea aliquip minim aliqua sunt qui cupidatat minim qui nisi nisi dolore Ut enim aliquip eiusmod proident tempor non voluptate voluptate aute ea mollit veniam nisi sint proident sed velit est non voluptate magna amet dolor labore elit magna cupidatat aliquip.</p>
</div>
</div>
</div>
</div-->

<div class="panel">
<div class="panel-body">
<!-- start progress bar -->
<h2>SELECT SERVICE</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 33.2%" role="progressbar">
<span class="sr-only">90% Complete</span>
</div>
</div>
<!-- end progress bar -->
<!-- start of service list -->
<div>
<table id="servicesTable" class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
<thead>
<tr>
<th>Service Name</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<!-- <tr>
<td>
<div class="form-group">
<input type="radio" id="inputCardNumber" name="number" placeholder="Card number">
<label class="control-label">INDIVIDUALIZED NUTRITION COUNSELING</label>
</div></td>
<td style="width:80%">Don't lose your visits! Sign up for 1-on-1 nutrition counseling with a Family Food Registered Dietitian at your job for free! *Must bring health insurance card to the first visit. *$30 cancellation fee for no-shows or cancellations less than 24hr prior</td>
</tr>
<tr>
<td><div class="form-group">
<input type="radio" id="inputCardNumber" name="number" placeholder="Card number">
<label class="control-label">INDIVIDUALIZED NUTRITION COUNSELING</label>
</div></td>
<td style="width:80%">Don't lose your visits! Sign up for 1-on-1 nutrition counseling with a Family Food Registered Dietitian at your job for free! *Must bring health insurance card to the first visit. *$30 cancellation fee for no-shows or cancellations less than 24hr prior</td>
</tr> -->
</tbody>
</table>
</div>
<!-- end of service list -->
<div class="col-md-6 text-left"></div>
<div class="col-md-6 text-right"><a href="javascript:void(0)" onclick="bookDate()" class="btn btn-success">BOOK DATE <i class="icon wb-chevron-right" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>
<!-- End Page -->
<!-- start footer -->
<?php include("inc_footer.php"); ?>
<!-- end footer -->
<!-- Core -->
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
<script src="../assets/assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/assets/vendor/jvectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<!-- Scripts -->
<script src="../assets/assets/js/core.js"></script>
<script src="../assets/assets/js/site.js"></script>
<script src="../assets/assets/js/sections/menu.js"></script>
<script src="../assets/assets/js/sections/menubar.js"></script>
<script src="../assets/assets/js/sections/sidebar.js"></script>
<script src="../assets/assets/js/components/asscrollable.js"></script>
<script src="../assets/assets/js/components/animsition.js"></script>
<script src="../assets/assets/js/components/slidepanel.js"></script>
<!--script src="../assets/assets/js/components/switchery.js"></script>
<script src="../assets/assets/js/components/jvectormap.js"></script-->

<script>
// functions
$.ajax( {
type: 'POST',
datatype: 'JSON',
url: 'getSessiondetails',
type: 'POST',
success: function ( data ) {
var sessionDetails = jQuery.parseJSON( data );
getServices( sessionDetails );
}
} );
function getServices( sessionDetails ) {
if ( typeof sessionDetails != 'undefined' ) {
$.ajax( {
type: 'POST',
datatype: 'JSON',
url: 'displayservices',
data: {
'locationid': sessionDetails.location_id,
},
success: function ( data ) {
var services = jQuery.parseJSON( data );
setServices( services );
}
} );
}
}
function setServices( services ) {
if ( services.length > 0 && services != 'undefined' ) {
var innerhtml = '';
$.each( services, function ( key, val ) {
innerhtml += '<tr>' +
'<td>' +
'<div class="form-group">' +
'<input type="radio" id="inputCardNumber' + key + '" name="number" onclick="setSelectedService(\'' + val.service_id + '\', \`' + val.name + '\`)" placeholder="Card number">' +
'<label for="inputCardNumber' + key + '" class="control-label">' + val.name + '</label>' +
'</div></td>' +
'<td style="width:80%">' + val.description + '</td>' +
'</tr>';
} );
$( '#servicesTable tbody' ).html( innerhtml );
}
}
var globalServiceID = 0;
var globalServiceName = "";
function setSelectedService( serviceID, serviceName ) {
globalServiceID = serviceID;
globalServiceName = serviceName;
}
function bookDate() {
if ( globalServiceName != "" && globalServiceID > 0 ) {
$.ajax( {
type: 'POST',
datatype: 'JSON',
url: 'setLocationid',
data: {
'service_id': globalServiceID,
'servicename': globalServiceName,
},
success: function ( data ) {
if ( data == 'success' ) {
window.location.href = 'timeslots';
}
}
} );
}
}
( function ( document, window, $ ) {
'use strict';
var Site = window.Site;
$( document ).ready( function () {
Site.run();
} );
} )( document, window, jQuery );
</script>
</body>
</html>