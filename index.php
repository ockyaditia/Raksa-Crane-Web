<?php
include("include/session.php");
$get_perusahaan = "select * from settings where id='1'";
	$run_perusahaan = mysql_query($get_perusahaan); 
	while ($row_perusahaan = mysql_fetch_array($run_perusahaan))
	{
		$deskripsi_perusahaan = $row_perusahaan['deskripsi_perusahaan'];
		$alamat_perusahaan = $row_perusahaan['alamat_perusahaan'];
		$telephone_perusahaan = $row_perusahaan['telephone_perusahaan'];
		$email_perusahaan = $row_perusahaan['email_perusahaan'];
		
	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beranda - RWK</title>
 
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/megamenu.css">
<link rel="stylesheet" type="text/css" href="css/popular.css">
<link rel="stylesheet" type="text/css" href="css/shortcodes.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/woocommerce.css">
<link rel="stylesheet" type="text/css" href="css/vendor/cbpBGSlideshow.css">
<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/icon-box.css">
<link rel="stylesheet" type="text/css" href="css/icon-font-style.css">
<link rel="stylesheet" type="text/css" href="css/portfolio.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="offcanvas-type-default  offcanvas-right">
<div class="home-page">
<div class="k2t-container">
<header class="k2t-header">
<div class="k2t-header-top">
<div class="k2t-wrap">
<div class="k2t-row">
<div class="col-6">
<div class="h-element element-editor"> Raksa Wastu Kencana - Rental Crane, Service Crane Dan Jual Beli Crane</div>
</div>
<div class="col-6">  
<ul id="menu-footer" class="h-element k2t-menu ">

<?php
if($session->logged_in){
?>
<li>
<a>
<span class="k2t-title-menu">Selamat Datang <?php echo "$session->username"; ?></span>
</a>
</li>

<?php
if($session->isAdmin()){

?>
<li>
<a href="admin/index.php">
<span class="k2t-title-menu">Admin Panel</span>
</a>
</li>

<li>
<a href="process.php">
<span class="k2t-title-menu">Logout</span>
</a>
</li>
<?php
}
else{
?>
<li>
<a href="user/index.php">
<span class="k2t-title-menu">User Panel</span>
</a>
</li>

<li>
<a href="process.php">
<span class="k2t-title-menu">Logout</span>
</a>
</li>

<?php
}
}
else
{
?>
<li>
<a>
<span class="k2t-title-menu">Selamat Datang Guest</span>
</a>
</li>
<li>
<a href="login.php">
<span class="k2t-title-menu">Login</span>
</a>
</li>
<li>
<a href="register.php">
<span class="k2t-title-menu">Register</span>
</a>
</li>
<?php } ?>
</ul>
</div>  
</div>
</div>
</div>  
<div class="k2t-header-mid">  
<div class="k2t-wrap">
<div class="k2t-row">
<div class="col-2">  
<div class="h-element ">
<a class="k2t-logo" rel="home" href="index.php">
<img src="images/logo.png" alt="Raksa Wastu Kencana">
</a>
</div>
</div>  
<div class="col-10">
<div class="h-element search-box ">  
<div class="k2t-searchbox">
<form class="searchform" role="search" method="get">
<input type="text" value="" name="s" id="s" placeholder="Search...">
<button type="submit" value="" id="searchsubmit">
<i class="fa fa-search"></i>
</button>
</form>
</div>
</div> 
<div class="h-element ">  
<a class="open-sidebar" href="index.html#">
<span class="inner"></span>
</a>
</div>  
</div>
</div>
</div>
</div>  
<div class="k2t-header-bot" style="">  
<div class="k2t-wrap">
<div class="k2t-row">
<div class="col-9">  
<ul id="menu-main2" class="h-element k2t-menu ">
<li id="children">
<a href="index.php">
<span class="k2t-title-menu">Beranda</span>
</a>
</li>
<li>
<a href="about-us.php">
<span class="k2t-title-menu">Tentang Kami</span>
</a>
</li>
<li class="children ">
<a href="store/index.php">
<span class="k2t-title-menu">Produk</span>
</a>
<ul class="sub-menu">
<li class="k2t-dropdown-submenu">
<a href="store/index.php?tipe=dijual">
<span class="k2t-title-menu">Dijual</span>
</a>
</li>
<li class="k2t-dropdown-submenu">
<a href="store/index.php?tipe=disewakan">
<span class="k2t-title-menu">Disewakan</span>
</a>
</li>
</ul>
</li>
<li>
<a href="contact.php">
<span class="k2t-title-menu">Kontak Kami</span>
</a>
</li>
</ul>
</div>  
<div class="col-3">  
<ul class="h-element social ">
<li class="facebook">
<a target="_blank" href="index.html#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="twitter">
<a target="_blank" href="index.html#">
<i class="fa fa-twitter"></i>
</a>
</li>
</ul>
</div>  
</div>
</div>
</div>  
<div class="k2t-header-m">  
<div class="k2t-menu-m">
<a class="m-trigger">
<span></span>
</a>

</div>
<div class="k2t-logo-m">  
<a class="k2t-logo" rel="home" href="index.html">
<img src="images/logo.png" alt="Raksa Wastu Kencana">
</a>
</div>  
<div class="k2t-right-m">  
<div class="search-box">
<i class="fa fa-search"></i>
</div>
</div>  
</div>  
</header>  
<div class="k2t-body">  
<div class="k2t-content no-sidebar">  
<div class="page-entry">
 
<div class="rev-slider" style="max-height: 460px; height: 460px; backface-visibility: hidden; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); perspective: 2500px; background-image: none; background-color: rgb(233, 233, 233);">
<ul class="tp-revslider-mainul" style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: 460px;">
<li style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;" class="tp-revslider-slidesli active-revslide" data-transition="3dcurtain-horizontal,3dcurtain-vertical,cube,cube-horizontal,incube,incube-horizontal,turnoff,turnoff-vertical,papercut,flyin" data-slotamount="7" data-masterspeed="700" data-saveperformance="off">
<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" style="background-color: transparent; background-repeat: no-repeat; background-image: url(images/bg_slider_01.jpg); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 0; visibility: hidden;">
</div>
</div>
<div class="tp-caption customin customout start" data-x="10" data-y="bottom" data-voffset="-60" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="800" data-start="800" data-easing="Power4.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 5; left: 99.5px; top: 138px; visibility: visible; opacity: 0; transform: matrix3d(0.00002, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
<img style="width: 470px; height: 262px;" src="images/text-box.png" alt="">
</div>
<div class="tp-caption title lfb tp-resizeme start" data-x="55" data-y="169" data-speed="800" data-start="1300" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 6; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 40px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 25px; left: 144.5px; top: 169px; visibility: visible; opacity: 0; transform: translate3d(0px, 485px, 0px);">Cranes for Rent
</div>
<div class="tp-caption content lfb tp-resizeme start" data-x="55" data-y="220" data-speed="800" data-start="1700" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 7; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 144.5px; top: 220px; visibility: visible; opacity: 0; transform: translate3d(0px, 485px, 0px);">Raksa Wastu Kencana<br style="min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;"> 
</div>
<div class="tp-caption content-btn lfb tp-resizeme start" data-x="55" data-y="310" data-speed="800" data-start="2100" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 8; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 15px 30px; letter-spacing: 0px; font-size: 11px; left: 144.5px; top: 310px; visibility: visible; opacity: 0; transform: translate3d(0px, 485px, 0px);">
<a style="min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 11px;" href="about-us.php">read more</a>
</div>
</li>
<li style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;" class="tp-revslider-slidesli active-revslide" data-transition="random-static" data-slotamount="7" data-masterspeed="700" data-saveperformance="off">
<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" style="background-color: transparent; background-repeat: no-repeat; background-image: url(images/bg_slider_02.jpg); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 0; visibility: hidden;"></div>
</div>
<div class="tp-caption skewfromleftshort skewtorightshort start" data-x="10" data-y="bottom" data-voffset="-60" data-speed="800" data-start="800" data-easing="Power4.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 5; left: 99.5px; top: 138px; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);">
<img style="width: 470px; height: 262px;" src="images/text-box.png" alt="">
</div>
<div class="tp-caption title skewfromleftshort skewtorightshort tp-resizeme start splitted" data-x="55" data-y="169" data-speed="600" data-start="1300" data-easing="Cubic.easeOut" data-splitin="chars" data-splitout="chars" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 6; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 40px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 25px; left: 144.5px; top: 169px; visibility: visible; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
<div class="tp-splitted" style="display: block; text-align: start; position: relative;">
<div style="position:relative;display:inline-block;" class="tp-splitted">
<div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);" class="tp-splitted">C
</div>
<div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);" class="tp-splitted">R
</div>
<div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);" class="tp-splitted">A
</div>
<div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);" class="tp-splitted">N
</div>
<div style="position: relative; display: inline-block; visibility: visible; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0.573576, 0.819152, 0, 0, 0, 0, 1, 0, 270, 0, 0, 1);" class="tp-splitted">E
</div>
</div>


