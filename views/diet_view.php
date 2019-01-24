<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Dietitian - View Appointments | Familyfood Dashboard</title>

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

<!--link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css"-->

<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<!-- Fonts -->

<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"-->

<!--[if lt IE 9]>

    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>

    <![endif]-->

<!--[if lt IE 10]>

    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>

    <script src="../assets/assets/vendor/respond/respond.min.js"></script>

    <![endif]-->

<!-- Scripts -->
<script src="https://use.fontawesome.com/286c52578e.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>

    Breakpoints();

</script>

<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!-- First get JQuery -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- Then get JQuery UI -->

<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>

$(document).ready(function(){

//$("#viewdetailsappts").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});



//$(".current").click(function() {

	$('.apptsdetails').css("display","block");

	$(".Allapptsdetails").css("display","none");

	var currentdate = getCurrentdate();

	var dateAfterTom = getDateAfterTom();

	getUserApptsOnLoad(currentdate,dateAfterTom);

//});



$(".all").click(function() {



 $('.apptsdetails').css("display","none");

 $(".Allapptsdetails").css("display","block"); 

  getAllUserApptsOnLoad();

});

});







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

				//alert(zeroprecession);

				} else {

				zeroprecession = eval(mydate2.getDate() + 1) ;

				}

 return  mydate2.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;



}



function calendarDayFormat(datestring) {

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

	

var dates = datestring.split("-");

	

    var myDate=new Date();

    //var monthvalue = dates[0];

	dates[1] = eval(dates[1] -1);

	

  // alert(dates[2]+'---'+monthvalue+'---'+dates[1]);

	myDate.setFullYear(dates[0],dates[1],dates[2]);

	calendarday = weekday[myDate.getDay()]+','+month[myDate.getMonth()]+' '+myDate.getDate();



  return calendarday;





}





function getUserApptsOnLoad(curdate,dateAfterTom) {

	var dates=curdate;

	var date2=dateAfterTom;

	$.ajax({

	    url:'getUserAppts' ,

		type :'POST',

		data: "dietitian_id=<?php echo $conuser ?>"+"&date="+dates+"&date2="+date2,

	    success: displayAppts,

	    failure: displayAppts,

	    dataType: 'json',

	    cache: true

						

	});

}	

			

function followupDetails(id) {

	var serachlocation = $("#"+id+"_searchlocation").val();

	var company_name = $("#"+id+"_company_name").val();

	var location_id = $("#"+id+"_location_id").val();

	var service_id = $("#"+id+"_service_id").val();

	var servicename = $("#"+id+"_servicename").val();

	var hour = $("#"+id+"_hour").val();

	var minutes = $("#"+id+"_minutes").val();

	var timestatus = $("#"+id+"_timestatus").val();

	var calendarday = $("#"+id+"_calendarday").val();

	var calenderdate = $("#"+id+"_calenderdate").val();

	var locationname = $("#"+id+"_locationname").val();

	var appointmentConfNumber = $("#"+id+"_confirmationnumber").val();

	var dietitian = $("#"+id+"_dietitian").val();

	var userid = $("#"+id+"_userid").val();



//alert(service_id);

	$.ajax({

        url:'setSessionForEditAppointment' ,

		type :'POST',

		data: "serachlocation="+serachlocation+"&company_name="+company_name+"&location_id="+location_id+"&service_id="+service_id+"&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+"&timestatus="+timestatus+"&calenderdate="+calenderdate+"&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+"&calendarday="+calendarday+"&dietitian="+dietitian+"&fuserid="+userid,

        success: function(msg){

			if(msg == "success") {

				//edited : for localhost

			  window.location.href="searchdietitian";

			}

		},

        failure: function(msg){ },

        cache: true

						

    });



}

var location_id = 0;
var company_id = 0;
var company_name = "";
var location_name = "";
var dietitian_id = "<?php echo $diet_details->dietitian_id ?>";

