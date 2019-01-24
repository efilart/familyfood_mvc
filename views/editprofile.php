<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<!-- START HEADRT TAG -->

<script type="text/javascript">
var yearhtml = "";
var monthhtml = "";
var dayshtml = "";
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
$(document).ready(function() {
var date = new Date();
var year = date.getFullYear(); 

	for(var i=90;i > 0; i--) {
		yearhtml = yearhtml + '<option value="'+year+'">'+year+'</option>';
		year = year -1;
	}

 $("#yearselection").html(yearhtml);
 var monthname = date.getMonth();
 var numdays = getNumberofDays(month[monthname])
 
 for(var i = 1; i<= numdays ; i++) {
		dayshtml = dayshtml + '<option value="'+i+'">'+i+'</option>';
  } 
$("#daysselection").html(dayshtml);

$.ajax({
                url:'getUserDetailsForEdit' ,
				type :'POST',
				data: "user_id=<?php echo $edituser ?>",
				success: getUserDetailsForEdit,
				failure: getUserDetailsForEdit,
				dataType: 'json',
				cache: true
								
            });
});

function getUserDetailsForEdit(data) {

if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
        if (jsonObj[0].userid != "") {
		 $(".editProfileFname").val(jsonObj[0].firstname);
		  $(".editProfileLname").val(jsonObj[0].lastname);
		  $(".editProfilePhonenumber").val(jsonObj[0].phonenumber);
		  $(".editProfileEmail").val(jsonObj[0].userid);
		  // $(".editProfileGender").val(jsonObj[0].gender);
		  $(".editProfileAddress").val(jsonObj[0].address);
		} 
		
		if((jsonObj[0].email != "")  && (jsonObj[0].email != undefined)) {
		 $(".editProfileFname").val(jsonObj[0].first_name);
		  $(".editProfileLname").val(jsonObj[0].last_name);
		  $(".editProfilePhonenumber").val(jsonObj[0].phone);
		  $(".editProfileEmail").val(jsonObj[0].email);
		  // $(".editProfileGender").val(jsonObj[0].gender);
		  $(".editProfileAddress").val(jsonObj[0].address);
		
		} 
		
		  var dateOfBirth = jsonObj[0].birthday.split("\/");
		  
		  for(i =0 ; i<90; i++) {
			   if (document.getElementById("yearselection").options[i].text == dateOfBirth[0]) {
			     document.getElementById("yearselection").options[i].selected = true;
				 break;
			   }
		  }
		  
		  for(i =0 ; i<12; i++) {
			   if (document.getElementById("monthselection").options[i].value == dateOfBirth[1]) {
			     document.getElementById("monthselection").options[i].selected = true;
				 break;
			   }
		  }
		  
		  for(i =0 ; i<30; i++) {
			   if (document.getElementById("daysselection").options[i].value == dateOfBirth[2]) {
			     document.getElementById("daysselection").options[i].selected = true;
				 break;
			   }
		  }
		  for(i=0;i<3;i++) {
		   if (document.getElementById("editProfileGender").options[i].value == jsonObj[0].gender) {
			     document.getElementById("editProfileGender").options[i].selected = true;
				 break;
			   }
		  
		  }
			
			
		}
	}

}


function checkfeb() {
dayshtml = "";
var month = $("#monthselection").val();
var j = getNumberofDays(month);

for(var i = 1; i<= j ; i++) {
		dayshtml = dayshtml + '<option value="'+i+'">'+i+'</option>';
  } 
$("#daysselection").html(dayshtml);

}

function getNumberofDays(month) {
var j = 30;
var year=$("#yearselection").val();
		switch(month) {
				case 'Jan':
				          j = 31;
						 break;
				case 'Feb':
							if ( year%400 == 0){
							j=29;}
							else if ( year%100 == 0){
							j=28;}  
							else if ( year%4 == 0 ){
							j=29;}
							else{
							j=28;}  
				         // if((year%400)==0 ||(year%4)==0){
						  //  j=29;
						//	}
						//	else{
						//	    j=28;
						//		}
								break;
				case 'Mar':
						 j=31;
						 break;
				case 'Apr':
						j=30;
						 break;
				case 'May':
						 j=31;
						 break;
				case 'Jun':
						 j=30;
						 break;
				case 'Jul':
						 j=31;
						 break;
				case 'Aug':
						 j=31;
						 break;
				case 'Sep':
						j=30;
						 break;
				case 'Oct':
						 j=31;
						 break;
				case 'Nov':
						 j=30;
						 break;
				case 'Dec':
						 j=31;
						 break;

		}
return j;
} 

function validateForm() {
if(($(".editProfileFname").val() != "") && ($(".editProfileLname").val() != "") && ($(".editProfileGender").val() != "") && ($(".editProfilePhonenumber").val() != "") && ($(".editProfileAddress").val() != "")) {
return true;
} else {
$("#divdisplayErrorMsg").css("display","block");
$("#displayErrorMsg").html('<font color="red"> Please fill details </font>');
}
return false;


}

