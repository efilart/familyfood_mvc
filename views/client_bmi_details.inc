<div class="page-content container-fluid">

<div class="panel panel-bordered panel-primary">
<div class="panel-heading"><h1 class="panel-title text-uppercase">SESSION NOTES FOR <?php echo $user_full_name ?></h1></div>
</div>
<div class="row padding-top-25" data-plugin="matchHeight" data-by-row="true">

<div class="col-sm-6">
<div class="widget">
<div class="widget-content padding-30 bg-purple-600">
<div class="widget-watermark darker font-size-60 margin-15" style="opacity:.8"><a href="#"><!--i class="icon wb-user-circle" aria-hidden="true"></i--><span class="icon" style="text-align:right"><img src="../assets/assets/images/chart_thumb.png" data-target="#examplePositionCenter" data-toggle="modal" style="width:15%"></a></span></div>
<div class="counter counter-md counter-inverse text-left">
<div class="counter-number-group">
<h2 class="text-capitalize white" id="client_name_title"><?php echo $user_full_name ?></h2>
<h4 class="text-capitalize white">Birthday: <?php echo $dob ?></h4>
<h4 class="text-capitalize white">BMI: <?php if( isset($dietAdvice['da_bmi']) ) {echo $dietAdvice['da_bmi']; } ?></h4>
<h4 class="text-capitalize white">Goal Confidence Rating: <span class="rating-hint label label-success" id="exampleHintPercentage"></span></h4>
</div>
</div>
</div>
</div>
<!--div class="panel panel-bordered panel-primary">
<div class="panel-heading">
<h1 class="panel-title"><span style="text-transform: uppercase" id="client_name_title"><?php echo $user_full_name ?></span></h1>
</div>
<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</div>
</div-->
</div>

<div class="col-sm-6">
<div class="widget">
<div class="widget-content padding-30 bg-indigo-500">
<div class="widget-watermark darker font-size-60 margin-15"><i class="icon wb-stats-bars white" aria-hidden="true"></i></div>
<!-- chart -->
<div class="counter counter-md counter-inverse text-left">
<div class="counter-number-group">
<h2 class="text-capitalize white">Daily Food consumption</h2>
<div class="ct-chart" id="exampleHorizontalBar"></div>
</div></div>
<!-- end chart -->
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter" role="dialog" tabindex="-1">
<div class="modal-dialog modal-center">
<div class="modal-content" style="background-color: transparent !important;">
<!--div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
</div-->
<div class="modal-body">
<img src="../assets/assets/images/chart.png" style="width:100%">
</div>
</div>
</div>
</div>
<!-- End Modal --> 