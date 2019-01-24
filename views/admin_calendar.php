<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Calendar | Familyfood Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/fullcalendar/fullcalendar.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
<link rel="stylesheet" href="../assets/assets/vendor/jquery-selective/jquery-selective.css">
<link rel="stylesheet" href="../assets/assets/vendor/select2/select2.css">

<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/apps/calendar.css">

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

<?php include("inc_menu_header.php");
if( $data['companyuser'] != "" ){
	include("inc_left_menu_company.php"); 
}else{
	include("inc_left_menu.php"); 	
}
?>
<div class="page animsition">
<div class="page-header">
<h1 class="page-title">Calendar</h1>
</div>
<div class="page-content calendar-container padding-horizontal-30 container-fluid">
<div class="row">
<div class="col-md-3">
<div class="panel">
<header class="panel-heading">
<h3 class="panel-title">Choose Company</h3>
</header>
<div class="panel-body">
<form autocomplete="off">
<div class="form-group row">
<div class="col-sm-12">
<select class="form-control" id="company" data-placeholder="Select a Company">
<?php
if( !empty( $company_names ) ){
	foreach( $company_names as $company ){
		echo <<< EOT
		<option value="{$company['company_id']}">{$company['company_name']}</option>
EOT;
	}
}
?>
<!-- <option value="115" rel="1 and 1 Internet">1 and 1 Internet</option>
<option value="67" rel="ACTS">ACTS</option>
<option value="61" rel="Agnes Irwin ">Agnes Irwin </option>
<option value="54" rel="American Association for Cancer Research">American Association for Cancer Research</option>
<option value="70" rel="American Hearing Aid Associates">American Hearing Aid Associates</option>
<option value="14" rel="Amerihealth">Amerihealth</option>
<option value="56" rel="Arcadia">Arcadia</option>
<option value="59" rel="ARI">ARI</option>
<option value="16" rel="Ballard Spahr LLP">Ballard Spahr LLP</option>
<option value="68" rel="Bryn Mawr College">Bryn Mawr College</option>
<option value="121" rel="BSSF">BSSF</option>
<option value="39" rel="Bucks County Community College">Bucks County Community College</option>
<option value="77" rel="Cabrini College">Cabrini College</option>
<option value="25" rel="Calvary Temple Christian Academy">Calvary Temple Christian Academy</option>
<option value="106" rel="Campus Apartments">Campus Apartments</option>
<option value="10" rel="CFFS">CFFS</option>
<option value="98" rel="Cohen Seglias">Cohen Seglias</option>
<option value="49" rel="Community Behavioral Health">Community Behavioral Health</option>
<option value="60" rel="Community College of Philadelphia">Community College of Philadelphia</option>
<option value="94" rel="Community Legal Services">Community Legal Services</option>
<option value="22" rel="Cozen O'Connor">Cozen O'Connor</option>
<option value="35" rel="Crefeld School">Crefeld School</option>
<option value="99" rel="David Thomas Trailways">David Thomas Trailways</option>
<option value="79" rel="Delaware County Christian School">Delaware County Christian School</option>
<option value="15" rel="Drinker Biddle &amp; Reath">Drinker Biddle &amp; Reath</option>
<option value="52" rel="Eastern National ">Eastern National </option>
<option value="63" rel="Eastern University ">Eastern University </option>
<option value="93" rel="Elliott-Lewis">Elliott-Lewis</option>
<option value="122" rel="Elwyn">Elwyn</option>
<option value="101" rel="eXude">eXude</option>
<option value="31" rel="Fox Chase Cancer Center">Fox Chase Cancer Center</option>
<option value="85" rel="Friends Select School">Friends Select School</option>
<option value="43" rel="GF Hotels">GF Hotels</option>
<option value="84" rel="Gwynedd Mercy University ">Gwynedd Mercy University </option>
<option value="62" rel="Hamilton Lane">Hamilton Lane</option>
<option value="42" rel="Haverford College">Haverford College</option>
<option value="83" rel="Hill Top Prep">Hill Top Prep</option>
<option value="18" rel="Holman Automotive">Holman Automotive</option>
<option value="112" rel="Holt Logistics Corp">Holt Logistics Corp</option>
<option value="65" rel="Holy Family University">Holy Family University</option>
<option value="110" rel="HTTS">HTTS</option>
<option value="51" rel="IFM">IFM</option>
<option value="80" rel="Justi Group">Justi Group</option>
<option value="21" rel="Kendal Corporation">Kendal Corporation</option>
<option value="40" rel="KTB">KTB</option>
<option value="86" rel="La Salle College High School">La Salle College High School</option>
<option value="66" rel="La Salle University">La Salle University</option>
<option value="13" rel="Longwood Gardens">Longwood Gardens</option>
<option value="114" rel="Lumbermen's Merchandising">Lumbermen's Merchandising</option>
<option value="100" rel="MAFCO">MAFCO</option>
<option value="58" rel="Manor College">Manor College</option>
<option value="30" rel="Medical Examiners">Medical Examiners</option>
<option value="108" rel="Menasha Display">Menasha Display</option>
<option value="95" rel="My Alarm Center">My Alarm Center</option>
<option value="88" rel="New Hanover County">New Hanover County</option>
<option value="105" rel="Newtown Friends School">Newtown Friends School</option>
<option value="97" rel="Ocean City Home Bank">Ocean City Home Bank</option>
<option value="111" rel="Packaging Coordinators Inc">Packaging Coordinators Inc</option>
<option value="89" rel="Paragon Bank">Paragon Bank</option>
<option value="34" rel="Pennsylvania Academy of the Fine Arts">Pennsylvania Academy of the Fine Arts</option>
<option value="53" rel="Pennsylvania Institute of Technology">Pennsylvania Institute of Technology</option>
<option value="36" rel="Performcare">Performcare</option>
<option value="41" rel="Philadelphia Parking Authority">Philadelphia Parking Authority</option>
<option value="74" rel="Piramal">Piramal</option>
<option value="29" rel="PMI">PMI</option>
<option value="103" rel="Precision Escalator Products">Precision Escalator Products</option>
<option value="28" rel="PREIT">PREIT</option>
<option value="118" rel="Price Automotive Group">Price Automotive Group</option>
<option value="11" rel="QVC">QVC</option>
<option value="47" rel="Rothman Institute">Rothman Institute</option>
<option value="19" rel="Saint Joseph's University">Saint Joseph's University</option>
<option value="55" rel="Salus University">Salus University</option>
<option value="71" rel="Saunders House">Saunders House</option>
<option value="78" rel="St Aloysius Academy">St Aloysius Academy</option>
<option value="92" rel="St Joe's Prep">St Joe's Prep</option>
<option value="117" rel="St Peter's School">St Peter's School</option>
<option value="76" rel="Stradley Ronon Stevens and Young">Stradley Ronon Stevens and Young</option>
<option value="107" rel="Stratford Friends School">Stratford Friends School</option>
<option value="104" rel="Sungard">Sungard</option>
<option value="45" rel="Swarthmore College">Swarthmore College</option>
<option value="26" rel="Temple University">Temple University</option>
<option value="20" rel="Temple University Health System">Temple University Health System</option>
<option value="75" rel="The Haverford School">The Haverford School</option>
<option value="46" rel="The Institutes">The Institutes</option>
<option value="81" rel="The Timothy School">The Timothy School</option>
<option value="44" rel="Therapy Source">Therapy Source</option>
<option value="96" rel="Troemner">Troemner</option>
<option value="69" rel="UCH">UCH</option>
<option value="102" rel="University of Pennsylvania">University of Pennsylvania</option>
<option value="116" rel="University of Pennsylvania Health System">University of Pennsylvania Health System</option>
<option value="23" rel="University of the Arts">University of the Arts</option>
<option value="33" rel="University of the Sciences">University of the Sciences</option>
<option value="72" rel="Ursinus College">Ursinus College</option>
<option value="48" rel="USW Local 286">USW Local 286</option>
<option value="17" rel="Villanova University">Villanova University</option>
<option value="90" rel="Visit Pittsburgh">Visit Pittsburgh</option>
<option value="120" rel="Volpe and Koenig">Volpe and Koenig</option>
<option value="91" rel="VWR">VWR</option>
<option value="64" rel="Wallace Roberts and Todd">Wallace Roberts and Todd</option>
<option value="32" rel="Widener University">Widener University</option>
<option value="27" rel="Wiley Mission">Wiley Mission</option> -->
</select>
</div>
</div>
<div class="form-group">
<label class="control-label" for="inputAddress">Choose Location</label>
<select class="form-control" id="locationid">
<?php
if( !empty( $company_allocations ) ){
	foreach( $company_allocations as $locations ){
		echo <<< EOT
		<option value="{$locations['location_id']}">{$locations['address2']}</option>
EOT;
	}
}
?>
<!-- <option value="184" rel="Azalea Trace">Azalea Trace</option>
<option value="169" rel="Brittany Pointe Estates">Brittany Pointe Estates</option>
<option value="177" rel="Cokesbury Village">Cokesbury Village</option>
<option value="160" rel="Corporate Office">Corporate Office</option>
<option value="178" rel="Country House">Country House</option>
<option value="180" rel="Edgewater Pointe Estates">Edgewater Pointe Estates</option>
<option value="170" rel="Fort Washington Estates">Fort Washington Estates</option>
<option value="171" rel="Granite Farm Estates">Granite Farm Estates</option>
<option value="172" rel="Gwynedd Estates">Gwynedd Estates</option>
<option value="186" rel="Heron Point">Heron Point</option>
<option value="181" rel="Indian River Estates">Indian River Estates</option>
<option value="179" rel="Lanier Village Estates">Lanier Village Estates</option>
<option value="173" rel="Lima Estates">Lima Estates</option>
<option value="189" rel="Magnolia Trace">Magnolia Trace</option>
<option value="183" rel="Manor House">Manor House</option>
<option value="174" rel="Normandy Farms Estates">Normandy Farms Estates</option>
<option value="188" rel="Park Pointe Village">Park Pointe Village</option>
<option value="185" rel="Plantation Estates">Plantation Estates</option>
<option value="175" rel="Southampton Estates">Southampton Estates</option>
<option value="176" rel="Spring House Estates">Spring House Estates</option>
<option value="182" rel="St Andrews Estates">St Andrews Estates</option>
<option value="167" rel="Support Services Center">Support Services Center</option>
<option value="187" rel="Tyron Estates">Tyron Estates</option> -->
</select>
</div>
<div class="form-group">
<label class="control-label" for="inputConfroom">Conference Room</label>
<select class="form-control" id="confroom">
<?php
if( !empty( $company_locationconfrooms ) ){
	foreach( $company_locationconfrooms as $conferences ){
		echo <<< EOT
		<option value="{$conferences['conference_id']}">{$conferences['conf_room']}</option>
EOT;
	}
}
?>
<!-- <option value="240" rel="TBD">TBD</option> -->
</select>
</div>
<div class="form-group">
<button type="button" class="btn btn-primary pull-right" onclick="submitForm()">Submit</button>
</div>
</form>
</div>