</div>
</div>
<div class="tp-caption content lfb tp-resizeme start" data-x="55" data-y="220" data-speed="800" data-start="1800" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 7; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 144.5px; top: 220px; visibility: visible; opacity: 0; transform: translate3d(0px, 485px, 0px);">The mother art is architecture. Without an architecture of our<br style="min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;">
own we have no soul of our own civilization. Famous quote<br style="min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;"> from Frank Lloyd Wright
</div>
<div class="tp-caption content-btn lfb tp-resizeme start" data-x="55" data-y="310" data-speed="800" data-start="2100" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 8; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 15px 30px; letter-spacing: 0px; font-size: 11px; left: 144.5px; top: 310px; visibility: visible; opacity: 0; transform: translate3d(0px, 485px, 0px);">
<a style="min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 11px;" href="about-us.php">read more</a>
</div>
</li>
<li style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;" class="tp-revslider-slidesli active-revslide current-sr-slide-visible" data-transition="random-static" data-slotamount="7" data-masterspeed="700" data-saveperformance="off">
<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="center top" data-kenburns="undefined" data-easeme="undefined" data-bgfit="cover" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" data-lazydone="undefined" style="background-color: transparent; background-repeat: no-repeat; background-image: url(images/bg_slider_03.jpg); background-size: cover; background-position: center top; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
</div>
</div>
<div class="tp-caption lft ltb start" data-x="100" data-y="60" data-speed="800" data-start="800" data-easing="Power4.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 5; left: 189.5px; top: 60px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px);">
<img style="width: 470px; height: 262px;" src="images/text-box.png" alt="">
</div>
<div class="tp-caption title lft ltb tp-resizeme start" data-x="150" data-y="90" data-speed="600" data-start="1400" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600" style="z-index: 6; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 40px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 25px; left: 239.5px; top: 90px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px);">Cranes For Rent
</div>
<div class="tp-caption content lft ltb tp-resizeme start" data-x="150" data-y="140" data-speed="800" data-start="2000" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 7; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px; left: 239.5px; top: 140px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px);">We offer a full line of crane rentals including Crane Trucks,
 <br style="min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;">
 Carry Deck Cranes and Walkbehind Cranes.<br style="min-height: 0px; min-width: 0px; line-height: 21px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 13px;"> 
