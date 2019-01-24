<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Edit Your Profile | Familyfood Dashboard</title>
<!-- meta & scripts -->
<!-- Favicon -->
<link rel="icon" type="image/ico" href="../../../favicon.ico"/>
<link rel="apple-touch-icon" sizes="57x57" href="../../../apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../../../apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../../../apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../../../apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../../../apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../../../apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../../../apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../../../apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../../../apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="../../../android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../../../favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../../favicon-16x16.png">

<!-- Stylesheets -->
<link rel="stylesheet" href="../assets/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/assets/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="../assets/assets/css/site.min.css">
<link rel="stylesheet" href="../assets/assets/vendor/animsition/animsition.css">
<link rel="stylesheet" href="../assets/assets/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="../assets/assets/vendor/switchery/switchery.css">
<link rel="stylesheet" href="../assets/assets/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="../assets/assets/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="../assets/assets/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="../assets/assets/css/custom.css">

<!-- Plugin -->
<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css">
<link rel="stylesheet" href="../assets/assets/vendor/jquery-strength/jquery-strength.css">
<link rel="stylesheet" href="../assets/assets/vendor/formvalidation/formValidation.css">
<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<!-- Fonts -->
<script src="https://use.fontawesome.com/286c52578e.js"></script>
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

<!--[if lt IE 9]>
    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

<!--[if lt IE 10]>
    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

<!-- Scripts -->
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
    Breakpoints();
</script>
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

<!-- start header menu -->
<?php include("inc_dietitian_menu_header.php"); ?>
<!-- end header menu --> 
<!-- start left menu -->
<?php include("inc_dietitian_left_menu.php"); ?>
<!-- end left menu --> 
<!--div class="site-gridmenu">
<ul>
<li> <a href="apps/mailbox/mailbox.html"> <i class="icon wb-envelope"></i> <span>Mailbox</span> </a> </li>
<li> <a href="apps/calendar/calendar.html"> <i class="icon wb-calendar"></i> <span>Calendar</span> </a> </li>
<li> <a href="apps/contacts/contacts.html"> <i class="icon wb-user"></i> <span>Contacts</span> </a> </li>
<li> <a href="apps/media/overview.html"> <i class="icon wb-camera"></i> <span>Media</span> </a> </li>
<li> <a href="apps/documents/categories.html"> <i class="icon wb-order"></i> <span>Documents</span> </a> </li>
<li> <a href="apps/projects/projects.html"> <i class="icon wb-image"></i> <span>Project</span> </a> </li>
<li> <a href="apps/forum/forum.html"> <i class="icon wb-chat-group"></i> <span>Forum</span> </a> </li>
<li> <a href="index.php"> <i class="icon wb-dashboard"></i> <span>Dashboard</span> </a> </li>
</ul>
</div--> 

<!-- Page -->
<div class="page animsition">
<div class="page-content">

<div class="page-header">
<!--h1 class="page-title">&nbsp;</h1-->
</div>

<div class="panel panel-bordered">
<div class="panel-heading">
<h3 class="panel-title">Edit Profile</h3>
</div>
<div class="panel-body">
<?php
$maleChecked = '';
$femaleChecked = '';
if( $edituser['gender'] == "Female" ){
  $femaleChecked = 'checked';
}else if( $edituser['gender'] == "Male" ){
  $maleChecked = 'checked';
}
if( $conuser != "" ){
  $fname = $edituser['first_name'];
  $lname = $edituser['last_name'];
  $phone = $edituser['phone'];
  $email = $edituser['email'];
}else{
  $fname = $edituser['firstname'];
  $lname = $edituser['lastname'];
  $phone = $edituser['phonenumber'];
  $email = $edituser['userid'];
}
?>
<div class="col-md-12">
<form autocomplete="off">
<div class="form-group row">
<div class="col-sm-6">
<h4>Account Details</h4>
<label class="control-label" for="inputBasicFirstName">First Name</label>
<input type="text" class="form-control" id="firstname" name="inputFirstName" value="<?php echo $fname ?>" placeholder="First Name" autocomplete="off" />
</div>
<div class="col-sm-6">
<h4>&nbsp;</h4>
<label class="control-label" for="inputBasicLastName">Last Name</label>
<input type="text" class="form-control" id="lastname" name="inputLastName" value="<?php echo $lname ?>" placeholder="Last Name" autocomplete="off" />
</div>
</div>
<div class="form-group">
<label class="control-label">Gender</label>
<div>
<div class="radio-custom radio-default radio-inline">
<input type="radio" id="genderMale" name="inputGender" <?php echo $maleChecked?> />
<label for="inputBasicMale">Male</label>
</div>
<div class="radio-custom radio-default radio-inline">
<input type="radio" id="genderFemale" name="inputGender" <?php echo $femaleChecked?> />
<label for="inputBasicFemale">Female</label>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-md-6">
<label for="birthday">Date of Birth</label>
<input type="text" id="birthdate" maxlength="11" class="form-control" name="birthday" value="<?php echo $edituser['birthday']; ?>" placeholder="1999/Jun/17" required="" data-fv-field="birthday">
</div>

