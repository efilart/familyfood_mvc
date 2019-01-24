<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Session Notes - Intervention | Familyfood Dashboard</title>

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
<link rel='stylesheet' href="../assets/assets/vendor/treeview/jquery.bonsai.css">

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
<script src="../assets/assets/vendor/treeview/jquery.js"></script>
<script src="../assets/assets/vendor/treeview/jquery.bonsai.js"></script>
<script src="../assets/assets/vendor/treeview/jquery.qubit.js"></script>
<script src="../assets/assets/vendor/treeview/jquery.json-list.js"></script>
<script src="../assets/assets/vendor/treeview/bonsai.min.js"></script>
<script>
Breakpoints();
</script>
<style>
input[type=checkbox], input[type=radio] {
	margin: 4px 0 0;
	margin-top: 1px;
	line-height: normal;
	margin-right: 5px !important;
}
.bonsai, .bonsai li {
	font-size: 12px;
	line-height: 2.2em;
}
li .thumb {
	margin: -3px 0 0 -1.6em;
}
</style>
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
<h2><span class="label label-success">Session notes for <span style="text-transform: uppercase">Michael Peralta</span></span></h2>
<ol class="breadcrumb">
<li>
<a href="viewappointments">Home</a></li>
<li>
<a href="sessionflow">Nutrition Assessment</a></li>
<li>
<a href="sessionflow2">Diagnosis</a></li>
<li class="active">Intervention</li>
</ol>
</div>
<!-- end header -->

<div class="page-content">
<div class="panel">
<div class="panel-body">
<div class="example-well">
<div class="page-header">
<h1 class="page-title">FOOD AND/OR NUTRIENT DELIVERY (ND)</h1>
<div class="page-header-actions">
<div>
<button onclick="window.location.href = 'sessionflow2';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
<!--&nbsp;<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button--> 
</div>
</div>
</div>
</div>

<p>Each term is designated with an alpha-numeric NCPT hierarchical code, followed by a five-digit (e.g., 99999) Academy SNOMED CT/LOINC unique identifier (ANDUID). Neither should be used in nutrition documentation. The ANDUID is for data tracking purposes in electronic health records.</p>

