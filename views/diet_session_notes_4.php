<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Session Notes - Nutrition Diagnosis | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css">
<link rel="stylesheet" href="../assets/assets/vendor/typeahead-js/typeahead.css">
<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">
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
<!-- Page -->
<div class="page animsition">
<div class="page-header">
<h2><span class="label label-success" style="text-transform: uppercase" id="client_name_title">Session notes for <?php echo $user_full_name ?></span></h2>
<ol class="breadcrumb">
<li><a href="viewappointments">Home</a></li>
<li class="active">Goal Setting</li>
</ol>
</div>

<div class="page-content">
<div class="panel">
<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-6">
<!--div class="ct-chart" id="exampleOnlyArea"></div-->
<div class="ct-chart" id="exampleHorizontalBar"></div>
</div>
<!--div class="col-lg-6">
<div class="legend">
<table>
<tbody>
<tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px">
<div style="width:4px;height:0;border:5px solid rgb(255,255,204);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Whole Grains / Day</td>
</tr>
<tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(199,233,180);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Vegetables / Day</td>
</tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px">
<div style="width:4px;height:0;border:5px solid rgb(127,205,187);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Fruit / Day</td>
</tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px">
<div style="width:4px;height:0;border:5px solid rgb(65,182,196);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Low Fat Dairy / Day</td>
</tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px">
<div style="width:4px;height:0;border:5px solid rgb(44,127,184);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Fish / Week</td>
</tr>
<td class="legendColorBox">
<div style="border:1px solid #ccc;padding:1px">
<div style="width:4px;height:0;border:5px solid rgb(37,52,148);overflow:hidden"></div>
</div>
</td>
<td class="legendLabel">Water-Cups / Day</td>
</tr>
</tbody>
</table>
</div>
</div-->
</div>
<!-- content --> 
<form id="session_note1" method="POST" action="sessionflow">
<!-- start of form -->
<!-- body shape -->
<h4><span class="label label-outline label-primary">Body Mass Index</span></h4>
<div class="row row-lg">
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="height">Height</label>
<input type="number" onfocus="setBMI()" class="form-control" id="height" name="height" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="weight">Weight</label>
<input type="number" onfocus="setBMI()" class="form-control" id="weight" name="weight" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="bmi">BMI</label>
<input class="form-control" readonly='true' id="bmi" name="bmi">
</div>
<div class="col-sm-4 margin-bottom-20">
<h5>Met Nutritional Goal</h5>
<select data-plugin="selectpicker" id="da_goalMet" name="da_goalMet" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="No">No</option>
<option value="Yes">Yes</option>
</select>
</div>
<div class="col-sm-12">
<h4><span class="label label-outline label-primary">Blood Pressure</span></h4>
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="systolic">Systolic</label>
<input type="number" class="form-control" id="systolic" name="systolic" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="diastolic">Diastolic</label>
<input type="number" class="form-control" id="diastolic" name="diastolic" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material"> 
<!--label class="control-label" for="inputText">Waist Circumference (in)</label>
<input type="number" class="form-control" id="inputText" name="inputText" placeholder="Text" required--> 
</div>
</div>
<div class="row row-lg pad_top">
<div class="col-sm-12">
<h4><span class="label label-outline label-primary">Body Shape</span></h4>
</div>
</div>
<div class="row row-lg">
<div class="col-sm-4">
<h4 class="example-title">Pear Shape</h4>
<img src="../assets/assets/images/shape_pear.png"> </div>
<div class="col-sm-4">
<h4 class="example-title">Apple Shape</h4>
<img src="../assets/assets/images/shape_apple.png"> </div>
<div class="col-sm-4">
<h4 class="example-title">CHOOSE YOUR BODY SHAPE:</h4>
<div class="radio-custom radio-success">
<input type="radio" id="pear_shape" value="1" name="bodyShape">
<label for="bodyShape">Pear shape</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" id="apple_shape" value="2" name="bodyShape">
<label for="bodyShape">Apple shape</label>
</div>
</div>
</div>
<!-- end body shape -->
<!-- typical day of eating -->
<div class="row row-lg pad_top">
<div class="col-sm-12">
<h4><span class="label label-outline label-primary">Typical Day of Eating</span></h4>
</div>
<div class="col-sm-4">
<h5>Whole Grains / Day</h5>
<select data-plugin="selectpicker" id="da_whole_grains" name="da_whole_grains" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
<div class="col-sm-4">
<h5>Vegetables / Day</h5>
<select data-plugin="selectpicker" id="da_vegetables" name="da_vegetables" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
<div class="col-sm-4">
<h5>Fruit / Day</h5>
<select data-plugin="selectpicker" id="da_fruit" name="da_fruit" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
</div>
<div class="row row-lg pad_top">
<div class="col-sm-4">
<h5>Low Fat Dairy / Day</h5>
<select data-plugin="selectpicker" id="da_dairy" name="da_dairy" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
<div class="col-sm-4">
<h5>Fish / Week</h5>
<select data-plugin="selectpicker" id="da_fish" name="da_fish" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
<div class="col-sm-4">
<h5>Water-Cups / Day</h5>
<select data-plugin="selectpicker" id="da_water" name="da_water" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
</div>
<!-- a ewan -->
<!-- physical activity -->
<div class="row row-lg pad_top">
<div class="col-sm-12 margin-top-10">
<h4><span class="label label-outline label-primary">Physical Activity Days / Week</span></h4>
</div>
<div class="col-sm-4">
<h5>&nbsp;</h5>
<div class="example">
<select data-plugin="selectpicker" id="da_physical" name="da_physical" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select>
<h5>Notes</h5>
<div class="pad_bottom"><textarea id="da_notes" class="form-control" name="da_notes" rows="3"></textarea></div>
</div>
</div>
<!-- nutrition goal -->
<div class="col-sm-4">
<h5>Nutrition Goal</h5>
<div class="example">
<textarea class="form-control" id="da_nutritionalGoal" name="da_nutritionalGoal" rows="3"></textarea>
</div>
</div>
<!-- physical goal -->
<div class="col-sm-4">
<h5>Physical Goal</h5>
<div class="example">
<textarea class="form-control" id="da_physicalGoal" name="da_physicalGoal" rows="3"></textarea>
</div>
</div>
<div class="col-sm-12 margin-top-10">
<h3><span class="label label-primary">Recommendations and Education</span></h3>
<p>Thank you for that information! May I share with you some strategies that work for others who have goals and routines similar to yours? Everything I recommend to you will be evidence-based which will increase your chances of success!</p>
<h4 class="pad_top"><span class="label label-outline label-primary">Goals Setting</span></h4>
<div class="form-group form-material has-info">
<label class="control-label" for="q21">Now out of all these options we discussed, which changes do you think are best for you at this time?</label>
<textarea class="form-control" id="q21" name="q21" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg pad_top">
<!-- Social goal -->
<div class="col-sm-4">
<h5>Social Goal</h5>
<div class="example">
<textarea class="form-control" id="da_socialGoal" name="da_socialGoal" rows="3"></textarea>
</div>
</div>
<!-- handouts -->
<div class="col-sm-4">
<h5>Handouts</h5>
<div class="example">
<input type="checkbox" name="handout[]" value="Nutrition for Runners">Nutrition for Runners</label><br />
<input type="checkbox" name="handout[]" value="Shop the Walls">Shop the Walls</label><br />
<input type="checkbox" name="handout[]" value="Menu Planner">Menu Planner</label><br />
<input type="checkbox" name="handout[]" value="Grocery List">Grocery List</label><br />
<input type="checkbox" name="handout[]" value="Family Food Plate">Family Food Plate</label><br />
<input type="checkbox" name="handout[]" value="Tasty Cooking">Tasty Cooking</label><br />
</div>
</div>
<div class="col-sm-4">
<h5>&nbsp;</h5>
<div class="example">
<input type="checkbox" name="handout[]" value="Eating for Exercise">Eating for Exercise</label><br />
<input type="checkbox" name="handout[]" value="My Cholesterol">My Cholesterol</label><br />
<input type="checkbox" name="handout[]" value="My Blood Pressure">My Blood Pressure</label><br />
<input type="checkbox" name="handout[]" value="My Healthy Weight">My Healthy Weight</label><br />
<input type="checkbox" name="handout[]" value="My Goal Setting">My Goal Setting</label><br />
</div>
</div>
<div class="col-sm-4"></div>
</div>
<!-- end physical activity --> 
<!-- rating
<div class="example-well">
<div class="page-header">
<h1 class="page-title">Goal Confidence Rating <span class="rating-hint label label-success" id="exampleHintPercentage"></span></h1>
<div class="page-header-actions">
<h4 class="example-title">On a scale of 1 to 10, how confident are you that you will reach your goals?</h4>
<div class="rating" name="score" id="score" data-plugin="rating" data-cancel="true" data-target="#exampleHintPercentage" data-number="10" data-hints="1 : Goal confidence rating,2 : Goal confidence rating,3 : Goal confidence rating,4 : Goal confidence rating,5 : Goal confidence rating,6 : Goal confidence rating,7 : Goal confidence rating,8 : Goal confidence rating,9 : Goal confidence rating,10 : Goal confidence rating"></div>
</div>
</div>
</div>
end rating -->
<!-- end typical day of eating -->
<!-- end client health status -->
<!-- end nutrition assessment --> 
<div class="example-well">
<div class="page-header">
<h1 class="page-title">Nutrition Assessment</h1>
<div class="page-header-actions">
<div>
<!--button type="button" class="btn btn-round btn-default btn-outline btn-pill-left">Save & Go Back</button-->
<button type="button" class="btn btn-primary">Save</button>
</div>
</div>
</div>
</div>
<!-- end of form -->
</form>
<!-- end content --> 
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
<!-- Plugins --> 
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="../assets/assets/vendor/chartist-js/chartist.js"></script>
<script src="../assets/assets/vendor/formvalidation/formValidation.js"></script>
<script src="../assets/assets/vendor/raty/jquery.raty.js"></script>
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script>
<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>
<!-- Scripts --> 
<script src="../assets/assets/js/core.js"></script> 
<script src="../assets/assets/js/site.js"></script> 
<script src="../assets/assets/js/components/bootstrap-select.js"></script>
<script src="../assets/assets/js/sections/menu.js"></script> 
<script src="../assets/assets/js/sections/menubar.js"></script> 
<script src="../assets/assets/js/sections/sidebar.js"></script> 
<script src="../assets/assets/js/configs/config-colors.js"></script> 
<script src="../assets/assets/js/configs/config-tour.js"></script> 
<script src="../assets/assets/js/components/asscrollable.js"></script> 
<script src="../assets/assets/js/components/animsition.js"></script> 
<script src="../assets/assets/js/components/slidepanel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script>
<script src="../assets/assets/js/components/raty.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>
	var dietAdvice = <?php print_r( json_encode( $dietAdvice ) )?>;
