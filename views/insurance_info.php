<!DOCTYPE html>



<html class="no-js before-run" lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

<meta name="description" content="bootstrap admin template">

<meta name="author" content="">

<title>New Appointment | Familyfood Dashboard</title>



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

<link rel="stylesheet" href="../assets/assets/vendor/jvectormap/jquery-jvectormap.css">

<link rel="stylesheet" href="../assets/assets/vendor/typeahead-js/typeahead.css">



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



<div id="page1" class="page animsition">

<div class="page-content">

<div class="page-header">

<h1 class="page-title">New Appointment</h1>

<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>Manage Appointments</a> </div>

</div>

<div class="panel">

<div class="panel-body"> 



<!-- start progress bar -->



<h2>INSURANCE INFORMATION</h2>

<div class="progress">

<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 66.4%" role="progressbar"> <span class="sr-only">90% Complete</span> </div>

</div>



<!-- end progress bar --> 



<!-- start of insurance info -->



<div>

<div class="col-sm-6">

<h4 class="page-title padding-bottom-30"></h4>

<form autocomplete="off">

<div class="form-group row">

<div class="col-sm-6"> 



<!--label class="control-label" for="inputBasicFirstName">First Name</label-->



<input type="text" class="form-control" id="fname" name="inputFirstName" placeholder="First Name" autocomplete="off" />

</div>

<div class="col-sm-6"> 



<!--label class="control-label" for="inputBasicLastName">Last Name</label-->



<input type="text" class="form-control" id="lname" name="inputLastName" placeholder="Last Name" autocomplete="off" />

</div>

</div>

<div class="form-group row">

<div class="col-sm-6"> 



<!--label class="control-label">Contact Number</label-->



<div class="form-group input-group input-group-icon"> <span class="input-group-addon"><span class="icon wb-mobile" aria-hidden="true"></span></span>

<input type="text" class="form-control" id="phone_num" placeholder="Contact Number">

</div>

</div>

<div class="col-sm-6">

<div class="form-group input-group input-group-icon"> <span class="input-group-addon"><span class="icon wb-envelope" aria-hidden="true"></span></span>

<input type="text" class="form-control" id="email" placeholder="Email">

</div>

</div>

</div>

<div class="form-group row">

<div class="col-sm-6">

<label class="control-label" for="inputChosenDate">Chosen date / time</label>

<input type="text" class="form-control" id="dateAndTime" disabled="">

</div>

<div class="col-sm-6">

<label class="control-label" for="inputCompany">Health insurance company</label>

<input type="text" class="form-control" id="insurance_company" placeholder="Personal Choice">

</div>

</div>

<div class="form-group row">

<div class="col-sm-6">

<input type="text" class="form-control" id="insurance_id" placeholder="Health Insurance ID no.">

</div>

<div class="col-sm-6">

<!-- <textarea class="form-control" id="reason" rows="3" placeholder="Reason"></textarea> -->

<select class="form-control" id="reason" name="skills" required>
  <option value=""></option>

  <option value="Healthy weight desired">Healthy weight desired</option>

  <option value="Healthy eating">Healthy eating</option>

  <option value="Health concern">Health concern</option>

  <option value="Digestive concern">Digestive concern</option>

  <option value="Food allergy">Food allergy</option>

  <option value="Sports nutrition">Sports nutrition</option>

  <option value="Meal planning ideas">Meal planning ideas</option>

  <option value="Other">Other</option>

</select>

</div>

</div>

</form>

</div>

<div class="col-sm-2">

<div class="well well-lg text-center padding-top-30" ng-app='app'>

<h5>Slot held for</h5>

<h4><span class="countdown">&nbsp;</span></h4>

</div>

</div>

<div class="clearfix"></div>

</div>



<!-- end -->



<div class="col-md-6 text-left"></div>

<div class="col-md-6 text-right"><a href="javascript:void(0);" id="confirmAppointments" onclick="confirmAppointments()" class="btn btn-success">CONTINUE<i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

