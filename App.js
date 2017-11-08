jQuery(document).ready(function() {
    jQuery(".open-modal").find("a").addClass("open-modal-2");
    if(jQuery(window).width() >768 ) 
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
        jQuery(".site-header__menu-content--inner").slideToggle("site-header__menu-content--inner-on");
        jQuery(".site-header__menu-icon").toggleClass("site-header__menu-icon--close-x");
    });
});
jQuery(document).ready(function() {
    jQuery('.menu-item-has-children').click(function() {
        jQuery(this).children('ul').slideToggle();
    });
});

    function skipMe() {
        var skipper = document.getElementsByClassName('skip-me')[0];
        skipper.classList.add('input-fieldset-awesome');
        window.scroll(500, skipper.clientHeight-80);
    }; 
skipMe();





