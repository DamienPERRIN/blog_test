$(function() {
    function scrollTo( target ) {
            if( target.length ) {
                $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
            }
    }
    scrollTo( $("#landing_page") );

    $("html, body").animate({scrollTop : 0}, 1500);
});
