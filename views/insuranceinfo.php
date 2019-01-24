<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>

<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>



<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/usmap/jqvmap.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />



 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>



<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />



<link href="<?php echo base_url() ?>css/details.css" rel="stylesheet">

		

<script src="<?php echo base_url() ?>js/usmap/jquery.vmap.js"></script>

<script src="<?php echo base_url() ?>js/usmap/maps/jquery.vmap.usa.js"></script>



<script src="<?php echo base_url() ?>js/jquery-1.6.4.min.js"></script>

<script src="<?php echo base_url() ?>js/jquery.countdown.min.js"></script>



<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>





<script type="text/javascript">

var dataexists = 0;

var checkdietianfollowup = "<?php echo $fdietitian ; ?>";

var adminLoggedIn = "<?php echo $admin; ?>";

var userToBeBooked = "";


if(checkdietianfollowup != "") {

userToBeBooked = "<?php echo $fuserid ?>";

} else if( adminLoggedIn != "" ){
	userToBeBooked = "<?php echo $customerID ?>";
}else {

userToBeBooked = "<?php echo $cuser ?>";
}
//edited : get if
var privacy = "<?php echo $privacy_consent ?>";


$(document).ready(function() {
if( privacy != "" ){
	if( $( '#privacy_consent' ).css('display') !== 'hidden' ){
		if( privacy < 1 ){
			$("#confirmAppointments").prop('disabled', true);
			$( '#privacy_consent' ).change( function(){
				if( $(this).prop('checked') ){
					$("#confirmAppointments").prop('disabled', false);
				}else{
					$("#confirmAppointments").prop('disabled', true);
				}
			})
		}else{
			$( '#privacy_consent' ).prop('checked', true);
			$( '#privacy_consent' ).prop('disabled', true);
			$("#confirmAppointments").prop('disabled', false);
		}
	}
}
else{
	$( '#privacy_consent' ).prop('disabled', true);
}

$("#alreadyRegistered").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});

var remaining = 445000 - (1394002335545 - 1394002190717);

            $('span#minsremaining').countdown({

                until: new Date(new Date().getTime() + remaining), 

                compact: true, 

                layout: "{mn}:{snn}",

				onExpiry : function() {

				removeSession();

				}

            }); 



$.ajax({

                url:'getSessiondetails' ,

				type :'POST',

                success: displayServicesList,

                failure: displayServicesList,

                dataType: 'json',

                cache: true

								

            });

$.ajax({

                url:'getUserDetails' ,

				type :'POST',

				data: "user_id="+userToBeBooked+"&confirmationnumber=&cservice=<?php echo $cservice ?>",

                success: displayUserDetails,

                failure: displayUserDetails,

                dataType: 'json',

                cache: true

								

            });

			

$.ajax({

                url:'getInsuranceDeails' ,

				type :'POST',

				data: "user_id="+userToBeBooked,

                success: getInsuranceDeails,

                failure: getInsuranceDeails,

                dataType: 'json',

                cache: true

								

            });

			

var cserviceisloggedin = "<?php echo $cservice;?>";

if(cserviceisloggedin != "" ) {

	$(".Email").focusout(

		function (event) {

		    if($(".Email").val() != "") {

			    getUserDetailsInInsuranceTab($(".Email").val());

			}

		 } 

     );	

	 }

			



			

			

			/*$(".appointmenttab").click(function() {

				$(this).addClass("active")

				$(".appointmenttabconfirmationdiv").css("display","block");

				$(".insurancetabdiv").css("display","none");

				$(".appointmentSummary").css("display","none");

			

			

			});

			

			$(".insurancetab").click(function() {

				$(this).removeClass("active")

				$(".insurancetabdiv").css("display","block");

				$(".appointmenttabconfirmationdiv").css("display","none");

				$(".appointmentSummary").css("display","none");

			

			});

			

			$(".finished").click(function() {

				$(".appointmentSummary").css("display","block");

				$(".insurancetabdiv").css("display","none");

				$(".appointmenttabconfirmationdiv").css("display","none");

			

			});*/

			

			

			

});



function getUserDetailsInInsuranceTab(userid) {

$.ajax({

                url: 'authenticateuseremailid' ,

				data: "userid="+$(".Email").val(),

				type :'POST',

                success: fillInsuranceDetails,

                failure: fillInsuranceDetails,

                dataType: 'json',

                cache: true

								

            });	



}



