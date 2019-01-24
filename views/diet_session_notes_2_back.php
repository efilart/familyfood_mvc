<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Session Notes - Diagnosis | Familyfood Dashboard</title>

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
<h2><span class="label label-success" style="text-transform: uppercase">Session notes for <?php echo $user_full_name;	?></span></h2>
<ol class="breadcrumb">
<li><a href="viewappointments">Home</a></li>
<li><a href="sessionflow">Nutrition Assessment</a></li>
<li class="active">Diagnosis</li>
</ol>
</div>
<!-- end header -->

<div class="page-content">
<div class="panel">
<div class="panel-body">

<div class="example-well">
<div class="page-header">
<h1 class="page-title">Diagnosis - INTAKE (NI)</h1>
<div class="page-header-actions">
<div>
<button onclick="submit(1)" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>&nbsp;
<button onclick="submit(2)" type="button" class="btn btn-primary">Save</button>&nbsp;
<button onclick="submit(3)" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button>
</div>
</div>
</div>
</div>
<form id="session_note1" method="POST">
<input type="hidden" name="submit_type" id="submit_type" value="">
<!-- start content -->
<h5 class="pad_bottom">Each term is designated with an alpha-numeric NCPT hierarchical code, followed by a five-digit (e.g., 99999) Academy SNOMED CT/LOINC unique identifier (ANDUID). Neither should be used in nutrition documentation. The ANDUID is for data tracking purposes in electronic health records.</h5>

<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> INTAKE (NI)</h3>
</div>
<div class="panel-body">
<select name="bundle1_select[]" data-plugin="selectpicker" id="bundle1_select" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="Increased energy expenditure NI-1.1 10633">Increased energy expenditure NI-1.1 10633</option>
<option value="Inadequate energy intake NI-1.2 10634">Inadequate energy intake NI-1.2 10634</option>
<option value="Excessive energy intake NI-1.3 10635">Excessive energy intake NI-1.3 10635</option>
<option value="Predicted inadequate energy intake NI-1.4 10636">Predicted inadequate energy intake NI-1.4 10636</option>
<option value="Predicted excessive energy intake NI-1.5 10637">Predicted excessive energy intake NI-1.5 10637</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle1_eti" name="bundle1_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle1'] ) ? ( isset( $session_note_details2['bundle1'][1] ) ? $session_note_details2['bundle1'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle1_sign" name="bundle1_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle1'] ) ? ( isset( $session_note_details2['bundle1'][2] ) ? $session_note_details2['bundle1'][2] : '' ) : ''; ?></textarea>
<div class="pad_top"></div>
<select name="bundle1_diag" id="bundle1_diag" data-plugin="selectpicker" data-style="btn btn-outline btn-info">
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
<h3 class="panel-title"><span class="badge badge-default">2</span> Oral / Nutrition Support Intake</h3>
</div>
<div class="panel-body">
<select name="bundle2_select[]" id="bundle2_select" data-plugin="selectpicker" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="Inadequate oral intake NI-2.1 10639">Inadequate oral intake NI-2.1 10639</option>
<option value="Excessive oral intake NI-2.2 10640">Excessive oral intake NI-2.2 10640</option>
<option value="Inadequate enteral nutrition infusion NI-2.3 10641">Inadequate enteral nutrition infusion NI-2.3 10641</option>
<option value="Excessive enteral nutrition infusion NI-2.4 10642">Excessive enteral nutrition infusion NI-2.4 10642</option>
<option value="Enteral nutrition composition inconsistent with needs NI-2.5 11142">Enteral nutrition composition inconsistent with needs NI-2.5 11142</option>
<option value="Enteral nutrition administration inconsistent with needs NI-2.6 11143">Enteral nutrition administration inconsistent with needs NI-2.6 11143</option>
<option value="Inadequate parenteral nutrition infusion NI-2.7 10644">Inadequate parenteral nutrition infusion NI-2.7 10644</option>
<option value="Excessive parenteral nutrition infusion NI-2.8 10645">Excessive parenteral nutrition infusion NI-2.8 10645</option>
<option value="Parenteral nutrition composition inconsistent with needs NI-2.9 11144">Parenteral nutrition composition inconsistent with needs NI-2.9 11144</option>
<option value="Parenteral nutrition administration inconsistent with needs NI-2.10 11145">Parenteral nutrition administration inconsistent with needs NI-2.10 11145</option>
<option value="Limited food acceptance NI-2.11 10647">Limited food acceptance NI-2.11 10647</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle2_eti" name="bundle2_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle2'] ) ? ( isset($session_note_details2['bundle2'][1]) ? $session_note_details2['bundle2'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle2_sign" name="bundle2_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle2'] ) ? ( isset($session_note_details2['bundle2'][2]) ? $session_note_details2['bundle2'][2] : '' ) : ''; ?></textarea>
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
<option value="Inadequate fluid intake NI-3.1 10649">Inadequate fluid intake NI-3.1 10649</option>
<option value="Excessive fluid intake NI-3.2 10650">Excessive fluid intake NI-3.2 10650</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle3_eti" name="bundle3_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle3'] ) ? ( isset($session_note_details2['bundle3'][1]) ? $session_note_details2['bundle3'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle3_sign" name="bundle3_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle3'] ) ? ( isset($session_note_details2['bundle3'][2]) ? $session_note_details2['bundle3'][2] : '' ) : ''; ?></textarea>
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
<option value="Inadequate plant stanol ester intake NI-4.1.1 11077">Inadequate plant stanol ester intake NI-4.1.1 11077</option>
<option value="Inadequate plant sterol ester intake NI-4.1.2 11078">Inadequate plant sterol ester intake NI-4.1.2 11078</option>
<option value="Inadequate soy protein intake NI-4.1.3 11080">Inadequate soy protein intake NI-4.1.3 11080</option>
<option value="Inadequate psyllium intake NI-4.1.4 11079">Inadequate psyllium intake NI-4.1.4 11079</option>
<option value="Inadequate β-glucan intake NI-4.1.5 11076">Inadequate β-glucan intake NI-4.1.5 11076</option>
</optgroup>