<div class="col-md-6">
<label for="type_phone">Phone number</label>
<input type="text" class="form-control" id="phoneno" ame="type_phone" value="<?php echo $phone; ?>" placeholder="(XXX) XXXX XXX" data-fv-field="type_phone">
</div>

</div>
<div class="form-group">
<label class="control-label" for="inputAddress">Address</label>
<input type="text" class="form-control" id="address" value="<?php echo $edituser['address']; ?>" name="inputAddress" placeholder="Address" autocomplete="off" />
</div>
<input type="hidden" id="userid" value="<?php echo $email; ?>">
<div class="form-group">
<button type="button" onclick="update()" class="btn btn-primary">Update Profile</button> <!--a href="forgotpassword" class="btn btn-info" role="button">Forgot Password?</a-->
</div>
</form>
</div>

</div>



</div>

<!--div class="panel panel-bordered">
<div class="panel-heading">
<h3 class="panel-title">Edit Security Details</h3>
</div>
<div class="panel-body">
<div class="col-md-6">
<form>
<div class="form-group">
<label class="control-label margin-bottom-15" for="inputPassword2">Password</label>
<input type="password"
class="password-strength-example2 form-control"
id="pass"
name="vMinLength"
data-plugin="strength"
data-show-toggle="true"
data-fv-field="password"
data-fv-stringlength="true"
data-fv-stringlength-min="8"
data-fv-notempty-message="This is required"
data-fv-stringlength-message="please enter more than 8 length"
placeholder="minlength = 8"
required  />

<p>&nbsp;</p>																							
</div>
<div class="form-group">
<button type="button" onclick="checkPwd()" class="btn btn-primary">Update Password</button>
</div>
</form>
</div>

<div class="col-md-6">
<div class="alert alert-icon alert-info" role="alert">
<i class="icon wb-info" aria-hidden="true"></i>
<p>Your previous 3 passwords may not be re-used.</p>
<p>All passwords must be changed every 90 days and must contain a minimum of eight (8) characters..</p>
<p>Allowed special characters: <strong>!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~</strong></p>
<p>Passwords must also include at least one (1) uppercase letter.</p>
</div>
</div>

</div>

</div-->
</div>

</div>
</div>
<!-- End Page --> 

<!-- start footer -->
<?php include("inc_footer.php"); ?>
<!-- end footer --> 
<!-- Core  --> 
<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 
<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 

<!-- Plugins --> 
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/jquery-strength/jquery-strength.min.js"></script>
<script src="../assets/assets/vendor/formvalidation/formValidation.min.js"></script>
<script src="../assets/assets/vendor/formvalidation/framework/bootstrap.min.js"></script>

<!-- Scripts --> 
<script src="../assets/assets/js/core.js"></script> 
<script src="../assets/assets/js/site.js"></script> 
<script src="../assets/assets/js/sections/menu.js"></script> 
<script src="../assets/assets/js/sections/menubar.js"></script> 
<script src="../assets/assets/js/sections/sidebar.js"></script> 
<script src="../assets/assets/js/configs/config-colors.js"></script> 
<script src="../assets/assets/js/configs/config-tour.js"></script> 
<script src="../assets/assets/js/components/asscrollable.js"></script> 
<script src="../assets/assets/js/components/animsition.js"></script> 
<script src="../assets/assets/js/components/slidepanel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script>
<script src="../assets/assets/js/components/jquery-strength.js"></script>
 
<script>
//functions
function update(){
  if( $( '#genderMale' ).prop('checked') ){
    gender = "Male";
  }else{
    gender = "Female";
  }
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url:'updateprofile',
    data: {
      'firstname': $( '#firstname').val(),
      'lastname': $( '#lastname').val(),
      'gender': gender,
      'birthdate': $( '#birthdate').val(),
      'phoneno': $( '#phoneno').val(),
      'address': $( '#address').val(),
    },
    success: function( data ){
      alert( data );
    }
  });
}

$( '#birthdate' ).keyup(function(){
  if( $( this ).val().length == 4 ){
    $( this ).val( $( this ).val() + "/" );
  }else if( $( this ).val().length == 8 && $( this ).length < 5 ){
    $( this ).val( $( this ).val() + "/" );
  }
		
});



//end
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);

</script>

</body>
</html>