</div>

</div>

</div>

</div>



<!-- End Page --> 



<!-- Page 2 -->



<div id="page2" style="display:none;" class="page animsition">

<div class="page-content">

<div class="page-header">

<h1 class="page-title">New Appointment</h1>

<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="fa fa-edit" aria-hidden="true"></i> Manage Appointments</a> </div>

</div>

<div class="panel">

<div class="panel-body"> 



<!-- start progress bar -->



<h3>CONFIRM YOUR APPOINTMENT</h3>

<div class="progress">

<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 83%" role="progressbar"> <span class="sr-only">90% Complete</span> </div>

</div>



<!-- end progress bar -->



<div class="col-md-3"></div>

<div class="col-md-6">

<div class="alert alert-info alert-alt" role="alert">

<div class="alert alert-icon alert-danger" role="alert"> <i class="icon wb-info" aria-hidden="true"></i>

<p>Slot held for</p>

<p class="countdown">&nbsp;</p>

</div>

<h4>Your appointment is not confirmed yet.</h4>

<h5>Please review and confirm.</h5>

<h5>Appointment details:</h5>

<div class="well well-lg">

<p id="serviceName"></p>

<p id="dateAndLocation"></p>

<p id="personalDetails"></p>

<p id="additionalInfo"></p>

</div>

<div class="form-group">

<div class="input-group">

<div class="checkbox-custom checkbox-primary">

<input type="checkbox" id="requiredCheckbox">

<label for="requiredCheckbox">I affirm that I have read and agree with the <a href="https://familyfoodllc.app.box.com/s/7rx4xa2pi2c5dqou0u8btiwgjgmgs101" target="_blank">Privacy Consent</a></label>

</div>

</div>

</div>

<p class="margin-top-25"> <button onclick="confirmAppointments2()" id="confirmAppointments2" class="btn btn-success"><span class="white">Confirm Appointment</span></button> <a href="javascript:void(0);" onclick="redirectToTimeslots()" class="btn btn-default">Edit Details</a> </p>

</div>

</div>

<div class="col-md-3"></div>

</div>

</div>

</div>

</div>



<!-- End Page 2 --> 



<!-- Page3 -->



<div id="page3" style="display:none;" class="page animsition">

<div class="page-content">

<div class="page-header">

<h1 class="page-title">New Appointment</h1>

<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="fa fa-edit" aria-hidden="true"></i> Manage Appointments</a> </div>

</div>

<div class="panel">

<div class="panel-body"> 



<!-- start progress bar -->



<h3><i class="icon wb-check" aria-hidden="true"></i> You have successfully scheduled your appointment</h3>

<div class="progress">

<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%" role="progressbar"> <span class="sr-only">100% Complete</span> </div>

</div>



<!-- end progress bar -->



<div class="col-md-3"></div>

<div class="col-md-6">

<div class="alert alert-success" style="color:#888888" role="alert">

<h4>You have successfully scheduled your appointment</h4>

<div class="well well-lg">

<div class="example table-responsive">

<table class="table" id="finalResult">



<!--thead>



<tr>



<th>#</th>



<th>First Name</th>



<th>Last Name</th>



<th>Username</th>



<th>Role</th>



</tr>



</thead-->



<tbody>

</tbody>

</table>

</div>

</div>

<p class="margin-top-25">

<button type="button" id="print_button" class="btn btn-success" value="PRINT APPOINTMENT" onclick="document.title = 'FamilyFoodLLC, AppointmentSummary';window.print();"/>

<i class="fa fa-print"></i> PRINT APPOINTMENT

</button>

</p>

</div>

</div>

<div class="col-md-3"></div>

</div>

</div>

</div>

</div>



<!-- End Page3 --> 



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

<script src="../assets/assets/vendor/jvectormap/jquery-jvectormap.min.js"></script> 

