<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Admin Dashboard | Family Food LLC</title>

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
<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/dashboard/v2.css">
<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">
<script src="https://use.fontawesome.com/286c52578e.js"></script>

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

<!--?php

//array of greetings

$greetings = array("Hello", "Greetings", "'Ello gov'na", "Salutations");



//randomize the order of the array

shuffle($greetings);

?-->

</head>

<body class="dashboard site-menubar-unfold">

<!--[if lt IE 8]>

        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

    <![endif]--> 

<!-- start header menu -->
<?php include("inc_menu_header.php"); ?>
<!-- end header menu --> 

<!-- start left menu -->
<?php include("inc_left_menu.php"); ?>
<!-- end left menu --> 

<!-- Page -->

<div class="page">
<div class="page-header padding-0">
<div class="widget widget-article type-flex">
<div class="widget-header cover overlay"> <img class="cover-image height-300" src="../assets/assets/example-images/dashboard-header.jpg" alt="">
<div class="overlay-panel text-center vertical-align" style="left: 0">
<div class="widget-metas vertical-align-middle blue-grey-800">
<div class="avatar avatar-100 margin-bottom-20"><img src="../assets/assets/portraits/profile-krista.png" alt=""></div>
<div class="widget-title font-size-50 margin-bottom-25 white"><!--?php print array_pop($greetings) /*prints the last array item*/?-->Greetings Krista</div>
<?php 
$meterPercentage = ($goalMeterValue->gm_val/$goalMeterValue->gm_max) * 100;
$meterVal = $goalMeterValue->gm_val.' / '.$goalMeterValue->gm_max;
?>
<!--h5 id="goalMeterText" style="color: #fff"><?php echo $meterVal;?> visits!</h5>
<div id="goalMeter" class="progress progress-sm">
<div role="progressbar" style="width: <?php echo $meterPercentage;?>%; border-radius: 8px;" class="progress-bar progress-bar-striped active"></div>
</div-->

</div>
</div>
</div>
</div>
</div>
<div class="page-content container-fluid">
<div class="row" data-plugin="matchHeight" data-by-row="true">
<div class="col-xlg-3 col-md-12">
<div class="row height-full">
<div class="col-xlg-12 col-md-6" style="height:50%;"> 

<!-- Panel -->

<div class="widget widget-shadow">
<div class="widget-content widget-radius padding-30 bg-red-600 white">
<div class="counter counter-lg counter-inverse text-left">
<div class="counter-label margin-bottom-20">
<div style="font-size:18px">LATEST & UPCOMING APPOINTMENTS</div>
</div>
<?php
if( !empty( $latestBooked ) ){
	foreach ( $latestBooked as $appointment ) {
		echo <<< EOT
		<div class="blue-200">{$appointment['firstname']} {$appointment['lastname']} / {$appointment['appointment_date']} / {$appointment['appointment_time']}</div>
		<div class="counter-label">
		<div class="progress progress-xs margin-bottom-10 bg-red-800">
		<div class="progress-bar progress-bar-info progress-bar-striped" style="width: 30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" role="progressbar"> <span class="sr-only">70%</span></div>
		</div>
		<div class="counter counter-sm text-left">
		</div>
		</div>

EOT;

	}

}

?>
<a href="appointments" type="button" class="btn btn-labeled social-google-plus margin-top-20"><span class="btn-label"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></span> Scan all Appointments</a> </div>
</div>
</div>
</div>
<div class="col-xlg-12 col-md-6" style="height:50%;"> 

<!-- Panel  -->

<div class="widget widget-shadow">
<div class="widget-content widget-radius padding-30 bg-blue-600 white">
<div class="counter counter-lg counter-inverse text-left">
<div class="counter-label margin-bottom-20">
<div style="font-size:18px">Edit Blog Posts</div>
<div class="blue-200">Instructions on how to edit/add blog posts are provided on the "Documentation" link below.</div>
</div>
<div class="counter-label">
<div class="progress progress-xs margin-bottom-10 bg-blue-800">
<div class="progress-bar progress-bar-info bg-white" style="width: 30%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" role="progressbar"> <span class="sr-only">30%</span></div>
</div>
<div class="counter counter-sm text-left">
<div class="counter-number-group"> <span class="counter-number font-size-14"><i class="fa fa-key"></i></span> <span class="counter-number-related font-size-14">Your blog access details has been provided. Keep it secret. Keep it safe.</span> </div>
</div>
<div class="counter-number-group margin-bottom-15"> <a href="https://www.familyfoodllc.com/blog/wp-admin" target="_blank" type="button" class="btn btn-labeled social-google-plus"><span class="btn-label"><i class="fa fa-wordpress fa-lg" aria-hidden="true"></i></span> Log-In as Admin</a> <a href="https://codex.wordpress.org/Posts" target="_blank" type="button" class="btn btn-labeled social-google-plus"><span class="btn-label"><i class="fa fa-book fa-lg" aria-hidden="true"></i></span> Documentation</a> 

