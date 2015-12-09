Drupal.behaviors.init = {
	attach: function (context, settings) {
		(function ($) {
 			
 			
			// MENU TWEAKS!!!
 			//===================================
 			var 	nav = $('#nav-holder').hide(),
 					menu_icon = $('.menu-toggle .icon-menu'),
 					close_icon = $('.menu-toggle .icon-cross'),
 					nav_vis = false,
 					logo = jQuery('#logo'),
 					body = jQuery('body');

 			$('.menu-toggle').click(function(){
				navToggle();
				return false;
			});

			function navToggle(){
				if(nav_vis){
					nav_vis = false;
					navHide();
				}else{
					nav_vis = true;
					navShow();
				}
			}

			function navShow(){
				nav.fadeIn();
				menu_icon.fadeOut();
				close_icon.fadeIn();
				logo.fadeIn()
			}

			function navHide(){
				nav.fadeOut();
				close_icon.fadeOut();
				menu_icon.fadeIn();

				if(!body.hasClass('show_thumbs') && !body.hasClass('front')){
					logo.fadeOut();
				}
			}

			jQuery('body').imagesLoaded(function(){
				jQuery('#loader').fadeOut();
			});


		}(jQuery));
	}	
}


