<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>


<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>





<script type="text/javascript">


function validateinputs() {


var name = $("#userid").val();


var pwd = $("#pwd").val();


if((name == "") || (pwd == "") ) {


  $(".erromsg").css('display','block');


  $(".errormessage").html("Please fill details");


  return false;


}


return true;


}





function validateEmailAndPwd(email,phone) {


		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;


	    if (filter.test(email)) {


		    var phonefilter = /^[0-9]+$/;


			if (phonefilter.test(phone)) {


	        return true;


		   } else {


		   return false;


		   }


	    }


	    else {


	        return false;


	    }


}











function validateRegisterInputs() {


var email = $(".regemail").val();


var phoneno = $(".regphoneno").val();


var pwd = $(".regpwd").val();


var confpwd = $(".regconfpwd").val();





if((email != "") && (pwd != "") && (phoneno != "") && (confpwd != "") ) {





		var returnvalue = validateEmailAndPwd(email,phoneno);


        if(returnvalue == true) {


			if(pwd != confpwd) {


			   $(".regerromsg").css('display','block');


				$(".regerrormessage").html("password and confirm password should be same");


				return false;


			} else {


			var pattern = /^[a-zA-Z0-9]+$/;


			if ((pattern.test(pwd)) && (pattern.test(confpwd)) && (pwd.length >= 7) && (confpwd.length >= 7)) {


		            return true;


		        } else {


				  $(".regerromsg").css('display','block');


				     $(".regerrormessage").html("password and confirm password should be alpha numeric and length should be greater than seven");


					return false;


				}


			}


			return true;


		} else {


		    $(".regerromsg").css('display','block');


			$(".regerrormessage").html("Please enter valid details");


	        return false;


         }


  return true;


  


} else {


  $(".regerromsg").css('display','block');


  $(".regerrormessage").html("Please fill details");


  return false;


}


return true;


}





function registerDetails() {





if ($(".regpwd").val() == $(".regconfpwd").val() ) {


$.ajax({


                url: 'registerDetails' ,


				data: "email="+$(".regemail").val()+"&password="+$(".regpwd").val()+"&confpwd="+$(".regconfpwd").val()+"&phoneno="+$(".regphoneno").val(),


				type :'POST',


                success: displayAppointments,


                failure: displayAppointments,


                dataType: 'text',


                cache: true


								


            });	


} else {


$(".regerromsg").css('display','block');


  $(".regerrormessage").html("Password and ConfirmPassword should be same");


}


}





function displayAppointments(data) {


if(data != "success") {


$(".regerromsg").css('display','block');


  $(".regerrormessage").html(data);


return false;


}


// edited, redirect changed on user register
// document.getElementById("registrationform").action= "manageappointments";
document.getElementById("registrationform").action= "searchdietitian";

document.getElementById("registrationform").submit();


return true;














}


function authenticate() {





$.ajax({


                url: 'authenticateuser' ,


				data: "username="+$("#userid").val()+"&password="+$("#pwd").val(),


				type :'POST',


                success: displayCategoryList,


                failure: displayCategoryList,


                dataType: 'text',


                cache: true


								


            });	





}


function displayCategoryList(data) {





if(data == "fail") {


$(".erromsg").css('display','block');


  $(".errormessage").html("Invalid username or password");


return false;


}

// edited, redirect changed on user login
// document.getElementById("loginform").action= "manageappointments";
document.getElementById("loginform").action= "searchdietitian";


document.getElementById("loginform").submit();





return true;


}





function searchKeyPress(event) {








if(event.keyCode == 13) {


if((validateinputs()) && (authenticate())) {


return true;


} else {


return false;


}


}


}





function searchKeyPressRegistration(event) {





if(event.keyCode == 13) {


if((validateRegisterInputs()) && (registerDetails())) {


return true;


} else {


return false;


}


}


}








</script>


