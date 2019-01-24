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

<link href="<?php echo base_url() ?>css/timeslots.css" rel="stylesheet">
		
<script src="<?php echo base_url() ?>js/usmap/jquery.vmap.js"></script>
<script src="<?php echo base_url() ?>js/usmap/maps/jquery.vmap.usa.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<script type="text/javascript">
$(document).ready(function() {
$.ajax({
                url:'getSessiondetails' ,
				type :'POST',
                success: displaySessionDetails,
                failure: displaySessionDetails,
                dataType: 'json',
                cache: true
								
            });
$.ajax({
                url:'getUserDetails' ,
				type :'POST',
				data: "user_id=<?php echo $cuser ?>",
                success: displayUserDetails,
                failure: displayUserDetails,
                dataType: 'json',
                cache: true
								
            });
			
});

function displayUserDetails(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		 // $(".Fname").val(jsonObj[0].firstname);
		  //$(".Lname").val(jsonObj[0].lastname);
		  //$(".Cnumber").val(jsonObj[0].phonenumber);
		  //$(".Email").val(jsonObj[0].userid);
		  $(".yourdetails").html(jsonObj[0].firstname+" "+jsonObj[0].lastname+" "+jsonObj[0].phonenumber+" "+jsonObj[0].userid);
		  

		}
		}
}

function displaySessionDetails(data) {

if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		       if ((jsonObj.servicename != "") && (jsonObj.calendarday != "") && (jsonObj.hour != "")) {
				//$(".addresstimeslot").html(jsonObj.servicename+"<br> with "+jsonObj.servicename+" on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);
				//$(".dateandtime").val(jsonObj.calendarday+" "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);
				$(".appointmentdetails").html(jsonObj.servicename+"<br> with "+jsonObj.servicename+" on "+jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);
				}
					
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
                        <li><a href="manageappointments">Manage Appointments</a></li>
                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $cuser ; ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            	<li><a href="editprofile">Edit Profile</a></li>
                                <li><a href="changepassword">Change Password</a></li>
                                <li class="divider"></li>
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
        	<h2>Make new appointments</h2>
             <ol class="breadcrumb">
                    
				 <li ><a href="searchdietitian">Search</a></li>
                 <li> <a href="selectservice">Select Service</a></li>
                  <li > <a href="timeslots">Available Timeslots</a></li>
                  <li><a href="insuranceinfo">Insurance Information</a></li>
                  <li class="active">Appointment Confirmation</li>
                  <li><a href="#">Appointment Summary</a></li>
              </ol>
			  <div class="appointmenttabconfirmation" style="display:none">
			    <h3>Confirm your Appointment</h3>
              <div class="alert alert-warning">
              	<span class="pull-left">Your appointment is not confirmed yet.</span>
               
              </div>
              <div class="title-box">
              	<div class="col-lg-9">
                	 
                    <p> 
                    	Please review and confirm your appointment.
                    </p>
                </div>
                
                <div class="col-lg-3">
                
                Slot held for 
                <div class="alert alert-danger">5:00</div>
                
                </div>
              </div>
            
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
                            <td class="title-td"><a href="#"> <i class="glyphicon glyphicon-edit"></i> Edit details</a></td>
                        </tr>
                        <tr class="details-tr">
                        	<td scope="row" class="titles-td">Your details</td>
                            <td class="app-td yourdetails"></td>
                            <td class="title-td"><a href="#"> </td>
                        </tr>
                        <tr class="lastrow-tr">
                        	<td scope="row" class="titles-td">Additional Info</td>
                            <td class="app-td additionalinfo"></td>
                            <td class="title-td"></td>
                        </tr>
                    </tbody>
                
                </table>
            	<div class="pull-right"> <a href = "finished"><input type="button" class="btn btn-danger" value="Confirm Appointment"/> </div>
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