<!-- start content -->
<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Meals and Snacks<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Regular eating episode (meal); food served between regular meals (snack)."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 
<script>
      jQuery(function() {
        $('#checkboxes').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id="checkboxes">
<li>
<input type='checkbox' value='' />
General/healthful diet ND-1.1 10489</li>
<li>
<input type='checkbox' value='' />
Modify composition of meals/snacks ND-1.2 10828
<ol>
<!-- 1 -->
<li>
<input type='checkbox' value='' />
Texture-modified diet (1) ND-1.2.1 10829
<ol>
<li>
<input type='checkbox' value='' />
Easy to chew diet ND-1.2.1.1 10914</li>
<li>
<input type='checkbox' value='' />
Mechanically altered diet ND-1.2.1.2 10915</li>
<li>
<input type='checkbox' value='' />
Pureed diet ND-1.2.1.3 10916</li>
<li>
<input type='checkbox' value='' />
Liquid consistency-thin liquids ND-1.2.1.4 10865</li>
<li>
<input type='checkbox' value='' />
Liquid consistency-nectar thick liquids ND-1.2.1.5 10866</li>
<li>
<input type='checkbox' value='' />
Liquid consistency-honey thick liquids ND-1.2.1.6 10867</li>
<li>
<input type='checkbox' value='' />
Liquid consistency-spoon thick liquids ND-1.2.1.7 10868</li>
</ol>
</li>
<!-- 2 -->
<li>
<input type='checkbox' value='' />
Energy-modified diet (2) ND-1.2.2 10830
<ol>
<li>
<input type='checkbox' value='' />
Increased energy diet ND-1.2.2.1 10935</li>
<li>
<input type='checkbox' value='' />
Decreased energy diet ND-1.2.2.2 10936</li>
</ol>
</li>
<!-- 3 -->
<li>
<input type='checkbox' value='' />
Protein-modified diet (3) ND-1.2.3 10831
<ol>
<li>
<input type='checkbox' value='' />
Consistent protein diet ND-1.2.3.1 10896</li>
<li>
<input type='checkbox' value='' />
Increased protein diet ND-1.2.3.2 10972</li>
<li>
<input type='checkbox' value='' />
Decreased protein diet ND-1.2.3.3 10973</li>
<li>
<input type='checkbox' value='' />
Decreased casein diet ND-1.2.3.4 10999</li>
<li>
<input type='checkbox' value='' />
Decreased gluten diet ND-1.2.3.5 11000
<ol>
<li>
<input type='checkbox' value='' />
Gluten free diet ND-1.2.3.5.1 11027</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Amino acid modified diet ND-1.2.3.6 10897
<ol>
<li>
<input type='checkbox' value='' />
Arginine modified diet ND-1.2.3.6.1 10898
<ol>
<li>
<input type='checkbox' value='' />
Increased arginine diet ND-1.2.3.6.1.1 10974</li>
<li>
<input type='checkbox' value='' />
Decreased arginine diet ND-1.2.3.6.1.2 10975</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Glutamine modified diet ND-1.2.3.6.2 10899
<ol>
<li>
<input type='checkbox' value='' />
Increased glutamine diet ND-1.2.3.6.2.1 10976</li>
<li>
<input type='checkbox' value='' />
Decreased glutamine diet ND-1.2.3.6.2.2 10977</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Histidine modified diet ND-1.2.3.6.3 10900
<ol>
<li>
<input type='checkbox' value='' />
Increased histidine diet ND-1.2.3.6.3.1 10978</li>
<li>
<input type='checkbox' value='' />
Decreased histidine diet ND-1.2.3.6.3.2 10979</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Increased homocysteine diet ND-1.2.3.6.4 10980</li>
<li>
<input type='checkbox' value='' />
Isoleucine modified diet ND-1.2.3.6.5 10902
<ol>
<li>
<input type='checkbox' value='' />
Increased isoleucine diet ND-1.2.3.6.5.1 10981</li>
<li>
<input type='checkbox' value='' />
Decreased isoleucine diet ND-1.2.3.6.5.2 10982</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Lecine modified diet ND-1.2.3.6.6 10903
<ol>
<li>
<input type='checkbox' value='' />
Increased leucine diet ND-1.2.3.6.6.1 10983</li>
<li>
<input type='checkbox' value='' />
Decreased leucine diet ND-1.2.3.6.6.2 10984</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Lysine modified diet ND-1.2.3.6.7 10904
<ol>
<li>
<input type='checkbox' value='' />
Increased lysine diet ND-1.2.3.6.7.1 10985</li>
<li>
<input type='checkbox' value='' />
Decreased lysine diet ND-1.2.3.6.7.2 10986</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Methionine modified diet ND-1.2.3.6.8 10905
<ol>
<li>
<input type='checkbox' value='' />
Increased methionine diet ND-1.2.3.6.8.1 10987</li>
<li>
<input type='checkbox' value='' />
Decreased methionine diet ND-1.2.3.6.8.2 10988</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Phenylalanine modified diet ND-1.2.3.6.9 10906
<ol>
<li>
<input type='checkbox' value='' />
Increased phenylalanine diet ND-1.2.3.6.9.1 11971</li>
<li>
<input type='checkbox' value='' />
Decreased phenylalanine diet ND-1.2.3.6.9.2 10989</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Threonine modified diet ND-1.2.3.6.10 10907
<ol>
<li>
<input type='checkbox' value='' />
Increased threonine diet ND-1.2.3.6.10.1 10990</li>
<li>
<input type='checkbox' value='' />
Decreased threonine diet ND-1.2.3.6.10.2 10991</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Tryptophan modified diet ND-1.2.3.6.11 10908
<ol>
<li>
<input type='checkbox' value='' />
Increased tryptophan diet ND-1.2.3.6.11.1 10992</li>
<li>
<input type='checkbox' value='' />
Decreased tryptophan diet ND-1.2.3.6.11.2 10993</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Decreased tyramine diet ND-1.2.3.6.12 10994</li>
<li>
<input type='checkbox' value='' />
Tyrosine modified diet ND-1.2.3.6.13 10910
<ol>
<li>
<input type='checkbox' value='' />
Increased tyrosine diet ND-1.2.3.6.13.1 10995</li>
<li>
<input type='checkbox' value='' />
Decreased tyrosine diet ND-1.2.3.6.13.2 10996</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Valine modified diet ND-1.2.3.6.14 10911
<ol>
<li>
<input type='checkbox' value='' />
Increased valine diet ND-1.2.3.6.14.1 10997</li>
<li>
<input type='checkbox' value='' />
Decreased valine diet ND-1.2.3.6.14.2 10998</li>
</ol>
</li>
</ol>
</li>
</ol>
</li>
<!-- 4 -->
<li>
<input type='checkbox' value='' />
Carbohydrate-modified diet (4) ND-1.2.4 10832
<ol>
<li>
<input type='checkbox' value='' />
Consistent carbohydrate diet ND-1.2.4.1 10860</li>
<li>
<input type='checkbox' value='' />
Increased carbohydrate diet ND-1.2.4.2 10930
<ol>
<li>
<input type='checkbox' value='' />
Increased complex carbohydrate diet ND-1.2.4.2.1 11972</li>
<li>
<input type='checkbox' value='' />
Increased simple carbohydrate diet ND-1.2.4.2.2 11973</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Decreased carbohydrate diet ND-1.2.4.3 10931
<ol>
<li>
<input type='checkbox' value='' />
Decreased complex carbohydrate diet ND-1.2.4.3.1 11974</li>
<li>
<input type='checkbox' value='' />
Decreased simple carbohydrate diet ND-1.2.4.3.2 11975</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Galactose modified diet ND-1.2.4.4 10861
<ol>
<li>
<input type='checkbox' value='' />
Increased galactose diet ND-1.2.4.4.1 11976</li>
<li>
<input type='checkbox' value='' />
Decreased galactose diet ND-1.2.4.4.2 10932</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Lactose modified diet ND-1.2.4.5 10862
<ol>
<li>
<input type='checkbox' value='' />
Increased lactose diet ND-1.2.4.5.1 11977</li>
<li>
<input type='checkbox' value='' />
Decreased lactose diet ND-1.2.4.5.2 10933</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Fructose modified diet ND-1.2.4.6 11978
<ol>
<li>
<input type='checkbox' value='' />
Increased fructose diet ND-1.2.4.6.1 11979</li>
<li>
<input type='checkbox' value='' />
Decreased fructose diet ND-1.2.4.6.2 11980</li>
</ol>
</li>
</ol>
</li>
<!-- 5 -->
<li>
<input type='checkbox' value='' />
Fat-modified diet (5) ND-1.2.5 10833
<ol>
<li>
<input type='checkbox' value='' />
Increased fat diet ND-1.2.5.1 10937</li>
<li>
<input type='checkbox' value='' />
Decreased fat diet ND-1.2.5.2 10938</li>
<li>
<input type='checkbox' value='' />
Monounsaturated fat modified diet ND-1.2.5.3 10869
<ol>
<li>
<input type='checkbox' value='' />
Increased monounsaturated fat diet ND-1.2.5.3.1 10939</li>
<li>
<input type='checkbox' value='' />
Decreased monounsaturated fat diet ND-1.2.5.3.2 10940</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Polyunsaturated fat modified diet ND-1.2.5.4 10870
<ol>
<li>
<input type='checkbox' value='' />
Increased polyunsaturated fat diet ND-1.2.5.4.1 10941
<ol>
<li>
<input type='checkbox' value='' />
Increased linoleic acid diet ND-1.2.5.4.1.1 11981</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Decreased polyunsaturated fat diet ND-1.2.5.4.2 10942
<ol>
<li>
<input type='checkbox' value='' />
Decreased linoleic acid diet ND-1.2.5.4.2.1 11982</li>
</ol>
</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Saturated fat modified diet ND-1.2.5.5 10871
<ol>
<li>
<input type='checkbox' value='' />
Saturated fat modified diet ND-1.2.5.5 10871
<ol>
<li>
<input type='checkbox' value='' />
Decreased saturated fat diet ND-1.2.5.5.1 10943</li>
</ol>
</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Trans fat modified diet ND-1.2.5.6 10872
<ol>
<li>
<input type='checkbox' value='' />
Decreased trans fat modified diet ND-1.2.5.6.1 10944</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Omega 3 fatty acid modified diet ND-1.2.5.7 11983
<ol>
<li>
<input type='checkbox' value='' />
Increased omega 3 fatty acid diet ND-1.2.5.7.1 11984
<ol>
<li>
<input type='checkbox' value='' />
Increased alphalinolenic acid diet ND-1.2.5.7.1.1 11985</li>
<li>
<input type='checkbox' value='' />
Increased eicosapentaenoic acid diet ND-1.2.5.7.1.2 11986</li>
<li>
<input type='checkbox' value='' />
Increased docosahexaenoic acid ND-1.2.5.7.1.3 11987</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Decreased omega 3 fatty acid diet ND-1.2.5.7.2 11988
<ol>
<li>
<input type='checkbox' value='' />
Decreased alphalinolenic acid diet ND-1.2.5.7.2.1 11989</li>
<li>
<input type='checkbox' value='' />
Decreased eicosapentaenoic acid diet ND-1.2.5.7.2.2 11990</li>
<li>
<input type='checkbox' value='' />
Decreased docosahexaenoic acid diet ND-1.2.5.7.2.3 11991</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Medium chain triglyceride modified diet ND-1.2.5.8 11992
<ol>
<li>
<input type='checkbox' value='' />
Increased medium chain triglyceride diet ND-1.2.5.8.1 11993</li>
<li>
<input type='checkbox' value='' />
Decreased medium chain triglyceride diet ND-1.2.5.8.2 11994</li>
</ol>
</li>
</ol>
</li>
</ol>
</li>
<!-- 6 -->
<li>
<input type='checkbox' value='' />
Cholesterol-modified diet (6) ND-1.2.6 10863
<ol>
<li>
<input type='checkbox' value='' />
Decreased cholesterol diet ND-1.2.6.1 10934</li>
</ol>
</li>
<!-- 7 -->
<li>
<input type='checkbox' value='' />
Fiber-modified diet (7) ND-1.2.7 10834
<ol>
<li>
<input type='checkbox' value='' />
Increased fiber diet ND-1.2.7.1 10945</li>
<li>
<input type='checkbox' value='' />
Decreased fiber diet ND-1.2.7.2 10946</li>
<li>
<input type='checkbox' value='' />
Soluble fiber modified diet ND-1.2.7.3 10947M
<ol>
<li>
<input type='checkbox' value='' />
Increased soluble fiber diet ND-1.2.7.3.1 10948</li>
<li>
<input type='checkbox' value='' />
Decreased soluble fiber diet ND-1.2.7.3.2 10949</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Insoluble fiber modified diet ND-1.2.7.4 10950
<ol>
<li>
<input type='checkbox' value='' />
Increased insoluble fiber diet ND-1.2.7.4.1 10951</li>
<li>
<input type='checkbox' value='' />
Decreased insoluble fiber diet ND-1.2.7.4.2 10952</li>
</ol>
</li>
</ol>
</li>
<!-- 8 -->
<li>
<input type='checkbox' value='' />
Fluid-modified diet (8) ND-1.2.8 10835
<ol>
<li>
<input type='checkbox' value='' />
Increased fluid diet ND-1.2.8.1 10874</li>
<li>
<input type='checkbox' value='' />
Fluid restricted diet ND-1.2.8.2 10873</li>
<li>
<input type='checkbox' value='' />
Clear liquid diet ND-1.2.8.3 10876</li>
<li>
<input type='checkbox' value='' />
Full liquid diet ND-1.2.8.4 10877</li>
</ol>
</li>
<!-- 9 -->
<li>
<input type='checkbox' value='' />
Diets modified for specific foods or ingredients (9) ND-1.2.9 10836</li>
<!-- 10 -->
<li>
<input type='checkbox' value='' />
Vitamin-modified diet (10) ND-1.2.10 10837
<ol>
<li>
<input type='checkbox' value='' />
Vitamin A modified diet ND-1.2.10.1 10923
<ol>
<li>
<input type='checkbox' value='' />
Increased vitamin A diet ND-1.2.10.1.1 11013</li>
<li>
<input type='checkbox' value='' />
Decreased vitamin A diet ND-1.2.10.1.2 11014</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Vitamin C modified diet ND-1.2.10.2 10926
<ol>
<li>
<input type='checkbox' value='' />
Increased vitamin C diet ND-1.2.10.2.1 11019</li>
<li>
<input type='checkbox' value='' />
Decreased vitamin C diet ND-1.2.10.2.2 11020</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Vitamin D modified diet ND-1.2.10.3 10927
<ol>
<li>Increased vitamin D diet ND-1.2.10.3.1 11021</li>
<li>Decreased vitamin D diet ND-1.2.10.3.2 11022</li>
</ol>
</li>
<li>Vitamin E modified diet ND-1.2.10.4 10928
<ol>
<li>Increased vitamin E diet ND-1.2.10.4.1 11023</li>
<li>Decreased vitamin E diet ND-1.2.10.4.2 11024</li>
</ol>
</li>
<li>Vitamin K modified diet ND-1.2.10.5 10929
<ol>
<li>Increased vitamin K diet ND-1.2.10.5.1 11025</li>
<li>Decreased vitamin K diet ND-1.2.10.5.2 11026</li>
</ol>
</li>
<li>Thiamine modified diet ND-1.2.10.6 10922
<ol>
<li>Increased thiamine diet ND-1.2.10.6.1 11011</li>
<li>Decreased thiamine diet ND-1.2.10.6.2 11012</li>
</ol>
</li>
<li>Riboflavin modified diet ND-1.2.10.7 10921
<ol>
<li>Increased riboflavin diet ND-1.2.10.7.1 11009</li>
<li>Decreased riboflavin diet ND-1.2.10.7.2 11010</li>
</ol>
</li>
<li>Niacin modified diet ND-1.2.10.8 10919
<ol>
<li>Increased niacin diet ND-1.2.10.8.1 11005</li>
<li>Decreased niacin diet ND-1.2.10.8.2 11006</li>
</ol>
</li>
<li>Folic acid modified diet ND-1.2.10.9 10918
<ol>
<li>Increased folic acid diet ND-1.2.10.9.1 11003</li>
<li>Decreased folic acid diet ND-1.2.10.9.2 11004</li>
</ol>
</li>
<li>Vitamin B6 modified diet ND-1.2.10.10 10924
<ol>
<li>Increased vitamin B6 diet ND-1.2.10.10.1 11015</li>
<li>Decreased vitamin B6 diet ND-1.2.10.10.2 11016</li>
</ol>
</li>
<li>Vitamin B12 modified diet ND-1.2.10.11 10925
<ol>
<li>Increased vitamin B12 diet ND-1.2.10.11.1 11017</li>
<li>Decreased vitamin B12 diet ND-1.2.10.11.2 11018</li>
</ol>
</li>
<li>Pantothenic acid modified diet ND-1.2.10.12 10920
<ol>
<li>Increased pantothenic acid diet ND-1.2.10.12.1 11007</li>
<li>Decreased pantothenic acid diet ND-1.2.10.12.2 11008</li>
</ol>
</li>
<li>Biotin modified diet ND-1.2.10.13 10917
<ol>
<li>Increased biotin diet ND-1.2.10.13.1 11001</li>
<li>Decreased biotin diet ND-1.2.10.13.2 11002</li>
</ol>
</li>
</ol>
</li>
<!-- 11 -->
<li>Mineral-modified diet (11) ND-1.2.11 10838
<ol>
<li>
<input type='checkbox' value='' />
Calcium modified diet ND-1.2.11.1 10879
<ol>
<li>
<input type='checkbox' value='' />
Increased calcium diet ND-1.2.11.1.1 10953</li>
<li>
<input type='checkbox' value='' />
Decreased calcium diet ND-1.2.11.1.2 10954</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Chloride modified diet</li>
<li>
<input type='checkbox' value='' />
Iron modified diet
<ol>
<li>
<input type='checkbox' value='' />
Increased iron diet ND-1.2.11.3.1 10960</li>
<li>
<input type='checkbox' value='' />
Decreased iron diet ND-1.2.11.3.2 10961</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Magnesium modified diet ND-1.2.11.4 10887
<ol>
<li>
<input type='checkbox' value='' />
Increased magnesium diet ND-1.2.11.4.1 10962</li>
<li>
<input type='checkbox' value='' />
Decreased magnesium diet ND-1.2.11.4.2 10963</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Potassium modified diet ND-1.2.11.5 10891
<ol>
<li>
<input type='checkbox' value='' />
Increased potassium diet ND-1.2.11.5.1 10966</li>
<li>
<input type='checkbox' value='' />
Decreased potassium diet ND-1.2.11.5.2 10967</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Phosphorus modified diet ND-1.2.11.6 10890
<ol>
<li>
<input type='checkbox' value='' />
Increased phosphorus diet ND-1.2.11.6.1 10964</li>
<li>
<input type='checkbox' value='' />
Decreased phosphorus diet ND-1.2.11.6.2 10965</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Sodium modified diet ND-1.2.11.7 10893
<ol>
<li>
<input type='checkbox' value='' />
Increased sodium diet ND-1.2.11.7.1 10968</li>
<li>
<input type='checkbox' value='' />
Decreased sodium diet ND-1.2.11.7.2 10969</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Zinc modified diet ND-1.2.11.8 10895
<ol>
<li>
<input type='checkbox' value='' />
Increased zinc diet ND-1.2.11.8.1 10970</li>
<li>
<input type='checkbox' value='' />
Decreased zinc diet ND-1.2.11.8.2 10971</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Sulfur modified diet ND-1.2.11.9 10894</li>
<li>
<input type='checkbox' value='' />
Fluoride modified diet ND-1.2.11.10 10884</li>
<li>
<input type='checkbox' value='' />
Copper modified diet ND-1.2.11.11 10883
<ol>
<li>
<input type='checkbox' value='' />
Increased copper diet ND-1.2.11.11.1 10956</li>
<li>
<input type='checkbox' value='' />
Decreased copper diet ND-1.2.11.11.2 10957</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Iodine modified diet ND-1.2.11.12 10885
<ol>
<li>
<input type='checkbox' value='' />
Increased iodine diet ND-1.2.11.12.1 10958</li>
<li>
<input type='checkbox' value='' />
Decreased iodine diet ND-1.2.11.12.2 10959</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Selenium modified diet ND-1.2.11.13 10892</li>
<li>
<input type='checkbox' value='' />
Manganese modified diet ND-1.2.11.14 10888</li>
<li>
<input type='checkbox' value='' />
Chromium modified diet ND-1.2.11.15 10881
<ol>
<li>
<input type='checkbox' value='' />
Increased chromium diet ND-1.2.11.15.1 10955</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Molybdenum modified diet ND-1.2.11.16 10889</li>
<li>
<input type='checkbox' value='' />
Boron modified diet ND-1.2.11.17 10878</li>
<li>
<input type='checkbox' value='' />
Cobalt modified diet ND-1.2.11.18 10882</li>
<li>Modify schedule of food/fluids
<ol>
<li>
<input type='checkbox' value='' />
Modify schedule of intake to limit fasting ND-1.3.1 11995</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Specific foods/beverages or groups ND-1.4 10492
<ol>
<li>
<input type='checkbox' value='' />
Fruit modified diet ND-1.4.1 11996</li>
<li>
<input type='checkbox' value='' />
Vegetable modified diet ND-1.4.2 11997
<ol>
<li>
<input type='checkbox' value='' />
Starchy vegetable modified diet ND-1.4.2.1 11998</li>
<li>
<input type='checkbox' value='' />
Bean and pea modified diet ND-1.4.2.2 11999</li>
</ol>
</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Grain modified diet ND-1.4.3 12000
<ol>
<li>
<input type='checkbox' value='' />
Diet modified for uncooked food starch ND-1.4.3.1 12001</li>
</ol>
</li>
<li>
<input type='checkbox' value='' />
Protein food modified diet ND-1.4.4 12002
<ol>
<li>
<input type='checkbox' value='' />
Diet with foods modified to be low in protein ND-1.4.4.1 12003</li>
<li>
<input type='checkbox' value='' />
Diet modified for egg ND-1.4.4.2 12004
<ol>
<li>
<input type='checkbox' value='' />
Raw egg free diet ND-1.4.4.2.1 12005</li>
</ol>
</li>
</ol>
</li>
</ol>
</li>
</ol>
<li><input type='checkbox' value='' />Other ND-1.5 10493</li>
<textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea>
</ol>
</div>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Enteral and Parenteral Nutrition<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Nutrition provided through the GI tract via tube, catheter, or stoma (enteral) or intravenously, centrally or peripherally (parenteral)."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info">
<!--h5>Enteral Nutrition (2.1)</h5>
<p>Nutrition provided through the GI tract.</p-->
<script>
      jQuery(function() {
        $('#checkboxes2').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script> 
<!--ol id="checkboxes2">
<li><input type='checkbox' value='' />Modify composition of enteral nutrition ND-2.1.1 10503</li>
	<ol>
	<li><input type='checkbox' value='' />hai</li>
	</ol>
<li><input type='checkbox' value='' />Modify concentration of enteral nutrition ND-2.1.2 10502</li>
<li><input type='checkbox' value='' />Modify rate of enteral nutrition ND-2.1.3 10500</li>
<li><input type='checkbox' value='' />Modify volume of enteral nutrition ND-2.1.4 10501</li>
<li><input type='checkbox' value='' />Modify schedule of enteral nutrition ND-2.1.5 10504</li>
<li><input type='checkbox' value='' />Modify route of enteral nutrition ND-2.1.6 10792</li>
<li><input type='checkbox' value='' />Insert enteral feeding tube ND-2.1.7 10497</li>
<li><input type='checkbox' value='' />Enteral nutrition site care ND-2.1.8 10498</li>
<li><input type='checkbox' value='' />Feeding tube flush ND-2.1.9 10499</li>
</ol-->

<ol id='checkboxes2'>
<li><input type='checkbox' value='' />Enteral Nutrition (2.1) - Nutrition provided through the GI tract
<p><small>Nutrition provided through the GI tract.</small></p>
<ol>
<li><input type='checkbox' value='' />Modify concentration of enteral nutrition ND-2.1.2 10502</li>
<li><input type='checkbox' value='' />Modify rate of enteral nutrition ND-2.1.3 10500</li>
<li><input type='checkbox' value='' />Modify volume of enteral nutrition ND-2.1.4 10501</li>
<li><input type='checkbox' value='' />Modify schedule of enteral nutrition ND-2.1.5 10504</li>
<li><input type='checkbox' value='' />Modify route of enteral nutrition ND-2.1.6 10792</li>
<li><input type='checkbox' value='' />Insert enteral feeding tube ND-2.1.7 10497</li>
<li><input type='checkbox' value='' />Enteral nutrition site care ND-2.1.8 10498</li>
<li><input type='checkbox' value='' />Feeding tube flush ND-2.1.9 10499</li>
</ol>
</li>

<li><input type='checkbox' value='' />Parenteral Nutrition/IV Fluids (2.2) - Nutrition and fluids provided intravenously
<p><small>Nutrition and fluids provided intravenously.</small></p>
<ol>
<li><input type='checkbox' value='' />Modify composition of parenteral nutrition ND-2.2.1 10511</li>
<li><input type='checkbox' value='' />Modify concentration of parenteral nutrition ND-2.2.2 10510</li>
<li><input type='checkbox' value='' />Modify rate of parenteral nutrition ND-2.2.3 10509</li>
<li><input type='checkbox' value='' />Modify volume of parenteral nutrition ND-2.2.4 11141</li>
<li><input type='checkbox' value='' />Modify schedule of parenteral nutrition ND-2.2.5 10512</li>
<li><input type='checkbox' value='' />Modify route of parenteral nutrition ND-2.2.6 10793</li>
<li><input type='checkbox' value='' />Parenteral nutrition site care ND-2.2.7 10507</li>
<li><input type='checkbox' value='' />IV fluid delivery ND-2.2.8 10508</li>
</ol>
</li>
</ol>
</div>
</div>
</div>
</div>

<!--div class="col-sm-4">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">3</span> Fluid Intake</h3>
</div>
<div class="panel-body">

</div>
</div>
</div--> 

</div>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">3</span> Nutrition Supplement Therapy<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Regular eating episode (meal); food served between regular meals (snack)."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 
<script>
      jQuery(function() {
        $('#checkboxes3').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes3'>
<li><input type='checkbox' value='' />Medical Food Supplement Therapy (3.1)
<p><small>Commercial or prepared foods or beverages intended to supplement energy, protein, carbohydrate, fiber, and/or fat intake.</small></p>
<ol>
<li><input type='checkbox' value='' />Commercial beverage ND-3.1.1 10515</li>
<li><input type='checkbox' value='' />Commercial food ND-3.1.2 10516</li>
<li><input type='checkbox' value='' />Modified beverage ND-3.1.3 10517</li>
<li><input type='checkbox' value='' />Modified food ND-3.1.4 10518</li>
<li><input type='checkbox' value='' />Purpose ND-3.1.5 10519</li>
</ol>
</li>

<li><input type='checkbox' value='' />Vitamin and Mineral Supplement Therapy (3.2)
<p><small>Supplemental vitamins or minerals.</small></p>
<ol>
<li><input type='checkbox' value='' />Multivitamin/mineral supplement therapy ND-3.2.1 10521</li>
<li><input type='checkbox' value='' />Multi-trace element supplement therapy ND-3.2.2 10522</li>
<li><input type='checkbox' value='' />Vitamin supplement therapy ND-3.2.3 10523
<ol>
<li><input type='checkbox' value='' />A (1) 10524</li>
<li><input type='checkbox' value='' />C (2) 10525</li>
<li><input type='checkbox' value='' />D (3) 10526</li>
<li><input type='checkbox' value='' />E (4) 10527</li>
<li><input type='checkbox' value='' />K (5) 10528</li>
<li><input type='checkbox' value='' />Thiamin (6) 10529</li>
<li><input type='checkbox' value='' />Riboflavin (7) 10530</li>
<li><input type='checkbox' value='' />Niacin (8) 10531</li>
<li><input type='checkbox' value='' />Folate (9) 10532</li>
<li><input type='checkbox' value='' />B6 (10) 10533</li>
<li><input type='checkbox' value='' />B12 (11) 10534</li>
<li><input type='checkbox' value='' />Pantothenic acid (12) 10535</li>
<li><input type='checkbox' value='' />Biotin (13) 10536</li>
</ol>
</li>
<li><input type='checkbox' value='' />Mineral supplement therapy ND-3.2.4 10538
<ol>
	<li><input type='checkbox' value='' />Calcium (1) 10539</li>
	<li><input type='checkbox' value='' />Chloride (2) 10540</li>
	<li><input type='checkbox' value='' />Iron (3) 10541</li>
	<li><input type='checkbox' value='' />Magnesium (4) 10542</li>
	<li><input type='checkbox' value='' />Potassium (5) 10543</li>
	<li><input type='checkbox' value='' />Phosphorus (6) 10544</li>
	<li><input type='checkbox' value='' />Sodium (7) 10545</li>
	<li><input type='checkbox' value='' />Zinc (8) 10546</li>
	<li><input type='checkbox' value='' />Sulfate (9) 10547</li>
	<li><input type='checkbox' value='' />Fluoride (10) 10548</li>
	<li><input type='checkbox' value='' />Copper (11) 10549</li>
	<li><input type='checkbox' value='' />Iodine (12) 10550</li>
	<li><input type='checkbox' value='' />Selenium (13) 10551</li>
	<li><input type='checkbox' value='' />Manganese (14) 10552</li>
	<li><input type='checkbox' value='' />Chromium (15) 10553</li>
	<li><input type='checkbox' value='' />Molybdenum (16) 10554</li>
	<li><input type='checkbox' value='' />Boron (17) 10555</li>
	<li><input type='checkbox' value='' />Cobalt (18) 10556</li>
</ul>
</ol>
</li>

</ol>
</li>
<li><input type='checkbox' value='' />Bioactive Substance Management (3.3)
<p><small>Addition or change in provision of bioactive substances</small></p>

<ol>
<li><input type='checkbox' value='' />Plant stanol esters ND-3.3.1 10559</li>
<li><input type='checkbox' value='' />Plant sterol esters ND-3.3.2 10816</li>
<li><input type='checkbox' value='' />Soy protein ND-3.3.3 10561</li>
<li><input type='checkbox' value='' />Psyllium ND-3.3.4 10817</li>
<li><input type='checkbox' value='' />Glucan ND-3.3.5 10563</li>
<li><input type='checkbox' value='' />Food additives (specify) ND-3.3.6 10564</li>
<li><input type='checkbox' value='' />Alcohol ND-3.3.7 10565</li>
<li><input type='checkbox' value='' />Caffeine ND-3.3.8 10566</li>
<li><input type='checkbox' value='' />Other (specify) ND-3.3.9 10567</li>
</ol>

</li>
</ol>
</div>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">4</span> Feeding Assistance<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Accommodation or assistance in eating."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes4').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes4'>
<li><input type='checkbox' value='' />Adaptive eating device ND-4.1 10808</li>
<li><input type='checkbox' value='' />Feeding position ND-4.2 10570</li>
<li><input type='checkbox' value='' />Meal set-up ND-4.3 10571</li>
<li><input type='checkbox' value='' />Mouth care ND-4.4 10572</li>
<li><input type='checkbox' value='' />Menu selection assistance ND-4.5 10809</li>
<li><input type='checkbox' value='' />Other ND-4.6 10573</li>
</ol>

</div></div>
</div>

</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">5</span> Manage Feeding Environment<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Adjustment of the factors where food is served that impact food consumption."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes5').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes5'>
<li><input type='checkbox' value='' />Lighting ND-5.1 10575</li>
<li><input type='checkbox' value='' />Odors ND-5.2 10576</li>
<li><input type='checkbox' value='' />Distractions ND-5.3 10577</li>
<li><input type='checkbox' value='' />Table height ND-5.4 10578</li>
<li><input type='checkbox' value='' />Table service ND-5.5 10849</li>
<li><input type='checkbox' value='' />Room temperature ND-5.6 10580</li>
<li><input type='checkbox' value='' />Meal service ND-5.7 10810</li>
<li><input type='checkbox' value='' />Meal location ND-5.8 10811</li>
<li><input type='checkbox' value='' />Other ND-5.9 10581</li>
</ol>

</div></div>
</div>
</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">6</span> Nutrition-Related Medication Management<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Modification of a medication or complementary/alternative medicine to optimize patient/client nutritional or health status."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes6').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes6'>
<li><input type='checkbox' value='' />Prescription medication ND-6.1 10839</li>
<li><input type='checkbox' value='' />OTC medication ND-6.2 10584</li>
<li><input type='checkbox' value='' />Complementary/ alternative medicine ND-6.3 10799</li>
</ol>

</div>
</div>
</div>
</div>

</div>

<div class="example-well">
<div class="page-header">
<h1 class="page-title">NUTRITION EDUCATION (E)</h1>
<div class="page-header-actions">
<div>
<button onclick="window.location.href = 'sessionflow2';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
<!--&nbsp;<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button--> 
</div>
</div>
</div>
</div>

<p>Formal process to instruct or train patients/clients in a skill or to impart knowledge to help patients/clients voluntarily manage or modify food, nutrition and physical activity choices and behavior to maintain or improve health.</p>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Nutrition Education–Content<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Instruction or training intended to lead to nutrition-related knowledge."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes7').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes7'>
<li><input type='checkbox' value='' />Purpose of the nutrition education E-1.1 10588</li>
<li><input type='checkbox' value='' />Priority modifications E-1.2 10589</li>
<li><input type='checkbox' value='' />Survival information E-1.3 10590</li>
<li><input type='checkbox' value='' />Nutrition relationship to health/disease E-1.4 10591</li>
<li><input type='checkbox' value='' />Recommended modifications E-1.5 10592</li>
<li><input type='checkbox' value='' />Other or related topics E-1.6 10593</li>
<li><input type='checkbox' value='' />Other E-1.7 10594</li>
<li><input type='checkbox' value='' />Physical activity guidance E-1.8 12012</li>
</ol>

</div></div>
</div>

</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Nutrition Education–Application<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Instruction or training leading to nutrition-related result interpretation or skills."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes8').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes8'>
<li><input type='checkbox' value='' />Result interpretation E-2.1 10596</li>
<li><input type='checkbox' value='' />Skill development E-2.2 10597</li>
<li><input type='checkbox' value='' />Other E-2.3 10598</li>
</ol>

</div></div>
</div>

</div>
</div>

<div class="example-well">
<div class="page-header">
<h1 class="page-title">NUTRITION COUNSELING (C)</h1>
<div class="page-header-actions">
<div>
<button onclick="window.location.href = 'sessionflow2';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
<!--&nbsp;<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button--> 
</div>
</div>
</div>
</div>
<p>A supportive process, characterized by a collaborative counselor–patient/client relationship to establish food, nutrition and physical activity priorities, goals, and individualized action plans that acknowledge and foster responsibility for self-care to treat an existing condition and promote health.</p>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Theoretical Basis/Approach<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="The theories or models used to design and implement an intervention."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes9').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes9'>
<li><input type='checkbox' value='' />Cognitive-behavioral theory C-1.1 10601</li>
<li><input type='checkbox' value='' />Health belief model C-1.2 10602</li>
<li><input type='checkbox' value='' />Social learning theory C-1.3 10603</li>
<li><input type='checkbox' value='' />Transtheoretical model/stages of change C-1.4 10604</li>
<li><input type='checkbox' value='' />Other C-1.5 10605</li>
</ol>

</div></div>
</div>
</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Strategies<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Selectively applied evidence-based methods or plans of action designed to achieve a particular goal."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes10').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes10'>
<li><input type='checkbox' value='' />Motivational interviewing C-2.1 10607</li>
<li><input type='checkbox' value='' />Goal setting C-2.2 10608</li>
<li><input type='checkbox' value='' />Self-monitoring C-2.3 10609</li>
<li><input type='checkbox' value='' />Problem solving C-2.4 10610</li>
<li><input type='checkbox' value='' />Social support C-2.5 10611</li>
<li><input type='checkbox' value='' />Stress management C-2.6 10612</li>
<li><input type='checkbox' value='' />Stimulus control C-2.7 10613</li>
<li><input type='checkbox' value='' />Cognitive restructuring C-2.8 10614</li>
<li><input type='checkbox' value='' />Relapse prevention C-2.9 10615</li>
<li><input type='checkbox' value='' />Rewards/contingency management C-2.10 10616</li>
<li><input type='checkbox' value='' />Other C-2.11 10617</li>
<textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Specify:"></textarea>
</ol>

</div></div>
</div>

</div>
</div>

<div class="example-well">
<div class="page-header">
<h1 class="page-title">COORDINATION OF NUTRITION CARE BY A NUTRITION PROFESSIONAL (RC)</h1>
<div class="page-header-actions">
<div>
<button onclick="window.location.href = 'sessionflow2';" type="button" class="btn btn-round btn-success btn-pill-left">Save & Go Back</button>
&nbsp;
<button type="button" class="btn btn-primary">Save</button>
<!--&nbsp;<button onclick="window.location.href = 'sessionflow3';" type="button" class="btn btn-round btn-success btn-pill-right">Save & Continue</button--> 
</div>
</div>
</div>
</div>
<p>Consultation with, referral to, or coordination of nutrition care with other providers, institutions, or agencies that can assist in treating or managing nutrition-related problems.</p>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">1</span> Collaboration and Referral of Nutrition Care<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Facilitating services with other professionals, institutions, or agencies during nutrition care."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes11').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes11'>
<li><input type='checkbox' value='' />Team meeting RC-1.1 10620</li>
<li><input type='checkbox' value='' />Referral to RDN with different expertise RC-1.2 10621</li>
<li><input type='checkbox' value='' />Collaboration with other nutrition professionals RC-1.3 10622</li>
<li><input type='checkbox' value='' />Collaboration with other providers RC-1.4 10812</li>
<li><input type='checkbox' value='' />Referral to other providers RC-1.5 10624</li>
<li><input type='checkbox' value='' />Referral to community agencies/programs RC-1.6 10625</li>
</ol>

</div></div>
</div>

</div>

<div class="col-sm-6">
<div class="panel panel-bordered panel-info">
<div class="panel-heading">
<h3 class="panel-title"><span class="badge badge-default">2</span> Discharge and Transfer of Nutrition Care to New Setting or Provider<i class="btn fa fa-info" aria-hidden="true" data-toggle="tooltip" data-original-title="Discharge planning and transfer of nutrition care from one level or location of care to another."></i></h3>
</div>
<div class="panel-body" style="padding: 15px">
<div class="form-group form-material has-info"> 

<script>
      jQuery(function() {
        $('#checkboxes12').bonsai({
          expandAll: false,
          checkboxes: true, // depends on jquery.qubit plugin
          handleDuplicateCheckboxes: false // optional
        });
      });
</script>
<ol id='checkboxes12'>
<li><input type='checkbox' value='' />Discharge and transfer to other providers RC-2.1 10813</li>
<li><input type='checkbox' value='' />Discharge and transfer to community agencies/programs RC-2.2 10814</li>
<li><input type='checkbox' value='' />Discharge and transfer to another nutrition professional</li>
</ol>

</div></div>
</div>

</div>

</div>

</div>
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
<!--script src="../assets/assets/vendor/jquery/jquery.js"></script--> 
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

</script>
</body>
</html>