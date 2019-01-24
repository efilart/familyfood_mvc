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
<!--h2><span class="label label-success" style="text-transform: uppercase" id="client_name_title">Session notes for <?php echo $user_full_name ?></span></h2-->
<ol class="breadcrumb">
<li><a href="viewappointments">Home</a></li>
<li class="active">Nutrition Assessment</li>
</ol>
<h3>Client Search</h3>
<div class="input-group col-md-6">
<input type="text" class="form-control" value="<?php echo $user_full_name ?>" name="client_name" placeholder="Search Client" id="client_name" data-fv-field="client_name" >
<span class="input-group-btn">
<button onclick="getUserDetails()" class="btn btn-primary"><i class="icon wb-search" aria-hidden="true"></i></button>
</span>
</div>
</div>
<?php include("client_bmi_details.inc"); ?>
<!-- start of form -->
<form id="session_note1" method="POST" action="sessionflow">
<div class="page-content container-fluid padding-top-0">
<div class="panel panel-bordered panel-dark">
<div class="panel-heading">
<h3 class="panel-title">NUTRITION ASSESSMENT</h3>
</div>
</div>
<div class="panel-group" id="exampleAccordionDefault" aria-multiselectable="true" role="tablist">
<div class="panel" style="margin-bottom: -9px">
<div class="panel-heading" id="exampleHeadingDefaultOne" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultOne" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultOne">PRIORITIES AND VALUES</a> </div>
<div class="panel-collapse collapse" id="exampleCollapseDefaultOne" aria-labelledby="exampleHeadingDefaultOne" role="tabpanel" aria-expanded="false" style="height: 0px;">
<div class="panel-body">
<input type="hidden" name="submit_type" id="submit_type" value="">
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="testimonial-content">
<p>To set the agenda for our meeting today, I'd first like to spend some time discussing the health and personal goals that are most important to you.</p>
</div>
<div class="form-group form-material has-info">
<label class="control-label" for="q4">Looking at the short term, what would you like to achieve or accomplish with your health within this year?</label>
<textarea class="form-control" id="q4" name="q4" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q5">On a scale of 1 to 10, how confident are you that you will reach your goals?</label>
<p>&nbsp;</p>
<div class="rating" name="score" id="score" data-plugin="rating" data-cancel="true" data-target="#exampleHintPercentage" data-number="10" data-hints="1,2,3,4,5,6,7,8,9,10"></div>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q5">In the next 2-5 years? In the next 10+ years?</label>
<textarea class="form-control" id="q5" name="q5" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q6">Is there any particular topic you want me to be sure to cover in our time together?</label>
<small>(if too many to cover in first session: If I could provide you with evidence-based ideas to help solve one of these topics today, which would you rank as being most important to you?)</small>
<textarea class="form-control" id="q6" name="q6" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q8">What strategies have you used in the past to address your goals and what were the outcomes?</label>
<textarea class="form-control" id="q8" name="q8" rows="3"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="panel" style="margin-bottom: -9px">
<div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultTwo" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultTwo">HEALTH STATUS</a> </div>
<div class="panel-collapse collapse" id="exampleCollapseDefaultTwo" aria-labelledby="exampleHeadingDefaultTwo" role="tabpanel" aria-expanded="false" style="height: 0px;">
<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="testimonial-content">
<p>Given your goals and priorities, it is important to review your current and past experiences with health, food, and nutrition. Is it okay if I ask you some questions about your current health and routines?</p>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q12">Describe your health in the past (PMH).</label>
<textarea class="form-control" id="q12" name="q12" rows="3"></textarea>
<div class="example col-lg-3">
<label class="control-label" for="sn_diabetes">DIABETES</label>
<select data-plugin="selectpicker" id="sn_diabetes" name="sn_diabetes">
<option value='0'>N/A</option>
<option value='1'>YES</option>
<option value='2'>NO</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q13">Do you "Know Your Numbers?" (labs)</label>
<textarea class="form-control" id="q13" name="q13" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q14">Tell me about medications that you take regularly.</label>
<textarea class="form-control" id="q14" name="q14" rows="3"></textarea>
</div>
</div>
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q15">Any Supplements?</label>
<textarea class="form-control" id="q15" name="q15" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q16">Do you have any food allergies or intolerances?</label>
<textarea class="form-control" id="q16" name="q16" rows="3"></textarea>
</div>
</div>
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q17">Do you have a primary care physician?</label>
<textarea class="form-control" id="q17" name="q17" rows="3"></textarea>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q18">Tell me about your physical activity routine.</label>
<textarea class="form-control" id="q18" name="q18" rows="3"></textarea>
</div>
</div>
<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q19">While each day differs, describe a typical day of eating for me.</label>
<textarea class="form-control" id="q19" name="q19" rows="3"></textarea>
</div>
</div>
</div>

