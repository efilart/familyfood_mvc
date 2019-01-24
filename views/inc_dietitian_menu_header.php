<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar"> <span class="sr-only">Toggle navigation</span> <span class="hamburger-bar"></span></button>
<button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse"><i class="icon wb-more-horizontal" aria-hidden="true"></i></button>

<!--button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search" data-toggle="collapse"><span class="sr-only">Toggle Search</span> <i class="icon wb-search" aria-hidden="true"></i></button-->

<div class="navbar-brand navbar-brand-center">
<a href="viewappointments"><img class="navbar-brand-logo hidden-xs" src="../assets/assets/images/logo.png" title="Familyfoods">
<img class="navbar-brand-logo visible-xs" style="padding-bottom: 15px" src="../assets/assets/images/logo-solo.png" title="Familyfoods">
<!--span class="navbar-brand-text visible-xs">FamilyFood LLC</span--></a>
</div>
</div>
<!-- original div is: div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu"></div-->
<div class="navbar-container container-fluid" style="background-color: #e4eaec"> 

<!-- Navbar Collapse -->

<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse"> 

<!-- Navbar Toolbar -->

<ul class="nav navbar-toolbar">
<li class="hidden-xs" id="toggleFullscreen"><a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button"><span class="sr-only">Toggle fullscreen</span></a></li>
<li class="hidden-float"><a href="impact" role="button"><i class="fa fa-user-circle fa-2x"><span class="sr-only">MyIMPACT</span><span class="hamburger-bar"></span></i><span class="badge up badge-primary badge-md">MyIMPACT</span></span></a></li>
<li class="hidden-float"><a href="sessionflow" role="button"><i class="fa fa-drivers-license-o fa-2x"><span class="sr-only">Session NOTES</span><span class="hamburger-bar"></span></i><span class="badge up badge-success badge-md">Session NOTES</span></span></a></li>
</ul>

<!-- Navbar Toolbar Right -->

<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
<li class="dropdown">
<a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
<i class="icon wb-bell" aria-hidden="true" style="font-size:24px"></i> <span class="badge badge-danger up">!</span></a>
<ul class="dropdown-menu dropdown-menu-right" role="menu" style="width:320px">
<li role="presentation">
<!-- refresh -->
<div id="examplePanel" class="panel">
<div class="panel-heading bg-red-800">
<h3 class="panel-title white">MyImpact Notes<br /><small class="white">Click Refresh to view recent notes.</small></h3>
<div class="panel-actions">
<a class="panel-action icon wb-refresh white" data-toggle="panel-refresh" data-load-type="round-circle" data-load-callback="customRefreshCallback" aria-hidden="true"></a>
</div>
</div>
<div class="notes_scrollable">
<div class="panel-dubidap"></div>
</div>
</div>
<!-- end refresh -->
</li>
<li class="dropdown-menu-footer" role="presentation">
<a href="impact" role="menuitem"><small>VIEW ALL</small></a>
</li>
</ul>
</li>

<li class="dropdown"><a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="slide-bottom" role="button"> <span class="avatar avatar-online"> <img src="../assets/assets/portraits/user-icon.png" alt="..."> <i></i> </span> </a>
<ul class="dropdown-menu" role="menu">
<li role="presentation"> <a href="editprofile" role="menuitem"><i class="icon wb-edit" aria-hidden="true"></i> Edit Profile</a> </li>
<li role="presentation"> <a href="changepassword" role="menuitem"><i class="icon wb-lock" aria-hidden="true"></i> Change Password</a> </li>
<!--li role="presentation"> <a href="forgotpassword" role="menuitem"><i class="icon wb-unlock" aria-hidden="true"></i> Forgot Password?</a> </li-->
<li role="presentation"> <a href="signout" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Sign Out</a> </li>
</ul>
</li>
</ul>

<!-- End Navbar Toolbar Right --> 

</div>

<!-- End Navbar Collapse --> 

<!-- Site Navbar Seach -->

<div class="collapse navbar-search-overlap" id="site-navbar-search">
<form role="search">
<div class="form-group">
<div class="input-search"> <i class="input-search-icon wb-search" aria-hidden="true"></i>
<input type="text" class="form-control" name="site-search" placeholder="Search...">
<button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
</div>
</div>
</form>
</div>

<!-- End Site Navbar Seach --> 

</div>
</nav>
