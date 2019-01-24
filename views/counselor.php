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

function counselordetails() {

$.ajax({
                url: 'counselordetails' ,
				data: "username="+$("#userid").val()+"&password="+$("#pwd").val(),
				type :'POST',
                success: searchdietitian,
                failure: searchdietitian,
                dataType: 'text',
                cache: true
								
            });	

}
function searchdietitian(data) {
if(data == "fail") {
$(".erromsg").css('display','block');
  $(".errormessage").html("Invalid username or password");
return false;
}
if(data == "success") {
document.getElementById("loginform").action= "viewappointments";
document.getElementById("loginform").submit();
return true;
}
return false;




}

function searchKeyPress(event) {


if(event.keyCode == 13) {
if((validateinputs()) && (counselordetails())) {
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
        	<div class="counselor">
            	<h2>Dietitian Login</h2><br>
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
     <input type="password" onkeypress="return searchKeyPress(event)" name = "password" class="form-control" id="pwd" placeholder="Password">
    </div>
  </div>
  <span id="loginError"> </span>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me &nbsp; &nbsp; <a href="diettianforgotpassword">Forgot Password</a>
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
      <button type="button" onclick ="return (validateinputs() && counselordetails())"  id="loginbutton" class="btn btn-primary">Sign in</button>
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
