<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">




<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

	<script>
$( document ).ready(function() {
$("#listDietitian").dialog({bgiframe: true,autoOpen: false,height: 500,width: 600,modal: true,resizable: true});
   // $( "#datepicker" ).datepicker();
	//$('#datepicker').datepicker({beforeShowDay: $.datepicker.noWeekends });
	$('#fromDate').datepicker({dateFormat: 'yy-mm-dd', beforeShowDay: $.datepicker.noWeekends });
	$('#toDate').datepicker({dateFormat: 'yy-mm-dd', beforeShowDay: $.datepicker.noWeekends });
	$("#singleDate").datepicker({dateFormat: 'yy-mm-dd', beforeShowDay: $.datepicker.noWeekends });
	$.ajax({
                url:'getListOfAllCurrentAppointments' ,
				type :'POST',
                success: displayAllAppointments,
                failure: displayAllAppointments,
                dataType: 'json',
                cache: true
								
            });
			
	/*$.ajax({
                url:'getAllCompanyNames' ,
				type :'POST',
                success: fillCompanyNames,
                failure: fillCompanyNames,
                dataType: 'json',
                cache: true
								
            });
		$.ajax({
			url:'getAllLocationNames' ,
			type :'POST',
			success: fillLocationNames,
			failure: fillLocationNames,
			dataType: 'json',
			cache: true
							
		});
		$.ajax({
			url:'getAllServiceNames' ,
			type :'POST',
			success: fillServiceNames,
			failure: fillServiceNames,
			dataType: 'json',
			cache: true
							
		});
		$.ajax({
			url:'getAllDietitianNames' ,
			type :'POST',
			success: fillDietitianNames,
			failure: fillDietitianNames,
			dataType: 'json',
			cache: true
							
		});*/
		
		/*$.ajax({
			url:'getAllCompaniesLocationsServicesandDietitians' ,
			type :'POST',
			success: getAllCompaniesLocationsServicesandDietitians,
			failure: getAllCompaniesLocationsServicesandDietitians,
			dataType: 'json',
			cache: true
							
		}); */
		
		
		
	 
	 
	 
$("#calendarCurrentDate").click(function () {

$("#calendarRange").css('display','none');
$("#calendarSingleDate").css('display','block');
});


});

function getAllCompaniesLocationsServicesandDietitians(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var companyhtml = '<option value="">Choose Corporate Company</option>';
	var locationhtml = '<option value="">Choose Location</option>';
	var servicehtml ='<option value="">Choose Service</option>';
	var dietitianhtml = '<option value="">Choose Registered Dietitian</option>';
	if (jsonObj.length != 0 ) {
	
	for (i=0;i < jsonObj.length;i++)
	{
	  if (jsonObj[i].table_check == "company") {
	  companyhtml = companyhtml +'<option value="'+jsonObj[i].id+'">'+jsonObj[i].name+'</option>';
	  }
	  if (jsonObj[i].table_check == "dietitian") {
	   dietitianhtml = dietitianhtml + '<option value="'+jsonObj[i].id+'">'+jsonObj[i].name+" "+jsonObj[i].secondname+'</option>';
	  }
	  if (jsonObj[i].table_check == "service") {
	  servicehtml = servicehtml+ '<option value="'+jsonObj[i].id+'">'+jsonObj[i].name+'</option>';
	  }
	  if (jsonObj[i].table_check == "location") {
	  locationhtml = locationhtml+ '<option value="'+jsonObj[i].id+'">'+jsonObj[i].name+'</option>';
	  }
	
	}
	
	}
	$(".companyselection").html(companyhtml);
	$(".locationselection").html(locationhtml);
	$(".serviceselection").html(servicehtml);
	$(".dietitianselection").html(dietitianhtml);
	
	
	}

}

function onclick(event) {
return changeSort(this,namesort)
}

var changeConfirmation = "";
var changeDietitianid = "";
function changeDietitian(confirmation,dietitianid) {
changeConfirmation = confirmation;
changeDietitianid = dietitianid;
 $.ajax({
		url:'displayAllDietitians' ,
		//data: "service_id="+serviceid,
		success: displayAllDietitianMembers,
		failure: displayAllDietitianMembers,
		dataType: 'json',
		cache: true
						
	});	
}

