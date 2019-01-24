<link href="<?php echo base_url() ?>css/settings_new.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/family_gen.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/common.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>css/details.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" media="all" />
<script src="<?php echo base_url() ?>js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery-1.6.4.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- First get JQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<!-- Then get JQuery UI -->
<script src="http://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
<script>
$(document).ready(function(){
});
</script>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<header>
<div class="container">
<h1 class="logo"><a href="#"><img alt="Family Food, LLC" src="<?php echo base_url() ?>images/family-food-logo.png" /> </a></h1>
<nav class="pull-right">
<ul class="nav nav-pills">
<!--<li><a href="set-availability.html">Set Availability</a></li>-->
<?php if($fdietitian != "") { ?>
<li><a href="searchdietitian">New Appointment</a></li>
<?php } ?>
<li><a href="viewappointments">View Appointments</a></li>
<li><a href="resourcecenter">Resource Center</a></li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $conuser ?> <span class="caret"></span> </a>
<ul class="dropdown-menu">
<li><a href="editprofile">Edit Profile</a></li>
<li><a href="changepassword">Change Password</a></li>
<li class="divider"></li>
<li><a href="signout">Sign Out</a></li>
</ul>
</li>
</ul>
</nav>
</div>
</header>
<!-- END HEADRT TAG --> 

<!-- START MAIN CONTENT -->
<div class="container content">
<h2>Resource Center</h2>
<table id="resourceCenterTable">
<tr>
<th>Family Food Nutrition Counseling Format</th>
<td><a href="https://familyfoodllc.box.com/s/oadyqczg5lu9e1nu5aaxyspwqbee604u" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Online Charting System</th>
<td><a href="https://www.officeally.com/" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Goal Sheet</th>
<td><a href="https://familyfoodllc.box.com/s/pjmj52q7xm59ehhs6eyijeia0hox2qhr" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Handouts</th>
<td><a href="https://familyfoodllc.box.com/s/joitbg5ci2g90ra2zukki8mepqnte5f2" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>e-sign Privacy Consent</th>
<td><a href="https://rightsignature.com/forms/Privacyconsent-dd7fed/token/f4a3185af03" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Family Food Corporate Wellness Nutrition Manual</th>
<td><a href="#" target="_blank">pending</a></td>
</tr>
<tr>
<th>Family Food Pediatric Home Visit Manual</th>
<td><a href="#" target="_blank">pending</a></td>
</tr>
<tr>
<th>Nutrition Care Manual/Sports Nutrition Care Manual/Pediatric Nutrition Care Manual</th>
<td><a href="https://www.nutritioncaremanual.org/" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Family Food Vision and Values</th>
<td><a href="https://familyfoodllc.box.com/s/1675dfass6l577j1lz9dq1sodt98x1cx" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Cultural Foods and Competency Resources</th>
<td><a href="https://familyfoodllc.box.com/s/jrd6k2d6efqq4bb0j73tfndx7yl6bpjr" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Health Fair Documents</th>
<td><a href="https://familyfoodllc.box.com/s/m79padc50711feeaewif5p23ro8sy37f" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>Billing Invoice Templates</th>
<td><a href="https://familyfoodllc.box.com/s/9kmy501ofusuz2f4u1b91pkov79zrl59" target="_blank">CLICK HERE</a></td>
</tr>
<tr>
<th>RD Compensation</th>
<td><a href="https://familyfoodllc.box.com/s/0dogjp121iym6gdxavm21bs13nk1h6ei" target="_blank">CLICK HERE</a></td>
</tr>
</table>
</div>
<!-- END MAIN CONTENT -->

<footer>
<div class="container">
<p>© 2013 Family Food, LLC. All Rights Reserved.</p>
</div>
</footer>
<!-- END FOOTER TAG --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>--> 
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