function displayAppts(data){

	var today = getCurrentdate();

	

	var company_loc_conf_today = {};

	if(typeof data != 'undefined'){

		var jsonObj= data;

		if (jsonObj.length != 0 ) {

		//	var innerHtml = '<div class="print pull-right"><input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick="document.title = \'FamilyFoodLLC, Appointments\';window.print();"/></div><br><table class="table table-responsive table-striped table-condensed" summary="This Table About appointment confirm Details" style="border-collapse:collapse;"><thead>';
//<th>&nbsp;</th>
		//		innerHtml = innerHtml+'<tr><th class="title-th" scope="col">Service Name</th> <th class="title-th" scope="col">Conference</th> <th class="title-th" scope="col" style="width:150px">Name</th> <th class="title-th" scope="col" style="width:90px">User Name</th><th class="title-th" scope="col">Reason</th><th class="title-th" scope="col">Phone Number</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> <th scope="col" class="title-th"></th><th scope="col" class="title-th"></th><tbody>';

			var innerHtml = '<div class="print pull-right"><input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick="document.title = \'FamilyFoodLLC, Appointments\';window.print();"/></div><br><table class="table table-responsive table-striped table-condensed" summary="This Table About appointment confirm Details" style="border-collapse:collapse;"><thead>';

			innerHtml = innerHtml+'<tr><th>&nbsp;</th><th class="title-th" scope="col">Service Name</th> <th class="title-th" scope="col">Conference</th> <th class="title-th" scope="col" style="width:150px">Name</th> <th class="title-th" scope="col" style="width:90px">User Name</th><th class="title-th" scope="col">Reason</th><th class="title-th" scope="col">Phone Number</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> <th scope="col" class="title-th"></th><th scope="col" class="title-th"></th><tbody>';

      

  	

			for (i=0;i < jsonObj.length;i++)

			{

				var appointmenttime = jsonObj[i].appointment_time.split(" ");

				var appointmenthourmin = appointmenttime[0].split(":");

				var appointmentdate = calendarDayFormat(jsonObj[i].appointment_date);

				currdate = new Date();

				timezone = "";



				if(jsonObj[i].timezone != null) {

				  	timezone = jsonObj[i].timezone;

				}				

				var clientName = jsonObj[i].firstname+' '+jsonObj[i].lastname;

				if( jsonObj[i].privacy_consent == 0 ){

					clientName = '*'+jsonObj[i].firstname+' '+jsonObj[i].lastname;

				}

				var target = "table_target"+i;

				var timeWalkIn = "";

				if( jsonObj[i].appointment_time == "00:00" ){

					timeWalkIn = "Walk-in";

				}else{

					timeWalkIn = jsonObj[i].appointment_time+' '+jsonObj[i].timezone;

				}



				//get appointment company-location-conference today

				var d = new Date();

				// var todayDate = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();

				
				var conferenceRooms = "";
				conferenceRooms = jsonObj[i].conference_room;
				if( jsonObj[i].appointment_date == today ){

					

					//if( jsonObj[i].conference_room != "" ){

					//}else{
					//	conferenceRooms = jsonObj[i].conf_room_1;
					//}

					company_loc_conf_today[jsonObj[i].company_name] = [jsonObj[i].address2, conferenceRooms];

				}
                location_id = jsonObj[i].location_id;
                company_id = jsonObj[i].company_id;

// data-target="#'+target+'" data-toggle="collapse"
// <td><button class="btn btn-default btn-xs"><span class="icon wb-chevron-down"></span></button></td>
				//innerHtml=innerHtml+'<tr class="accordion-toggle" data-target="#'+target+'" data-toggle="collapse"><td><button class="btn btn-default btn-xs"><span class="icon wb-chevron-down"></span></button></td><td scope="row">'+jsonObj[i].name+'</td><td scope="row">'+jsonObj[i].conf_room_1+' '+jsonObj[i].conf_room_2+' '+jsonObj[i].conf_room_3+' '+jsonObj[i].conf_room_4+' '+jsonObj[i].conf_room_5+'</td><td scope="row">'+clientName+'</td><td scope="row"><a href="viewuserappointments?userid='+jsonObj[i].userid+'"><i class="fa fa-calendar" style="color: #46be8a"></i> '+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].reason+'</td><td>'+jsonObj[i].phonenumber+'</td><td>'+jsonObj[i].appointment_date+'</td> <td>'+timeWalkIn+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <!--i class="glyphicon glyphicon-list"></i--><button class="btn btn-primary" type="button">View Details</button></a></td><td><a href="javascript:void(0)" onclick="followupDetails(\''+jsonObj[i].confirmation_number+'\')" > <i class="glyphicon glyphicon-calendar"></i> Follow-Up</a></td></tr>';		
				
				innerHtml=innerHtml+'<tr class="accordion-toggle" data-target="#'+target+'" data-toggle="collapse"><td><button class="btn btn-default btn-xs"><span class="icon wb-chevron-down"></span></button></td><td scope="row">'+jsonObj[i].name+'</td><td scope="row">'+conferenceRooms+'</td><td scope="row">'+clientName+'</td><td scope="row"><a href="viewuserappointments?userid='+jsonObj[i].userid+'"><i class="fa fa-calendar" style="color: #46be8a"></i> '+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].reason+'</td><td>'+jsonObj[i].phonenumber+'</td><td>'+jsonObj[i].appointment_date+'</td> <td>'+timeWalkIn+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <!--i class="glyphicon glyphicon-list"></i--><button class="btn btn-primary" type="button">View Details</button></a></td><td><a href="javascript:void(0)" onclick="followupDetails(\''+jsonObj[i].confirmation_number+'\')" > <i class="glyphicon glyphicon-calendar"></i> Follow-Up</a></td></tr>';

				innerHtml=innerHtml+returnHiddenTable1( target, jsonObj[i].userid, jsonObj[i].uid, jsonObj[i] );

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_searchlocation" value="'+jsonObj[i].city+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_company_name" value="'+jsonObj[i].company_name+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_location_id" value="'+jsonObj[i].location_id+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_service_id" value="'+jsonObj[i].service_id+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_servicename" value="'+jsonObj[i].name+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_hour" value="'+appointmenthourmin[0]+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_minutes" value="'+appointmenthourmin[1]+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_timestatus" value="'+appointmenttime[1]+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_timezone" value="'+timezone+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calendarday" value="'+appointmentdate+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_calenderdate" value="'+jsonObj[i].appointment_date+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_locationname" value="'+jsonObj[i].address2+'" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_confirmationnumber" value="" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_dietitian" value="<?php echo $conuser ?>" />';

				innerHtml = innerHtml +'<input type="hidden" id="'+jsonObj[i].confirmation_number+'_userid" value="'+jsonObj[i].userid+'" />';

			}



			innerHtml =innerHtml + '</tbody></table>';

			$(".apptsdetails").html(innerHtml);



	   		var comp_loc_conf_html = "<tr><td colspan=3>No Appointment Location for today</td></tr>";

		   	if( company_loc_conf_today != '' || company_loc_conf_today.length > 0 ){

		   		comp_loc_conf_html = "<tr><th>Company</th><th>Location</th><th>Conference Room</th></tr>";

		   		$.each( company_loc_conf_today, function( key, value ){
		   		    company_name = key;
                    location_name = value[0];
		   			comp_loc_conf_html += '<tr><td>'+key+'</td><td>'+value[0]+'</td><td>'+value[1]+'</td></tr>';

		   		});

		   		$( '#comp_loc_conf' ).html( comp_loc_conf_html );
                $( '#location_title' ).html('FEEDBACK ON THIS LOCATION :  '+location_name+', '+company_name);
		   	}

	   	}else {

	   

	   		$(".apptsdetails").html(" No appointments are found.").css({"color":"red","margin-left":"10px","font-size":"20px"});

	   	}

	}

}



function getAllUserApptsOnLoad() {

$.ajax({

                url:'getAllUserAppts' ,

				type :'POST',

				data: "dietitian_id=<?php echo $conuser ?>",

                success: displayAllAppts,

                failure: displayAllAppts,

                dataType: 'json',

                cache: true

								

            });

			}

function displayAllAppts(data){

	if(typeof data != 'undefined'){

		var jsonObj= data;

		if (jsonObj.length != 0 ) {

			var innerHtml = '<table class="table table-responsive table-striped" summary="This Table About appointment confirm Details"><thead>';

			innerHtml = innerHtml+'<tr><th class="title-th" scope="col">ServiceName</th> <th class="title-th" scope="col">UserName</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> </tr></thead><tbody>';

		            		

		  	

			for (i=0;i < jsonObj.length;i++)

			{

				var pc = "";

				if( jsonObj[i].privacy_consent ){

					pc = "*";

				}

				var timeWalkIn = "";

				if( jsonObj[i].appointment_time == "00:00 EST" ){

					timeWalkIn = "Walk-in";

				}else{

					timeWalkIn = jsonObj[i].appointment_time;

				}

				

			 innerHtml=innerHtml+'<tr><td scope="row">'+jsonObj[i].name+'</td><td scope="row"><a href="viewuserappointments?userid='+jsonObj[i].userid+'">'+pc+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].appointment_date+'</td> <td>'+timeWalkIn+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <i class="glyphicon glyphicon-expand"></i> View Details</a></td><td><a href="#"> <i class="glyphicon glyphicon-thumbs-up"></i> Follow-Up</a></td></tr>';		

				

			}    

			innerHtml =innerHtml + '</tbody></table>';

			$(".Allapptsdetails").html(innerHtml);

	   

	   }else {

	   

	   	$(".Allapptsdetails").html(" No appointments are found.").css({"color":"red","margin-left":"10px","font-size":"20px"});

	   }



   }

}



