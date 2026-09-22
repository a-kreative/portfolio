
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