function submitDietitian() {

var dietitianchange = "";
dietitianchange = $("input:radio[name=dietitianradio]:checked").val();

$.ajax({
		url:'submitChangeDietitian' ,
		data: "dietitian_id="+dietitianchange+"&confirmation_number="+changeConfirmation,
		success: function (msg) {
			alert(msg);
			appointmentsList();
			$("#listDietitian").dialog('close');
		 },

		failure: function (msg) {alert(msg)},
		dataType: 'text',
		cache: true
						
	});	



}

function appointmentsList() {
$.ajax({
                url:'getListOfAllCurrentAppointments' ,
				type :'POST',
                success: displayAllAppointments,
                failure: displayAllAppointments,
                dataType: 'json',
                cache: true
								
            });

}


function displayAllDietitianMembers(data) {
if(typeof data != 'undefined'){
	var jsonObj = data;
	$("#listDietitian").css('display','block');
$("#listDietitian").dialog('option', 'title', 'Change Dietitian');
$("#listDietitian").dialog('open');


var innerhtml = '<form id="addNewService" class="form-horizontal " name="addNewService"> ';
		
	if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0) {
        for (i=0;i < jsonObj.length;i++)
		{
		 
		 innerhtml = innerhtml + '<div ><table><td class="width100">&nbsp;</td><td class="width200"><label  for="cmpconfr4" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</label></td><td class="width50"><input class="changedietitianname" type="radio" name="dietitianradio"  id = "dietitiancheckbox_'+jsonObj[i].dietitian_id+'"  value="'+jsonObj[i].dietitian_id+'" /><br></td></table></div><br>';  
		}
		innerhtml = innerhtml + "<input type=\"button\" value=\"Add Selected\" onclick=\"submitDietitian()\"></form>";//&nbsp;&nbsp;&nbsp;<input type=\"button\" value=\"Select All\" onclick=\"selectAllDietitians()\">&nbsp;&nbsp;&nbsp;<input type=\"button\" value=\"DeselectAll\" onclick=\"deSelectAllDietitians()\"></form>";
		//alert(selectionserviceid);
		//alert(innerhtml);
		//innerhtml = innerhtml+ '<';
		$(".listalldietitians").html(innerhtml);  
		} else {
		$(".listalldietitians").html('Dietitians are not available to add to the service');  
		
		}
		$("#dietitiancheckbox_"+changeDietitianid).attr("checked",true);

	}
	
	}
	}

function displayAllAppointments(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	if (jsonObj.length != 0 ) {
	//var innerhtml1 = '<div id="companyholder" class="servicesList horizontalStack" style="display: block;"> <ul id="servicecategories" class="groups" style="display: block;">';
	//innerhtml1 = innerhtml1 + '<div class="groupColumnHeadings"><div class="columnHeading1 width100">Service Name</div><div class="columnHeading1 width200">Description</div><div class="columnHeading1 width100">Duration</div><div class="columnHeading1 width200">Corporate Client</div><div class="columnHeading1 width200">Location</div></div><div>&nbsp;</div>';
	
	var innerhtml1 =  '<br><br><table border=0 width="100%"><tr class="borderbox" height="50"><th>Appointment Date</th><th>Dietitian</th><th>Customer</th><th>Service</th><th>Booking Date</th><th>Confirmation</th><th>Booked By</th></tr>';
	for (i=0;i < jsonObj.length;i++)
	{
	    var bookedby = jsonObj[i].booked_by;
		//alert(bookedby);
		if ( bookedby === null ) {
			bookedby = "";
		}
		//innerhtml1 = innerhtml1 +'<tr class="borderinbox" height="50" ><td>'+jsonObj[i].appointment_date+'</td><td>'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</td><td><a href="javascript:void(0)" >'+jsonObj[i].firstname+' '+jsonObj[i].lastname+'</a></td><td>'+jsonObj[i].name+'</td><td>'+jsonObj[i].appointment_date+'</td><td>'+jsonObj[i].confirmation_number+'</td><td>'+bookedby+'</td></tr>';
	  		innerhtml1 = innerhtml1 +'<tr class="borderinbox" height="50" ><td>'+jsonObj[i].appointment_date+'</td><td>'+jsonObj[i].first_name+' '+jsonObj[i].last_name+' <a href="javascript:void(0)" onclick="changeDietitian('+jsonObj[i].confirmation_number+","+jsonObj[i].dietitian_id+')"><i class="glyphicon glyphicon-edit"></i></a></td><td>'+jsonObj[i].firstname+' '+jsonObj[i].lastname+'</td><td>'+jsonObj[i].name+'</td><td>'+jsonObj[i].booked_date+'</td><td>'+jsonObj[i].confirmation_code+jsonObj[i].confirmation_number+'</td><td>'+bookedby+'</td></tr>';


	}
	
	innerhtml1 =innerhtml1 + '</table>';
	$("#listOfAppointments").html(innerhtml1);
	} else {
	$("#listOfAppointments").html("No Appointments are found");
	}
} else {

	$("#listOfAppointments").html("No Appointments are found");

}




}

function fillCompanyNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	if (jsonObj.length != 0 ) {
	var innerhtml = '<option value="">Choose Corporate Company</option>';
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';
		}
		//alert(innerhtml);
		$(".companyselection").html(innerhtml);
	
	}

}
}

function fillLocationNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var innerhtml = '<option value="">Choose Location</option>';
	if (jsonObj.length != 0 ) {
	
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].location_id+'">'+jsonObj[i].city+'</option>';
		}
		//alert(innerhtml);
	}
	$(".locationselection").html(innerhtml);
}

}
function fillServiceNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var innerhtml = '<option value="">Choose Service</option>';
	if (jsonObj.length != 0 ) {
	
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].service_id+'">'+jsonObj[i].name+'</option>';
		}
		//alert(innerhtml);
		
	
	}
$(".serviceselection").html(innerhtml);
}

}
function fillDietitianNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var innerhtml = '<option value="">Choose Registered Dietitian</option>';
	if (jsonObj.length != 0 ) {
	
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].dietitian_id+'">'+jsonObj[i].first_name+" "+jsonObj[i].last_name+'</option>';
		}
		//alert(innerhtml);
		
	
	}
$(".dietitianselection").html(innerhtml);
}

}

function rangedate() {

$("#calendarRange").css('display','block');
$("#calendarSingleDate").css('display','none');

}

function refreshCompnayBasedDetails(id) {

var company_id = $("#"+id).val();
$.ajax({
			url:'getAllLocationNames' ,
			type :'POST',
			data : "company_id="+company_id,
			success: fillLocationNames,
			failure: fillLocationNames,
			dataType: 'json',
			cache: true
							
		});

}

function refreshServices(id) {
var locationid = $("#"+id).val();

$.ajax({
			url:'getAllServiceNames' ,
			type :'POST',
			data : "locationid="+locationid,
			success: fillServiceNames,
			failure: fillServiceNames,
			dataType: 'json',
			cache: true
							
		});
}

function refreshDietitians(id) {

var serviceid = $("#"+id).val();

$.ajax({
			url:'getAllDietitianNames' ,
			type :'POST',
			data : "serviceid="+serviceid,
			success: fillDietitianNames,
			failure: fillDietitianNames,
			dataType: 'json',
			cache: true
							
		});




}

function getAllCompaniesData() {

var singledate = $("#singleDate").val();
var from =$("#fromDate").val();
var to =$("#toDate").val();
var company_id = $("#companyselection").val();
var locationid =$("#locationselection").val();
var serviceid =$("#serviceselection").val();
var dietitian_id =$("#dietitianselection").val();

if((singledate != "") || ((from !="") && (to !="") ) || (company_id !="") || (locationid !="") || (serviceid !="") || (dietitian_id !="")) {

$.ajax({
                url:'getListOfAppointmentsBasedOnCriteria' ,
				type :'POST',
				data : "singledate="+singledate+"&fromdate="+from+"&todate="+to+"&company_id="+company_id+"&locationid="+locationid+"&serviceid="+serviceid+"&dietitian_id="+dietitian_id,
                success: displayAllAppointments,
                failure: displayAllAppointments,
                dataType: 'json',
                cache: true
								
            });


} else {
	alert("Please select at least on criteria to display appointments");
}
}

  </script>