<!--span class="counter-number-related">$</span> <span class="counter-number">14,000</span--> 

</div>
</div>
</div>
</div>
</div>

<!-- End Panel --> 

</div>
</div>
</div>
<div class="col-xlg-6 col-lg-8 col-md-12">
<div class="widget widget-shadow example-responsive" id="widgetLinearea">
<div class="widget-content bg-white padding-30" style="min-width:480px;">
<div class="row padding-bottom-20" style="height:calc(100% - 322px);">
<div class="col-sm-12 col-xs-12">
<div class="blue-grey-700"> 

<!-- Goal Meter Input start -->
													
<div class="margin-bottom-25">
<h3>Set Goal Meter</h3>
<div class="col-xs-4">
<h4>Value</h4>
<input type="text" class="form-control" id="gm_val" value="<?php echo $goalMeterValue->gm_val; ?>">
</div>
<div class="col-xs-4">
<h4>Max</h4>
<input type="text" class="form-control" id="gm_max" value="<?php echo $goalMeterValue->gm_max; ?>">
</div>
<div class="col-xs-3 col-lg-2">
<h4>&nbsp;</h4>
<button class="btn btn-block btn-primary" onclick="saveGoalMeter()">Save</button>
</div>
<div class="clearfix"></div>
</div>

<!-- Goal Meter Input end -->

<h3>FAMILY FOOD BLOG</h3>
<div class="clearfix"></div>

<!-- start blog -->

<?php

    global $text, $maxchar, $end;

    function substrwords($text, $maxchar, $end='...') {

        if (strlen($text) > $maxchar || $text == '') {

            $words = preg_split('/\s/', $text);      

            $output = '';

            $i      = 0;

            while (1) {

                $length = strlen($output)+strlen($words[$i]);

                if ($length > $maxchar) {

                    break;

                } else {

                    $output .= " " . $words[$i];

                    ++$i;

                }

            }

            $output .= $end;

        } else {

            $output = $text;

        }

        return $output;

    }



    $rss = new DOMDocument();

    $rss->load('https://familyfoodllc.com/blog/feed/'); // <-- feed location

    $feed = array();

    foreach ($rss->getElementsByTagName('item') as $node) {

        $item = array ( 

            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,

            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,

            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,

            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,

        );

        array_push($feed, $item);

    }



    $limit = 5; // <-- Change the number of posts shown

    for ($x=0; $x<$limit; $x++) {

        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);

        $link = $feed[$x]['link'];

        $description = $feed[$x]['desc'];

        $description = substrwords($description, 100);

        $date = date('l F d, Y', strtotime($feed[$x]['date']));

        echo '<h4><a href="'.$link.'" title="'.$title.'" target="_blank">'.$title.'</a></h4>';

        echo '<p><small><em>Posted on '.$date.'</em></small><br />';

        echo $description.'</p>';

    }

?>

<!-- end blog --> 

</div>
</div>
</div>

<!--div class="ct-chart margin-bottom-30" style="height:270px;"></div>

<ul class="list-inline text-center margin-bottom-0">

<li><i class="icon wb-large-point blue-200 margin-right-10" aria-hidden="true"></i> PC BROWSER </li>

<li class="margin-left-35"> <i class="icon wb-large-point teal-200 margin-right-10" aria-hidden="true"></i> MOBILE PHONE </li>

</ul--> 

</div>
</div>
</div>
<div class="col-xlg-3 col-lg-3 col-md-6">
<div class="panel" id="widgetUserList">
<div class="panel-heading">
<h3 class="panel-title">QUICK LINKS <!--span class="pull-right label label-round label-warning">10</span--></h3>
</div>
<div class="panel-body padding-0">
<ul class="list-group">
<li class="list-group-item padding-horizontal-30">
<div class="media"> 

<!--div class="media-left"> <a class="avatar" href="javascript:void(0)"> <img class="img-responsive" src="../../assets/portraits/2.jpg" alt=""> </a> <span class="status status-busy"></span> </div-->

<div class="media-body">
<p class="media-heading margin-bottom-0 blue-grey-700"><i class="fa fa-briefcase fa-lg" style="margin-right: 15px"></i><a href="company">MANAGE COMPANIES</a></p>
</div>
<div class="media-right"><a href="company"><i class="icon wb-chevron-right-mini margin-top-10" aria-hidden="true"></i></a></div>
</div>
</li>

