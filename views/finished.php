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

var dataexists = 0;
function displayUserDetails(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		dataexists = dataexists+1;
		 // $(".Fname").val(jsonObj[0].firstname);
		  //$(".Lname").val(jsonObj[0].lastname);
		  //$(".Cnumber").val(jsonObj[0].phonenumber);
		  //$(".Email").val(jsonObj[0].userid);
		  $(".yourdetails").html(jsonObj[0].firstname+" "+jsonObj[0].lastname+" "+jsonObj[0].phonenumber+" "+jsonObj[0].userid);
		  $(".username").html(jsonObj[0].firstname);
		  $(".email").html(jsonObj[0].userid);
		  

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
				dataexists = dataexists+1;
				if (dataexists == 2) {
				$(".successmsg").html("You have successfully scheduled your appointment.");
				
				}
				$(".datetime").html(jsonObj.calendarday+" at "+jsonObj.hour+":"+jsonObj.minutes+" "+jsonObj.timestatus);
				$(".discussiontopic").html(jsonObj.servicename);
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
                  <li ><a href="timeslots">Available Timeslots</a></li>
                  <li><a href="insuranceinfo">Insurance Information</a></li>
                  <li><a href="insuranceinfo">Appointment Confirmation<a></li>
                  <li class="active">Appointment Summary</li>
              </ol>
			    <!--  <h3>Finished</h3> -->
              <div class="alert alert-success">
              	<span class="pull-left successmsg"></span>
             	<div class="print pull-right">
             	<input type="button" id="print_button" class="btn btn-success" value="Print Appointment" onclick = "window.print();"/>
                </div>	
              </div>
				<div class="col-lg-6">
                <table class="table table-bordered">
                	<tbody>
                    	<tr>
                        	<td scope="row" class="title-td">Confirmation Number:</td>
                            <td class="finishedconfirmationnumber">#5268785658</td>
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
	<script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   	<script>
 

</body>
</html>