function getCurrentdate() {

var mydate = new Date();

				var zeromonthprecession = "0";

				var zeroprecession = "0";

			

				if(eval(mydate.getMonth() +1) < 10 ) {

				  zeromonthprecession = zeromonthprecession + eval(mydate.getMonth() +1) ;

				} else {

				zeromonthprecession = eval(mydate.getMonth() +1) ;

				}

				

				if(mydate.getDate() < 10) {

				

				zeroprecession = zeroprecession + mydate.getDate() ;

				} else {

				zeroprecession = mydate.getDate() ;

				}

 return  mydate.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;

}



function getDateAfterTom() {

var mydate = new Date();

mydate.setDate( mydate.getDate() + 1);

				var zeromonthprecession = "0";

				var zeroprecession = "0";

			

				if(eval(mydate.getMonth() +1) < 10 ) {

				  zeromonthprecession = zeromonthprecession + eval(mydate.getMonth() +1) ;

				} else {

				zeromonthprecession = eval(mydate.getMonth() +1) ;

				}

				

				if(mydate.getDate() < 10) {

				

				zeroprecession = zeroprecession + mydate.getDate() ;

				} else {

				zeroprecession = mydate.getDate() ;

				}

 return  mydate.getFullYear()+"-"+zeromonthprecession+"-"+zeroprecession;

}


function sendFeedBack() {
    if( location_id > 0 ){
        $.ajax({
    
            url:'submitFeedBackLoc' ,
    
    		type :'POST',
    
    		data: {
    		    "location_id" : location_id,
    		    "company_id" : company_id,
    		    "dietitian_id" : dietitian_id,
    		    "feedback" : $( '#feedBackMsg' ).val()
    		},
    
            success: function(return_msg){
                alert( return_msg );
            },
    
            failure: function(){
                alert( 'Sommething went wrong! Please try again.' );
            },
    
            dataType: 'json',
    
            cache: true			
    
        });
    }else{
        alert( 'No current location and company selected!' );
    }
	

}


function displayViewDetails(id) {

	var appointmentConfNumber =id;

	// $("#viewdetailsappts").dialog('option', 'title', 'View Details');

	// $("#viewdetailsappts").css('display','block');

	// $("#viewdetailsappts").dialog('open');

	$.ajax({

        url:'displayViewDetails' ,

		type :'POST',

		data: "confNum="+appointmentConfNumber,

        success: ViewDetails,

        failure: ViewDetails,

        dataType: 'json',

        cache: true			

    });

}

			

function ViewDetails(data){

	if(typeof data != 'undefined'){

		var jsonObj= data;

		if (jsonObj.length != 0 ) {

			$("#viewdetailsname").html(jsonObj[0].firstname);

			$("#viewdetailscompany").html(jsonObj[0].company_name);

			$("#viewdetailslocation").html(jsonObj[0].address2); 

			$("#viewdetailszipcode").html(jsonObj[0].pincode);

			$("#viewdetailsconf1").html(jsonObj[0].conf_room_1);

			$("#viewdetailsconf2").html(jsonObj[0].conf_room_2);

			$("#viewdetailsconf3").html(jsonObj[0].conf_room_3);

			$("#viewdetailsconf4").html(jsonObj[0].conf_room_4);

			$("#viewdetailsconf5").html(jsonObj[0].conf_room_5);



			$("#viewdetailsservice").html(jsonObj[0].name);

			$("#viewdetailsdate").html(jsonObj[0].appointment_date);

			$("#viewdetailstime").html(jsonObj[0].appointment_time);

			$("#viewdetailsreason").html(jsonObj[0].reason);

			$("#viewdetailsphoneno").html(jsonObj[0].phone);



			$( '#viewdetailsappts' ).modal( 'show' );

		}

	}  

}



function editAppointmentDetails(id) {

	var serachlocation = $("#"+id+"_searchlocation").val();

	var company_name = $("#"+id+"_company_name").val();

	var location_id = $("#"+id+"_location_id").val();

	var service_id = $("#"+id+"_service_id").val();

	var servicename = $("#"+id+"_servicename").val();

	var hour = $("#"+id+"_hour").val();

	var minutes = $("#"+id+"_minutes").val();

	var timestatus = $("#"+id+"_timestatus").val();

	var calendarday = $("#"+id+"_calendarday").val();

	var calenderdate = $("#"+id+"_calenderdate").val();

	var locationname = $("#"+id+"_locationname").val();

	var appointmentConfNumber = $("#"+id+"_confirmationnumber").val();



//alert(service_id);

	$.ajax({

        url:'setSessionForEditAppointment' ,

		type :'POST',

		data: "serachlocation="+serachlocation+"&company_name="+company_name+"&location_id="+location_id+"&service_id="+service_id+"&servicename="+servicename+"&hour="+hour+"&minutes="+minutes+"&timestatus="+timestatus+"&calenderdate="+calenderdate+"&locationname="+locationname+"&appointConfNum="+appointmentConfNumber+"&calendarday="+calendarday,

        success: function(msg){

			if(msg == "success") {

			  window.location.href="searchdietitian";

			}

		},

        failure: function(msg){ },

        cache: true

						

    });

}



function removeSession1() {



$.ajax({

                url:'removeSessiondetails' ,

				type :'POST',

                success: function(data) {},

                failure: function(data) {},

                dataType: 'text',

                cache: true

								

            });

}

function returnHiddenTable1( target, userid, uid, data ){
	var notes = data.notes;
	var text_followup = ( data.da_followup != "" ) ? data.da_followup+" " : "";
	var FUp = "&nbsp;Follow-Up&nbsp;"
	var appointment_date = data.appointment_date;

	if( text_followup != "" ){

		FUp = text_followup;

	}

	var followup = '<td>'+

		'<div class="dropdown">'+

		'<!--label>Follow-Up&nbsp;</label-->'+

		'<button style="background-color: #708090; color: #ffffff" class="btn btn-default dropdown-toggle '+target+'_followupBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+FUp+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Seen - F/U scheduled\')">Seen - F/U scheduled</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Seen - F/U not scheduled\')">Seen - F/U not scheduled</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'No-show\')">No-show</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Cancelled\')">Cancelled</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_followup" value="'+data.da_followup+'">'+

		'</div>'+

		'</td>';

	var hiddenField = '<tr><td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="'+target+'"><table class="table table-striped"><tr><th><h4>NOTES</h4></th><td>'+notes+'</td><td>'+followup+'</td><td><input type="button" class="btn btn-success" onclick="subAction(\''+userid+'\', \''+uid+'\',\''+target+'\', \''+appointment_date+'\')" value="Save Changes"></td></tr></table></div></td></tr>';

	return hiddenField;
}