<script src="../assets/assets/vendor/jvectormap/maps/jquery-jvectormap-us-merc-en.js"></script> 

<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script>

<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>



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

<script src="../assets/assets/js/components/jvectormap.js"></script> 

<script src="../assets/assets/vendor/countdown/jquery.countdown.min.js"></script> 

<script>



var dataexists = 0;



var checkdietianfollowup = "<?php echo $fdietitian ; ?>";



var adminLoggedIn = "<?php echo $admin; ?>";



var userToBeBooked = "";







if(checkdietianfollowup != "") {



  userToBeBooked = "<?php echo $fuserid ?>";



} else if( adminLoggedIn != "" ){



  userToBeBooked = "<?php echo $customerID ?>";
  if( userToBeBooked  == "" ){
	userToBeBooked = "<?php echo $fuserid ?>";
  }


}else {



  userToBeBooked = "<?php echo $cuser ?>";



}



//edited : get if



var privacy = "<?php echo $privacy_consent ?>";





if( privacy != "" ){



  if( privacy == 0 ){



    $("#confirmAppointments2").attr('disabled', true);

    $( '#requiredCheckbox' ).attr('checked', false); 



    $( '#requiredCheckbox' ).change( function(){



      if( $(this).prop('checked') ){ 



        $("#confirmAppointments2").prop('disabled', false);



      }else{



        $("#confirmAppointments2").prop('disabled', true);



      }



    })



  }else{

    $( '#requiredCheckbox' ).prop('checked', true);



    $( '#requiredCheckbox' ).prop('disabled', true);



    $("#confirmAppointments2").prop('disabled', false);



  }



}



else{



  $( '#requiredCheckbox' ).prop('disabled', false);



}











//functions



var remaining = 445000 - (1394002335545 - 1394002190717);







$('.countdown').countdown({



  until: new Date(new Date().getTime() + remaining), 



  compact: true, 



  layout: "{mn}:{snn}",



  onExpiry : function() {



    removeSession();



  }



});







function removeSession() {



  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'removeSessiondetails' ,



    success: function( data ){



      removeSessiondetails( data )



    }



  });



}







function removeSession1() {



  $.ajax({



    url:'removeSessiondetails' ,



    type :'POST',



    success: function(data) {



      if(checkdietianfollowup != "") {



        window.location.href = "viewappointments";



      }else if( adminLoggedIn != "" ){



        window.location.href = "customers";



      }



    },



    failure: function(data) {},



    dataType: 'text',



    cache: true



  });







}







function removeSessiondetails(data) {



  if(data == "success") {



  var confnumber  =  confNum;



    if(confnumber != "") {



      var d = new Date();



      var addzero = "";



      if(d.getMonth() < 10) {



        addzero = "0";



      }



      $.ajax({



        url:'deleteAppointmentsInPening' ,



        type :'POST',



        data: {



          'confirmationid': confnumber,



          'date': d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),



        },



        success: function(msg) {



          if(msg == "success" ) {



            window.location.href = "searchdietitian";



          }



        },



        failure: function(msg) {



          if(msg == "fail" ) {



          //alert("You can't cancel appointment");



          }



        },



        cache: true



      });



    }else{



      window.location.href = "searchdietitian";



    }



  }



}







$.ajax({



  type: 'POST',



  datatype: 'JSON',



  url:'getSessiondetails' ,



  success: function( data ){



    var sessionDetails = jQuery.parseJSON(data);



    displayDetails( sessionDetails );



  }



});







$.ajax({



  type: 'POST',



  datatype: 'JSON',



  url:'getUserDetails',



  data: {



    'user_id': userToBeBooked,



    'confirmationnumber': '',



    'cservice': '<?php echo $cservice ?>',



  },



  success: function( data ){



    var userDetails = jQuery.parseJSON(data);



    displayUserDetails( userDetails, false );



  }



});







getInsDetails( userToBeBooked );







