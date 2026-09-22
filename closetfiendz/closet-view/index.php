   <?php include('includes/closet-header.php'); ?>
  <section id="closet-view">
    <div class="wide-container-x1 inner-pad-y2">
		<h2 class="theme"><span>FashionFiend77's</span>Dashboard</h2>
	  <div class="row">
			<?php include('../includes/user/closet-dash.php'); ?>
		</div>
		
	  <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">3</span> Categories</h3>
			<?php include('../includes/user/category-feed.php'); ?>
	  </div>
		
	  <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">3</span> My Wishlist</h3>
			<?php include('../includes/user/closet-feed.php'); ?>
	  </div>
		
	  <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">4</span> Recently Added Outfits</h3>
			<?php include('../includes/user/closet-feed.php'); ?>
	  </div>
	  
		<h2 class="theme"><span>FashionFiend77’s</span> Closet</h2>
	  <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">16</span> All Outfits</h3>
			<?php include('../includes/user/closet-feed.php'); ?>
	  </div>
		<h2 class="theme"><span class="count">FashionFiend77’s</span>Network</h2>
      <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">78</span> From Closets You're Following</h3>
		<?php include('../includes/user/closet-feed.php'); ?>
      </div><!--/end .row -->
		  <div class="row closet-expand">
			<h3 class="closet-theme"><span class="count">10</span>Trending Outfits</h3>
			<?php include('../includes/user/closet-feed.php'); ?>
		  </div>
      <div class="row closet-expand">
		<h3 class="closet-theme"><span class="count">6</span>Suggestions for You</h3>
		<?php include('../includes/user/closet-feed.php'); ?>
      </div><!--/end .row -->
    </div><!--/end .container -->
  </section><!--/end section:#closet-view -->
 <?php include('includes/closet-footer.php'); ?>
 