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
<style>
.padding
{
padding-top:3px;
padding-bottom:3px;
padding-right:3px;
padding-left:3px;
background-color:#96C0E4;
}
table{border-collapse: separate;
    border-spacing: 0 10px; /* cellspacing */
    }
</style>
<script type="text/javascript">

var conf1dietitianscheck = [];
var conf1dietitiansuncheck = [];
var conf2dietitianscheck = [];
var conf2dietitiansuncheck = [];
var conf3dietitianscheck = [];
var conf3dietitiansuncheck = [];
var conf4dietitianscheck = [];
var conf4dietitiansuncheck = [];
var conf5dietitianscheck = [];
var conf5dietitiansuncheck = [];
var holidaysList = [];

var newHolidaysList = {};
var editHolidaysList = [];
var newTimeFrom = {};
var newTimeTo = {};

var date_FromTo_time = {};

	
var selectCurrentEditCategory = "";
var selectCurrentAddCategory = "";
var baseUrl = " <?php echo base_url() ?>";
$( document ).ready(function() {


var currdate = new Date();
var currentmonth = currdate.getMonth() +1;

//$('#holiDay').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });
$('#holiDay').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), beforeShowDay: $.datepicker.noWeekends });

//$('#editholiDay').datepicker({dateFormat: 'yy-mm-dd', minDate:(0), maxDate:new Date(currdate.getFullYear(),eval(currentmonth+6),eval(currdate.getDate())), beforeShowDay: $.datepicker.noWeekends });
$('#editholiDay').datepicker({dateFormat: 'yy-mm-dd', minDate:(0),beforeShowDay: $.datepicker.noWeekends });


$("#holiDay").change(function() {
	//var dates = $(this).val().split("/");
	// var innerHtml = $("#addListOfHolidays").html();
	// var dataString = ' <div id="'+$(this).val()+'"><label for="holiday Dates" >'+$(this).val()+'</label><img onclick = "removeHoliday(\''+$(this).val()+'\') " src="<?php echo base_url() ; ?>images/icon_close.png" /> </div>';
	// if(holidaysList.indexOf($(this).val()) == -1) {
	// innerHtml = innerHtml + dataString;
	// $("#addListOfHolidays").html(innerHtml);
	// holidaysList.push($(this).val());
	// $("#holiDay").val("");
	// } else {
	// $("#holiDay").val("");
	// }
	var innerTimeHtml = "";
	$.each( time, function( key,value){
		innerTimeHtml = innerTimeHtml + '<option value="'+value+'">'+value+'</option>';
	});

	newDateList = "";
	var date = $(this).val();
	var date2 = date.replace(/-/g,'');
	var rowID = $(this).val().replace(/-/g,'_');
	if( jQuery.isEmptyObject( newHolidaysList ) || !( rowID in newHolidaysList ) ){
		newDateList = newDateList + "<tr id='row_"+rowID+"'><th>"+date+"</th>"+
							"<td><select id='timeFrom_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							"<td><select id='timeTo_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							'<td><img onclick = "newRemoveHoliday(\''+date.replace(/-/g,'_')+'\')" src="<?php echo base_url() ; ?>images/icon_close.png" /></td></tr>';
		$("#newAddListOfHolidays").append(newDateList);
		$("#timeFrom_"+date2).val( '8:00' );
		$("#timeTo_"+date2).val( '5:00' );
		newHolidaysList[rowID] = '8:00_5:00';
	}else{
		alert( "already on list" );
	}
	
	$("#holiDay").val("");
});
	
	
$("#editholiDay").change(function() {
	//var dates = $(this).val().split("/");
	// var innerHtml = $("#editListOfHolidays").html();
	// var dataString = ' <div id="'+$(this).val()+'"><label for="holiday Dates" >'+$(this).val()+'</label><img onclick = "removeEditHoliday(\''+$(this).val()+'\') " src="<?php echo base_url() ; ?>images/icon_close.png" /> </div>';
	// if(editHolidaysList.indexOf($(this).val()) == -1) {
	// innerHtml = innerHtml + dataString;
	// $("#editListOfHolidays").html(innerHtml);
	// editHolidaysList.push($(this).val());
	// $("#editholiDay").val("");
	// } else {
	// $("#editholiDay").val("");
	// }
	var innerTimeHtml = "";
	$.each( time, function( key,value){
		innerTimeHtml = innerTimeHtml + '<option value="'+value+'">'+value+'</option>';
	});

	newDateList = "";
	var date = $(this).val();
	var date2 = date.replace(/-/g,'');
	var rowID = $(this).val().replace(/-/g,'_');
	if( jQuery.isEmptyObject( date_FromTo_time ) || !( rowID in date_FromTo_time ) ){
		newDateList = newDateList + "<tr id='row_"+rowID+"'><th>"+date+"</th>"+
							"<td><select id='timeFrom_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							"<td><select id='timeTo_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							'<td><img onclick = "newRemoveEditHoliday(\''+date.replace(/-/g,'_')+'\')" src="<?php echo base_url() ; ?>images/icon_close.png" /></td></tr>';

		$("#newEditListOfHolidays").append(newDateList);
		$("#timeFrom_"+date2).val( '8:00' );
		$("#timeTo_"+date2).val( '5:00' );
		date_FromTo_time[rowID] = '8:00_5:00';
	}else{
		alert( "already on list" );
	}
	$("#editholiDay").val("");
});

$("#companyAddLocationsfields").dialog({bgiframe: true,autoOpen: false,height: 500,width: 630,modal: true,resizable: true});
$("#companyEditLocationsfields").dialog({bgiframe: true,autoOpen: false,height: 500,width: 630,modal: true,resizable: true});
$("#listServices").dialog({bgiframe: true,autoOpen: false,height: 500,width: 600,modal: true,resizable: true});
$("#listDietitian").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});

$(".newCategoryCancel").click(function() {
	$('.addNewCategoryForm').css('display','block')
	$('.companyinput').val('');
});

$(".newCategory").click(function() {
	$('.addNewCategoryForm').css('display','block');
	$('.companyinput').val('');
	$(".displayCategories").css('display','none');
	$(".displaylocations").css('display','none');
});


	

$(".newCategorySubmit").click(function() {

	if($(".companyinput").val() != "") {
	 $("#createCategoryLoader").show();    
		 $.ajax({
                url: 'addNewCategory' ,
				data: "companyName="+escape($(".companyinput").val()),
				type :'POST',
                success: function(msg){
				  $('.addNewCategoryForm').css('display','none');
				  alert(msg);
				  $("#createCategoryLoader").hide();
				  $('.companyinput').val('');
				  
				 },
				failure: function(msg) {
				  $('.addNewCategoryForm').css('display','none');
				  alert("Corporate Company is not created");
				  $("#createCategoryLoader").hide();
				  $('.companyinput').val('');
				
				}
								
            });	
		  
	} else {
	alert("You must name your corporate company");
	$('.addNewCategoryForm').css('display','block')
	}
});


$(".viewCategory").click(function() {
   $("#loading").css('display','block');
	$('.addNewCategoryForm').css('display','none');
	$(".displaylocations").css('display','none');
	$('.companyinput').val('');
	$(this).addClass("visited");
	$(".newCategory").remove("visited");
	
	$.ajax({
                url:'displayCategories' ,
                success: displayCategoryList,
                failure: displayCategoryList,
                dataType: 'json',
                cache: true
								
            });	
	
	
});

$(".companyLocation").click(function() {
	$('.displayCategories').css('display','none');
	$('.addNewCategoryForm').css('display','none');
	$('.companyinput').val('');
	$(".displaylocations").css('display','block');
	$("#companyAddLocationsfields").css('display','block');
	$(".companyEditLocationsfields").css('display','none');
	
});

$(".companyAddLocation").click(function() {
	//$('.displayCategories').css('display','none');
	$('.addNewCategoryForm').css('display','none');
	$('.companyinput').val('');
	//$(".displaylocations").css('display','block');
	$("#companyAddLocationsfields").css('display','block');
	$("#companyAddLocationsfields").dialog('open');
	//$(".companyEditLocationsfields").css('display','none');
});