<div class="row row-lg">
    
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label">I’m going to read you several statements that people have made about their food situation. For these statements, please tell me whether the statement was often true, sometimes true, or never true for (you/your household) in the last 12 months—that is, since last (name of current month). </label>
</div>

<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q22">The first statement is, “The food that (I/we) bought just didn’t last, and (I/we) didn’t have money to get more.” Was that often, sometimes, or never true for (you/your household) in the last 12 months?</label>
<div class="radio-custom radio-success">
<input type="radio" name="q22" value="Often true"><label for="Often true">Often true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q22" value="Sometimes true"><label for="Sometimes true">Sometimes true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q22" value="Never true"><label for="Never true">Never true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q22" value="DK or Refused"><label for="DK or Refused">DK or Refused</label>
</div>
<!--ol>
<li><input type="radio" name="q22" value="Often true">Often true</li>
<li><input type="radio" name="q22" value="Sometimes true">Sometimes true</li>
<li><input type="radio" name="q22" value="Never true">Never true</li>
<li><input type="radio" name="q22" value="DK or Refused">DK or Refused</li>
</ol-->

</div>
</div>

<div class="col-lg-6 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q23">“(I/we) couldn’t afford to eat balanced meals.” Was that often, sometimes, or never true for (you/your household) in the last 12 months?</label>

<div class="radio-custom radio-success">
<input type="radio" name="q23" value="Often true"><label for="Often true">Often true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q23" value="Sometimes true"><label for="Sometimes true">Sometimes true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q23" value="Never true"><label for="Never true">Never true</label>
</div>
<div class="radio-custom radio-success">
<input type="radio" name="q23" value="DK or Refused"><label for="DK or Refused">DK or Refused</label>
</div>
<!--ol>
<li><input type="radio" name="q23" value="Often true">Often true</li>
<li><input type="radio" name="q23" value="Sometimes true">Sometimes true</li>
<li><input type="radio" name="q23" value="Never true">Never true</li>
<li><input type="radio" name="q23" value="DK or Refused">DK or Refused</li>
</ol-->

</div>
</div>

</div>
</div>

