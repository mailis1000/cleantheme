/**
 * Theme functions file
 */
( function( $ ) {

    $( document ).ready(function() {

    });

$('.wpml-ls a.wpml-ls-item-toggle').click(function(e) {
	$('.wpml-ls ul ul').slideToggle('fast');
	$('.wpml-ls').toggleClass('active');
	e.stopPropagation();
});
$(document).click(function() {
	$('.wpml-ls ul ul').slideUp('fast');
	$('.wpml-ls').removeClass('active');
});

    var shrinkHeader = 50;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
            $('nav').addClass('is-sticky');
        }
        else {
            $('nav').removeClass('is-sticky');
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }

})( jQuery );