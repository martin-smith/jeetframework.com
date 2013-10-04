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
    
    // FitVids
    $('.vid_wrap').fitVids();
    
    // Relatively Sticky
    $('#sidebar').relativelySticky();

});