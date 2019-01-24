<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet">


<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

<script type="text/javascript">

var editServiceidForService = "";
var editLocationidForService = "";
var editCategoryidForService = "";
$( document ).ready(function() {

$("#editService").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});
$("#listDietitian").dialog({bgiframe: true,autoOpen: false,height: 500,width: 600,modal: true,resizable: true});


$(".addNewService").click(function() {
	$('.addService').css('display','block');
	$(".manageServiceDetails").css("display","none");
	$('.svmsg').css('display','none');
    $('.servicemsg').html('');
	/*$.ajax({
                url:'displayCategories' ,
                success: displayCategoryList,
                failure: displayCategoryList,
                dataType: 'json',
                cache: true
								
            });	*/
});

$(".manageService").click(function() {

  $(".addService").css("display","none");
  $(".manageServiceDetails").css("display","block");

  displayServices();
  
  
});

});

function displayEditServices() {

/*$.ajax({
                url:'displayCategories' ,
                success: displayEditCategoryList,
                failure: displayEditCategoryList,
                dataType: 'json',
                cache: true
								
            });	*/

	$.ajax({
		url:'displayEditSereviceDetails' ,
		data: "service_id="+editServiceidForService,
		success: displayEditSereviceDetails,
		failure: displayEditSereviceDetails,
		dataType: 'json',
		cache: true
						
	});	

}

function addDietitianToService(serviceid) {

editServiceidForService = serviceid;
	$.ajax({
		url:'displayAllDietitians' ,
		data: "service_id="+serviceid,
		success: displayAllDietitianMembers,
		failure: displayAllDietitianMembers,
		dataType: 'json',
		cache: true
						
	});	

}
function displayAllDietitianMembers(data) {
if(typeof data != 'undefined'){
	var jsonObj = data;
	$("#listDietitian").css('display','block');
$("#listDietitian").dialog('option', 'title', 'Add Dietitian');
$("#listDietitian").dialog('open');


var innerhtml = '<form id="addNewService" class="form-horizontal " name="addNewService"> ';
		
	if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0) {
        for (i=0;i < jsonObj.length;i++)
		{
		 
		 innerhtml = innerhtml + '<div ><table><td class="width100">&nbsp;</td><td class="width200"><label  for="cmpconfr4" >'+jsonObj[i].first_name+' '+jsonObj[i].last_name+'</label></td><td class="width50"><input class="servicenameclass" type="checkbox" id = "dietitiancheckbox_'+jsonObj[i].dietitian_id+'" value="'+jsonObj[i].dietitian_id+'" /><br></td></table></div><br>';  
		}
		innerhtml = innerhtml + "<input type=\"button\" value=\"Add Selected\" onclick=\"submitDietitians()\">&nbsp;&nbsp;&nbsp;<input type=\"button\" value=\"Select All\" onclick=\"selectAllDietitians()\">&nbsp;&nbsp;&nbsp;<input type=\"button\" value=\"DeselectAll\" onclick=\"deSelectAllDietitians()\"></form>";
		//alert(selectionserviceid);
		//alert(innerhtml);
		//innerhtml = innerhtml+ '<';
		$(".listalldietitians").html(innerhtml);  
		} else {
		$(".listalldietitians").html('Dietitians are not available to add to the service');  
		
		}


	}
	
	$.ajax({
                url:'selectDietitianCheckboxes' ,
				data: "service_id="+editServiceidForService,
                success: selectDietitianCheckboxes,
                failure: selectDietitianCheckboxes,
                dataType: 'json',
                cache: true
								
            });	
	


}
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

function selectAllDietitians() {

$('input.servicenameclass:checkbox').each(function () {
    $(this).prop("checked",true);
});

}

function deSelectAllDietitians() {

$('input.servicenameclass:checkbox').each(function () {
    $(this).prop("checked",false);
});

}