$(".companyEditLocation").click(function() {
	$('.displayCategories').css('display','none');
	$('.addNewCategoryForm').css('display','none');
	$('.companyinput').val('');
	$(".displaylocations").css('display','block');
	$("#companyAddLocationsfields").css('display','none');
	$(".companyEditLocationsfields").css('display','block');
	
	$.ajax({
                url:'displayCategories' ,
                success: displayCategoriesForEditLocation,
                failure: displayCategoriesForEditLocation,
                dataType: 'json',
                cache: true
								
            });	
});


    

});

function removeHoliday(date) {
	var i = holidaysList.indexOf(date);
	if(i != -1) {
		holidaysList.splice(i, 1);
	}
	 var elem = document.getElementById(date);
	 elem.parentNode.removeChild(elem);
	// alert(holidaysList);
}

function removeEditHoliday(date) {
var i = editHolidaysList.indexOf(date);
	if(i != -1) {
		editHolidaysList.splice(i, 1);
	}
	 var elem = document.getElementById(date);
	 elem.parentNode.removeChild(elem);

}

function newRemoveHoliday( date ){
	delete newHolidaysList[date];
	var elem = document.getElementById('row_'+date);
	elem.parentNode.removeChild(elem);
}

function newRemoveEditHoliday( date ){
	delete date_FromTo_time[date];
	var elem = document.getElementById('row_'+date);
	elem.parentNode.removeChild(elem);
}

function displayCategoriesForEditLocation(data)  {


 if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = '';
	for (i=0;i < jsonObj.length;i++)
	{
	 innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';  
	}
	//innerhtml = innerhtml+ '<';
	$(".editNewLocationSelection").html(innerhtml);  
	$('.editNewLocationSelection option[value="' +selectCurrentEditCategory+ '"]').prop('selected', true);

}
}

function displayCategoriesForLocation(data)  {

 if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = '';
	for (i=0;i < jsonObj.length;i++)
	{
	 
	 innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';  
	}
	//innerhtml = innerhtml+ '<';
	$(".createNewLocationSelection").html(innerhtml);  
	$('.createNewLocationSelection option[value="' +selectCurrentAddCategory+ '"]').prop('selected', true);


}
emptyArrays();


}

var editLocationId = "";
function editLoationDetails(locationid) {
editLocationId = locationid;
   $.ajax({
                url:'getLocationDetails' ,
				data: "location_id="+locationid,
                success: displayLocationDetails,
                failure: displayLocationDetails,
                dataType: 'json',
                cache: true
								
            });	
  emptyArrays();
}
function removeLocationDetails(locationid) {
if(confirm("Are you sure. Do you want to remove?")) {
 $.ajax({
                url:'removeLocationDetails' ,
				data: "location_id="+locationid,
                type :'POST',
                success: function(msg){
				  alert(msg);
				  callDisplayCategories();
				 },
				failure: function(msg) {
				  alert(msg);
				}
								
            });	
}

}


function displayLocationDetails(data) {







if(typeof data != 'undefined'){
var jsonObj = data;
$("#companyEditLocationsfields").css('display','block');
$("#companyEditLocationsfields").dialog('option', 'title', 'Edit Location');
$("#companyEditLocationsfields").dialog('open');

$.ajax({
                url:'displayCategories' ,
                success: displayCategoriesForEditLocation,
                failure: displayCategoriesForEditLocation,
                dataType: 'json',
                cache: true
								
            });	

$.ajax({
                url:'getLocationHolidays' ,
				data: "&locationid="+jsonObj[0].location_id,
                success: displayHolidays,
                failure: displayHolidays,
                dataType: 'json',
                cache: true
								
            });	

var length = jsonObj.length;

//$(".editNewLocationSelection").attr('disabled', 'disabled');
$("#editLocationAdd1").val(jsonObj[0].address1);
$("#editLocationAdd2").val(jsonObj[0].address2);
$("#editLocationState").val(jsonObj[0].city);
$("#editLocationCountry").val(jsonObj[0].country);
$("#editLocationZpc").val(jsonObj[0].pincode);
$("#editLocationConfr1").val(jsonObj[0].conf_room_1);
$("#editLocationConfr2").val(jsonObj[0].conf_room_2);
$("#editLocationConfr3").val(jsonObj[0].conf_room_3);
$("#editLocationConfr4").val(jsonObj[0].conf_room_4);
$("#editLocationConfr5").val(jsonObj[0].conf_room_5);
$("#editlocationid").val(jsonObj[0].location_id);
// edited : make dropdown for each date
// $("#businesseditfrom").val(jsonObj[0].business_hours_start);
// $("#businesseditto").val(jsonObj[0].business_hours_end);
selectCurrentEditCategory = jsonObj[0].company_id;

} else {
 alert("Location Details are not fetched");
}

}

// edited : added function to fill time selection
var time = new Array();
	time[0] = '8:00';
	time[1] = '9:00';
	time[2] = '10:00';
	time[3] = '11:00';
	time[4] = '12:00';
	time[5] = '1:00';
	time[6] = '2:00';
	time[7] = '3:00';
	time[8] = '4:00';
	time[9] = '5:00';


function displayHolidays(data) {
date_FromTo_time = {};
editHolidaysList = [];
newTimeFrom = {};
newTimeTo = {};

if(typeof data != 'undefined'){
			var jsonObj = data;
			if(jsonObj.length != 0) {
			
			var innerHtml = $("#editListOfHolidays").html();
			var dataString = "";
			// edited 
			var newDateList = "";
			var innerTimeHtml = "";
			$.each( time, function( key,value){
				innerTimeHtml = innerTimeHtml + '<option value="'+value+'">'+value+'</option>';
			});
			        for (i=0;i < jsonObj.length;i++)
					{
					   if(jsonObj[i].loc_available_from == jsonObj[i].loc_available_to ) {
							if(editHolidaysList.indexOf(jsonObj[i].loc_available_from) == -1) {
								var timeFrom = jsonObj[i].loc_time_from;
								var timeTo =  jsonObj[i].loc_time_to;
								var date = jsonObj[i].loc_available_from;
								var date2 = date.replace(/-/g,'');
							// dataString = dataString +' <div id="'+jsonObj[i].loc_available_from+'"><label for="holiday Dates" >'+jsonObj[i].loc_available_from+'</label><img onclick = "removeEditHoliday(\''+jsonObj[i].loc_available_from+'\') " src="<?php echo base_url() ; ?>images/icon_close.png" /> </div>';
							newDateList = newDateList + "<tr id='row_"+date.replace(/-/g,'_')+"'><th>"+date+"</th>"+
							"<td><select id='timeFrom_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							"<td><select id='timeTo_"+date2+"' style='width:100px !important'>"+innerTimeHtml+"</select></td>"+
							'<td><img onclick = "newRemoveEditHoliday(\''+date.replace(/-/g,'_')+'\')" src="<?php echo base_url() ; ?>images/icon_close.png" /></td></tr>';
							//innerHtml = innerHtml + dataString;

							editHolidaysList.push(jsonObj[i].loc_available_from);
							newTimeFrom['timeFrom_'+date2] = new Array( timeFrom );
							newTimeTo['timeTo_'+date2] = new Array( timeTo );

							date_FromTo_time[jsonObj[i].loc_available_from.replace(/-/g,'_')] = timeFrom+"_"+timeTo;

							$("#editholiDay").val("");
							} else {
							$("#editholiDay").val("");
							}
						}
					 }
					 
					// $("#editListOfHolidays").html(dataString);
					$("#newEditListOfHolidays").html(newDateList);

					$.each( newTimeFrom, function( key, value ){
						$( "#"+key ).val( value );
					});

					$.each( newTimeTo, function( key, value ){
						$( "#"+key ).val( value );
					});
			 }
			 
	}
}

function selectAllServicesInputs() {

//if($("#selectAllServices").is(":checked")) {
	$('input.servicenameclass:checkbox').each(function () {
	   $(this).prop("checked",true);
	});
/*} else {
$('input.servicenameclass:checkbox').each(function () {
	   $(this).prop("checked",false);
	});

}*/
}

function deSelectAllServicesInputs() {

$('input.servicenameclass:checkbox').each(function () {
	   $(this).prop("checked",false);
	});

}

