<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>New Appointment | Familyfood Dashboard</title>
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
<link rel="stylesheet" href="../assets/assets/vendor/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="../assets/assets/vendor/typeahead-js/typeahead.css">


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
</head>
<body class="dashboard site-menubar-unfold" data-auto-menubar="false">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

<?php
// start header menu
if( $companyuser != "" ){
    include("inc_menu_header.php");
    include("inc_left_menu_company.php");
}else{
    include("inc_user_menu_header.php");
    include("inc_user_left_menu.php");
}
?>

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
<h1 class="page-title">New Appointment</h1>
<div class="page-header-actions"> <a href="manageappointments" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>Manage Appointments</a>
</div>
</div>

<div class="panel">
<div class="panel-body">
<!-- start progress bar -->
<h2>SELECT COMPANY</h2>
<div class="progress">
<div class="progress-bar progress-bar-striped active" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 16.6%" role="progressbar">
<span class="sr-only">90% Complete</span>
</div>
</div>

<!-- end progress bar -->
<!-- start map -->
<div class="col-md-8">
<div class="height-500" id="vmap"></div>
</div>
<!-- end map -->
<!-- start search -->
<div class="col-md-4">
<div class="well well-sm well-info">
<!--h4 class="white">Results for PENNSYLVANIA</h4-->
<label>ENTER STATE</label><input type="text" class="form-control" name="searchLocation" id="searchLocation" placeholder="Enter State" value="">
<input type="hidden" name="searchlocationid" id="searchlocationid">
</div>

<div class="well well-sm well-info">
<label>ENTER COMPANY</label><input type="text" class="form-control" name="searchCompany" id="searchCompany" placeholder="Enter Company" value="" autocomplete="off">
<input type="hidden" name="searchcompanyid" id="searchcompanyid">
</div>

<button type="button" class="btn btn-primary margin-bottom-20" id="searchBtn" onclick="searchAddress()">Search</button>
<div id="searchresult" class="well well-sm">
<h4>YOUR SEARCH RESULT</h4>
<div id='locResult'></div>
<!-- <div class="radio-custom radio-primary">
<input type="radio" id="inputRadiosUnchecked" name="inputRadios">
<label for="inputRadiosUnchecked">19348, Kennett Square</label>
</div> -->
</div>
</div>
<!-- end search -->

<div class="col-md-6 text-left"></div>
<div class="col-md-6 text-right"><a href="javascript:void(0);" onclick="storeCookie()" class="btn btn-success">SELECT SERVICE <i class="icon wb-chevron-right" aria-hidden="true"></i></a></div>

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
<script src="../assets/assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../assets/assets/vendor/jvectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="../assets/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>
 

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
<script src="../assets/assets/js/components/jvectormap.js"></script>

<script>
//functions
var companyDetails = <?php print_r( json_encode( $companyDetails ) ); ?>;

var ADDRESS_LIST = new Array();
$( '#vmap' ).vectorMap({
  map: 'us_merc_en',
  backgroundColor: '#3377CC',
  selectedRegion: 'MO',
  onRegionClick: function(element, code, region)
    {
      var initial = code.split( '-' );
      $("#searchLocation").val(initial[1].toUpperCase());
    }
});
//first load get session details( for editing appointments )
if( jQuery.isEmptyObject(companyDetails) == false ){
    $( '#searchLocation' ).val( companyDetails.city );
    $( '#searchCompany' ).val( companyDetails.company_name);
    
    //$( '#searchLocation' ).attr( 'readonly', true );
    $( '#searchCompany' ).attr( 'readonly', true );
    getCompanies( companyDetails.city );
    searchAddress();
}else{
    $.ajax({
      type: 'POST',
      datatype: 'JSON',
      url: 'getSessiondetails',
      success: function( data ){
        var sessionDetails = jQuery.parseJSON(data);
        if ( (sessionDetails.searchlocation != "false" ) && (sessionDetails.location_id != "false") && (sessionDetails.company_name != "false")) {
          $("#searchLocation").val(sessionDetails.searchlocation);
          $("#searchlocationid").val(sessionDetails.location_id);
          $("#searchCompany").val(sessionDetails.company_name);
    
          searchAddress();
        }
      }
    });
}

$( '#searchLocation' ).focusout( function(event){
  var location = $( this ).val();
  getCompanies( location );
});

$( '#searchCompany' ).focus( function( event ){
  if( ADDRESS_LIST.length <= 0 ){
    var loc = $( '#searchLocation' ).val();
    getCompanies( loc );
  }
});

function getCompanies( loc ){
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url: 'getCompaniesDetails',
    data: { 
      'value': loc,
    },
    success: function( data ){
      var locList = jQuery.parseJSON(data);
      if( locList.length > 0 && locList != "undefined" ){
        ADDRESS_LIST = new Array();
        $.each( locList, function( key, val ){
          ADDRESS_LIST.push( val.address );
        });
        matcher();
      }else{
        ADDRESS_LIST = new Array();
      }
      // searchResult( locList );
    }
  });
}
var globalLocationID = 0;
var globalAddress = '';

function searchAddress(){
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url: 'displayAllLocations',
    data: { 
      'searchLocation': $( '#searchLocation' ).val(),
      'searchComName': $( '#searchCompany' ).val(),
    },
    success: function( data ){
      var locList = jQuery.parseJSON(data);
      var locListHtml = "";
      if( locList.length > 0 && locList != 'undefined' ){
        $( '#searchresult div#locResult' ).html( '' );
        $.each( locList, function( key, val){
          locListHtml = '<div class="radio-custom radio-primary"><input type="radio" id="inputRadiosUnchecked'+key+'" name="inputRadios">'+
          '<label for="inputRadiosUnchecked'+key+'">'+val.zipcode+", "+val.address2+'</label></div>';
          $( '#searchresult div#locResult' ).append( locListHtml );

          document.getElementById("inputRadiosUnchecked"+key).onclick = function() {setGlobalDetails( val.location_id, val.address2 )};
        });
        // $( '#searchresult div' ).html( locListHtml );
      }else{
          $( '#searchresult div#locResult' ).html( '<p>No Result</p>' );
      }
    }
  });
}

function setGlobalDetails( locid, address ){
  globalLocationID = locid;
  globalAddress = address;
}

function matcher() {
  var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
      if( q.length > 2 ){
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
      }
    };
  };

  $('#searchCompany').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  }, {
    name: 'ADDRESS_LIST',
    source: substringMatcher(ADDRESS_LIST)
  });
}

function storeCookie() {
  if( globalLocationID > 0 && globalAddress != "" ){
    $.ajax({
      type: 'POST',
      datatype: 'JSON',
      url: 'setSessiondetails',
      data: { 
        'searchLocation': $( '#searchLocation' ).val(),
        'location_id': globalLocationID,
        'searchComName': $( '#searchCompany' ).val(),
        'locationname': globalAddress
      },
      success: function( data ){
        if( data == 'success' ){
          window.location.href = 'selectService';
        }
        // getServices( locationid );
      }
    });
  }else{
    alert( "Please select a location" );
  }
}

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