<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<!--style>
.day {
	font-weight: bold; color: #cc9900; background-color: #000000
}
.disabled {
	font-weight: normal;
}

</style-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Book Date and Time | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/css/custom.css">
<link rel="stylesheet" href="../assets/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">
<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">
<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">

<style>
.day {
	font-weight: bold; color: #ffffff; background-color: #62a8ea
}
.disabled {
	font-weight: normal;
}
</style>

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

<div class="panel">
<div class="panel-body">
<!-- start progress bar -->
<h2>SELECT DATE</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 49.8%" role="progressbar">
<span class="sr-only">90% Complete</span>
</div>
</div>

<!-- end progress bar -->
<!-- start of booking date and time -->
<div >
<div class="col-md-4">
<p><button type="button" class="btn btn-icon btn-primary">xx</button> = Available date</p>
<div id="inlineDatepicker" data-autoclose="false"></div>
<input type="hidden" id="inputHiddenInline" />
<input type="hidden" id="timeslotsserviceid" />
<input type="hidden" id="timeslotslocationid" />
<input type="hidden" id="seviceidcheck" />
<input type="hidden" id="timeslotsdates" />
<input type="hidden" id="selectCalendarDate" />
<input type="hidden" class="setCalendarDate" />
<input type="hidden" id="selectTimeZone" />
<input type="hidden" id="customerServiceId" />
<input type="hidden" id="customerServiceNumber" />
</div>
<div id="timeSlotList" class="col-md-8">
<h4 id="displayDate"></h4>
<!--div id="message">Message</div-->
<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
<thead>
<tr>
<th>Morning</th>
<th>Afternoon</th>
<th>Evening</th>
</tr>
</thead>
<tbody>
<tr>
<td><ul id="morningHTML"></ul></td>
<td><ul id="afternoonHTML"></ul></td>
<td><ul id="eveningHTML"></ul></td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- end of booking date and time -->

<!-- <div class="col-md-6 text-left"></div>
<div class="col-md-6 text-right"><a href="javascript:void(0);" onclick="storeCookie()" class="btn btn-success">SELECT SERVICE <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div> -->

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
//functions
$.ajax({
  type: 'POST',
  datatype: 'JSON',
  url:'getSessiondetails' ,
  type :'POST',
  success: function( data ){
    var sessionDetails = jQuery.parseJSON(data);
    displayServiceDetail( sessionDetails );
  }
});

$.ajax({
  type: 'POST',
  datatype: 'JSON',
  url:'getCustomerServiceDetails' ,
  type :'POST',
  success: function( data ){
    var csDetails = jQuery.parseJSON(data);
    getCustomerServiceDetails( csDetails );
  }
});

function displayServiceDetail(data) {

  if(typeof data != 'undefined'){
    var jsonObj = data;
    if (jsonObj.length != 0 ) {
      // $("#servicename").html(jsonObj.servicename); HTML to view current service
      $("#timeslotsserviceid").val(jsonObj.service_id);
      $("#timeslotslocationid").val(jsonObj.location_id);

      var currentdate = getCurrentdate();
      var nextdate = getNextDate();

      if(jsonObj.service_id != "") {
        $("#seviceidcheck").val(jsonObj.service_id);
      } else {
        $("#seviceidcheck").val("");
      }

      blockHolidaysOnDatePicker($("#timeslotslocationid").val(),$("#seviceidcheck").val());
      
      if(jsonObj.calenderdate != "") {
        $("#timeslotsdates").val(jsonObj.calenderdate);
        $( '#displayDate' ).text(jsonObj.calendarday);
        $(".setCalendarDate").val(jsonObj.calendarday);//HTML to view current Date
        $("#selectCalendarDate").val(jsonObj.calenderdate);
      }

      $.ajax({
        type: 'POST',
        datatype: 'JSON',
        url:'getTimeZones' ,
        data: {
          'location_id': jsonObj.location_id,
        },
        success: function( data ){
          var result = jQuery.parseJSON(data);
          displayZones( result );
        }
        // url:'getTimeZones' ,
        // type :'POST',
        // data: "location_id="+jsonObj.location_id,
        // success: displayZones,
        // failure: displayZones,
        // dataType: 'json',
        // cache: true
      });

    }

  }

}

