$(function(){$(window).scroll(function(){sT=$(window).scrollTop();if(sT>150){$(".back_to_top").fadeIn("fast")}else{$(".back_to_top").fadeOut("fast")}});$('a[href="#"]').click(function(e){e.preventDefault()});$(".vid_wrap").fitVids();if(!(navigator.userAgent.toLowerCase().indexOf("firefox")>-1)){$("#sidebar").relativelySticky()}});(function($){"use strict";$.fn.fitVids=function(options){var settings={customSelector:null};if(!document.getElementById("fit-vids-style")){var div=document.createElement("div"),ref=document.getElementsByTagName("base")[0]||document.getElementsByTagName("script")[0],cssStyles="&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>";div.className="fit-vids-style";div.id="fit-vids-style";div.style.display="none";div.innerHTML=cssStyles;ref.parentNode.insertBefore(div,ref)}if(options){$.extend(settings,options)}return this.each(function(){var selectors=["iframe[src*='player.vimeo.com']","iframe[src*='youtube.com']","iframe[src*='youtube-nocookie.com']","iframe[src*='kickstarter.com'][src*='video.html']","object","embed"];if(settings.customSelector){selectors.push(settings.customSelector)}var $allVideos=$(this).find(selectors.join(","));$allVideos=$allVideos.not("object object");$allVideos.each(function(){var $this=$(this);if(this.tagName.toLowerCase()==="embed"&&$this.parent("object").length||$this.parent(".fluid-width-video-wrapper").length){return}var height=this.tagName.toLowerCase()==="object"||$this.attr("height")&&!isNaN(parseInt($this.attr("height"),10))?parseInt($this.attr("height"),10):$this.height(),width=!isNaN(parseInt($this.attr("width"),10))?parseInt($this.attr("width"),10):$this.width(),aspectRatio=height/width;if(!$this.attr("id")){var videoID="fitvid"+Math.floor(Math.random()*999999);$this.attr("id",videoID)}$this.wrap('<div class="fluid-width-video-wrapper"></div>').parent(".fluid-width-video-wrapper").css("padding-top",aspectRatio*100+"%");$this.removeAttr("height").removeAttr("width")})})}})(window.jQuery||window.Zepto);!function(a){a.fn.relativelySticky=function(b){var f,c=a(this),d=a.extend({speed:0,offset:0,pickup:"auto",cssEasing:"ease"},b),e=d;c.css({position:"relative",transition:"all "+e.speed+"ms "+e.cssEasing}),"auto"===e.pickup?a(window).scroll(function(){f=a(window).scrollTop(),f>=c.parent().offset().top?c.css({top:f-c.parent().offset().top+e.offset}):c.css("top","auto")}):0===e.pickup?(e.offset>0&&c.css("top",e.offset),a(window).scroll(function(){f=a(window).scrollTop(),f>=c.parent().offset().top+e.pickup?c.css("top",f-c.parent().offset().top+e.offset):f<c.parent().offset().top+e.pickup?c.css("top",e.offset):c.css("top","auto")})):(e.offset>0&&c.css("top",e.offset),a(window).scroll(function(){f=a(window).scrollTop(),f>=e.pickup?c.css("top",f-c.parent().offset().top+e.offset):f<c.parent().offset().top+e.pickup?c.css("top",e.offset):c.css("top","auto")}))}}(jQuery);(function(f,h,$){var a="placeholder"in h.createElement("input"),d="placeholder"in h.createElement("textarea"),i=$.fn,c=$.valHooks,k,j;if(a&&d){j=i.placeholder=function(){return this};j.input=j.textarea=true}else{j=i.placeholder=function(){var l=this;l.filter((a?"textarea":":input")+"[placeholder]").not(".placeholder").bind({"focus.placeholder":b,"blur.placeholder":e}).data("placeholder-enabled",true).trigger("blur.placeholder");return l};j.input=a;j.textarea=d;k={get:function(m){var l=$(m);return l.data("placeholder-enabled")&&l.hasClass("placeholder")?"":m.value},set:function(m,n){var l=$(m);if(!l.data("placeholder-enabled")){return m.value=n}if(n==""){m.value=n;if(m!=h.activeElement){e.call(m)}}else{if(l.hasClass("placeholder")){b.call(m,true,n)||(m.value=n)}else{m.value=n}}return l}};a||(c.input=k);d||(c.textarea=k);$(function(){$(h).delegate("form","submit.placeholder",function(){var l=$(".placeholder",this).each(b);setTimeout(function(){l.each(e)},10)})});$(f).bind("beforeunload.placeholder",function(){$(".placeholder").each(function(){this.value=""})})}function g(m){var l={},n=/^jQuery\d+$/;$.each(m.attributes,function(p,o){if(o.specified&&!n.test(o.name)){l[o.name]=o.value}});return l}function b(m,n){var l=this,o=$(l);if(l.value==o.attr("placeholder")&&o.hasClass("placeholder")){if(o.data("placeholder-password")){o=o.hide().next().show().attr("id",o.removeAttr("id").data("placeholder-id"));if(m===true){return o[0].value=n}o.focus()}else{l.value="";o.removeClass("placeholder");l==h.activeElement&&l.select()}}}function e(){var q,l=this,p=$(l),m=p,o=this.id;if(l.value==""){if(l.type=="password"){if(!p.data("placeholder-textinput")){try{q=p.clone().attr({type:"text"})}catch(n){q=$("<input>").attr($.extend(g(this),{type:"text"}))}q.removeAttr("name").data({"placeholder-password":true,"placeholder-id":o}).bind("focus.placeholder",b);p.data({"placeholder-textinput":q,"placeholder-id":o}).before(q)}p=p.removeAttr("id").hide().prev().attr("id",o).show()}p.addClass("placeholder");p[0].value=p.attr("placeholder")}else{p.removeClass("placeholder")}}})(this,document,jQuery);jQuery.fn.toggleAttr=function(name,onValue,offValue,on){function set($element,on){var value=on?onValue:offValue;return value===null?$element.removeAttr(name):$element.attr(name,value)}return on!==undefined?set(this,on):this.each(function(i,element){var $element=$(element);set($element,$element.attr(name)!==onValue)})};function Midway(){var e=$(".midway-horizontal"),t=$(".midway-vertical");e.each(function(){$(this).css("marginLeft",-$(this).outerWidth()/2)});t.each(function(){$(this).css("marginTop",-$(this).outerHeight()/2)});e.css({display:"inline",position:"absolute",left:"50%"});t.css({display:"inline",position:"absolute",top:"50%"})}$(window).on("load",Midway);$(window).on("resize",Midway);$(function(){$("input, textarea").placeholder();$(".chromeframe").on("click",function(){$(this).slideUp("fast")});$(".hamburger > button").click(function(){$(".hamburger > nav").toggleAttr("style","display: block !important;","display: none;")});if($("[jeet-fixed]").attr("jeet-fixed")){var setPosition=function(){$("[jeet-fixed]").css({position:"relative",top:$(window).scrollTop()+parseInt($("[jeet-fixed]").attr("jeet-fixed"),10)})};$(window).scroll(function(){if($(window).scrollTop()>=parseInt($("[jeet-pickup]").attr("jeet-pickup"),10)){setPosition();$(window).scroll(function(){var jS;if($("[jeet-speed]").attr("jeet-speed")){jS=$("[jeet-speed]").attr("jeet-speed")}else{jS="200ms"}setInterval(function(){if($(window).scrollTop()>=parseInt($("[jeet-pickup]").attr("jeet-pickup"),10)){$("[jeet-fixed]").css({position:"relative",top:$(window).scrollTop()+parseInt($("[jeet-fixed]").attr("jeet-fixed"),10),transition:"all "+jS+" ease"})}else{$("[jeet-fixed]").css({position:"relative",top:"auto"})}},200)})}})}});