function getUserDetailsForCService(confirmationnumber) {



$.ajax({

                url:'getUserDetails' ,

				type :'POST',

				data: "user_id="+userToBeBooked+"&confirmationnumber="+confirmationnumber+"&cservice=<?php echo $cservice ?>",

                success: displayUserDetails,

                failure: displayUserDetails,

                dataType: 'json',

                cache: true

								

            });



}



function getInsuranceDeails(data) {

if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

             $(".hinsurancecompany").val(jsonObj[0].insurance_company);

			 $(".hinsuranceid").val(jsonObj[0].insurance_id);

			 

			 $("#fllc_appointment_insurancecompany").val(jsonObj[0].insurance_company);

			 $("#fllc_appointment_insurancecompany_id").val(jsonObj[0].insurance_id);

			 

}

}



}







function displayServicesList(data) {



if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

		dataexists = dataexists+1;

		       if ((jsonObj.servicename != "") && (jsonObj.calendarday != "") && (jsonObj.hour != "")) {

				//$(".addresstimeslot").html(jsonObj.servicename+"<br> with "+jsonObj.servicename+" on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);

				$(".addresstimeslot").html(jsonObj.servicename+"<br> on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus+" ("+jsonObj.timezone+")");

				$(".dateandtime").val(jsonObj.calendarday+" "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);

				//$(".appointmentdetails").html(jsonObj.servicename+"<br> with "+jsonObj.servicename+" on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);

				$(".appointmentdetails").html(jsonObj.servicename+"<br> on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus+" ("+jsonObj.timezone+")");

				$(".finisheddatetime").html(jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus+" ("+jsonObj.timezone+")");

				$(".finisheddiscussiontopic").html(jsonObj.servicename);

				$(".finishedlocation").html(jsonObj.locationname);

				$(".finishedconfirmationconferenceroom").html(jsonObj.Conferenceroom);

				$("#fllc_appointment_serviceid").val(jsonObj.service_id);

				$("#fllc_appointment_appointmentdate").val(jsonObj.calenderdate);

				$("#fllc_appointment_timezone").val(jsonObj.timezone);

				$("#fllc_appointment_appointmenttime").val(jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);

				$("#fllc_appointment_bookingstatus").val();

				$("#fllc_appointment_locationid").val(jsonObj.location_id);

				$("#fllc_appointment_number").val(jsonObj.appointConfNum);

				$("#fllc_company_name").val(jsonObj.company_name);

				var cservice = "<?php echo $cservice ?>";

				if(cservice != "") {

				  getUserDetailsForCService($("#fllc_appointment_number").val());

				}

				}

					

		}

}



}



function displayUserDetails(data) {

if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

		dataexists = dataexists+1;

		if (dataexists == 2) {

		         var cserviceid = "<?php echo $cservice ; ?>";

				  var cuserid = userToBeBooked;

				 if(cserviceid != "") {

				$(".finishedsuccessmsg").html("Successfully scheduled appointment.");

				} else {

				$(".finishedsuccessmsg").html("You have successfully scheduled your appointment.");

				}

				dataexists =0;

				}

		  $(".Fname").val(jsonObj[0].firstname);

		  $(".Lname").val(jsonObj[0].lastname);

		  $(".Cnumber").val(jsonObj[0].phonenumber);

		  $(".Email").val(jsonObj[0].userid);

		   $(".yourdetails").html(jsonObj[0].firstname+" "+jsonObj[0].lastname+" "+jsonObj[0].phonenumber+" "+jsonObj[0].userid);

		   $(".finishedusername").html(jsonObj[0].firstname);

		  $(".finishedemail").html(jsonObj[0].userid);

		  $("#fllc_appointment_userid").val(jsonObj[0].userid);

		  



		}

		}

}



function confirmAppointments() {



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

bookedby = $("#fllc_appointment_userid").val() ;

}