</div>
<div class="tp-caption content-btn lft ltb tp-resizeme start" data-x="150" data-y="230" data-speed="800" data-start="2500" data-easing="Cubic.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="800" style="z-index: 8; white-space: nowrap; min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 15px 30px; letter-spacing: 0px; font-size: 11px; left: 239.5px; top: 230px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px);">
<a style="min-height: 0px; min-width: 0px; line-height: 17px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 11px;" href="store/">read more</a>
</div>
</li>
</ul>
</div>  
</div> 
<div class="k2t-row wpb_row no-margin-bottom " style="position: relative;background-color:#efefef;">
<div class="container">
<div class="col-12 wpb_column" style="position: relative;">
<div class="wpb_wrapper">  
 
<div class="k2t-row wpb_row rone no-margin-bottom" style="background-image: url(images/bg_buynow.png);background-position: right top;background-repeat: no-repeat;margin-bottom: 0px;padding-top: 15px;padding-bottom: 15px;">
<div class="wpb_column col-2 video_lightbox">  
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element " style="margin-top:5px; margin-bottom:0px;">
<div class="wpb_wrapper">
</div>
</div>
</div>
</div>  
<div class="hide-mobile wpb_column col-10" style="padding-top: 24px;">  
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>
<span style="color: #4d4d4d; font-size: 18px; font-family:roboto slab;">We provide risk management, safety and insurance programs that are unparalleled in the industry.</span>
</p>
</div>
</div>
</div>
</div>  
</div>  
</div>  
</div>
</div>
</div>  
<div class="k2t-row" style="position: relative;padding-top: 65px;">
<div class="container">
<div class="vc_col-sm-12 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-heading align-center has-border has-subtitle h2 heading">  
<div class="k2t-heading-inner">
<div class="text">
<h2 class="h">
<span>WELCOME</span>
</h2>
<div class="has-boder-style">
<span></span>
</div>
<h3 class="subtitle">We have one of the largest, most modern fleets of mobile cranes in the world.</h3>
</div>
</div>
</div>  
</div>
</div>
</div>
</div>
 
