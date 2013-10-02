// http://unheap.com

$(function() {
    $('.chromeframe').on('click', function() {
        $(this).slideUp('fast');
    });
});

// relatively-sticky.js by Cory Simmons -> @ccccory
(function($) {
    
    $.fn.relativelySticky = function(options) {
        
        var t = $(this),
            settings = $.extend({
                speed: 0,
                offset: 0,
                pickup: 'auto',
                cssEasing: 'ease'
            }, options),
            s = settings,
            w;
        
        t.css({
            position: 'relative',
            transition: 'all '+ s.speed +'ms '+ s.cssEasing
        });
        
        if(s.pickup === 'auto') {
            $(window).scroll(function() {
                w = $(window).scrollTop();
                if(w >= t.parent().offset().top) {
                    t.css({
                        top: w - t.parent().offset().top + s.offset
                    });
                } else {
                    t.css('top', 'auto');
                }
            });
        } else if(s.pickup === 0 ) {
            if(s.offset > 0) {
                t.css('top', s.offset);
            }
            $(window).scroll(function() {
                w = $(window).scrollTop();
                if(w >= t.parent().offset().top + s.pickup) {
                    t.css('top', w - t.parent().offset().top + s.offset);
                } else if(w < t.parent().offset().top + s.pickup) {
                    t.css('top', s.offset);
                } else {
                    t.css('top', 'auto');
                }
            });
        } else {
            w = $(window).scrollTop();
            if(w >= s.pickup) {
                t.css('top', w - t.parent().offset().top + s.offset);
            } else if(w < t.parent().offset().top + s.pickup) {
                t.css('top', s.offset);
            } else {
                t.css('top', 'auto');
            }
            $(window).scroll(function() {
                w = $(window).scrollTop();
                if(w >= s.pickup) {
                    t.css('top', w - t.parent().offset().top + s.offset);
                } else if(w < t.parent().offset().top + s.pickup) {
                    t.css('top', s.offset);
                } else {
                    t.css('top', 'auto');
                }
            });
        }
        
    };
    
}(jQuery));

// scrollIt
(function(c){var b="ScrollIt",a="1.0.1";var d={upKey:38,downKey:40,easing:"linear",scrollTime:600,activeClass:"active",onPageChange:null,topOffset:0};c.scrollIt=function(m){var h=c.extend(d,m),g=0,k=c("[data-scroll-index]:last").attr("data-scroll-index");var i=function(n){if(n<0||n>k){return}var o=c("[data-scroll-index="+n+"]").offset().top+h.topOffset;c("html,body").animate({scrollTop:o,easing:h.easing},h.scrollTime)};var j=function(o){var n=c(o.target).attr("data-scroll-nav")||c(o.target).attr("data-scroll-goto");i(parseInt(n))};var f=function(o){var n=o.which;if(n==h.upKey&&g>0){i(parseInt(g)-1);return false}else{if(n==h.downKey&&g<k){i(parseInt(g)+1);return false}}return true};var l=function(n){if(h.onPageChange&&n&&(g!=n)){h.onPageChange(n)}g=n;c("[data-scroll-nav]").removeClass(h.activeClass);c("[data-scroll-nav="+n+"]").addClass(h.activeClass)};var e=function(){var n=c(window).scrollTop();var p=c("[data-scroll-index]").filter(function(q,r){return n>=c(r).offset().top+h.topOffset&&n<c(r).offset().top+(h.topOffset)+c(r).outerHeight()});var o=p.first().attr("data-scroll-index");l(o)};c(window).on("scroll",e).on("scroll");c(window).on("keydown",f);c("body").on("click","[data-scroll-nav], [data-scroll-goto]",j)}}(jQuery));