function returnHiddenTable( target, userid, data ){

	var notes = data.notes;

	var text_followup = ( data.da_followup != "" ) ? data.da_followup+" " : "";

	var text_whole_grains = ( data.da_whole_grains != "" ) ? data.da_whole_grains+" " : "";

	var text_goal_met = ( data.da_goalMet != "" ) ? data.da_goalMet+" " : "";

	var text_vegetables = ( data.da_vegetables != "" ) ? data.da_vegetables+" " : "";

	var text_fruit = ( data.da_fruit != "" ) ? data.da_fruit+" " : "";

	var text_dairy = ( data.da_dairy != "" ) ? data.da_dairy+" " : "";

	var text_fish = ( data.da_fish != "" ) ? data.da_fish+" " : "";

	var text_water = ( data.da_water != "" ) ? data.da_water+" " : "";

	var text_physical = ( data.da_physical != "" ) ? data.da_physical+" " : "";

	var text_handouts = ( data.da_handouts != "" ) ? data.da_handouts+" " : "";

	var SNHchecked = "";

	var STWchecked = "";

	var MPchecked = "";

	var GLchecked = "";

	var FFPchecked = "";

	var appointment_date = data.appointment_date;



	var FUp = "&nbsp;Follow-Up&nbsp;"

	if( text_followup != "" ){

		FUp = text_followup;

	}



	if( data.da_handouts != "" ){

		var arrHandouts = data.da_handouts.split(",");

		if( jQuery.inArray( "Sports Nutrition Handout", arrHandouts ) == -1 ){

		}else{

			SNHchecked = 'checked';

		}

		if( jQuery.inArray( "Shop the Walls", arrHandouts ) == -1 ){

		}else{

			STWchecked = 'checked';

		}

		if( jQuery.inArray( "Menu Planner", arrHandouts ) == -1 ){

		}else{

			MPchecked = 'checked';

		}

		if( jQuery.inArray( "Grocery List", arrHandouts ) == -1 ){

		}else{

			GLchecked = 'checked';

		}

		if( jQuery.inArray( "Family Food Plate", arrHandouts ) == -1 ){

		}else{

			FFPchecked = 'checked';

		}

	}

	var hiddenField = '<!-- start hidden row -->'+

		'<tr>'+

		'<td colspan="12" class="hiddenRow"><div class="accordian-body collapse" id="'+target+'">'+

		'<table class="table table-striped">'+

		'<thead>'+

		'<tr><td><h4>Notes: </h4>'+notes+'</td></tr>'+



		'<!-- start followup -->'+

		'<tr><td>'+

		'<div class="dropdown">'+

		'<!--label>Follow-Up&nbsp;</label-->'+

		'<button style="background-color: #708090; color: #ffffff" class="btn btn-default dropdown-toggle '+target+'_followupBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+FUp+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Seen - F/U scheduled\')">Seen - F/U scheduled</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Seen - F/U not scheduled\')">Seen - F/U not scheduled</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'No-show\')">No-show</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_followup\',\'Cancelled\')">Cancelled</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_followup" value="'+data.da_followup+'">'+

		'</div>'+

		'</td>'+

		'<!-- end followup -->'+



		'<!-- start weight -->'+

		'<td>'+

		'<div class="form-group">'+

		'<label class="sr-only" for="exampleInputAmount">Weight (in pounds)</label>'+

		'<div class="input-group">'+

		'<!--div class="input-group-addon">$</div-->'+

		'<input type="text" onfocus="setBMI(\''+target+'\')" class="form-control" id="'+target+'_weight" placeholder="Weight">'+

		'<div class="input-group-addon">lbs</div>'+

		'</div>'+

		'</div>'+

		'</td>'+

		'<!-- end weight -->'+



		'<!-- start height -->'+

		'<td>'+

		'<div class="form-group">'+

		'<label class="sr-only" for="exampleInputAmount">Height (in inches)</label>'+

		'<div class="input-group">'+

		'<!--div class="input-group-addon">$</div-->'+

		'<input type="text" onfocus="setBMI(\''+target+'\')" class="form-control" id="'+target+'_height" placeholder="Height">'+

		'<div class="input-group-addon">inches</div>'+

		'</div>'+

		'</div>'+

		'</td>'+

		'<!-- end height -->'+



		'<!-- start BMI -->'+

		'<td>'+

		'<div class="form-group">'+

		'<label class="sr-only" for="exampleInputAmount">Height (in inches)</label>'+

		'<div class="input-group">'+

		'<!--div class="input-group-addon">BMI</div-->'+

		'<input type="text" class="form-control" id="'+target+'_bmi" placeholder="BMI" disabled>'+

		'<div class="input-group-addon">BMI</div>'+

		'</div>'+

		'</div>'+

		'</td>'+

		'<!-- end BMI -->'+



		'<!-- start Nutritional Goal met -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_goalMetBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_goal_met+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_goalMet\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_goalMet\',\'No\')">No</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_goalMet\',\'Yes\')">Yes</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_goalMet" value="'+text_goal_met+'">'+

		'&nbsp;<label>Met Nutritional Goal</label>'+

		'</div>'+

		'</td>'+

		'<!-- end Nutritional Goal met -->'+

		'<td></td>'+

		'<td></td>'+

		'<td></td>'+

		'</tr>'+



		'<tr>'+

		'<!-- start whole grains -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_whole_grainsBTN" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_whole_grains+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_whole_grains\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_whole_grains" value="'+text_whole_grains+'">'+

		'&nbsp;<label>Whole Grains / day</label>'+

		'</div>'+

		'</td>'+



		'<!-- end whole grains -->'+



		'<!-- start vegetables -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_vegetablesBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_vegetables+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_vegetables\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_vegetables" value="'+text_vegetables+'">'+

		'<label>&nbsp;Vegetables / day</label>'+

		'</div>'+

		'</td>'+

		'<!-- end vegetables -->'+



		'<!-- start fruit -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_fruitBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_fruit+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fruit\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_fruit" value="'+text_fruit+'">'+

		'&nbsp;<label>Fruit / day</label>'+

		'</div>'+

		'</td>'+

		'<!-- end fruit -->'+



		'<!-- start Low fat dairy -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_dairyBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_dairy+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_dairy\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_dairy" value="'+text_dairy+'">'+

		'&nbsp;<label>Low fat dairy / day</label>'+

		'</div>'+

		'</td>'+

		'<td></td>'+

		'<td></td>'+

		'<td></td>'+

		'<td></td>'+

		'<!-- end Low fat dairy -->'+

		'</tr>'+

		

		'<tr>'+

		'<!-- start fish -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_fishBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_fish+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_fish\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_fish" value="'+text_fish+'">'+

		'&nbsp;<label>Fish / week</label>'+

		'</div>'+

		'</td>'+

		'<!-- end fish -->'+



		'<!-- start water -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_waterBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_water+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'7\')">7</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'8\')">8</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'9\')">9</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_water\',\'10\')">10</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_water" value="'+text_water+'">'+

		'&nbsp;<label>Water-cups / day</label>'+

		'</div>'+

		'</td>'+

		'<!-- end water -->'+



		'<!-- start physical activity -->'+

		'<td>'+

		'<div class="dropdown">'+

		'<button class="btn btn-default dropdown-toggle '+target+'_physicalBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_physical+'<span class="caret"></span></button>'+

		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'0\')">N/A</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'1\')">1</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'2\')">2</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'3\')">3</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'4\')">4</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'5\')">5</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'6\')">6</a></li>'+

		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_physical\',\'7\')">7</a></li>'+

		'</ul>'+

		'<input type="hidden" id="'+target+'_physical" value="'+text_physical+'">'+

		'&nbsp;<label>Physical Activity - days / week</label>'+

		'</div>'+

		'</td>'+

		'<!-- end physical activity -->'+

		'<td></td>'+

		'<td></td>'+

		'<td></td>'+

		'<td></td>'+

		'</tr>'+



		'<tr>'+

		'<th>Nutrition Goal</th>'+

		'<th>Physical Activity Goal</th>'+

		'<th>Family/Social/Environmental Goal</th>'+

		'<th>Handouts (*.PDF) </th>'+

		'<th></th>'+

		'<th></th>'+

		'<th></th>'+ 

		'</tr>'+

		'</thead>'+

		'<tbody>'+

		'<tr>'+

		'<td><textarea class="form-control" id="'+target+'_nutritionalGoal" rows="3"></textarea></td>'+

		'<td><textarea class="form-control" id="'+target+'_physicalGoal" rows="3"></textarea></td>'+

		'<td><textarea class="form-control" id="'+target+'_socialGoal" rows="3"></textarea></td>'+

  '<td>'+

<!-- new handouts form -->

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Nutrition for Runners\')" '+SNHchecked+'>Nutrition for Runners</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Shop the Walls\')" '+STWchecked+'>Shop the Walls</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Menu Planner\')" '+MPchecked+'>Menu Planner</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Grocery List\')" '+GLchecked+'>Grocery List</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Family Food Plate\')" '+FFPchecked+'>Family Food Plate</label>'+

'</div>'+



'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Tasty Cooking\')" '+FFPchecked+'>Tasty Cooking</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'Eating for Exercise\')" '+FFPchecked+'>Eating for Exercise</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'My Cholesterol\')" '+FFPchecked+'>My Cholesterol</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'My Blood Pressure\')" '+FFPchecked+'>My Blood Pressure</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'My Healthy Weight\')" '+FFPchecked+'>My Healthy Weight</label>'+

'</div>'+

'<div class="checkbox">'+

'<label>'+

'<input type="checkbox" onclick="setValueToHandout(\''+target+'_handouts\',\'My Goal Setting\')" '+FFPchecked+'>My Goal Setting</label>'+

'</div>'+

'<input type="hidden" id="'+target+'_handouts" value="'+data.da_handouts+'">'+

<!-- end new handouts form -->

		//'<button class="btn btn-default dropdown-toggle '+target+'_handoutsBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_handouts+'<span class="caret"></span></button>'+

		//'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+

		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_handouts\',\'Sports Nutrition Handout\')">Sports Nutrition Handout</a></li>'+

		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_handouts\',\'Shop the Walls\')">Shop the Walls</a></li>'+

		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_handouts\',\'Menu Planner\')">Menu Planner</a></li>'+

		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_handouts\',\'Grocery List\')">Grocery List</a></li>'+

		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,\''+target+'_handouts\',\'Family Food Plate\')">Family Food Plate</a></li>'+

		//'</ul>'+

		//'<input type="hidden" id="'+target+'_handouts" value="'+data.da_handouts+'">'+

		//'</div>'+

		'</td>'+

		'<td></td>'+

		'<td></td>'+

		'<td><input type="button" class="btn btn-success" onclick="subAction(\''+userid+'\',\''+target+'\', \''+appointment_date+'\')" value="Save Changes"></td>'+

		'</tr>'+

		'</tbody>'+

		'</table>'+

		'</div>'+

		'</td>'+

		'</tr>'+

		'<!-- end hidden row -->';



		return hiddenField;

}