</div>
</div>

<div class="col-md-9">
<div class="panel">
<div class="padding-30" id="calendar"></div>
<h3 class="panel-title">Walk-Ins</h3>
<div class="panel-body"><table class="table" id="walkIns"><thead><tr><th>Name</th><th>Service</th><th>Conference</th></tr></thead><tbody><tr><td colspan="3">No walk-in for this date</td></tr></tbody></table></div>
</div>
<div class="modal fade" id="addNewEvent" aria-hidden="true" aria-labelledby="addNewEvent" role="dialog" tabindex="-1">
<div class="modal-dialog">
<form class="modal-content form-horizontal" action="#" method="post" role="form">
<div class="modal-header">
<button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
<h4 class="modal-title">New Event</h4>
</div>
<div class="modal-body">
<div class="form-group">
<label class="col-sm-2 control-label" for="starts">Name:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="starts" name="starts">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="starts2">Starts:</label>
<div class="col-sm-10">
<div class="input-group">
<input type="text" class="form-control" id="starts2" data-container="#addNewEvent" data-plugin="datepicker">
<span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i> </span> </div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="ends">Ends:</label>
<div class="col-sm-10">
<div class="input-group">
<input type="text" class="form-control" id="ends" data-container="#addNewEvent" data-plugin="datepicker">
<span class="input-group-addon"> <i class="icon wb-calendar" aria-hidden="true"></i> </span> </div>
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="repeats">Repeats:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="repeats" name="repeats" data-plugin="TouchSpin" data-min="0" data-max="10" value="0" />
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="people">People:</label>
<div class="col-sm-10">
<select id="people" multiple="multiple" data-plugin="jquery-selective">
</select>
</div>
</div>
</div>
<div class="modal-footer">
<div class="form-actions">
<button class="btn btn-primary" data-dismiss="modal" type="button">Add this event</button>
<a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a> </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<?php include("inc_footer.php"); ?>

