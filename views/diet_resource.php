<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Dietitian - Resource Center | Familyfood Dashboard</title>

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
<!--link rel="stylesheet" href="../../assets/assets/vendor/raty/jquery.raty.css"-->

<!-- Page -->

<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">

<!-- Fonts -->

<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

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

<?php
if( $userid != "" ){
	include("inc_menu_header.php");
	include("inc_left_menu.php"); 
}else{
	include("inc_dietitian_menu_header.php");	
	include("inc_dietitian_left_menu.php");
}
?>

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
<h1 class="page-title">Resource Center</h1>

<!--div class="page-header-actions"> <a href="#" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>eh?</a></div--> 

</div>
<div class="panel">
<div class="panel-body">

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/0r5uyplz18jvh1xkxybmfch9qcqtkr80" alt="FAQs" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>FAQs</span> </div>
<a href="https://familyfoodllc.box.com/s/0r5uyplz18jvh1xkxybmfch9qcqtkr80" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/4pfethn8cm8c2xlnorv07fgtepaf1gd1" alt="Client Education Resources " class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Client Education Resources</span> </div>
<a href="https://familyfoodllc.box.com/s/4pfethn8cm8c2xlnorv07fgtepaf1gd1" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/1989g04623hggsjlxrw32losewwnjfas" alt="Getting Involved" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Getting Involved</span> </div>
<a href="https://familyfoodllc.box.com/s/1989g04623hggsjlxrw32losewwnjfas" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a>
</div>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/dxfdugo9115ts9l0eykhs58s3ltxon30" alt="Charting" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Charting</span> </div>
<a href="https://familyfoodllc.box.com/s/dxfdugo9115ts9l0eykhs58s3ltxon30" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a>
</div>
</div>
</div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/bht1mrf1c5zvueyrrrrux3fnblgtzql9" alt="RD Perks" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>RD Perks</span> </div>
<a href="https://familyfoodllc.box.com/s/bht1mrf1c5zvueyrrrrux3fnblgtzql9" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a>
</div>
</div>
</div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/pjmj52q7xm59ehhs6eyijeia0hox2qhr" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Goal Sheet</span> </div>
<a href="https://familyfoodllc.box.com/s/pjmj52q7xm59ehhs6eyijeia0hox2qhr" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>

</div>
<div class="clearfix"></div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/mc6hn8bwjwq7dck0ah0v9pvkv1brey72" alt="Open Door" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Open Door</span> </div>
<a href="https://familyfoodllc.box.com/s/mc6hn8bwjwq7dck0ah0v9pvkv1brey72" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a>
</div>
</div>
</div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://rightsignature.com/forms/Privacyconsent-dd7fed/token/f4a3185af03" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>e-sign Privacy Consent</span> </div>
<a href="https://rightsignature.com/forms/Privacyconsent-dd7fed/token/f4a3185af03" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://www.nutritioncaremanual.org/" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Nutrition Care Manual/Sports Nutrition Care Manual/Pediatric Nutrition Care Manual</span> </div>
<a href="https://www.nutritioncaremanual.org/" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>
<!--div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="http://placehold.it/800x600/fffffff?text=&nbsp;" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Family Food Corporate Wellness Nutrition Manual</span> </div>
<a href="#" target="_blank" class="btn btn-outline btn-primary">pending</a> </div>
</div>
</div-->
<div class="clearfix"></div>
<!--div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="http://placehold.it/800x600/fffffff?text=&nbsp;" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Family Food Pediatric Home Visit Manual</span> </div>
<a href="#" target="_blank" class="btn btn-outline btn-primary">pending</a> </div>
</div>
</div-->
<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/a696fbeg4f6shqdy65abruh25mffijy5" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Family Food Vision and Values</span> </div>
<a href="https://familyfoodllc.box.com/s/a696fbeg4f6shqdy65abruh25mffijy5" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>
<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/pxv3vk8yjgpl2dqbkc1ouljbw14z4nhi" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Evidence Based Nutrition by Topic</span> </div>
<a href="https://familyfoodllc.box.com/s/pxv3vk8yjgpl2dqbkc1ouljbw14z4nhi" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>
<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/m79padc50711feeaewif5p23ro8sy37f" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Health Fair Documents</span> </div>
<a href="https://familyfoodllc.box.com/s/m79padc50711feeaewif5p23ro8sy37f" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>
<div class="clearfix"></div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/9kmy501ofusuz2f4u1b91pkov79zrl59" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Billing Invoice Templates</span> </div>
<a href="https://familyfoodllc.box.com/s/9kmy501ofusuz2f4u1b91pkov79zrl59" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/gy36asgkfhi770oc4kekm9ywsfhzigs0" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Job Description and Compensation Model</span> </div>
<a href="https://familyfoodllc.box.com/s/gy36asgkfhi770oc4kekm9ywsfhzigs0" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well">
<img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/b8x77ksri0n8ai9xj2w8o161uy36ebvw" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Client Permission Slip</span> </div>
<a href="https://familyfoodllc.box.com/s/b8x77ksri0n8ai9xj2w8o161uy36ebvw" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a>
</div>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/324y0k6wh3haqbemshoojg5s7rpskbid" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Physical Assessment Information</span> </div>
<a href="https://familyfoodllc.box.com/s/324y0k6wh3haqbemshoojg5s7rpskbid" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div> 

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/dj2q5mlyf5nufykfw7a0l66qcbrjwgel" alt="Family Food Nutrition Counseling Format" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Boot Camp</span> </div>
<a href="https://familyfoodllc.box.com/s/dj2q5mlyf5nufykfw7a0l66qcbrjwgel" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
</div>
</div>

<div class="col-md-4">
<div class="well"> <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="https://familyfoodllc.box.com/s/yzxy91yfs2j4qhvir1re6hmibl9fqddx" alt="Cultural Competence" class="img-responsive padding-bottom-20">
<div class="vertical-align-middle">
<div class="widget-time widget-divider"> <span>Cultural Competence</span> </div>
<a href="https://familyfoodllc.box.com/s/yzxy91yfs2j4qhvir1re6hmibl9fqddx" target="_blank" class="btn btn-outline btn-primary">CLICK HERE</a> </div>
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

<!-- Plugins --> 

<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/js/plugins/url2img.js"></script> 

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
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
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