function setValueToHandout( fieldID, value ){

	var newVal = $( "#"+fieldID ).val();

	if( newVal != "" ){

		var arrVal = newVal.split(",");

		if( jQuery.inArray( value, arrVal ) == -1 ){

			newVal = newVal + "," + value;

		}else{

			arrVal = jQuery.grep(arrVal, function(val) {

			  return val != value;

			});

			// newVal = JSON.stringify( arrVal );

			// newVal = newVal.replace("[","");

			// newVal = newVal.replace("]","");

			newVal = arrVal.join(",");

		}

	}else{

		newVal = value;

	}

	$( "#"+fieldID ).val( newVal );



}



function setValueToHiddenField( elem, fieldID, value ){

	$( "#"+fieldID ).val( value );

	var textVal = value;

	if( value == '0' ){

		textVal = 'N/A';

	}

	$( "."+fieldID+"BTN").text( textVal );

	// var parent = $( elem ).parent();

	// var child = $( parent ).find('li a');

	// $( child ).each(function() {

	// 	elem.style.color = "#333333";

	// 	elem.style.background = "#ffffff";

	// });

	// elem.style.color = "#ffffff";

	// elem.style.background = "#5858FA";

}



function setBMI( target ){

	$( "#"+target+'_weight' ).keyup(function(){

		var weightInLbs = $( this ).val();

		var heightInInch = $( "#"+target+'_height' ).val();

		var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );

		if( bmi > 0 && bmi != "Infinity" ){

			$( "#"+target+'_bmi' ).val(bmi);

		}else{

			$( "#"+target+'_bmi' ).val(0);

		}

	});



	$( "#"+target+'_height' ).keyup(function(){

		var heightInInch = $( this ).val();

		var weightInLbs = $( "#"+target+'_weight' ).val();

		var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );

		if( bmi > 0 && bmi != "Infinity" ){

			$( "#"+target+'_bmi' ).val(bmi);

		}else{


			$( "#"+target+'_bmi' ).val(0);

		}

	});

}



