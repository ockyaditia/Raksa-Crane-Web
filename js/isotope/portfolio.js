(function($){$(document).ready(function(){if($().magnificPopup){$('.k2t-popup-link').magnificPopup({type:'image',});$('.k2t-video-popup-link').magnificPopup({type:'iframe',});$('.k2t-audio-popup-link').magnificPopup({type:'inline',midClick:true});$('div.k2t-popup-gallery').magnificPopup({delegate:'a.k2t-popup-gallery',type:'image',gallery:{enabled:true}});};$('.has-sticky-sidebar #secondary').stickyMojo({footerID:'#k2t_portfolio_factor',contentID:'#primary'});if($().masonry&&$().isotope&&$().imagesLoaded){$('.k2t-isotope-wrapper').each(function(){var $this=$(this);var $container=$this.find('.k2t-isotope-container');$this.imagesLoaded(function(){$container.addClass('loaded').find('.isotope-selector').find('.article-inner');var isotope_args={itemSelector:'.isotope-selector',transitionDuration:'.55s',masonry:{gutter:'.gutter-sizer',},};if($this.hasClass('isotope-grid')){isotope_args['layoutMode']='fitRows';}
if($this.hasClass('isotope-no-padding')){delete isotope_args.masonry.gutter;}
if($this.hasClass('isotope-free')){isotope_args.masonry['columnWidth']='.width-1';}
var $grid=$container.isotope(isotope_args);var animation=$grid.data('animation');if(animation=true){$container.find('.isotope-selector').find('.article-inner').each(function(){var $this=$(this);$this.parent().one('inview',function(event,isInView,visiblePartX,visiblePartY){if(isInView){$this.addClass('run_animation');}});});}
$this.find('.k2t-isotope-filter').find('a').click(function(){$this.find('.k2t-isotope-filter').find('li').removeClass('active');$(this).parent().addClass('active');var selector=$(this).attr('data-filter');$container.isotope({filter:selector,});return false;});});});}
if($().swiper){function run_swiper(slider){var $this=slider;var perview=parseInt($this.data('perview'));var container_w=$this.parent().outerWidth();if(container_w<480){perview=1;}
else if(container_w<768){if(perview>2)perview=2;}
else if(container_w<1024){if(perview>3)perview=3;}
var swiper_args={mode:'horizontal',loop:$this.data('loop'),speed:$this.data('speed'),mousewheelControl:$this.data('mousewheel'),keyboardControl:$this.data('keyboard'),calculateHeight:true,grabCursor:true,autoplayDisableOnInteraction:false,paginationClickable:true,paginationAsRange:true,paginationElement:'a',touchRatio:0.5,simulateTouch:$this.data('touch'),slidesPerView:perview,moveStartThreshold:50,}
if($this.data('auto')){swiper_args['autoplay']=parseInt($this.data('auto-time'));}
if($this.data('pager')){swiper_args['pagination']=$this.data('pagination-selector');}
if($this.data('free')){swiper_args['freeMode']=true;swiper_args['freeModeFluid']=true;}
if($this.hasClass('k2t-single-product-thumbnail-carousel')){swiper_args['slidesPerView']=3;}
if($this.hasClass('k2t-3d-slider')){swiper_args['centeredSlides']=true;swiper_args['tdFlow']={rotate:-20,stretch:0,depth:100,modifier:2,shadows:true}}
if($this.hasClass('k2t-awesome-slider')){swiper_args['centeredSlides']=true;swiper_args['slidesPerView']='auto';}
swiper_args['onSwiperCreated']=function(swiper){$this.find('.k2t-swiper-navi').find('.prev').on('click',function(e){e.preventDefault()
swiper.swipePrev()});$this.find('.k2t-swiper-navi').find('.next').on('click',function(e){e.preventDefault()
swiper.swipeNext()});if($this.hasClass('k2t-single-product-slider')){$this.parent().find('.k2t-single-product-thumbnail-carousel').find('.swiper-slide').on('click',function(e){e.preventDefault();swiper.swipeTo($(this).data('navi')-1);});}
if($this.hasClass('k2t-single-product-thumbnail-carousel')){$this.find('.swiper-slide').on('click',function(e){e.preventDefault();swiper.swipeTo($(this).data('navi')-2);});}}
var swiper_slider=$this.find('.k2t-swiper-container').swiper(swiper_args);}
$('.k2t-swiper-slider').each(function(){run_swiper($(this));$(window).resize(function(){run_swiper($(this));});});}});})(jQuery);