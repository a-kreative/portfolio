
  <footer>
	<?php include('../includes/footers/foot-navigate.php'); ?>
	<?php include('../includes/footers/foot-links.php'); ?>
      <?php include('../includes/theme/copyright.php'); ?>
  </footer><!--/end footer -->
  
    <div><a href="#top" id="toTop"><i class="fa fa-angle-up"></i></a></div>
	</div><!--/end .wrapper -->
      <?php include('../includes/theme/modal.php'); ?>  
      <?php include('../includes/footers/foot.php'); ?>
    <script type="text/javascript" src="js/classie.js"></script>
	
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeft = document.getElementById( 'showLeft' ),
        body = document.body;
		showLeft.innerHTML = '<i class="fa fa-bars"></i> My Closet Menu';

      showLeft.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
		
		
		if (this.innerHTML == '<i class="fa fa-bars"></i> My Closet Menu') {
			this.innerHTML = '<i class="fa fa-times"></i> Close Menu';
		} else {
			this.innerHTML = '<i class="fa fa-bars"></i> My Closet Menu';
		}
		
        disableOther( 'showLeft' );
      };

      function disableOther( button ) {
        if( button !== 'showLeft' ) {
          classie.toggle( showLeft, 'disabled' );
        }
      }
    </script>
    <script type="text/javascript" src="../js/site.functions.js"></script> <!-- Functions -->
    <script>
    jQuery(document).ready(function($) {
          $('.menu-reveal').trigger('click');  
		  
		  $('.searchbox').addClass('searchbox-open');
		  $('.searchbox-icon').css({'border-left':'3px solid #333'});

    });
    </script>
</body>
</html>