function subAction( userid, uid, target, appointment_date ){

	// alert( userid + "==" + target );

	// var weightInLbs = $( "#"+target+'_weight' ).val();

	// var heightInInch = $( "#"+target+'_height' ).val();

	// var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );

	// $( "#"+target+'_bmi' ).val(bmi);

	//subDietitianInstructions(userid,$( "#"+target+'_followup' ).val(),$( "#"+target+'_weight' ).val(),$( "#"+target+'_height' ).val(),$( "#"+target+'_bmi' ).val(),$( "#"+target+'_goalMet' ).val(),$( "#"+target+'_whole_grains' ).val(),$( "#"+target+'_vegetables' ).val(),$( "#"+target+'_fruit' ).val(),$( "#"+target+'_dairy' ).val(),$( "#"+target+'_fish' ).val(),$( "#"+target+'_water' ).val(),$( "#"+target+'_physical' ).val(),$( "#"+target+'_nutritionalGoal' ).val(),$( "#"+target+'_physicalGoal' ).val(),$( "#"+target+'_socialGoal' ).val(),$( "#"+target+'_handouts' ).val(), appointment_date );
	subDietitianInstructionsNew( userid, uid, $( "#"+target+'_followup' ).val());
}



function subDietitianInstructions(userid,followup,weight,height,bmi,goalMet,whole_grains,vegetables,fruit,dairy,fish,water,physical,nutrition,physicalGoal,socialGoal,handouts,appointment_date){

	var dataSet = "userid="+userid+"&followup="+followup+"&weight="+weight+"&height="+height+"&bmi="+bmi+"&goalMet="+goalMet+"&whole_grains="+whole_grains+"&vegetables="+vegetables+"&fruit="+fruit+"&dairy="+dairy+"&fish="+fish+"&water="+water+"&nutrition="+nutrition+"&physical="+physical+"&physicalGoal="+physicalGoal+"&socialGoal="+socialGoal+"&handouts="+handouts+"&appointment_date="+appointment_date;

	// alert( dataSet );

	if( userid == '' || followup == '' || weight == '' || height == '' || bmi == '' || goalMet == '' || whole_grains == '' || vegetables == '' 

		 || fruit == ''  || dairy == ''  || fish == ''  || water == ''  || physical == ''  || nutrition == '' || physicalGoal == '' || socialGoal == '' ){

		alert('Please fill up all the information to advice the client');

	}else{

		$.ajax({

			url:'save_dietitian_advice',

			type :'POST',

			data : dataSet,

	        success: function(data) { alert(data); },

	        failure: function(data) { alert('Please fill up all the information to advice the client'); },

	        dataType: 'json',		

		});

	}

}

function subDietitianInstructionsNew( userid, uid, followup ){
	var dataSet = "userid="+userid+"&uid="+uid+"&followup="+followup
	if( followup != '' ){
		$.ajax({

			url:'save_dietitian_advice_followup',

			type :'POST',

			data : dataSet,

	        success: function(data) { alert(data); },

	        failure: function(data) { alert('Please fill up all the information to advice the client'); },

	        dataType: 'json',		

		});
	}else{
		alert('Please fill up all the information to advice the client');
	}
}



</script>
</head>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 

<!-- start header menu -->

<?php include("inc_dietitian_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_dietitian_left_menu.php"); ?>

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
<div class="page-header padding-0 hidden-xs">
<div class="widget widget-article type-flex"> 

<!-- goal meter start
<div class="col-lg-12 text-center">
<div style="width:50%" class="vertical-align-middle">
<?php 

$meterPercentage = ($goalMeterValue->gm_val/$goalMeterValue->gm_max) * 100;

$meterVal = $goalMeterValue->gm_val.' / '.$goalMeterValue->gm_max;

?>
<h5 id="goalMeterText"><?php echo $meterVal;?> Clients</h5>
<div id="goalMeter" class="progress progress-lg">
<div role="progressbar" style="width: <?php echo $meterPercentage;?>%; border-radius: 8px;" class="progress-bar progress-bar-danger"></div>
</div>
</div>
</div>
goal meter end -->

<div class="widget-header cover overlay height-300"><img class="cover-image" src="../assets/assets/images/banners/header_dietitian.jpg" alt="">
<div class="overlay-panel text-center vertical-align">
<div class="widget-metas vertical-align-middle blue-grey-800">
<div class="widget-title font-size-20 blue-grey-800 text-left">We Are:</div>
<ul class="list-group list-group-dividered list-group-full text-left">
<li class="list-group-item" style="background:none; text-transform:uppercase">nutrition-expert scientists staunchly committed to evidence-based information</li>
<li class="list-group-item" style="background:none; text-transform:uppercase">interpreter connoisseurs translating science into practical application</li>
<li class="list-group-item" style="background:none; text-transform:uppercase">inspirational motivators</li>
<li class="list-group-item" style="background:none; text-transform:uppercase">steadfast empowerers jumping at the opportunity to counsel in client-friendly settings</li>
</ul>
<div class="widget-title font-size-30 margin-bottom-30 blue-grey-800 text-left">We Are Family Food RDs!</div>
</div>
</div>
</div>

</div>
</div>

<div class="page-content container-fluid">
<div class="row" data-plugin="matchHeight" data-by-row="true"> 

<!-- panel tips -->
<div class="col-xlg-3 col-lg-4 col-md-12" style="height: 550px;">
<div class="widget widget-shadow">
<div class="widget-content widget-radius text-center bg-blue-600 padding-40 white"> <i class="fa fa-info-circle fa-3x"></i>
<p class="font-size-20 white-700">BOOKING FOLLOWUP VISITS?</p>
<p class="white-400 margin-bottom-20">Simply follow our guideline below:</p>
<p style="font-style:italic">“I just wanted to let you know that our dates do fill up quickly and we often have a waiting list. Therefore, appointments cancelled within less than 24 hours will be charged a $30 fee. (Be sure the client has our contact info or even say – Do you have our contact info?) Just let us know in advance if you need to change your appointment – just like a doctor’s office!”</p>
<ul class="list-inline font-size-18">
<li><a class="blue-grey-400" href="javascript:void(0)"><!--i class="icon bd-twitter" aria-hidden="true"></i--></a></li>
<li class="margin-left-10"><a class="blue-grey-400" href="javascript:void(0)"><!--i class="icon bd-facebook" aria-hidden="true"></i--></a></li>
<li class="margin-left-10"><a class="blue-grey-400" href="javascript:void(0)"><!--i class="icon bd-dribbble" aria-hidden="true"></i--></a></li>
<li class="margin-left-10"><a class="blue-grey-400" href="javascript:void(0)"><!--i class="icon bd-instagram" aria-hidden="true"></i--></a></li>
</ul>
<a href="resourcecenter" class="btn btn-default padding-horizontal-40">RESOURCE CENTER</a> </div>
</div>
</div>
<!-- end panel tips --> 

