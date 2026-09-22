$(window).load(function() {
 initPreloader(1000);
});

$(function() {
    $(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();

  if(wScroll > 200) {
    $('#navbar').addClass('fx-nav');
	$("#toTop").fadeIn("slow");
  }

   if(wScroll < 200) {
    $('#navbar').removeClass('fx-nav');
	$("#toTop").fadeOut("slow");
   }
		
	});
});

$(window).resize(function() {
   $(".resize-hero").height($(window).height()); 
 });

// Site Preloader
function initPreloader(x) {

  var initFadeStatus = (x * 2);
  var initFadeScreen = (initFadeStatus + 1000);

  $("#loader-status span").delay(x).fadeOut("slow");
  $("#loader-status").delay(initFadeStatus).fadeOut("slow");

  setTimeout(function() {
        $("#preloader").addClass('close');
    }, initFadeScreen);
}

function smoothScroll() {
  $('a[href*=#]:not([href=#]):not(.preventDefault)').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').delay(250).animate({
            scrollTop: target.offset().top - 70}, 1400, 'easeInOutQuint');
          return false;
        }
      }
    });
}

function imgInit() {
  var imgFrm = $(".img-frm");
  var imgFrmPhoto = $(".img-frm img");

  var imgFrmPhotoH = imgFrmPhoto.height();
  var imgFrmPhotoW = imgFrmPhoto.width();

  var imgFrmH = imgFrm.height();

  var calcFrm = (imgFrmPhotoH - imgFrmH) / 2;
  var calcTallFrm = (imgFrmPhotoH - imgFrmH) / 5;
  var doNotCenter = imgFrmPhotoH + (imgFrmPhotoH/2);

  var newHeight = 0;
  var portrait = 0;


    if (imgFrmPhotoH > imgFrmH) {
      newHeight = calcFrm;
    } else {
      newHeight =  0;
    }
    
 imgFrmPhoto.each(function(){

    if ($(this).width() > 350) {
       $(this).css({"top":"-"+ newHeight + "px"});
    } else {
       $(this).css({"top":"-2.5%"});
    }
      
  }); 

  $(".avatar img").each(function(i){

    if ($(this).width() > 150) {
       $(this).css({"top":"-"+ newHeight + "px"});
    } else {
       $(this).css({"top":"-2.5%"});
    }
      
  }); 
}

function initSearchBar() {
		
      var submitIcon = $('.searchbox-icon');
      var inputBox = $('.searchbox-input');
      var searchBox = $('.searchbox');
      var isOpen = false;
      submitIcon.click(function(){
          if(isOpen == false){
              searchBox.addClass('searchbox-open');
              inputBox.focus();
              isOpen = true;
			  $('.searchbox-icon').css({'border-left':'3px solid #333'});
          } else {
              searchBox.removeClass('searchbox-open');
              inputBox.focusout();
              isOpen = false;
			  $('.searchbox-icon').css({'border-left':'3px solid #101010'});
          }
      });  
       submitIcon.mouseup(function(){
              return false;
          });
      searchBox.mouseup(function(){
              return false;
          });
      $(document).mouseup(function(){
              if(isOpen == true){
                  $('.searchbox-icon').css('display','block');
                  submitIcon.click();
              }
          });

   
}

function buttonUp(){
    var inputVal = $('.searchbox-input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
        $('.searchbox-input').css({'background':'#f8db54','color':'#000'});
    } else {
        $('.searchbox-input').val('');
        $('.searchbox-icon').css('display','block');
    }
}

function initModal() {
    //----- OPEN
    $('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
        e.preventDefault();
    });
 
    //----- CLOSE
    $('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });

}

function initOutfit(){
		var addBtn = $('.action-expand > .btn-add');
		var addBtnMenu = $('.action-expand > .btn-add > ul');
		
		addBtnMenu.hide();
		addBtn.click(function(e){
		$(this).parent().find('em').html(function(i,h){
			 return ($(this).parent().find('ul').is(':visible') ? '<i class="fa fa-plus"></i> Add To...' : '<i class="fa fa-times"></i> Close');
			});
			$(this).parent().find('ul').slideToggle();   
		});
}

function initUserMenu(){
		var addBtn = $('.user-options');
		var addBtnMenu = $('.user-options ul');
		
		addBtnMenu.hide();
		addBtn.click(function(){
			addBtnMenu.slideToggle();   
		});
}

function initClosetExpand() {
  $('.closet-expand > h3.closet-theme').click(function(e) {
	  $(this).parent().find('.closet-pad').slideToggle('slow', function(){
		  $(this).parent().find('h3.closet-theme').toggleClass('closed');
		  
	  });

  });
}


  function tapHandler(){
	  if($(window).width() < 481) {
  $('#cbp-spmenu-s1').on('click',function () {
	  if($(this).width() < 100){
    $( this ).addClass( "open-mobile" );
	  } else {
		$( this ).removeClass( "open-mobile" );
	  }
});

	  } else {
		  return false;
	  }
  }
  
$(window).trigger('resize');

jQuery(document).ready(function($) {
  initSearchBar();
  initModal();
  initOutfit();
  initUserMenu();
  initClosetExpand();
  smoothScroll();
	tapHandler();
  $(window).on("load", imgInit);
  $(window).on("resize", imgInit);
  
});


