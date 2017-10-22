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