function displayZones(data){

  if(typeof data != 'undefined'){
    var jsonObj = data;
    if (jsonObj.length != 0 ) {

      $("#selectTimeZone").val(jsonObj[0].timezone);
      // $(".setTimeZone").html("Time Zone <font color='blue' >"+jsonObj[0].timezone+"</font>"); // html for time zone under html of date

    }

  }

}

function getCustomerServiceDetails(data) {

  if(typeof data != 'undefined'){
    var jsonObj = data;

    if (jsonObj.length != 0 ) {
      $("#customerServiceId").val(jsonObj[0].userid);
      $("#customerServiceNumber").val(jsonObj[0].phonenumber);
    }
  }
}

var availableLocationDatesServiceid = "";
var availableLocationDatesLocationid = "";

function blockHolidaysOnDatePicker(locationid,serviceid) {

  availableLocationDatesServiceid = serviceid;
  availableLocationDatesLocationid = locationid;

  var todayDate = new Date();
  todayDate = todayDate.getFullYear() + "-" + ("0"+(todayDate.getMonth()+1)).slice(-2) + "-" + ("0"+todayDate.getDate()).slice(-2);

  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'getLocationHolidays' ,
    type :'POST',
    data: {
      'location_id': locationid,
      'today': todayDate,
    },
    success: function( data ){
      var result = jQuery.parseJSON(data);
      getLocationHolidays( result );
    }
  });

}

var availableDates = [];
var datesTimeStartEnd = {};
var availableMonths = [];

var startTime = "";
var endTime = "";

var startToEndTimes = [];
//static time array
var timeArray = {};
timeArray['1:00'] = 1;
timeArray['2:00'] = 2;
timeArray['3:00'] = 3;
timeArray['4:00'] = 4;
timeArray['5:00'] = 5;
timeArray['6:00'] = 6;
timeArray['7:00'] = 7;
timeArray['8:00'] = 8;
timeArray['9:00'] = 9;
timeArray['10:00'] = 10;
timeArray['11:00'] = 11;
timeArray['12:00'] = 12;
timeArray['13:00'] = 13;
timeArray['14:00'] = 14;
timeArray['15:00'] = 15;
timeArray['16:00'] = 16;
timeArray['17:00'] = 17;
timeArray['18:00'] = 18;
timeArray['19:00'] = 19;
timeArray['20:00'] = 20;
timeArray['21:00'] = 21;
timeArray['22:00'] = 22;
timeArray['23:00'] = 23;
timeArray['24:00'] = 24;

var time12HourFormat = {};
time12HourFormat[1] = '1:00';
time12HourFormat[2] = '2:00';
time12HourFormat[3] = '3:00';
time12HourFormat[4] = '4:00';
time12HourFormat[5] = '5:00';
time12HourFormat[6] = '6:00';
time12HourFormat[7] = '7:00';
time12HourFormat[8] = '8:00';
time12HourFormat[9] = '9:00';
time12HourFormat[10] = '10:00';
time12HourFormat[11] = '11:00';
time12HourFormat[12] = '12:00';
time12HourFormat[13] = '1:00';
time12HourFormat[14] = '2:00';
time12HourFormat[15] = '3:00';
time12HourFormat[16] = '4:00';
time12HourFormat[17] = '5:00';
time12HourFormat[18] = '6:00';
time12HourFormat[19] = '7:00';
time12HourFormat[20] = '8:00';
time12HourFormat[21] = '9:00';
time12HourFormat[22] = '10:00';
time12HourFormat[23] = '11:00';
time12HourFormat[24] = '12:00';

