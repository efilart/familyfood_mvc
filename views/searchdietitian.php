<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/usmap/jqvmap.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
<!-- JQuery UI stylesheet --> 
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />

<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/search-dietitian.css" rel="stylesheet">
<script src="<?php echo base_url() ?>js/usmap/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>js/usmap/maps/jquery.vmap.usa.js"></script>



<script type="text/javascript">

var availablePlacesZipCodes = [];
var addresses = "";
$(document).ready(function() {

$("#displayPinCodesDialog").dialog({bgiframe: true,autoOpen: false,height: 325,width: 500,modal: true,resizable: true});
$.ajax({
                url:'getSessiondetails' ,
				type :'POST',
                success: displaySearchList,
                failure: displaySearchList,
                dataType: 'json',
                cache: true
								
            });

$("#searchComName").focusin(
		function (event) {
		if ($("#searchLocation").val() != "") {
			$.ajax({
                url:'getCompaniesDetails' ,
                data: "value="+$("#searchLocation").val(),
				success: saveCompanies,
                failure: saveCompanies,
				type :'POST',
				dataType: 'json',
                cache: true
								
            });	
		 } else {
		   alert("Location should  not be empty");
		 }

		}
);




		$('#vmap').vectorMap({
		    map: 'usa_en',
			color: '#666666',
			backgroundColor: null,
			borderColor: '#DFDFDF',
			hoverColor: '#2A6496',
		    enableZoom: false,
		    showTooltip: true,
			selectedColor: '#2A6496',
		    selectedRegion: 'MO',
			onRegionClick: function(element, code, region)
    {
        
             
      
		$("#searchLocation").val(code.toUpperCase());
		
		/*$.ajax({
                url:'getCompaniesData' ,
                data: "location="+$("#searchLocation").val(),
				success: saveCompaniesList,
                failure: saveCompaniesList,
				type :'POST',
				dataType: 'json',
                cache: true
								
            });	*/
    }
		});
		$('#searchComName').autocomplete({
source: function(request, response, url){
                var searchParam  = request.term;
				response($.map(addresses, function(item) {
				  if ((item.address.toLowerCase().indexOf(request.term.toLowerCase()) == 0) && (request.term.length >= 3) ) {
				   $("#searchlocationid").val(item.location_id);
                    return { 
                        label: item.address
                       
                        };
                    }
					}));
					}
});

		
	});

	
function displaySearchList(data) {

if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		           if ( (jsonObj.searchlocation != "false" ) && (jsonObj.location_id != "false") && (jsonObj.company_name != "false")) {
						$("#searchLocation").val(jsonObj.searchlocation);
						displayLocationAddressOnLoad(jsonObj.searchlocation);
						$("#searchlocationid").val(jsonObj.location_id);
						$("#searchComName").val(jsonObj.company_name);
					} else {
						$("#searchLocation").val("");
						$("#searchlocationid").val("");
						$("#searchComName").val("");
					}
		}
}

}
	
function saveCompaniesList(data) {

var innerhtml = '';
 if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		    //innerhtml = '<option value="">Select Zipcode</option>';
			innerhtml1 = "<br>";
			
			for (i=0;i < jsonObj.length;i++)
			{
			 // innerhtml = innerhtml + '<option value="'+jsonObj[i].pincode+'">'+ jsonObj[i].pincode +'</option>';	
			  innerhtml1 = innerhtml1+'<a href="javascript:void(0)" onclick="displayLocationAddressOnLoad(\''+jsonObj[i].pincode+'\')" >'+jsonObj[i].address2+" &nbsp; &nbsp "+jsonObj[i].pincode+'</a> <br>';
			  $(".listallzipcodes").html(innerhtml1);
			  $("#displayPinCodesDialog").css('display','block');
			  $("#displayPinCodesDialog").dialog('option', 'title', 'Select Zip Code');
			  $("#displayPinCodesDialog").dialog('open');
			}

		} else {
		 innerhtml1 = innerhtml + "We don't have services in selected region";
		 $(".listallzipcodes").html(innerhtml1);
		  $("#displayPinCodesDialog").css('display','block');
		  $("#displayPinCodesDialog").dialog('option', 'title', 'Select Zip Code');
		  $("#displayPinCodesDialog").dialog('open');

		}
		
		
}
}

function displayLocationAddressOnLoad(value) {

 
$.ajax({
                url:'getCompaniesData1' ,
                data: "zipcode="+value,
				success: saveCompanies,
                failure: saveCompanies,
				type :'POST',
				dataType: 'json',
                cache: true
								
            });	
$("#searchLocation").val(value);
$("#searchComName").val("");

$(".listallzipcodes").html("");
 $("#displayPinCodesDialog").css('display','none');
 $("#displayPinCodesDialog").dialog('close');

}

function displayLocationAddress(id) {

$("#searchLocation").val($("#"+id).val());

$.ajax({
                url:'getCompaniesData1' ,
                data: "zipcode="+$("#"+id).val(),
				success: saveCompanies,
                failure: saveCompanies,
				type :'POST',
				dataType: 'json',
                cache: true
								
            });	
}


function saveCompanies(data) {

	if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
			addresses = jsonObj;
		}
	} else {
			addresses = "";
			}
			
			
}

function storeCookie(locationid,address) {

$.ajax({
                url:'setSessiondetails' ,
				//data: "searchLocation="+$("#searchLocation").val()+"&location_id="+$("#searchlocationid").val()+"&searchComName="+$("#searchComName").val(),
				data: "searchLocation="+$("#searchLocation").val()+"&location_id="+locationid+"&searchComName="+$("#searchComName").val()+"&locationname="+address,
                success: redirecturl,
                failure: redirecturl,
				type :'POST',
				 dataType: 'text',
                cache: true
								
            });

}