<optgroup label="Excessive bioactive substance intake">
<option value="Excessive plant stanol ester intake NI-4.2.1 11084">Excessive plant stanol ester intake NI-4.2.1 11084</option>
<option value="Excessive plant sterol ester intake NI-4.2.2 11085">Excessive plant sterol ester intake NI-4.2.2 11085</option>
<option value="Excessive soy protein intake NI-4.2.3 11087">Excessive soy protein intake NI-4.2.3 11087</option>
<option value="Excessive psyllium intake NI-4.2.4 11086">Excessive psyllium intake NI-4.2.4 11086</option>
<option value="Excessive β-glucan intake NI-4.2.5 11081">Excessive β-glucan intake NI-4.2.5 11081</option>
<option value="Excessive food additive intake NI-4.2.6 11083">Excessive food additive intake NI-4.2.6 11083</option>
<option value="Excessive caffeine intake NI-4.2.7 11082">Excessive caffeine intake NI-4.2.7 11082</option>
<option value="Excessive alcohol intake NI-4.3 10654">Excessive alcohol intake NI-4.3 10654</option>
</optgroup>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle4_eti" name="bundle4_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle4'] ) ? ( isset($session_note_details2['bundle4'][1]) ? $session_note_details2['bundle4'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle4_sign" name="bundle4_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle4'] ) ? ( isset($session_note_details2['bundle4'][2]) ? $session_note_details2['bundle4'][2] : '' ) : ''; ?></textarea>
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
<option value="Increased nutrient needs NI-5.1 10656">Increased nutrient needs NI-5.1 10656</option>
<option value="Inadequate protein-energy intake NI-5.2 10658">Inadequate protein-energy intake NI-5.2 10658</option>
<option value="Decreased nutrient needs NI-5.3 10659">Decreased nutrient needs NI-5.3 10659</option>
<option value="Imbalance of nutrients NI-5.4 10660">Imbalance of nutrients NI-5.4 10660</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle5_spec" name="bundle5_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][1]) ? $session_note_details2['bundle5'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle5_eti" name="bundle5_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][2]) ? $session_note_details2['bundle5'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle5_sign" name="bundle5_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle5'] ) ? ( isset($session_note_details2['bundle5'][3]) ? $session_note_details2['bundle5'][3] : '' ) : ''; ?></textarea>
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
<option value="Inadequate fat intake NI-5.5.1 10662">Inadequate fat intake NI-5.5.1 10662</option>
<option value="Inadequate protein-energy intake NI-5.2 10658">Inadequate protein-energy intake NI-5.2 10658</option>
<option value="Intake of types of fats inconsistent with needs NI-5.5.3 10854">Intake of types of fats inconsistent with needs NI-5.5.3 10854</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle6_spec" name="bundle6_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][1]) ? $session_note_details2['bundle6'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle6_eti" name="bundle6_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][2]) ? $session_note_details2['bundle6'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle6_sign" name="bundle6_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle6'] ) ? ( isset($session_note_details2['bundle6'][3]) ? $session_note_details2['bundle6'][3] : '' ) : ''; ?></textarea>
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
<option value="Inadequate protein intake NI-5.6.1 10666">Inadequate protein intake NI-5.6.1 10666</option>
<option value="Excessive protein intake NI-5.6.2 10667">Excessive protein intake NI-5.6.2 10667</option>
<option value="Intake of types of proteins inconsistent with needs NI-5.6.3 10855">Intake of types of proteins inconsistent with needs NI-5.6.3 10855</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle7_spec" name="bundle7_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][1]) ? $session_note_details2['bundle7'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle7_eti" name="bundle7_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][2]) ? $session_note_details2['bundle7'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle7_sign" name="bundle7_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle7'] ) ? ( isset($session_note_details2['bundle7'][3]) ? $session_note_details2['bundle7'][3] : '' ) : ''; ?></textarea>
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
<option value="Intake of types of amino acids inconsistent with needs NI-5.7.1 12007">Intake of types of amino acids inconsistent with needs NI-5.7.1 12007</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle8_spec" name="bundle8_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][1]) ? $session_note_details2['bundle8'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle8_eti" name="bundle8_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][2]) ? $session_note_details2['bundle8'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle8_sign" name="bundle8_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle8'] ) ? ( isset($session_note_details2['bundle8'][3]) ? $session_note_details2['bundle8'][3] : '' ) : ''; ?></textarea>
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
<option value="Inadequate carbohydrate intake NI-5.8.1 10670">Inadequate carbohydrate intake NI-5.8.1 10670</option>
<option value="Excessive carbohydrate intake NI-5.8.2 10671">Excessive carbohydrate intake NI-5.8.2 10671</option>
<option value="Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856">Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856</option>
<option value="Inadequate carbohydrate intake NI-5.8.1 10670">Inadequate carbohydrate intake NI-5.8.1 10670</option>
<option value="Inadequate carbohydrate intake NI-5.8.1 10670">Inadequate carbohydrate intake NI-5.8.1 10670</option>
<option value="Excessive carbohydrate intake NI-5.8.2 10671">Excessive carbohydrate intake NI-5.8.2 10671"></option>
<option value="Excessive carbohydrate intake NI-5.8.2 10671">Excessive carbohydrate intake NI-5.8.2 10671</option>
<option value="Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856">Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856"></option>
<option value="Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856">Intake of types of carbohydrate inconsistent with needs NI-5.8.3 10856</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle9_spec" name="bundle9_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][1]) ? $session_note_details2['bundle9'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle9_eti" name="bundle9_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][2]) ? $session_note_details2['bundle9'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle9_sign" name="bundle9_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle9'] ) ? ( isset($session_note_details2['bundle9'][3]) ? $session_note_details2['bundle9'][3] : '' ) : ''; ?></textarea>
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
<option value="A (1) 10679">A (1) 10679</option>
<option value="C (2) 10680">C (2) 10680</option>
<option value="D (3) 10681">D (3) 10681</option>
<option value="E (4) 10682">E (4) 10682</option>
<option value="K (5) 10683">K (5) 10683</option>
<option value="Thiamin (6) 10684">Thiamin (6) 10684</option>
<option value="Riboflavin (7) 10685">Riboflavin (7) 10685</option>
<option value="Niacin (8) 10686">Niacin (8) 10686</option>
<option value="Folate (9) 10687">Folate (9) 10687</option>
<option value="B6 (10) 10688">B6 (10) 10688</option>
<option value="B12 (11) 10689">B12 (11) 10689</option>
<option value="Pantothenic acid (12) 10690">Pantothenic acid (12) 10690</option>
<option value="Biotin (13) 10691">Biotin (13) 10691</option>
</optgroup>
<optgroup label="Excessive vitamin intake (specify) NI-5.9.2 10693">
<option value="A (1) 10694">A (1) 10694</option>
<option value="C (2) 10695">C (2) 10695</option>
<option value="D (3) 10696">D (3) 10696</option>
<option value="E (4) 10697">E (4) 10697</option>
<option value="K (5) 10698">K (5) 10698</option>
<option value="Thiamin (6) 10699">Thiamin (6) 10699</option>
<option value="Riboflavin (7) 10700">Riboflavin (7) 10700</option>
<option value="Niacin (8) 10701">Niacin (8) 10701</option>
<option value="Folate (9) 10702">Folate (9) 10702</option>
<option value="B6 (10) 10703">B6 (10) 10703</option>
<option value="B12 (11) 10704">B12 (11) 10704</option>
<option value="Pantothenic acid (12) 10705">Pantothenic acid (12) 10705</option>
<option value="Biotin (13) 10706">Biotin (13) 10706</option>
</optgroup>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle10_spec" name="bundle10_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][1]) ? $session_note_details2['bundle10'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle10_eti" name="bundle10_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][2]) ? $session_note_details2['bundle10'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle10_sign" name="bundle10_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle10'] ) ? ( isset($session_note_details2['bundle10'][3]) ? $session_note_details2['bundle10'][3] : '' ) : ''; ?></textarea>
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
<option value="Calcium (1) 10710">Calcium (1) 10710</option>
<option value="Chloride (2) 10711">Chloride (2) 10711</option>
<option value="Iron (3) 10712">Iron (3) 10712</option>
<option value="Magnesium (4) 10713">Magnesium (4) 10713</option>
<option value="Potassium (5) 10714">Potassium (5) 10714</option>
<option value="Phosphorus (6) 10715">Phosphorus (6) 10715</option>
<option value="Sodium (7) 10716">Sodium (7) 10716</option>
<option value="Zinc (8) 10717">Zinc (8) 10717</option>
<option value="Sulfate (9) 10718">Sulfate (9) 10718</option>
<option value="Fluoride (10) 10719">Fluoride (10) 10719</option>
<option value="Copper (11) 10720">Copper (11) 10720</option>
<option value="Iodine (12) 10721">Iodine (12) 10721</option>
<option value="Selenium (13) 10722">Selenium (13) 10722</option>
<option value="Manganese (14) 10723">Manganese (14) 10723</option>
<option value="Chromium (15) 10724">Chromium (15) 10724</option>
<option value="Molybdenum (16) 10725">Molybdenum (16) 10725</option>
<option value="Boron (17) 10726">Boron (17) 10726</option>
<option value="Cobalt (18) 10727">Cobalt (18) 10727</option>
</optgroup>

<optgroup label="Excessive mineral intake (specify) NI-5.10.2 10729">
<option value="Calcium (1) 10730">Calcium (1) 10730</option>
<option value="Chloride (2) 10731">Chloride (2) 10731</option>
<option value="Iron (3) 10732">Iron (3) 10732</option>
<option value="Magnesium (4) 10733">Magnesium (4) 10733</option>
<option value="Potassium (5) 10734">Potassium (5) 10734</option>
<option value="Phosphorus (6) 10735">Phosphorus (6) 10735</option>
<option value="Sodium (7) 10736">Sodium (7) 10736</option>
<option value="Zinc (8) 10737">Zinc (8) 10737</option>
<option value="Sulfate (9) 10738">Sulfate (9) 10738</option>
<option value="Fluoride (10) 10739">Fluoride (10) 10739</option>
<option value="Copper (11) 10740">Copper (11) 10740</option>
<option value="Iodine (12) 10741">Iodine (12) 10741</option>
<option value="Selenium (13) 10742">Selenium (13) 10742</option>
<option value="Manganese (14) 10743">Manganese (14) 10743</option>
<option value="Chromium (15) 10744">Chromium (15) 10744</option>
<option value="Molybdenum (16) 10745">Molybdenum (16) 10745</option>
<option value="Boron (17) 10746">Boron (17) 10746</option>
<option value="Cobalt (18) 10747">Cobalt (18) 10747</option>
</optgroup>
</select>

<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle11_eti" name="bundle11_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle11'] ) ? ( isset($session_note_details2['bundle11'][1]) ? $session_note_details2['bundle11'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle11_sign" name="bundle11_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle11'] ) ? ( isset($session_note_details2['bundle11'][2]) ? $session_note_details2['bundle11'][2] : '' ) : ''; ?></textarea>
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
<option value="Predicted inadequate nutrient intake NI-5.11.1 10750">Predicted inadequate nutrient intake NI-5.11.1 10750</option>
<option value="Predicted excessive nutrient intake NI-5.11.2 10751">Predicted excessive nutrient intake NI-5.11.2 10751</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle12_spec" name="bundle12_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][1]) ? $session_note_details2['bundle12'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle12_eti" name="bundle12_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][2]) ? $session_note_details2['bundle12'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle12_sign" name="bundle12_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle12'] ) ? ( isset($session_note_details2['bundle12'][3]) ? $session_note_details2['bundle12'][3] : '' ) : ''; ?></textarea>
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
<div class="example-well">
<div class="page-header">
<h1 class="page-title">CLINICAL (NC)</h1>
<div class="page-header-actions">
<div>
<!-- <button type="button" onclick="submit(1); return false;" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp; -->
<button type="button" onclick="submit(2); return false;" class="btn btn-primary">Save</button>
&nbsp;
<!-- <button type="button" onclick="submit(3); return false;" class="btn btn-round btn-success btn-pill-right">Save & Continue</button> -->
</div>
</div>
</div>
</div>

<h5 class="pad_bottom">Nutritional findings/problems identified that relate to medical or physical conditions</h5>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Functional</h3>
</div>
<div class="panel-body">
<select name="bundle13_select[]" id="bundle13_select" data-plugin="selectpicker" id="tite" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="Swallowing difficulty NC-1.1 10754">Swallowing difficulty NC-1.1 10754</option>
<option value="Biting/Chewing (masticatory) difficulty NC-1.2 10755">Biting/Chewing (masticatory) difficulty NC-1.2 10755</option>
<option value="Breastfeeding difficulty NC-1.3 10756">Breastfeeding difficulty NC-1.3 10756</option>
<option value="Altered GI function NC-1.4 10757">Altered GI function NC-1.4 10757</option>
<option value="Predicted breastfeeding difficulty NC-1.5 11146">Predicted breastfeeding difficulty NC-1.5 11146</option>
</select>
<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle13_eti" name="bundle13_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle13'] ) ? ( isset($session_note_details2['bundle13'][1]) ? $session_note_details2['bundle13'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle13_sign" name="bundle13_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle13'] ) ? ( isset($session_note_details2['bundle13'][2]) ? $session_note_details2['bundle13'][2] : '' ) : ''; ?></textarea>
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
<option value="Impaired nutrient utilization NC-2.1 10759">Impaired nutrient utilization NC-2.1 10759</option>
<option value="Altered nutrition-related laboratory values NC-2.2 10760">Altered nutrition-related laboratory values NC-2.2 10760</option>
<option value="Food–medication interaction NC-2.3 10761">Food–medication interaction NC-2.3 10761</option>
<option value="Predicted food–medication interaction NC-2.4 10762">Predicted food–medication interaction NC-2.4 10762</option>
</select>
<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle14_spec" name="bundle14_spec" rows="3" placeholder="Specify:"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][1]) ? $session_note_details2['bundle14'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle14_eti" name="bundle14_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][2]) ? $session_note_details2['bundle14'][2] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle14_sign" name="bundle14_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle14'] ) ? ( isset($session_note_details2['bundle14'][3]) ? $session_note_details2['bundle14'][3] : '' ) : ''; ?></textarea>
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
<option value="Underweight NC-3.1 10764">Underweight NC-3.1 10764</option>
<option value="Unintended weight loss NC-3.2 10765">Unintended weight loss NC-3.2 10765</option>
<optgroup label="Overweight/obesity NC-3.3 10766">
<option value="Overweight, adult or pediatric NC-3.3.1 10767">Overweight, adult or pediatric NC-3.3.1 10767</option>
<option value="Obese, pediatric NC-3.3.2 10768">Obese, pediatric NC-3.3.2 10768</option>
<option value="Obese, Class I NC-3.3.3 10769">Obese, Class I NC-3.3.3 10769</option>
<option value="Obese, Class II NC-3.3.4 10818">Obese, Class II NC-3.3.4 10818</option>
<option value="Obese, Class III NC-3.3.5 10819">Obese, Class III NC-3.3.5 10819</option>
</optgroup>
<option value="Unintended weight gain NC-3.4 10770">Unintended weight gain NC-3.4 10770</option>
<option value="Growth rate below expected NC-3.5 10802">Growth rate below expected NC-3.5 10802</option>
<option value="Excessive growth rate NC-3.6 10803">Excessive growth rate NC-3.6 10803</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle15_eti" name="bundle15_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle15'] ) ? ( isset($session_note_details2['bundle15'][1]) ? $session_note_details2['bundle15'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle15_sign" name="bundle15_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle15'] ) ? ( isset($session_note_details2['bundle15'][2]) ? $session_note_details2['bundle15'][2] : '' ) : ''; ?></textarea>
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
<select name="bundle16_select[]" id="bundle16_select" data-plugin="selectpicker" id="tite" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<optgroup label="Malnutrition NC-4.1 10657">
<option value="Starvation related malnutrition NC-4.1.1 11130">Starvation related malnutrition NC-4.1.1 11130</option>
<option value="Chronic disease or condition related malnutrition NC-4.1.2 11131">Chronic disease or condition related malnutrition NC-4.1.2 11131</option>
<option value="Acute disease or injury related malnutrition NC-4.1.3 11132">Acute disease or injury related malnutrition NC-4.1.3 11132</option>
</optgroup>
</select>
<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle16_eti" name="bundle16_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle16'] ) ? ( isset($session_note_details2['bundle16'][1]) ? $session_note_details2['bundle16'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle16_sign" name="bundle16_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle16'] ) ? ( isset($session_note_details2['bundle16'][2]) ? $session_note_details2['bundle16'][2] : '' ) : ''; ?></textarea>
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

