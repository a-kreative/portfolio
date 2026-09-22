<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
<?php include('../includes/headers/head.php'); ?>
  </head>
   <body id="top">
   <div class="wrapper" class="cbp-spmenu-push">
    <?php include('../includes/menus/closet-menu.php'); ?>
	<div id="preloader">
    <div id="loader-status"><span>Just a moment...</span></div>
  </div>
        <nav class="navbar fx-ease-3">
        <div id="navbar" class="fx-ease-3">
		  <div id="utility-nav">
		  <div class="wide-container">
			<div class="row">
              <div class="col-xs-12">
                <div class="user-nav row">
                  <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				  <?php include('../includes/user/logged-in.php'); ?>
                  </div>
                  <div class="col-lg-4 col-md-5 col-sm-7 col-xs-12">
				  <?php include('../includes/user/search-nav.php'); ?>
				  </div>
                  <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 no-pad">
				  <?php include('../includes/user/nav-actions.php'); ?>
                </div>
                </div>
			   </div>
			  </div>
			</div>
		  </div><!--/#utlity-nav -->
		   <div id="main-nav">
			<div class="wide-container">
				<?php include('../includes/menus/main-nav.php'); ?>
          </div>
        </div>
      </div><!--/end #navbar -->
    </nav><!--/end nav.navbar -->