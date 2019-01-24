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

<?php 

if( $usertype == 2 ){

  include("inc_user_menu_header.php");  

}else if( $usertype == 1 ){

  include("inc_menu_header.php");  

}else{
 include("inc_dietitian_menu_header.php");
}

 ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php 

if( $usertype == 2 ){

  include("inc_user_left_menu.php");  

}else if( $usertype == 1 ){

  include("inc_left_menu.php");  

} else{
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
<form method="POST">
<div class="panel">
<div class="panel-body"> 

<!-- start report -->

<div class="col-lg-12">
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

<input class="black form-control" type="text" placeholder="Client Name" name="client_name" id="client_name" value="">
</div>
<div class='col-md-6 pull-left padding-5 form-group'> 

<!-- <label class="control-label" for="open_case_search">Case Status</label> -->

<input class="black form-control" type="text" placeholder="YYYY-MM-DD (optional)" name="date" id="date" value="">
</div>
</div>
<table class="table table-striped white" id="session_reports" data-toggle="table" data-query-params="queryParams" data-mobile-responsive="true" data-height="350" data-pagination="true" data-icon-size="outline">
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>

<!-- end report --> 

</div>
</div>
</form>
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

  var client_name_id = [];



  var uid = 0;



  var dtable = '';



  (function(document, window, $) {



    'use strict';







    var Site = window.Site;



    $(document).ready(function() {



      Site.run();



    });



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

var usertype = <?php echo $usertype; ?>;
var ajax = 'getAlluser';
if( usertype == 3 ){
	ajax = 'getuser';
}




  $.ajax({ 



    type: 'GET',



    datatype: 'JSON',



    //async: false,



    url: ajax,



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