<div class="row row-lg">
<div class="col-lg-12 pad_top">
<div class="form-group form-material has-info">
<label class="control-label" for="q20">Knowing your vision for your future, let's examine your weight history. Describe your weight in the past.</label>
<textarea class="form-control" id="q20" name="q20" rows="3"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="panel" style="margin-bottom: -9px">
<div class="panel-heading" id="exampleHeadingDefaultThree" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultThree" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultThree">BODY MASS INDEX</a> </div>
<div class="panel-collapse collapse" id="exampleCollapseDefaultThree" aria-labelledby="exampleHeadingDefaultThree" role="tabpanel" aria-expanded="false">
<div class="panel-body">
<div class="row row-lg pad_top">
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="height">Height in Inches</label>
<input type="number" onfocus="setBMI()" class="form-control" id="height" name="height" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="weight">Weight in Pounds</label>
<input type="number" onfocus="setBMI()" class="form-control" id="weight" name="weight" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="bmi">BMI</label>
<input class="form-control" readonly='true' id="bmi" name="bmi">
</div>
<div class="col-sm-12 pad_top">
<h3>Blood Pressure</h3>
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="systolic">Systolic</label>
<input type="number" class="form-control" id="systolic" name="systolic" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="diastolic">Diastolic</label>
<input type="number" class="form-control" id="diastolic" name="diastolic" placeholder="enter value" >
</div>
</div>
<div class="row row-lg pad_top">
<div class="col-sm-12 pad_top">
<h3>Body Shape</h3>
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
<div class="radio-custom radio-success">
<input type="radio" id="na_shape" value="3" name="bodyShape">
<label for="bodyShape">N/A</label>
</div>
</div>
</div>
<div class="row row-lg">
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="diastolic">Neck Circumference (cm)</label>
<input type="number" class="form-control" id="neck" name="neck" placeholder="enter value" >
</div>
<div class="col-sm-4 form-group form-material has-info">
<label class="control-label" for="diastolic">Waist Circumference (cm)</label>
<input type="number" class="form-control" id="waist" name="waist" placeholder="enter value" >
</div>
</div>
</div>
</div>
</div>
<div class="panel" style="margin-bottom: -9px">
<div class="panel-heading" id="exampleHeadingDefaultTwo" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFour" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultFour">TYPICAL DAY OF EATING</a> </div>
<div class="panel-collapse collapse" id="exampleCollapseDefaultFour" aria-labelledby="exampleHeadingDefaultFour" role="tabpanel">
<div class="panel-body">
<div class="row row-lg pad_top">
<div class="col-sm-12">
<h4><span class="label label-outline label-primary">Typical Day of Eating</span></h4>
</div>
<div class="col-sm-4">
<h5>Whole Grains / Day</h5>
<select data-plugin="selectpicker" id="da_whole_grains" name="da_whole_grains" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="none">0</option>
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
<option value="none">0</option>
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
<option value="none">0</option>
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
<option value="none">0</option>
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
<option value="none">0</option>
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
<option value="none">0</option>
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
<div class="col-sm-12">
<h4><span class="label label-outline label-primary">Physical Activity Days / Week</span></h4>
</div>
</div>
<div class="row row-lg">
<div class="col-sm-4">
<div class="example">
<h5>Days per Week</h5>
<select data-plugin="selectpicker" id="da_physical" name="da_physical" data-style="btn-outline btn-primary btn-info">
<option value="0">N/A</option>
<option value="none">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
</select>
</div>
</div>
<div class="col-sm-4">
<div class="example">
<h5>Time per Day (in minutes)</h5>
<select data-plugin="selectpicker" id="da_timePerDay" name="da_timePerDay" data-style="btn-outline btn-primary btn-info">
<option value="TPD_15mins">15</option>
<option value="TPD_30mins">30</option>
<option value="TPD_45mins">45</option>
<option value="TPD_60mins">60</option>
<option value="TPD_75plus">75+</option>
</select>
</div>
</div>
<div class="col-sm-4">
<div class="example">
<h5>Intensity</h5>
<select data-plugin="selectpicker" id="da_intensity" name="da_intensity" data-style="btn-outline btn-primary btn-info">
<option value="INT_light">Light</option>
<option value="INT_moderate">Moderate</option>
<option value="INT_high">High</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="panel" style="margin-bottom: -9px">
<div class="panel-heading" id="exampleHeadingDefaultFive" role="tab"> <a class="panel-title collapsed" data-toggle="collapse" href="#exampleCollapseDefaultFive" data-parent="#exampleAccordionDefault" aria-expanded="false" aria-controls="exampleCollapseDefaultFive">NOTES</a></div>
<div class="panel-collapse collapse" id="exampleCollapseDefaultFive" aria-labelledby="exampleHeadingDefaultFive" role="tabpanel">
<div class="panel-body">
<div class="row row-lg pad_top">
<div class="col-sm-7"> 
<!-- Panel Click To Edit -->
<div class="example-wrap">
<textarea class="form-control" id="da_notes" name="da_notes" rows="8"></textarea>
</div>
<!-- End Panel Click To Edit --> 
</div>
<div class="col-sm-5"></div>
</div>
</div>
</div>

