﻿
var $=jQuery.noConflict();var cbpBGSlideshow=(function(){var $slideshow=$('#cbp-bislideshowOoiT457d63'),$items=$slideshow.children('li'),itemsCount=$items.length,$controls=$('#cbp-bicontrols'),navigation={$navPrev:$controls.find('a.cbp-biprev'),$navNext:$controls.find('a.cbp-binext'),$navPlayPause:$controls.find('a.cbp-bipause')},current=0,slideshowtime,isSlideshowActive=true,interval=3500;function init(config){if(config.$slideshow!=undefined){$slideshow=config.$slideshow;$items=$slideshow.children('li');itemsCount=$items.length;}
if(config.$controls!=undefined){$controls=config.$controls;navigation={$navPrev:$controls.find('a.cbp-biprev'),$navNext:$controls.find('a.cbp-binext'),$navPlayPause:$controls.find('a.cbp-bipause')};}
$slideshow.imagesLoaded(function(){if(Modernizr.backgroundsize){$items.each(function(){var $item=$(this);$item.css('background-image','url('+ $item.find('img').attr('src')+')');});}
else{$slideshow.find('img').show();}
$items.eq(current).css('opacity',1);initEvents();startSlideshow();});}
function initEvents(){navigation.$navPlayPause.on('click',function(){var $control=$(this);if($control.hasClass('cbp-biplay')){$control.removeClass('cbp-biplay').addClass('cbp-bipause');startSlideshow();}
else{$control.removeClass('cbp-bipause').addClass('cbp-biplay');stopSlideshow();}});navigation.$navPrev.on('click',function(){navigate('prev');if(isSlideshowActive){startSlideshow();}});navigation.$navNext.on('click',function(){navigate('next');if(isSlideshowActive){startSlideshow();}});}
function navigate(direction){var $oldItem=$items.eq(current);if(direction==='next'){current=current<itemsCount- 1?++current:0;}
else if(direction==='prev'){current=current>0?--current:itemsCount- 1;}
var $newItem=$items.eq(current);$oldItem.css('opacity',0);$newItem.css('opacity',1);}
function startSlideshow(){isSlideshowActive=true;clearTimeout(slideshowtime);slideshowtime=setTimeout(function(){navigate('next');startSlideshow();},interval);}
function stopSlideshow(){isSlideshowActive=false;clearTimeout(slideshowtime);}
return{init:init};})();