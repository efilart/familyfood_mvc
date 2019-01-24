<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Dietitian - Walk-in | Familyfood Dashboard</title>

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

<!-- Page -->
<?php
$companyList = array();
$companyStringId = array();
if( count( $companies ) > 0 ){
foreach( $companies as $key => $company ){
$companyList[] = $company['company_name'];
$companyStringId[$company['company_name']] = $company['company_id'];
}
}
?>
<div class="page animsition">
<div class="page-content">
<div class="page-header">
<h1 class="page-title">Walk In</h1>
<!--div class="page-header-actions"> <a href="#" role="button" class="btn btn-danger btn-block btn-round"><i class="icon wb-plus" aria-hidden="true"></i>eh?</a></div--> 
</div>
<div class="panel">
<div class="panel-body">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<h4 class="example-title">Choose Company</h4>
<input type="text" id="companies" class="form-control">
<div class="clearfix margin-25"></div>
<select id="location" class='form-control'>
<?php
if( count( $locations ) > 0 ){
  echo '<option value="">Choose Location</option>';
  foreach( $locations as $loc ){
    echo <<< EOT
    <option value="{$loc->locatio_id}">{$loc->address2}</option>
EOT;
  } 
}
?>
</select>
<div class="margin-25"></div>
<!--div class="col-lg-4 form-group">
<input type="email" class="form-control" name="email" placeholder="Your Email">
</div-->

<select id="conference" class='form-control'>
<option value="">Choose Conference</option>
</select>
<div class="margin-25"></div>
<select id="service" class='form-control'>
<option value="">Choose Service</option>
</select>
<div class="margin-25"></div>
<input type="text" class="form-control" id="email" placeholder="Email">
<div class="margin-25"></div>
<input type="text" class="form-control" id="fname" placeholder="First Name">
<div class="margin-25"></div>
<input type="text" class="form-control" id="lname" placeholder="Last Name">
<div class="margin-25"></div>
<input type="text" class="form-control" id="phone" placeholder="Phone">
<div class="margin-25"></div>
<select class="form-control" id="reason" name="reason">
<option value="Healthy weight desired">Healthy weight desired</option>
<option value="Healthy eating">Healthy eating</option>
<option value="Health concern">Health concern</option>
<option value="Digestive concern">Digestive concern</option>
<option value="Food allergy">Food allergy</option>
<option value="Sports nutrition">Sports nutrition</option>
<option value="Meal planning ideas">Meal planning ideas</option>
<option value="Other">Other</option>
</select>

<div class="margin-25"></div>
<input type="text" class="form-control" id="hinsuranceid" placeholder="Insurance ID">
<div class="margin-25"></div>
<input type="text" class="form-control" id="hinsurancecompany" placeholder="Insurance Company">
<div class="margin-25"></div>
<div class="example example-buttons padding-top-50">
<button type="button" onclick="saveWalkIn()" class="btn btn-success">SUBMIT</button>
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
<script src="../assets/assets/vendor/typeahead-js/bloodhound.min.js"></script> 
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
<script src="../assets/assets/js/components/panel.min.js"></script>
<script src="../assets/assets/js/components/panel-actions.min.js"></script>
<script>
var companies = <?php print_r( json_encode( $companyList ) ); ?>;
var companyStringId = <?php print_r( json_encode( $companyStringId ) ); ?>;
var global_company_id_selected = 0;
$( '#companies' ).focusout( function(){
  var company_id = companyStringId[ $(this).val() ];
	global_company_id_selected = company_id;
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url: 'getAllLocationNames',
    data: { 
      'company_id': company_id,
    },
    success: function( data ){
      var locList = jQuery.parseJSON(data);
      var newLocList = "";
      if( locList.length > 0 ){
        newLocList = "<option value=''>Choose Location</option>";
        $.each( locList, function( key, val ){
          newLocList = newLocList + "<option value="+val.location_id+">"+val.address2+"</option>";
        });
      }
      $( '#location' ).empty();
      $( '#location' ).append( newLocList );
    }
  });
});