function submitDietitians() {

var  dietitianArray = [];
var dietitianArrayUnchecked = [];
$('input.servicenameclass:checkbox:checked').each(function () {
    dietitianArray.push($(this).val());
});

$('input.servicenameclass:checkbox:not(:checked)').each(function () {
    dietitianArrayUnchecked.push($(this).val());
});


$.ajax({
                url:'saveDietitianToServices' ,
				data: "dietitianArray="+dietitianArray+"&service_id="+editServiceidForService+"&dietitianArrayUnchecked="+dietitianArrayUnchecked,
                type :'POST',
                success: function(msg){
				  alert(msg);
				  $("#listDietitian").dialog('close');
				 },
				failure: function(msg) {
				  alert(msg);
				}
								
            });
			


}

function displayEditSereviceDetails(data) {
 if(typeof data != 'undefined'){
	var jsonObj = data;
	$(".editsvcname").val(jsonObj[0].name);
	$(".editsvdescription").val(jsonObj[0].description);
	$(".editduration").val(jsonObj[0].duration);
	$(".editprice").val(jsonObj[0].cost);
	if (jsonObj[0].publish_cost == "Yes") {
		$(".editshowPrice").prop('checked', true);
	} else {
		$(".editshowPrice").prop('checked', false);
	}
 }
}
function displayServices() {

$.ajax({
                url:'getServiceDetails' ,
                success: displayServiceDetails,
                failure: displayServiceDetails,
                dataType: 'json',
                cache: true
								
            });	

}

function editservice(serviceid) {

 editServiceidForService = serviceid;
 
 $("#editService").css('display','block');
$("#editService").dialog('option', 'title', 'Edit Service');
$("#editService").dialog('open');
 
  displayEditServices();
  
//displayServices();

}


function removeservice(serviceid) {
if(confirm("Are you sure. Do you want to remove?")) {
$.ajax({
                url:'removeServiceDetails' ,
				data: "service_id="+serviceid,
                type :'POST',
                success: function(msg){
				  alert(msg);
				  displayServices();
				 },
				failure: function(msg) {
				  alert(msg);
				}
								
            });	

}
}

function displayServiceDetails(data) {
 if(typeof data != 'undefined'){
    var jsonObj = data;
	if (jsonObj.length != 0 ) {
	var innerhtml1 = '<div id="companyholder" class="servicesList horizontalStack" style="display: block;"> <ul id="servicecategories" class="groups" style="display: block;">';
	//innerhtml1 = innerhtml1 + '<div class="groupColumnHeadings"><div class="columnHeading1 width100">Service Name</div><div class="columnHeading1 width200">Description</div><div class="columnHeading1 width100">Duration</div><div class="columnHeading1 width200">Corporate Client</div><div class="columnHeading1 width200">Location</div></div><div>&nbsp;</div>';
	
	innerhtml1 = innerhtml1 + '<div class="groupColumnHeadings"><div class="columnHeading1 width100">Service Name</div><div class="columnHeading1 width200">Description</div><div class="columnHeading1 width100">Duration</div></div><div>&nbsp;</div>';
	for (i=0;i < jsonObj.length;i++)
	{
		innerhtml1= innerhtml1 + '<li id="service_ '+jsonObj[i].service_id +'" class="group service"><div class="groupTitle">';
		innerhtml1 = innerhtml1 + '<div id="companyHeader'+ jsonObj[i].service_id +'" class="groupName columnHeading1 width100">';
		innerhtml1= innerhtml1 +' <span id="serviceName_'+jsonObj[i].service_id+ '" >'+jsonObj[i].name+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span>'+jsonObj[i].description+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width100"><span>'+jsonObj[i].duration+'</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span >&nbsp;</span></div>';
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span>&nbsp;</span></div>';
		//alert(jsonObj[i].company_name);
		//alert(jsonObj[i].company_name+ "---"+"undefined");
		//typeof myVar
		/*if (typeof jsonObj[i].company_name == "undefined") {
		
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span >Not Assigned</span></div>';
		} else {
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span >'+jsonObj[i].company_name+'</span></div>';
		}
		
		if ((typeof jsonObj[i].address1 == "undefined") && (typeof jsonObj[i].address2 == "undefined")) {
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span>Not Assigned</span></div>';
		} else {
		innerhtml1 = innerhtml1 + '<div class = "groupName columnHeading1 width200"><span>'+jsonObj[i].address1+' '+jsonObj[i].address2+'</span></div>';
		}*/
	   // innerhtml1= innerhtml1 + '<div class="editGroup">';
		innerhtml1 = innerhtml1 + '<div class="editdetails1"><a onclick="addDietitianToService('+jsonObj[i].service_id+')" href="javascript:void(0)">Add Dietitian</a></div>';
		 innerhtml1 =innerhtml1 + '<div class ="editdetails1"><a onclick= "editservice('+jsonObj[i].service_id+')" id="'+jsonObj[i].service_id+'" href="javascript:void(0)"><i class="glyphicon glyphicon-edit"></i>Edit</a></div>';
	    innerhtml1 =innerhtml1 + '<div calss="deletedetails"><a onclick= "removeservice('+jsonObj[i].service_id+')" id="'+jsonObj[i].service_id+'" href="javascript:void(0)"><i class="glyphicon glyphicon-remove"></i>Delete</a></div></li>';
		
	}
	innerhtml1 =innerhtml1 + '</ui></div>';
	$(".manageServiceDetails").html(innerhtml1);
	} else {
	$(".manageServiceDetails").html("Service details are not found");
	}
} else {

	$(".manageServiceDetails").html("Service details are not found");

}
 
}