$.ajax({

                url:'bookAppointment' ,

				type :'POST',

				data: "userid="+$("#fllc_appointment_userid").val()+"&serviceid="+$("#fllc_appointment_serviceid").val()+"&appointmentdate="+$("#fllc_appointment_appointmentdate").val()+"&appointmenttime="+$("#fllc_appointment_appointmenttime").val()+"&location_id="+$("#fllc_appointment_locationid").val()+"&appointConfNum="+$("#fllc_appointment_number").val()+"&bookedby="+bookedby+"&fname="+$(".Fname").val()+"&lname="+$(".Lname").val()+"&phone="+$(".Cnumber").val()+"&clickalreadyuser="+$("#clickedAlready").val()+"&reason="+$("#fllc_appointment_reason").val()+"&timezone="+$("#fllc_appointment_timezone").val()+"&insuranceCompany="+$("#fllc_appointment_insurancecompany").val()+"&insurnaceCompanyId="+$("#fllc_appointment_insurancecompany_id").val()+"&pendingAppointment="+$("#fllc_appointment_pendingnumber").val()+"&confroom="+$(".finishedconfirmationconferenceroom").html()+"&company="+$("#fllc_company_name").val(),

                success: bookAppointment,

                failure: bookAppointment,

                dataType: 'json',

                cache: true

								

            });

}



function confirmAppointments1() {



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

bookedby = $("#fllc_appointment_userid").val() ;

}



$.ajax({

                url:'bookAppointmentInPendingState' ,

				type :'POST',

				data: "userid="+$("#fllc_appointment_userid").val()+"&serviceid="+$("#fllc_appointment_serviceid").val()+"&appointmentdate="+$("#fllc_appointment_appointmentdate").val()+"&appointmenttime="+$("#fllc_appointment_appointmenttime").val()+"&location_id="+$("#fllc_appointment_locationid").val()+"&appointConfNum="+$("#fllc_appointment_number").val()+"&bookedby="+bookedby+"&fname="+$(".Fname").val()+"&lname="+$(".Lname").val()+"&phone="+$(".Cnumber").val()+"&clickalreadyuser="+$("#clickedAlready").val()+"&reason="+$("#fllc_appointment_reason").val()+"&timezone="+$("#fllc_appointment_timezone").val()+"&insuranceCompany="+$("#fllc_appointment_insurancecompany").val()+"&insurnaceCompanyId="+$("#fllc_appointment_insurancecompany_id").val(),

                success: bookAppointmentInPendingState,

                failure: bookAppointmentInPendingState,

                dataType: 'json',

                cache: true

								

            });

}



function bookAppointmentInPendingState(data) {

if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

				if (jsonObj.Confirmation_Number != "" ) {

				

				    $(".appointmenttabconfirmationdiv").css("display","block");

					$(".insurancetabdiv").css("display","none");

					$(".appointmentSummary").css("display","none");

					$("#fllc_appointment_pendingnumber").val(jsonObj.Confirmation_Number);

					$(".finishedconfirmationconferenceroom").html(jsonObj.Conferenceroom);

					var innerhtml = $(".appointmentdetails").html();

					innerhtml = innerhtml +" &nbsp; &nbsp;"+jsonObj.Conferenceroom;

					$(".appointmentdetails").html(innerhtml);

					//$(".finishedconfirmationnumber").html(jsonObj.Confirmation_Number);

				

				} else {

				   alert(jsonObj.confimessage);

				}

		}

	}

}

function bookAppointment(data) {



  if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

		if (jsonObj.Confirmation_Number != "" ) {

				 $(".finishedconfirmationnumber").html(jsonObj.confirmation_code+""+jsonObj.Confirmation_Number);

				

				$(".appointmentSummary").css("display","block");

				$(".insurancetabdiv").css("display","none");

				$(".appointmenttabconfirmationdiv").css("display","none");

			     var innerHtml = '<li ><a href="searchdietitian">Search</a></li>';

				 innerHtml = innerHtml+'<li> <a href="selectservice">Select Service</a></li>';

				  innerHtml = innerHtml+'<li> <a href="timeslots">Available Timeslots</a></li>';

				  innerHtml = innerHtml+'<li> <a href="javascript:void(0)" disabled style="background-color:silver" >Insurance Information</a></li>';

				  innerHtml = innerHtml+'<li> <a href="javascript:void(0)" disabled style="background-color:silver" >Appointment Confirmation</a></li>';

				 innerHtml = innerHtml+' <li class="active">Appointment Summary</li>';

				 $("#setsubNav").html(innerHtml);

				 $(".finishedsuccessmsg").html(jsonObj.confimessage);

				 $(".finishedconfirmationconferenceroom").html(jsonObj.Conferenceroom);

				 var checkLogin  = userToBeBooked;

				  removeSession1();

				  $('span#minsremaining').countdown('destroy');

				 /*if(checkLogin == "" ) {

				      removeSession1();

				 }*/

				

		 } else {

		      alert(jsonObj.confimessage);

		 }

	}

 }

}