</div>
<div class="panel">
<div class="panel-body">
<div class="col-md-4"></div>
<div class="col-md-4">
<button onclick="submitSelf()" type="button" class="btn btn-block btn-success btn_pad">Save</button>
</div>
<div class="col-md-4">
<button onclick="submitRedirect()" type="button" class="btn btn-primary btn-block btn_pad">Save & Continue</button>
</div>
</div>
</div>
<!-- end of form --> 
</div>
</div></form>
<!-- End Page -->
</div> 
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
<script src="../assets/assets/vendor/matchheight/jquery.matchHeight-min.js"></script> 

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
<script src="../assets/assets/js/components/matchheight.min.js"></script> 
<script src="../assets/assets/js/components/slidepanel.min.js"></script> 
<script src="../assets/assets/js/components/panel.js"></script> 
<script src="../assets/assets/js/components/panel.min.js"></script> 
<script src="../assets/assets/js/components/panel-structure.min.js"></script> 
<script src="../assets/assets/js/components/panel-actions.min.js"></script> 
<script>
	var uid = <?php echo $uid ?>;
	var dietAdvice = <?php print_r( json_encode( $dietAdvice ) )?>;
	var session_note_details = <?php print_r( json_encode( $session_note_details ) )?>;

	var client_name_id = [];

	  // chart
  	(function() {
      new Chartist.Bar('#exampleHorizontalBar', {
        labels: ['Whole Grains','Vegetables','Fruit','Low Fat Dairy','Fish/Week','Water-Cups',
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
                    height:'100%',
        axisY: {
        offset: 10
        }
      });
    })();

	if( !jQuery.isEmptyObject( dietAdvice ) ){
    $( '#height' ).val( dietAdvice.da_height );
    $( '#weight' ).val( dietAdvice.da_weight );
    $( '#bmi' ).val( dietAdvice.da_bmi );
    $( '#systolic' ).val( dietAdvice.da_systolic );
    $( '#diastolic' ).val( dietAdvice.da_diastolic );
    if( dietAdvice.da_body_type > 0 ){
      if( dietAdvice.da_body_type == 1 ){
        $( '#pear_shape').attr( 'checked', 'checked' );
      }else if( dietAdvice.da_body_type == 2 ) {
        $( '#apple_shape').attr( 'checked', 'checked' );
      }else{
      	$( '#na_shape').attr( 'checked', 'checked' );
      }
    }

	$( '#da_followup' ).val( dietAdvice.da_followup );
    $( '#da_goalMet' ).val( dietAdvice.da_goalMet );
    $( '#da_whole_grains' ).val( dietAdvice.da_whole_grains );
    $( '#da_vegetables' ).val( dietAdvice.da_vegetables );
    $( '#da_fruit' ).val( dietAdvice.da_fruit );
    $( '#da_dairy' ).val( dietAdvice.da_dairy );
    $( '#da_fish' ).val( dietAdvice.da_fish );
    $( '#da_water' ).val( dietAdvice.da_water );
    $( '#da_physical' ).val( dietAdvice.da_physical );
    $( '#neck' ).val( dietAdvice.da_neck );
    $( '#waist' ).val( dietAdvice.da_waist );
    $( '#da_timePerDay' ).val( dietAdvice.da_timePerDay );
    $( '#da_intensity' ).val( dietAdvice.da_intensity );
    $( '#da_notes' ).val( dietAdvice.da_notes );
    
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

	//ajax
	$.ajax({ 
		type: 'GET',
		datatype: 'JSON',
		//async: false,
		url: 'getuser',
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

	if( !jQuery.isEmptyObject( session_note_details ) ){
		$( '#score' ).attr( 'data-score', session_note_details.sn_score );
		$( '#q1' ).text( session_note_details.sn_quest1 );
		$( '#q2' ).text( session_note_details.sn_quest2 );
		$( '#q3' ).text( session_note_details.sn_quest3 );
		$( '#q4' ).text( session_note_details.sn_quest4 );
		$( '#q5' ).text( session_note_details.sn_quest5 );
		$( '#q6' ).text( session_note_details.sn_quest6 );
		$( '#q7' ).text( session_note_details.sn_quest7 );
		$( '#q8' ).text( session_note_details.sn_quest8 );
		$( '#q9' ).text( session_note_details.sn_quest9 );
		$( '#q10' ).text( session_note_details.sn_quest10 );
		$( '#q11' ).text( session_note_details.sn_quest11 );
		$( '#q12' ).text( session_note_details.sn_quest12 );
		$( '#q13' ).text( session_note_details.sn_quest13 );
		$( '#q14' ).text( session_note_details.sn_quest14 );
		$( '#q15' ).text( session_note_details.sn_quest15 );
		$( '#q16' ).text( session_note_details.sn_quest16 );
		$( '#q17' ).text( session_note_details.sn_quest17 );
		$( '#q18' ).text( session_note_details.sn_quest18 );
		$( '#q19' ).text( session_note_details.sn_quest19 );
		$( '#q20' ).text( session_note_details.sn_quest20 );
		$( '#q21' ).text( session_note_details.sn_quest21 );
		
		$("input[name='q22'][value='"+session_note_details.sn_quest22+"']").prop('checked', true);
		$("input[name='q23'][value='"+session_note_details.sn_quest23+"']").prop('checked', true);
		$( '#sn_diabetes' ).val( session_note_details.sn_diabetes );
	}
	
	function getUserDetails(){
		if( typeof client_name_id[$( '#client_name' ).val()] != 'undefined' || client_name_id[$( '#client_name' ).val()] != null ){
			window.location.href = "sessionflow?uid="+client_name_id[$( '#client_name' ).val()];
		}else{
			alert( 'Oops. '+$( '#client_name' ).val()+' is not in our database.' );
		}
	}

	function submitRedirect(){
		if( uid > 0 ){
			// $( '#session_note1' ).attr( 'action', 'sessionflow2' );
			$( '#submit_type' ).val( '1' );
			$( '#session_note1' ).submit();
		}else{
			alert( 'Please select a client' );
		}
	}

	function submitSelf(){
		if( uid > 0 ){
			// $( '#session_note1' ).attr( 'action', 'sessionflow' );
			$( '#submit_type' ).val( '0' );
			$( '#session_note1' ).submit();
		}else{
			alert( 'Please select a client' );
		}
	}

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