function submitServices() {
var  servicesArray = [];
var serviceArrayuncheck = [];
$('input.servicenameclass:checkbox:checked').each(function () {
    servicesArray.push($(this).val());
});

$('input.servicenameclass:checkbox:not(:checked)').each(function () {
    serviceArrayuncheck.push($(this).val());
});

$.ajax({
                url:'saveServicesToLocations' ,
				data: "servicearray="+servicesArray+"&location_id="+selectionlocationid+"&serviceArrayuncheck="+serviceArrayuncheck,
                type :'POST',
                success: function(msg){
				  alert(msg);
				  $("#listServices").dialog('close');
				 },
				failure: function(msg) {
				  alert(msg);
				}
								
            });



}

function removecompany(company_id) {
if(confirm("Are you sure. Do you want to remove?")) {
$("#viewCategory_"+company_id).show();
		$.ajax({
                url:'removeCategories' ,
				data: "removecompany_id="+company_id,
				type :'POST',
                success: displayCategoryList,
                failure: displayCategoryList,
                dataType: 'json',
                cache: true
								
            });	
			
}
}
var selectionlocationid = "";
function addServiceToLocation(locationid,selectionid) {
selectionlocationid = locationid;
$.ajax({
                url:'getAllServices' ,
				type :'POST',
                success: displayServicesList,
                failure: displayServicesList,
                dataType: 'json',
                cache: true
								
            });	



}

var totalservices = 0;
function displayServicesList(data) {

$("#listServices").css('display','block');
$("#listServices").dialog('option', 'title', 'Add Services');
$("#listServices").dialog('open');


    var innerhtml = '<form id="addNewService" class="form-horizontal" name="addNewService">';
		
	if(typeof data != 'undefined'){
		var jsonObj = data;
		totalservices = jsonObj.length;
		if(jsonObj.length != 0) {
        for (i=0;i < jsonObj.length;i++)
		{
		 
		 innerhtml = innerhtml + '<div ><table><td class="width100">&nbsp;</td><td class="width200"><label for="cmpconfr4">'+jsonObj[i].name+'</label></td><td class="width50"><input class="servicenameclass" type="checkbox" id = "servicecheckbox_'+jsonObj[i].service_id+'" value="'+jsonObj[i].service_id+'" /></td></table></div>';  
		}
		innerhtml = innerhtml + "<input type=\"button\" onclick=\"submitServices()\" value=\"Add Selected\" /> &nbsp;&nbsp;&nbsp;<input  type=\"button\" onclick=\"selectAllServicesInputs()\" value=\"Select All\" />&nbsp;&nbsp;&nbsp;<input  type=\"button\" onclick=\"deSelectAllServicesInputs()\" value=\"Deselect All\" />&nbsp;&nbsp;&nbsp;</form><br><br>";
		//alert(selectionserviceid);
		//alert(innerhtml);
		//innerhtml = innerhtml+ '<';
		$(".listallservices").html(innerhtml);  
      } else {
	  $(".listallservices").html('Services are not available to add to the Location');  
	  }

	}

	
	$.ajax({
                url:'selectServiceCheckboxes' ,
				data: "location_id="+selectionlocationid,
				type :'POST',
                success: selectServiceCheckboxes,
                failure: selectServiceCheckboxes,
                dataType: 'json',
                cache: true
								
            });	
	
	
}

function selectServiceCheckboxes(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		var count = 0;
		if(jsonObj.length > 0) {
        for (i=0;i < jsonObj.length;i++)
		{
		 //alert(jsonObj[i].service_id);
		 $("#servicecheckbox_"+jsonObj[i].service_id).prop("checked",true);
		 count = count+1;
		 
		}
		if(count == totalservices) {
		//alert(count + "------------"+jsonObj.length);
		$("#selectAllServices").prop("checked",true);
		
		} else {
		$("#selectAllServices").prop("checked",false);
		}
		}
}
}

function displayCategoryList(data) {

$(".displayCategories").css('display','block');
 if(typeof data != 'undefined'){
	var jsonObj = data;
	if (jsonObj.length != 0) {
	var innerhtml1 = '<div id="companyholder" class="servicesList horizontalStack" style="display: block;"> <ul id="servicecategories" class="groups" style="display: block;">';
	var innerhtml = '<table border=0 width="100%">';
	for (i=0;i < jsonObj.length;i++)
	{
	
	innerhtml1= innerhtml1 + '<li id="servicecompany_ '+jsonObj[i].company_id +'" class="group"><div class="groupTitle"><div id="companyHeader'+ jsonObj[i].company_id +'" class="groupName">';
	innerhtml1= innerhtml1 +' <span id="companyName_'+jsonObj[i].company_id+ '" >'+jsonObj[i].company_name+'</span></div>';
    innerhtml1= innerhtml1 + '<div class="editGroup">';
    innerhtml1 =innerhtml1 + '<a onclick= "removecompany(this.id)" id="'+jsonObj[i].company_id+'" href="javascript:void(0)">Delete</a>';
    innerhtml1= innerhtml1 +'</div></div><div class="groupColumnHeadings"><div class="columnHeading LocationName">Address</div><div class="columnHeading LocationName">&nbsp;</div>';
	//innerhtml1 = innerhtml1+'<div class="columnHeading duration">State</div><div class="columnHeading cost">Country</div>';
	innerhtml1 = innerhtml1+'<div class="columnHeading duration">State</div><div class="columnHeading cost">&nbsp;</div>';
	innerhtml1 = innerhtml1 +'</div>';
	//innerhtml1=innerhtml1 + '</div>';
    innerhtml1= innerhtml1 +'<ul id="itcontainer'+jsonObj[i].company_id+'" class="services">';
	 
	 for (j=0;j<jsonObj[i].locationdetails.location.length; j++) {
			innerhtml1 = innerhtml1 +'<li id="location_'+jsonObj[i].locationdetails.location[j].location_id +'" class="service">';
			innerhtml1 = innerhtml1 +'<div class="locationName"><a calss="serviceSettingsLink" >'+jsonObj[i].locationdetails.location[j].address1+'&nbsp;'+jsonObj[i].locationdetails.location[j].address2+'</a></div>';
			innerhtml1 = innerhtml1 +'<div class="locationName">&nbsp;</div>';
			innerhtml1 = innerhtml1 +'<div class="cost">'+jsonObj[i].locationdetails.location[j].city+'</div>';
			//innerhtml1 = innerhtml1 +'<div class="online">'+jsonObj[i].locationdetails.location[j].country+'</div><div class="locationName">&nbsp</div>';
			innerhtml1 = innerhtml1 +'<div class="online">&nbsp;</div><div class="locationName">&nbsp</div>';
			//innerhtml1 = innerhtml1 + '<select id ="serviceSelection_'+jsonObj[i].locationdetails.location[j].location_id+'" onchange="addServiceToLocation(this.id)" class="serviceSelection_'+jsonObj[i].locationdetails.location[j].location_id+'" > </selection></div>';
			//alert(jsonObj[i].locationdetails.location[j].location_id);
			//setservices(jsonObj[i].locationdetails.location[j].location_id,"serviceSelection_"+jsonObj[i].locationdetails.location[j].location_id);
			innerhtml1 = innerhtml1 + '<div class="editdetails1"><a onclick="addServiceToLocation('+jsonObj[i].locationdetails.location[j].location_id+')" href="javascript:void(0)">Add Service</a></div>';
			innerhtml1 = innerhtml1 + '<div class="editdetails1"><a onclick="editLoationDetails('+jsonObj[i].locationdetails.location[j].location_id+')" href="javascript:void(0)"><i class="glyphicon glyphicon-edit"></i>Edit details</a></div>';
			innerhtml1 = innerhtml1 + '<div calss="deletedetails"><a onclick="removeLocationDetails('+jsonObj[i].locationdetails.location[j].location_id+')" href="javascript:void(0)"><i class="glyphicon glyphicon-remove"></i>Delete</a></div>';
			innerhtml1 = innerhtml1 +'</li>';
	}
	
	
	innerhtml1= innerhtml1+'</ul><div class=" addService">';
	innerhtml1= innerhtml1 +'<a onclick="addLocationToCorporateClient('+jsonObj[i].company_id+')" class="companyAddLocation" href="javascript:void(0)">+ Add Location</a></div></li>';
	 innerhtml =innerhtml1 + innerhtml + '<tr class="padding " style="border-spacing:0px 0px 6px 0px" id="'+jsonObj[i].company_id+'"><td class="col-sm-2 control-label">'+jsonObj[i].company_name +'</td><td align="right"><img id= "viewCategory_'+jsonObj[i].company_id+'" style="display:none" src="<?php echo base_url() ?>images/ajax-loader-snake.gif" /><a href="javascript:void(0)" class="col-sm-0 control-label" onclick ="removecompany(this.id)" id="'+jsonObj[i].company_id+'">Delete</a></td></tr><tr>&nbsp</tr>';  
	}
	innerhtml1= innerhtml1+'</ul></div>';

	innerhtml = innerhtml+ '</table>';
	$(".displayCategories").html(innerhtml1);
	
	} else {
	$(".displayCategories").html('Corporate Companies are not found ');
	}
}
$("#loading").css('display','none');


}