function getInsDetails( userid ){



  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'getInsuranceDeails',



    data: {



      'user_id': userid,



    },



    success: function( data ){



      var insuranceDetails = jQuery.parseJSON(data);



      displayInsuranceDetails( insuranceDetails );



    }



  });



}







var cserviceisloggedin = "<?php echo $cservice;?>";







if(cserviceisloggedin != "" ) {



  $("#email").focusout( function(event){



    if($("#email").val() != "") {



      getUserDetailsInInsuranceTab( $("#email").val() );



    }



  }); 



}







var fllc_appointment_serviceid = "";



var fllc_appointment_appointmentdate = "";



var fllc_appointment_appointmenttime = "";



var fllc_appointment_locationid = "";



var fllc_appointment_number = "";



var fllc_appointment_timezone = "";



var company_name = "";



var clickedAlready = "";



var servicename = "";



var calendarDay = "";



var appointment_time = "";



var confNum = 0;



var confRoom = "";







var locationName = "";



var daytime = "";



function displayDetails( data ){



  if( typeof data != 'undefined' ){



    if ((data.servicename != "") && (data.calendarday != "") && (data.hour != "")) {



      $("h4.page-title").html(data.servicename+"<br> on "+data.calendarday+" at "+data.hour+":"+data.minutes+" "+data.timestatus+" ("+data.timezone+")");



      $("#dateAndTime").val(data.calendarday+" "+data.hour+":"+data.minutes+" "+data.timestatus);



      fllc_appointment_serviceid = data.service_id;



      fllc_appointment_appointmentdate = data.calenderdate;



      fllc_appointment_appointmenttime = data.hour+":"+data.minutes+" "+data.timestatus;



      fllc_appointment_locationid = data.location_id;



      fllc_appointment_number = data.appointConfNum;



      fllc_appointment_timezone = data.timezone;



      company_name = data.company_name;



      servicename = data.servicename;



      calendarDay = data.calendarday;



      appointment_time = data.hour+":"+data.minutes+" "+data.timestatus+" ("+data.timezone+")";



      locationName = data.locationname;



      daytime = data.calendarday+", "+appointment_time;



    }







    var cservice = "<?php echo $cservice ?>";



    if(cservice != "") {



      getUserDetailsForCService( fllc_appointment_number );



    }



  }



}







function getUserDetailsForCService(confirmationnumber) {



  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'getUserDetails',



    data: {



      'user_id': userToBeBooked,



      'confirmationnumber': confirmationnumber,



      'cservice': '<?php echo $cservice ?>',



    },



    success: function( data ){



      var userDetails = jQuery.parseJSON(data);



      displayUserDetails( userDetails, true );



    }



  });



}







function displayUserDetails( data, userDetailsToEdit ){



  if( typeof data != "undefined" ){



    if( data.length > 0 ){



      // if( userDetailsToEdit ){



      //   var cserviceid = "<?php echo $cservice ; ?>";



      //   var cuserid = userToBeBooked;



      //   if(cserviceid != "") {



      //     $(".finishedsuccessmsg").html("Successfully scheduled appointment.");



      //   } else {



      //     $(".finishedsuccessmsg").html("You have successfully scheduled your appointment.");



      //   }



      // }

      if( data[0].privacy_consent == 1 ){



        $( '#requiredCheckbox' ).prop('checked', true);

      }

      $( '#fname' ).val( data[0].firstname );



      $( '#lname' ).val( data[0].lastname );



      $( '#phone_num' ).val( data[0].phonenumber );



      $( '#email' ).val( data[0].userid );



    }



  }



}







function displayInsuranceDetails( data ){



  if( typeof data != "undefined" ){



    if( data.length > 0 ){



      $( '#insurance_company' ).val( data[0].insurance_company );



      $( '#insurance_id' ).val( data[0].insurance_id );



    }



  }



}