function removeSession1() {



$.ajax({

                url:'removeSessiondetails' ,

				type :'POST',

                success: function(data) {

				if(checkdietianfollowup != "") {

				window.location.href = "<?php echo base_url() ;?>login/viewappointments";

				}else if( adminLoggedIn != "" ){
					window.location.href = "<?php echo base_url() ;?>login/customers";
				}

				},

                failure: function(data) {},

                dataType: 'text',

                cache: true

								

            });

}



function removeSession() {



$.ajax({

                url:'removeSessiondetails' ,

				type :'POST',

                success: removeSessiondetails,

                failure: removeSessiondetails,

                dataType: 'text',

                cache: true

								

            });

			

			

			

}





function removeSessiondetails(data) {

	if(data == "success") {

	var confnumber  =  $("#fllc_appointment_pendingnumber").val();

	       if(confnumber != "") {

				    var d = new Date();

					var addzero = "";

					if(d.getMonth() < 10) {

					addzero = "0";

					}

					$.ajax({

		                url:'deleteAppointmentsInPening' ,

						type :'POST',

						data: "confirmationid="+confnumber+"&date="+d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),

		                success: function(msg) {

						    if(msg == "success" ) {

							 window.location.href = "<?php echo base_url() ; ?>login/searchdietitian";

							}

						},

		                failure: function(msg) {

						    if(msg == "fail" ) {

							//alert("You can't cancel appointment");

							}

						},

		                cache: true

										

		            });

		   }

	

			window.location.href = "<?php echo base_url() ; ?>login/searchdietitian";

	}

}



function validateEmailAndPwd(email,phone) {

		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

	    if (filter.test(email)) {

		    var phonefilter = /^[0-9]+$/;

			if (phonefilter.test(phone)) {

	        return true;

		   } else {

		   return false;

		   }

	    }

	    else {

	        return false;

	    }

}



function submitHealthDetails() {

	



	

	



if (($(".Fname").val() != "") && ( $(".Lname").val() != "") && ( $(".Cnumber").val() != "") && ($(".Email").val() != "") && ($(".dateandtime").val() != "") ) {



var validEmailPhone = validateEmailAndPwd($(".Email").val(),$(".Cnumber").val());

if(validEmailPhone == true) {

	

	var innerHtml = '<li ><a disabled style="background-color:silver" href="javascript:void(0)">Search</a></li>';

	 innerHtml = innerHtml+'<li> <a disabled style="background-color:silver" href="javascript:void(0)">Select Service</a></li>';

	  innerHtml = innerHtml+'<li> <a disabled style="background-color:silver" href="javascript:void(0)">Available Timeslots</a></li>';

	  innerHtml = innerHtml+'<li> <a disabled style="background-color:silver" href="javascript:void(0)">Insurance Information</a></li>';

	  innerHtml = innerHtml+'<li class="active">Appointment Confirmation</li>';

	 innerHtml = innerHtml+' <li><a disabled style="background-color:silver" href="javascript:void(0)">Appointment Summary</a></li>';

	 $("#setsubNav").html(innerHtml);

	  $(".yourdetails").html($(".Fname").val()+" "+$(".Lname").val()+" "+$(".Cnumber").val()+" "+$(".Email").val());

	  $(".additionalinfo").html($("#reason").val());

	  $("#fllc_appointment_userid").val($(".Email").val());

	   $("#fllc_appointment_reason").val($("#reason").val());

	  $(".finishedemail").html($(".Email").val());

	  $(".finishedusername").html($(".Fname").val() +" "+$(".Lname").val());

	  

	  $("#fllc_appointment_insurancecompany").val($(".hinsurancecompany").val());

	  $("#fllc_appointment_insurancecompany_id").val($(".hinsuranceid").val());

	  confirmAppointments1();

	  

	  

	  

} else {

alert("Please make sure that email and phone numbers are valid");

}

	  

} else {

 alert("Please fill details");

}



}



