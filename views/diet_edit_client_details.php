<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Edit Client Details | Familyfood Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/select2/select2.css">
<link rel="stylesheet" href="../assets/assets/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="../assets/assets/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="../assets/assets/vendor/footable/footable.core.css">
<link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/vendor/typeahead-js/typeahead.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" href="../assets/assets/vendor/jt-timepicker/jquery-timepicker.css">

<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">
<link rel="stylesheet" href="../assets/assets/fonts/ionicons/ionicons.css">

<!-- Fonts -->

<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"-->

<!--[if lt IE 9]>

    <script src="../assets/assets/vendor/html5shiv/html5shiv.min.js"></script>

    <![endif]-->

<!--[if lt IE 10]>

    <script src="../assets/assets/vendor/media-match/media.match.min.js"></script>

    <script src="../assets/assets/vendor/respond/respond.min.js"></script>

    <![endif]-->

<!-- Scripts -->
<script src="https://use.fontawesome.com/286c52578e.js"></script>
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>

    Breakpoints();

</script>
<style>
.reveal-if-active {
	opacity: 0;
	max-height: 0;
	overflow: hidden;
}
input[type="radio"]:checked ~ .reveal-if-active, input[type="checkbox"]:checked ~ .reveal-if-active {
	opacity: 1;
	max-height: 100px; /* little bit of a magic number :( */
	overflow: visible;
}
.bootstrap-select {
	width: 100% !important;
}
.datepair-wrap {
	position: relative;
	overflow: hidden;
}
.input-daterange-wrap {
	float: left;
}
.input-daterange-to {
	float: left;
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
}

