<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<!-- START HEADRT TAG -->


<script type="text/javascript" >

function validatePasswords() {
var oldpassword = document.getElementById("oldpassword").value;
var newpassword = document.getElementById("newpassword").value;
var confirmpassword = document.getElementById("confirmpassword").value;

       if((oldpassword.length >= 7) && (newpassword.length >= 7) && (confirmpassword.length >= 7)) {
		        var pattern = /^[a-zA-Z0-9]+$/;
		        if ((pattern.test(oldpassword)) && (pattern.test(newpassword)) && (pattern.test(confirmpassword))) {
		            return true;
		        } else {
		            alert("Please make sure that all passwords should contain alpha numeric values!");
					document.getElementById("updatepasswords").reset();
		            return false;
		        }
		} else {
		alert("passwords length should not be less than seven characters");
		document.getElementById("updatepasswords").reset();
		return false;
		}
		
		
}



</script>

<header>
    		<div class="container">
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills">
                    	<?php if ( $conuser == "")  {  ?>
                    	<li><a href="searchdietitian">New Appointment</a></li>
                        <li><a href="manageappointments">Manage Appointments</a></li>
						<li><a href="userreviews">Reviews</a></li>
						<?php }  else {?>
						<?php if($fdietitian != "") {  ?>
                       <li><a href="searchdietitian">New Appointment</a></li>
					    <li><a href="viewappointments">View Appointments</a></li>
							<?php }  else {?>
				        <li><a href="viewappointments">View Appointments</a></li>
						<?php } ?>
				<?php } ?>
                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $edituser; $userforchangepwd = $edituser; ?> <span class="caret"></span>
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
        	
            <div class="col-lg-6 reg">
            	<h2>Change Password</h2>
                   <form class="form-horizontal" onsubmit="return validatePasswords()" method="post" action="updatepassword" id="updatepasswords"  role="form">
				   <input type="text" name="user" value="<?php echo $userforchangepwd ; ?>" style="display: none" />
                  <div class="form-group">
                    <label for="inputoldpasswd3" class="col-sm-2 control-label" style="margin-left: -57px; padding-left: 24px; left: 0px; width: 169px;">Old Password  </label>
                    <div class="col-sm-7">
                      <input type="password" name = "oldpassword" class="form-control" id="oldpassword" placeholder="Old Password" style="margin-left: 47px;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputnewpasswd3" class="col-sm-2 control-label" style="margin-left: -51px; padding-left: 24px; left: 0px; width: 169px;">New Password </label>
                    <div class="col-sm-7">
                      <input type="password" name = "newpassword" class="form-control" id="newpassword" placeholder="New Password" style="margin-left: 41px; padding-left: 10px; padding-right: 9px; border-right-width: 1px; margin-right: 3px;">
                    </div>
                  </div>
				   <div class="form-group">
                    <label for="inputconfirmpasswd3" class="col-sm-2 control-label" style="margin-left: -30px; padding-left: 24px; left: 0px; width: 169px;">Confirm Password </label>
                    <div class="col-sm-7">
                      <input type="password" name = "confirmpassword" class="form-control" id="confirmpassword" placeholder="Confirm Password" style="margin-left: 21px;">
                    </div>
                  </div>
				  <div class="form-group" style="display:<?php echo $profilechangepassword ?>">
    <div class="col-sm-offset-2 col-sm-10">
     <font color="<?php echo $color ;?>"> <?php echo $changepassword; ?> </font>
    </div>
  </div>
				   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" style="margin-left: 71px; margin-top: 14px;">Submit</button>
                    </div>
                  </div>
                </form>
                
                
            </div>
             
        </div>
    
    <!-- END MAIN CONTENT -->
    	
    
    <!-- START FOOTER TAG  --> 
    <footer>
		<div class="container">
        	<p>? 2013 Family Food, LLC. All Rights Reserved.</p>
        </div>    
    </footer>	
    <!-- END FOOTER TAG -->
    
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
   	<script>
 

</body>
</html>