function addLocationToCorporateClient(company_id) {
editLocationId = "";
selectCurrentAddCategory = company_id;
$(".displaylocations").css('display','block');

$.ajax({
                url:'displayCategories' ,
                success: displayCategoriesForLocation,
                failure: displayCategoriesForLocation,
                dataType: 'json',
                cache: true
								
            });	

$("#companyAddLocationsfields").css('display','block');
$("#companyAddLocationsfields").dialog('option', 'title', 'Add Location');
$(".createNewLocationSelection").val(company_id);
$("#companyAddLocationsfields").dialog('open');
	

}

function callDisplayCategories() {
$.ajax({
                url:'displayCategories' ,
                success: displayCategoryList,
                failure: displayCategoryList,
                dataType: 'json',
                cache: true
								
            });	


}

function newSavelocationDetails() {

var company_id=$(".createNewLocationSelection").val();
var add1=$("#addLocationAdd1").val();
var add2=$("#addLocationAdd2").val();
var state=$("#addLocationState").val();
var country=$("#addLocationCountry").val();
var zpc=$("#addLocationZpc").val();
var conf1=$("#addLocationConfr1").val();
var conf2=$("#addLocationConfr2").val();
var conf3=$("#addLocationConfr3").val();
var conf4=$("#addLocationConfr4").val();
var conf5=$("#addLocationConfr5").val();

var conf1dietitiancheck = "&conf1dietitiancheck="+conf1dietitianscheck+"&conf2dietitiancheck="+conf2dietitianscheck+"&conf3dietitiancheck="+conf3dietitianscheck+"&conf4dietitiancheck="+conf4dietitianscheck+"&conf5dietitiancheck="+conf5dietitianscheck+"&conf1dietitianuncheck="+conf1dietitiansuncheck+"&conf2dietitianuncheck="+conf2dietitiansuncheck+"&conf3dietitianuncheck="+conf3dietitiansuncheck+"&conf4dietitianuncheck="+conf4dietitiansuncheck+"&conf5dietitianuncheck="+conf5dietitiansuncheck;

// var locationunavailabledates = editHolidaysList;
// var businessfrom=$("#businesseditfrom").val();
// var businessto=$("#businesseditto").val();
// change to date -> from-to array
// alert( JSON.stringify( date_FromTo_time ) );
$( '#newAddListOfHolidays tr' ).each(function(){
	var date = $(this).find('th');
	if( date.length > 0 ){
		// alert( date.eq(0).text() );
		var times = $(this).find('td select');
		// alert( times.eq(0).val()+"to"+times.eq(1).val() );
		newHolidaysList[date.eq(0).text().replace(/-/g,'_')] = times.eq(0).val()+"_"+times.eq(1).val();
	}
});

var locaAvailableDateAndTime = JSON.stringify( newHolidaysList );

if (($(".createNewLocationSelection").val() != "") && ($("#addLocationAdd2").val() != "") && ($("#addLocationState").val() != "") &&  ($("#addLocationZpc").val() != "")) {
if (!(isNaN($("#addLocationZpc").val()))) {


$.ajax({
                url:'saveLocationDetails' ,
				data: "company_id="+company_id+"&add1="+add1+"&add2="+add2+"&state="+state+"&country="+country+"&zpc="+zpc+"&conf1="+conf1+"&conf2="+conf2+"&conf3="+conf3+"&conf4="+conf4+"&conf5="+conf5+conf1dietitiancheck+"&locationunavailabledates="+locaAvailableDateAndTime,
                type:'POST',
				success: function(msg) {
				    if(msg == "success" ) {
						alert("Location details are added successfully");
						document.getElementById("addLocationForm").reset();
						$("#companyAddLocationsfields").dialog('close');
						callDisplayCategories();
					} else {
						alert(msg);
						document.getElementById("addLocationForm").reset();
					}
				},
                failure: function() {
					alert("Location details are not added");
					document.getElementById("addLocationForm").reset();
				}
               
								
            });	
emptyArrays();
			
} else {
    alert("Zipcode should be numeric");
}

} else {
alert("Please make sure to fill location details");
}
}


function savelocationDetails() {

//if (($(".createNewLocationSelection").val() != "") && ($("#addLocationAdd1").val() != "") && ($("#addLocationAdd2").val() != "") && ($("#addLocationState").val() != "") && ($("#addLocationCountry").val() != "") && ($("#addLocationZpc").val() != "")) {
if (($(".createNewLocationSelection").val() != "") && ($("#addLocationAdd2").val() != "") && ($("#addLocationState").val() != "") &&  ($("#addLocationZpc").val() != "")) {
if (!(isNaN($("#addLocationZpc").val()))) {


 var pattern = /^(10|11|12|[1-9]):[0-5][0-9]$/;
 var businessfrom = $("#businessfrom").val();
 var businessto = $("#businessto").val();
 
 if ((businessfrom.match(pattern)) && (businessto.match(pattern))) {
$.ajax({
                url:'saveLocationDetails' ,
				data: "company_id="+$(".createNewLocationSelection").val()+"&add1="+$("#addLocationAdd1").val()+"&add2="+$("#addLocationAdd2").val()+"&state="+$("#addLocationState").val()+"&country="+$("#addLocationCountry").val()+"&zpc="+$("#addLocationZpc").val()+"&conf1="+$("#addLocationConfr1").val()+"&conf2="+$("#addLocationConfr2").val()+"&conf3="+$("#addLocationConfr3").val()+"&conf4="+$("#addLocationConfr4").val()+"&conf5="+$("#addLocationConfr5").val()+"&conf1dietitiancheck="+conf1dietitianscheck+"&conf2dietitiancheck="+conf2dietitianscheck+"&conf3dietitiancheck="+conf3dietitianscheck+"&conf4dietitiancheck="+conf4dietitianscheck+"&conf5dietitiancheck="+conf5dietitianscheck+"&conf1dietitianuncheck="+conf1dietitiansuncheck+"&conf2dietitianuncheck="+conf2dietitiansuncheck+"&conf3dietitianuncheck="+conf3dietitiansuncheck+"&conf4dietitianuncheck="+conf4dietitiansuncheck+"&conf5dietitianuncheck="+conf5dietitiansuncheck+"&locationunavailabledates="+holidaysList+"&businessfrom="+$("#businessfrom").val()+"&businessto="+$("#businessto").val(),
                type:'POST',
				success: function(msg) {
				    if(msg == "success" ) {
						alert("Location details are added successfully");
						document.getElementById("addLocationForm").reset();
						$("#companyAddLocationsfields").dialog('close');
						callDisplayCategories();
					} else {
						alert(msg);
						document.getElementById("addLocationForm").reset();
					}
				},
                failure: function() {
					alert("Location details are not added");
					document.getElementById("addLocationForm").reset();
				}
               
								
            });	
emptyArrays();
} else {
alert("Please make sure to fill business hours in given format only");
}
			
} else {
    alert("Zipcode should be numeric");
}

} else {
alert("Please make sure to fill location details");
}
}