/*function displayCategoryList(data) {

 if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = '';
	for (i=0;i < jsonObj.length;i++)
	{
	 
	 innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';  
	}
	
	//innerhtml = innerhtml+ '<';
	$(".serviceCategoryList").html(innerhtml);  
	getLocations(jsonObj[0].company_id);

}
}

function displayEditCategoryList(data) {

 if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = '';
	for (i=0;i < jsonObj.length;i++)
	{
	 
	 innerhtml = innerhtml + '<option value="'+jsonObj[i].company_id+'">'+jsonObj[i].company_name+'</option>';  
	}
	
	//innerhtml = innerhtml+ '<';
	$(".editserviceCategoryList").html(innerhtml);  
	$('.editserviceCategoryList option[value="' +editCategoryidForService+ '"]').prop('selected', true);
	getLocations(editCategoryidForService);

}
}

function getLocations(company_id) {


$.ajax({
                url:'getLocationsForCorporateClient' ,
				data: "company_id="+company_id,
                type :'POST',
                success: displayLocations,
                failure: displayLocations,
                dataType: 'json',
                cache: true
								
            });	




}
function displayLocations(data) {

if(typeof data != 'undefined'){
	var jsonObj = data;
	var innerhtml = '';
	for (i=0;i < jsonObj.length;i++)
	{
	 
	 innerhtml = innerhtml + '<option value="'+jsonObj[i].location_id+'">'+jsonObj[i].address1+'</option>';  
	}
	//innerhtml = innerhtml+ '<';
	$(".serviceLocationList").html(innerhtml);
	$(".editserviceLocationList").html(innerhtml);
	$('.editserviceLocationList option[value="' +editLocationidForService+ '"]').prop('selected', true);
    	


}


}

function setselections() {

var company_id = $(".serviceCategoryList").val();  
getLocations(company_id);

}
function seteditselections() {
var company_id = $(".editserviceCategoryList").val();  
getLocations(company_id);


}*/