<!-- Core  --> 
<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/asscroll/jquery-asScroll.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script> 
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
<script src="../assets/assets/vendor/select2/select2.min.js"></script> 
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
<script src="../assets/assets/js/components/select2.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>

<script>
var month = new Array();
month['01'] = "Jan";
month['02'] = "Feb";
month['03'] = "Mar";
month['04'] = "Apr";
month['05'] = "May";
month['06'] = "Jun";
month['07'] = "Jul";
month['08'] = "Aug";
month['09'] = "Sep";
month['10'] = "Oct";
month['11'] = "Nov";
month['12'] = "Dec";

function submitForm(){
	var company_id = $( '#company' ).val();
	var location_id = $( '#locationid' ).val();
	var conf_id = $( '#confroom' ).val();
	var date = $( '#calendar .fc-toolbar .fc-left h2').text();
	var holder = date.split(' ');
	if( holder.length == 3 ){
		getAppointments( company_id, location_id, conf_id, date );
	}else{
		alert( 'Please Select a sepecific Day' );
	}
}

function getAppointments( company_id, location_id, conf_id, date ){
	$.ajax({
		type: 'GET',
		datatype: 'JSON',
		url: 'getlocationbycompany',
		data: { 
			'company': company_id,
			'com_date': date,
			'locationid': location_id,
			'confroom': conf_id,
		},
		success: function( data ){
			var result = jQuery.parseJSON(data);
			if( result.length > 0 ){
				setEvent( result );
			}else{
				alert( 'No Appointment Set for today' );
			}
		}
	});
}