<div class="k2t-row wpb_row" style="padding-top: 60px;padding-bottom: 100px;">
<div class="container">
<div class="vc_col-sm-6 wpb_column">
<div class="wpb_wrapper">
<div class="article isotope-selector wpb_single_image wpb_content_element" style="margin-bottom:35px;">
<div class="wpb_wrapper article-inner" style="padding:0;">
<div class="entry-image">
<a class="image-link">
<img width="470" height="211" src="images/home_01.png" class="attachment-full" alt="home_01" style="width:100%;">
</a>
</div>
</div>
</div>
<div class="vc_custom_heading">
<h3 style="text-transform: uppercase;font-size: 20px;color: #424242;text-align: left;font-family:Dosis;font-weight:500;font-style:normal">RWK</h3>
</div>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="color:rgb(118, 118, 118);">Sebagai perusahaan jasa penyewaan alat berat dan service (Perbaikan) yang terbaik dibidangnya dan selalu mengupayakan service dan inovasi sebagai layanan utamanya, sehingga tercipta kerjasama yang saling menguntungkan
</p>
<p>
<a class="hover-custom" href="about-us.php">
<span style="font-size: 10px; color:#ffbe2a;">READ MORE &rarr;</span>
</a>
</p>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-6 wpb_column" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-row wpb_row" style="position: relative;">
<div class="container">
<div style="z-index: 10; position: relative;">
<div class="vc_col-sm-3 wpb_column" style="margin-bottom: 30px;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-3 align-left" style="padding:0;">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 24px;" class="awesome-gear"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="text-transform: inherit;font-size: 18px;margin:0" class="h">Jual Crane</h3>
</div>	
<div class="learnmore">
<a href="store/index.php?cat=Dijual">READ MORE &rarr;</a>
</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-3 wpb_column" style="margin-bottom: 30px;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-3 align-left" style="padding:0;">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 24px;" class="awesome-phone"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="text-transform: inherit;font-size: 18px;margin:0" class="h">Sewa Crane.</h3>
</div>

<div class="learnmore">
<a href="store/index.php?cat=Disewakan">READ MORE &rarr;</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>  
 
<div class="k2t-row">
<div class="container">
<div class="vc_col-sm-12" style="position: relative; z-index:10;">
<div class="wpb_wrapper" style="text-align: center;">
<div class="article isotope-selector wpb_single_image">
<div class="wpb_wrapper article-inner">
<div class="entry-image">
<a class="image-link">
<img width="632" height="447" src="images/worker.png" class="attachment-full" alt="worker">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  
 
<div class="k2t-row iconbox-element" style="position: relative; background-image: url(images/home_bg_services.jpg); background-repeat: no-repeat; background-position:right bottom;background-color:#f7f7f7;margin-top: -72px;border-top-width: 0px;padding-top:0px;padding-bottom: 150px;">
<div class="container">
<div class="vc_col-sm-12" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-row" style="position: relative;  margin-bottom: 0px;">
<div class="container">
<div class="vc_col-sm-12" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-heading align-center has-border has-subtitle h2 heading">
<div class="k2t-heading-inner">
<div class="text">
<h2 class="h">
<span>SERVICES</span>
</h2>
<div class="has-boder-style">
<span></span>
</div>
<h3 class="subtitle">Membantu bisnis anda.</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="k2t-row">
<div class="container">
<div class="vc_col-sm-4" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-1 has-shadow align-center" style="">
<div class="iconbox-icon " style="">
<i style="font-size: 24px;" class="lineicon-alarm"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #000000;text-transform: inherit;font-size: 18px;" class="h">Jual</h3>
</div>
<div class="desc">Kami menjual Crane.....</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-4">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-1 has-shadow align-center" style="">
<div class="iconbox-icon " style="">
<i style="font-size: 24px;" class="lineicon-map-marker"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #000000;text-transform: inherit;font-size: 18px;" class="h">Sewa</h3>
</div>
<div class="desc">Kami menyewakan Crane.....</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-4" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-1 has-shadow align-center" style="">
<div class="iconbox-icon " style="">
<i style="font-size: 24px;" class="lineicon-flag"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #000000;text-transform: inherit;font-size: 18px;" class="h">SUPPORT</h3>
</div>
<div class="desc">Professional engineers, certified construction &amp; facilities managers lead highly-skilled field personnel serving our customers.
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  
 

 
 

