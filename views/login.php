<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin">
<meta name="author" content="">
<title>Login | Family Food LLC</title>
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

<!-- Page -->
<link rel="stylesheet" href="../assets/assets/css/pages/login.css">

<!-- Fonts -->
<link rel="stylesheet" href="../assets/assets/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="../assets/assets/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- plugins -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- inline -->
<style>
.text-dark {
	color: #000000;
}
.modal-footer {
	border-top: none;
}
</style>
<!--[if lt IE 9]>
    <script src="../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

<!--[if lt IE 10]>
    <script src="../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

<!-- Scripts -->
<!--script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script-->
<script src="../assets/assets/vendor/modernizr/modernizr.js"></script>
<script src="../assets/assets/vendor/breakpoints/breakpoints.js"></script>
<script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full">
<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]--> 

<!-- Page -->
<!-- popup
<div id="myModal" class="modal fade modal-danger">
<div class="modal-dialog modal-center">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title"><i class="fa fa-smile-o"></i> Welcome! Have you upgraded your browser yet?</h4>
</div>

<div class="modal-body text-dark padding-bottom-30">
<h5>You might be missing out on a lot of <u>new</u> and fun things on the web.</h5>
<p style="padding-bottom: 15px">To maximize your experience and for your Internet security, we <u>highly recommend</u> using modern browsers. Click on your preferred browser below to take you to their offical download pages:</p>
<div class="col-sm-12 text-center">
<h4><i class="fa fa-smile-o"></i> It's Free!</h4>
<button type="button" onClick="window.open('https://www.google.com/chrome/');" class="btn btn-floating btn-success btn-sm" data-content="Google Chrome" data-trigger="hover" data-toggle="popover" data-original-title="Download" tabindex="0" title=""><i class="fa fa-chrome fa-lg" aria-hidden="true"></i></button>&nbsp;
<button type="button" onClick="window.open('http://windows.microsoft.com/en-us/internet-explorer/download-ie');" class="btn btn-floating btn-success btn-sm" data-content="IE 11" data-trigger="hover" data-toggle="popover" data-original-title="Download" tabindex="0" title=""><i class="fa fa-edge fa-lg" aria-hidden="true"></i></button>&nbsp;
<button type="button" onClick="window.open('https://www.mozilla.org/en-US/firefox/new/');" class="btn btn-floating btn-success btn-sm" data-content="Firefox" data-trigger="hover" data-toggle="popover" data-original-title="Download" tabindex="0" title=""><i class="fa fa-firefox fa-lg" aria-hidden="true"></i></button>&nbsp;
<button type="button" onClick="window.open('http://www.apple.com/safari/');" class="btn btn-floating btn-success btn-sm" data-content="Safari" data-trigger="hover" data-toggle="popover" data-original-title="Download" tabindex="0" title=""><i class="fa fa-safari fa-lg" aria-hidden="true"></i></button>&nbsp;
<button type="button" onClick="window.open('http://www.opera.com/');" class="btn btn-floating btn-success btn-sm" data-content="Opera" data-trigger="hover" data-toggle="popover" data-original-title="Download" tabindex="0" title=""><i class="fa fa-opera fa-lg" aria-hidden="true"></i></button>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">I'm good, thanks</button>
</div>

</div>
</div>
</div>
end popup --> 
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
<!--div class="page-content vertical-align-middle" style="background: url(http://familyfoodllc.com/images/book-work2.png) center top no-repeat"-->
<div class="page-content vertical-align-middle">
<div class="brand"><img class="brand-img" src="../assets/assets/images/logo-solo.png" alt="...">
<h2 class="brand-text">Family Food</h2>
</div>
<p>Sign into your account</p>
<!-- if error -->
<?php echo $erromsg; ?>
<!-- end error -->
<form method="post" action="logins">
<div class="form-group">
<label class="sr-only" for="inputUserID">Name</label>
<input type="text" class="form-control" id="inputUserID" name="inputUserID" placeholder="Email address">
</div>
<!--div class="form-group">
<label class="sr-only" for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
</div-->
<div class="form-group">
<label class="sr-only" for="inputPassword">Password</label>
<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
</div>
<div class="form-group clearfix">
<div class="checkbox-custom checkbox-inline pull-left">
<input type="checkbox" id="inputCheckbox" name="checkbox">
<label for="inputCheckbox">Remember me</label>
</div>
<a class="pull-right" href="forgotpassword" style="color:yellowgreen">Forgot password?</a> </div>
<button type="submit" class="btn btn-success btn-block"><i class="icon fa fa-sign-in" aria-hidden="true"></i> Sign in</button>
</form>
<p class="text-left"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;No account? <a href="register" style="color: yellowgreen">Click here to Register</a></p>
<p class="text-left"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;<a href=".././../index.php" style="color: yellowgreen">Proceed to Homepage</a></p>
<footer class="page-copyright">
<p>Family Food LLC</p>
<p>© <?php echo date("Y") ?>. All RIGHT RESERVED.</p>

<div class="btn-group " role="group" aria-label="hidden">
<a href="https://twitter.com/#!/Familyfoodllc" class="btn btn-icon social-twitter" target="_blank"><i class="icon bd-twitter" aria-hidden="true"></i></a>
<a href="https://www.facebook.com/pages/Family-Food/178786105530247" class="btn btn-icon social-facebook" target="_blank"><i class="icon bd-facebook" aria-hidden="true"></i></a>
</div>

<div class="row" style="padding: 25px"><span id="siteseal">
<script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=IY8VHOAYEjX4jxhbDYLSHgTiqaKZlNS1FxJ2W9P4YRCqPyGBcrEBuokkDRDj"></script></span>
</div>
</footer>
</div>
</div>
<!-- End Page --> 

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
<script src="../assets/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script> 

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
<script src="../assets/assets/js/components/jquery-placeholder.js"></script> 
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);

    function validateinputs() {
      var name = $("#inputUserID").val();
      var pwd = $("#inputPassword").val();

      if((name == "") || (pwd == "") ) {
        $(".erromsg").css('display','block');
        $(".errormessage").html("Please fill details");
        return false;
      }

      return true;
    }

    function authenticate() {
      $.ajax({
        url: 'authenticateuser' ,
        data: "username="+$("#inputUserID").val()+"&password="+$("#inputPassword").val(),
        type :'POST',
        success: resultFunc,
        failure: resultFunc,
        dataType: 'text',
        cache: true
      }); 
    }

    function resultFunc(){

    }
  </script>
</body>
</html>