	
  <footer id="foot">
	<?php include('includes/theme/support.php'); ?>
	<?php include('includes/footers/foot-contact.php'); ?>
	<?php include('includes/footers/foot-links-landing.php'); ?>
     <?php include('includes/theme/copyright.php'); ?>
  </footer><!--/end footer -->
    <div><a href="#top" id="toTop"><i class="fa fa-angle-up"></i></a></div>
        <?php include('includes/modals/login-modal.php'); ?>
        <?php include('includes/modals/signup-modal.php'); ?>
        <?php include('includes/modals/support-modal.php'); ?>
    <!-- Site Scripts -->
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- JQuery 1.11.3 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> <!-- JQuery 1.11.3 -->
		<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script> <!-- Bootstrap -->
		<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.responsiveTabs.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      var brandSlider = $('#brand-slider');

      brandSlider.owlCarousel({
        lazyLoad: true,
        navigation: false,
        autoPlay: true,
        loop: true,
        items: 6
      });
	  
	  $('#user-login').responsiveTabs();
	  $('#user-signup').responsiveTabs();
	 


    });
    </script> <!-- Carousel -->
    <script type="text/javascript" src="js/site.functions.js"></script> <!-- Functions -->
</body>
</html>