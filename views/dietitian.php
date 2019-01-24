<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">
<!-- JQuery UI stylesheet --> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>


<script type="text/javascript">
$( document ).ready(function() {
$("#editManageDietitian").dialog({bgiframe: true,autoOpen: false,height: 500,width: 500,modal: true,resizable: true});
$("#setUnavailability").dialog({bgiframe: true,autoOpen: false,height: 300,width: 600,modal: true,resizable: true});

$.ajax({
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
$(".addDietitian").click(function() {
	$('.addDietitianField').css('display','block');
	$('.manageDietitianDetails').css('display','none');
	
	
});

$("#singleDateRadio").click(function () {

$("#singledate").css('display','block');
$("#rangeDate").css('display','none');
$("#multyDate").css('display','none');


});
$("#multipleDateRadio").click(function () {

$("#singledate").css('display','none');
$("#rangeDate").css('display','none');
$("#multyDate").css('display','block');


});

$("#rangeDateRadio").click(function() {
//alert("sjsklfks---");
$("#singledate").css('display','none');
$("#multyDate").css('display','none');
$("#rangeDate").css('display','block');


});

$(".manageDietitian").click(function() {
	$('.addDietitianField').css('display','none');
	$('.manageDietitianDetails').css('display','block');

	$.ajax({
                url:'getDietitianMembers' ,
                success: displayDietitianList,
                failure: displayDietitianList,
                dataType: 'json',
                cache: true
								
            });	
	
});
var currdate = new Date();
var currentmonth = currdate.getMonth() +1;

//$('#unavailabledate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });
$('#unavailabledate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0),  beforeShowDay: $.datepicker.noWeekends });

$('#unavailablestartdate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), beforeShowDay: $.datepicker.noWeekends });
//$('#unavailablestartdate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });

$('#unavailableenddate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0),  beforeShowDay: $.datepicker.noWeekends });
//$('#unavailableenddate').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });

});


function fillCompanyNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	if (jsonObj.length != 0 ) {
	var innerhtml = '<select id="companyUnavailable" onchange="refreshCompnayBasedDetails(this.id)" ><option value="">Choose Company</option>';
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';
		}
		innerhtml = innerhtml+"</select>";
		//alert(innerhtml);
		$(".companyselection").html(innerhtml);
	
	}

}
}

function displayDietitianList(data) {
 if(typeof data != 'undefined'){
var jsonObj = data;
if (jsonObj.length != 0 ) {
	var innerhtml1 = '<div id="dietitianholder" class="dietitianList horizontalStack" style="display: block;"> <ul id="dietitians" class="groups" style="display: block;">';
	innerhtml1 = innerhtml1 + '<div class="groupColumnHeadings"><div class="columnHeading1 width200">Name</div><div class="columnHeading1 width200">Alias Name</div><div class="columnHeading1 width300">Email</div><div class="columnHeading1 width100">Mobile</div></div><div>&nbsp;</div>';
	
	for (i=0;i < jsonObj.length;i++)
	{
		innerhtml1= innerhtml1 + '<li id="dietitian_ '+jsonObj[i].dietitian_id +'" class="group"><div class="groupTitle">';
		innerhtml1 = innerhtml1 + '<div id="dietitianHeader'+ jsonObj[i].dietitian_id +'" class="groupName columnHeading1 width200">';
		innerhtml1= innerhtml1 +' <span id="name_'+jsonObj[i].dietitian_id+ '" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span>'+jsonObj[i].alias_name+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width300"><span>'+jsonObj[i].email+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width100"><span>'+jsonObj[i].phone+'</span></div>';
		//alert(jsonObj[i].company_name);
		//alert(jsonObj[i].company_name+ "---"+"undefined");
		//typeof myVar
		if (typeof jsonObj[i].name == "undefined") {
		
		//innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span >Not Assigned</span></div>';
		} else {
		//innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span >'+jsonObj[i].name+'</span></div>';
		}
		
	    innerhtml1= innerhtml1 + '<div class="editGroup1">';
		innerhtml1 =innerhtml1 + '<a onclick= "setUnavailableDates('+jsonObj[i].dietitian_id+')" id="'+jsonObj[i].dietitian_id+'" href="javascript:void(0)">Set Availability</a> &nbsp; &nbsp;';
		 innerhtml1 =innerhtml1 + '<a onclick= "editDietitian('+jsonObj[i].dietitian_id+','+jsonObj[i].service_id+')" id="'+jsonObj[i].dietitian_id+'" href="javascript:void(0)"><i class="glyphicon glyphicon-edit"></i>Edit</a> &nbsp; &nbsp;';
	    innerhtml1 =innerhtml1 + '<a onclick= "removeDietitian('+jsonObj[i].dietitian_id+','+jsonObj[i].service_id+')" id="'+jsonObj[i].dietitian_id+'" href="javascript:void(0)"><i class="glyphicon glyphicon-remove"></i>Delete</a></div></div></li>';
		
	}
	innerhtml1 =innerhtml1 + '</ui></div>';
	$(".manageDietitianDetails").html(innerhtml1);
   } else {
   
   $(".manageDietitianDetails").html("Dietitian details are not found");
   }



}
}





function saveDietitian() {
//if (($("#dietitianfirstname").val() != "") && ($("#dietitianlastname").val() != "") && ($("#dietitianrscname").val() != "") && ($("#dietitianemail").val() != "") &&($("#dietitianmobile_ph1").val() != "") &&($("#dietitianmobile_ph2").val() != "") && ($("#dietitianmobile_ph3").val() != "") && (($("#dietitianmobile-notification").val() != "") || ($("#dietitianemail-notification").val() != ""))) {
if (($("#dietitianfirstname").val() != "") && ($("#dietitianlastname").val() != "") && ($("#dietitianrscname").val() != "") && ($("#dietitianemail").val() != "") &&($("#dietitianmobile_ph1").val() != "") &&($("#dietitianmobile_ph2").val() != "") && ($("#dietitianmobile_ph3").val() != "")) {
 //var pattern = /^[0-9]$/;
 var phoneval = $("#dietitianmobile_ph1").val()+"-"+$("#dietitianmobile_ph2").val()+"-"+$("#dietitianmobile_ph3").val();
 var pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
 var emailfilter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/; 
if ((phoneval.match(pattern)) && (emailfilter.test($("#dietitianemail").val()))) {
$.ajax({
                url:'saveDietitianMember' ,
				data: "sfirstname="+$("#dietitianfirstname").val()+"&slastname="+$("#dietitianlastname").val()+"&salias="+$("#dietitianrscname").val()+"&semail="+$("#dietitianemail").val()+"&smobile="+$("#dietitianmobile_ph1").val()+$("#dietitianmobile_ph2").val()+$("#dietitianmobile_ph3").val()+"&smobilenotificationtextmsg="+escape($("#dietitianmobile-notification").is(':checked'))+"&showphonenumber="+$("#dietitianshowPhonenumberToCustomer_checkbox").is(':checked')+"&semailnotification="+escape($("#dietitianemail-notification").is(':checked')),
                type:'POST',
				success: function(msg) {
				    alert(msg);
					emptyform();
					//document.getElementById("adddietitianForm").reset();
					
				},
                failure: function(msg) {
				    alert(msg);
				}
               
								
            });
} else {
alert("Please make sure that phone number and email ids are valid");

}
} else {
	alert("Please make sure to fill Dietitian details");
}
}

function emptyform() {

$("#dietitianfirstname").val('');
$("#dietitianlastname").val('');
$("#dietitianrscname").val('');
$("#dietitianemail").val('');
$("#dietitianmobile_ph1").val('');
$("#dietitianmobile_ph2").val('');
$("#dietitianmobile_ph3").val('');
$("#dietitianshowPhonenumberToCustomer_checkbox").prop("checked",false);
$("#dietitianmobile-notification").prop("checked",false);
$("#dietitianemail-notification").prop("checked",false);

}
function displayDietitians() {
$.ajax({
                url:'getDietitianMembers' ,
                success: displayDietitianList,
                failure: displayDietitianList,
                dataType: 'json',
                cache: true
								
            });	



}

function removeDietitian(dietitian_id,locationid) {
if(confirm("Are you sure. Do you want to remove?")) {
$.ajax({
                url:'removeDietitianMember' ,
				data: "dietitian_id="+dietitian_id+"&locationid="+locationid,
                type:'POST',
				success: function(msg) {
				    alert(msg);
					displayDietitians();
				},
                failure: function(msg) {
				    alert(msg);
				}
               
								
            });
}
}

function refreshConferences(id) {
var conference = $("#"+id).val();
$.ajax({
			url:'getAllConferenceNames' ,
			type :'POST',
			data : "location_id="+conference,
			success: fillConferenceNames,
			failure: fillConferenceNames,
			dataType: 'json',
			cache: true
							
		});




}

function fillConferenceNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var innerhtml = '<select id="conferenceUnavailable" ><option value="">Choose Conference</option>';
	if (jsonObj.length != 0 ) {
	
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].conference_id+'">'+jsonObj[i].conf_room+'</option>';
		}
		innerhtml = innerhtml+"</select>";
	}
	$(".conferenceselection").html(innerhtml);
}
}
function fillLocationNames(data) {
if(typeof data != 'undefined'){
    var jsonObj = data;
	var innerhtml = '<select width = "257px" id="locationUnavailable" onchange="refreshConferences(this.id)"><option value="">Choose Location</option>';
	if (jsonObj.length != 0 ) {
	
		for (i=0;i < jsonObj.length;i++)
		{
		  innerhtml = innerhtml + '<option value="'+jsonObj[i].location_id+'">'+jsonObj[i].address2+','+jsonObj[i].city+'</option>';
		}
		innerhtml = innerhtml+"</select>";
		//alert(innerhtml);
	}
	$(".locationselection").html(innerhtml);
}

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

var editdietitianserviceid = "";
function editDietitian(dietitian_id,serviceid) {
editdietitianserviceid = serviceid;
$("#editManageDietitian").dialog('option', 'title', 'Registered Dietitian');
$("#editManageDietitian").css('display','block');
$("#editManageDietitian").dialog('open');
	$.ajax({
                url:'editDietitianMember' ,
				data: "dietitian_id="+dietitian_id+"&serviceid="+serviceid,
                success: saveEditDietitians,
                failure: saveEditDietitians,
                dataType: 'json',
                cache: true
               
								
            });

}

function saveEditDietitians(data) {

var jsonObj = data;
$("#editdietitian_id").val(jsonObj[0].dietitian_id);
$("#editdietitianfirstname").val(jsonObj[0].first_name);
$("#editdietitianlastname").val(jsonObj[0].last_name);
$("#editdietitianrscname").val(jsonObj[0].alias_name);
$("#editdietitianemail").val(jsonObj[0].email);
$("#editdietitianmobile_ph1").val(jsonObj[0].phone.substring(0,3));
$("#editdietitianmobile_ph2").val(jsonObj[0].phone.substring(3,6));
$("#editdietitianmobile_ph3").val(jsonObj[0].phone.substring(6,10));
if (jsonObj[0].phone_status == "Yes") {
$("#editdietitianshowPhonenumberToCustomer_checkbox").prop("checked",true);
} else {
$("#editdietitianshowPhonenumberToCustomer_checkbox").prop("checked",false);
}
if(jsonObj[0].notify_msg == "Yes") {
$("#editdietitianmobile-notification").prop("checked",true);
} else {
$("#editdietitianmobile-notification").prop("checked",false);
}
if(jsonObj[0].notify_email == "Yes") {
$("#editdietitianemail-notification").prop("checked",true);
} else {
$("#editdietitianemail-notification").prop("checked",false);
}

}

function saveEditDietitian() {
//if (($("#editdietitianfirstname").val() != "") && ($("#editdietitianlastname").val() != "") && ($("#editdietitianrscname").val() != "") && ($("#editdietitianemail").val() != "") &&($("#editdietitianmobile_ph1").val() != "") &&($("#editdietitianmobile_ph2").val() != "") && ($("#editdietitianmobile_ph3").val() != "") && (($("#editdietitianmobile-notification").val() != "") || ($("#editdietitianemail-notification").val() != ""))) {
if (($("#editdietitianfirstname").val() != "") && ($("#editdietitianlastname").val() != "") && ($("#editdietitianrscname").val() != "") && ($("#editdietitianemail").val() != "") &&($("#editdietitianmobile_ph1").val() != "") &&($("#editdietitianmobile_ph2").val() != "") && ($("#editdietitianmobile_ph3").val() != "")) {

$.ajax({
                url:'saveEditDietitianMember' ,
				data: "dietitian_id="+$("#editdietitian_id").val()+"&sfirstname="+$("#editdietitianfirstname").val()+"&slastname="+$("#editdietitianlastname").val()+"&salias="+$("#editdietitianrscname").val()+"&semail="+$("#editdietitianemail").val()+"&smobile="+$("#editdietitianmobile_ph1").val()+$("#editdietitianmobile_ph2").val()+$("#editdietitianmobile_ph3").val()+"&editsmobilenotificationtextmsg="+escape($("#editdietitianmobile-notification").is(':checked'))+"&showphonenumber="+$("#editdietitianshowPhonenumberToCustomer_checkbox").is(':checked')+"&semailnotification="+escape($("#editdietitianemail-notification").is(':checked')),
                type:'POST',
				success: function(msg) {
				    alert(msg);
					document.getElementById("editdietitianForm").reset();
					$("#editManageDietitian").dialog('close');
					displayDietitians();
					
				},
                failure: function(msg) {
				    alert(msg);
				}
               
								
            });

} else {
	alert("Please make sure to fill Dietitian details");
}





}

function setUnavailableDates(dietitian_id) {
$("#setUnavailability").dialog('option', 'title', 'Set Available Date');
$("#setUnavailability").css('display','block');
$("#setUnavailability").dialog('open');
$("#dietitianunavailabledate").val(dietitian_id);
emptySetAvailableForm();
}

function emptySetAvailableForm() {

$('#companyUnavailable option[value=""]').prop('selected', true);
$('#locationUnavailable option[value=""]').prop('selected', true);
$('#conferenceUnavailable option[value=""]').prop('selected', true);
$('#unavailabledate').val('');
$('#unavailablestartdate').val('');
$('#unavailableenddate').val('');


}

/*function saveUnavailableDates() {
var dataString ="";
if($("#singledate").css('display') == "block") {
//dataString = "unavailabledate="+$("#unavailabledate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&unavailabledateto="+ $("#unavailabledate").val();
dataString = "availabledatefrom="+$("#unavailabledate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&availabledateto="+ $("#unavailabledate").val();
}

if($("#rangeDate").css('display') == "block") {
//dataString = "unavailabledate="+$("#unavailablestartdate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&unavailabledateto="+ $("#unavailableenddate").val();
dataString = "availabledatefrom="+$("#unavailablestartdate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"availabledateto="+ $("#unavailableenddate").val();
}
$.ajax({
                url:'saveUnavailableDates' ,
				data: dataString,
                success: saveDates,
                failure: saveDates,
                dataType: 'text',
                cache: true
               
								
            });


}*/

function saveavailableDates() {
var dataString ="";
var checkForEmpty = false;

if($("#singledate").css('display') == "block") {
	//dataString = "unavailabledate="+$("#unavailabledate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&unavailabledateto="+ $("#unavailabledate").val();
	// dataString = "availabledatefrom="+$("#unavailabledate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&availabledateto="+ $("#unavailabledate").val()+"&company_id="+$("#companyUnavailable").val()+"&locationid="+$("#locationUnavailable").val()+"&conferenceid="+$("#conferenceUnavailable").val()+"&timeFrom="+timeFrom+"&timeTo="+timeTo;
	dataString = "availabledatefrom="+$("#unavailabledate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&availabledateto="+ $("#unavailabledate").val()+"&company_id="+$("#companyUnavailable").val()+"&locationid="+$("#locationUnavailable").val()+"&conferenceid="+$("#conferenceUnavailable").val();

	if($("#unavailabledate").val() != "") {
	checkForEmpty = true;
	}

	}

	if($("#rangeDate").css('display') == "block") {
	//dataString = "unavailabledate="+$("#unavailablestartdate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&unavailabledateto="+ $("#unavailableenddate").val();
	dataString = "availabledatefrom="+$("#unavailablestartdate").val()+"&dietitian_id="+$("#dietitianunavailabledate").val()+"&availabledateto="+ $("#unavailableenddate").val()+"&company_id="+$("#companyUnavailable").val()+"&locationid="+$("#locationUnavailable").val()+"&conferenceid="+$("#conferenceUnavailable").val();
	if(($("#unavailablestartdate").val() != "") && ($("#unavailableenddate").val() != "")) {
	checkForEmpty = true;
	}
	}


	if(($("#companyUnavailable").val() != "") && ($("#locationUnavailable").val() != "") && ($("#conferenceUnavailable").val() != "") && (checkForEmpty != false)) {
	$.ajax({
	                url:'saveavailableDates' ,
					data: dataString,
	                success: saveDates,
	                failure: saveDates,
	                dataType: 'text',
	                cache: true
	               
									
	            });
				
	} else {
	alert("Please fill all details");
	}

}


function saveDates(data) {
alert(data);
if (data == "available date  is stored") {
emptySetAvailableForm();
$("#setUnavailability").dialog('close');
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
        	 	<h2>Dietitian</h2>
                <ol class="breadcrumb">
				<li><a class = "addDietitian" href="javascript:void(0)">Add</a></li>
                  <li><a class = "manageDietitian" href="javascript:void(0)">Manage</a></li>
                  
              </ol>
		<br>
		
		<div id="setUnavailability" style="display:none">
		<div style="margin-left:160px" class="companyselection horizontalStack"  ></div>
		<div style="margin-left:160px" class="locationselection horizontalStack" ></div>
		<div style="margin-left:160px" class="conferenceselection horizontalStack" ><select id="conferenceUnavailable" ><option value="">Choose Conference</option></select></div>
		<input id="singleDateRadio" type="radio" name="available" checked value="single" >Single Date Select</input><br>
	   <input id="rangeDateRadio" type="radio" name="available" value="range" >Range Date Select </input><br>
		<div id="singledate" style="display:block">
			 <div class="horizontalStack" >
			    <label for="Unavailable Dates" >Available Date<span class="astrick">*</span></label>
				<input type="text" class="unavailabledate" name="unavailabledate" value="" id="unavailabledate"/> 
				<input type="hidden" value="" id="dietitianunavailabledate" />
			</div>
		      
		</div>
		
		
		<div id="rangeDate" style="display:none">
		    <div class="horizontalStack" >
			    <label for="Unavailable Dates" >Start Date<span class="astrick">*</span></label>
				<input type="text" class="unavailablestartdate" name="unavailablestartdate" value="" id="unavailablestartdate"/> 
				<input type="hidden" value="" id="dietitianunavailablestartdate" /> 
			</div>
			<div class = "horizontalStack">
			    <label for="Unavailable Dates" >End Date<span class="astrick">*</span></label>
				<input type="text" class="unavailableenddate" name="unavailableenddate" value="" id="unavailableenddate"/> 
				<input type="hidden" value="" id="dietitianunavailableenddate" />
			</div>
		 </div>

		  <!--
		<input id="multipleDateRadio" type="radio" name="available" value="multiple" >Multiple Date Select </input> <br>
		<div id="multyDate" style="display:none">
		    <div class="horizontalStack" >
			    <label for="Unavailable Dates" >Unavailable Date<span class="astrick">*</span></label>
				<input type="text" class="multiunavailabledate" name="multiunavailabledate" value="" id="multiunavailabledate"/> 
				<h6><a href="javascript:void(0)" onclick= "addOneMoreDate()" >Add another date</a></h6> 
				<input type="hidden" value="" id="dietitianunavailabledate" />
			</div>
		 </div>
		-->
		
		 
		  <input type="button" onclick = "saveavailableDates()" class="horizontalStack savechanges"  value="Submit" />
		</div>
		
		<div id = "editManageDietitian" style="display:none">
	    <form name="editdietitianForm" class="form-horizontal" id="editdietitianForm">

<!--<div class="viewservices" style="display:none"> -->
<!--<div class="horizontalStack" >
			<label for="stffirstname" class="col-sm-2 control-label">First Name<span>*</span></label>
			<div class="col-sm-3" >
			<input type="text" class="stffirstname form-control" name="stffirstname" value="" id="stffirstname" maxlength="32"/>
			</div>
</div> -->


    <div class="horizontalStack" >
    <label for="firstname" >First Name<span class="astrick">*</span></label>
	<input type="text" class="firstname" name="firstname" value="" id="editdietitianfirstname"/>
	<input type="hidden" id="editdietitian_id" value="">
    </div>

	 <div class="horizontalStack" >
	 <label for="lastname" >Last Name<span class="astrick">*</span></label>
	 <input type="text" class="lastname" name="lastname" value="" id="editdietitianlastname"/>
	 </div>

	 <div class="horizontalStack" >
		<label for="rscname" >Alias<span class="astrick">*</span></label>
		<input type="text" class="rscname" name="rscname" value="" id="editdietitianrscname"/>
	 </div>
	 


<div class="horizontalStack" >
   <label for="email" >Email<span class="astrick">*</span></label>
   <input type="email" class="email" name="email" id="editdietitianemail" value=""/>
</div>
  
<div class="horizontalStack" >
    <label for="Cell Phone:" >Cell Phone<span class="astrick">*</span></label>
          <div class="phonenumber">
          <input type="number" id="editdietitianmobile_ph1" value="" pattern="[0-9]{3}"maxlength="3" overflow="mobile_ph2" class="ph1"/>
		  <input type="number" id="editdietitianmobile_ph2" value="" pattern="[0-9]{3}"maxlength="3" overflow="mobile_ph3" class="ph2"/>
		  <input type="number" id="editdietitianmobile_ph3" value="" pattern="[0-9]{4}" maxlength="4" class="ph3" />
          <input type="hidden" id="editdietitianmobile_hidden" name="mobile" value="" />
          </div> 
</div>		  

 <div class="horizontalStack checkbox" >
  <input type="checkbox" id="editdietitianshowPhonenumberToCustomer_checkbox" name="showPhonenumberToCustomer" value="true"/>
  <input type="hidden" id="editshowPhonenumberToCustomer_hidden" name="showPhonenumberToCustomer" value="false" />
  <label for="showPhonenumberToCustomer" class="">Display your phone number to customers scheduling appointments online</label>
  </div>
 
 
<div class="horizontalStack "  style="display:none">
    <label for="Notification:" >Notifications<span class="astrick">*</span></label>
		<div class="horizontalStack checkbox" style="margin-left:-17px;">
        <input type="checkbox" name="mobile-notification-checkbox-ignore" id="editdietitianmobile-notification" value="true"/>
        <label for="mobile-notification-checkbox-ignore">Text/SMS</label>
		</br>
        <input type="checkbox" name="email-notification-checkbox-ignore" id="editdietitianemail-notification"/>
		<label for="email-notification-checkbox-ignore">Email</label>
        </div>
		

</div>	
			


 
 
 

 
 

 
<input type="button" onclick = "saveEditDietitian()" class="horizontalStack savechanges" id="dietitiansavechanges" value="Submit" />

			
</div> 
		
		
		<div class= "manageDietitianDetails displayCategories" style="display:none">

		</div>
		<div class ="addDietitianField" style="display:none">
		
	<form name="adddietitianForm" class="form-horizontal" id="adddietitianForm">

    <div class="horizontalStack" >
    <label for="firstname" >First Name<span class="astrick">*</span></label>
	<input type="text" class="firstname" name="firstname" value="" id="dietitianfirstname"/>
    </div>

	 <div class="horizontalStack" >
	 <label for="lastname" >Last Name<span class="astrick">*</span></label>
	 <input type="text" class="lastname" name="lastname" value="" id="dietitianlastname"/>
	 </div>

	 <div class="horizontalStack" >
		<label for="rscname" >Alias<span class="astrick">*</span></label>
		<input type="text" class="rscname" name="rscname" value="" id="dietitianrscname"/>
	 </div>
	 


<div class="horizontalStack" >
   <label for="email" >Email<span class="astrick">*</span></label>
   <input type="email" class="email" name="email" id="dietitianemail" value=""/>
</div>
  
<div class="horizontalStack" >
    <label for="Cell Phone:" >Cell Phone<span class="astrick">*</span></label>
          <div class="phonenumber">
          <input type="number" id="dietitianmobile_ph1" value="" pattern="[0-9]{3}" maxlength="3" overflow="mobile_ph2" class="ph1"/>
		  <input type="number" id="dietitianmobile_ph2" value="" pattern="[0-9]{3}" maxlength="3" overflow="mobile_ph3" class="ph2"/>
		  <input type="number" id="dietitianmobile_ph3" value="" pattern="[0-9]{4}" maxlength="4" class="ph3" />
          <input type="hidden" id="dietitianmobile_hidden" name="mobile" value="" />
          </div> 
</div>		  

 <div class="horizontalStack checkbox" >
  <input type="checkbox" id="dietitianshowPhonenumberToCustomer_checkbox" name="showPhonenumberToCustomer" value="true"/>
  <input type="hidden" id="showPhonenumberToCustomer_hidden" name="showPhonenumberToCustomer" value="false" />
 <label for="showPhonenumberToCustomer" class="">Display your phone number to customers scheduling appointments online</label> 
  </div> 
 
<div class="horizontalStack " style="display:none" >
        <label for="Notification:" >Notifications<span class="astrick">*</span></label> 
		<div class="horizontalStack checkbox" style="margin-left:-17px;">
        <input type="checkbox" name="mobile-notification-checkbox-ignore" id="dietitianmobile-notification" value="true"/>
        <label for="mobile-notification-checkbox-ignore">Text/SMS</label></br>
        <input type="checkbox" name="email-notification-checkbox-ignore" id="dietitianemail-notification"/>
		<label for="email-notification-checkbox-ignore">Email</label>
        </div>
		

</div>	
			

 


 
 

<input type="button" onclick = "saveDietitian()" class="horizontalStack savechanges" id="dietitiansavechanges" value="Add" />
 </form>

			
</div>
			
			
			
</div>
				
</div>



	


	
		   
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
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
   	<script>
 

</body>
</html>