<div class="example-well">
<div class="page-header">
<h1 class="page-title">BEHAVIORAL-ENVIRONMENTAL (NB)</h1>
<div class="page-header-actions">
<div>
<!-- <button onclick="window.location.href = 'sessionflow';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button> -->
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
&nbsp;
<!-- <button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button> -->
</div>
</div>
</div>
</div>

<h5 class="pad_bottom">Nutritional findings/problems identified that relate to knowledge, attitudes/beliefs, physical environment, access to food, or food safety</h5>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Knowledge and Beliefs</h3>
</div>
<div class="panel-body">
<select name="bundle17_select[]" id="bundle17_select" data-plugin="selectpicker" id="tite" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="Food- and nutrition-related knowledge deficit NB-1.1 10773">Food- and nutrition-related knowledge deficit NB-1.1 10773</option>
<option value="Unsupported beliefs/attitudes about food- or nutrition-related topics (use with caution) NB-1.2 10857">Unsupported beliefs/attitudes about food- or nutrition-related topics (use with caution) NB-1.2 10857</option>
<option value="Not ready for diet/lifestyle change NB-1.3 10775">Not ready for diet/lifestyle change NB-1.3 10775</option>
<option value="Self-monitoring deficit NB-1.4 10776">Self-monitoring deficit NB-1.4 10776</option>
<option value="Disordered eating pattern NB-1.5 10777">Disordered eating pattern NB-1.5 10777</option>
<option value="Limited adherence to nutrition-related recommendations NB-1.6 10778">Limited adherence to nutrition-related recommendations NB-1.6 10778</option>
<option value="Undesirable food choices NB-1.7 10779">Undesirable food choices NB-1.7 10779</option>
</select>
<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle17_eti" name="bundle17_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle17'] ) ? ( isset($session_note_details2['bundle17'][1]) ? $session_note_details2['bundle17'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle17_sign" name="bundle17_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle17'] ) ? ( isset($session_note_details2['bundle17'][2]) ? $session_note_details2['bundle17'][2] : '' ) : ''; ?></textarea>
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
<option value="Physical inactivity NB-2.1 10782">Physical inactivity NB-2.1 10782</option>
<option value="Excessive physical activity NB-2.2 10783">Excessive physical activity NB-2.2 10783</option>
<option value="Inability to manage self-care NB-2.3 10780">Inability to manage self-care NB-2.3 10780</option>
<option value="Impaired ability to prepare foods/meals NB-2.4 10785">Impaired ability to prepare foods/meals NB-2.4 10785</option>
<option value="Poor nutrition quality of life NB-2.5 10786">Poor nutrition quality of life NB-2.5 10786</option>
<option value="Self-feeding difficulty NB-2.6 10787">Self-feeding difficulty NB-2.6 10787</option>
</select>
<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle18_eti" name="bundle18_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle18'] ) ? ( isset($session_note_details2['bundle18'][1]) ? $session_note_details2['bundle18'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle18_sign" name="bundle18_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle18'] ) ? ( isset($session_note_details2['bundle18'][2]) ? $session_note_details2['bundle18'][2] : '' ) : ''; ?></textarea>
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
<option value="Intake of unsafe food NB-3.1 10789">Intake of unsafe food NB-3.1 10789</option>
<option value="Limited access to food NB-3.2 12009">Limited access to food NB-3.2 12009</option>
<option value="Limited access to nutrition-related supplies NB-3.3 10791">Limited access to nutrition-related supplies NB-3.3 10791</option>
<option value="Limited access to potable water NB-3.4 12010"> Limited access to potable water NB-3.4 12010</option>
</select>