function emptyArrays() {

conf1dietitianscheck = [];
conf1dietitiansuncheck = [];
conf2dietitianscheck = [];
conf2dietitiansuncheck = [];
conf3dietitianscheck = [];
conf3dietitiansuncheck = [];
conf4dietitianscheck = [];
conf4dietitiansuncheck = [];
conf5dietitianscheck = [];
conf5dietitiansuncheck = [];
$("#editListOfHolidays").html('');
$('#newEditListOfHolidays').html('');
$('#newAddListOfHolidays').html('');
newHolidaysList = {};
date_FromTo_time = {}
newTimeFrom = {};
newTimeTo = {};
}

var confdietitianclicked = 0;
//---------------------------------------------------
function displayAllDietitains(number) {
confdietitianclicked = number;

$.ajax({
		url:'displayAllDietitianMembersForCategory' ,
		//data: "service_id="+serviceid,
		success: displayAllDietitianMembersForCategory,
		failure: displayAllDietitianMembersForCategory,
		dataType: 'json',
		cache: true
						
	});	


}

function displayAllDietitianMembersForCategory(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		$("#listDietitian").css('display','block');
		$("#listDietitian").dialog('option', 'title', 'Dietitians');
		$("#listDietitian").dialog('open');


		var innerhtml = '<form id="addNewService" class="form-horizontal " name="addNewService"> ';
			
		if(typeof data != 'undefined'){
			var jsonObj = data;
			if (jsonObj.length != 0) {
			var previousdietitian_id = jsonObj[0].dietitian_id;
			var currentdietitian_id = "";
			var inner1= "";
			var inner2= "";
			var inner3 ="";
	        for (i=0;i < jsonObj.length;i++)
			{
			  currentdietitian_id = jsonObj[i].dietitian_id;
			if (previousdietitian_id == currentdietitian_id ) {
			inner1 = inner1 + '&nbsp;<font color="#8B0000" size=1>'+jsonObj[i].name+',';
			 //innerhtml = innerhtml + '<div ><table><td class="width100">&nbsp;</td><td class="width200"><label  for="cmpconfr4" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</label></td><td class="width50"><input class="conf'+confdietitianclicked+'dietitian" type="radio" name= "addoreditdietitian" id = "conf'+confdietitianclicked+'dietitian_'+jsonObj[i].dietitian_id+'" value="'+jsonObj[i].dietitian_id+'" /></td></table></div> ';  
			 inner2 = '<div ><table><td class="width200"><label  for="cmpconfr4" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</label><br> <font color="#006400" size=2>Services:</font> ';
			  inner3 = '</td><td class="width50"><input class="conf'+confdietitianclicked+'dietitian" type="checkbox" name= "addoreditdietitian" id = "conf'+confdietitianclicked+'dietitian_'+jsonObj[i].dietitian_id+'" value="'+jsonObj[i].dietitian_id+'" /></td></table></div> '; 
            			 
			 
					 if(i == eval(jsonObj.length -1)) {
					   inner1 = inner1.substring(0,eval(inner1.length -1));
			           inner1 = inner1+"</font>";
					   innerhtml = innerhtml + inner2 + inner1+inner3;
					   
					    inner1 = "";
					 }
			// } 
			} else {
			  inner1 = inner1.substring(0,eval(inner1.length -1));
			  inner1 = inner1+"</font>";
			  innerhtml = innerhtml + inner2 + inner1+inner3;
			  inner1 = '&nbsp;<font color="#8B0000" size=1>'+jsonObj[i].name+',';
			  inner2 = '<div ><table><td class="width200"><label  for="cmpconfr4" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</label><br> <font color="#006400" size=2>Services:</font> ';
			  inner3 = '</td><td class="width50"><input class="conf'+confdietitianclicked+'dietitian" type="checkbox" name= "addoreditdietitian" id = "conf'+confdietitianclicked+'dietitian_'+jsonObj[i].dietitian_id+'" value="'+jsonObj[i].dietitian_id+'" /></td></table></div> '; 
			  
			   if(i == eval(jsonObj.length -1)) {
			        inner1 = inner1.substring(0,eval(inner1.length -1));
			        inner1 = inner1+"</font>";
					innerhtml = innerhtml + inner2 + inner1+inner3;
					inner1 = "";
					 }
			}
			 previousdietitian_id = currentdietitian_id;
			}
			if (editLocationId == "") {
			   innerhtml = innerhtml + "<input  type=\"button\" value=\"Add Selected\" onclick=\"submitDietitians("+confdietitianclicked+")\">&nbsp;&nbsp;&nbsp;<input  type=\"button\" value=\"Select All\" onclick=\"selectEditDietitians("+confdietitianclicked+")\">&nbsp;&nbsp;&nbsp;<input  type=\"button\" value=\"Deselect All\" onclick=\"deSelectEditDietitians("+confdietitianclicked+")\"></form>";
			} else {
			   innerhtml = innerhtml + "<input  type=\"button\" value=\"Add Selected\" onclick=\"submitEditDietitians("+confdietitianclicked+")\">&nbsp;&nbsp;&nbsp;<input  type=\"button\" value=\"Select All\" onclick=\"selectEditDietitians("+confdietitianclicked+")\">&nbsp;&nbsp;&nbsp;<input  type=\"button\" value=\"Deselect All\" onclick=\"deSelectEditDietitians("+confdietitianclicked+")\"></form>";
			}
			//alert(selectionserviceid);
			//alert(innerhtml);
			//innerhtml = innerhtml+ '<';
			$(".listalldietitians").html(innerhtml);
			} else {
			$(".listalldietitians").html('Dietitians are not available to add to the service');  
			
			}
			
			//if(editLocationId != "") {
				$.ajax({
	                url:'selectDisplayedDietitianCheckboxes' ,
					data: "location_id="+editLocationId+"&confnumber="+confdietitianclicked,
					type :'POST',
	                success: selectDisplayedDietitianCheckboxes,
	                failure: selectDisplayedDietitianCheckboxes,
	                dataType: 'json',
	                cache: true
									
	            });
			//}			
			
		}
	}
}

function selectDisplayedDietitianCheckboxes(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
        for (i=0;i < jsonObj.length;i++)
		{
		 //alert(jsonObj[i].service_id);
		$("#conf"+confdietitianclicked+'dietitian_'+jsonObj[i].dietitian_id).prop("checked",true);
		 
		}
		 switch(confdietitianclicked) {
			 case 1:
					 //conf1dietitianscheck = [];
					 for( j=0;j<conf1dietitianscheck.length ; j++) {
					    $("#conf"+confdietitianclicked+'dietitian_'+conf1dietitianscheck[j]).prop("checked",true);
						
					 } 
					 break;
			case 2:
					 //conf1dietitianscheck = [];
					 for( j=0;j<conf2dietitianscheck.length ; j++) {
					    $("#conf"+confdietitianclicked+'dietitian_'+conf2dietitianscheck[j]).prop("checked",true);
						
					 } 
					 break;
			case 3:
					 //conf1dietitianscheck = [];
					 for( j=0;j<conf3dietitianscheck.length ; j++) {
					    $("#conf"+confdietitianclicked+'dietitian_'+conf3dietitianscheck[j]).prop("checked",true);
						
					 } 
					 break;
			case 4:
					 //conf1dietitianscheck = [];
					 for( j=0;j<conf4dietitianscheck.length ; j++) {
					    $("#conf"+confdietitianclicked+'dietitian_'+conf4dietitianscheck[j]).prop("checked",true);
						
					 } 
					 break;
			case 5:
					 //conf1dietitianscheck = [];
					 for( j=0;j<conf5dietitianscheck.length ; j++) {
					    $("#conf"+confdietitianclicked+'dietitian_'+conf5dietitianscheck[j]).prop("checked",true);
						
					 } 
					 break;
			
					 
					 
		}
		
}