<!-- panel upcoming appointments -->
<div class="col-xlg-6 col-lg-8 col-md-12" style="height: 550px;">
<div class="widget widget-shadow example-responsive" id="widgetLinearea">
<div class="widget-content bg-white padding-30" style="min-width:480px;">
<div class="row padding-bottom-20" style="height:calc(100% - 322px);">
<div class="col-sm-8 col-xs-6">
<div class="font-size-20 blue-grey-700">YOUR APPOINTMENT LOCATION/S FOR TODAY</div>
</div>
<div class="col-sm-4 col-xs-6">
<div class="row">
<div class="col-xs-6">
<div class="counter counter-md">
<div class="counter-number-group text-nowrap"></div>
</div>
</div>
<div class="col-xs-6">
<div class="counter counter-md">
<div class="counter-number-group text-nowrap"><i class="fa fa-user-md fa-2x" style="color:#c42626"></i>&nbsp;<i class="fa fa-user fa-2x" style="color:#c42626"></i></div>
</div>
</div>
</div>
</div>
</div>
<div class="ct-chart margin-bottom-30" style="height:270px;">
<table class="table" id="comp_loc_conf">
</table>
</div>
</div>
</div>
</div>
<!-- end upcoming appointments --> 

<!-- panel total clients -->
<div class="col-xlg-3 col-md-12">
<div class="row height-full">
<!--div class="col-xlg-12 col-md-6" style="height:50%;">
<div class="widget widget-shadow">
<div class="widget-content widget-radius padding-30 bg-blue-600 white">
<div class="counter counter-lg counter-inverse text-center">
<div class="counter-label margin-bottom-20"> <i class="fa fa-bullhorn fa-3x"></i>
<div>OUR TOTAL CLIENTS</div>
<?php 
$meterPercentage = ($goalMeterValue->gm_val/$goalMeterValue->gm_max) * 100;
$meterVal = $goalMeterValue->gm_val.' / '.$goalMeterValue->gm_max;
?>
</div>
<div class="counter-number-group margin-bottom-15"><span class="counter-number"><?php echo $meterVal;?></span> <span class="font-size-20 white-200">Clients</span></div>
<div id="goalMeter" class="progress progress-xs margin-bottom-10 bg-blue-800">
<div role="progressbar" style="width: <?php echo $meterPercentage;?>%; border-radius: 0;" class="progress-bar progress-bar-info bg-white"></div>
</div>
</div>
</div>
</div>
</div-->

<!-- End Panel Overall clients -->

<div class="col-xlg-12 col-md-6" style="height:550px">
<div class="widget widget-shadow">
<div class="widget-content widget-radius padding-30 white" style="background:#C83737">
<div class="counter counter-lg counter-inverse text-center margin-bottom-30">
<div class="counter-label margin-bottom-20"> <i class="fa fa-comment fa-3x"></i>
<div class="font-size-20 white-700">FEEDBACK</div>
<div class="white-200">Let us know of your experience in this location.</div>
</div>
<div class="counter-label">
<div class="counter counter-sm text-center">
<!--button class="btn btn-primary" data-target="#examplePositionCenter" data-toggle="modal" type="button">GO</button-->
<button class="btn btn-primary" data-target="#feedbackmodal" data-toggle="modal" type="button">Give feedback</button>
</div>
</div>
</div>
<hr>
<div class="counter counter-lg counter-inverse text-center">
<div class="counter-label margin-bottom-20"> <i class="fa fa-info-circle fa-3x"></i>
<div class="font-size-20 white-700">NEED MORE TIPS?</div>
<div class="white-200">Click here for more guidelines to help you with your client interactions.</div>
</div>
<div class="counter-label">
<div class="counter counter-sm text-center">
<button class="btn btn-primary" data-target="#examplePositionCenter" data-toggle="modal" type="button">GO</button>
<!--button class="btn btn-primary" data-target="#feedbackmodal" data-toggle="modal" type="button">Give feedback on this location</button-->
</div>
</div>
</div>

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade modal-success" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
<div class="modal-dialog modal-center">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title">CLIENT INTERACTION GUIDELINES</h4>
</div>
<div class="modal-body">
<h3>If you call a client to remind them of their visit and they ask to cancel:</h3>
<blockquote>“Is there anything we can do to help you keep your appointment today? The reason I ask is we have a long waiting list so it might take a while before we are able to get you an appointment again and I'd hate for you to miss out on your appointment. Even if you just have 30 minutes, I can still meet with you and shorten the appointment if that works for you.”</blockquote>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--button type="button" class="btn btn-primary">Save changes</button-->
</div>
</div>
</div>
</div>
<!-- End Modal --> 

<!-- Modal -->
<div class="modal fade modal-success" id="feedbackmodal" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
<div class="modal-dialog modal-center">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title" id="location_title">FEEDBACK ON THIS LOCATION : </h4>
</div>
<div class="modal-body">
<div class="col-md-12">
<div class="example-wrap">
<h4 class="example-title">Leave your feedback in the field below:</h4>
<textarea class="form-control" id="feedBackMsg" rows="3"></textarea>
</div>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary" onClick="sendFeedBack()">Send</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--button type="button" class="btn btn-primary">Save changes</button-->
</div>
</div>
</div>
</div>
<!-- End Modal --> 

<!-- End Panel Today's Sales --> 

</div>
</div>
<!-- end total clients --> 
</div>
</div>

<div class="page-content">
<div class="example example-well margin-top-0 padding-30" style="background: #FFFFFF; margin-bottom: 0;">
<div id="examplePanel" class="panel margin-bottom-0">
<div class="panel-heading">
<h2 class="panel-title" style="text-align:center; line-height: 30px"><i class="fa fa-chevron-down" style="padding-right:15px"></i>YOUR UPCOMING APPOINTMENTS<i class="fa fa-chevron-down" style="padding-left:15px"></i><br />
To view your upcoming appointments with a specific client, click on the <i class="fa fa-calendar" style="color: #46be8a"></i> icon.</h2>
</div>
</div>
</div>
<div class="panel" style="background: #fefefe">
<div class="panel-body"> 

<!-- start table --> 

<!-- <div id="viewdetailsappts" style="display:none;" > -->