var timeComplete = {};
timeComplete['1:00 AM'] = 1;
timeComplete['2:00 AM'] = 2;
timeComplete['3:00 AM'] = 3;
timeComplete['4:00 AM'] = 4;
timeComplete['5:00 AM'] = 5;
timeComplete['6:00 AM'] = 6;
timeComplete['7:00 AM'] = 7;
timeComplete['8:00 AM'] = 8;
timeComplete['9:00 AM'] = 9;
timeComplete['10:00 AM'] = 10;
timeComplete['11:00 AM'] = 11;
timeComplete['12:00 PM'] = 12;
timeComplete['1:00 PM'] = 13;
timeComplete['2:00 PM'] = 14;
timeComplete['3:00 PM'] = 15;
timeComplete['4:00 PM'] = 16;
timeComplete['5:00 PM'] = 17;
timeComplete['6:00 PM'] = 18;
timeComplete['7:00 PM'] = 19;
timeComplete['8:00 PM'] = 20;
timeComplete['9:00 PM'] = 21;
timeComplete['10:00 PM'] = 22;
timeComplete['11:00 PM'] = 23;
timeComplete['12:00 AM'] = 24;


var weekday=new Array(7);
weekday[0]="Sunday";
weekday[1]="Monday";
weekday[2]="Tuesday";
weekday[3]="Wednesday";
weekday[4]="Thursday";
weekday[5]="Friday";
weekday[6]="Saturday";

var month=new Array(12);
month[0]="Jan";
month[1]="Feb";
month[2]="Mar";
month[3]="Apr";
month[4]="May";
month[5]="Jun";
month[6]="Jul";
month[7] ="Aug";
month[8] ="Sep";
month[9] ="Oct";
month[10] ="Nov";
  month[11] ="Dec";

var unAvailableTime = {};

var unavailableDays = ["Saturday","Sunday"];
var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
var days1 = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

var firstLoad = true;
var moving = false;

function getLocationHolidays( data ){
  if( typeof data != 'undefined' ){
    if( data.length > 0 ){
      $.each( data, function( key, val ){
        availableDates.push( val.loc_available_from );
        datesTimeStartEnd[val.loc_available_from] = [val.loc_time_from, val.loc_time_to];
      });
      // set start and end time for first date
      startTime = data[0]['loc_time_from'];
      endTime = data[0]['loc_time_to'];

      $( '#timeslotsdates' ).val( availableDates[0] );

      var nextsplit = availableDates[0].split("-");
      var mydate = new Date();
      mydate.setFullYear( nextsplit[0],eval(nextsplit[1] -1),nextsplit[2] );

      $( '.setCalendarDate' ).val( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
      $( '#displayDate' ).text( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
      setDatePicker()
      //check time available for first date
      getAvailableTimes();
    }else{
      $('#inlineDatepicker').html( 'All time slots at your location have been filled.' );
      $( '#timeSlotList #message' ).html( 'Please contact Family Food at contact@familyfoodllc.com or (800) 203-8657.' );
    }
  }
}

function setDatePicker(){
  var datePlotted = $("#timeslotsdates").val();
  var datePlotted = datePlotted.split("-");

  var minDate1 = availableDates[0].split("-");
  var maxDate1 = availableDates[availableDates.length-1].split("-");
  var limitDate = maxDate1[1]+"/"+maxDate1[2]+"/"+maxDate1[0];
  var firstDate = minDate1[1]+"/"+minDate1[2]+"/"+minDate1[0];

  $.each( availableDates, function( key, value ){
    var dateVal = value.split( '-' );
    // var month = dateVal[1].replace(/^0+(?!\.|$)/, '');
    var month1 = dateVal[1] + " " +dateVal[0];
    // month = parseInt( month );
    if( $.inArray( month1, availableMonths ) == -1 ){
      availableMonths.push( month1 );
    }
  });
  
  $('#inlineDatepicker').datepicker({beforeShowDay: disableDates,dateFormat: 'mm/dd/yy' }).datepicker('setDate', datePlotted[1]+"/"+datePlotted[2]+"/"+datePlotted[0]);

  setClick();
  $('.datepicker-switch').click(function() { return false; });
}

function getAvailableTimes(){
  //checkForDietitianAvailableOnConferenceBased
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'checkForDietitianAvailableOnConferenceBased',
    data: {
      'locationid': $("#timeslotslocationid").val(),
      'date': $("#timeslotsdates").val(),
      'serviceid': $("#timeslotsserviceid").val(),
    },
    success: function( data ){
      var result = jQuery.parseJSON(data);
      if(typeof result != 'undefined'){
        if ( result.length == 0 ) {
          $( '#timeSlotList #message' ).html( 'Please contact Family Food at contact@familyfoodllc.com or (800) 203-8657.' );
          $( '#morningHTML' ).html('');
          $( '#afternoonHTML' ).html('');
          $( '#eveningHTML' ).html('');
        }else{
          $.ajax({
            type: 'POST',
            datatype: 'JSON',
            url:'blockAlreadyBookedTimesWithoutLogin' ,
            data: {
              'location_id': $( '#timeslotslocationid' ).val(),
              'appointmentdate': $( '#timeslotsdates' ).val() ,
            },
            success: function( data ){
              var result = jQuery.parseJSON(data);
              removeTimeBooked( result );
            }
          });
        }
      }
    }
  });
}

