<style>
/*added search company*/
#companyResult{
  z-index: 99;
  position: absolute;
  background-color: #FFFFFF;
  height: 200px !important;
  overflow: scroll;
  min-width: 250px !important;
  border: 1px solid #3D3D3D;
}

#companyResult tr:hover{
  background-color: #316AC5 !important;
  color: #ffffff !important;
}

#companyResult tr:hover{
  cursor: pointer;
}

#companyResult td{
  padding: 5px;
  width: 100%;
}

#companyResult tr{
  border-bottom: 1px solid #3D3D3D;
  width: 100%;
}
</style>

<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
var session = "<?php echo $sessionexists ?>";
var userlogged = "<?php echo $user ?>";
$("#confnumber").val("<?php echo $confnumber ?>");
$("#loggeduserid").val(userlogged);
$( '#companyResult' ).css('display','none');

if((session != "") && ( session == userlogged)) {

$("#loginformdata").css('display','none');
$("#reviewform").css('display','block');
}
$("#userid").val(userlogged);

});

function validateinputs() {
var name = $("#userid").val();
var pwd = $("#pwd").val();

if((name == "") && (pwd == "") ) {
  $(".erromsg").css('display','block');
  $(".errormessage").html("Please fill details");
  return false;
}
return true;
}

function validateRegisterInputs() {
var email = $(".regemail").val();
var phoneno = $(".regphoneno").val();
var pwd = $(".regpwd").val();
var confpwd = $(".regconfpwd").val();

if((email != "") && (pwd != "") && (phoneno != "") && (confpwd != "") ) {
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
if(data == "fail") {
$(".regerromsg").css('display','block');
  $(".regerrormessage").html("User details are not stored");
return false;
}
document.getElementById("registrationform").action= "manageappointments";
document.getElementById("registrationform").submit();
return true;




}
function authenticate() {

$.ajax({
                url: 'reviewFormAuthenticate' ,
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
$("#loggeduserid").val($("#userid").val());
$("#loginformdata").css('display','none');
$("#reviewform").css('display','block');
//edited: added
$.ajax({
  url: 'getAllCompanyNames' ,
  type :'POST',
  success: listCompanies,
  failure: listCompanies,
  cache: true
}); 

//$("#loggedinuser").html($("#userid").val());
//document.getElementById("loginform").action= "manageappointments";
//document.getElementById("loginform").submit();

return true;
}

function listCompanies( data ){
  var dataParse = jQuery.parseJSON(data);
  $( '.company' ).keyup( function( event ){
    $( '#companyResult' ).empty();
    searchCompany( $( this ).val(), dataParse );
    if( $( '#companyResult tr' ).size() > 0 ){
      $( '#companyResult tr' ).each(function(){
        $( this ).click(function(){
          var col = $( this ).find( 'td' );
          $( '.company' ).val( col.text() );
          $( '#companyResult' ).empty();
          $( '#companyResult' ).css('display','none');
        });
      });
    }
  });
}

function searchCompany( companyName, data ){
  var company = companyName.toUpperCase();
  $.each( data, function(key,value){
    var companyNameData = value.company_name.toUpperCase();
    if( companyNameData.match( new RegExp( company ) ) ){
      $( '#companyResult' ).append("<tr><td>"+value.company_name+"</td></tr>");
      $( '#companyResult' ).css("display","block");
    }
  });
}

function ratingsTab(id) {

var ratingvalue = 1;
if($("#"+id).attr("src").indexOf("review_star_off_12") > 0) {
	
	 
     var url = "<?php echo base_url() ; ?>images/review_star_on_12.png";
	 var limit = parseInt($("#"+id).attr("alt"));
	 var imgid = "star";
	 for(var i=1;i<=limit;i++){
     $("#star"+i).attr("src",url);
	 $("#ratingValues").val(limit);
	 }
	 
} else  {
	
     var url = "<?php echo base_url() ; ?>images/review_star_off_12.png";
	 var limit = parseInt($("#"+id).attr("alt"));
	 var imgid = "star";
	 for(var i=5;i>limit;i--){
      $("#star"+i).attr("src",url);
	 $("#ratingValues").val(limit);
	 }
	 
	 }
}

function submitreviewform() {

if (($("#loggedinuser").val() != "") && ($("#headline").val() != "") && ($("#comment").val() != "") && ($("#company").val() != "") ) {
if(($("#headline").val().split(" ").length <= 10) && ($("#comment").val().length >= 100)) {
$.ajax({
                url: 'submitReviews' ,
				data: "bookedby="+$("#loggedinuser").val()+"&rating="+$("#ratingValues").val()+"&reviewtitle="+$("#headline").val()+"&reviewdiscription="+$("#comment").val()+"&userid="+$("#loggeduserid").val()+"&confnumber="+$("#confnumber").val()+"&company="+$("#company").val(),
				type :'POST',
                success: function(msg) {
				     alert(msg);
				  },
                failure: function(msg) {alert(msg)},
                cache: true
								
            });	
			
	resetReviewForm();
} else {
   alert(" Make sure Review title and Review body lengths should match to given criteria");
}
} else {
alert("please fill details");

}
}

function resetReviewForm() {


     var url = "<?php echo base_url() ; ?>images/review_star_off_12.png";
	 var imgid = "star";
	 for(var i=1;i<=5;i++){
      $("#star"+i).attr("src",url);
	 $("#ratingValues").val("0");
	 }
	 $("#loggedinuser").val("");
	 $("#headline").val("");
	 $("#comment").val("");

}

function searchKeyPressRegistration(event) {

if(event.keyCode == 13) {
if((validateinputs()) && (authenticate())) {
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
        	<div class="counselor" id="loginformdata" style="display:block">
            	<h2>Login</h2><br>
                <form class="form-horizontal"  role="form" id="loginform" method="post" name="login">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">User Id</label>
    <div class="col-sm-7">
       <input type="email" name="username" class="form-control" id="userid" placeholder="User Id">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-7">
     <input type="password"  onkeypress="return searchKeyPressRegistration(event)" name = "password" class="form-control" id="pwd" placeholder="Password">
    </div>
  </div>
  <span id="loginError"> </span>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me &nbsp; &nbsp; <a href="forgotpassword">Forgot Password</a>
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
			<div id="reviewform" style="display:none">
			<h2>Review Form</h2><br>
			<br><br>
			<table id="reviewTable" width="50%" align="center" cellpadding = "10" cellspacing = "20" >
                                        <tbody>
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Service Rating</td>
                                                <td valign="top" style="cursor:pointer"class="writeReviewStars">
													<input type="hidden" id="ratingValues" value="0" class="ratingValues" name="ratingValues">
                                                    <img alt="1" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star1">
                                                    <img alt="2" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star2">
                                                    <img alt="3" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star3">
                                                    <img alt="4" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star4">
                                                    <img alt="5" onclick = "ratingsTab(this.id)" src="<?php echo base_url() ; ?>images/review_star_off_12.png" id="star5">
                                                </td>
                                                <td></td>
                                            </tr>
											<input type="hidden" id="confnumber" value = "" />
											<input type="hidden" id="loggeduserid" value= "" />
                                            <!-- edited added field -->
                                            <tr>
                                                <td valign="top" class="selectCompanyfield">Company</td>
                                                <td valign="top" class="selectCompanyInput"><input type="text" maxlength="100" id="company" value="" name="company" class="company"><br /><table id='companyResult'></table></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Author name</td>
                                                <td valign="top" class="writeReviewInput"><input id="loggedinuser" type="text" value=""></input></td>
                                                <td valign="top" id="writeReviewOtherName">
<input type="text" style="display: none;" id="displayNameOther" value="" name="displayNameOther" class="displayNameOther writeReviewFormMsg" disabled="disabled">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="writeReviewfield">Review title</td>
                                                <td valign="top" class="writeReviewInput"><input type="text" maxlength="100" id="headline" value="" name="headline" class="headline">

                                                </td><td valign="top"><p class="writeReviewFormMsg">Please limit to 10 words</p></td>
                                            </tr>
                                            <tr id="writeReviewLargeRow">
                                                <td valign="top" class="writeReviewfield">Review body</td>
                                                <td valign="top" class="writeReviewInput"><textarea id="comment" name="comment" value="" class="comment"></textarea>

                                                </td><td valign="top"><p id="commentMessage" class="writeReviewFormMsg">Minimum 100 characters required.</p></td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><span class="submit"><button onclick="submitreviewform()">Submit</button></span></td>
                                                <td></td>
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
	
   	<script>
 

</body>
</html>
