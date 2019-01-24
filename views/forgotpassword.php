<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>


<script type="text/javascript">
function validateinputs() {
var name = $("#userid").val();
//var pwd = $("#pwd").val();

if((name == "")) {
  $(".erromsg").css('display','block');
  $(".errormessage").html("Please fill details");
  return false;
}
return true;
}

function authenticate() {

$.ajax({
                url: 'forgotpasswordsend' ,
				data: "username="+$("#userid").val(),
				type :'POST',
                success: forgotpasswordsend,
                failure: forgotpasswordsend,
                dataType: 'json',
                cache: true
								
            });	

}

function forgotpasswordsend(data) {
if(typeof data != 'undefined'){
		var jsonObj = data;
		if (jsonObj.length != 0 ) {
		$(".erromsg").css('display','block');
       $(".errormessage").html('Password is sent to your mail.');
		
		
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
            	<h2>Forgot Password</h2><br>
                <form class="form-horizontal"  role="form" id="forgotpassword" method="post" name="forgotpassword">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">User Id</label>
    <div class="col-sm-7">
       <input type="email" name="username" class="form-control" id="userid" placeholder="User Id">
    </div>
  </div>
    <div class="form-group erromsg" style="display:<?php echo $logindisplay ?>">
    <div class="col-sm-offset-2 col-sm-10">
     <font class ="errormessage" color="red"> <?php echo $erromsg; ?> </font>
    </div>
  </div>
  <div class="form-group ">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" onclick ="return (validateinputs() && authenticate())"  id="loginbutton" class="btn btn-primary">Submit</button>
	  <a href="userlogin" id="loginbutton" class="btn btn-success">Go To Login Page</a>
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