function removeTimeBooked( data ){
  if( typeof data != 'undefined' ){
    
    unAvailableTime = {};

    if( data.length > 0 ){
      $.each( data, function( key, value ){
        var d = value.appointment_time;
        var dateToDelete = d.split( " " );
        unAvailableTime[ timeComplete[value.appointment_time] ] = timeComplete[value.appointment_time];
      });
    }
    getBlockedTimes();
    // displayAvailableTimes();
  }
}

function getBlockedTimes(){
  var activeTimeSlots = [];
  var timeStartFinal = timeArray[startTime];
  var timeEndFinal = timeArray[endTime];

  for( i = parseInt( timeStartFinal ); i <= parseInt( timeEndFinal ); i++ ){

    if( !unAvailableTime[i] ){
      if( i < 12 ){
        activeTimeSlots.push( time12HourFormat[i] +" AM" );
      }else{
		if( i == 24 ){
			activeTimeSlots.push( time12HourFormat[i] +" AM" );
		}else{
			activeTimeSlots.push( time12HourFormat[i] +" PM" );
		}
      }
    }
  }
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'externalBlockingTimeslots' ,
    data: {
      'locationid': $( '#timeslotslocationid' ).val(),
      'appointmentdate': $( '#timeslotsdates' ).val(),
      'serviceid': $( '#seviceidcheck' ).val(),
      'activeTimes': activeTimeSlots.join()
    },
    success: function( data ){
      var result = jQuery.parseJSON(data);

      if( typeof result != 'undefined' ){
        if( result.length > 0 ){
          $.each( result, function( key, value ){
            if( value.status == "block" ){
              var time = value.appointment_time.split( " " );
              
              unAvailableTime[ timeComplete[value.appointment_time] ] = timeComplete[value.appointment_time];
            }
          });
        }
        displayAvailableTimes();
      }
    }
  });
}

