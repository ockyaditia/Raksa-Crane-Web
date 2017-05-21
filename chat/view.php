<?php
include("../include/session.php");
include("../root.php");
if($session->logged_in){
$req_user = trim($session->username);
$req_user_info = $database->getUserInfo($req_user);


$get_perusahaan = "select * from settings where id='1'";
	$run_perusahaan = mysql_query($get_perusahaan); 
	while ($row_perusahaan = mysql_fetch_array($run_perusahaan))
	{
		$deskripsi_perusahaan = $row_perusahaan['deskripsi_perusahaan'];
		$alamat_perusahaan = $row_perusahaan['alamat_perusahaan'];
		$telephone_perusahaan = $row_perusahaan['telephone_perusahaan'];
		$email_perusahaan = $row_perusahaan['email_perusahaan'];
		
	}
	if(isset($_GET['id'])){

	$conversation_id = $_GET['id'];
$get_product = "select * from conversation where conversation_id='$conversation_id'";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
	 $conversation_title = $row_products['conversation_title'];
	 $conversation_full_name = $row_products['conversation_full_name'];
	 $conversation_email = $row_products['conversation_email'];
	 $conversation_phone_number = $row_products['conversation_phone_number'];
	 $conversation_content = $row_products['conversation_content'];
	 $conversation_date = $row_products['conversation_date'];
	 $conversation_username = $row_products['username'];

	}
if($session->username!=$conversation_username)
{
echo "<script>window.open('../index.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chat - RWK</title>
 
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/megamenu.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/popular.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/shortcodes.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/woocommerce.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/vendor/cbpBGSlideshow.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/vendor/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/icon-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/icon-font-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/portfolio.css">
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/bootstrap.css">

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
<a href="<?php echo ROOT_URL; ?>/admin/index.php">
<span class="k2t-title-menu">Admin Panel</span>
</a>
</li>

<li>
<a href="<?php echo ROOT_URL; ?>/process.php">
<span class="k2t-title-menu">Logout</span>
</a>
</li>
<?php
}
else{
?>
<li>
<a href="<?php echo ROOT_URL; ?>/user/index.php">
<span class="k2t-title-menu">User Panel</span>
</a>
</li>

<li>
<a href="<?php echo ROOT_URL; ?>/process.php">
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
<a class="k2t-logo" rel="home" href="<?php echo ROOT_URL; ?>index.php">
<img src="<?php echo ROOT_URL; ?>/images/logo.png" alt="RWK">
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
<a class="open-sidebar" href="index.php#">
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
<a href="<?php echo ROOT_URL; ?>/index.php">
<span class="k2t-title-menu">Beranda</span>
</a>
</li>
<li>
<a href="<?php echo ROOT_URL; ?>/about-us.php">
<span class="k2t-title-menu">Tentang Kami</span>
</a>
</li>
<li class="children ">
<a href="<?php echo ROOT_URL; ?>/store.php">
<span class="k2t-title-menu">Produk</span>
</a>
<ul class="sub-menu">
<li class="k2t-dropdown-submenu">
<a href="<?php echo ROOT_URL; ?>/store/index.php?tipe=dijual">
<span class="k2t-title-menu">Dijual</span>
</a>
</li>
<li class="k2t-dropdown-submenu">
<a href="<?php echo ROOT_URL; ?>/store/index.php?tipe=disewakan">
<span class="k2t-title-menu">Disewakan</span>
</a>
</li>
</ul>
</li>
<li>
<a href="<?php echo ROOT_URL; ?>/contact.php">
<span class="k2t-title-menu">Kontak Kami</span>
</a>
</li>
</ul>
</div>  
<div class="col-3">  
<ul class="h-element social ">
<li class="facebook">
<a target="_blank" href="index.php#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="twitter">
<a target="_blank" href="index.php#">
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
<a class="k2t-logo" rel="home" href="<?php echo ROOT_URL; ?>/index.php">
<img src="<?php echo ROOT_URL; ?>/images/logo.png" alt="RWK">
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
<h1 class="main-title" style="font-size:20px;">User Panel </h1>

<ul class="k2t-breadcrumbs">
<li typeof="v:Breadcrumb">
<a rel="v:url" property="v:title" href="<?php echo ROOT_URL; ?>/index.php">Beranda</a></li>
<li class="current">Bantuan</li>
</ul>
</div>
</div>  



</div>
</div>  
<div class="k2t-content no-sidebar">  
<main class="k2t-main" role="main">
<article id="post-849" class="post-849 page type-page status-publish hentry">
<div class="page-entry" >
<div class="k2t-body" style="background-color:#f7f7f7 !important; margin-bottom: 0px !important; padding-top: 80px !important; padding-bottom: 80px !important;" >
<div class="container " >
<div class="col-12" >

<section class="comment-content comment" style="background-color:#fff;" >
<header class="comment-meta">
<cite class="comment-author">
<span><font style="font-size:16px;"><?php echo $conversation_full_name ;?></font></span>
</cite>
<a href="#">
<i class="fa fa-clock-o"></i>
<span><?php echo $conversation_date ;?></span>
</a>
</header>
<p style="font-size:16px;"><?php echo $conversation_content ;?></p>
<footer>
<div class="action-link">
<a class="comment-reply-link" href="#" aria-label="<?php echo $conversation_username ;?>">
<span><?php echo $conversation_username ;?></span>
</a>
</div> 
</footer>
</section>
<hr class="margin-bottom-10">
<br><br>
<?php
$data = "SELECT * FROM messages WHERE conversation_id=$conversation_id ORDER BY Time ASC";
$result = mysql_query($data);
while ($row_products = mysql_fetch_array($result))
	{
	 $msg_username = $row_products['msg_username'];
	 $msg_email = $row_products['msg_email'];
	 $msg_content = $row_products['msg_content'];
	 $time = $row_products['time']; 
	 
	 echo "
	 <section class='comment-content comment' style='background-color:#fff;' >
<header class='comment-meta'>
<cite class='comment-author'>
<span><font style='font-size:16px;'>$msg_username</font></span>
</cite>
<a href='#'>
<i class='fa fa-clock-o'></i>
<span>$time</span>
</a>
</header>
<p style='font-size:16px;'>$msg_content</p>
<footer>
<div class='action-link'>
<a class='comment-reply-link' href='#' aria-label='$msg_username '>
<span>$msg_username</span>
</a>
</div> 
</footer>
</section>
<br>
	 
	 ";
	}

?>

<hr class="margin-bottom-10">
              <form action="" method="post" enctype="multipart/form-data">
			  <div class="form-group">
                <textarea class="form-control" name="msg_content" placeholder="Ketik disini untuk membalas..." rows="3"></textarea>
              </div>
			  <button name="balas" id="submit" type="submit" class="btn btn-primary btn-sm pull-right"  tabindex="-1">Kirim</button>
			  </form>


<?php 
if(isset($_POST['balas'])){
	
	 
		$conversation_id = $conversation_id;
		$msg_date = date('d-m-Y');
		$msg_username = $req_user_info['username'];
		$msg_email = $req_user_info['email'];
		$msg_content = $_POST['msg_content'];
		$msg_status = 1;
		$time= substr(str_replace("+",":",str_replace("T"," ",date(DATE_ATOM))),0,18);
		
		$insert_posts = "insert into messages (conversation_id,msg_date,msg_username,msg_email,msg_content,msg_status,time) values ('$conversation_id','$msg_date','$msg_username','$msg_email','$msg_content','$msg_status','$time')";
		
		$run_posts = mysql_query($insert_posts); 
		
		
			
			echo "<script>alert('Pesan Berhasil Dikirim!')</script>";
			echo "<script>window.open('view.php?id=$conversation_id','_self')</script>";
		
		}

		?>

</div>


</div>
</div>
</div>  


<div class="vc_col-sm-12 wpb_column">
<div class="wpb_wrapper"></div>
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
<a href="<?php echo ROOT_URL; ?>/about-us.php">Tentang Kami</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150">
<a href="<?php echo ROOT_URL; ?>/index.php">Home</a>
</li>
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
		<li class='cat-item cat-item-$kategori_id'><a href='../blog.php?cat=$kategori_id'>$kategori_judul</a></li>
		
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
<a href='../blog-view.php?id=$blog_id' title='$blog_judul'>
<img src='../upload/images/$time/$blog_gambar' width='80' height='80' alt='$blog_judul'>
</a>
</div>
<div class='post-text'>
<h4>
<a href='../blog-view.php?id=$blog_id' title='$blog_judul'>$blog_judul</a>
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
 
 
<a href="parallax-background.html#" class="k2t-btt" style="display:block;">
<i class="fa fa-angle-up"></i>
</a>
</div>
 
<script src="<?php echo ROOT_URL; ?>/js/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/modernizr.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/jquery.cbpBGSlideshow.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/owl.carousel.js" type="text/javascript"></script>
<script src="<?php echo ROOT_URL; ?>/js/jquery/owl.carousel.min.js" type="text/javascript"></script>
 
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/modernizr.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/isotope.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/portfolio.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/magnific-popup.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/jquery.imageloaded.min.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/stickyMojo.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/idangerous.swiper.js"></script>
<script type='text/javascript' src="<?php echo ROOT_URL; ?>/js/isotope/expandable.js"></script>
<script type='text/javascript' src='<?php echo ROOT_URL; ?>/js/isotope/jquery.stellar.min.js'></script>
<script type='text/javascript' src='<?php echo ROOT_URL; ?>/js/isotope/zoom-effect.js'></script>
<script type='text/javascript' src='<?php echo ROOT_URL; ?>/js/isotope/instafeed.min.js'></script>
 
<script type="text/javascript" src="<?php echo ROOT_URL; ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo ROOT_URL; ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/css/settings.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>/rs-plugin/css/settings.css" media="screen"/>
 <script src="<?php echo ROOT_URL; ?>/js/jquery.maskedinput.js" type="text/javascript"></script>
<script>
jQuery(function($){
   $("#phone_number").mask("(999) 9999-999?999");
});

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

<?php
}
else{
echo "<script>window.open('../index.php','_self')</script>";
}
}
else
{
echo "<script>window.open('../login.php','_self')</script>";
}
?>