/*var dietitian_id = "";
if(typeof data != 'undefined'){
		var jsonObj = data;
		if(jsonObj.length != 0 ) {
        for (i=0;i < jsonObj.length;i++)
		{
		 switch(confdietitianclicked) {
			 case 1:
					 //conf1dietitianscheck = [];
					 if(conf1dietitianscheck.length == 1) {
					    dietitian_id = conf1dietitianscheck.pop();
						conf1dietitianscheck.push(dietitian_id);
					 } else {
					     conf1dietitianscheck.push(jsonObj[i].dietitian_id);
						 dietitian_id = jsonObj[i].dietitian_id;
					 }
					 break;
			 case 2:
					 //conf2dietitianscheck = [];
					 if(conf2dietitianscheck.length == 1) {
					    dietitian_id = conf2dietitianscheck.pop();
						conf2dietitianscheck.push(dietitian_id);
					 } else {
					 conf2dietitianscheck.push(jsonObj[i].dietitian_id);
					 dietitian_id = jsonObj[i].dietitian_id;
					 }
					 break;	  
			 case 3:
					//conf2dietitianscheck = [];
					 if(conf3dietitianscheck.length == 1) {
					    dietitian_id = conf3dietitianscheck.pop();
						conf3dietitianscheck.push(dietitian_id);
					 } else {
					 conf3dietitianscheck.push(jsonObj[i].dietitian_id);
					 dietitian_id = jsonObj[i].dietitian_id;
					 }
					 break;
			 case 4:
					//conf2dietitianscheck = [];
					 if(conf4dietitianscheck.length == 1) {
					    dietitian_id = conf4dietitianscheck.pop();
						conf4dietitianscheck.push(dietitian_id);
					 } else {
					 conf4dietitianscheck.push(jsonObj[i].dietitian_id);
					 dietitian_id = jsonObj[i].dietitian_id;
					 }
					 break;
			 case 5:
					 //conf2dietitianscheck = [];
					 if(conf5dietitianscheck.length == 1) {
					    dietitian_id = conf5dietitianscheck.pop();
						conf5dietitianscheck.push(dietitian_id);
					 } else {
					 conf5dietitianscheck.push(jsonObj[i].dietitian_id);
					 dietitian_id = jsonObj[i].dietitian_id;
					 }
					 break;
		 }
		 $("#conf"+confdietitianclicked+'dietitian_'+dietitian_id).prop("checked",true);
		 
		}
		} else {
		switch(confdietitianclicked) {
				  case 1:
				        if(conf1dietitianscheck.length == 1) {
								    dietitian_id = conf1dietitianscheck.pop();
									conf1dietitianscheck.push(dietitian_id);
						 }
					break;
					 case 2:
					 if(conf2dietitianscheck.length == 1) {
								    dietitian_id = conf2dietitianscheck.pop();
									conf2dietitianscheck.push(dietitian_id);
						 }
					break;
					 case 3:
					 if(conf3dietitianscheck.length == 1) {
								    dietitian_id = conf3dietitianscheck.pop();
									conf3dietitianscheck.push(dietitian_id);
						 }
					break;
					 case 4:
					 if(conf4dietitianscheck.length == 1) {
								    dietitian_id = conf4dietitianscheck.pop();
									conf4dietitianscheck.push(dietitian_id);
						 }
					break;
					 case 5:
					 if(conf5dietitianscheck.length == 1) {
								    dietitian_id = conf5dietitianscheck.pop();
									conf5dietitianscheck.push(dietitian_id);
						 }
					break;
 
			}
				 //alert("dietitian_id --"+dietitian_id);
				 if(dietitian_id != "") {
				  $("#conf"+confdietitianclicked+'dietitian_'+dietitian_id).prop("checked",true);
				  }
		}
} */

}


function storeDietitianDateInArrays(confid,confnumber) {

if(confnumber == 1) {

            
		if($("#"+confid+confnumber).val() != "") {
		  conf1dietitianscheck = [];
		   conf1dietitiansuncheck = [];
           //alert($('input.conf1dietitian:radio:checked').val());
			$('input.conf1dietitian:checkbox:checked').each(function () {
			   // alert($(this).val());
			    conf1dietitianscheck.push($(this).val());
			});

			$('input.conf1dietitian:checkbox:not(:checked)').each(function () {
			    conf1dietitiansuncheck.push($(this).val());
			});

		} else {
			if(confid == "addLocationConfr") {
			alert("Please fill confroom value first");
			}
		}
}

if(confnumber == 2) {

		if($("#"+confid+confnumber).val() != "") {
            conf2dietitianscheck = [];
			 conf2dietitiansuncheck = [];
			$('input.conf2dietitian:checkbox:checked').each(function () {
			    conf2dietitianscheck.push($(this).val());
			});

			$('input.conf2dietitian:checkbox:not(:checked)').each(function () {
			    conf2dietitiansuncheck.push($(this).val());
			});

		} else {
			if(confid == "addLocationConfr") {
				alert("Please fill confroom value first");
			}
		}
}

if(confnumber == 3) {

		if($("#"+confid+confnumber).val() != "") {
           conf3dietitianscheck = [];
		    conf3dietitiansuncheck = [];
			$('input.conf3dietitian:checkbox:checked').each(function () {
			    conf3dietitianscheck.push($(this).val());
			});

			$('input.conf3dietitian:checkbox:not(:checked)').each(function () {
			    conf3dietitiansuncheck.push($(this).val());
			});

		} else {
		  if(confid == "addLocationConfr") {
		    alert("Please fill confroom value first");
		  }
		}
  //alert(confnumber+"----"+conf3dietitianscheck);
  
  }

if(confnumber == 4) {

		if($("#"+confid+confnumber).val() != "") {
            conf4dietitianscheck = [];
			 conf4dietitiansuncheck = [];
			$('input.conf4dietitian:checkbox:checked').each(function () {
			    conf4dietitianscheck.push($(this).val());
			});

			$('input.conf4dietitian:checkbox:not(:checked)').each(function () {
			    conf4dietitiansuncheck.push($(this).val());
			});

		} else {
		   if(confid == "addLocationConfr") {
			 alert("Please fill confroom value first");
			}
		}
}

if(confnumber == 5) {

		if($("#"+confid+confnumber).val() != "") {
             conf5dietitianscheck = [];
			 conf5dietitiansuncheck = [];
			$('input.conf5dietitian:checkbox:checked').each(function () {
			    conf5dietitianscheck.push($(this).val());
			});

			$('input.conf5dietitian:checkbox:not(:checked)').each(function () {
			    conf5dietitiansuncheck.push($(this).val());
			});

		} else {
			if(confid == "addLocationConfr") {
				alert("Please fill confroom value first");
			}
		}
}
$("#listDietitian").dialog('close');




}

function submitEditDietitians(number) {

storeDietitianDateInArrays("editLocationConfr",number);
}
function submitDietitians(number) {
storeDietitianDateInArrays("addLocationConfr",number);
}

function selectEditDietitians(number) {

$('input.conf'+number+'dietitian:checkbox').each(function () {
    $(this).prop("checked",true);
});

}

function deSelectEditDietitians(number) {

$('input.conf'+number+'dietitian:checkbox').each(function () {
    $(this).prop("checked",false);
});

}

function selectDietitianCheckboxes(data) {

if(typeof data != 'undefined'){
		var jsonObj = data;
        for (i=0;i < jsonObj.length;i++)
		{
		 //alert(jsonObj[i].service_id);
		 $("#dietitiancheckbox_"+jsonObj[i].dietitian_id).prop("checked",true);
		 
		}
}



}


//---------------------------------------------------

