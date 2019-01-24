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
<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />

<link href="<?php echo base_url() ?>css/select-service.css" rel="stylesheet">
<script src="<?php echo base_url() ?>js/usmap/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>js/usmap/maps/jquery.vmap.usa.js"></script>

<script type="text/javascript">
var addresses = "";
var serviceId ="";
var serviceName = "";
$(document).ready(function() {
$.ajax({
                url:'getSessiondetails' ,
				type :'POST',
                success: displayServicesList,
                failure: displayServicesList,
                dataType: 'json',
                cache: true
								
            });
			
$('#autocompleteservicesearch').autocomplete({
	source: function(request, response, url){
	var searchParam  = request.term;
	response($.map(addresses, function(item) {
	   //$("#autocompletesearchid").val(item.service_id);
	    if ((item.name.toLowerCase().indexOf(request.term.toLowerCase()) == 0) && (request.term.length >= 3) ) {
	    serviceId = item.service_id;
		serviceName = item.name;
		return { 
			label: item.name,
			};
		}
		}));
		},
		select: function(addresses, ui) {
		redirecttoavailabletimes(serviceId,serviceName);
    }
});
			
			
});

function redirecttoavailabletimes(serviceid,servicename){

$.ajax({
                url:'setLocationid' ,
				type :'POST',
				data: "service_id="+serviceid+"&servicename="+escape(servicename),
                success: setLocationid,
                failure: setLocationid,
                dataType: 'text',
                cache: true
								
            });


}

function setLocationid(data) {
if(data == "success") {
document.location.href = "timeslots";
} else {

}


}

function displayServicesList(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		$.ajax({
                url:'displayservices' ,
				data: "locationid="+jsonObj.location_id,
				type :'POST',
                success: displayservices,
                failure: displayservices,
                dataType: 'json',
                cache: true
								
            });
		
		}
}

}

function displayservices(data) {

if(typeof data != 'undefined'){
		var jsonObj = data;
		addresses = data;
		
		if (jsonObj.length != 0 ) {
		var innerHtml = '<thead><tr><th scope="col" class="th-title">Service Name</th><th scope="col" class="th-title">Description</th></tr></thead><tbody>';
		for (i=0;i < jsonObj.length;i++)
		{
			innerHtml = innerHtml+'<tr><td class="td-title"><a href="javascript:void(0)" onclick="redirecttoavailabletimes(\''+jsonObj[i].service_id+'\', \''+jsonObj[i].name+'\')" >'+jsonObj[i].name+'</a></td><td class="td-dis">'+jsonObj[i].description+'</td></tr>';
		 
		}
		innerHtml = innerHtml + '</tbody>';
		$("#displayservicestable").html(innerHtml);
		} else {
		//  $("#displayservicestable").html("Please contact <?php echo CONTACTSERVICEID . " or " .  CONTACTSERVICENUMBER ?>");
	        $("#displayservicestable").html("We are not currently providing nutrition counseling at your company.  If you are interested in implementing on-site nutrition counseling with a Family Food Registered Dietitian at your company, please contact Family Food at <?php echo CONTACTSERVICEID . " or call " .  CONTACTSERVICENUMBER ?>");

		  var innerHtml = ' <li ><a href="searchdietitian">Search</a></li><li class="active">Select Service</a></li><li><a href="javascript:void(0)" disabled style="background-color:silver" >Available Timeslots</a></li><li><a href="javascript:void(0)" disabled style="background-color:silver" >Insurance Information</a></li><li><a href="javascript:void(0)" disabled style="background-color:silver" >Appointment Confirmation</a></li><li><a href="javascript:void(0)" disabled style="background-color:silver" >Appointment Summary</a></li>';
		  $("#selectservicenavigator").html(innerHtml);
		  
		}
	}

}


</script>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<header>
    		<div class="container">
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills" >
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
             <ol class="breadcrumb" id="selectservicenavigator">
                  <li ><a href="searchdietitian">Search</a></li>
                  <li class="active">Select Service</a></li>
                  <li><a href="timeslots">Available Timeslots</a></li>
                  <li><a href="#">Insurance Information</a></li>
                  <li><a href="#">Appointment Confirmation</a></li>
                  <li><a href="#">Appointment Summary</a></li>

              </ol>
			  <h3 class="pull-left" >Select Service</h3>
              <div class="pull-right search"> <input class="pull-left" type="text" name ="autocompleteservicesearch" id="autocompleteservicesearch" placeholder="Search Service"/> <a href="#"  class="pull-left"> <i class="glyphicon glyphicon-search"></i> </a> </div>
              <div class="clearfix"></div>
            <table class="table table-responsive" summary="This Table About the ..." id="displayservicestable" name="displayservicestable" style="background-color:#F4F4F4">
            	
            </table>     
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
