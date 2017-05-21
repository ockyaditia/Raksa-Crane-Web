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
<title>Tentang Kami - RWK</title>
 
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
 
<div class="k2t-title-bar center  shadow" style="background-position: left top;background-repeat: repeat;background-size: inherit;">
<div class="k2t-wrap">
<h1 class="main-title" style="font-size:20px;">Tentang Kami </h1>
<span class="main-excerpt"></span>
<ul class="k2t-breadcrumbs">
<li typeof="v:Breadcrumb">
<a href="index.php">Beranda</a>
</li>
<li class="current">Tentang Kami</li>
</ul>
</div>
</div>  
</div>   
 

 
<div class="k2t-content no-sidebar">
<main class="k2t-main">  
<article class="page type-page status-publish hentry">
<div class="page-entry">
 
<div class="k2t-row wpb_row" style="margin-top: 0px;margin-bottom: 0px;border-bottom-width: 0px;padding-top: 100px;padding-bottom: 0px;">
<div class="container">
<div class="vc_col-sm-3 wpb_column" style="position: relative;">
<div class="wpb_wrapper"></div>
</div>
<div class="vc_col-sm-6 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-heading align-center has-border no-subtitle h2 heading">
<div class="k2t-heading-inner">
<div class="text">
<h2 class="h"><span>Raksa Wastu Kencana</span></h2>
<div class="has-boder-style"><span></span></div>
</div>
</div>
</div>
<div data-animation="fadeInUp" data-animation-delay="400" class="animated wpb_text_column wpb_content_element  fadeInUp run_animation">
<div class="wpb_wrapper">
<p style="text-align: center;">Selamat datang di website resmi kami.</p>
</div>
</div>
</div>
</div>
<div id="dMsSOjV6AB" class="vc_col-sm-3 wpb_column">
<div class="wpb_wrapper"></div>
</div>
</div>
</div>  
 
<div class="k2t-row wpb_row vc_row-fluid" style="margin-top: 0px;margin-bottom: 0px;padding-top: 0px;padding-bottom: 0px;">
<div class="container">
<div class="vc_col-sm-12 wpb_column vc_column_container">
<div class="wpb_wrapper">
<div data-animation="fadeInUp" data-animation-delay="500" class="article isotope-selector wpb_single_image wpb_content_element animated fadeInUp run_animation" style="text-align:cener;margin-top: 100px;">
<div class="wpb_wrapper article-inner">
<div class="entry-image">
<a class="image-link">
<img width="1001" height="490" src="images/abouts.jpg" class="attachment-full" alt="abouts">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>  
 
<div class="k2t-row wpb_row vc_row-fluid meet-our-custom" style="background-image: url(images/bg-sec-about1.jpg); background-repeat: no-repeat; background-position:center bottom;margin-top: 0px;margin-bottom: 0px;">
<div class="container">
<div class="vc_col-sm-3 wpb_column" style="padding-bottom: 80px;">
<div class="wpb_wrapper">
<div class="vc_custom_heading">
<h3 style="text-transform: uppercase;font-size: 30px;color: #ffffff;text-align: right;font-family:Dosis;font-weight:400;font-style:normal">Meet our leaders</h3>
</div>
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<div class="animated wpb_text_column wpb_content_element  fadeInUp run_animation" data-animation="fadeInUp" data-animation-delay="400">
<div class="wpb_wrapper">
<p style="text-align: right; color: #ffffff;">They have learned through the many years of practice that the home remodeling experience can be enjoyable and exciting if you have the right people in place from the beginning. </p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-9 wpb_column vc_column_container" style="margin-bottom: 0px;padding-bottom: 50px;background-color: #f1f1f1;">
<div class="wpb_wrapper">
<div class="k2t-row wpb_row vc_inner vc_row-fluid" style="margin-bottom: 0px;padding-top: 50px;padding-bottom: 50px;">
<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="wpb_wrapper">
<div class="k2t-member style-4" style="width:100%;">
<div class="member-inner">
<div class="image">
<img alt="" src="images/default.png">
</div>
<div class="text">
<div>
<div class="name-role">
<h3 class="name">H. SAKAM</h3>
<h4 class="role">Komisaris Utama</h4>
</div>

<div class="social">
<ul>
<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="wpb_wrapper">
<div class="k2t-member style-4" style="width:100%;">
<div class="member-inner">
<div class="image">
<img alt="" src="images/default.png">
</div>
<div class="text">
<div>
<div class="name-role">
<h3 class="name">DEDE SUHERLAN S.E</h3>
<h4 class="role">Direktur Utama</h4>
</div>

<div class="social">
<ul>
<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" title="Skype"><i class="fa fa-skype"></i></a></li>
<li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="wpb_wrapper">
<div class="k2t-member style-4" style="width:100%;">
<div class="member-inner">
<div class="image">
<img alt="" src="images/default.png">
</div>
<div class="text">
<div>
<div class="name-role">
<h3 class="name">HJ. NENGSIH</h3>
<h4 class="role">Direktur Keuangan</h4>
</div>
<div class="social">
<ul>
<li><a href="about-us.html#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="about-us.html#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="about-us.html#" title="Skype"><i class="fa fa-skype"></i></a></li>
<li><a href="about-us.html#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
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
</div>
</div>  
 
