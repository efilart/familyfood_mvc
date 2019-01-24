<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Session Report | Familyfood Dashboard</title>

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
<link rel="stylesheet" href="../assets/assets/vendor/raty/jquery.raty.css">
<link rel="stylesheet" href="../assets/assets/vendor/bootstrap-table/bootstrap-table.css">
<link rel="stylesheet" href="../assets/assets/vendor/typeahead-js/typeahead.css">
<link rel="stylesheet" href="../assets/assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
<link rel="stylesheet" href="../assets/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
<link rel="stylesheet" href="../assets/assets/vendor/datatables-responsive/dataTables.responsive.css">

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

<style>
.fixed-table-container {
	border: none !important;
}
.table>tfoot>tr>th, .table>thead>tr>th {
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
}
.table-hover>tbody>tr:hover {
    background-color: #ccc;
    color: #000;
}

.bootstrap-table .table > thead > tr > th {
    border-bottom: none;
}
.table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th {
    border: 0;
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
<div class="page-header">
<h2><span class="label label-success" style="text-transform: uppercase" id="client_name_title">Monitoring and Evaluation for <?php echo $user_full_name ?></span></h2>
<ol class="breadcrumb">
<li><a href="viewappointments">Home</a></li>
<li class="active">Monitoring and Evaluation</li>
</ol>

</div>

<?php include("client_bmi_details.inc"); ?>

<div class="page-content">
<form method="POST">
<div class="panel">
<div class="panel-body">

<div class="col-lg-7">
<h2>Goal Setting</h2>
<!-- GOAL SETTING -->
<h3 class="pad_bottom"><span class="label label-primary">Recommendations and Education</span></h3>
<label class="control-label" for="q1">Thank you for that information! May I share with you some strategies that work for others who have goals and routines similar to yours? Everything I recommend to you will be evidence-based which will increase your chances of success!</label>
<div class="form-group form-material has-info">
<p>Now out of all these options we discussed, which changes do you think are best for you at this time?</p>
<textarea class="form-control" id="q1" name="q1" rows="3"></textarea>
</div>
<h3 class="pad_bottom pad_top"><span class="label label-primary">Goal Setting</span></h3>
<!--div class="form-group form-material has-info">
<label class="control-label" for="q1">Now out of all these options we discussed, which changes do you think are best for you at this time?</label>
<textarea class="form-control" id="q1" name="q1" rows="3"></textarea>
</div>

<div class="form-group form-material has-info">
<label class="control-label" for="q5">FOOD AND/OR NUTRIENT DELIVERY (ND)</label>
<textarea class="form-control" id="q5" name="q5" rows="3"></textarea>
</div-->

</div>
<!-- start report -->
<div class="col-lg-5">
<div class="widget widget-shadow">
<div class="widget-content widget-radius padding-30 bg-blue-600 white">
<div class="counter counter-lg counter-inverse text-left">

<div class="counter-label margin-bottom-20">
<div>
<h3 class="white">DAILY SESSION REPORT</h3>
<div class="blue-200">Search for a Client to generate report. Date search is optional.</div>
</div>
</div>

<div class="pull-left hidden-xs" id="searchFields" role="group" style="width:100% !important;">
<div class='col-md-6 pull-left padding-5 form-group'> 
<!-- <label class="control-label" for="open_case_search">Case Status</label> -->
<input class="black form-control" type="text" placeholder="Client Name" name="client_name" id="client_name" value="<?php echo $cl_name;?>">
</div>
<div class='col-md-6 pull-left padding-5 form-group'> 
<!-- <label class="control-label" for="open_case_search">Case Status</label> -->
<input class="black form-control" type="text" placeholder="YYYY-MM-DD (optional)" name="date" id="date" value="<?php echo $date;?>">
</div>
</div>
<table class="table table-striped white" id="session_reports" data-toggle="table" data-query-params="queryParams" data-mobile-responsive="true" data-height="350" data-pagination="true" data-icon-size="outline">
<tbody></tbody>
</table>

</div>
</div>
</div>
</div>
<!-- end report -->
<div class="row row-lg pad_top">
<div class="col-sm-4 margin-bottom-20">
<h3>Met nutrition goal since last visit</h3>
<div class="example">
<select data-plugin="selectpicker" id="da_goalMet" name="da_goalMet" data-style="btn-outline btn-primary" class="form-control">
<option value="0">N/A</option>
<option value="No">No</option>
<option value="Yes">Yes</option>
</select>
</div>
</div>

<!-- nutrition goal -->
<div class="col-sm-4">
<h3>Nutrition Goal</h3>
<div class="example">
<textarea class="form-control" id="da_nutritionalGoal" name="da_nutritionalGoal" rows="3"></textarea>
</div>
</div>
<!-- physical goal -->
<div class="col-sm-4">
<h3>Physical Activity Goal</h3>
<div class="example">
<textarea class="form-control" id="da_physicalGoal" name="da_physicalGoal" rows="3"></textarea>
</div>
</div>

</div>

<div class="row row-lg pad_top">
<!-- Social goal -->
<div class="col-sm-4">
<h3>Social Goal</h3>
<div class="example">
<textarea class="form-control" id="da_socialGoal" name="da_socialGoal" rows="3"></textarea>
</div>
</div>

<!-- handouts -->
<div class="col-sm-4">
<h3>Handouts</h3>
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
<h3>&nbsp;</h3>
<div class="example">
<input type="checkbox" name="handout[]" value="Eating for Exercise">Eating for Exercise</label><br />
<input type="checkbox" name="handout[]" value="My Cholesterol">My Cholesterol</label><br />
<input type="checkbox" name="handout[]" value="My Blood Pressure">My Blood Pressure</label><br />
<input type="checkbox" name="handout[]" value="My Healthy Weight">My Healthy Weight</label><br />
<input type="checkbox" name="handout[]" value="My Goal Setting">My Goal Setting</label><br />
<input type="checkbox" name="handout[]" value="Child Nutrition">Child Nutrition</label><br />
</div>
</div>

</div>
<!-- end physical activity --> 
<h3 class="pad_top pad_bottom"><span class="label label-primary">Monitoring and Evaluation</span></h3>
<div class="form-group form-material has-info">
<label class="control-label" for="q2">What changes have taken place since last visit?</label>
<textarea class="form-control" id="q2" name="q2" rows="3"></textarea>
</div>

<div class="form-group form-material has-info">
<label class="control-label" for="q3">What is working well?</label>
<textarea class="form-control" id="q3" name="q3" rows="3"></textarea>
</div>

<div class="form-group form-material has-info">
<label class="control-label" for="q4">What barriers have you encountered?</label>
<textarea class="form-control" id="q4" name="q4" rows="3"></textarea>
</div>

<div class="panel panel-bordered panel-primary">
<div class="panel-heading">
<h3 class="panel-title">PLAN FOR NEXT SESSION</h3>
</div>
<div class="panel-body">
<div class="form-group form-material has-info">
<label class="control-label" for="q6">Plan for next session</label>
<textarea class="form-control" id="q6" name="q6" rows="3"></textarea>
</div>
</div>
</div>
										
<!--div class="example-well">
<div class="page-header">
<h1 class="page-title">Monitoring and Evaluation</h1>
<div class="page-header-actions">
<div>
<input type="submit" name="submit" value="Save" class="btn btn-lg btn-success">
</div>
</div>
</div>
</div-->

<!-- save -->
<div class="row padding-top-25">
<div class="col-md-4">
<button formaction="sessionflow" type="submit" class="btn btn-info btn-block btn_pad">Go to Assessment Page</button>
</div>
<div class="col-md-4">
<button onclick="submit(1)" type="button" class="btn btn-default btn-block btn_pad">Save & Go Back</button>
</div>
<div class="col-md-4">
<button onclick="submit" type="submit" class="btn btn-block btn-success btn_pad">Save</button>
</div>
</div>
<!-- end save -->

<!-- end of form -->

<!-- END GOAL SETTING -->
</div>

</div>
<!-- end form -->
</form>
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
<script src="../assets/assets/vendor/chartist-js/chartist.js"></script>
<script src="../assets/assets/vendor/switchery/switchery.min.js"></script> 
<script src="../assets/assets/vendor/intro-js/intro.js"></script> 
<script src="../assets/assets/vendor/screenfull/screenfull.js"></script> 
<script src="../assets/assets/vendor/slidepanel/jquery-slidePanel.js"></script> 
<script src="../assets/assets/vendor/chartist-js/chartist.js"></script>
<script src="../assets/assets/vendor/bootstrap-table/bootstrap-table.min.js"></script> 
<script src="../assets/assets/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script> 
<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script> 
<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script> 
<script src="../assets/assets/vendor/datatables/jquery.dataTables.min.js"></script> 
<script src="../assets/assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script> 
<script src="../assets/assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script> 
<script src="../assets/assets/vendor/datatables-responsive/dataTables.responsive.js"></script> 
<script src="../assets/assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script> 
<script src="../assets/assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

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
<script src="../assets/assets/js/components/datatables.js"></script>
<script src="../assets/assets/js/components/matchheight.min.js"></script>
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>

  var dietAdvice = <?php print_r( json_encode( $dietAdvice ) )?>;

  if( !jQuery.isEmptyObject( dietAdvice ) ){
    // $( '#q1' ).val( dietAdvice.da_q1 );
    // $( '#q2' ).val( dietAdvice.da_q2 );
    // $( '#q3' ).val( dietAdvice.da_q3 );
    
    $( '#q1' ).val( dietAdvice.da_q1 );
    $( '#q2' ).val( dietAdvice.da_q2 );
    $( '#q3' ).val( dietAdvice.da_q3 );
    $( '#q4' ).val( dietAdvice.da_q4 );
    $( '#q5' ).val( dietAdvice.da_q5 );
    $( '#q6' ).val( dietAdvice.da_q6 );
  }

  var client_name_id = [];

  var uid = 0;

  var dtable = '';

  (function(document, window, $) {

    'use strict';



    var Site = window.Site;

    $(document).ready(function() {

      Site.run();

    });



    (function() {

      $(document).ready(function() {

        var defaults = $.components.getDefaults("dataTable");



        var options = $.extend(true, {}, defaults, {

          "aoColumnDefs": [{

            'bSortable': false,

            'aTargets': [-1],

            'ordering': false

          }],

          "iDisplayLength": 20,

          "aLengthMenu": [

            [5, 10, 25, 50, -1],

            [5, 10, 25, 50, "All"]

          ],

          "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',

          "oTableTools": {

            "sSwfPath": "../assets/assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"

          }

        });



        dtable = $('#exampleTableTools').dataTable(options);

      });

    })();



    $('#session_reports').bootstrapTable({

      columns: [

        {

          field: 'client_name',

          title: 'Client',

          sortable: true

        },

        {

          field: 'sn_date_created',

          title: 'Date',

          sortable: true

        },

        {

          field: 'sn_date_created',

          title: 'Open report',

          sortable: false,

          formatter : function(value, row){

            return [
              '<a target="_blank" href="viewReport?sn_uid='+row.sn_uid+'&sn_id='+row.sn_id+'&sn_date_created='+row.sn_date_created+'" class="downloadReport"><i class="fa fa-external-link fa-1x white" aria-hidden="true"></i></a>'

            ];

          },

          // events: "downloadReport",

        },

      ],

      method: 'GET',

      url : "getReportList",

      queryParams: function (param){

        var search_details = {};

        search_details['date'] = $( '#date' ).val();

        search_details['uid'] = client_name_id[$( '#client_name' ).val()];



        param['search_details'] = search_details;

        

        return param;

      },

      cache: false,

      pagination: true,

      showRefresh: true,

      // toolbar: '#searchFields',

      rowStyle: true,

      sidePagination: 'server',

      sortName: 'sn_date_created',

      icons: {

            refresh: ' icon wb-search white',

        }

    });



    window.downloadReport = {

        'click .downloadReport': function (e, value, row){

          // downloadReport( row.sn_date_created, row.sn_uid );

        },

    };



    // function downloadReport( date, uid ){

    //   $.ajax({ 

    //   type: 'GET',

    //   datatype: 'JSON',

    //   //async: false,

    //   url: 'downloadReport',

    //   data: { 

    //     'date': date,

    //     'client_id': uid

    //   },

    //   success: function( data ){

    //     dtable.fnClearTable();

    //     var session_data = JSON.parse( data );

    //     dtable.fnAddData( session_data );

    //     // $.each( session_data, function( key, value ){

    //     //   dtable.fnAddData( value );

    //     // });

    //   }

    // });

    //   // document.location = "downloadReport/?date="+date+"&client_id="+uid;

    // }



  })(document, window, jQuery);



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

  </script>
</body>
</html>