(function($){$.fn.extend({stickyMojo:function(options){if(this.length===0){return this;}
var settings=$.extend({'footerID':'','contentID':'','orientation':$(this).css('float')},options);var sticky={'el':$(this),'stickyLeft':$(settings.contentID).outerWidth()+ $(settings.contentID).offset.left,'stickyTop2':$(this).offset().top,'stickyHeight':$(this).outerHeight(true),'contentHeight':$(settings.contentID).outerHeight(true),'win':$(window),'breakPoint':$(this).outerWidth(true)+ $(settings.contentID).outerWidth(true),'marg':parseInt($(this).css('margin-top'),10)};var errors=checkSettings();cacheElements();return this.each(function(){buildSticky();});function buildSticky(){if(!errors.length){sticky.el.css('left',sticky.stickyLeft);sticky.win.bind({'load':stick,'scroll':stick,'resize':function(){sticky.el.css('left',sticky.stickyLeft);stick();}});}else{if(console&&console.warn){console.warn(errors);}else{alert(errors);}}}
function cacheElements(){settings.footerID=$(settings.footerID);settings.contentID=$(settings.contentID);}
function calculateLimits(){return{limit:settings.footerID.offset().top- sticky.stickyHeight,windowTop:sticky.win.scrollTop(),stickyTop:sticky.stickyTop2- sticky.marg}}
function setFixedSidebar(){sticky.el.addClass('is-sticky').css({position:'fixed',top:0,width:sticky.el.outerWidth()+'px',});}
function checkOrientation(){if(settings.orientation==="left"){settings.contentID.css('margin-left',sticky.el.outerWidth(true));}else{sticky.el.css('margin-left',settings.contentID.outerWidth(true));}}
function setStaticSidebar(){sticky.el.removeClass('is-sticky').css({'position':'static','margin-left':'0px'});settings.contentID.css('margin-left','0px');}
function setLimitedSidebar(diff){sticky.el.css({top:diff});}
function stick(){var tops=calculateLimits();var hitBreakPoint=tops.stickyTop<tops.windowTop&&(sticky.win.width()>=sticky.breakPoint);if(hitBreakPoint){setFixedSidebar();checkOrientation();}else{setStaticSidebar();}
if(tops.limit<tops.windowTop){var diff=tops.limit- tops.windowTop;setLimitedSidebar(diff);}}
function checkSettings(){var errors=[];for(var key in settings){if(!settings[key]){errors.push(settings[key]);}}
ieVersion()&&errors.push("NO IE 7");return errors;}
function ieVersion(){if(document.querySelector){return false;}
else{return true;}}}});})(jQuery);