<header>


    		<div class="container">


            	<h1 class="logo"><img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>


                <nav class="pull-right">


                	<ul class="nav nav-pills">


                    	<!-- <li><a href="categories.html">Categories</a></li>


                        <li><a href="services.html">Services</a></li>


                        <li><a href="dietitian.html">Dietitian and Timings</a></li>


                        <li><a href="#">Login</a></li> -->


                    </ul>


                </nav>


            </div>


        </header>


	<!-- END HEADRT TAG -->


    


    <!-- START MAIN CONTENT -->


    	<div class="container content">


        	<div class="col-lg-6">


            	<h2>Login</h2><br>


                <form class="form-horizontal"  role="form" id="loginform" method="post" name="login">


  <div class="form-group">


    <label for="inputEmail3" class="col-sm-2 control-label">User Id</label>


    <div class="col-sm-7">


       <input type="email" onkeypress="return searchKeyPress(event)" name="username" class="form-control" id="userid" placeholder="User Id">


    </div>


  </div>


  <div class="form-group">


    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>


    <div class="col-sm-7">


     <input type="password" onkeypress="return searchKeyPress(event)"  name = "password" class="form-control" id="pwd" placeholder="Password">


    </div>


  </div>


  <span id="loginError"> </span>


  <div class="form-group">


    <div class="col-sm-offset-2 col-sm-10">


      <div class="checkbox">


        <label>


          <input type="checkbox"> Remember me  &nbsp; &nbsp; <a href="forgotpassword">Forgot Password</a>


        </label>


      </div>


    </div>


  </div>


  <div class="form-group erromsg" style="display:<?php echo $logindisplay ?>">


    <div class="col-sm-offset-2 col-sm-10">


     <font class ="errormessage" color="red"> <?php echo $erromsg; ?> </font>


    </div>


  </div>


  <div class="form-group ">


    <div class="col-sm-offset-2 col-sm-10">


      <button type="button" onclick ="return (validateinputs() && authenticate())"  id="loginbutton" class="btn btn-primary">Sign in</button>


    </div>


  </div>


</form>





            </div>


         





<div class="col-lg-6 reg">


            	<h2>Registration</h2>


                   <form class="form-horizontal" id="registrationform" method="post" role="form">


                  <div class="form-group">


                    <label for="inputEmail3" class="col-sm-2 control-label" style="margin-left: -23px; padding-left: 15px;">Email <span>*</span></label>


                    <div class="col-sm-7">


                      <input type="email" onkeypress="return searchKeyPressRegistration(event)" class="form-control regemail" id="inputEmail3" placeholder="Email" style="margin-left: 71px;">


                    </div>


                  </div>


                  <div class="form-group">


                    <label for="inputEmail3" class="col-sm-2 control-label" style="width: 95px;">Phone No <span>*</span></label>


                    <div class="col-sm-7">


                      <input type="text" maxlength="10" size="10" onkeypress="return searchKeyPressRegistration(event)" class="form-control regphoneno" id="inputEmail3" placeholder="Phone Number" style="margin-left: 49px;">


                    </div>


                  </div>


                  <div class="form-group">


                    <label for="inputPassword3" class="col-sm-2 control-label">Password<span>*</span></label>


                    <div class="col-sm-7">


                      <input type="password" onkeypress="return searchKeyPressRegistration(event)" class="form-control regpwd" id="inputPassword3" placeholder="Password" style="margin-left: 49px;">


                    </div>


                  </div>


                  <div class="form-group">


                    <label for="inputPassword3" class="col-sm-2 control-label" style="padding-left: 0px; width: 144px; padding-right: 0px; margin-left: -15px; margin-right: 15px;">Confirm Password<span>*</span></label>


                    <div class="col-sm-7">


                      <input type="password" onkeypress="return searchKeyPressRegistration(event)" class="form-control regconfpwd" id="inputPassword3" placeholder="Confirm Password" >


                    </div>


                  </div>


                  <div class="form-group regerromsg" style="display:<?php echo $reglogindisplay ?>">


    <div class="col-sm-offset-2 col-sm-10">


     <font class ="regerrormessage" color="red"> <?php echo $regerromsg; ?> </font>


    </div>


  </div>


				  


				  


                  <div class="form-group">


                    <div class="col-sm-offset-2 col-sm-10">


                     <a href="javascript:void(0)" onclick = "return (validateRegisterInputs() && registerDetails())" class="btn btn-primary" style="margin-left:50px;">Create an Account</a>


                    </div>


                  </div>


                </form>


                


                


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