<div class="modal fade" id="viewdetailsappts" aria-hidden="true" aria-labelledby="viewdetailsappts" role="dialog" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
<h4 class="modal-title">View Details</h4>
</div>
<div class="modal-body">
<div class="horizontalStack" >
<label for="name" >Name:</label>
<span class="name" name="firstname" VALUE="" id="viewdetailsname"> </span> </div>
<div class="horizontalStack" >
<label for="company_name" >Company Name:</label>
<span  class="company_name" name="company_name" id="viewdetailscompany"> </span> </div>
<div class="horizontalStack" >
<label for="location" >Location:</label>
<span class="location" name="location"  id="viewdetailslocation"> </span> </div>
<div class="horizontalStack" >
<label for="zipcode" >ZipCode:</label>
<span class="zipcode" name="zipcode"  id="viewdetailszipcode"> </span> </div>
<div class="horizontalStack" >
<label for="conference" >Conference Room1:</label>
<span class="conference" name="conference1"  id="viewdetailsconf1"> </span> </div>
<div class="horizontalStack" >
<label for="conference" >Conference Room2:</label>
<span class="conference" name="conference2"  id="viewdetailsconf2"> </span> </div>
<div class="horizontalStack" >
<label for="conference" >Conference Room3:</label>
<span class="conference" name="conference3"  id="viewdetailsconf3"> </span> </div>
<div class="horizontalStack" >
<label for="conference" >Conference Room4:</label>
<span class="conference" name="conference4"  id="viewdetailsconf4"> </span> </div>
<div class="horizontalStack" >
<label for="conference" >Conference Room5:</label>
<span class="conference" name="conference5"  id="viewdetailsconf5"> </span> </div>
<div class="horizontalStack" >
<label for="servicename" >Service Name: </label>
<span  class="servicename" name="servicename" id="viewdetailsservice"> </span> </div>
<div class="horizontalStack" >
<label for="reason" >Reason: </label>
<span  class="reason" name="reason" id="viewdetailsreason"> </span> </div>
<div class="horizontalStack" >
<label for="phonenumber" >Phone No: </label>
<span  class="phoneno" name="phoneno" id="viewdetailsphoneno"> </span> </div>
<div class="horizontalStack" >
<label for="date" >Date:</label>
<span class="date" name="date" id="viewdetailsdate"> </span> </div>
<div class="horizontalStack" >
<label for="time" >Time:</label>
<span class="time" name="time" id="viewdetailstime"></span> </div>
</div>
</div>
</div>
</div>

<!-- </div> -->

<div class="apptsdetails" style="display:block;"> </div>
<div class="Allapptsdetails" style="display:block;"> </div>

<!-- end table --> 

</div>
</div>
</div>
</div>

<!-- End Page --> 

<!-- start modal -->

<!-- end modal -->

</div>

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
<script src="../assets/assets/js/components/panel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;



      $(document).ready(function($) {

        Site.run();



        var $panel = $('#examplePanel');

        var api = $panel.data('panel-api');



        // Fullscreen

        $('#exampleTogglFullscreene').on('click', function() {

          api.toggleFullscreen();

        });



        $('#exampleEnterFullscreen').on('click', function() {

          api.enterFullscreen();

        });



        $('#exampleLeaveFullscreen').on('click', function() {

          api.leaveFullscreen();

        });



        // Content

        $('#exampleToggleContent').on('click', function() {

          api.toggleContent();

        });



        $('#exampleShowContent').on('click', function() {

          api.showContent();

        });



        $('#exampleHideContent').on('click', function() {

          api.hideContent();

        });



        // Open / Close

        $('#exampleToggle').on('click', function() {

          api.toggle();

        });



        $('#exampleOpen').on('click', function() {

          api.open();

        });



        $('#exampleClose').on('click', function() {

          api.close();

        });



        // Refresh

        var even = false;

        $('#exampleReplace').on('click', function() {

          api.load(function(done) {

            var $panel = $(this);

            var content;



            if (even) {

              content =

                'Lorem ipsum Adipisicing qui pariatur elit veniam reprehenderit dolore mollit amet deserunt et veniam cupidatat deserunt cupidatat dolore pariatur ullamco dolor adipisicing officia sed mollit consequat veniam culpa fugiat commodo exercitation quis veniam cupidatat eu aliquip elit dolore commodo deserunt fugiat esse in ut Excepteur non sint consequat Ut id fugiat magna ex adipisicing consequat cillum enim ad sint officia enim adipisicing aute aute ea pariatur quis dolor esse sed do veniam cupidatat magna proident in consectetur sit eiusmod sint incididunt qui sed qui deserunt consequat nulla ea esse enim minim amet eu anim labore Excepteur est ut sit commodo sit aute veniam in in quis amet ea dolore proident incididunt pariatur laboris mollit veniam est amet reprehenderit sint do id amet cillum reprehenderit irure minim culpa Duis in officia mollit veniam Excepteur officia incididunt Ut non incididunt amet ut mollit adipisicing laboris dolor Excepteur adipisicing ut sint Duis laborum culpa est Excepteur eiusmod deserunt labore nisi ad laboris minim fugiat ullamco anim enim esse eu tempor non adipisicing dolor dolor labore fugiat officia et occaecat consectetur dolor cupidatat consectetur est quis enim esse in occaecat cillum proident laborum ad reprehenderit Excepteur pariatur velit magna et reprehenderit incididunt dolore Duis occaecat ad Duis eiusmod in ullamco adipisicing est incididunt labore amet adipisicing ad Excepteur officia consectetur voluptate nulla occaecat qui sed cillum aliqua sit tempor ea officia est reprehenderit irure cupidatat.';

              even = false;

            } else {

              content =

                'Lorem ipsum Laborum aute qui Ut commodo enim sunt culpa tempor cupidatat non ut proident Duis sunt pariatur id adipisicing sint sunt dolore ullamco Excepteur aute veniam nostrud reprehenderit Excepteur cupidatat aute sunt pariatur labore aute nostrud veniam Ut Ut reprehenderit incididunt ex ut do est consectetur est sint dolore id non ad esse eu enim qui deserunt dolor laboris velit cupidatat Duis tempor sed et culpa in do ea minim velit adipisicing ullamco sit qui consectetur nisi qui nisi labore sunt incididunt anim consequat consectetur commodo aliqua officia et proident deserunt culpa nulla culpa exercitation Duis elit cillum in id laboris minim est aute in esse voluptate dolor eu velit Excepteur sint dolore incididunt exercitation enim eiusmod officia quis aliqua reprehenderit irure quis non amet ullamco laboris dolor in in consectetur cupidatat est ea do nisi ut nulla in Duis irure irure minim sed officia mollit irure reprehenderit proident ullamco sed pariatur dolore dolor sunt dolor aute magna in tempor nisi ullamco eiusmod ut non fugiat dolor in.';

              even = true;

            }



            $panel.find('.panel-body').html(content);

            done();

          });

        });



        $('#exampleLoad').on('click', function() {

          api.load();

        });



        $('#exampleDone').on('click', function() {

          api.done();

        });

      });



 



    })(document, window, jQuery);

  </script>
</html>