</script>
    	<header>
    		<div class="container">
            	<h1 class="logo"><a href="#"> <img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
                <nav class="pull-right">
                	<ul class="nav nav-pills">
				<?php if ( $conuser == "")  {?>
                    	<li><a href="searchdietitian">New Appointment</a></li>
                        <li><a href="manageappointments">Manage Appointments</a></li>
						<li><a href="userreviews">Reviews</a></li>
				<?php }  else {?>
						<?php if($fdietitian != "") { ?>
                       <li><a href="searchdietitian">New Appointment</a></li>
					   <li><a href="viewappointments">View Appointments</a></li>
							<?php }  else {?>
				        <li><a href="viewappointments">View Appointments</a></li>
						<?php } ?>
				<?php } ?>
                        <li class="dropdown">
                        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        		<?php echo $edituser ?><span class="caret"></span>
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
            	<h2>Edit Profile</h2>
                   <form class="form-horizontal" onSubmit = "return validateForm()" role="form" method="post" action="updateprofile"  >
                  <div class="form-group">
                    <label for="inputFirstname3" class="col-sm-3 control-label"  style="margin-left: -37px;">First Name </label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control editProfileFname" value="" name="firstname" id="inputfirstname3" placeholder="First Name" style="margin-left: 49px;width: 259px;" size="12" maxlength="15" required="true" pattern="[a-zA-Z]{3,15}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputLastname3" class="col-sm-3 control-label"style="margin-left: -37px;">Last Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control editProfileLname" value="" name="lastname" id="inputlastname3" placeholder="Last Name" style="margin-left: 49px;width: 259px;" size="12" maxlength="15" required="true" pattern="[a-zA-Z]{3,15}">
                    </div>
                  </div>
				   <div class="form-group">
                    <label for="inputGender3" class="col-sm-3 control-label" style="margin-left: -57px;">Gender</label>
                    <div class="col-sm-7" >
					<select class="form-control editProfileGender" id="editProfileGender" name="gender"  style=" margin-left:70px;width: 259px; height:32px;padding-top:7px;padding-left: 6px;padding-right: 6px; padding-bottom: 6px;" ><!--class instead of iclass-->
					    <option value="">Please Select</option>
						<option value="Male" > Male</option>
						<option value="Female" > Female </option>
					</select>                      
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputBirthday" class="col-sm-3 control-label" style="margin-left: -27px;">Date Of Birth</label>
                    <div class="col-sm-7" style="margin-left:40px">
                    <!--<input type="email" class="form-control" id="inputBirthday3" placeholder="Birthday" style="margin-left:63px;"> -->
					<select class="form-control" id="yearselection" name ="year" style=" width: 83px; height: 32px; display:inline-block;padding-left: 2px; padding-right: 2px; padding-bottom: 6px;">
					
					
					</select >
					<select class="form-control" id="monthselection" onchange ="checkfeb()"  name="month" style="margin-left: 0px; width: 83px; height: 32px; padding-left: 6px;display:inline-block; padding-right: 6px; padding-bottom: 6px;">
						<option value="Jan">Jan</option>
						<option value="Feb">Feb</option>
						<option value="Mar">Mar</option>
						<option value="Apr">Apr</option>
						<option value=">May">May</option>
						<option value="Jun">Jun</option>
						<option value="Jul">Jul</option>
						<option value="Aug">Aug</option>
						<option value="Sep">Sep</option>
						<option value="Oct">Oct</option>
						<option value="Nov">Nov</option>
						<option value="Dec">Dec</option>
					</select>
					<select class="form-control" id="daysselection" name="day" style="margin-left: 0px; width: 83px; height: 32px; display:inline-block;padding-left: 6px; padding-right: 6px; padding-bottom: 6px;">
						
					</select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPhoneno3" class="col-sm-3 control-label" style="margin-left: -45px;">Phone No</label>
                    <div class="col-sm-7">
                      <input type="tel" name="phoneno" class="form-control editProfilePhonenumber" value="" id="inputPhoneno3" placeholder="Phone No" style="margin-left: 57px;width: 259px;" size="10" maxlength="10"  required="true" pattern="[0-9]{10}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress3" class="col-sm-3 control-label" style="padding-left: 0px;  padding-right: 0px; margin-left: -69px; margin-right: 15px;">Address</label>
                    <div class="col-sm-7">
                      <textarea name="address" class="form-control editProfileAddress" value=""  id="inputAddress3" placeholder="Address" style="margin-left: 66px;width:259px;" size="80"  required="true"></textarea>
                    </div>
                  </div>
                  <div class="form-group" id="divdisplayErrorMsg" style="display:<?php echo $profiledisplay ?>">
				  <div class="col-sm-offset-2 col-sm-10" style="margin-left:155px;" id="displayErrorMsg" ><!--added margin-->
				  <font color="<?php echo $color; ?>"> <?php echo $profileupdatemsg; ?> </font>
				  </div>
				  </div>
                  <div class="form-group">
				  <div class="col-sm-7">
                   <button type="submit" class="btn btn-success" style="margin-left:153px; margin-top:15px;">Update Changes</button>
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
   	<script>
 

</body>
</html>