function getUserDetailsInInsuranceTab(userid) {



  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'authenticateuseremailid',



    data: {



      'userid': userid,



    },



    success: function( data ){



      var insuranceDetails = jQuery.parseJSON(data);



      fillInsuranceDetails( insuranceDetails );



    }



  });



}







function fillInsuranceDetails( data ){



  if( typeof data != "undefined" ){



    if( data.length > 0 ){



      $( '#fname' ).val( data[0].firstname );



      $( '#lname' ).val( data[0].lastname );



      $( '#phone_num' ).val( data[0].phonenumber );



      $( '#email' ).val( data[0].userid );



      if( data[0].privacy_consent == 1 ){



        $( '#requiredCheckbox' ).prop('checked', true);



        $( '#requiredCheckbox' ).prop('disabled', true);



        $("#confirmAppointments2").prop('disabled', false);



      }



      clickedAlready = "Yes";







      getInsDetails( data[0].userid ); 



    }



  }



}







function confirmAppointments(){



  if( $( '#fname' ).val() != "" && $( '#lname' ).val() != "" && $( '#phone_num' ).val() != "" && 



    $( '#email' ).val() != "" && $("#dateAndTime").val() != "" ){



    if( validateEmailAndPwd( $( '#email' ).val(), $( '#phone_num' ).val()) ){



      continueConfirmation();



    }else{



      alert( 'Please Enter a valid Phone Number / Email Address' );



    }



  }else{



    alert( 'Please fill up the details' ); 



  }



}







function continueConfirmation(){



  var loggedinuser= userToBeBooked;



  var loggedinuser1= "<?php echo $cservice ?>";

  var companyuser = "<?php echo $companyuser ?>";

  var bookedby = "";







  if(loggedinuser != "") {
    if(checkdietianfollowup != "") {
      bookedby = checkdietianfollowup;
    }else if( adminLoggedIn != "" ){
      bookedby = adminLoggedIn;
    } else {
      bookedby = loggedinuser;
    }
  }else if(loggedinuser1 != "") {
    bookedby = loggedinuser1;
  } else if( companyuser != "" ){
    bookedby = companyuser;
  }else {
    bookedby = $("#email").val() ;

  }


  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'bookAppointmentInPendingState',



    data: {



      'userid': $("#email").val(),



      'serviceid': fllc_appointment_serviceid,



      'appointmentdate': fllc_appointment_appointmentdate,



      'appointmenttime': fllc_appointment_appointmenttime,



      'location_id': fllc_appointment_locationid,



      'appointConfNum': fllc_appointment_number,



      'bookedby': bookedby,



      'fname': $("#fname").val(),



      'lname': $("#lname").val(),



      'phone': $("#phone_num").val(),



      'clickalreadyuser': clickedAlready,



      'reason': $("#reason").val(),



      'timezone': fllc_appointment_timezone,



      'insuranceCompany': $("#insurance_company").val(),



      'insurnaceCompanyId': $("#insurance_id").val(),



    },



    success: function( data ){
        var result = jQuery.parseJSON(data);
        if( result.confimessage == "200" ){
//          alert( "No Available Dietitian on "+fllc_appointment_appointmentdate+" at "+fllc_appointment_appointmenttime );
												alert( "Further assistance is needed to book this date and time. Please contact us at contact@familyfoodllc.com to confirm your appointment. " );
        }else{
            $( '#page1' ).css("display","none");
            var nameNumID = $("#fname").val()+" "+$("#lname").val()+" "+$("#phone_num").val()+" / "+$("#email").val();
    
    
    
            var reason = $("#reason").val();
        
        
        
            var datetimeLocation = "on " +calendarDay+" at "+appointment_time+" in "+result.Conferenceroom;
        
        
        
        
        
        
        
            confNum = result.Confirmation_Number;
        
        
        
            confRoom = result.Conferenceroom;
        
        
        
            // window.location.href = 'insuranceinfo2/?servicename='+servicename+"&datetimeLocation="+datetimeLocation+"&nameNumID="+nameNumID+"&reason="+reason;
        
        
        
            $( '#personalDetails' ).text( "YOUR DETAILS: "+nameNumID );
        
        
        
            $( '#dateAndLocation' ).text( "DATE AND LOCATION: "+datetimeLocation );
        
        
        
            $( '#serviceName' ).text( "APPOINTMENT: "+servicename );
        
        
        
            $( '#additionalInfo' ).text( "ADDITIONAL INFORMATION: "+reason );
        
        
        
            $( '#page2' ).css("display","block");
            $( '#page2' ).css("opacity","1");
        }

    }



  });



  // alert( fllc_appointment_appointmentdate );



  // alert( fllc_appointment_appointmenttime );



  // alert( fllc_appointment_locationid );



  // alert( fllc_appointment_number );



  // alert( bookedby );



  // alert( $("#fname").val() );



  // alert( $("#lname").val() );



  // alert( $("#phone_num").val() );



  // alert( clickedAlready );



  // alert( $("#reason").val() );



  // alert( fllc_appointment_timezone );



  // alert( $("#insurance_company").val() );



  // alert( $("#insurance_id").val() );







  // "userid="+$("#email").val()+ done



  // "&serviceid="+$("#fllc_appointment_serviceid").val()+ done



  // "&appointmentdate="+$("#fllc_appointment_appointmentdate").val()+ done



  // "&appointmenttime="+$("#fllc_appointment_appointmenttime").val()+ done



  // "&location_id="+$("#fllc_appointment_locationid").val()+ done



  // "&appointConfNum="+$("#fllc_appointment_number").val()+ done



  // "&bookedby="+bookedby+



  // "&fname="+$("#fname").val()+



  // "&lname="+$("#lname").val()



  // +"&phone="+$("#phone_num").val()+



  // "&clickalreadyuser="+$("#clickedAlready").val()+



  // "&reason="+$("#reason").val()+



  // "&timezone="+$("#fllc_appointment_timezone").val()+ done



  // "&insuranceCompany="+$("#insurance_company").val()+



  // "&insurnaceCompanyId="+$("#insurance_id").val()+



  



}







