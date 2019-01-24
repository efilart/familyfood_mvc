<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Session Notes - Diagnosis | Familyfood Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/multi-select/multi-select.css">

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

<div class="page animsition"> 
<!-- header -->
<div class="page-header">
<ol class="breadcrumb">
<li><a href="viewappointments">Home</a></li>
<li><a href="sessionflow">Nutrition Assessment</a></li>
<li class="active">Diagnosis</li>
</ol>
</div>

<!-- end header -->
<?php include("client_bmi_details.inc"); ?>

<div class="page-content container-fluid">
<div class="panel panel-bordered panel-dark">
<div class="panel-heading">
<h3 class="panel-title">Diagnosis</h3>
</div>
<form id="session_note1" method="POST">
<!-- start intake -->
<div id="exampleTransparentBody" class="panel is-collapse">
<div class="panel-heading">
<h3 class="panel-title black">Intake (NI)</h3>
<div class="panel-actions">
<a class="panel-action icon wb-plus black" aria-controls="exampleTransparentBody" aria-expanded="true" data-toggle="panel-collapse" href="#exampleTransparentBody" aria-hidden="true"></a>
</div>
</div>

<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-12 pad_top">

<div class="testimonial-content">
<p>Each term is designated with an alpha-numeric NCPT hierarchical code, followed by a five-digit (e.g., 99999) Academy SNOMED CT/LOINC unique identifier (ANDUID). Neither should be used in nutrition documentation. The ANDUID is for data tracking purposes in electronic health records.</p>
</div>
<input type="hidden" name="submit_type" id="submit_type" value="">
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> INTAKE (NI)</h3>
</div>
<div class="panel-body">
<select name="bundle1_select[]" data-plugin="selectpicker" id="bundle1_select" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="1_1">Increased energy expenditure NI-1.1 10633</option>
<option value="1_2">Inadequate energy intake NI-1.2 10634</option>
<option value="1_3">Excessive energy intake NI-1.3 10635</option>
<option value="1_4">Predicted inadequate energy intake NI-1.4 10636</option>
<option value="1_5">Predicted excessive energy intake NI-1.5 10637</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle1_eti" name="bundle1_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle1'] ) ? ( isset( $session_note_details2['bundle1'][1] ) && $session_note_details2['bundle1'][1] !== "NULL" ? $session_note_details2['bundle1'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle1_sign" name="bundle1_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle1'] ) ? ( isset( $session_note_details2['bundle1'][2] ) && $session_note_details2['bundle1'][2] !== "NULL" ? $session_note_details2['bundle1'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle1_diag" id="bundle1_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continu7d">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Oral / Nutrition Support Intake</h3>
</div>
<div class="panel-body">
<select name="bundle2_select[]" id="bundle2_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="2_1">Inadequate oral intake NI-2.1 10639</option>
<option value="2_2">Excessive oral intake NI-2.2 10640</option>
<option value="2_3">Inadequate enteral nutrition infusion NI-2.3 10641</option>
<option value="2_4">Excessive enteral nutrition infusion NI-2.4 10642</option>
<option value="2_5">Enteral nutrition composition inconsistent with needs NI-2.5 11142</option>
<option value="2_6">Enteral nutrition administration inconsistent with needs NI-2.6 11143</option>
<option value="2_7">Inadequate parenteral nutrition infusion NI-2.7 10644</option>
<option value="2_8">Excessive parenteral nutrition infusion NI-2.8 10645</option>
<option value="2_9">Parenteral nutrition composition inconsistent with needs NI-2.9 11144</option>
<option value="2_10">Parenteral nutrition administration inconsistent with needs NI-2.10 11145</option>
<option value="2_11">Limited food acceptance NI-2.11 10647</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle2_eti" name="bundle2_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle2'] ) ? ( isset($session_note_details2['bundle2'][1]) && $session_note_details2['bundle2'][1] !== "NULL" ? $session_note_details2['bundle2'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle2_sign" name="bundle2_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle2'] ) ? ( isset($session_note_details2['bundle2'][2]) && $session_note_details2['bundle2'][1] !== "NULL" ? $session_note_details2['bundle2'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle2_diag" id="bundle2_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">3</span> Fluid Intake</h3>
</div>
<div class="panel-body">
<select name="bundle3_select[]" id="bundle3_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="3_1">Inadequate fluid intake NI-3.1 10649</option>
<option value="3_2">Excessive fluid intake NI-3.2 10650</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle3_eti" name="bundle3_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle3'] ) ? ( isset($session_note_details2['bundle3'][1]) && $session_note_details2['bundle3'][1] !== "NULL" ? $session_note_details2['bundle3'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle3_sign" name="bundle3_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle3'] ) ? ( isset($session_note_details2['bundle3'][2]) && $session_note_details2['bundle3'][2] !== "NULL" ? $session_note_details2['bundle3'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle3_diag" id="bundle3_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">4</span> Bioactive Substances</h3>
</div>
<div class="panel-body">
<select name="bundle4_select[]" id="bundle4_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<optgroup label="Inadequate bioactive substance intake NI-4.1 10859">
<option value="4_1_1">Inadequate plant stanol ester intake NI-4.1.1 11077</option>
<option value="4_1_2">Inadequate plant sterol ester intake NI-4.1.2 11078</option>
<option value="4_1_3">Inadequate soy protein intake NI-4.1.3 11080</option>
<option value="4_1_4">Inadequate psyllium intake NI-4.1.4 11079</option>
<option value="4_1_5">Inadequate �-glucan intake NI-4.1.5 11076</option>
</optgroup>
<optgroup label="Excessive bioactive substance intake">
<option value="4_2_1">Excessive plant stanol ester intake NI-4.2.1 11084</option>
<option value="4_2_2">Excessive plant sterol ester intake NI-4.2.2 11085</option>
<option value="4_2_3">Excessive soy protein intake NI-4.2.3 11087</option>
<option value="4_2_4">Excessive psyllium intake NI-4.2.4 11086</option>
<option value="4_2_5">Excessive �-glucan intake NI-4.2.5 11081</option>
<option value="4_2_6">Excessive food additive intake NI-4.2.6 11083</option>
<option value="4_2_7">Excessive caffeine intake NI-4.2.7 11082</option>
<option value="4_3">Excessive alcohol intake NI-4.3 10654</option>
</optgroup>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle4_eti" name="bundle4_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle4'] ) ? ( isset($session_note_details2['bundle4'][1]) && $session_note_details2['bundle4'][1] !== "NULL" ? $session_note_details2['bundle4'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle4_sign" name="bundle4_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle4'] ) ? ( isset($session_note_details2['bundle4'][2]) && $session_note_details2['bundle4'][2] !== "NULL" ? $session_note_details2['bundle4'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle4_diag" id="bundle4_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5</span> Nutrient</h3>
</div>
<div class="panel-body">
<select name="bundle5_select[]" id="bundle5_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_1">Increased nutrient needs NI-5.1 10656</option>
<option value="5_2">Inadequate protein-energy intake NI-5.2 10658</option>
<option value="5_3">Decreased nutrient needs NI-5.3 10659</option>
<option value="5_4">Imbalance of nutrients NI-5.4 10660</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle5_spec" name="bundle5_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][1]) && $session_note_details2['bundle5'][1] !== "NULL" ? $session_note_details2['bundle5'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle5_eti" name="bundle5_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][2]) && $session_note_details2['bundle5'][2] !== "NULL" ? $session_note_details2['bundle5'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle5_sign" name="bundle5_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][3]) && $session_note_details2['bundle5'][3] !== "NULL" ? $session_note_details2['bundle5'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle5_diag" id="bundle5_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-dark">5.5</span> Fat and Cholesterol</h3>
</div>
<div class="panel-body">
<select name="bundle6_select[]" id="bundle6_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_5_1 10662">Inadequate fat intake NI-5.5.1 10662</option>
<option value="5_5_2">Inadequate protein-energy intake NI-5.5.2 10658</option>
<option value="5_5_3">Intake of types of fats inconsistent with needs NI-5.5.3 10854</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle6_spec" name="bundle6_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][1]) && $session_note_details2['bundle6'][1] !== "NULL" ? $session_note_details2['bundle6'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle6_eti" name="bundle6_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][2]) && $session_note_details2['bundle6'][2] !== "NULL" ? $session_note_details2['bundle6'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle6_sign" name="bundle6_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][3]) && $session_note_details2['bundle6'][3] !== "NULL" ? $session_note_details2['bundle6'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle6_diag" id="bundle6_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5.6</span> Protein</h3>
</div>
<div class="panel-body">
<select name="bundle7_select[]" id="bundle7_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_6_1">Inadequate protein intake NI-5.6.1 10666</option>
<option value="5_6_2">Excessive protein intake NI-5.6.2 10667</option>
<option value="5_6_3">Intake of types of proteins inconsistent with needs NI-5.6.3 10855</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle7_spec" name="bundle7_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][1]) && $session_note_details2['bundle7'][1] !== "NULL" ? $session_note_details2['bundle7'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle7_eti" name="bundle7_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][2]) && $session_note_details2['bundle7'][2] !== "NULL" ? $session_note_details2['bundle7'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle7_sign" name="bundle7_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][3]) && $session_note_details2['bundle7'][3] !== "NULL" ? $session_note_details2['bundle7'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle7_diag" id="bundle7_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5.7</span> Amino Acid</h3>
</div>
<div class="panel-body">
<select name="bundle8_select[]" id="bundle8_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_7_1">Intake of types of amino acids inconsistent with needs NI-5.7.1 12007</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle8_spec" name="bundle8_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][1]) && $session_note_details2['bundle8'][1] !== "NULL" ? $session_note_details2['bundle8'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle8_eti" name="bundle8_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][2]) && $session_note_details2['bundle8'][2] !== "NULL" ? $session_note_details2['bundle8'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle8_sign" name="bundle8_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][3]) && $session_note_details2['bundle8'][3] !== "NULL" ? $session_note_details2['bundle8'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle8_diag" id="bundle8_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-dark">5.8</span> Carbohydrate and Fiber</h3>
</div>
<div class="panel-body">
<select name="bundle9_select[]" id="bundle9_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_8_1">Inadequate carbohydrate intake NI-5.8.1 10670</option>
<option value="5_8_2">Excessive carbohydrate intake NI-5.8.2 10671</option>
<option value="5_8_3">Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856</option>
<option value="5_8_4">Inconsistent carbohydrate intake NI-5.8.4 10673"></option>
<option value="5_8_5">Inadequate fiber intake NI-5.8.5 10675</option>
<option value="5_8_6">Excessive fiber intake NI-5.8.6 10676</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle9_spec" name="bundle9_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][1]) && $session_note_details2['bundle9'][1] !== "NULL" ? $session_note_details2['bundle9'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle9_eti" name="bundle9_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][2]) && $session_note_details2['bundle9'][2] !== "NULL" ? $session_note_details2['bundle9'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle9_sign" name="bundle9_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][3]) && $session_note_details2['bundle9'][3] !== "NULL" ? $session_note_details2['bundle9'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle9_diag" id="bundle9_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5.9</span> Vitamin</h3>
</div>
<div class="panel-body">
<select name="bundle10_select[]" id="bundle10_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<optgroup label="Inadequate vitamin intake (specify) NI-5.9.1 10678">
<option value="5_9_1_1">A (1) 10679</option>
<option value="5_9_1_2">C (2) 10680</option>
<option value="5_9_1_3">D (3) 10681</option>
<option value="5_9_1_4">E (4) 10682</option>
<option value="5_9_1_5">K (5) 10683</option>
<option value="5_9_1_6">Thiamin (6) 10684</option>
<option value="5_9_1_7">Riboflavin (7) 10685</option>
<option value="5_9_1_8">Niacin (8) 10686</option>
<option value="5_9_1_9">Folate (9) 10687</option>
<option value="5_9_1_10">B (10) 10688</option>
<option value="5_9_1_11">B122 (11) 10689</option>
<option value="5_9_1_12">3 10690</option>
<option value="5_9_1_13">Biotin (13) 10691</option>
</optgroup>
<optgroup label="Excessive vitamin intake (specify) NI-5.9.2 10693">
<option value="5_9_2_2">A (1) 10694</option>
<option value="5_9_2_3">C (2) 10695</option>
<option value="5_9_2_4">D (3) 10696</option>
<option value="5_9_2_5">E (4) 10697</option>
<option value="5_9_2_6">K (5) 10698</option>
<option value="5_9_2_7">Thiamin (6) 10699</option>
<option value="5_9_2_8">Riboflavin (7) 10700</option>
<option value="5_9_2_9">Niacin (8) 10701</option>
<option value="5_9_2_10">Folate (9) 10702</option>
<option value="5_9_2_11">B6 (10) 10703</option>
<option value="5_9_2_12">B12 (11) 10704</option>
<option value="5_9_2_13">Pantothenic acid (12) 10705</option>
<option value="5_9_2_14">Biotin (13) 10706</option>
</optgroup>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle10_spec" name="bundle10_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][1]) && $session_note_details2['bundle10'][1] !== "NULL" ? $session_note_details2['bundle10'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle10_eti" name="bundle10_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][2]) && $session_note_details2['bundle10'][2] !== "NULL" ? $session_note_details2['bundle10'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle10_sign" name="bundle10_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][3]) && $session_note_details2['bundle10'][3] !== "NULL" ? $session_note_details2['bundle10'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle10_diag" id="bundle10_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5.10</span> Mineral</h3>
</div>
<div class="panel-body">
<select name="bundle11_select[]" id="bundle11_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<optgroup label="Inadequate mineral intake (specify) NI-5.10.1 10709">
<option value="5_10_1_1">Calcium (1) 10710</option>
<option value="5_10_1_2">Chloride (2) 10711</option>
<option value="5_10_1_3">Iron (3) 10712</option>
<option value="5_10_1_4">Magnesium (4) 10713</option>
<option value="5_10_1_5">Potassium (5) 10714</option>
<option value="5_10_1_6">Phosphorus (6) 10715</option>
<option value="5_10_1_7">Sodium (7) 10716</option>
<option value="5_10_1_8">Zinc (8) 10717</option>
<option value="5_10_1_9">Sulfate (9) 10718</option>
<option value="5_10_1_10">Fluoride (10) 10719</option>
<option value="5_10_1_11">Copper (11) 10720</option>
<option value="5_10_1_12">Iodine (12) 10721</option>
<option value="5_10_1_13">Selenium (13) 10722</option>
<option value="5_10_1_14">Manganese (14) 10723</option>
<option value="5_10_1_15">Chromium (15) 10724</option>
<option value="5_10_1_16">Molybdenum (16) 10725</option>
<option value="5_10_1_17">Boron (17) 10726</option>
<option value="5_10_1_18">Cobalt (18) 10727</option>
</optgroup>
<optgroup label="Excessive mineral intake (specify) NI-5.10.2 10729">
<option value="5_10_2_1">Calcium (1) 10730</option>
<option value="5_10_2_2">Chloride (2) 10731</option>
<option value="5_10_2_3">Iron (3) 10732</option>
<option value="5_10_2_4">Magnesium (4) 10733</option>
<option value="5_10_2_5">Potassium (5) 10734</option>
<option value="5_10_2_6">Phosphorus (6) 10735</option>
<option value="5_10_2_7">Sodium (7) 10736</option>
<option value="5_10_2_8">Zinc (8) 10737</option>
<option value="5_10_2_9">Sulfate (9) 10738</option>
<option value="5_10_2_10">Fluoride (10) 10739</option>
<option value="5_10_2_11">Copper (11) 10740</option>
<option value="5_10_2_12">Iodine (12) 10741</option>
<option value="5_10_2_13">Selenium (13) 10742</option>
<option value="5_10_2_14">Manganese (14) 10743</option>
<option value="5_10_2_15">Chromium (15) 10744</option>
<option value="5_10_2_16">Molybdenum (16) 10745</option>
<option value="5_10_2_17">Boron (17) 10746</option>
<option value="5_10_2_18">Cobalt (18) 10747</option>
</optgroup>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle11_eti" name="bundle11_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle11'] ) ? ( isset($session_note_details2['bundle11'][1]) && $session_note_details2['bundle11'][1] !== "NULL" ? $session_note_details2['bundle11'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle11_sign" name="bundle11_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle11'] ) ? ( isset($session_note_details2['bundle11'][2]) && $session_note_details2['bundle11'][2] !== "NULL" ? $session_note_details2['bundle11'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle11_diag" id="bundle11_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5.11</span> Multi-Nutrient</h3>
</div>
<div class="panel-body">
<select name="bundle12_select[]" id="bundle12_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="5_11_1">Predicted inadequate nutrient intake NI-5.11.1 10750</option>
<option value="5_11_2">Predicted excessive nutrient intake NI-5.11.2 10751</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle12_spec" name="bundle12_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][1]) && $session_note_details2['bundle12'][1] !== "NULL" ? $session_note_details2['bundle12'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle12_eti" name="bundle12_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][2]) && $session_note_details2['bundle12'][2] !== "NULL" ? $session_note_details2['bundle12'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle12_sign" name="bundle12_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][3]) && $session_note_details2['bundle12'][3] !== "NULL" ? $session_note_details2['bundle12'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle12_diag" id="bundle12_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!-- end start intake -->

<!-- start clinical -->
<div id="exampleTransparentBody" class="panel is-collapse">
<div class="panel-heading">
<h3 class="panel-title black">Clinical (NC)</h3>
<div class="panel-actions">
<a class="panel-action icon wb-plus black" aria-controls="exampleTransparentBody" aria-expanded="true" data-toggle="panel-collapse" href="#exampleTransparentBody" aria-hidden="true"></a>
</div>
</div>

<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-12 pad_top">

<div class="testimonial-content">
<p>Nutritional findings/problems identified that relate to medical or physical conditions.</p>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Functional</h3>
</div>
<div class="panel-body">
<select name="bundle13_select[]" id="bundle13_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NC_1_1">Swallowing difficulty NC-1.1 10754</option>
<option value="NC_1_2">Biting/Chewing (masticatory) difficulty NC-1.2 10755</option>
<option value="NC_1_3">Breastfeeding difficulty NC-1.3 10756</option>
<option value="NC_1_4">Altered GI function NC-1.4 10757</option>
<option value="NC_1_5">Predicted breastfeeding difficulty NC-1.5 11146</option>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle13_eti" name="bundle13_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle13'] ) ? ( isset($session_note_details2['bundle13'][1]) && $session_note_details2['bundle13'][1] !== "NULL" ? $session_note_details2['bundle13'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle13_sign" name="bundle13_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle13'] ) ? ( isset($session_note_details2['bundle13'][2]) && $session_note_details2['bundle13'][2] !== "NULL" ? $session_note_details2['bundle13'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle13_diag" id="bundle13_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Biochemical</h3>
</div>
<div class="panel-body">
<select name="bundle14_select[]" id="bundle14_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NC_2_1">Impaired nutrient utilization NC-2.1 10759</option>
<option value="NC_2_2">Altered nutrition-related laboratory values NC-2.2 10760</option>
<option value="NC_2_3">Food�medication interaction NC-2.3 10761</option>
<option value="NC_2_4">Predicted food�medication interaction NC-2.4 10762</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle14_spec" name="bundle14_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][1]) && $session_note_details2['bundle14'][1] !== "NULL" ? $session_note_details2['bundle14'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle14_eti" name="bundle14_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][2]) && $session_note_details2['bundle14'][2] !== "NULL" ? $session_note_details2['bundle14'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle14_sign" name="bundle14_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][3]) && $session_note_details2['bundle14'][3] !== "NULL" ? $session_note_details2['bundle14'][3] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle14_diag" id="bundle14_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">3</span> Weight</h3>
</div>
<div class="panel-body">
<select name="bundle15_select[]" id="bundle15_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NC_3_1">Underweight NC-3.1 10764</option>
<option value="NC_3_2">Unintended weight loss NC-3.2 10765</option>
<optgroup label="Overweight/obesity NC-3.3 10766">
<option value="NC_3_3_1">Overweight, adult or pediatric NC-3.3.1 10767</option>
<option value="NC_3_3_2">Obese, pediatric NC-3.3.2 10768</option>
<option value="NC_3_3_3">Obese, Class I NC-3.3.3 10769</option>
<option value="NC_3_3_4">Obese, Class II NC-3.3.4 10818</option>
<option value="NC_3_3_5">Obese, Class III NC-3.3.5 10819</option>
</optgroup>
<option value="NC_3_4">Unintended weight gain NC-3.4 10770</option>
<option value="NC_3_5">Growth rate below expected NC-3.5 10802</option>
<option value="NC_3_6">Excessive growth rate NC-3.6 10803</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle15_eti" name="bundle15_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle15'] ) ? ( isset($session_note_details2['bundle15'][1]) && $session_note_details2['bundle15'][1] !== "NULL" ? $session_note_details2['bundle15'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle15_sign" name="bundle15_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle15'] ) ? ( isset($session_note_details2['bundle15'][2]) && $session_note_details2['bundle15'][2] !== "NULL" ? $session_note_details2['bundle15'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle15_diag" id="bundle15_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">4</span> Malnutrition Disorders</h3>
</div>
<div class="panel-body">
<select name="bundle16_select[]" id="bundle16_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<optgroup label="Malnutrition NC-4.1 10657">
<option value="NC_4_1_1">Starvation related malnutrition NC-4.1.1 11130</option>
<option value="NC_4_1_2">Chronic disease or condition related malnutrition NC-4.1.2 11131</option>
<option value="NC_4_1_3">Acute disease or injury related malnutrition NC-4.1.3 11132</option>
</optgroup>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle16_eti" name="bundle16_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle16'] ) ? ( isset($session_note_details2['bundle16'][1]) && $session_note_details2['bundle6'][1] !== "NULL" ? $session_note_details2['bundle16'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle16_sign" name="bundle16_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle16'] ) ? ( isset($session_note_details2['bundle16'][2]) && $session_note_details2['bundle6'][2] !== "NULL" ? $session_note_details2['bundle16'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle16_diag" id="bundle16_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!-- end clinical -->

<!-- start behavioral-environmental -->
<div id="exampleTransparentBody" class="panel is-collapse">
<div class="panel-heading">
<h3 class="panel-title black">Behavioral-Environmental (NB)</h3>
<div class="panel-actions">
<a class="panel-action icon wb-plus black" aria-controls="exampleTransparentBody" aria-expanded="true" data-toggle="panel-collapse" href="#exampleTransparentBody" aria-hidden="true"></a>
</div>
</div>

<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-12 pad_top">

<div class="testimonial-content">
<p>Nutritional findings/problems identified that relate to knowledge, attitudes/beliefs, physical environment, access to food, or food safety.</p>
</div>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Knowledge and Beliefs</h3>
</div>
<div class="panel-body">
<select name="bundle17_select[]" id="bundle17_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NB_1_1">Food- and nutrition-related knowledge deficit NB-1.1 10773</option>
<option value="NB_1_2">Unsupported beliefs/attitudes about food- or nutrition-related topics (use with caution) NB-1.2 10857</option>
<option value="NB_1_3">Not ready for diet/lifestyle change NB-1.3 10775</option>
<option value="NB_1_4">Self-monitoring deficit NB-1.4 10776</option>
<option value="NB_1_5">Disordered eating pattern NB-1.5 10777</option>
<option value="NB_1_6">Limited adherence to nutrition-related recommendations NB-1.6 10778</option>
<option value="NB_1_7">Undesirable food choices NB-1.7 10779</option>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle17_eti" name="bundle17_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle17'] ) ? ( isset($session_note_details2['bundle17'][1]) && $session_note_details2['bundle17'][1] !== "NULL" ? $session_note_details2['bundle17'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle17_sign" name="bundle17_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle17'] ) ? ( isset($session_note_details2['bundle17'][2]) && $session_note_details2['bundle17'][2] !== "NULL" ? $session_note_details2['bundle17'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle17_diag" id="bundle17_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Physical Activity and Function</h3>
</div>
<div class="panel-body">
<select name="bundle18_select[]" id="bundle18_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NB_2_1">Physical inactivity NB-2.1 10782</option>
<option value="NB_2_2">Excessive physical activity NB-2.2 10783</option>
<option value="NB_2_3">Inability to manage self-care NB-2.3 10780</option>
<option value="NB_2_4">Impaired ability to prepare foods/meals NB-2.4 10785</option>
<option value="NB_2_5">Poor nutrition quality of life NB-2.5 10786</option>
<option value="NB_2_6">Self-feeding difficulty NB-2.6 10787</option>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle18_eti" name="bundle18_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle18'] ) ? ( isset($session_note_details2['bundle18'][1]) && $session_note_details2['bundle18'][1] !== "NULL" ? $session_note_details2['bundle18'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle18_sign" name="bundle18_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle18'] ) ? ( isset($session_note_details2['bundle18'][2]) && $session_note_details2['bundle18'][2] !== "NULL" ? $session_note_details2['bundle18'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle18_diag" id="bundle18_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">3</span> Food Safety and Access (3)</h3>
</div>
<div class="panel-body">
<select name="bundle19_select[]" id="bundle19_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NB_3_1">Intake of unsafe food NB-3.1 10789</option>
<option value="NB_3_2">Limited access to food NB-3.2 12009</option>
<option value="NB_3_3">Limited access to nutrition-related supplies NB-3.3 10791</option>
<option value="NB_3_4">q Limited access to potable water NB-3.4 12010</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle19_eti" name="bundle19_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle19'] ) ? ( isset($session_note_details2['bundle19'][1]) && $session_note_details2['bundle19'][1] !== "NULL" ? $session_note_details2['bundle19'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle19_sign" name="bundle19_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle19'] ) ? ( isset($session_note_details2['bundle19'][2]) && $session_note_details2['bundle19'][2] !== "NULL" ? $session_note_details2['bundle19'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle19_diag" id="bundle19_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!-- end behavioral-environmental -->

<!-- start other -->
<div id="exampleTransparentBody" class="panel is-collapse">
<div class="panel-heading">
<h3 class="panel-title black">Other (NO)</h3>
<div class="panel-actions">
<a class="panel-action icon wb-plus black" aria-controls="exampleTransparentBody" aria-expanded="true" data-toggle="panel-collapse" href="#exampleTransparentBody" aria-hidden="true"></a>
</div>
</div>

<div class="panel-body">
<div class="row row-lg">
<div class="col-lg-12 pad_top">

<div class="testimonial-content">
<p>Nutrition findings that are not classified as intake, clinical or behavioral-environmental problems.</p>
</div>
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Other</h3>
</div>
<div class="panel-body">
<select name="bundle20_select[]" id="bundle20_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="NO_1_1">No nutrition diagnosis at this time NO-1.1 10795</option>
</select>
<div class="form-group form-material has-info pad_top"> 

<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->

<textarea class="form-control" id="bundle20_eti" name="bundle20_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle20'] ) ? ( isset($session_note_details2['bundle20'][1]) && $session_note_details2['bundle20'][1] !== "NULL" ? $session_note_details2['bundle20'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle20_sign" name="bundle20_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle20'] ) ? ( isset($session_note_details2['bundle20'][2]) && $session_note_details2['bundle20'][2] !== "NULL" ? $session_note_details2['bundle20'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle20_diag" id="bundle20_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
<option disabled="disabled" selected="selected">Diagnosis Status</option>
<optgroup>
<option value="New">New</option>
<option value="Continued">Continued</option>
<option value="Resolved">Resolved</option>
</optgroup>
</select>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<!-- end other -->
</form>
<!-- save -->
<div class="panel">
<div class="panel-body">

<div class="col-md-4">
<button onclick="submit(1)" type="button" class="btn btn-default btn-block btn_pad">Save & Go Back</button>
</div>

<div class="col-md-4">
<button onclick="submit(2)" type="button" class="btn btn-block btn-success btn_pad">Save</button>
</div>

<div class="col-md-4">
<button onclick="submit(3)" type="button" class="btn btn-primary btn-block btn_pad">Save & Continue</button>
</div>

</div>
</div>
<!-- end save -->

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
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script> 
<script src="../assets/assets/vendor/multi-select/jquery.multi-select.js"></script> 
<script src="../assets/assets/vendor/matchheight/jquery.matchHeight-min.js"></script> 
<!-- Scripts --> 

<script src="../assets/assets/js/core.js"></script> 
<script src="../assets/assets/js/site.js"></script> 
<script src="../assets/assets/js/sections/menu.js"></script> 
<script src="../assets/assets/js/components/bootstrap-select.js"></script> 
<script src="../assets/assets/js/sections/menubar.js"></script> 
<script src="../assets/assets/js/sections/sidebar.js"></script> 
<script src="../assets/assets/js/configs/config-colors.js"></script> 
<script src="../assets/assets/js/configs/config-tour.js"></script> 
<script src="../assets/assets/js/components/asscrollable.js"></script> 
<script src="../assets/assets/js/components/animsition.js"></script> 
<script src="../assets/assets/js/components/slidepanel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script> 
<script src="../assets/assets/js/components/multi-select.js"></script> 
<script src="../assets/assets/js/components/jquery-placeholder.js"></script> 
<script src="../assets/assets/js/components/matchheight.min.js"></script>

<script src="../assets/assets/js/components/panel.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-structure.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>

<script>
	var dietAdvice = <?php print_r( json_encode( $dietAdvice ) )?>;
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
    (function(document, window, $) {



      'use strict';







      var Site = window.Site;



      $(document).ready(function() {



        Site.run();



      });

    })(document, window, jQuery);



    var session_note_details2 = <?php print_r( json_encode( $session_note_details2 ) ); ?>;

    $( '#q1' ).val( session_note_details2.sn2_q1 );

    $( '#q2' ).val( session_note_details2.sn2_q2 );

    $( '#q3' ).val( session_note_details2.sn2_q3 );





    //bundle1

    var bundle1 = session_note_details2.bundle1;

    var bundle1_select = bundle1.length > 0 ? ( bundle1[0] !== "''" ? bundle1[0] : '' ) : '';

    var bundle1_values = bundle1_select.split( ',' );



	var values = $( '#bundle1_select option' ).each( function() {



	    if( jQuery.inArray( $( this ).val(), bundle1_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle1_diag = bundle1.length > 0 ? ( bundle1[3] !== "''" ? bundle1[3] : '' ) : '';

	$( '#bundle1_diag').val( bundle1_diag );



	//bundle2

    var bundle2 = session_note_details2.bundle2;

    var bundle2_select = bundle2.length > 0 ? ( bundle2[0] !== "''" ? bundle2[0] : '' ) : '';

    var bundle2_values = bundle2_select.split( ',' );



	var values = $( '#bundle2_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle2_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle2_diag = bundle2.length > 0 ? ( bundle2[3] !== "''" ? bundle2[3] : '' ) : '';

	$( '#bundle2_diag').val( bundle2_diag );



	//bundle3

    var bundle3 = session_note_details2.bundle3;

    var bundle3_select = bundle3.length > 0 ? ( bundle3[0] !== "''" ? bundle3[0] : '' ) : '';

    var bundle3_values = bundle3_select.split( ',' );



	var values = $( '#bundle3_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle3_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle3_diag = bundle3.length > 0 ? ( bundle3[3] !== "''" ? bundle3[3] : '' ) : '';

	$( '#bundle3_diag').val( bundle3_diag );



	//bundle4

    var bundle4 = session_note_details2.bundle4;

    var bundle4_select = bundle4.length > 0 ? ( bundle4[0] !== "''" ? bundle4[0] : '' ) : '';

    var bundle4_values = bundle4_select.split( ',' );



	var values = $( '#bundle4_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle4_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle4_diag = bundle4.length > 0 ? ( bundle4[3] !== "''" ? bundle4[3] : '' ) : '';

	$( '#bundle4_diag').val( bundle4_diag );



	//bundle5

    var bundle5 = session_note_details2.bundle5;

    var bundle5_select = bundle5.length > 0 ? ( bundle5[0] !== "''" ? bundle5[0] : '' ) : '';

    var bundle5_values = bundle5_select.split( ',' );



	var values = $( '#bundle5_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle5_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle5_diag = bundle5.length > 0 ? ( bundle5[4] !== "''" ? bundle5[4] : '' ) : '';

	$( '#bundle5_diag').val( bundle5_diag );

    

	//bundle6

    var bundle6 = session_note_details2.bundle6;

    var bundle6_select = bundle6.length > 0 ? ( bundle6[0] !== "''" ? bundle6[0] : '' ) : '';

    var bundle6_values = bundle6_select.split( ',' );



	var values = $( '#bundle6_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle6_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle6_diag = bundle6.length > 0 ? ( bundle6[4] !== "''" ? bundle6[4] : '' ) : '';

	$( '#bundle6_diag').val( bundle6_diag );



	//bundle7

    var bundle7 = session_note_details2.bundle7;

    var bundle7_select = bundle7.length > 0 ? ( bundle7[0] !== "''" ? bundle7[0] : '' ) : '';

    var bundle7_values = bundle7_select.split( ',' );



	var values = $( '#bundle7_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle7_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle7_diag = bundle7.length > 0 ? ( bundle7[4] !== "''" ? bundle7[4] : '' ) : '';

	$( '#bundle7_diag').val( bundle7_diag );



	//bundle8

    var bundle8 = session_note_details2.bundle8;

    var bundle8_select = bundle8.length > 0 ? ( bundle8[0] !== "''" ? bundle8[0] : '' ) : '';

    var bundle8_values = bundle8_select.split( ',' );



	var values = $( '#bundle8_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle8_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle8_diag = bundle8.length > 0 ? ( bundle8[4] !== "''" ? bundle8[4] : '' ) : '';

	$( '#bundle8_diag').val( bundle8_diag );



	//bundle9

    var bundle9 = session_note_details2.bundle9;

    var bundle9_select = bundle9.length > 0 ? ( bundle9[0] !== "''" ? bundle9[0] : '' ) : '';

    var bundle9_values = bundle9_select.split( ',' );



	var values = $( '#bundle9_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle9_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle9_diag = bundle9.length > 0 ? ( bundle9[4] !== "''" ? bundle9[4] : '' ) : '';

	$( '#bundle9_diag').val( bundle9_diag );



	//bundle10

    var bundle10 = session_note_details2.bundle10;

    var bundle10_select = bundle10.length > 0 ? ( bundle10[0] !== "''" ? bundle10[0] : '' ) : '';

    var bundle10_values = bundle10_select.split( ',' );



	var values = $( '#bundle10_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle10_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle10_diag = bundle10.length > 0 ? ( bundle10[4] !== "''" ? bundle10[4] : '' ) : '';

	$( '#bundle10_diag').val( bundle10_diag );



	//bundle11

    var bundle11 = session_note_details2.bundle11;

    var bundle11_select = bundle11.length > 0 ? ( bundle11[0] !== "''" ? bundle11[0] : '' ) : '';

    var bundle11_values = bundle11_select.split( ',' );



	var values = $( '#bundle11_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle11_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle11_diag = bundle11.length > 0 ? ( bundle11[3] !== "''" ? bundle11[3] : '' ) : '';

	$( '#bundle11_diag').val( bundle11_diag );



	//bundle12

    var bundle12 = session_note_details2.bundle12;

    var bundle12_select = bundle12.length > 0 ? ( bundle12[0] !== "''" ? bundle12[0] : '' ) : '';

    var bundle12_values = bundle12_select.split( ',' );



	var values = $( '#bundle12_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle12_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle12_diag = bundle12.length > 0 ? ( bundle12[4] !== "''" ? bundle12[4] : '' ) : '';

	$( '#bundle12_diag').val( bundle12_diag );



	//bundle13

    var bundle13 = session_note_details2.bundle13;

    var bundle13_select = bundle13.length > 0 ? ( bundle13[0] !== "''" ? bundle13[0] : '' ) : '';

    var bundle13_values = bundle13_select.split( ',' );



	var values = $( '#bundle13_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle13_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle13_diag = bundle13.length > 0 ? ( bundle13[3] !== "''" ? bundle13[3] : '' ) : '';

	$( '#bundle13_diag').val( bundle13_diag );



	//bundle14

    var bundle14 = session_note_details2.bundle14;

    var bundle14_select = bundle14.length > 0 ? ( bundle14[0] !== "''" ? bundle14[0] : '' ) : '';

    var bundle14_values = bundle14_select.split( ',' );



	var values = $( '#bundle14_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle14_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle14_diag = bundle14.length > 0 ? ( bundle14[4] !== "''" ? bundle14[4] : '' ) : '';

	$( '#bundle14_diag').val( bundle14_diag );



	//bundle15

    var bundle15 = session_note_details2.bundle15;

    var bundle15_select = bundle15.length > 0 ? ( bundle15[0] !== "''" ? bundle15[0] : '' ) : '';

    var bundle15_values = bundle15_select.split( ',' );



	var values = $( '#bundle15_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle15_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle15_diag = bundle15.length > 0 ? ( bundle15[3] !== "''" ? bundle15[3] : '' ) : '';

	$( '#bundle15_diag').val( bundle15_diag );



	//bundle16

    var bundle16 = session_note_details2.bundle16;

    var bundle16_select = bundle16.length > 0 ? ( bundle16[0] !== "''" ? bundle16[0] : '' ) : '';

    var bundle16_values = bundle16_select.split( ',' );



	var values = $( '#bundle16_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle16_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle16_diag = bundle16.length > 0 ? ( bundle16[3] !== "''" ? bundle16[3] : '' ) : '';

	$( '#bundle16_diag').val( bundle16_diag );



	//bundle17

    var bundle17 = session_note_details2.bundle17;

    var bundle17_select = bundle17.length > 0 ? ( bundle17[0] !== "''" ? bundle17[0] : '' ) : '';

    var bundle17_values = bundle17_select.split( ',' );



	var values = $( '#bundle17_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle17_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle17_diag = bundle17.length > 0 ? ( bundle17[3] !== "''" ? bundle17[3] : '' ) : '';

	$( '#bundle17_diag').val( bundle17_diag );



	//bundle18

    var bundle18 = session_note_details2.bundle18;

    var bundle18_select = bundle18.length > 0 ? ( bundle18[0] !== "''" ? bundle18[0] : '' ) : '';

    var bundle18_values = bundle18_select.split( ',' );



	var values = $( '#bundle18_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle18_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle18_diag = bundle18.length > 0 ? ( bundle18[3] !== "''" ? bundle18[3] : '' ) : '';

	$( '#bundle18_diag').val( bundle18_diag );



	//bundle19

    var bundle19 = session_note_details2.bundle19;

    var bundle19_select = bundle19.length > 0 ? ( bundle19[0] !== "''" ? bundle19[0] : '' ) : '';

    var bundle19_values = bundle19_select.split( ',' );



	var values = $( '#bundle19_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle19_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle19_diag = bundle19.length > 0 ? ( bundle19[3] !== "''" ? bundle19[3] : '' ) : '';

	$( '#bundle19_diag').val( bundle19_diag );



	//bundle20

    var bundle20 = session_note_details2.bundle20;

    var bundle20_select = bundle20.length > 0 ? ( bundle20[0] !== "''" ? bundle20[0] : '' ) : '';

    var bundle20_values = bundle20_select.split( ',' );



	var values = $( '#bundle20_select option' ).each( function() {

		

	    if( jQuery.inArray( $( this ).val(), bundle20_values ) == -1 ){



	    }else{

	    	$( this ).attr( 'selected','selected');

	    }

	});



	var bundle20_diag = bundle20.length > 0 ? ( bundle20[3] !== "''" ? bundle20[3] : '' ) : '';

	$( '#bundle20_diag').val( bundle20_diag );



    function submit( page ){

    	switch( page ){

    		case 1:

			$( '#submit_type' ).val( '1' );

			$( '#session_note1' ).submit();

    		break;

    		case 2:

			$( '#submit_type' ).val( '2' );

			$( '#session_note1' ).submit();

    		break;

    		case 3:

			$( '#submit_type' ).val( '3' );

			$( '#session_note1' ).submit();

    		break;

    	}

    }

  </script>
</body>
</html>