<header>
    		<div class="container">
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills">
                    	<li><a href="company">Company</a></li>
                        <li><a href="service">Service</a></li>
                        <li><a href="dietitian">Dietitian</a></li>
						<li><a href="reviews">Reviews</a></li>
						<li><a href="appointments">Appointments</a></li>
						<li><a href="calendar">Calendar</a></li>						
					    <li><a href="inbox">Inbox</a></li>
						<li><a href="customers">Customers</a></li>

					   <!-- <li><a href="calendar1">Calendar1</a></li> -->


                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $userid ?>  <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<!--<li><a href="editprofile">Edit Profile</a></li>-->
                               <!-- <li><a href="changepassword">Change Password</a></li>
                                <li class="divider"></li> -->
                                <li><a href="signout">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
	<!-- END HEADRT TAG -->
    
    <!-- START MAIN CONTENT -->
    	<div class="container content">
        	 	<h2>Inbox</h2>
		<br>
      <!--  <input type="radio" name="date" id="calendarCurrentDate" value="true" checked/><strong>&nbsp;&nbsp;Date</strong>

		<input id="rangeDateRadio" type="radio" name="date" value="range" onclick="rangedate()" ><strong>&nbsp;&nbsp;Range</strong><br>
			<br>
	<div id="calendarSingleDate" style="margin-left:98px;">
        <tr><strong>Select Date&nbsp;</strong><td><input type ="text" value="" id="singleDate" name="edittr_dailyFromdate" ></td></tr>
		</div>
		<div id="calendarRange" style="display:none">


		 		
						<tr>
                 &nbsp;<td colspan="2" align="left" valign="middle"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From</strong></td>
						<td><input type ="text" value="" id="fromDate" name="edittr_dailyFromdate" > 
					&nbsp;&nbsp;&nbsp;
					<td colspan="2" align="left" valign="middle"><strong>To&nbsp;</strong></td>
					<td><input type="text" value="" name="toDate" id="toDate"></td>
					 </tr>
     </div>
		
<br>
				<div class="horizontalStack" >
		  <label for="cmpname"> Corporate Company</label>
		  <select name="company" class="companyselection" id="companyselection" onchange="refreshCompnayBasedDetails(this.id)">
		  </select>
		  </div>
		  
		  <div class="horizontalStack" >
		  <label for="cmpname">Location</label>
		  <select name="location" id="locationselection" class="locationselection" onchange="refreshServices(this.id)">
		  </select>
		  </div>
		  
		  <div class="horizontalStack">
		  <label for="cmpname">Service</label>
		  <select name="service" id="serviceselection" class="serviceselection" onchange="refreshDietitians(this.id)">
		  </select>
		  
		  </div>
		  
		   <div class="horizontalStack" >
		  <label for="cmpname">Registered Dietitian</label>
		  <select name="dietitian" id="dietitianselection" class="dietitianselection">
		  </select>
		  </div>
		<input id="submitcriteria" class="horizontalStack savechanges" type="button" value="Submit" onclick="getAllCompaniesData()"> -->
		  
<div id="listDietitian" style="display:none">

<div class = "listalldietitians" >



</div>

</div>
		  
		  <div id="listOfAppointments" style="display:block">
		  
		  
		  </div>
		  <br><br>
 </div>
    
    <!-- END MAIN CONTENT -->
    	
    
    <!-- START FOOTER TAG  --> 
    <footer>
		<div class="container">
        	<p>� 2013 Family Food, LLC. All Rights Reserved.</p>
        </div>    
    </footer>	
    <!-- END FOOTER TAG -->
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->

</body>
</html>