function confirmAppointments2(){



  var loggedinuser= userToBeBooked;



  var loggedinuser1= "<?php echo $cservice ?>";



  var bookedby = "";



  if(loggedinuser != "") {



    if(checkdietianfollowup != "") {



    bookedby = checkdietianfollowup;



    }else if( adminLoggedIn != "" ){



      bookedby = adminLoggedIn;



    } else {



    bookedby = loggedinuser;



    }



  }else if(loggedinuser1 != "") {



    bookedby = loggedinuser1;



  } else {



    bookedby = $("#email").val() ;



  }







  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'bookAppointment',



    data: {



      'userid': $("#email").val(),



      'serviceid': fllc_appointment_serviceid,



      'appointmentdate': fllc_appointment_appointmentdate,



      'appointmenttime': fllc_appointment_appointmenttime,



      'location_id': fllc_appointment_locationid,



      'appointConfNum': fllc_appointment_number,



      'bookedby': bookedby,



      'fname': $("#fname").val(),



      'lname': $("#lname").val(),



      'phone': $("#phone_num").val(),



      'clickalreadyuser': clickedAlready,



      'reason': $("#reason").val(),



      'timezone': fllc_appointment_timezone,



      'insuranceCompany': $("#insurance_company").val(),



      'insurnaceCompanyId': $("#insurance_id").val(),



      'pendingAppointment': confNum,



      'confroom': confRoom,



      'company': company_name,



    },



    success: function( data ){



      var result = jQuery.parseJSON(data);



      finalResult( result );



      $('.countdown').countdown('destroy');



      removeSession1();



    }



  });







  // data: "userid="+$("#fllc_appointment_userid").val()+



  // "&serviceid="+$("#fllc_appointment_serviceid").val()+



  // "&appointmentdate="+$("#fllc_appointment_appointmentdate").val()+



  // "&appointmenttime="+$("#fllc_appointment_appointmenttime").val()+



  // "&location_id="+$("#fllc_appointment_locationid").val()+



  // "&appointConfNum="+$("#fllc_appointment_number").val()+



  // "&bookedby="+bookedby+



  // "&fname="+$(".Fname").val()+



  // "&lname="+$(".Lname").val()+



  // "&phone="+$(".Cnumber").val()+



  // "&clickalreadyuser="+$("#clickedAlready").val()+



  // "&reason="+$("#fllc_appointment_reason").val()+



  // "&timezone="+$("#fllc_appointment_timezone").val()+



  // "&insuranceCompany="+$("#fllc_appointment_insurancecompany").val()+



  // "&insurnaceCompanyId="+$("#fllc_appointment_insurancecompany_id").val()+



  // "&pendingAppointment="+confNum+



  // "&confroom="+confRoom+



  // "&company="+$("#fllc_company_name").val(),



}