// chart
(function() {
        new Chartist.Bar('#exampleHorizontalBar', {
          labels: ['Whole Grains / Day', 'Vegetables / Day', '	Fruit / Day', '	Low Fat Dairy / Day', '	Fish / Week', '	Water-Cups / Day',
          ],
          series: [
            [parseInt(dietAdvice.da_whole_grains), parseInt(dietAdvice.da_vegetables), parseInt(dietAdvice.da_fruit), parseInt(dietAdvice.da_dairy), parseInt(dietAdvice.da_fish), parseInt(dietAdvice.da_water)],
//            [3, 2, 9, 5, 4, 6, 4]
          ]
        }, {
          seriesBarDistance: 10,
          reverseData: false,
          horizontalBars: false,
										fullwidth: true,
										height:'200px',
          axisY: {
          offset: 70
          }
        });
      })();
    /*(function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);*/
	if( !jQuery.isEmptyObject( dietAdvice ) ){
		$( '#height' ).val( dietAdvice.da_height );
		$( '#weight' ).val( dietAdvice.da_weight );
		$( '#bmi' ).val( dietAdvice.da_bmi );
		$( '#systolic' ).val( dietAdvice.da_systolic );
		$( '#diastolic' ).val( dietAdvice.da_diastolic );
		if( dietAdvice.da_body_type > 0 ){
			if( dietAdvice.da_body_type == 1 ){
				$( '#pear_shape').attr( 'checked', 'checked' );
			}else{
				$( '#apple_shape').attr( 'checked', 'checked' );
			}
		}
		$( '#da_goalMet' ).val( dietAdvice.da_goalMet );
		$( '#da_whole_grains' ).val( dietAdvice.da_whole_grains );
		$( '#da_vegetables' ).val( dietAdvice.da_vegetables );
		$( '#da_fruit' ).val( dietAdvice.da_fruit );
		$( '#da_dairy' ).val( dietAdvice.da_dairy );
		$( '#da_fish' ).val( dietAdvice.da_fish );
		$( '#da_water' ).val( dietAdvice.da_water );
		$( '#da_physical' ).val( dietAdvice.da_physical );
	}
	function setBMI(){
		$( '#weight' ).keyup(function(){
			var weightInLbs = $( this ).val();
			var heightInInch = $( '#height' ).val();
			var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );
			if( bmi > 0 && bmi != "Infinity" ){
				$( '#bmi' ).val(bmi);
			}else{
				$( '#bmi' ).val(0);
			}
		});
		$( '#height' ).keyup(function(){
			var heightInInch = $( this ).val();
			var weightInLbs = $( '#weight' ).val();
			var bmi = ( weightInLbs*703 ) / ( heightInInch*heightInInch );
			if( bmi > 0 && bmi != "Infinity" ){
				$( '#bmi' ).val(bmi);
			}else{
				$( '#bmi' ).val(0);
			}
		});
		}
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });
      // Example Wizard Form
      // -------------------
      (function() {
        // set up formvalidation
        $('#exampleAccountForm').formValidation({
          framework: 'bootstrap',
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'A client is required'
                },
                stringLength: {
                  min: 3,
                  max: 30,
                  message: 'The name must be more than 3 and less than 30 characters long'
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9_\.]+$/,
                  message: 'The username can only consist of alphabetical, number, dot and underscore'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                different: {
                  field: 'username',
                  message: 'The password cannot be the same as username'
                }
              }
            }
          }
        });
        $("#exampleBillingForm").formValidation({
          framework: 'bootstrap',
          fields: {
            number: {
              validators: {
                notEmpty: {
                  message: 'The credit card number is required'
                }
                // creditCard: {
                //   message: 'The credit card number is not valid'
                // }
              }
            },
            cvv: {
              validators: {
                notEmpty: {
                  message: 'The CVV number is required'
                }
                // cvv: {
                //   creditCardField: 'number',
                //   message: 'The CVV number is not valid'
                // }
              }
            }
          }
        });
        // init the wizard
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          buttonsAppendTo: '.panel-body'
        });
        var wizard = $("#exampleWizardForm").wizard(options).data(
          'wizard');
        // setup validator
        // http://formvalidation.io/api/#is-valid
        wizard.get("#exampleAccount").setValidator(function() {
          var fv = $("#exampleAccountForm").data('formValidation');
          fv.validate();
          if (!fv.isValid()) {
            return false;
          }
          return true;
        });
        wizard.get("#exampleBilling").setValidator(function() {
          var fv = $("#exampleBillingForm").data('formValidation');
          fv.validate();
          if (!fv.isValid()) {
            return false;
          }
          return true;
        });
      })();
      // Example Wizard Form Container
      // -----------------------------
      // http://formvalidation.io/api/#is-valid-container
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          onInit: function() {
            $('#exampleFormContainer').formValidation({
              framework: 'bootstrap',
              fields: {
                username: {
                  validators: {
                    notEmpty: {
                      message: 'The username is required'
                    }
                  }
                },
                password: {
                  validators: {
                    notEmpty: {
                      message: 'The password is required'
                    }
                  }
                },
                number: {
                  validators: {
                    notEmpty: {
                      message: 'The credit card number is not valid'
                    }
                  }
                },
                cvv: {
                  validators: {
                    notEmpty: {
                      message: 'The CVV number is required'
                    }
                  }
                }
              }
            });
          },
          validator: function() {
            var fv = $('#exampleFormContainer').data(
              'formValidation');
            var $this = $(this);
            // Validate the container
            fv.validateContainer($this);
            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
              return false;
            }
            return true;
          },
          onFinish: function() {
            // $('#exampleFormContainer').submit();
          },
          buttonsAppendTo: '.panel-body'
        });
        $("#exampleWizardFormContainer").wizard(options);
      })();
      // Example Wizard Pager
      // --------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '.wizard-pane',
          templates: {
            buttons: function() {
              var options = this.options;
              return
                '<div class="btn-group" aria-label="Wizard Pager" role="group">' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="back"><i class="icon wb-chevron-left" aria-hidden="true"></i></button>' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="next"><i class="icon wb-chevron-right" aria-hidden="true"></i></button>' +
                '<button class="btn btn-default btn-outline" data-target="#' +
                this.id +
                '" data-wizard="finish"><i class="icon wb-check" aria-hidden="true"></i></button>' +
                '</div>';
            }
          },
          buttonsAppendTo: '.panel-actions'
        });
        $("#exampleWizardPager").wizard(options);
      })();
      // Example Wizard Progressbar
      // --------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '.wizard-pane',
          onInit: function() {
            this.$progressbar = this.$element.find('.progress-bar')
              .addClass('progress-bar-striped');
          },
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          onFinish: function() {
            this.$progressbar.removeClass('progress-bar-striped').addClass(
              'progress-bar-success');
          },
          onAfterChange: function(prev, step) {
            var total = this.length();
            var current = step.index + 1;
            var percent = (current / total) * 100;
            this.$progressbar.css({
              width: percent + '%'
            }).find('.sr-only').text(current + '/' + total);
          },
          buttonsAppendTo: '.panel-body'
        });
        $("#exampleWizardProgressbar").wizard(options);
      })();
      // Example Wizard Tabs
      // -------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '> .nav > li > a',
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          onFinish: function() {
            alert('finish');
          },
          buttonsAppendTo: '.tab-content'
        });
        $("#exampleWizardTabs").wizard(options);
      })();
      // Example Wizard Accordion
      // ------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '.panel-title[data-toggle="collapse"]',
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          templates: {
            buttons: function() {
              return '<div class="panel-footer">' + defaults.templates
                .buttons.call(this) + '</div>';
            }
          },
          onBeforeShow: function(step) {
            step.$pane.collapse('show');
          },
          onBeforeHide: function(step) {
            step.$pane.collapse('hide');
          },
          onFinish: function() {
            alert('finish');
          },
          buttonsAppendTo: '.panel-collapse'
        });
        $("#exampleWizardAccordion").wizard(options);
      })();
    })(document, window, jQuery);
				
// Example AsSpinner
      // -----------------
      (function() {
        // Custom Format
        var options = $.extend({}, $.components.getDefaults("asSpinner"), {
          format: function(value) {
            return value + ' lbs';
          }
        });
        $('#inputSpinnerCustomFormat').asSpinner(options);
      })();
      (function() {
        // Custom Format
        var options = $.extend({}, $.components.getDefaults("asSpinner"), {
          format: function(value) {
            return value + ' inches';
          }
        });
        $('#inputSpinnerCustomFormatInches').asSpinner(options);
      })();
</script>
</body>
</html>