</div>  
</div>  
 

 
<div style="position: relative; background-image: url(images/bg-call-to-action.png); background-repeat: no-repeat; background-position:center top;background-color:#ffbe2a; margin-bottom: 0px !important;padding-top: 40px;padding-bottom: 30px;">
<div class="container">
<div style="position: relative;">
<div class="wpb_wrapper">
<div>
<h2 style="text-transform: uppercase;font-size: 20px;color: #ffffff;line-height: 20px;text-align: center;font-family:Dosis;font-weight:400;font-style:normal">We provide risk management, safety and insurance programs that are unparalleled in the industry.
</h2>
</div>
</div>
</div>
</div>
</div>  
 
<footer class="k2t-footer">
<div class="k2t-bottom">
<div class="k2t-wrap">
<div class="k2t-row">
<div class="col-3 about-us">  
<aside class="widget widget_text">
<h3 class="widget-title">
<span>About Us</span>
</h3>
<div class="text-widget"><?php echo $deskripsi_perusahaan; ?></div>
</aside>
</div>  
<div class="col-3">  
<aside class="widget widget_text">
<h3 class="widget-title">
<span>Contact Us</span>
</h3>
<div class="k2t-contact-us">
<p>
<i class="fa fa-building-o"></i>
<span class="footer-info">
<?php echo $alamat_perusahaan; ?>
</span>
</p>
<p>
<i class="fa fa-envelope"></i>
<span class="footer-info">
<a href="index.html#"><?php echo $email_perusahaan; ?></a>
</span>
</p>
<p>
<i class="fa fa-phone"></i>
<span class="footer-info">
Phone : <?php echo $telephone_perusahaan; ?>
</span>
</p>
</div>
</aside>
</div>  
<div class="col-6">  
<aside id="text-3" class="widget widget-text">
<h3 class="widget-title">
<span>touch with us</span>
</h3>
<div class="textwidget">
<div role="form" class="wpcf7" id="wpcf7-f529-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="529">
<input type="hidden" name="_wpcf7_version" value="4.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f529-o2">
<input type="hidden" name="_wpnonce" value="3f2c69301c">
</div>
<div class="k2t-row">
<div class="col-6">
<p>
<span class="wpcf7-form-control-wrap your-name">
<input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" name="fname" placeholder="First name">
</span>
</p>
<p>
<span class="wpcf7-form-control-wrap your-email">
<input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" name="fname" placeholder="Your Email">
</span>
</p>
</div>
<div class="col-6">
<p>
<span class="wpcf7-form-control-wrap textarea-390">
<textarea name="textarea-390" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea>
</span>
</p>
<p>
<input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit">
<img class="ajax-loader" src="images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
</p>
</div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div>
</div>
</aside>
</div>  
</div>
</div>
</div>
<div class="k2t-info">
<div class="k2t-wrap">  
<p class="copyright">Crane - Design copyright &copy; 2015 DNP&reg; All rights reserved.</p>
<ul id="footer-menu" class="menu">  
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149">
<a href="about-us.php">About Us</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
<a href="index.php">Home</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153">
<a href="store/">Produk</a>
</li>
</ul>  
</div>
</div>
</footer>  
</div>
 
