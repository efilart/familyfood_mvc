<!DOCTYPE html>

<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Change Password | Family Food Dashboard</title>

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
<link rel="stylesheet" href="../../assets/assets/vendor/raty/jquery.raty.css">

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

<!-- start header menu -->

<?php include("inc_user_menu_header.php"); ?>

<!-- end header menu --> 

<!-- start left menu -->

<?php include("inc_user_left_menu.php"); ?>

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
</div>
<div class="panel">
<div class="panel-body">

<div class="col-sm-6">
<div class="form-group">
<h1 class="page-title pad_bottom">Change Password</h1>
<div class="input-group input-group-icon"> <span class="input-group-addon"> <span class="icon fa fa-unlock-alt" aria-hidden="true"></span> </span>
<input type="password" id="oldpassword" class="form-control input-lg" placeholder="Old Password">
</div>
<div class="margin-50"></div>
<div class="input-group input-group-icon"> <span class="input-group-addon"> <span class="icon fa fa-lock" aria-hidden="true"></span> </span>
<input type="password" id="newpassword" class="form-control input-lg" placeholder="New Password">
</div>
<p id="pwdValid" style="color:red" class="st1">Password must fulfill conditions listed to your right.</p>
<div class="margin-15"></div>
<div class="input-group input-group-icon pad_top"> <span class="input-group-addon"> <span class="icon fa fa-lock" aria-hidden="true"></span> </span>
<input type="password" id="confirmpassword" class="form-control" placeholder="Confirm New Password">
</div>
<p id="pwdMatch" style="display:none;color:red" class="st1">Password mismatch</p>
<div class="margin-15"></div>
<button type="button" onclick="updatePWD()" id="updatePwd" class="btn btn-success">SUBMIT</button>
</div>
</div>

<div class="col-sm-6">
<div class="form-group">
<h1 class="page-title pad_bottom">Password Generator</h1>
<div class="input-group mif">
<input type="text" class="form-control input-lg" rel="gp" data-size="27" id="nc" data-character-set="a-z,A-Z,0-9,#">
<span class="input-group-btn">
<button type="button" class="btn btn-default input-lg getNewPass"><span class="fa fa-refresh"></span> </button>
</span>
</div>
<div class="st1">Quickly generate a strong password. Use <strong>CRTL-C</strong> (Cmd+C for the Mac) to copy this password. Remember to store it in a safe place.</div>
<div class="slt pad_top">
<div class="row">
<div class="col-md-12 o7"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i> &nbsp; PASSWORD CONDITIONS: <span class="spn">27</span> characters a-z, A-Z, 0-9, #</div>
<div class="col-md-12 pbt o7 margin-top-10"><span class="text-nowrap bct"><mark><i class="fa fa-sliders fa-lg" aria-hidden="true"></i> &nbsp; SET PASSWORD LENGTH</mark></span>
<span class="l-8 rc"><a href="" class="field" id="data-nr" data-number="8">8</a></span>
<span class="l-9 rc"><a href="" class="field" id="data-nr" data-number="9">9</a></span>
<span class="l-12 rc"><a href="" class="field" id="data-nr" data-number="12">12</a></span>
<span class="l-18 rc"><a href="" class="field" id="data-nr" data-number="18">18</a></span>
<span class="l-24 rc"><a href="" class="field" id="data-nr" data-number="24">24</a></span>
<span class="l-32 rc"><a href="" class="field" id="data-nr" data-number="32">32</a></span>
<span class="l-64 rc"><a href="" class="field" id="data-nr" data-number="64">64</a></span>
<span class="l-128 rc"><a href="" class="field" id="data-nr" data-number="128">128</a></span>
</div>
</div>
<div class="pgb">
<div class="progress">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> Very strong </div>
</div>
</div>
<div class="opa1 text-left o7"><i class="fa fa-shield fa-lg" aria-hidden="true"></i> &nbsp; How strong is this password?
<div class="hsp"> It would take a computer about <span class="time-to-crack">263 DECILLION YEARS</span> to crack your password </div>
</div>
<hr>
<div class="advice">
<div class="atext o7"> <i class="fa fa-info" aria-hidden="true"></i> &nbsp; Tips to create a strong password (<a href="" class="toog">read more</a>) </div>
<div class="advice-text hsp">To prevent your password from being hacked:
<ol>
<li>Do not use the same password for multiple important accounts.</li>
<li>Do not use any dictionary word in your passwords.</li>
<!--li>Use a password that has at least 16 characters, use at least one number, one uppercase letter, one lowercase letter and one special symbol.</li-->
<li>Do not use the names of your families, friends or pets in your passwords.</li>
<li>Do not let your Web browsers store your passwords, since all passwords saved in Web browsers can be revealed easily.</li>
<li>Do not log in on public computers, or when connected to a public Wi-Fi hotspot, Tor, free VPN or web proxy.</li>
<!--li>Do not send sensitive information online via unencrypted(HTTP or FTP) connections - messages in these connections can be sniffed with very little effort. Instead, you should use encrypted connections such as HTTPS, SFTP, whenever possible.</li-->
<li>It's recommended to change your passwords every 10 weeks.</li>
<!--li>Turn on 2-step authentication whenever possible.</li-->
<li>Do not store your critical passwords in the cloud.</li>
</ol>
</div>
</div>
</div>
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
<script>

//functions

$( '#updatePwd' ).prop( 'disabled', true );

$( '#newpassword' ).focusout( function(){

  validatePWD();

});

$( '#confirmpassword' ).focusout( function(){

  validatePWD();

});

