
    <nav class="navbar fx-ease-3">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#"><span class="logo"></span></a>
        </div><!--/end .navbar-header -->
        <div id="navbar" class="navbar-collapse collapse fx-ease-3">
		  <div id="utility-nav">
		  <div class="container">
			<div class="row">
              <div class="col-sm-12">
                <div class="user-nav row">
                  <div class="col-sm-4 col-xs-12">
				  <?php include('../includes/user/logged-in.php'); ?>
                  </div>
                  <div class="col-sm-4 col-xs-12">
				  <?php include('../includes/user/search-nav.php'); ?>
				  </div>
                  <div class="col-sm-4 col-xs-12 no-pad">
				  <?php include('../includes/user/nav-actions.php'); ?>
                </div>
                </div>
			   </div>
			  </div>
			</div>
		  </div><!--/#utlity-nav -->
			<?php include('../includes/menus/main-nav.php'); ?>
      </div><!--/end #navbar -->
    </nav><!--/end nav.navbar -->