function redirecttotimeslots() {



var d = new Date();

var addzero = "";

if(d.getMonth() < 10) {

addzero = "0";

}



var confnumber  =  $("#fllc_appointment_pendingnumber").val();

$.ajax({

                url:'deleteAppointmentsInPening' ,

				type :'POST',

				data: "confirmationid="+confnumber+"&date="+d.getFullYear()+"-"+addzero+eval(d.getMonth() + 1)+"-"+d.getDate(),

                success: function(msg) {

				    if(msg == "success" ) {

					 window.location.href = "<?php echo base_url() ; ?>login/timeslots";

					}

				},

                failure: function(msg) {

				    if(msg == "fail" ) {

					//alert("You can't cancel appointment");

					}

				},

                cache: true

								

            });



}







/*function setInsuranceAndUserDeails(data) {

if(data == "success" ) {

		window.location.href = "<?php echo base_url() ;?>/index.php/login/appointmentconfirmation";

}



}*/



function checkAlreadyRegistration() {

 $("#alreadyRegistered").css('display','block');

			  $("#alreadyRegistered").dialog('option', 'title', 'Login');

			  $("#alreadyRegistered").dialog('open');











}



function validateinputs() {

var name = $("#userid").val();

var pwd = $("#pwd").val();



if((name == "") && (pwd == "") ) {

  $(".erromsg").css('display','block');

  $(".errormessage").html("Please fill details");

  return false;

}

return true;

}





function authenticate() {



$.ajax({

                url: 'authenticateregistereduser' ,

				data: "username="+$("#userid").val()+"&password="+$("#pwd").val(),

				type :'POST',

                success: fillInsuranceDetails,

                failure: fillInsuranceDetails,

                dataType: 'json',

                cache: true

								

            });	



}



function fillInsuranceDetails(data) {

if(typeof data != 'undefined'){

		var jsonObj = data;

		if (jsonObj.length != 0 ) {

				  $(".Fname").val(jsonObj[0].firstname);

		  $(".Lname").val(jsonObj[0].lastname);

		  $(".Cnumber").val(jsonObj[0].phonenumber);

		  $(".Email").val(jsonObj[0].userid); 
		  
		  if( jsonObj[0].privacy_consent == 1 ){
		  	$( '#privacy_consent' ).prop('checked', true);
		  }

		 //  if( jsonObj[0].privacy_consent < 1 ){
		 //  	$("#confirmAppointments").prop('disabled', true);
			// $( '#privacy_consent' ).change( function(){
			// 	if( $(this).prop('checked') ){
			// 		$("#confirmAppointments").prop('disabled', false);
			// 	}else{
			// 		$("#confirmAppointments").prop('disabled', true);
			// 	}
			// });
		 //  }else{
		 //  	$( '#privacy_consent' ).prop('checked', true);
		 //  	$( '#privacy_consent' ).prop('disabled', true);
		 //  	$("#confirmAppointments").prop('disabled', false);
		 //  }

		  $("#clickedAlready").val("Yes"); 

		  getInsDetails(jsonObj[0].userid);	

		   $("#alreadyRegistered").dialog('close');

		 } else {

		      // alert("Incorrect User Details");

		 }

	}

}





function getInsDetails(userid) {



$.ajax({

                url:'getInsuranceDeails' ,

				type :'POST',

				data: "user_id="+userid,

                success: getInsuranceDeails,

                failure: getInsuranceDeails,

                dataType: 'json',

                cache: true

								

            });



}





</script>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">