function displayAvailableTimes(){
  var morningHTML = "";
  var afternoonHTML = "";
  var eveningHTML = "";
  var newStartEndTime = datesTimeStartEnd[ $( '#timeslotsdates' ).val() ];
  // alert( newStartEndTime[0] + '-' + newStartEndTime[1] );
  startTime = newStartEndTime[0];
  endTime = newStartEndTime[1];
  // alert( timeArray[startTime] + ' - ' + timeArray[endTime] );
  var timeStartFinal = timeArray[startTime];
  var timeEndFinal = timeArray[endTime];


  for( i = parseInt( timeStartFinal ); i <= parseInt( timeEndFinal ); i++ ){

    if( !unAvailableTime[i] ){
      if( i < 12 ){
        var time = time12HourFormat[i] + ' AM';
        morningHTML += "<li><a href='javascript:void(0);' onclick='saveSelectedTime(\""+time+"\")'>"+time12HourFormat[i] +" AM</a></li>";
      }else if( i > 11 && i < 15 ){
        var time = time12HourFormat[i] + ' PM';
        afternoonHTML += "<li><a href='javascript:void(0);' onclick='saveSelectedTime(\""+time+"\")'>"+time12HourFormat[i] +" PM</a></li>";
      }else{
        var time = time12HourFormat[i] + ' PM';
		if( i == 24 ){
			time = time12HourFormat[i] + ' AM';
		}
		if( i == 24 ){
	        eveningHTML += "<li><a href='javascript:void(0);' onclick='saveSelectedTime(\""+time+"\")'>"+time12HourFormat[i] +" AM</a></li>";
		}else{
	        eveningHTML += "<li><a href='javascript:void(0);' onclick='saveSelectedTime(\""+time+"\")'>"+time12HourFormat[i] +" PM</a></li>";
		}
      }
    }
  }

  $( '#morningHTML' ).html( morningHTML );
  $( '#afternoonHTML' ).html( afternoonHTML );
  $( '#eveningHTML' ).html( eveningHTML );

  if( morningHTML == "" && afternoonHTML == "" && eveningHTML == "" ){
    moving = true;
    var dateToRemove = $( '#timeslotsdates' ).val();
    removeBookingDate( dateToRemove );
    $( '#timeslotsdates' ).val( availableDates[0] );
    var nextsplit = availableDates[0].split("-");
    var mydate = new Date();
    mydate.setFullYear( nextsplit[0],eval(nextsplit[1] -1),nextsplit[2] );

    $( '.setCalendarDate' ).val( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
    $( '#displayDate' ).text( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
 
    var timesForCurrDate = datesTimeStartEnd[availableDates[0]];
    startTime = timesForCurrDate[0];
    endTime = timesForCurrDate[1];
    // alert( 0 );
    // alert( startTime+' to '+endTime ); 
    // alert( $( '#timeslotsdates' ).val() );
    setDatePicker()
    //check time available for first date
    getAvailableTimes();
  }else{
    $( '#timeSlotList #message' ).html( '' );
    moving = false;
  } 
}

function removeBookingDate( date ){
  availableDates = jQuery.grep(availableDates, function(value) {
    return value != date;
  });
}

function getCurrentdate() {

  var mydate2 = new Date();
  var zeromonthprecession = "0";
  var zeroprecession = "0";

  if(eval(mydate2.getMonth() +1) < 10 ) {
    zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth() +1) ;
  } else {
    zeromonthprecession = eval(mydate2.getMonth() +1) ;
  }

  if(mydate2.getDate() < 10) {
    zeroprecession = zeroprecession + mydate2.getDate() ;
  } else {
    zeroprecession = mydate2.getDate() ;
  }

  return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;

}

function getNextDate() {

  var mydate2 = new Date();
  var zeromonthprecession = "0";
  var zeroprecession = "0";

  if(eval(mydate2.getMonth() +1) < 10 ) {
    zeromonthprecession = zeromonthprecession + eval(mydate2.getMonth() +1) ;
  } else {
    zeromonthprecession = eval(mydate2.getMonth() +1) ;
  }

  if(eval(mydate2.getDate() + 1) < 10) {
    zeroprecession = zeroprecession + eval(mydate2.getDate() + 1) ;
  } else {
    zeroprecession = eval(mydate2.getDate() + 1) ;
  }

return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;

}

function disableDates(date) {
  var ymd = date.getFullYear() + "-" + ("0"+(date.getMonth()+1)).slice(-2) + "-" + ("0"+date.getDate()).slice(-2);
  var day = new Date(ymd).getDay();
  if ($.inArray(ymd, availableDates) >= 0 && ($.inArray(days[day], unavailableDays) < 0 || $.inArray(days1[day], unavailableDays) < 0) && (ymd !== "" )  ) {
        return { enabled:true };
    } else {
        return { enabled:false };
    }
}


function saveSelectedTime( time ){
  // hour, min, timestatus
  var time_status = time.split( " " );
  var hour_min = time_status[0].split( ":" );
  var hour = hour_min[0];
  var min = hour_min[1];
  var timestatus = time_status[1];
  // data: "hour="+hour+"&minutes="+min+"&timestatus="+timestatus+"&day="+$(".setCalendarDate").html()+"&selectCalendarDate="+$("#timeslotsdates").val()+"&timezone="+$("#selectTimeZone").val(),
  
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'setTimingsForService' ,
    data: {
      'hour': hour,
      'minutes': min,
      'timestatus': timestatus,
      'day': $(".setCalendarDate").val(),
      'selectCalendarDate': $( '#timeslotsdates' ).val(),
      'timezone': $("#selectTimeZone").val(),
    },
    success: function( data ){
      if(data == "success") {
        window.location.href = 'insuranceinfo';
      }
    }
  });
}