function validatePWD(){

  var value = $( '#newpassword' ).val();

  var value2 = $( '#confirmpassword' ).val();

  if( value.length > 7 ){



    if( value === value2 ){

      $( '#updatePwd' ).prop( 'disabled', false );

      $( '#pwdMatch' ).css({ 'display' : 'none' });

      if( value.match( /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/ ) !== null && 

        value2.match( /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/ ) !== null ){

      }else{

        $( '#updatePwd' ).prop( 'disabled', true );

      }

    }else{

      $( '#updatePwd' ).prop( 'disabled', true );

      $( '#pwdMatch' ).css({ 'display' : 'block' });

    }





  }else{

    $( '#updatePwd' ).prop( 'disabled', true );

  }

}



function updatePWD(){

  $.ajax({

    type: 'POST',

    datatype: 'JSON',

    url: 'updatePWD',

    data: { 

      'oldpassword': $( '#oldpassword' ).val(),

      'newpassword': $( '#newpassword' ).val(),

      'confirmpassword': $( '#confirmpassword' ).val(),

    },

    success: function( data ){

      alert( data );

    },

  });

}

//end

    (function(document, window, $) {

      'use strict';



      var Site = window.Site;

      $(document).ready(function() {

        Site.run();

      });

    })(document, window, jQuery);

  </script>
<script type="text/javascript">
            $("a").click(function(event) {
                event.preventDefault();
            });


            $('.toog').click(function() {
                $('.advice-text').slideToggle("slow");
            });


            $(document).ready(function() {

                $('.field').on('click mouseover', function() {
                    var $el = $(this);
                    //    console.log($el.data('number'));
                    $('.input-lg').attr('data-size', $el.data('number'));
                    $('input[rel="gp"]').each(function() {
                        $(this).val(randString($(this)));
                    });
                });
                //  $(".field").removeClass("label-info");
                $(".field").on('click mouseover', function() {
                    $(".spn").html($(this).attr("data-number"));
                    // remove classes from all
                    $(".field").removeClass("nrh");
                    // add class to the one we clicked
                    $(this).addClass("nrh");
                    //   $(".progress-bar").removeClass("progress-bar-danger");    
                    //   $(".progress-bar").addClass("progress-bar-info"); 

                    var xx = $('.input-lg').attr('data-size');

                    if (xx > 99) {
                        xx = 99;
                    }

                    var newprogress = xx;
                    var newprogress1 = xx;
                    newprogress1 += "%";

                    $(".field").removeClass("progress-bar-");

                    if (xx < 10) {

                        xxp = "Strong";
                        $(".progress-bar").addClass("progress-bar-warning");
                        $(".progress-bar").removeClass("progress-bar-success progress-bar-war progress-bar-info");

                    }

                    if (xx == 12) {

                        xxp = "Strong";
                        $(".progress-bar").addClass("progress-bar-war");
                        $(".progress-bar").removeClass("progress-bar-success progress-bar-warning progress-bar-info");

                    }

                    if (xx < 33 && xx > 13) {

                        xxp = "Very strong";
                        $(".progress-bar").addClass("progress-bar-info");
                        $(".progress-bar").removeClass("progress-bar-war progress-bar-success progress-bar-warning progress-bar-war");
                    }
                    if (xx < 129 && xx > 32) {

                        xxp = "WHOA!";
                        $(".progress-bar").addClass("progress-bar-success");
                        $(".progress-bar").removeClass("progress-bar-info progress-bar-warning progress-bar-war");

                    }

                    $('.progress-bar').text(xxp);
                    $('.progress-bar').attr('aria-valuenow', newprogress).css('width', newprogress1);

                    // how long to crack password...

                    var ttc = $('.input-lg').attr('data-size');

                    switch (ttc) {
                        case '8':
                            ttc = 'A FEW MINUTES';
                            break;
                        case '9':
                            ttc = 'A FEW MONTHS';
                            break;
                        case '12':
                            ttc = 'SEVERAL THOUSAND OF YEARS';
                            break;
                        case '18':
                            ttc = 'SEVERAL QUADRILLION YEARS';
                            break;
                        case '24':
                            ttc = 'A FEW OCTILLION YEARS';
                            break;
                        case '32':
                            ttc = 'A FEW TREDECILLION YEARS';
                            break;
                        case '64':
                            ttc = '6 QUINQUATRIGINTILLION YEARS';
                            break;
                        case '128':
                            ttc = 'forever';
                            break;
                    }




                    $('.time-to-crack').text(ttc);




                    // end - how long to crack password...




                    console.log(xx);

                });
            });
        </script>





        <script type="text/javascript">
            // Generate a password string
            function randString(id) {
                var dataSet = $(id).attr('data-character-set').split(',');
                var possible = '';
                if ($.inArray('a-z', dataSet) >= 0) {
                    possible += 'abcdefghijklmnopqrstuvwxyz';
                }
                if ($.inArray('A-Z', dataSet) >= 0) {
                    possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                }
                if ($.inArray('0-9', dataSet) >= 0) {
                    possible += '0123456789';
                }
                if ($.inArray('#', dataSet) >= 0) {
                    possible += '![]{}()%&*$#^<>~@|';
                }
                var text = '';
                for (var i = 0; i < $(id).attr('data-size'); i++) {
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                }
                return text;
            }

            // Create a new password on page load
            $('input[rel="gp"]').each(function() {
                $(this).val(randString($(this)));
            });

            // Create a new password
            $(".getNewPass").click(function() {
                var field = $(this).closest('div').find('input[rel="gp"]');
                field.val(randString(field));
            });

            // Auto Select Pass On Focus
            $('input[rel="gp"]').on("click", function() {
                $(this).select();
            });
</script>
</body>
</html>