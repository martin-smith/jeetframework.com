$(function() {

    // Fade in/out top button
    $(window).scroll(function() {
        sT = $(window).scrollTop();
        if(sT > 150) {
            $('.back_to_top').fadeIn('fast');
        } else {
            $('.back_to_top').fadeOut('fast');
        }
    });

    $('a[href="#"]').click(function(e) {
        e.preventDefault();
    });
    
    // Scrollbar
    var setPerfectScroll = function() {
        s = $('#sidebar');
        if($(window).width() > 800) {
            s.perfectScrollbar().css('height', '415px');
        } else {
            s.perfectScrollbar('destroy').css('height', 'auto');
        }
    };
    setPerfectScroll();
    $(window).resize(function() {
        setPerfectScroll();
    });

});