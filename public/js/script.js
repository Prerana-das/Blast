(function($) {
'use strict';

    $(document).ready(function() {

        // dropdown menu

        $(".sub-menu").css({"transform": "scale(0.8)", "opacity": "0", "transition": "all 0.3s ease-in-out"});
        $(".nav-list-item a").click(function(e) {
            e.preventDefault();
            var thisItem = $(this);

            if(thisItem.parent().hasClass("sel")) {
                thisItem.parent().find(".sub-menu").css({"transform": "scale(0.8)", "opacity": "0", "transition": "all 0.3s ease-in-out"});
                thisItem.parent(".nav-list-item.sel").removeClass("sel");
            }

            else {
                thisItem.parent().find(".sub-menu").css({"transform": "scale(0.8)", "opacity": "0", "transition": "all 0.3s ease-in-out", "pointer-events": "none"});
                thisItem.parent(".nav-list-item.sel").removeClass("sel");

                if(thisItem.next(".sub-menu").length) {
                    thisItem.parent().addClass("sel");
                    thisItem.next(".sub-menu").css({"transform": "scale(1)", "opacity": "1", "pointer-events": "all"});
                }
            }
        });

        $(document).mouseup(function(e){
            var body = $(".sub-menu");
            if(!body.is(e.body) && body.has(e.target).length === 0){
                body.css({"transform": "scale(0.8)", "opacity": "0", "transition": "all 0.3s ease-in-out"});
            }
        });

        $(document).mouseup(function(e){
            var selbody = $(".nav-list-item.sel");
            if(!selbody.is(e.selbody) && selbody.has(e.target).length === 0){
                selbody.removeClass("sel");
            }
        });

    
        // fixed navbar
    
        $(document).on('scroll', function() {
            var scrollPos = $(this).scrollTop();
    
            if( scrollPos > 10 ) {
                $('nav').addClass('navbar-home');
            }
    
            else {
                $('nav').removeClass('navbar-home');
            }
        });

        
    });

})(jQuery);