function saveEditLocationDetails() {
//if (($(".editNewLocationSelection").val() != "") && ($("#editLocationAdd1").val() != "") && ($("#editLocationAdd2").val() != "") && ($("#editLocationState").val() != "") && ($("#editLocationCountry").val() != "") && ($("#editLocationZpc").val() != "")) {
if (($(".editNewLocationSelection").val() != "") && ($("#editLocationAdd2").val() != "") && ($("#editLocationState").val() != "") && ($("#editLocationZpc").val() != "")) {
if (!(isNaN($("#editLocationZpc").val()))) {

var pattern = /^(10|11|12|[1-9]):[0-5][0-9]$/;
 var businessfrom = $("#businesseditfrom").val();
 var businessto = $("#businesseditto").val();
 
 if ((businessfrom.match(pattern)) && (businessto.match(pattern))) {


$.ajax({
                url:'editLocationDetails' ,
				data: "company_id="+$(".editNewLocationSelection").val()+"&locationid="+$("#editlocationid").val()+"&add1="+$("#editLocationAdd1").val()+"&add2="+$("#editLocationAdd2").val()+"&state="+$("#editLocationState").val()+"&country="+$("#editLocationCountry").val()+"&zpc="+$("#editLocationZpc").val()+"&conf1="+$("#editLocationConfr1").val()+"&conf2="+$("#editLocationConfr2").val()+"&conf3="+$("#editLocationConfr3").val()+"&conf4="+$("#editLocationConfr4").val()+"&conf5="+$("#editLocationConfr5").val()+"&conf1dietitiancheck="+conf1dietitianscheck+"&conf2dietitiancheck="+conf2dietitianscheck+"&conf3dietitiancheck="+conf3dietitianscheck+"&conf4dietitiancheck="+conf4dietitianscheck+"&conf5dietitiancheck="+conf5dietitianscheck+"&conf1dietitianuncheck="+conf1dietitiansuncheck+"&conf2dietitianuncheck="+conf2dietitiansuncheck+"&conf3dietitianuncheck="+conf3dietitiansuncheck+"&conf4dietitianuncheck="+conf4dietitiansuncheck+"&conf5dietitianuncheck="+conf5dietitiansuncheck+"&locationunavailabledates="+editHolidaysList+"&businessfrom="+$("#businesseditfrom").val()+"&businessto="+$("#businesseditto").val(),
                type:'POST',
				success: function(msg) {
				    if(msg == "success" ) {
						alert("Details are successfully updated");
						document.getElementById("editLocationForm").reset();
						$("#companyEditLocationsfields").dialog('close');
						callDisplayCategories();
					} else {
						alert("Location details are not edited");
						document.getElementById("editLocationForm").reset();
					}
				},
                failure: function() {
					alert("Location details are not edited");
					document.getElementById("editLocationForm").reset();
				}
               
								
            });

emptyArrays();
} else {
alert("Please make sure to fill business hours in given format only");

}
} else {
 alert("Zipcode should be numeric");
}
} else {
alert("Please make sure to fill location details");
}
}

// new Save Edit
function newSaveEditLocationDetails(){
	var company_id=$(".editNewLocationSelection").val();
	var locationid=$("#editlocationid").val();
	var add1=$("#editLocationAdd1").val();
	var add2=$("#editLocationAdd2").val();
	var state=$("#editLocationState").val();
	var country=$("#editLocationCountry").val();
	var zpc=$("#editLocationZpc").val();
	var conf1=$("#editLocationConfr1").val();
	var conf2=$("#editLocationConfr2").val();
	var conf3=$("#editLocationConfr3").val();
	var conf4=$("#editLocationConfr4").val();
	var conf5=$("#editLocationConfr5").val()
	var conf1dietitiancheck = "&conf1dietitiancheck="+conf1dietitianscheck+"&conf2dietitiancheck="+conf2dietitianscheck+"&conf3dietitiancheck="+conf3dietitianscheck+"&conf4dietitiancheck="+conf4dietitianscheck+"&conf5dietitiancheck="+conf5dietitianscheck+"&conf1dietitianuncheck="+conf1dietitiansuncheck+"&conf2dietitianuncheck="+conf2dietitiansuncheck+"&conf3dietitianuncheck="+conf3dietitiansuncheck+"&conf4dietitianuncheck="+conf4dietitiansuncheck+"&conf5dietitianuncheck="+conf5dietitiansuncheck;
	// var locationunavailabledates = editHolidaysList;
	// var businessfrom=$("#businesseditfrom").val();
	// var businessto=$("#businesseditto").val();
	// change to date -> from-to array
	// alert( JSON.stringify( date_FromTo_time ) );

	$( '#newEditListOfHolidays tr' ).each(function(){
		var date = $(this).find('th');
		if( date.length > 0 ){
			// alert( date.eq(0).text() );
			var times = $(this).find('td select');
			// alert( times.eq(0).val()+"to"+times.eq(1).val() );
			date_FromTo_time[date.eq(0).text().replace(/-/g,'_')] = times.eq(0).val()+"_"+times.eq(1).val();
		}
	});

	var locaAvailableDateAndTime = JSON.stringify( date_FromTo_time );
	if (($(".editNewLocationSelection").val() != "") && ($("#editLocationAdd2").val() != "") && ($("#editLocationState").val() != "") && ($("#editLocationZpc").val() != "")) {
	if (!(isNaN($("#editLocationZpc").val()))) {

	$.ajax({
	                url:'newEditLocationDetails' ,
					data: "company_id="+company_id+"&locationid="+locationid+"&add1="+add1+"&add2="+add2+"&state="+state+"&country="+country+"&zpc="+zpc+"&conf1="+conf1+"&conf2="+conf2+"&conf3="+conf3+"&conf4="+conf4+"&conf5="+conf5+conf1dietitiancheck+"&locaAvailableDateAndTime="+locaAvailableDateAndTime,
	                type:'POST',
					success: function(msg) {
					    if(msg == "success" ) {
							alert("Details are successfully updated");
							document.getElementById("editLocationForm").reset();
							$("#companyEditLocationsfields").dialog('close');
							callDisplayCategories();
						} else {
							alert("Location details are not edited");
							document.getElementById("editLocationForm").reset();
						}
					},
	                failure: function() {
						alert("Location details are not edited");
						document.getElementById("editLocationForm").reset();
					}
	               
									
	            });
	} else {
	 alert("Zipcode should be numeric");
	}
	} else {
	alert("Please make sure to fill location details");
	}
}	

</script>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!-- START HEADRT TAG -->
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
                        		<?php echo $username ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<!--<li><a href="editprofile">Edit Profile</a></li>-->
                                <!--<li><a href="changepassword">Change Password</a></li>-->
                                <!--<li class="divider"></li>-->
                                <li><a href="signout">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
		</body>
	<!-- END HEADRT TAG -->
    
    <!-- START MAIN CONTENT -->
    	<div class="container content">
        	 	<h2>Company</h2>
              <ol class="breadcrumb">
                  <li><a  class = "newCategory" href="javascript:void(0)">Add</a></li>
				  <li><a  class = "viewCategory" href="#">Manage</a></li>
				  <!--<li><a  class = "companyLocation" href="javascript:void(0)">Location</a></li>-->

              </ol>
<br>

<div id="listServices" style="display:none">

<div class = "listallservices" >



</div>



</div>



        <div class="addNewCategoryForm " style="display: none;">
		<form id="addGroup" class="form-horizontal" onsubmit="return dummy() ;">
		<div class="horizontalStack">
		<label for="inputText">Corporate Company<span class="astrick">*</span></label>
		<input class="companyinput" type="text" maxlength="100" name="company_name">
		<a class="newCategorySubmit"  href="javascript:void(0)">Submit</a>
		|
		<a class="newCategoryCancel"  href="javascript:void(0)">Cancel</a> &nbsp; <img id= "createCategoryLoader" style="display:none" src="<?php echo base_url() ?>images/ajax-loader-snake.gif" />
			
		</form>
		
		</div>
		</div>

		
		<div class="displayCategories" style="display: none;">
	    
		</div>
        <div id="loading" style="display:none">Loading.......</div>
		<div class="displaylocations" style="display: none;">
		   <ol class="breadcrumb">
                <!--  <li><a  class = "companyAddLocation" href="#">Add Location</a></li>
                  <li><a  class = "companyEditLocation" href="javascript:void(0)">Edit Locaion</a></li>-->
              </ol>
	    </div>

      <br>
		<div id="companyAddLocationsfields" style="display:none">
		<!--<input class="locationinput" type="text" maxlength="20" name="loctionname"> -->
		<form name="addLocationForm" class="form-horizontal" id="addLocationForm">
		<div class="horizontalStack" >
 
<label for="cmpname"> Corporate Company<span class="astrick">*</span></label>
			<select name="service-company" class= "createNewLocationSelection">
			</select>
</div>
<!--<div class="horizontalStack" >
	  <label for="cmpadd1"> Address1<span class="astrick">*</span></label> --->
       <input type="hidden" class="cmpadd1" name="cmpadd1" value="" id="addLocationAdd1" maxlength="100"/>
<!--</div>-->

<div class="horizontalStack" >

			<label for="cmpadd2"> Address<span class="astrick">*</span></label>
		
			   <input type="text" class="cmpadd2" name="cmpadd2" value="" id="addLocationAdd2" maxlength="150"/>	 
			   
 </div>	  
  