<div class="k2t-row wpb_row vc_row-fluid" style="position: relative;background-color:#333333;margin-top: 0px;margin-bottom: 0px;padding-top: 50px;padding-bottom: 50px;">
<div class="container">
<div class="vc_col-sm-3 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-counter icon-top" data-delay="0">
<div class="counter-inner">
<div style="font-size: 32px;color: #ffbe2a;height: auto;line-height: inherit;" class="counter-icon">
</div>
<div class="counter-number">
<h2 style="color: rgb(255, 190, 42); opacity: 1;" class="number count" data-from="0" data-to="28" data-speed="1000">15</h2>
</div>
<div class="counter-text">
<span style="font-size: 14px;color: #949494" class="title">Years</span>
<div class="desc"></div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-3 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-counter icon-top" data-delay="0">
<div class="counter-inner">
<div style="font-size: 32px;color: #ffbe2a;height: auto;line-height: inherit;" class="counter-icon">
</div>
<div class="counter-number">
<h2 style="color: rgb(255, 190, 42)	 opacity: 1;" class="number count" data-from="0" data-to="19" data-speed="1000">55</h2>
</div>
<div class="counter-text">
<span style="font-size: 14px;color: #949494" class="title">Crane</span>
<div class="desc"></div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-3 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-counter icon-top" data-delay="0">
<div class="counter-inner">
<div style="font-size: 32px;color: #ffbe2a;height: auto;line-height: inherit;" class="counter-icon">
</div>
<div class="counter-number">
<h2 style="color: rgb(255, 190, 42); opacity: 1;" class="number count" data-from="0" data-to="6899" data-speed="1000">6899</h2>
</div>
<div class="counter-text">
<span style="font-size: 14px;color: #949494" class="title">Client</span>
<div class="desc"></div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_col-sm-3 wpb_column">
<div class="wpb_wrapper">
<div class="k2t-counter icon-top" data-delay="0">
<div class="counter-inner">
<div style="font-size: 32px;color: #ffbe2a;height: auto;line-height: inherit;" class="counter-icon"></div>
<div class="counter-number">
<h2 style="color: rgb(255, 190, 42); opacity: 1;" class="number count" data-from="0" data-to="3000" data-speed="1000">3000</h2>
</div>
<div class="counter-text">
<span style="font-size: 14px;color: #949494" class="title">Employees</span>
<div class="desc"></div>
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
<div class="vc_col-sm-6 wpb_column" style="position: relative;">
<div class="wpb_wrapper">
<div class="vc_custom_heading">
<h2 style="text-transform: uppercase;font-size: 40px;text-align: left;font-family:Dosis;font-weight:400;font-style:normal">Visi Dan Misi Kami</h2>
</div>
<div class="wpb_text_column wpb_content_element" style="margin-bottom: 35px;">
<div class="wpb_wrapper">
</div>
</div>
</div>
</div>
<div class="vc_col-sm-6 wpb_column"></div>
</div>
</div>
<div class="k2t-row wpb_row vc_row-fluid" style="position: relative;padding-bottom: 100px;">
<div class="container">
<div class="vc_col-sm-6 wpb_column" style="position: relative;">
<div class="wpb_wrapper">
<div class="k2t-row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-6" style="padding-left:0px;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-3 align-left" style="">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 24px;" class="awesome-gear"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="text-transform: none;font-size: 18px;padding-left:12px;margin-bottom:0px; margin-top:0px;color:rgb(79,79,79);" class="h">Visi</h3>
</div>
<div class="desc">Sebagai perusahaan jasa penyewaan alat berat dan service (Perbaikan) yang terbaik dibidangnya dan selalu mengupayakan service dan inovasi sebagai layanan utamanya, sehingga tercipta kerjasama yang saling menguntungkan</div>
</div>
</div>
</div>
</div>
<div class="wpb_column vc_col-sm-6" style="padding-left:0px;">
<div class="wpb_wrapper">
<div class="k2t-iconbox layout-3 align-left" style="">
<div class="iconbox-icon " style="color: #ffbe2a">
<i style="font-size: 24px;" class="awesome-phone"></i>
</div>
<div class="iconbox-text">
<div class="title">
<h3 style="text-transform: none;font-size: 18px;padding-left:12px; margin-bottom:0px; margin-top:0px;color:rgb(79,79,79);" class="h">Misi</h3>
</div>
<div class="desc">Mengutamakan mutu dan pelayanan demi kepuasan pelanggan.</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
<div class="vc_col-sm-6 wpb_column vc_column_container" style="position: relative;">
<div class="wpb_wrapper">
<div class="article isotope-selector wpb_single_image wpb_content_element">
<div class="wpb_wrapper article-inner">
<div class="entry-image">
<a class="image-link">
<img width="570" height="400" src="images/abouts_2.jpg" class="attachment-full" alt="abouts_2"></a>
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