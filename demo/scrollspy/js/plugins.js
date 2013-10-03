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
/**
 * ScrollIt
 * ScrollIt.js(scroll•it•dot•js) makes it easy to make long, vertically scrolling pages.
 * 
 * Latest version: https://github.com/cmpolis/scrollIt.js
 * 
 * License <https://github.com/cmpolis/scrollIt.js/blob/master/LICENSE.txt>
 */
(function($) {
    'use strict';

    var pluginName = 'ScrollIt',
        pluginVersion = '1.0.1';

    /*
     * OPTIONS
     */
    var defaults = {
        upKey: 38,
        downKey: 40,
        easing: 'linear',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset : 0
    };

    $.scrollIt = function(options) {

        /*
         * DECLARATIONS
         */
        var settings = $.extend(defaults, options),
            active = 0,
            lastIndex = $('[data-scroll-index]:last').attr('data-scroll-index');

        /*
         * METHODS
         */

        /**
         * navigate
         * 
         * sets up navigation animation
         */
        var navigate = function(ndx) {
            if(ndx < 0 || ndx > lastIndex) return;

            var targetTop = $('[data-scroll-index=' + ndx + ']').offset().top + settings.topOffset + 1;
            $('html,body').animate({
                scrollTop: targetTop,
                easing: settings.easing
            }, settings.scrollTime);
        };

        /**
         * doScroll
         * 
         * runs navigation() when criteria are met
         */
        var doScroll = function (e) {
            var target = $(e.target).attr('data-scroll-nav') || 
            $(e.target).attr('data-scroll-goto');
            navigate(parseInt(target));
        };

        /**
         * keyNavigation
         * 
         * sets up keyboard navigation behavior
         */
        var keyNavigation = function (e) {
            var key = e.which;
            if(key == settings.upKey && active > 0) {
                navigate(parseInt(active) - 1);
                return false;
            } else if(key == settings.downKey && active < lastIndex) {
                navigate(parseInt(active) + 1);
                return false;
            }
            return true;
        };

        /**
         * updateActive
         * 
         * sets the currently active item
         */
        var updateActive = function(ndx) {
            if(settings.onPageChange && ndx && (active != ndx)) settings.onPageChange(ndx);
            
            active = ndx;
            $('[data-scroll-nav]').removeClass(settings.activeClass);
            $('[data-scroll-nav=' + ndx + ']').addClass(settings.activeClass);
        };

        /**
         * watchActive
         * 
         * watches currently active item and updates accordingly
         */
        var watchActive = function() {
            var winTop = $(window).scrollTop();

            var visible = $('[data-scroll-index]').filter(function(ndx, div) {
                return winTop >= $(div).offset().top + settings.topOffset &&
                winTop < $(div).offset().top + (settings.topOffset) + $(div).outerHeight()
            });
            var newActive = visible.first().attr('data-scroll-index');
            updateActive(newActive);
        };

        /*
         * runs methods
         */
        $(window).on('scroll',watchActive).on('scroll');

        $(window).on('keydown', keyNavigation);

        $('body').on('click','[data-scroll-nav], [data-scroll-goto]', doScroll);

    };
}(jQuery));