<li class="list-group-item padding-horizontal-30">
<div class="media">
<div class="media-body">
<p class="media-heading margin-bottom-0 blue-grey-700"><i class="fa fa-user-md fa-lg" style="margin-right: 15px"></i><a href="dietitian">VIEW ALL DIETITIANS</a></p>
</div>
<div class="media-right"><a href="dietitian"><i class="icon wb-chevron-right-mini margin-top-10" aria-hidden="true"></i></a></div>
</div>
</li>

<li class="list-group-item padding-horizontal-30">
<div class="media"> 
<div class="media-body">
<p class="media-heading margin-bottom-0 blue-grey-700"><i class="fa fa-clipboard fa-lg" style="margin-right: 15px"></i> <a href="service">MANAGE SERVICES</a></p>
</div>
<div class="media-right"><a href="service"><i class="icon wb-chevron-right-mini margin-top-10" aria-hidden="true"></i></a></div>
</div>
</li>

<li class="list-group-item padding-horizontal-30">
<div class="media"> 
<div class="media-body">
<p class="media-heading margin-bottom-0 blue-grey-700"><i class="fa fa-pencil fa-lg" style="margin-right: 15px"></i> <a href="service">COMPOSE NOTIFICATION</a></p>
</div>
<div class="media-right"><a href="service"><i class="icon wb-chevron-right-mini margin-top-10" aria-hidden="true"></i></a></div>
</div>
</li>

<!--li class="list-group-item padding-horizontal-30">

<div class="media">

<div class="media-body">

<p class="media-heading margin-bottom-0 blue-grey-700">Ida Fleming</p>

<small class="blue-grey-400">CEO</small> </div>

<div class="media-right"> <i class="icon wb-chevron-right-mini margin-top-10" aria-hidden="true"></i> </div>

</div>

</li-->

</ul>
</div>
</div>
</div>
</div>
</div>

<!-- End Page --> 

<!--script src="http://maps.google.com/maps/api/js?sensor=false"></script--> 

<!-- Footer -->

</div>
<?php include("inc_footer.php"); ?>
<!-- Core  --> 

<script src="../assets/assets/vendor/jquery/jquery.js"></script> 
<script src="../assets/assets/vendor/bootstrap/bootstrap.js"></script> 
<script src="../assets/assets/vendor/animsition/jquery.animsition.js"></script> 
<script src="../assets/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="../assets/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script> 
<script src="../assets/assets/vendor/asscrollable/jquery.asScrollable.all.min.js"></script> 
<!-- Plugins --> 

<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/chartist-js/chartist.min.js"></script> 
<script src="../assets/assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script> 

<!--script src="../assets/assets/vendor/gmaps/gmaps.js"></script--> 

<script src="../assets/assets/vendor/matchheight/jquery.matchHeight-min.js"></script> 

<!-- Scripts --> 

<script src="../assets/assets/js/core.js"></script> 
<script src="../assets/assets/js/site.js"></script> 
<script src="../assets/assets/js/sections/menu.js"></script> 
<script src="../assets/assets/js/sections/menubar.js"></script> 
<script src="../assets/assets/js/sections/sidebar.js"></script> 
<script src="../assets/assets/js/configs/config-colors.js"></script> 
<script src="../assets/assets/js/configs/config-tour.js"></script> 
<script src="../assets/assets/js/components/animsition.js"></script> 
<script src="../assets/assets/js/components/slidepanel.js"></script> 
<script src="../assets/assets/js/components/switchery.js"></script> 
<script src="../assets/assets/js/components/gmaps.js"></script> 
<script src="../assets/assets/js/components/matchheight.js"></script>
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
<script>

// $(document).ready(function($) {

// Site.run();

// })();



function saveGoalMeter(){

    var val = $( '#gm_val' ).val();

    var max = $( '#gm_max' ).val();

    if( val == "" ){

        val = 0;

    }

    if( max == "" ){

        max = 0;

    }



    if( val.match(/^\d+$/) && max.match(/^\d+$/) ) {

        $.ajax({

            type: 'POST',

            datatype: 'JSON',

            //async: false,

            url: 'saveGoalMeter',

            data: { 

                'gm_val': val,

                'gm_max': max

            },

            success: function( data ){

                if( data ){

                    alert( "Goal meter set!" );

                    var percentage = (val/max) * 100;

                    var percentageText = val+' / '+max;



                    var goalMeterhtml = '<div role="progressbar" style="width: '+percentage+'%; border-radius: 8px;" class="progress-bar progress-bar-danger"></div>';

                    $( '#goalMeter' ).html( goalMeterhtml );

                    $( '#goalMeterText' ).html( percentageText+" Clients" );



                }else{

                    alert( "Please Enter correct value and max limit!" );

                }

            }

        });

    }else{

        alert( "Please Enter correct value and  max limit!" );

    }

}

</script>
</body>
</html>