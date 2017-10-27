jQuery(document).ready(function() {

	jQuery(".open-modal").find("a").addClass("open-modal-2");

		if(jQuery(window).width() >700 ) 

			jQuery(".open-modal-2").click(function() {

			jQuery(".modal").addClass("modal--is-visible");
				return false;

			});

	jQuery(".modal__close").click(function() {
		jQuery(".modal").removeClass("modal--is-visible");

	});

});



jQuery(document).keyup(function(e) {
	if (e.keyCode == 27) {
		jQuery(".modal").removeClass("modal--is-visible");
	}
});


jQuery(document).ready(function() {
	jQuery(".site-header__menu-icon").click(function() {
		jQuery(".site-header__menu-content").toggleClass("site-header__menu-content--is-visible");
    jQuery(".submenu").removeClass("submenu-on");
    	});
});
    
jQuery(document).ready(function()  {
  	jQuery(".submenu-click").click(function() {
		jQuery(".submenu").toggleClass("submenu-on");
    });
});