$( '#location' ).on( 'change', function(){
  var locID = $( this ).val();
  if( locID != null ){
    $.ajax({
      type: 'POST',
      datatype: 'JSON',
      url: 'displayservicesByDiet',
      data: {
        'locationid': $( this ).val(),
      },
      success: function( data ){
        var services = jQuery.parseJSON(data);
        if( service.length > 0 ){
          var serviceOption = "<option value=''>Choose Service</option>";
          $.each( services, function( key, value ){
            serviceOption += '<option value=\"'+value.service_id+'\">'+value.name+'</option>';
          });
	  $( '#service' ).empty();
          $( '#service' ).html( serviceOption );
        }
      }
    });
    postConfernce( locID );
  }
});

function postConfernce( locID ){
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url: 'getAllConferenceNames',
    data: { 
      'location_id': locID,
    },
    success: function( conf ){
      var confList = jQuery.parseJSON(conf);
      var newConfList = "";
      if( confList.length > 0 ){
        newConfList = "<option value=''>Choose Conference</option>";
        $.each( confList, function( key, val ){
          newConfList = newConfList + "<option value="+val.conference_id+">"+val.conf_room+"</option>";
        });
      }
      $( '#conference' ).empty();
      $( '#conference' ).append( newConfList );
    }
  });
}

$( '#email' ).focusout(function(){
  $.ajax({
    type: 'POST',
    datatype: 'JSON',
    url: 'getUserDetails',
    data: { 
      'user_id': $( this ).val(),
      'confirmationnumber': '',
      'cservice': '',
    },
    success: function( data ){
      var userDetails = jQuery.parseJSON(data);

      if( typeof userDetails != "undefined" ){
        if( userDetails.length > 0 ){
          $( '#fname' ).val( userDetails[0].firstname );
          $( '#lname' ).val( userDetails[0].lastname );
          $( '#phone' ).val( userDetails[0].phonenumber );
          $( '#hinsuranceid' ).val( userDetails[0].insurance_id );
          $( '#hinsurancecompany' ).val( userDetails[0].insurance_company );
        }
      }
    }
  });
});

function saveWalkIn(){
  var company = global_company_id_selected;
  var location = $( '#location' ).val();
  var conference = $( '#conference' ).val();
  var email = $( '#email' ).val();
  var fname = $( '#fname' ).val();
  var lname = $( '#lname' ).val();
  var phone = $( '#phone' ).val();
  var service = $( '#service' ).val();
  var dietEmail = "<?php echo $conuser;?>";
  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  if( !pattern.test(email) ){
    alert('not a valid e-mail address');
  }
  
  if( company == "" || location == "" || conference == "" || email == "" || fname == "" || lname == "" || phone == "" || service == "" ){
    alert( 'Please complete all information above' );
  }else{
    if( dietEmail != ""){
      // ajax save client and then save appointment
      $.ajax({
        type: 'POST',
        datatype: 'JSON',
        url: 'saveWalkIn',
        data: { 
          'company': $( '#company' ).val(),
          'location': $( '#location' ).val(),
          'conference': $( '#conference' ).val(),
          'email': $( '#email' ).val(),
          'fname': $( '#fname' ).val(),
          'lname': $( '#lname' ).val(),
          'phone': $( '#phone' ).val(),
          'service': $( '#service' ).val(),
          'reason': $( '#reason' ).val(),
          'dietEmail': "<?php echo $conuser;?>",
          'hinsuranceid': $( '#hinsuranceid' ).val(),
          'hinsurancecompany': $( '#hinsurancecompany' ).val(),
          
        },
        success: function( result ){
          alert( result );
        }
      });
    }
  }
}

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

	  (function() {
        var insuranceList = ['Aetna','AmeriHealth Administrators','Amerihealth Non-HMO New Jersey','Amerihealth HMO New Jersey and Delaware',
        'BCBS North Carolina','Blue Cross Blue Shield of Pennsylvania','CIGNA','Health Partners','Highmark BCBS of PA','Horizon NJ Health',
        'Highmark BCBS of NJ','Independence Administrators','Independence Blue Cross','Keystone Health Plan East','Keystone First','Medicare Pennsylvania','United HealthCare'];
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

        $('#hinsurancecompany').typeahead({
          hint: true,
          highlight: true,
          minLength: 3
        }, {
          name: 'insuranceList',
          source: substringMatcher(insuranceList)
        });
      })();

	  (function() {
		var companyList = companies;
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

        $('#companies').typeahead({
          hint: true,
          highlight: true,
          minLength: 3
        }, {
          name: 'companyList',
          source: substringMatcher(companyList)
        });
      })();

    })(document, window, jQuery);

  </script>
</body>
</html>