$( '#company' ).on( 'change', function(){
	$.ajax({
		type: 'POST',
		datatype: 'JSON',
		url: 'getLocationsForCorporateClient',
		data: { 
			'company_id': $(this).val(),
		},
		success: function( data ){
			var locList = jQuery.parseJSON(data);
			var newLocList = "";
			if( locList.length > 0 ){
				$.each( locList, function( key, val ){
					newLocList = newLocList + "<option value="+val.location_id+">"+val.address2+"</option>";
				});
			}
			$( '#locationid' ).empty();
			$( '#locationid' ).append( newLocList );
			var locID = $( '#locationid' ).val();
			if( locID != null ){
				postConfernce( locID );
			}
		}
	});
});

$( '#locationid' ).on( 'change', function(){
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
				$.each( confList, function( key, val ){
					newConfList = newConfList + "<option value="+val.conference_id+">"+val.conf_room+"</option>";
				});
			}
			$( '#confroom' ).empty();
			$( '#confroom' ).append( newConfList );
		}
	});
}

var datesForEvents = new Array(15);
datesForEvents['6:00 AM'] = "06:00:00";
datesForEvents['7:00 AM'] = "07:00:00";
datesForEvents['8:00 AM'] = "08:00:00";
datesForEvents['9:00 AM'] = "09:00:00";
datesForEvents['10:00 AM'] = "10:00:00";
datesForEvents['11:00 AM'] = "11:00:00";
datesForEvents['12:00 PM'] = "12:00:00";
datesForEvents['1:00 PM'] = "13:00:00";
datesForEvents['2:00 PM'] = "14:00:00";
datesForEvents['3:00 PM'] = "15:00:00";
datesForEvents['4:00 PM'] = "16:00:00";
datesForEvents['5:00 PM'] = "17:00:00";
datesForEvents['6:00 PM'] = "18:00:00";
datesForEvents['7:00 PM'] = "19:00:00";
datesForEvents['8:00 PM'] = "20:00:00";
datesForEvents['9:00 PM'] = "21:00:00";
datesForEvents['10:00 PM'] = "22:00:00";

