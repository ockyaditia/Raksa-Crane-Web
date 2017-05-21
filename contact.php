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
<title>Kontak Kami - RWK</title>
 
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
<main class="k2t-main">  
<article class="page type-page status-publish hentry">
<div class="page-entry">
<div class="k2t-row">  
<div class="wpb-wraper">
<div id="map-canvas" styele="background-color:#222;"></div>
</div>
</div>  
 
<div class="k2t-row wpb_row" style="padding-top: 50px; padding-bottom: 100px!important;">
<div class="container">
<div class="vc_col-sm-12 wpb_column vc_column_container" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-heading align-center has-border no-subtitle h2 heading">
<div class="k2t-heading-inner">
<div class="text">
<h2 class="h"><span>Hubungi Kami</span></h2>
<div class="has-boder-style"><span></span></div>
</div>
</div>
</div>
<div class="k2t-row wpb_row ">
<div class="wpb_column vc_column_container vc_col-sm-3">
<div class="wpb_wrapper"></div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-6">
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p style="text-align: center;">Call us today with any questions regarding your next project</p>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-3">
<div class="wpb_wrapper"></div>
</div>
</div>
</div>
</div>
</div>
</div>  
<div class="k2t-row wpb_row " style="position: relative;">  
<div class="container">
<div class="vc_col-sm-5 wpb_column vc_column_container" style="position: relative;">
<div class="wpb_wrapper">
<div class="vc_custom_heading">
<h2 style="text-transform: uppercase;font-size: 20px;text-align: left;font-family:Dosis;font-weight:400;font-style:normal">Stay In Touch</h2>
</div>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<p>Our friendly customer support staff can offer expert advice and help save you money. Be sure to ask about available promotions </p>
</div>
</div>
<div role="form" class="wpcf7" id="wpcf7-f5-p8-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form name="" action="" method="post" class="wpcf7-form" novalidate="">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="5">
<input type="hidden" name="_wpcf7_version" value="4.2.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p8-o1">
<input type="hidden" name="_wpnonce" value="3e11ba30c4">
</div>
<div class="k2t-row">
<div class="col-6">
<p>Your Name (required)<br><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
</div>
<div class="col-6">
<p>Your Email (required)<br> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
</div>
</div>
<p>Your Message<br><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
<p><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></p>
<div class="wpcf7-response-output wpcf7-display-none"></div>
</form>
</div>
</div>
</div>
<div class="vc_col-sm-7 wpb_column vc_column_container" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-row wpb_row">
<div class="wpb_column vc_column_container vc_col-sm-7">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-2 align-left" style="">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 32px;" class="lineicon-map-marker"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #424242;text-transform: inherit;font-size: 19px;" class="h">Alamat:</h3>
</div>
<div class="desc"><?php echo $alamat_perusahaan; ?></div>
</div>
</div>
<div class="k2t-iconbox layout-2 align-left" style="margin-top: 50px;margin-bottom: 50px;">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 32px;" class="lineicon-email"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #424242;text-transform: inherit;font-size: 19px;" class="h">Email:</h3>
</div>
<div class="desc">
<a title="contact@king kongthemes.com" href="contact.html#" target="_blank" style="    color: #ffbe2a;"><?php echo $email_perusahaan; ?>
</a>
</div>
</div>
</div>
<div class="k2t-iconbox layout-2 align-left" style="">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 32px;" class="lineicon-phone"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="color: #424242;text-transform: inherit;font-size: 19px;" class="h">Hotline</h3>
</div>
<div class="desc">Phone : <?php echo $telephone_perusahaan; ?></div>
</div>
</div>
</div>
</div>
<div class="opening-hours wpb_column vc_column_container vc_col-sm-5">
<div class="wpb_wrapper">
<div class="vc_custom_heading">
<h3 style="text-transform: inherit;font-size: 19px;color: #4f4f4f;text-align: left;font-family:Dosis;font-weight:700;font-style:normal">Opening Hours</h3>
</div>
<div class="article isotope-selector">
<div class="wpb_wrapper article-inner">
<div class="entry-image">
<a class="image-link">
<img width="228" height="5" src="images/heading_contact.png" class="attachment-full" alt="heading_contact">
</a>
</div>
</div>
</div>
<div class="wpb_raw_code wpb_content_element wpb_raw_html">
<div class="wpb_wrapper">
<ul class="open-hours">
<li><span>Monday</span>9:30am - 6:00pm</li>
<li><span>Tuesday</span>9:30am - 6:00pm</li>
<li><span>Wednesday</span>9:30am - 6:00pm</li>
<li><span>Thursday</span>9:30am - 6:00pm</li>
<li><span>Friday</span>9:30am - 6:00pm</li>
<li><span>Saturday</span>9:30am - 6:00pm</li>
<li><span>Sunday</span>close</li>
</ul>
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
</article>
</main>  
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
 
<script type='text/javascript' src="js/isotope/modernizr.js"></script>
<script type='text/javascript' src="js/isotope/isotope.js"></script>
<script type='text/javascript' src="js/isotope/portfolio.js"></script>
<script type='text/javascript' src="js/isotope/magnific-popup.js"></script>
<script type='text/javascript' src="js/isotope/jquery.imageloaded.min.js"></script>
<script type='text/javascript' src="js/isotope/stickyMojo.js"></script>
<script type='text/javascript' src="js/isotope/idangerous.swiper.js"></script>
<script type='text/javascript' src="js/isotope/expandable.js"></script>
<script type='text/javascript' src='js/isotope/jquery.stellar.min.js'></script>
<script type='text/javascript' src='js/isotope/zoom-effect.js'></script>
<script type='text/javascript' src='js/isotope/instafeed.min.js'></script>
 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen"/>
 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
 
<style>html,body,#map-canvas{height:100%;margin:0px;padding:0px;}</style>
 
<script>

		function initialize() {
		  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
		  var mapOptions = {
		    zoom: 4,
		    center: myLatlng
		  };

		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		  var contentString = '<div id="content">'+
		      '<div id="siteNotice">'+
		      '</div>'+
		      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
		      '<div id="bodyContent">'+
		      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
		      'sandstone rock formation in the southern part of the '+
		      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
		      'south west of the nearest large town, Alice Springs; 450&#160;km '+
		      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
		      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
		      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
		      'Aboriginal people of the area. It has many springs, waterholes, '+
		      'rock caves and ancient paintings. Uluru is listed as a World '+
		      'Heritage Site.</p>'+
		      '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
		      'http://en.wikipedia.org/w/index.php?title=Uluru</a> '+
		      '(last visited June 22, 2009).</p>'+
		      '</div>'+
		      '</div>';

		  var infowindow = new google.maps.InfoWindow({
		      content: contentString
		  });

		  var marker = new google.maps.Marker({
		      position: myLatlng,
		      map: map,
		      title: 'Uluru (Ayers Rock)'
		  });
		  google.maps.event.addListener(marker, 'click', function() {
		    infowindow.open(map,marker);
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 
<script>
		(function($) {
			"use strict";
			$(document).ready(function() {				
				$("#owl-carousel-canvas").owlCarousel({
					navigation : false, // Show next and prev buttons
					slideSpeed : 300,
					paginationSpeed : 400,
					singleItem:true
				});
			});
		})(jQuery);
	</script>
</body>
</html>