<div class="horizontalStack" >
			  <label for="cmpstate"> State<span class="astrick">*</span></label>
			  
			   <input type="text" class="cmpstate" name="cmpstate" value="" id="addLocationState" maxlength="32"/>	
	         	   
</div>
<!--<div class="horizontalStack" >
			<label for="cmpcountry">Country<span class="astrick">*</span></label> -->
			
			 <input type="hidden" class="cmpcountry" name="cmpcountry" value="" id="addLocationCountry" maxlength="32"/>	  
			
<!--</div> -->

<div class="horizontalStack" >

		<label for="cmpzpc">Zipcode<span class="astrick">*</span></label>
		
	     <input type="text" class="cmpzpc" name="cmpzpc" value="" id="addLocationZpc" maxlength="32"/>	  
		
</div>	
<!-- <div class="horizontalStack" >
    	<label for="cmpconfr1">Business Hours From</label>
	    <input type="text" class="businessfrom" name="businessfrom" style="width:100px" value="9:00" placeholder="9:00" id="businessfrom" maxlength="6"/> AM 
</div>		 

<div class="horizontalStack" >
    	<label for="cmpconfr1">Business Hours To</label>
	    <input type="text" class="businessto" name="businessto" style="width:100px" value="6:00" placeholder="6:00" id="businessto" maxlength="6"/> PM 
</div>	 	 -->

<div class="horizontalStack" >
			    <label for="Unavailable Dates" >Available Date<span class="astrick">*</span></label>
				<input type="text" class="unavailabledate" name="holiDay" value="" id="holiDay"/> 
				<div class="horizontalStack" id="addListOfHolidays" style="display:block">
		
				</div>
				<div class="horizontalStack" class="newAddListOfHolidays" style="display:block">
				<table id='newAddListOfHolidays'>
				</table>
				</div>
				<input type="hidden" value="" id="dietitianunavailabledate" />
</div>

	
 
<div class="horizontalStack" >
		 <label for="cmpconfr1">Conference Room1</label>
	     <input type="text" class="cmpconfr1" name="cmpconfr1" value="" id="addLocationConfr1" maxlength="100"/>&nbsp; <button type="button" onclick="displayAllDietitains(1)">Add Dietitian</button>
</div>

		 
<div class="horizontalStack" >
		<label for="cmpconfr2">Conference Room2</label>
	    <input type="text" class="cmpconfr2" name="cmpconfr2" value="" id="addLocationConfr2" maxlength="100"/>	  &nbsp; <button type="button" onclick="displayAllDietitains(2)">Add Dietitian</button>
</div>
		 
<div class="horizontalStack" >
		<label for="cmpconfr3">Conference Room3</label>
	    <input type="text" class="cmpconfr3" name="cmpconfr3" value="" id="addLocationConfr3" maxlength="100"/>	 &nbsp; <button type="button" onclick="displayAllDietitains(3)">Add Dietitian</button>
</div>
		 
<div class="horizontalStack" >
		<label for="cmpconfr4">Conference Room4</label>
	    <input type="text" class="cmpconfr4" name="cmpconfr4" value="" id="addLocationConfr4" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(4)">Add Dietitian</button>
</div>
<div class="horizontalStack" >
		<label for="cmpconfr5">Conference Room5</label>
	    <input type="text" class="cmpconfr5" name="cmpconfr5" value="" id="addLocationConfr5" maxlength="100"/>&nbsp; <button type="button" onclick="displayAllDietitains(5)">Add Dietitian</button>
</div>
		 
		 <input type="button" onclick="newSavelocationDetails()" class="horizontalStack savechanges" id="savechanges" value="Add location" />
         </div>
		 </form>
		 <div id="companyEditLocationsfields" style="display:none">
		 <form name="editLocationForm" class="form-horizontal" id="editLocationForm">

	<!--	<a class="newlocationSubmit"  href="#">Add location</a> -->
<div class="horizontalStack" >
		  <label for="cmpname"> Corporate Company<span class="astrick">*</span></label>
		  <select name="service-company" class="editNewLocationSelection">
		  </select>
		  </div>
<!--<div class="horizontalStack">
	  <label for="cmpadd1"> Address1<span class="astrick">*</span></label> -->
      <input type="hidden" class="cmpadd1" name="cmpadd1" value="" id="editLocationAdd1" maxlength="32"/>
<!--</div> -->

<div id="listDietitian" style="display:none">

<div class = "listalldietitians" >



</div>

</div>

<div class="horizontalStack" >

		<label for="cmpadd2">Address<span class="astrick">*</span></label>
		<input type="text" class="cmpadd2" name="cmpadd2" value="" id="editLocationAdd2" maxlength="150"/>
</div>	  
  
<div class="horizontalStack" >
		  <label for="cmpstate"> State<span class="astrick">*</span></label>
		  <input type="text" class="cmpstate" name="cmpstate" value="" id="editLocationState" maxlength="32"/>
</div>

<!--<div class="horizontalStack" >
		<label for="cmpcountry">Country<span class="astrick">*</span></label> -->
		
	    <input type="hidden" class="cmpcountry" name="cmpcountry" value="" id="editLocationCountry" maxlength="32"/>	  
		
<!--</div>		 -->
		 
<div class="horizontalStack" >
		 <label for="cmpzpc">Zipcode<span class="astrick">*</span></label>
	     <input type="text" class="cmpzpc" name="cmpzpc" value="" id="editLocationZpc" maxlength="32"/>	  
</div>	
<!-- <div class="horizontalStack" >
    	<label for="cmpconfr1">Business Hours From</label>
	    <input type="text" class="businesseditfrom" name="businesseditfrom" style="width:100px" value="9:00" placeholder="9:00" id="businesseditfrom" maxlength="6"/> AM 
</div>		 

<div class="horizontalStack" >
    	<label for="cmpconfr1">Business Hours To</label>
	    <input type="text" class="businesseditto" name="businesseditto" style="width:100px" value="6:00" placeholder="6:00" id="businesseditto" maxlength="6"/> PM 
</div>	  -->
<div class="horizontalStack" >
			    <label for="Unavailable Dates" >Available Date<span class="astrick">*</span></label>
				<input type="text" class="unavailabledate" name="editholiDay" value="" id="editholiDay"/> 
				<div class="horizontalStack" id="editListOfHolidays" style="display:block">
		
				</div>
				<div class="horizontalStack" class="newEditListOfHolidays" style="display:block">
				<table id='newEditListOfHolidays'>
				</table>
				</div>
				<input type="hidden" value="" id="dietitianunavailabledate" />
</div>	 
		 
<div class="horizontalStack" >
    	<label for="cmpconfr1">Conference Room1</label>
	    <input type="text" class="cmpconfr1" name="cmpconfr1" value="" id="editLocationConfr1" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(1)">Edit Dietitian</button>	  
</div>		 
<div class="horizontalStack" >
    	 <label for="cmpconfr2">Conference Room2</label>
	     <input type="text" class="cmpconfr2" name="cmpconfr2" value="" id="editLocationConfr2" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(2)">Edit Dietitian</button>	  
</div>		 
<div class="horizontalStack" >
    	 <label for="cmpconfr3">Conference Room3</label>
	     <input type="text" class="cmpconfr3" name="cmpconfr3" value="" id="editLocationConfr3" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(3)">Edit Dietitian</button>	
</div>		 
<div class="horizontalStack" >
    	 <label for="cmpconfr4">Conference Room4</label>
	     <input type="text" class="cmpconfr4" name="cmpconfr4" value="" id="editLocationConfr4" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(4)">Edit Dietitian</button>  
</div>	

<div class="horizontalStack" >
    	 <label for="cmpconfr5">Conference Room5</label>
	     <input type="text" class="cmpconfr5" name="cmpconfr5" value="" id="editLocationConfr5" maxlength="100"/> &nbsp; <button type="button" onclick="displayAllDietitains(5)">Edit Dietitian</button>
         <input type="hidden" id="editlocationid" value=""/>		 
</div>	 
		 <input type="button" onclick="newSaveEditLocationDetails()" class="horizontalStack savechanges" id="savechanges" value="Submit" />
         </div>

	<!--	<a class="newlocationSubmit"  href="#">Add location</a> -->
		  

		
		
		
	    
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