<div class="form-group form-material has-info pad_top">
<textarea class="form-control" id="bundle19_eti" name="bundle19_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle19'] ) ? ( isset($session_note_details2['bundle19'][1]) ? $session_note_details2['bundle19'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle19_sign" name="bundle19_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle19'] ) ? ( isset($session_note_details2['bundle19'][2]) ? $session_note_details2['bundle19'][2] : '' ) : ''; ?></textarea>
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

<div class="example-well">
<div class="page-header">
<h1 class="page-title">Other (NO)</h1>
<div class="page-header-actions">
<div>
<!-- <button onclick="window.location.href = 'sessionflow';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
&nbsp;
<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button> -->
</div>
</div>
</div>
</div>

<h5 class="pad_bottom">Nutrition findings that are not classified as intake, clinical or behavioral-environmental problems.</h5>

<div class="row">
<div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Other</h3>
</div>
<div class="panel-body">
<select name="bundle20_select[]" id="bundle20_select" data-plugin="selectpicker" id="tite" data-style="btn-outline btn-primary btn-info" multiple data-selected-text-format="count > 999">
<option value="No nutrition diagnosis at this time NO-1.1 10795">No nutrition diagnosis at this time NO-1.1 10795</option>
</select>
<div class="form-group form-material has-info pad_top">
<!--textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea-->
<textarea class="form-control" id="bundle20_eti" name="bundle20_eti" rows="3" placeholder="Etiologies"><?php echo isset( $session_note_details2['bundle20'] ) ? ( isset($session_note_details2['bundle20'][1]) ? $session_note_details2['bundle20'][1] : '' ) : ''; ?></textarea>
<textarea class="form-control" id="bundle20_sign" name="bundle20_sign" rows="3" placeholder="Signs/Symptoms"><?php echo isset( $session_note_details2['bundle20'] ) ? ( isset($session_note_details2['bundle20'][2]) ? $session_note_details2['bundle20'][2] : '' ) : ''; ?></textarea>
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


</form>

<div class="example-well">
<div class="page-header">
<h1 class="page-title">Diagnosis</h1>
<div class="page-header-actions">
<div>
<button onclick="window.location.href = 'sessionflow';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
&nbsp;
<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button>
</div>
</div>
</div>
</div>

</div>
<!-- end start content -->



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
<script src="../assets/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
<script src="../assets/assets/vendor/multi-select/jquery.multi-select.js"></script>

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
<script>
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
		
	    if( jQuery.inArray( $( this ).text(), bundle1_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle2_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle3_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle4_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle5_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle6_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle7_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle8_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle9_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle10_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle11_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle12_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle13_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle14_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle15_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle16_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle17_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle18_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle19_values ) == -1 ){

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
		
	    if( jQuery.inArray( $( this ).text(), bundle20_values ) == -1 ){

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