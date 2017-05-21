<?php
include("../../include/session.php");
include("../root.php");
if($session->isAdmin()){
$req_user = trim('admin');
$req_user_info = $database->getUserInfo($req_user);
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

	}


?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="gws cms">
  <meta name="author" content="">

  <title>Conversation | RWK</title>

  <link rel="apple-touch-icon" href="<?php echo ROOT_URL; ?>/resource/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo ROOT_URL; ?>/resource/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
 
 
  <!--[if lt IE 9]>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      
      <div class="navbar-brand navbar-brand-center">
        <img class="navbar-brand-logo" src="<?php echo ROOT_URL; ?>/resource/assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> RWK</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="<?php echo ROOT_URL; ?>/resource/assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="<?php echo ROOT_URL; ?>/pembayaran/index.php" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Pembayaran</a>
              </li>
              <li role="presentation">
                <a href="<?php echo ROOT_URL; ?>/setting/index.php" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="../../process.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/index.php" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
              </a>
            </li>
            
			 <li class="site-menu-item active open">
              <a href="index.php" data-slug="conversation">
                <i class="site-menu-icon wb-chat" aria-hidden="true"></i>
                <span class="site-menu-title">Conversation</span>
              </a>
            </li>
			
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="produk">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Produk</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item active">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/index.php" data-slug="produk-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/tambah.php" data-slug="produk-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/kategori.php" data-slug="produk-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				<li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/order/index.php" data-slug="order">
                <i class="site-menu-icon wb-shopping-cart" aria-hidden="true"></i>
                <span class="site-menu-title">Order</span>
              </a>
            </li>
				<li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="blog">
                <i class="site-menu-icon wb-book" aria-hidden="true"></i>
                <span class="site-menu-title">Blog</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/blog/index.php" data-slug="blog-semua">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Semua Posting</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/blog/tambah.php" data-slug="blog-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Post</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/blog/kategori.php" data-slug="blog-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				<li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/users/index.php" data-slug="users">
                <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">Users</span>
              </a>
            </li>
			<li class="site-menu-category">Configuration</li>
					<li class="site-menu-item">
						<a href="index.php" data-slug="setting">
						<i class="site-menu-icon wb-settings" aria-hidden="true"></i>
						<span class="site-menu-title">Settings</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="<?php echo ROOT_URL; ?>/pembayaran/index.php" data-slug="pembayaran">
						<i class="site-menu-icon wb-payment" aria-hidden="true"></i>
						<span class="site-menu-title">Pembayaran</span>
						</a>
					</li>
					<li class="site-menu-item">
						<a href="<?php echo ROOT_URL; ?>/update/index.php" data-slug="update">
						<i class="site-menu-icon wb-info" aria-hidden="true"></i>
						<span class="site-menu-title">Update</span>
						</a>
					</li>
			
          </ul>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="../../" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Beranda">
        <span class="icon wb-home" aria-hidden="true"></span>
      </a>
      <a href="<?php echo ROOT_URL; ?>/setting/" data-placement="top" data-toggle="tooltip" data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="../../process.php" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  


  <!-- Page -->
  <div class="page animsition">
   
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
		<div class="page-header">
      <h1 class="page-title">Percakapan</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ROOT_URL; ?>/index.php">Dashboard</a></li>
        <li class="active">Conversation</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="view.php?id=<?php echo $conversation_id;?>"
        target="_self">
          <i class="icon wb-refresh" aria-hidden="true"></i>
          <span class="hidden-xs">Reload</span>
        </a>
      </div>
    </div>

    <div class="panel">
        <div class="panel-body">
          <div class="chat-box">
            <div class="chats">
              <div class="chat chat-left">
                <div class="chat-avatar">
                  <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="<?php echo $conversation_full_name ;?>">
                    <img src="../../images/guest.png" alt="<?php echo $conversation_full_name ;?>">
                  </a>
                </div>
                <div class="chat-body">
                  <div class="chat-content">
                    <p><b>Perihal :  <?php echo $conversation_title ;?></p>
                    <p>Nama Lengkap :  <?php echo $conversation_full_name ;?></p>
                    <p>Email :  <?php echo $conversation_email ;?></p>
                    <p>Phone Number :  <?php echo $conversation_phone_number ;?></p>
                    <p>Content :  <?php echo $conversation_content ;?></b></p>
					
                    <time class="chat-time" datetime="<?php echo $conversation_date ;?>"><?php echo $conversation_date ;?></time>
                  </div>
                  
                </div>
              </div>
              <?php
			  $i=1;
$data = "SELECT * FROM messages WHERE conversation_id=$conversation_id ORDER BY Time ASC";
$result = mysql_query($data);
while ($row_products = mysql_fetch_array($result))
	{
	 $msg_username = $row_products['msg_username'];
	 $msg_email = $row_products['msg_email'];
	 $msg_content = $row_products['msg_content'];
	 $time = $row_products['time']; 
	 $i++;
if($msg_username=='admin')
{
echo "<div class='chat'>
                <div class='chat-avatar'>
                  <a class='avatar' data-toggle='tooltip' href='#' data-placement='right' title='$msg_username'>
                    <img src='../../images/admin.png' alt='$msg_username'>
                  </a>
                </div>
                <div class='chat-body'>
                  <div class='chat-content'>
                    <p>
                      $msg_content
                    </p>
                    <time class='chat-time' datetime='$time'>$time</time>
                  </div>
                 
                </div>
              </div>
";
}
else{			  
 echo "<div class='chat chat-left'>
                <div class='chat-avatar'>
                  <a class='avatar' data-toggle='tooltip' href='#' data-placement='left' title='$msg_email'>
                    <img src='../../images/guest.png' alt='$msg_email'>
                  </a>
                </div>
                <div class='chat-body'>
                  <div class='chat-content'>
                    <p>$msg_content</p>
                    <time class='chat-time' datetime='$time'>$time</time>
                  </div>
                </div>
              </div>			  
";
}
	$read = $i;
	$update_read = "update conversation set conversation_read='$read' where conversation_id='$conversation_id'";
	$run_update = mysql_query($update_read); 	
}
?>		  
              <hr class="margin-bottom-10">
              <form action="" method="post" enctype="multipart/form-data">
			  <div class="form-group">
                <textarea class="form-control" name="msg_content" placeholder="Ketik disini untuk membalas..." rows="3"></textarea>
              </div>
			  <button name="balas" id="submit" type="submit" class="btn btn-primary btn-sm pull-right"  tabindex="-1">Kirim</button>
			  </form>
            </div>
          </div>
        </div>
      </div>

       
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
  <!-- End Page -->

  


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">&copy 2015 RWK</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://www.geekwebservice.uk">Geek Web Service</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
  
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/gmaps/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/core.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/site.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/menu.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/menubar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/sections/sidebar.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/configs/config-colors.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/configs/config-tour.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/asscrollable.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/slidepanel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/switchery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/matchheight.js"></script>
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

   

    })(document, window, jQuery);
  </script>

  
</body>

</html>

<?php
}
else{
echo "<script>window.open('index.php','_self')</script>";
}
}
else
{
echo "<script>window.open('../../index.php','_self')</script>";
}

?>