var dateEndForEvents = new Array(15);
dateEndForEvents['6:00 AM'] = "07:00:00";
dateEndForEvents['7:00 AM'] = "08:00:00";
dateEndForEvents['8:00 AM'] = "09:00:00";
dateEndForEvents['9:00 AM'] = "10:00:00";
dateEndForEvents['10:00 AM'] = "11:00:00";
dateEndForEvents['11:00 AM'] = "12:00:00";
dateEndForEvents['12:00 PM'] = "13:00:00";
dateEndForEvents['1:00 PM'] = "14:00:00";
dateEndForEvents['2:00 PM'] = "15:00:00";
dateEndForEvents['3:00 PM'] = "16:00:00";
dateEndForEvents['4:00 PM'] = "17:00:00";
dateEndForEvents['5:00 PM'] = "18:00:00";
dateEndForEvents['6:00 PM'] = "19:00:00";
dateEndForEvents['7:00 PM'] = "20:00:00";
dateEndForEvents['8:00 PM'] = "21:00:00";
dateEndForEvents['9:00 PM'] = "22:00:00";
dateEndForEvents['10:00 PM'] = "23:00:00";

function setEvent( data ){
	if( data.length > 0 ){
		var walkIns = "";
		$( '#walkIns tbody' ).html( '<tr><td colspan="3">No walk-in for this date</td></tr>' )
		$.each( data, function( key, val ){
			var newEvent = new Object();

			// var time = val.appointment_time.replace( " AM", ":00" )
			if( val.appointment_time == '00:00'){
				walkIns += "<tr><td>"+val.firstname+" "+val.lastname+"</td><td>"+val.service_name+"</td><td>"+val.conf_room+"</td></tr>";
			}else{
				newEvent.title = "NAME:"+val.firstname+" "+val.lastname+" SERVICE:"+val.service_name+" CONFERENCE:"+val.conf_room;
				newEvent.start = datesForEvents[val.appointment_time];
				newEvent.end = dateEndForEvents[val.appointment_time];
				newEvent.allDay = false;
				$('#calendar').fullCalendar( 'renderEvent', newEvent );
			}
		});
		if( walkIns != "" ){
			$( '#walkIns tbody' ).html( walkIns )
		}
	}else{
		$('#calendar').fullCalendar( 'removeEvents').fullCalendar('removeEventSources');
	}
}

   
  	</script>
	<script type='text/javascript'>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			customButtons: {
		        myCustomButton: {
		            text: 'custom!',
		            click: function() {
		                alert('clicked the custom button!');
		            }
		        }
		    },

			header: {
				left: 'prev,title,next,today,myCustomButton',
				right: '',
				// center: 'year,month,agendaWeek,agendaDay'
			},
			titleFormat: {
			   	day: 'MMM D, YYYY'
			},
			defaultView: 'basicDay',
			editable: false,
			minTime: '01:00:00',
			maxTime: '24:00:00',
		});

		$( '#calendar .fc-left').append( '<input style="width:100px;height:30px;" type="button" name="singleDate" class="form-control" id="singleDate" value="select date">' );
		$('#singleDate').datepicker({format: 'yyyy-mm-dd' });
		$('#singleDate').unbind( 'change' );
		$('#singleDate').on( 'change', function(){
			var date = $(this).val();
			$( '#calendar' ).fullCalendar( 'gotoDate', date );
		});

	});
</script>
</body>
</html>