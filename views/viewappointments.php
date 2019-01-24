<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/details.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />
<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
$("#viewdetailsappts").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});


//$(".current").click(function() {
	$('.apptsdetails').css("display","block");
	$(".Allapptsdetails").css("display","none");
	var currentdate = getCurrentdate();
	getUserApptsOnLoad(currentdate);
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


function getUserApptsOnLoad(curdate) {
var dates=curdate;
$.ajax({
                url:'getUserAppts' ,
				type :'POST',
				data: "dietitian_id=<?php echo $conuser ?>"+"&date="+dates,
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
					  window.location.href="<?php echo base_url() ;?>login/searchdietitian";
					}
				},
                failure: function(msg){ },
                cache: true
								
            });

}

function displayAppts(data){
if(typeof data != 'undefined'){
var jsonObj= data;
if (jsonObj.length != 0 ) {
	var innerHtml = '<div class="print pull-right"><input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick="document.title = \'FamilyFoodLLC, Appointments\';window.print();"/></div><br><table class="table table-responsive table-striped table-condensed" summary="This Table About appointment confirm Details" style="border-collapse:collapse;"><thead>';
		innerHtml = innerHtml+'<tr><th>&nbsp;</th><th class="title-th" scope="col">ServiceName</th> <th class="title-th" scope="col" style="width:150px">Name</th> <th class="title-th" scope="col" style="width:90px">UserName</th><th class="title-th" scope="col">Reason</th><th class="title-th" scope="col">Phone Number</th><th class="title-th" scope="col">Date</th> <th class="title-th" scope="col">Time</th> <th scope="col" class="title-th"></th><th scope="col" class="title-th"></th><tbody>';
      
  	
	for (i=0;i < jsonObj.length;i++)
	{
	
	 var appointmenttime = jsonObj[i].appointment_time.split(" ");
			    var appointmenthourmin = appointmenttime[0].split(":");
			    var appointmentdate = calendarDayFormat(jsonObj[i].appointment_date);
				var currdate = new Date();
				var timezone = "";

				if(jsonObj[i].timezone != null) {
				  timezone = jsonObj[i].timezone;
				}				
	var clientName = jsonObj[i].firstname+' '+jsonObj[i].lastname;
	if( jsonObj[i].privacy_consent < 1 ){
		var clientName = '*'+jsonObj[i].firstname+' '+jsonObj[i].lastname;
	}
	var target = "table_target"+i;

	innerHtml=innerHtml+'<tr class="accordion-toggle" data-target="#'+target+'" data-toggle="collapse"><td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-arrow-down"></span></button></td><td scope="row">'+jsonObj[i].name+'</td><td scope="row">'+clientName+'</td><td scope="row"><a href="#">'+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].reason+'</td><td>'+jsonObj[i].phonenumber+'</td><td>'+jsonObj[i].appointment_date+'</td> <td>'+jsonObj[i].appointment_time+' '+jsonObj[i].timezone+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <i class="glyphicon glyphicon-list"></i> View Details</a></td><td><a href="javascript:void(0)" onclick="followupDetails(\''+jsonObj[i].confirmation_number+'\')" > <i class="glyphicon glyphicon-calendar"></i> Follow-Up</a></td></tr>';		
	innerHtml=innerHtml+returnHiddenTable( target, jsonObj[i].userid, jsonObj[i] );
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
	 innerHtml=innerHtml+'<tr><td scope="row">'+jsonObj[i].name+'</td><td scope="row"><a href="#">'+jsonObj[i].firstname+'</a></td><td>'+jsonObj[i].appointment_date+'</td> <td>'+jsonObj[i].appointment_time+'</td> <td><a href="javascript:void(0)" onclick="displayViewDetails(\''+jsonObj[i].confirmation_number+'\')"> <i class="glyphicon glyphicon-expand"></i> View Details</a></td><td><a href="#"> <i class="glyphicon glyphicon-thumbs-up"></i> Follow-Up</a></td></tr>';		
		
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
function displayViewDetails(id) {
var appointmentConfNumber =id;
$("#viewdetailsappts").dialog('option', 'title', 'View Details');
$("#viewdetailsappts").css('display','block');
$("#viewdetailsappts").dialog('open');
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
					  window.location.href="<?php echo base_url() ;?>login/searchdietitian";
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

function returnHiddenTable( target, userid, data ){
	var text_followup = ( data.da_followup != "" ) ? data.da_followup+" " : "";
	var text_whole_grains = ( data.da_whole_grains != "" ) ? data.da_whole_grains+" " : "";
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
		'<tr>'+

		'<!-- start followup -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<!--label>Follow-Up&nbsp;</label-->'+
		'<button style="background-color: #708090; color: #ffffff" class="btn btn-default dropdown-toggle '+target+'_followupBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+FUp+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_followup`,`Seen - F/U scheduled`)">Seen - F/U scheduled</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_followup`,`Seen - F/U not scheduled`)">Seen - F/U not scheduled</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_followup`,`No-show`)">No-show</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_followup`,`Cancelled`)">Cancelled</a></li>'+
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
		'<input type="text" value="'+data.da_weight+'" onfocus="setBMI(`'+target+'`)" class="form-control" id="'+target+'_weight" placeholder="Weight">'+
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
		'<input type="text" value="'+data.da_height+'" onfocus="setBMI(`'+target+'`)" class="form-control" id="'+target+'_height" placeholder="Height">'+
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
		'<input type="text" value="'+data.da_bmi+'" class="form-control" id="'+target+'_bmi" placeholder="BMI" disabled>'+
		'<div class="input-group-addon">BMI</div>'+
		'</div>'+
		'</div>'+
		'</td>'+
		'<!-- end BMI -->'+



		'</tr>'+

		'<tr>'+
		
		'<!-- start whole grains -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_whole_grainsBTN" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_whole_grains+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_whole_grains`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_whole_grains" value="'+data.da_whole_grains+'">'+
		'&nbsp;<label>Whole Grains / day</label>'+
		'</div>'+
		'</td>'+

		'<!-- end whole grains -->'+

		'<!-- start vegetables -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_vegetablesBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_vegetables+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_vegetables`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_vegetables" value="'+data.da_vegetables+'">'+
		'<label>&nbsp;Vegetables / day</label>'+
		'</div>'+
		'</td>'+
		'<!-- end vegetables -->'+

		'<!-- start fruit -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_fruitBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_fruit+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fruit`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_fruit" value="'+data.da_fruit+'">'+
		'&nbsp;<label>Fruit / day</label>'+
		'</div>'+
		'</td>'+
		'<!-- end fruit -->'+

		'<!-- start Low fat dairy -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_dairyBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_dairy+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_dairy`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_dairy" value="'+data.da_dairy+'">'+
		'&nbsp;<label>Low fat dairy / day</label>'+
		'</div>'+
		'</td>'+
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
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_fish`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_fish" value="'+data.da_fish+'">'+
		'&nbsp;<label>Fish / week</label>'+
		'</div>'+
		'</td>'+
		'<!-- end fish -->'+

		'<!-- start water -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_waterBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_water+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`7`)">7</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`8`)">8</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`9`)">9</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_water`,`10`)">10</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_water" value="'+data.da_water+'">'+
		'&nbsp;<label>Water-cups / day</label>'+
		'</div>'+
		'</td>'+
		'<!-- end water -->'+

		'<!-- start physical activity -->'+
		'<td>'+
		'<div class="dropdown">'+
		'<button class="btn btn-default dropdown-toggle '+target+'_physicalBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_physical+'<span class="caret"></span></button>'+
		'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`0`)">0</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`1`)">1</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`2`)">2</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`3`)">3</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`4`)">4</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`5`)">5</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`6`)">6</a></li>'+
		'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_physical`,`7`)">7</a></li>'+
		'</ul>'+
		'<input type="hidden" id="'+target+'_physical" value="'+data.da_physical+'">'+
		'&nbsp;<label>Physical Activity - days / week</label>'+
		'</div>'+
		'</td>'+
		'<!-- end physical activity -->'+
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
		'<td><textarea class="form-control" id="'+target+'_nutritionalGoal" rows="3">'+data.da_nutritionalGoal+'</textarea></td>'+
		'<td><textarea class="form-control" id="'+target+'_physicalGoal" rows="3">'+data.da_physicalGoal+'</textarea></td>'+
		'<td><textarea class="form-control" id="'+target+'_socialGoal" rows="3">'+data.da_socialGoal+'</textarea></td>'+
  '<td>'+
<!-- new handouts form -->
'<div class="checkbox">'+
'<label>'+
'<input type="checkbox" onclick="setValueToHandout(`'+target+'_handouts`,`Sports Nutrition Handout`)" '+SNHchecked+'>Sports Nutrition Handout</label>'+
'</div>'+
'<div class="checkbox">'+
'<label>'+
'<input type="checkbox" onclick="setValueToHandout(`'+target+'_handouts`,`Shop the Walls`)" '+STWchecked+'>Shop the Walls</label>'+
'</div>'+
'<div class="checkbox">'+
'<label>'+
'<input type="checkbox" onclick="setValueToHandout(`'+target+'_handouts`,`Menu Planner`)" '+MPchecked+'>Menu Planner</label>'+
'</div>'+
'<div class="checkbox">'+
'<label>'+
'<input type="checkbox" onclick="setValueToHandout(`'+target+'_handouts`,`Grocery List`)" '+GLchecked+'>Grocery List</label>'+
'</div>'+
'<div class="checkbox">'+
'<label>'+
'<input type="checkbox" onclick="setValueToHandout(`'+target+'_handouts`,`Family Food Plate`)" '+FFPchecked+'>Family Food Plate</label>'+
'</div>'+
'<input type="hidden" id="'+target+'_handouts" value="'+data.da_handouts+'">'+
<!-- end new handouts form -->
		//'<button class="btn btn-default dropdown-toggle '+target+'_handoutsBTN" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+text_handouts+'<span class="caret"></span></button>'+
		//'<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">'+
		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_handouts`,`Sports Nutrition Handout`)">Sports Nutrition Handout</a></li>'+
		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_handouts`,`Shop the Walls`)">Shop the Walls</a></li>'+
		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_handouts`,`Menu Planner`)">Menu Planner</a></li>'+
		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_handouts`,`Grocery List`)">Grocery List</a></li>'+
		//'<li><a href="javascript:void(0)" onclick="setValueToHiddenField(this,`'+target+'_handouts`,`Family Food Plate`)">Family Food Plate</a></li>'+
		//'</ul>'+
		//'<input type="hidden" id="'+target+'_handouts" value="'+data.da_handouts+'">'+
		//'</div>'+
		'</td>'+
		'<td></td>'+
		'<td></td>'+
		'<td><input type="button" class="btn btn-success" onclick="subAction(`'+userid+'`,`'+target+'`)" value="Save Changes"></td>'+
		'</tr>'+
		'</tbody>'+
		'</table>'+
		<!--'<input type="button" onclick="subAction(`'+userid+'`,`'+target+'`)" value="Save">'+-->
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
	$( "."+fieldID+"BTN").text( value );
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

function subAction( userid, target ){
	// alert( userid + "==" + target );
	// var weightInLbs = $( "#"+target+'_weight' ).val();
	// var heightInInch = $( "#"+target+'_height' ).val();
	// var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );
	// $( "#"+target+'_bmi' ).val(bmi);
	subDietitianInstructions(userid,$( "#"+target+'_followup' ).val(),$( "#"+target+'_weight' ).val(),$( "#"+target+'_height' ).val(),$( "#"+target+'_bmi' ).val(),$( "#"+target+'_whole_grains' ).val(),$( "#"+target+'_vegetables' ).val(),$( "#"+target+'_fruit' ).val(),$( "#"+target+'_dairy' ).val(),$( "#"+target+'_fish' ).val(),$( "#"+target+'_water' ).val(),$( "#"+target+'_physical' ).val(),$( "#"+target+'_nutritionalGoal' ).val(),$( "#"+target+'_physicalGoal' ).val(),$( "#"+target+'_socialGoal' ).val(),$( "#"+target+'_handouts' ).val() );
}

function subDietitianInstructions(userid,followup,weight,height,bmi,whole_grains,vegetables,fruit,dairy,fish,water,physical,nutrition,physicalGoal,socialGoal,handouts){
	var dataSet = "userid="+userid+"&followup="+followup+"&weight="+weight+"&height="+height+"&bmi="+bmi+"&whole_grains="+whole_grains+"&vegetables="+vegetables+"&fruit="+fruit+"&dairy="+dairy+"&fish="+fish+"&water="+water+"&nutrition="+nutrition+"&physical="+physical+"&physicalGoal="+physicalGoal+"&socialGoal="+socialGoal+"&handouts="+handouts;
	// alert( dataSet );
	$.ajax({
		url:'save_dietitian_advice',
		type :'POST',
		data : dataSet,
        success: function(data) { alert(data); },
        failure: function(data) { alert(data); },
        dataType: 'json',		
	});
}

</script>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<header>
<div class="container">
<h1 class="logo"><a href="#"><img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
<nav class="pull-right">
<ul class="nav nav-pills">
<!--<li><a href="set-availability.html">Set Availability</a></li>-->
<?php if($fdietitian != "") { ?>
<li><a href="searchdietitian">New Appointment</a></li>
<?php } ?>
<li><a href="viewappointments">View Appointments</a></li>
<li><a href="resourcecenter">Resource Center</a></li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $conuser ?> <span class="caret"></span> </a>
<ul class="dropdown-menu">
<li><a href="editprofile">Edit Profile</a></li>
<li><a href="changepassword">Change Password</a></li>
<li class="divider"></li>
<li><a href="signout">Sign Out</a></li>
</ul>
</li>
</ul>
</nav>
<!-- start banner
<div class="jumbotron">
<h1>Hello, world!</h1>
<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
</div>
end banner --> 
</div>
</header>
<!-- END HEADRT TAG --> 

<!-- START MAIN CONTENT -->
<div class="container content">
<p>&nbsp;</p>
<!-- start banner -->
<div class="jumbotron" style="background-image: url(../../../images/banner.jpg); background-size: cover; background-repeat: no-repeat;">
<h2>WE ARE:</h2>
<ul>
<li>nutrition-expert scientists staunchly committed to evidence-based information</li>
<li>interpreter connoisseurs translating science into practical application</li>
<li>inspirational motivators</li>
<li>steadfast empowerers jumping at the opportunity to counsel<br />
in client-friendly settings</li>
</ul>
<h2>We are Family Food RDs!</h2>
<!--p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p--> 
</div>
<!-- end banner -->

<h2>Appointments</h2>
<!--<ol class="breadcrumb">
<!--<li><a class = "current" href="javascript:void(0)">Current Appointments</a></li>--> 
<!--<li><a class = "all" href="javascript:void(0)">All Appointments</a></li>--> 

<!-- </ol>--> 
<br>
<div id = "viewdetailsappts" style="display:none;" >
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
<div class="apptsdetails" style="display:block;"> </div>
<div class="Allapptsdetails" style="display:block;"> </div>
</div>
</div>
<!-- END MAIN CONTENT --> 

<!-- START FOOTER TAG  -->
<footer>
<div class="container">
<p>&copy; 2013 Family Food, LLC. All Rights Reserved.</p>
</div>
</footer>
<!-- END FOOTER TAG --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!--script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script-->
</body>
</html>