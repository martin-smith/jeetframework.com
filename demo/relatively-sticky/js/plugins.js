// http://unheap.com

$(function() {
    $('.chromeframe').on('click', function() {
        $(this).slideUp('fast');
    });
});

// relatively-sticky.js by Cory Simmons -> @ccccory
!function(a){a.fn.relativelySticky=function(b){var f,c=a(this),d=a.extend({speed:0,offset:0,pickup:"auto",cssEasing:"ease"},b),e=d;c.css({position:"relative",transition:"all "+e.speed+"ms "+e.cssEasing}),"auto"===e.pickup?a(window).scroll(function(){f=a(window).scrollTop(),f>=c.parent().offset().top?c.css({top:f-c.parent().offset().top+e.offset}):c.css("top","auto")}):0===e.pickup?(e.offset>0&&c.css("top",e.offset),a(window).scroll(function(){f=a(window).scrollTop(),f>=c.parent().offset().top+e.pickup?c.css("top",f-c.parent().offset().top+e.offset):f<c.parent().offset().top+e.pickup?c.css("top",e.offset):c.css("top","auto")})):(e.offset>0&&c.css("top",e.offset),a(window).scroll(function(){f=a(window).scrollTop(),f>=e.pickup?c.css("top",f-c.parent().offset().top+e.offset):f<c.parent().offset().top+e.pickup?c.css("top",e.offset):c.css("top","auto")}))}}(jQuery);