function saveServiceDetails() {
//if (($(".svcname").val() != "") && ($(".svdescription").val() !="") && ($(".duration").val() != "") && ($(".price.price").val() != "") ) {
if (($(".svcname").val() != "") && ($(".svdescription").val() !="") && ($(".duration").val() != "")  ) {
if((!(isNaN($(".duration").val()))) && (!(isNaN($(".price.price").val())))){
$.ajax({
                url: 'addNewService' ,
				//data: "location_id="+$(".serviceLocationList").val()+"&servicename="+escape($(".svcname").val())+"&description="+escape($(".svdescription").val())+"&company="+escape($(".serviceCategoryList").val())+"&duration="+escape($(".duration").val())+"&cost="+escape($(".price.price").val())+"&showprice="+escape($(".showPrice").is(':checked')),
				data: "servicename="+escape($(".svcname").val())+"&description="+escape($(".svdescription").val())+"&duration="+escape($(".duration").val())+"&cost="+escape($(".price.price").val())+"&showprice="+escape($(".showPrice").is(':checked')),
				type :'POST',
                success: function(msg){
				// $('.svmsg').css('display','block');
				// $('.servicemsg').val($msg);
				alert(msg);
				emptyform();
				  
				 }
								
            });	
 } else {
 alert("Duration and Cost should be numbers");
 }
} else {
//$('.svmsg').css('display','block');
//$('.servicemsg').html('Please fill details');
alert("Please fill service details");
}
}

function saveEditServiceDetails() {
//if (($(".editsvcname").val() != "") && ($(".editsvdescription").val() !="") && ($(".editserviceCategoryList").val() != "")&& ($(".editduration").val() != "") && ($(".editprice.price").val() != "") ) {
if (($(".editsvcname").val() != "") && ($(".editsvdescription").val() !="") && ($(".editserviceCategoryList").val() != "")&& ($(".editduration").val() != "")  ) {
if((!(isNaN($(".editduration").val()))) && (!(isNaN($(".editprice.price").val())))){
$.ajax({
                url: 'editExistingService' ,
				//data: "service_id="+editServiceidForService+"&location_id="+$(".editserviceLocationList").val()+"&servicename="+escape($(".editsvcname").val())+"&description="+escape($(".editsvdescription").val())+"&company="+escape($(".editserviceCategoryList").val())+"&duration="+escape($(".editduration").val())+"&cost="+escape($(".editprice.price").val())+"&showprice="+escape($(".editshowPrice").is(':checked')),
				data: "service_id="+editServiceidForService+"&servicename="+escape($(".editsvcname").val())+"&description="+escape($(".editsvdescription").val())+"&duration="+escape($(".editduration").val())+"&cost="+escape($(".editprice.price").val())+"&showprice="+escape($(".editshowPrice").is(':checked')),
				type :'POST',
                success: function(msg){
				// $('.svmsg').css('display','block');
				// $('.servicemsg').val($msg);
				alert(msg);
				emptyeditform();
				  
				 }
								
            });	
} else {
alert("Duration and cost should be numbers");
}
} else {
alert("Please fill service details");
}
}

function emptyform() {
$(".svcname").val('');
$(".svdescription").val('');
//$(".serviceCategoryList").val($(".serviceCategoryList option:first").val());
//getLocations($(".serviceCategoryList option:first").val());
$(".duration").val('');
$(".price.price").val('');
}