function redirecturl(data) {

if (data == "success" ) {

document.getElementById("searchdietitianform").action= "selectservice";
document.getElementById("searchdietitianform").submit();

} else {

}
}

function displayAllLocations() {

if(($("#searchLocation").val() != "") && ($("#searchComName").val() != "")) {
$.ajax({
                url:'displayAllLocations' ,
				data: "searchLocation="+escape($("#searchLocation").val())+"&searchComName="+escape($("#searchComName").val()),
                success: displayAllLocationDetails,
                failure: displayAllLocationDetails,
				type :'POST',
				 dataType: 'json',
                cache: true
								
            });
} else {
if(($("#searchLocation").val() == "") && ($("#searchComName").val() == "")) {
alert("Please fill location and company details to complete the search.");
} else if($("#searchLocation").val() == "") {
alert("Please type in location to complete the search.");
} else if($("#searchComName").val() == "") {
alert("Please type in company to complete the search.");
}
}

}

function displayAllLocationDetails(data) {

var innerhtml = '';
 if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		    //innerhtml = '<option value="">Select Zipcode</option>';
			innerhtml1 = '<font color="green">Available Locations With Zip Codes</font><br><br>';
			
			for (i=0;i < jsonObj.length;i++)
			{
			 // innerhtml = innerhtml + '<option value="'+jsonObj[i].pincode+'">'+ jsonObj[i].pincode +'</option>';	
			//  innerhtml1 = innerhtml1+'<font color="blue"><a href="javascript:void(0)" onclick="storeCookie(\''+jsonObj[i].location_id+'\' , \''+jsonObj[i].address2+'\')" >'+jsonObj[i].zipcode+", "+jsonObj[i].address2+'<a></font><br>';//+" &nbsp; &nbsp "+jsonObj[i].pincode+'</a> <br>';
		  innerhtml1 = innerhtml1+'<font color="blue"><a href="javascript:void(0)" onclick="storeCookie(\''+jsonObj[i].location_id+'\' , \''+jsonObj[i].address2+'\')" >'+jsonObj[i].zipcode+", "+jsonObj[i].address2+'<a></font><br>';//+" &nbsp; &nbsp "+jsonObj[i].pincode+'</a> <br>';
			

			$(".listallzipcodes").html(innerhtml1);
			  $("#displayPinCodesDialog").css('display','block');
			  $("#displayPinCodesDialog").dialog('option', 'title', 'Location Details');
			  $("#displayPinCodesDialog").dialog('open');
			}

		} else {
		 innerhtml1 = innerhtml + "We are not currently providing nutrition counseling at your company.  If you are interested in implementing on-site nutrition counseling with a Family Food Registered Dietitian at your company, please contact Family Food at <?php echo CONTACTSERVICEID ;?> or call <?php echo CONTACTSERVICENUMBER ;?>";
		 $(".listallzipcodes").html(innerhtml1);
		  $("#displayPinCodesDialog").css('display','block');
		  $("#displayPinCodesDialog").dialog('option', 'title', 'Location Details');
		  $("#displayPinCodesDialog").dialog('open');

		}
		
		
}






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
             <ol class="breadcrumb">
                  <li class="active">Search</li>
                  <li><a href="selectservice">Select Service</a></li>
                  <li><a href="timeslots">Available Timeslots</a></li>
                  <li><a href="#">Insurance Information</a></li>
                  <li><a href="#">Appointment Confirmation</a></li>
                  <li><a href="#">Appointment Summary</a></li>
				  
              </ol>
			  <br>
			  <div id="displayPinCodesDialog" name="" style="display:none"> 
			  <div class = "listallzipcodes" >



			</div>
			  
			  
			  </div>
             <div class="col-lg-6">
               <h3>Search for Registered Dietitian based on Location</h3>
               <h4>Select the State where you work on the map by clicking on it.</h4>&nbsp;
                <form class="form-horizontal" id="searchdietitianform" name ="searchdietitianform" method="post" role="form" >
                <table><tbody><tr><td>                  
				<div class="form-group">
                    <label for="inputFirstname3" class="col-sm-2 control-label searchLocation" >Location: </label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="searchLocation" id="searchLocation" placeholder="Enter Location" value="" style="margin-left: 51px; width: 209px;">
                    </div>
                  </div>
				  </td>
				  </tr>
				  <tr><td>
                  <div class="form-group">
                    <label for="inputFirstname3" class="col-sm-2 control-label searchComName" >Company: </label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="searchComName" id="searchComName" value="" placeholder="Enter Your Company" style="margin-left: 51px; width: 209px;">
					  <input type="hidden" name="searchlocationid" id="searchlocationid" value="">
                    </div>
                  </div>
				  </td>
				  </tr>
				  <tr>
				  <td><a href="javascript:void(0)" style="margin-left: 254px; margin-top: 11px;"> <input type="button" onclick="displayAllLocations()" class="btn btn-danger" value="Search" /></a></td>
				</tr>
				 </tbody> </table>
				  </form>
                <div class="clearfix"></div>
				<!--<select multiple="multiple" size="10" id="slct_zip" name="slct_zip[]" onchange="FillListValues(this);" onMouseDown="GetCurrentListValues(this);" style="width:250px;">
				
				</select>-->
				<select class="zipcodes" style="display:none" id ="zipcodes" onchange="displayLocationAddress(this.id)">
				
				</select>
				<span style="display:none" id="nozips"></span>
            </div>
            <div class="col-lg-6 usa-map">
            	<div id="vmap" style="width: 568px; height: 369px;"></div>
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
   

</body>
</html>