<header>

    		<div class="container">

            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>

                <nav class="pull-right">

                	<ul class="nav nav-pills">

                    	<li><a href="searchdietitian">New Appointment</a></li>

						<?php if($fdietitian != "") { ?>

						 <li><a href="viewappointments">View Appointments</a></li>

						<?php } ?>

                        <?php if($fdietitian == "") { ?>

                        <li><a href="manageappointments">Manage Appointments</a></li>

						<li><a href="userreviews">Reviews</a></li>

						<?php } ?>

                       <?php if (($cuser != "") || ($cservice != "") || ($fdietitian != "")) { ?>

                        <li class="dropdown">

							<?php if($cservice == "") { ?>

							<a class="dropdown-toggle" data-toggle="dropdown" href="#">

							   <?php if($cuser != "") { ?>

                        		<?php echo $cuser ; ?> <span class="caret"></span>

								<?php } ?>

								<?php if($fdietitian != "") { ?>

								<?php echo $fdietitian ; ?> <span class="caret"></span>

								<?php } ?>

                            </a>

                            <ul class="dropdown-menu">

                            	<li><a href="editprofile">Edit Profile</a></li>

                                <li><a href="changepassword">Change Password</a></li>

                                <li class="divider"></li>

                                <li><a href="signout">Sign Out</a></li>

						

                            </ul>

							<?php } else {?>

							<a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        		<?php echo $cservice ; ?> <span class="caret"></span>

                            </a>

							<ul class="dropdown-menu">

                                <li><a href="signout">Sign Out</a></li>

							 </ul>

							<?php } ?>

                        </li>

						<?php } else { ?>

						<li><a href="userlogin">Sign in</a></li>

						<li><a href="userlogin">Register</a></li>

						<?php } ?>

                    </ul>

                </nav>

            </div>

        </header>

	<!-- END HEADRT TAG -->

    

    <!-- START MAIN CONTENT -->

    	<div class="container content">

        	<h2>Make new appointment</h2>

             <ol class="breadcrumb" id ="setsubNav" >

                    

				 <li ><a href="searchdietitian">Search</a></li>

                 <li> <a href="selectservice">Select Service</a></li>

                  <li> <a href="timeslots">Available Timeslots</a></li>

                  <li class="active insurancetab">Insurance Information</a></li>

                  <li><a href="javascript:void(0)" disabled style="background-color:silver" >Appointment Confirmation</a></li>

                  <li><a href="javascript:void(0)" disabled style="background-color:silver"  >Appointment Summary</a></li>

              </ol>