function emptyeditform()
{
$(".editsvcname").val('');
$(".editsvdescription").val('');
//$(".editserviceCategoryList").val($(".editserviceCategoryList option:first").val());
//getLocations($(".editserviceCategoryList option:first").val());
$(".editduration").val('');
$(".editprice.price").val('');
 $("#editService").css('display','close');
$("#editService").dialog('close');
displayServices();
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
        	 	<h2>Service</h2>
                <ol class="breadcrumb">
				<li><a class = "addNewService" href="javascript:void(0)">Add</a></li>
                  <li><a class = "manageService" href="javascript:void(0)">Manage</a></li>
                  
              </ol>
		<br>
		
		<div id="listDietitian" style="display:none">

<div class = "listalldietitians" >



</div>

</div>
		<div class="manageServiceDetails displayCategories" style="display: none">
		
		</div>
	    <div class="addService" style="display:none">
		
		<form name="addServiceForm" class="form-horizontal" id="addServiceForm">

<!--<div class="viewservices" style="display:none"> -->
<div class="horizontalStack" >
			<label for="svcname">Name<span class="astrick">*</span></label>
			
			<input type="text" class="svcname" name="svname" value="" id="scvname" maxlength="100"/>
			
</div>


<div class="horizontalStack" >
			<label for="description">Description<span class="astrick">*</span></label>
            <textarea class="svdescription" name="svdescription" id="description" value="" ></textarea>
</div>			


<!--<div class="form-group" >
			<label for="service-company" class="col-sm-2 control-label" >Corporate Client<span>*</span></label>
            <div class="col-sm-3" >
            <select name="svservice-company" onchange ="setselections()" class="serviceCategoryList form-control">
		    </select>
			</div>
</div>

<div class="form-group" >
			<label for="service-company" class="col-sm-2 control-label" >Location<span>*</span></label>
            <div class="col-sm-3" >
            <select name="svservice-company"  class="serviceLocationList form-control">
		    </select>
			</div>
</div>-->

<div class="horizontalStack" >
		<label for="duration">Duration<span class="astrick">*</span></label>
		<input type="text" class="duration" name="svduration" value="" />
	   minutes
</div>
<div class="horizontalStack" >
	    <label for="cost">Cost ($)<span class="astrick"></span></label>
	    <input type="text" class="price price" name="svprice" value=""/>
</div>
<div class ="horizontalStack checkbox" >
<input type="checkbox" id="enableShowServicePrice_checkbox" name="enableShowServicePrice" value="Yes" checked="checked" class="showPrice" />
<input type="hidden" id="enableShowServicePrice_hidden" name="svenableShowServicePrice" value="false" />
<label for="price" class="showPriceLabel">Publish cost</label>


</div>
<input type="button" onclick="saveServiceDetails()" class="horizontalStack savechanges" id="savechanges" value="Add" />

<div class="svmsg" style="display:none">
<span class="servicemsg"></span>		
      
		 </div> 
</form>		 
</div>			
	 <div id ="editService" style="display:none">
		<form name="editServiceForm" class="form-horizontal" id="editServiceForm">

<!--<div class="viewservices" style="display:none"> -->
<div class="horizontalStack" >
			<label for="svcname">Name<span class="astrick">*</span></label>
			<input type="text" class="editsvcname" name="svname" value="" id="scvname" maxlength="100"/>
</div>


<div class="horizontalStack" >
			<label for="description">Description<span class="astrick">*</span></label>
            <textarea class="editsvdescription" name="svdescription" id="description" value="" ></textarea>
</div>			


<!--<div class="form-group" >
			<label for="service-company" class="col-sm-5 control-label" >Corporate Client<span>*</span></label>
            <div class="col-sm-6" >
            <select name="svservice-company" onchange ="seteditselections()" class="editserviceCategoryList form-control">
		    </select>
			</div>
</div>

<div class="form-group" >
			<label for="service-company" class="col-sm-5 control-label" >Location<span>*</span></label>
            <div class="col-sm-6" >
            <select name="svservice-company"  class="editserviceLocationList form-control">
		    </select>
			</div>
</div>-->

<div class="horizontalStack" >
		<label for="duration">Duration<span class="astrick">*</span></label>
		<input type="text" class="editduration" name="svduration" />
</div>
<div class="horizontalStack" >	 	  		

	    <label for="duration">Cost ($)<span class="astrick">*</span></label>
		
	    <input type="text" class="editprice price" name="svprice" value=""/>
		
</div>
<div class="horizontalStack  checkbox" >

	    <input type="checkbox" id="enableShowServicePrice_checkbox" name="enableShowServicePrice" value="Yes" checked="checked" class="editshowPrice" />

	 <input type="hidden" id="enableShowServicePrice_hidden" name="svenableShowServicePrice" value="false" />

	  <label for="price" class="showPriceLabel">Publish cost</label>

</div>
<input type="button" onclick="saveEditServiceDetails()" class="horizontalStack savechanges" id="savechanges" value="Submit" />

<div class="svmsg" style="display:none">
<span class="servicemsg"></span>		
      
		 </div> 
		 </form>
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