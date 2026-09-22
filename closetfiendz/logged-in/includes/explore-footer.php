	
	<footer>
	<?php include('../includes/theme/support.php'); ?>
	<?php include('../includes/footers/foot-navigate.php'); ?>
	<?php include('../includes/footers/foot-links.php'); ?>
     <?php include('../includes/theme/copyright.php'); ?>
  </footer><!--/end footer -->
  
    <div><a href="#top" id="toTop"><i class="fa fa-angle-up"></i></a></div>
	</div><!--/end .wrapper -->
      <?php include('../includes/theme/modal.php'); ?>
      <?php include('../includes/footers/foot.php'); ?>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="../js/jquery.closetmenu.js"></script>
	
    <script type="text/javascript">
		jQuery(document).ready(function($) {

		  var arrivalSlider = $('#arrivals-slider');

		 arrivalSlider.owlCarousel({
			navigation : true,
			autoPlay : true
		  });

		});
    </script> <!-- Carousel -->
    <script type="text/javascript" src="../js/site.functions.js"></script> <!-- Functions -->
</body>
</html>