var next = false;
var prev = false;

function setClick(){
  $( 'div.datepicker-days th.next' ).on( 'click', function(){
    prev = false;
    next = true;
  });

  $( 'div.datepicker-days th.prev' ).on( 'click', function(){
    prev = true;
    next = false;
  });
}

function checkMonth( month ){
  
  if( doCheckMonth( month ) == month ){
  
    return month;
  }
}

function doCheckMonth( month ){
  if( $.inArray( month, availableMonths ) == -1 ){
    // var addzero = "";
    // monthInt = parseInt( month ) + 1;
    // if( monthInt < 10) {
    //   month = "0"+monthInt;
    // }else{
    //   month = monthInt
    // }
    if( prev ){
      if( parseInt( month ) == 1 ){
        month = '12';
      }else{
        var addzero = "";
        monthInt = parseInt( month ) - 1;
        if( monthInt < 10) {
          month = "0"+monthInt;
        }else{
          month = monthInt
        }
      }
    }else if( next ){
      if( parseInt( month ) == 12 ){
        month = '01';
      }else{
        var addzero = "";
        monthInt = parseInt( month ) + 1;
        if( monthInt < 10) {
          month = "0"+monthInt;
        }else{
          month = monthInt
        }
      }
    }
    
    return checkMonth( month );
  }else{
    return month;
  }
}

function move( month ){
  if( $.inArray( month, availableMonths ) == -1 ){
    if( next ){
      $( 'div.datepicker-days th.next' ).trigger( 'click' );
    }else if( prev ){
      $( 'div.datepicker-days th.prev' ).trigger( 'click' );
    }
  }else{
    var count = availableMonths.length - 1;
    var lastDate = availableMonths[count];
    var firstDate = availableMonths[0];

    if( lastDate == month ){
      $( 'div.datepicker-days th.next' ).css('display','none');
    }else{
      $( 'div.datepicker-days th.next' ).css('display','block');
    }

    if( firstDate == month ){
      $( 'div.datepicker-days th.prev' ).css('display','none');
    }else{
      $( 'div.datepicker-days th.prev' ).css('display','block');
    }
  }
}

    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });

      (function() {
        // Reset Current
        // $('#inlineDatepicker').datepicker();
        $("#inlineDatepicker").on("changeDate", function(event) {
          // insert function when date is selected
          if( firstLoad ){
            firstLoad = false;
          }else{
            if( !moving ){
              var date = $("#inlineDatepicker").datepicker('getFormattedDate');
              var FormatDate = date.split( '-' );
              $( '#timeslotsdates' ).val( FormatDate[2]+'-'+FormatDate[0]+'-'+FormatDate[1] );
              var nextsplit = $( '#timeslotsdates' ).val().split("-");
              var mydate = new Date();
              mydate.setFullYear( nextsplit[0],eval(nextsplit[1] -1),nextsplit[2] );
              var month1 = FormatDate[0]+" "+FormatDate[2];
              move( month1 );
              $( '.setCalendarDate' ).val( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
              $( '#displayDate' ).text( weekday[mydate.getDay()]+','+month[mydate.getMonth()]+' '+mydate.getDate() );
              //check time available for first date
              getAvailableTimes();
            }
            // $("#inputHiddenInline").val(
            //   $("#inlineDatepicker").datepicker('getFormattedDate')
            // );
          }
        });

        $('#inlineDatepicker').on( 'changeMonth', function( event ){
          var d = JSON.stringify( event.date );
          var dateTimezone = d.split( 'T' );
          var date = dateTimezone[0];
          date = date.replace( '"', '' );
          var dateSplit = date.split( '-' );
          var month1 = dateSplit[1] + " " + dateSplit[0];

          // var nextMonth = checkMonth( month );
          move( month1 );
          // $('#inlineDatepicker').datepicker("setDate", nextMonth + 'm');
          // if( next ){
          //   for( var month; $.inArray( month, availableMonths ) != -1; month++ ){
          //     if( month == 12 ){
          //       month = 1;
          //     }
          //   } 
          // }else if( prev ){

          // }

        });
      })();
    })(document, window, jQuery);
</script>
</body>
</html>