function finalResult( data ){



  if( typeof data != 'undefined' ){



    if( data.Confirmation_Number != "" ){



      $( '#page2' ).css("display","none");



      var resultHtml = "<tr>"+



        "<td>Confirmation Number</td>"+



        "<td>"+data.confirmation_code+""+data.Confirmation_Number+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Day & Time</td>"+



        "<td>"+daytime+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Discussion Topic</td>"+



        "<td>"+servicename+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Location</td>"+



        "<td>"+locationName+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Conference Room</td>"+



        "<td>"+confRoom+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Name</td>"+



        "<td>"+$('#fname').val()+" "+$('#lname').val()+"</td>"+



        "</tr>"+



        "<tr>"+



        "<td>Email Address</td>"+



        "<td>"+$('#email').val()+"</td>"+



        "</tr>";







        $( '#finalResult tbody' ).html( resultHtml );



        $( '#page3' ).css("display","block");
	$( '#page3' ).css("opacity","1");



    }



  }



}







function redirectToTimeslots(){



  var d = new Date();



  var addzero = "";



  if(d.getMonth() < 10) {



    addzero = "0";



  }







  $.ajax({



    type: 'POST',



    datatype: 'JSON',



    url:'deleteAppointmentsInPening',



    data: {



      'confirmationid': confNum,



      'date': d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),



    },



    success: function( data ){



      if( data == "success" ) {



        window.location.href = "timeslots";



      }



    }



  });



}







function validateEmailAndPwd(email,phone) {



var filter = /^([a-zA-Z0-9_.\'-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

 // var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;







  if (filter.test(email)) {



    var phonefilter = /^[0-9]+$/;







  if (phonefilter.test(phone)) {



    return true;



  } else {



    return false;



  }



  }else {



    return false;



  }



}







//



    (function(document, window, $) {



      'use strict';







      var Site = window.Site;



      $(document).ready(function() {



        Site.run();



      });

		(function() {
        var insuranceList = ['Aetna','AmeriHealth Administrators','Amerihealth Non-HMO New Jersey','Amerihealth HMO New Jersey and Delaware',
        'BCBS North Carolina','Blue Cross Blue Shield of Pennsylvania','CIGNA','Health Partners','Highmark BCBS of PA','Horizon NJ Health',
        'Highmark BCBS of NJ','Independence Administrators','Independence Blue Cross','Keystone Health Plan East','Keystone First','Medicare Pennsylvania','United HealthCare'];
        var substringMatcher = function(strs) {
          return function findMatches(q, cb) {
            var matches, substrRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
              if (substrRegex.test(str)) {
                matches.push(str);
              }
            });

            cb(matches);
          };
        };

        $('#insurance_company').typeahead({
          hint: true,
          highlight: true,
          minLength: 3
        }, {
          name: 'insuranceList',
          source: substringMatcher(insuranceList)
        });
      })();



    })(document, window, jQuery);



</script>

</body>

</html>