<!-- <h3>Details</h3> -->



			<input type="hidden" id="fllc_appointment_userid" value="" />

			<input type="hidden" id="fllc_appointment_reason" value="" />

			<input type="hidden" id="fllc_appointment_dietitian_id" value="" />

			<input type="hidden" id="fllc_appointment_locationid" value="" />

			<input type="hidden" id="fllc_appointment_serviceid" value="" />

			<input type="hidden" id="fllc_appointment_appointmentdate" value="" />

			<input type="hidden" id="fllc_appointment_appointmenttime" value="" />

			<input type="hidden" id="fllc_appointment_timezone" value="" />

			<input type="hidden" id="fllc_appointment_bookingstatus" value="" />

			<input type="hidden" id="fllc_appointment_number" value="" />

			<input type="hidden" id="fllc_appointment_pendingnumber" value="" />

			<input type="hidden" id="fllc_appointment_insurancecompany" value="" />

			<input type="hidden" id="fllc_appointment_insurancecompany_id" value="" />
			<!-- edited : added company name -->
			<input type="hidden" id="fllc_company_name" value="" />

			<div id="alreadyRegistered" style="display:none">

				

                <form class="form-horizontal"  role="form" id="alreadyRegisteredLoginForm" method="post" name="alreadyRegisteredLoginForm">

			  <div class="form-group">

			    <label for="inputEmail3" class="col-sm-2 control-label">User Id</label>

			    <div class="col-sm-7">

			       <input type="email" name="username" class="form-control" id="userid" placeholder="User Id">

			    </div>

			  </div>

			  <div class="form-group">

			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

			    <div class="col-sm-7">

			     <input type="password" name = "password" class="form-control" id="pwd" placeholder="Password">

			    </div>

			  </div>

			  <span id="loginError"> </span>

			  <div class="form-group">

			    <div class="col-sm-offset-2 col-sm-10">

			      <div class="checkbox">

			        <label>

			          <input type="checkbox"> Remember me  &nbsp; &nbsp;&nbsp; &nbsp; <a href="forgotpassword" >Forgot Password?</a>

			        </label>

			      </div>

			    </div>

			  </div>

			  <div class="form-group ">

			    <div class="col-sm-offset-2 col-sm-10">

			      <button type="button" onclick ="return (validateinputs() && authenticate())"  id="loginbutton" class="btn btn-primary">Sign in</button>

			    </div>

			  </div>

			</form>



			

			

			

			

			

			</div>

			

			<div class="appointmentSummary" style="display:none">

			 <div class="alert alert-success">

              	<span class="pull-left finishedsuccessmsg"></span>

             	<div class="print pull-right">

             	<input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick="document.title = 'FamilyFoodLLC, AppointmentSummary';window.print();"/>

                </div>	

              </div>

				<div class="col-lg-6">

                <table class="table table-bordered">

                	<tbody>

                    	<tr>

                        	<td scope="row" class="title-td">Confirmation Number:</td>

                            <td class="finishedconfirmationnumber"></td>

                        </tr>

                        <tr>

                        	<td scope="row" class="title-td">Day & Time:</td>

                            <td class="finisheddatetime"></td>

                        </tr>

                        <tr>

                        	<td scope="row" class="title-td">Discussion Topic:</td>

                            <td class="finisheddiscussiontopic"></td>

                        </tr>

                        <tr>

                        	<td scope="row" class="title-td">Location:</td>

                            <td class="finishedlocation">Missisipi</td>

                        </tr>

						<tr>

                        	<td scope="row" class="title-td">Conference Room:</td>

                            <td class="finishedconfirmationconferenceroom"></td>

                        </tr>

                        <tr>

                        	<td scope="row" class="title-td">Name:</td>

                            <td class="finishedusername"></td>

                        </tr>

                        <tr>

                        	<td scope="row" class="title-td">Email Address:</td>

                            <td class="finishedemail"></td>

                        </tr>

                    </tbody>

                </table>              

            </div>





			</div>

			<div class="insurancetabdiv" style="display:block">

              <div class="alert alert-warning">

              	<span class="pull-left addresstimeslot"></span>

                <a href="javascript:void(0)" class="btn btn-sm btn-warning pull-right" onclick ="removeSession()">Change</a>

              </div>

              <div class="title-box">

              	<div class="col-lg-9">

				   <?php if(($cservice != "") || ($fdietitian != "")) { ?>

				   <h5>Enter details</h5>

				   <?php } else {?>

                	<h5>Enter your details</h5>

				<?php } ?>

					<?php if(($cuser == "") && ($cservice == "") && ($fdietitian == "")) { ?>

                    <p> 

                    	Please enter your personal details below. <a href="javascript:void(0)" onclick = "checkAlreadyRegistration()" >Already Registered?</a>

                    </p>

					<?php } ?>

                </div>

                

                <div class="col-lg-3">

                Slot held for 

                <div class="alert alert-danger"><span id="minsremaining"></span></div>

                </div>

				

                <form class="form-horizontal" role="form" name="healthinformation" >

                	<div class="form-group">

					 <?php if(($cservice != "") || ($fdietitian != "")) { ?>

                        <label for="inputEmail3" class="col-sm-2 control-label">Name <span>*</span></label>

					 <?php } else {?>

					    <label for="inputEmail3" class="col-sm-2 control-label">Your Name <span>*</span></label>

					 <?php } ?>

                        <div class="col-sm-2">

                          <input type="text" class="form-control Fname" placeholder="First Name">

                        </div>

                        <div class="col-sm-2">

                          <input type="text" class="form-control Lname" placeholder="Last Name">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Contact Number <span>*</span></label>

                        <div class="col-sm-4">

                          <input type="text" maxlength="10" size="10" class="form-control Cnumber" placeholder="Phone Number">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Email <span>*</span></label>

                        <div class="col-sm-4">

                          <input type="email" class="form-control Email" placeholder="your@email.com">

                        </div>

                    </div>

                    

                     <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Date & Time <span>*</span></label>

                        <div class="col-sm-4">

                          <input type="text" class="form-control dateandtime" disabled="disabled" value = "" placeholder="">

                        </div>

                    </div>

                    

                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Health Insurance Company</label>

                        <div class="col-sm-4">

                          <input type="text" class="form-control hinsurancecompany" value=""  placeholder="Health insurance company">

                      </div>

                     </div>

                     

                     <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label">Health Insurance ID No</label>

                        <div class="col-sm-4">

                          <input type="text" class="form-control hinsuranceid" value="" placeholder="health insurance ID No">

                      </div>

                     </div>

                     <input type="hidden" id="clickedAlready" value="" />

					 

					<div class="form-group">

                        <label class="col-sm-2 control-label" for="inputEmail3">Reason </label>

                        <div class="col-sm-4">

                          

                          <textarea style="width:100%;" id="reason" name="reason" value="" > </textarea>

                        </div>

                    </div>



                    <div class="form-group">

                        <label for="inputEmail3" class="col-sm-2 control-label"></label>

                        <div class="col-sm-4">

                          <a href = "javascript:void(0)"><input type="button" onclick = "submitHealthDetails()" class="btn btn-danger" value="Continue"></a>
                          

                        </div>

                    </div>

                </form>

           

                

              </div>

			  </div>

            	

				<div class="appointmenttabconfirmationdiv" style="display:none">

			    

				

				<?php if(($cservice != "") || ($fdietitian != "")) { ?>

				<h3>Confirm Appointment</h3>

              <div class="alert alert-warning">

				<span class="pull-left">Appointment is not confirmed yet.Please review and confirm.</span>

               

              </div>

              <div class="title-box">

              	<div class="col-lg-9">

                    <p> 

                    	<!--Please review and confirm your appointment.-->

                    </p>

                </div>

                

                <div class="col-lg-3">

                

                Slot held for 

                 <div class="alert alert-danger"><span id="minsremaining"></span></div>

                

                </div>

              </div>

			  <?php } else { ?>

			  <h3>Confirm Your Appointment</h3>

			  <div class="alert alert-warning">

				<span class="pull-left">Your appointment is not confirmed yet. <br>Please review and confirm.</span>

               

              </div>

              <div class="title-box">

              	<div class="col-lg-9">

                    <p> 

                    	<!--Please review and confirm your appointment.-->

                    </p>

                </div>

                

                <div class="col-lg-3">

                

                Slot held for 

                 <div class="alert alert-danger"><span id="minsremaining"></span></div>

                

                </div>

              </div>

			  

			  <?php } ?>

            	<table class="table table-responsive" summary="This Table About appointment confirm Details">

            		<thead>

                    	<tr>

                        	<th scope="col" colspan="3" class="title-th">Appointment details</th>

                        </tr>

                    </thead>

                    <tbody>

                    	<tr>

                        	<td scope="row" class="titles-td">Appointment</td>

                            <td class="app-td appointmentdetails"></td>		

                            <td class="title-td" ><a href="javascript:void(0)" onclick ="redirecttotimeslots()" style="margin-right:220px;"> <i class="glyphicon glyphicon-edit"></i> Edit Details</a></td>

                        </tr>

                        <tr class="details-tr">

						<?php if(($cservice != "") || ($fdietitian != "")) { ?>

                        	<td scope="row" class="titles-td">Your details</td>

						<?php } else { ?>

						<td scope="row" class="titles-td">Details</td>

						<?php } ?>

                            <td class="app-td yourdetails"></td>

                            <td class="title-td"><a href="#"> </td>

                        </tr>

                        <tr class="lastrow-tr">

                        	<td scope="row" class="titles-td">Additional Info</td>

                            <td class="app-td additionalinfo"></td>

                            <td class="title-td"></td>

                        </tr>

                        <!-- edited : Added privacy consent check box -->
                        <tr id="privacyConsent" class="lastrow-tr">

                        	<td scope="row" class="titles-td">&nbsp;</td>

                            <td class="app-td "><input style="margin-left: 0px !important; padding-left: 8px;" type="checkbox" id="privacy_consent" name="privacy_consent">
                            	By checking this box, I affirm that I have read and agree with the&nbsp;<a href="https://familyfoodllc.box.com/s/7rx4xa2pi2c5dqou0u8btiwgjgmgs101">Privacy Consent</a></td>

                            <td class="title-td"></td>

                        </tr>


                    </tbody>

                

                </table>

            	<div class="pull-right" style="margin-right:150px;"><input type="button" id="confirmAppointments" onclick="confirmAppointments()" class="btn btn-danger" value="Confirm Appointment"/> </div>

                <div class="clearfix"></div>

				</div>



	   </div>

    

    <!-- END MAIN CONTENT -->

    	

    

    <!-- START FOOTER TAG  --> 

    <footer>

		<div class="container">

        	<p>© 2013 Family Food, LLC. All Rights Reserved.</p>

        </div>    

    </footer>	

    <!-- END FOOTER TAG -->

 



</body>

</html>