@media (max-width: 1360px) {
.input-daterange-wrap, .input-daterange-to {
	display: block;
	float: none;
}
}
</style>
<script type="text/javascript">
function CheckColors(val){
 var element=document.getElementById('other_insurance');
 if(val=='Health Insurance Company'||val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
</head>

<body class="dashboard site-menubar-unfold" data-auto-menubar="false">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
<!-- start header menu -->
<?php 
if( $usertype == 1 ){
	include("inc_dietitian_menu_header.php"); 
}else if( $usertype == 2 ){
  	include("inc_menu_header.php");  
}else{
  	include("inc_user_menu_header.php");
}
?>
<!-- end header menu --> 
<!-- start left menu -->
<?php 
if( $usertype == 1 ){
	include("inc_dietitian_left_menu.php"); 
}else if( $usertype == 2 ){
	include("inc_left_menu.php");  
}else{
//	include("inc_user_left_menu.php");
include("inc_left_menu.php");
}
?>
<!-- end left menu --> 
<!-- Page -->
<div class="page animsition">
<div class="page-header">
<h3>Client Search</h3>
<div class="input-group col-md-6"> 
<input type="text" class="form-control" value="" name="client_name" placeholder="Search Client" id="client_name" data-fv-field="client_name" >
<span class="input-group-btn">
<button onclick="getUserDetails()" class="btn btn-primary">Load Details<!-- <i class="icon wb-search" aria-hidden="true"></i> --></button>
</span> </div>
</div>
<div class="page-content">
<div class="panel">
<div class="panel-body container-fluid">
<div class="row row-lg">
<div class="col-lg-12">
<form autocomplete="off">
<div class="form-group row pad_bottom">
<div class="col-sm-4">
<label class="control-label" for="fname">First Name</label>
<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off">
</div>
<div class="col-sm-4">
<label class="control-label" for="lname">Last Name</label>
<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" autocomplete="off">
</div>
<div class="col-sm-4">
<label class="control-label">Gender</label>
<select data-plugin="selectpicker" id="gender" name="gender" class="bs-select-hidden">
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>

<div class="form-group row">
<div class="col-sm-4">
<label class="control-label" for="fname">Birthday</label>
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" class="form-control" id="bday" data-plugin="datepicker">
</div>
</div>
<div class="col-sm-4">
<label class="control-label">Work Phone</label>
<div class="input-group input-group-icon"> <span class="input-group-addon"><span class="fa fa-phone" aria-hidden="true"></span></span>
<input type="number" id="workphone" class="form-control" placeholder="Phone">
</div>
</div>
<div class="col-sm-4">
<label class="control-label">Cell Phone</label>
<div class="input-group input-group-icon"> <span class="input-group-addon"><span class="icon wb-mobile" aria-hidden="true"></span></span>
<input type="number" id="cellphone" class="form-control" placeholder="Phone">
</div>
</div>
</div>

<div class="form-group row">
<div class="col-sm-6">
<label class="control-label">Email</label>
<div class="input-group input-group-icon"> <span class="input-group-addon"><span class="icon wb-envelope" aria-hidden="true"></span></span>
<input type="email" id="email" class="form-control" placeholder="Email">
</div>
</div>
<div class="col-sm-6">
<label class="control-label">Address</label>
<textarea class="form-control" id="address" rows="3"></textarea>
</div>
</div>
<div class="form-group row"> 
<!-- div class="col-sm-6">
<label class="control-label">Chosen Date and Time</label>
<div class="input-daterange-wrap">
<div class="input-daterange">
<div class="input-group">
<span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span><input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">
</div>
<div class="input-group">
<span class="input-group-addon"><i class="icon wb-time" aria-hidden="true"></i></span><input type="text" class="form-control datepair-time datepair-start ui-timepicker-input" data-plugin="timepicker" autocomplete="off">
</div>
</div>
</div>
</div> -->
<div class="row">
<div class="col-sm-4">
<label class="control-label">Health Insurance Company</label>
<input type="text" class="form-control" id="insurance_company" placeholder="Personal choice">
<!--<select class="form-control insurance_company" data-plugin="select2" onchange='CheckColors(this.value);'>
<option value="Aetna">Aetna</option>
<option value="AmeriHealth Administrators">AmeriHealth Administrators</option>
<option value="Amerihealth Non-HMO New Jersey">Amerihealth Non-HMO New Jersey</option>
<option value="Amerihealth HMO New Jersey and Delaware">Amerihealth HMO New Jersey and Delaware</option>
<option value="BCBS North Carolina">BCBS North Carolina</option>
<option value="Blue Cross Blue Shield of Pennsylvania ">Blue Cross Blue Shield of Pennsylvania </option>
<option value="CIGNA">CIGNA</option>
<option value="Health Partners">Health Partners</option>
<option value="Highmark BCBS of PA">Highmark BCBS of PA</option>
<option value="Horizon NJ Health">Horizon NJ Health</option>
<option value="Highmark BCBS of NJ">Highmark BCBS of NJ</option>
<option value="Independence Administrators">Independence Administrators</option>
<option value="Independence Blue Cross">Independence Blue Cross</option>
<option value="Keystone Health Plan East">Keystone Health Plan East</option>
<option value="Keystone First">Keystone First</option>
<option value="Medicare Pennsylvania">Medicare Pennsylvania</option>
<option value="United HealthCare">United HealthCare</option>
<option value="others">- Others -</option>
</select>-->
<p>&nbsp;</p>
<input type="text" name="other_insurance" id="other_insurance" class="form-control" placeholder="Other Health Insurance Company" style="display:none;" />
</div>
<div class="col-sm-4">
<label class="control-label">Health Insurance Number</label>
<!-- <input type="text" class="form-control" id="insurace_company" placeholder="Personal choice"> -->
<div class="input-group"> <span class="input-group-addon"><i class="icon ion-pound" aria-hidden="true"></i></span>
<input type="text" class="form-control" id="insuruance_number" placeholder="Health Insurance number">
</div>
</div>
<div class="col-sm-4">
<label class="control-label">Primary Insured</label>

<div>
<div>
<input type="radio" name="choice-insurance" value="1" id="choice-insurance-self">
<label for="choice-insurance-self">Self</label>
<!--div class="reveal-if-active">
<label for="choice-insurance-self">Why? Cats are weird. Respond.</label>
<input type="text" id="choice-insurance-self" name="choice-insurance-self" class="require-if-active" data-require-pair="#choice-insurance-self">
</div-->
</div>

<div>
<input type="radio" name="choice-insurance" value="2" id="choice-insurance-spouse" required>
<label for="choice-insurance-spouse">Spouse</label>
<div class="reveal-if-active">
<!--label for="choice-insurance-spouse">Good call. What's the name of your favorite dog?</label>
<input type="text" id="choice-insurance-spouse" name="choice-insurance-spouse" class="require-if-active" data-require-pair="#choice-insurance-spouse"-->

<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="spouse_fname">First Name</label>
<input type="text" class="form-control" id="spouse_fname" name="spouse_fname" placeholder="First Name" autocomplete="off" />
</div>

<div class="col-sm-6">
<label class="control-label" for="spouse_lname">Last Name</label>
<input type="text" class="form-control" id="spouse_lname" name="spouse_lname" placeholder="Last Name" autocomplete="off" />
</div>

<div class="col-sm-12">
<label class="control-label" for="spouse_bday">Birthday</label>
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" id="spouse_bday" class="form-control" data-plugin="datepicker">
</div>
</div>

</div>


</div>
</div>

<div>
<input type="radio" name="choice-insurance" value="3" id="choice-insurance-child">
<label for="choice-insurance-child">Child</label>
<div class="reveal-if-active">

<div class="form-group row">
<div class="col-sm-6">
<label class="control-label" for="child_fname">First Name</label>
<input type="text" class="form-control" id="child_fname" name="child_fname" placeholder="First Name" autocomplete="off" />
</div>

<div class="col-sm-6">
<label class="control-label" for="child_lname">Last Name</label>
<input type="text" class="form-control" id="child_lname" name="child_lname" placeholder="Last Name" autocomplete="off" />
</div>

<div class="col-sm-12">
<label class="control-label" for="child_bday">Birthday</label>
<div class="input-group"> <span class="input-group-addon"><i class="icon wb-calendar" aria-hidden="true"></i></span>
<input type="text" class="form-control" id="child_bday" data-plugin="datepicker">
</div>
</div>

</div>
</div>
</div>

</div>
<!--h4>Would you like a dollar?</h4>
<div>
<input type="radio" name="choice-dollar" id="choice-dollar">
<label for="choice-dollar">Sure.</label>
<div class="reveal-if-active"> Wouldn't we all. </div>
</div-->
</div>
</div>

</div>

<!-- 
<div class="form-group row">

<div class="col-md-6">
<select data-plugin="selectpicker" id="healthy_weight_desired" class="bs-select-hidden" title='Healthy Weight Desired'>

  <option value="Healthy weight desired">Healthy weight desired</option>
  <option value="Healthy eating">Healthy eating</option>
  <option value="Health concern">Health concern</option>
  <option value="Digestive concern">Digestive concern</option>
  <option value="Food allergy">Food allergy</option>
  <option value="Sports nutrition">Sports nutrition</option>
  <option value="Meal planning ideas">Meal planning ideas</option>
  <option value="Other">Other</option>

</select>
</div>

</div> -->

<div class="form-group row">
<div class="col-md-6">
<button id="save" type="button" class="btn btn-primary">Save</button>
</div>
</div>
</form>
</div>
</div>
</div>
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
<script src="../assets/assets/vendor/select2/select2.min.js"></script> 

<!-- Plugins --> 

<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script> 
<script src="../assets/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script> 
<!--script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.js"></script--> 
<script src="../assets/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script> 
<script src="../assets/assets/vendor/datepair-js/datepair.min.js"></script> 
<script src="../assets/assets/vendor/datepair-js/jquery.datepair.min.js"></script> 
<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script> 
<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script> 

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
<script src="../assets/assets/js/components/bootstrap-select.js"></script> 
<script src="../assets/assets/js/components/select2.js"></script> 
<script src="../assets/assets/js/components/bootstrap-datepicker.js"></script> 
<script src="../assets/assets/js/components/jt-timepicker.js"></script> 
<script src="../assets/assets/js/components/datepair-js.js"></script> 
<script src="../assets/assets/js/components/datepair-js.min.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script> 
<script>
    var FormStuff = {
  
  init: function() {
    this.applyConditionalRequired();
    this.bindUIActions();
  },
  
  bindUIActions: function() {
    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
  },
  
  applyConditionalRequired: function() {
  	
    $(".require-if-active").each(function() {
      var el = $(this);
      if ($(el.data("require-pair")).is(":checked")) {
        el.prop("required", true);
      } else {
        el.prop("required", false);
      }
    });
    
  }
  
};

FormStuff.init();
  //# sourceURL=pen.js
  </script>

<script>

  var client_name_id = [];
  var usertype = <?php echo $usertype ?>;
  var get_user_function = 'getuser';
  if( usertype > 1 ){
  	get_user_function = 'getAlluser';
  }
  $.ajax({ 
    type: 'GET',
    datatype: 'JSON',
    //async: false,
    url: get_user_function,
    data: { 
    },
    success: function( data ){
      var result = jQuery.parseJSON( data );

      if (typeof result !== 'undefined' || result !== null) {
        var clientListFinal = [];
        $.each( result, function( key, value ){
          client_name_id[value.name] = value.uid;
          clientListFinal.push(value.name);
        });

        loadTypeAhead( clientListFinal );
      }
    }
  });
var uid = 0;
  function getUserDetails(){
    uid = client_name_id[ $('#client_name').val() ];
    $.ajax({ 
      type: 'POST',
      datatype: 'JSON',
      //async: false,
      url: 'getUser_ajax',
      data: {
        'uid': client_name_id[ $('#client_name').val() ]
      },
      success: function( data ){
        if( data !== "" ){
          var userData = JSON.parse( data );
          if( typeof userData !== 'undefined' ){

            $( '#fname' ).val( userData.firstname );
            $( '#lname' ).val( userData.lastname );
            $( '#workphone' ).val( userData.phonenumber );
            $( '#email' ).val( userData.userid );
			if( userData.gender != "" ){
	            $( '#gender' ).selectpicker( 'val', userData.gender );
			}
            $( '#bday' ).val( userData.birthday );
            $( '#cellphone' ).val( userData.cellphone );
            $( '#address' ).val( userData.address );
            $( '#insuruance_number' ).val( userData.insurance_id );
            $( '#insurance_company' ).val( userData.insurance_company );
            $( '#other_insurance' ).val( userData.other_insurance );
            var p_insured = userData.primary_insured;
            if( parseInt(p_insured) == 1 ){
            	$( '#choice-insurance-self' ).attr('checked', 'checked');
            }else if( parseInt(p_insured) == 2 ){
            	$( '#choice-insurance-spouse' ).attr('checked', 'checked');
		    	$( '#spouse_fname' ).val( userData.p_fname );
		    	$( '#spouse_lname' ).val( userData.p_lname );
		    	$( '#spouse_bday' ).val( userData.p_bday );
		    }else if( parseInt(p_insured) == 3 ){
		    	$( '#choice-insurance-child' ).attr('checked', 'checked');
		    	$( '#child_fname' ).val( userData.p_fname );
		    	$( '#child_lname' ).val( userData.p_lname );
		    	$( '#child_bday' ).val( userData.p_bday );
		    }
          }
        }
      }
    });
  }

  $( '#save' ).click( function(){
    var fname = $( '#fname' ).val();
    var lname = $( '#lname' ).val();
    var phone = $( '#workphone' ).val();
    var cellphone = $( '#cellphone' ).val();
    var email = $( '#email' ).val();
    var gender = $( '#gender' ).val();
    var bday = $( '#bday' ).val();
    var address = $( '#address' ).val();
    var insuruance_number = $( '#insuruance_number' ).val();
    var insurance_company = $( '#insurance_company' ).val();
    var other_insurance = $( '#other_insurance' ).val();

    var p_insured = $( 'input[name=choice-insurance]:checked' ).val();
    var p_fname = '';
    var p_lname = '';
    var p_bday = '';
    if( parseInt(p_insured) == 2 ){
    	p_fname = $( '#spouse_fname' ).val();
    	p_lname = $( '#spouse_lname' ).val();
    	p_bday = $( '#spouse_bday' ).val();
    }else if( parseInt(p_insured) == 3 ){
    	p_fname = $( '#child_fname' ).val();
    	p_lname = $( '#child_lname' ).val();
    	p_bday = $( '#child_bday' ).val();
    }

    if( fname !== '' && lname !== '' && email !== '' && uid > 0 ){
      $.ajax({ 
        type: 'POST',
        datatype: 'JSON',
        //async: false,
        url: 'saveUserDetails',
        data: { 
          'uid' : uid,
          'fname' : fname,
          'lname' : lname,
          'phone' : phone,
          'cellphone' : cellphone,
          'email' : email,
          'gender' : gender,
          'bday' : bday,
          'address' : address,
          'insuruance_number' : insuruance_number,
          'insurance_company' : insurance_company,
          'other_insurance' : other_insurance,
          'p_insured' : p_insured,
          'p_lname' : p_lname,
          'p_fname' : p_fname,
          'p_bday' : p_bday,
        },
        success: function( data ){
          if( data == true ){
            alert( 'User Details successfully saved!' );
          }else{
            alert( 'Email is already used by another client' );
          }
        }
      });
    }else{
      alert( 'Please fill up all the required information')
    }
  });

  function loadTypeAhead( names ){

    var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;

        // an array that will be populated with substring matches
        matches = [];

        // regex used to determine if a string contains the substring `q`
        substrRegex = new RegExp(q, 'i');

        // iterate through the pool of strings and for any string that
        // contains the substring `q`, add it to the `matches` array
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };

    $('#client_name').typeahead({
      hint: true,
      highlight: true,
      minLength: 3
    }, {
      name: 'client_name',
      source: substringMatcher(names)
    });

  }

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

      (function() {
        var insuranceList = ['Aetna','AmeriHealth Administrators','Amerihealth Non-HMO New Jersey','Amerihealth HMO New Jersey and Delaware',
        'BCBS North Carolina','Blue Cross Blue Shield of Pennsylvania','CIGNA','Health Partners','Highmark BCBS of PA','Horizon NJ Health',
        'Highmark BCBS of NJ','Independence Administrators','Independence Blue Cross','Keystone Health Plan East','Keystone First','Medicare Pennsylvania','United HealthCare'];
        var substringMatcher = function(strs) {
          return function findMatches(q, cb) {
            var matches, substrRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
              if (substrRegex.test(str)) {
                matches.push(str);
              }
            });

            cb(matches);
          };
        };

        $('#insurance_company').typeahead({
          hint: true,
          highlight: true,
          minLength: 3
        }, {
          name: 'insuranceList',
          source: substringMatcher(insuranceList)
        });
      })();

    })(document, window, jQuery);

  </script>
</body>
</html>