<div class="offcanvas-sidebar">
<div class="k2t-sidebar">  
<aside class="widget widget_categories">  
<h3 class="widget-title">
<span>Blog Categories</span>
</h3>
<ul>
<?php
$get_cat = "select * from blog_categories";
	$run_cat = mysql_query($get_cat); 
	while ($row_cats = mysql_fetch_array($run_cat))
	{
			$kategori_id = $row_cats['cat_id'];
			$kategori_judul = $row_cats['cat_title'];
	
		echo "
		<li class='cat-item cat-item-$kategori_id'><a href='blog.php?cat=$kategori_id'>$kategori_judul</a></li>
		
		";
	}
?>
</ul>
</aside>  
<aside class="widget k2t_widget_latest_posts">  
<h3 class="widget-title">
<span>Recent Post</span>
</h3>
<div class="posts-list">
<?php
$get_blog = "select * from blog order by blog_date desc";
	$run_blog = mysql_query($get_blog); 
	while ($row_blogs = mysql_fetch_array($run_blog))
	{
			$blog_id = $row_blogs['blog_id'];
			$blog_judul = $row_blogs['blog_judul'];
			$time = $row_blogs['time'];
			$blog_gambar = $row_blogs['blog_gambar'];
			$blog_date = $row_blogs['blog_date'];
	
		echo "
		<article class='post-item'>
<div class='post-thumb'>
<a href='blog-view.php?id=$blog_id' title='$blog_judul'>
<img src='upload/images/$time/$blog_gambar' width='80' height='80' alt='$blog_judul'>
</a>
</div>
<div class='post-text'>
<h4>
<a href='blog-view.php?id=$blog_id' title='$blog_judul'>$blog_judul</a>
</h4>
<div class='post-meta'>
<time datetime='$blog_date'>$blog_date</time>
</div>
</div>
</article>
		
		";
	}
	
	
	
?>



</div>
</aside>  


</aside>  
</div>  
</div>
 
</div>
 
<a href="index.html#" class="k2t-btt" style="display:block;">
<i class="fa fa-angle-up"></i>
</a>
 
<script src="js/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jquery/jquery-migrate.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/jquery/modernizr.js" type="text/javascript"></script>
<script src="js/jquery/jquery.cbpBGSlideshow.js" type="text/javascript"></script>
<script src="js/jquery/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="js/jquery/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="js/jquery/owl.carousel.js" type="text/javascript"></script>
<script src="js/jquery/owl.carousel.min.js" type="text/javascript"></script>
 
<script type='text/javascript' src="js/isotope/isotope.js"></script>
<script type='text/javascript' src="js/isotope/portfolio.js"></script>
<script type='text/javascript' src="js/isotope/jquery.imageloaded.min.js"></script>
<script type='text/javascript' src="js/isotope/stickyMojo.js"></script>
<script type='text/javascript' src="js/isotope/idangerous.swiper.js"></script>
<script type='text/javascript' src="js/isotope/expandable.js"></script>
<script type='text/javascript' src='js/isotope/jquery.stellar.min.js'></script>
<script type='text/javascript' src='js/isotope/instafeed.min.js'></script>
 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>
 
<script>
		$(document).ready(function(){
			$('.rev-slider').revolution({
				 delay:9000,
						startwidth:1170,
						startheight:460,
						hideThumbs:200,

						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
												
						simplifyAll:"off",

						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"square-old",

						touchenabled:"on",
						onHoverStop:"on",
						nextSlideOnWindowFocus:"off",

						swipe_threshold: 75,
						swipe_min_touches: 1,
						drag_block_vertical: false,
						
												
												
						keyboardNavigation:"off",

						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:20,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						spinner:"spinner0",
												
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",

						autoHeight:"off",
						forceFullWidth:"on",
						
						hideThumbsOnMobile:"off",
						hideNavDelayOnMobile:1500,
						hideBulletsOnMobile:"off",
						hideArrowsOnMobile:"off",
						hideThumbsUnderResolution:0,

												hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0
			});
		});
	</script>
 
<script>
		$(document).ready(function() {
			$("#owl-carousel").owlCarousel({
				navigation : false, // Show next and prev buttons
				slideSpeed : 300,
				paginationSpeed : 400,
				singleItem:true
		  	});

			// Carousel Canvas 
			$(document).ready(function() {				
				$("#owl-carousel-canvas").owlCarousel({
					navigation : false, // Show next and prev buttons
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true
				});
			});
		});
	</script>
</body>
</html>