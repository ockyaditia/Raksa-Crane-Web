<?php
include("../../include/session.php");
include("../root.php");
if($session->isAdmin()){
$id=1;
	$get_product = "select * from settings where id='$id'";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
	 $deskripsi_perusahaan = $row_products['deskripsi_perusahaan'];
	 $alamat_perusahaan = $row_products['alamat_perusahaan'];
	 $telephone_perusahaan = $row_products['telephone_perusahaan'];
	 $email_perusahaan = $row_products['email_perusahaan'];
	
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

  <title>Settings | RWK</title>

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
   <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-markdown/bootstrap-markdown.css">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/dashboard/v2.css">
<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/font-awesome/font-awesome.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
 
<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/select2/select2.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/icheck/icheck.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/asrange/asRange.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/asspinner/asSpinner.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/clockpicker/clockpicker.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/ascolorpicker/asColorPicker.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/card/card.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-labelauty/jquery-labelauty.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/jt-timepicker/jquery-timepicker.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-strength/jquery-strength.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/multi-select/multi-select.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/vendor/typeahead-js/typeahead.css">


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
            
			 <li class="site-menu-item">
              <a href="<?php echo ROOT_URL; ?>/conversation/index.php" data-slug="conversation">
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
                <li class="site-menu-item">
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
					<li class="site-menu-item active open">
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
      <h1 class="page-title">Settings</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo ROOT_URL; ?>/index.php">Dashboard</a></li>
        <li class="active">Setting</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="index.php"
        target="_self">
          <i class="icon wb-refresh" aria-hidden="true"></i>
          <span class="hidden-xs">Reload</span>
        </a>
      </div>
    </div>

     <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
	<div class="col-sm-8">
     <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title" >Setting</h3>
            </div>
            <div class="panel-body container-fluid">
               <div class="form-group form-material floating">
                  <input type="text" class="form-control" name="deskripsi_perusahaan" value='<?php echo $deskripsi_perusahaan; ?>'>
                  <label class="floating-label">Deskripsi Perusahaan</label>
                </div>
				<div class="form-group form-material floating">
                  <input type="text" class="form-control" name="alamat_perusahaan" value='<?php echo $alamat_perusahaan; ?>'>
                  <label class="floating-label">Alamat Perusahaan</label>
                </div>
				<div class="form-group form-material floating">
                  <input type="text" class="form-control" name="telephone_perusahaan" value='<?php echo $telephone_perusahaan; ?>'>
                  <label class="floating-label">Telephone Perusahaan</label>
                </div>
				<div class="form-group form-material floating">
                  <input type="text" class="form-control" name="email_perusahaan" value='<?php echo $email_perusahaan; ?>'>
                  <label class="floating-label">Email Perusahaan</label>
                </div>
               <?php 
if(isset($_POST['submit'])){
	
	 $deskripsi_perusahaan = $_POST['deskripsi_perusahaan'];
	 $alamat_perusahaan = $_POST['alamat_perusahaan'];
	 $telephone_perusahaan = $_POST['telephone_perusahaan'];
	 $email_perusahaan = $_POST['email_perusahaan'];
	 
	
	if($deskripsi_perusahaan=='' OR $alamat_perusahaan=='' OR $telephone_perusahaan=='' OR $email_perusahaan==''){
		
		echo "<script>alert('Please fill in all the fields')</script>";
		exit();
		}
	else {
		
		$update_product = "update settings set deskripsi_perusahaan='$deskripsi_perusahaan',alamat_perusahaan='$alamat_perusahaan',telephone_perusahaan='$telephone_perusahaan',email_perusahaan='$email_perusahaan' where id='$id'";
		
		$run_update = mysql_query($update_product); 
		
		
			
			echo "<script>alert('Setting berhasil disimpan!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		
		}
	}
?>
				
              
               
                </div>
            </div>
            </div>
			
		 
		
			
			<div class="col-sm-4">
          <!-- Panel Floating Lables -->
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Actions</h3>
            </div>
			
            <div class="panel-body container-fluid">
                <div align="center" class="form-group form-material floating">
                  <button type="submit" name="submit" id="submit" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Save</span>
                  </button>
				  

                </div>
				
				<div align="center" class="form-group form-material floating">
                  <button type="reset" class="btn btn-animate btn-lg btn-animate-vertical btn-warning">
                    <span><i class="icon wb-rubber" aria-hidden="true"></i>Reset</span>
                  </button>
				  

                </div>
          
			
                
				
				
				
             </div>
          </div>
          <!-- End Panel Floating Lables -->
        </div>
		
		</form>
       

       

        
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
  
   <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/marked/marked.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/to-markdown/to-markdown.js"></script>

  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/select2/select2.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/icheck/icheck.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asspinner/jquery-asSpinner.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/ascolor/jquery-asColor.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/asgradient/jquery-asGradient.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-knob/jquery.knob.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/card/jquery.card.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-labelauty/jquery-labelauty.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/datepair-js/datepair.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/datepair-js/jquery.datepair.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-strength/jquery-strength.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/multi-select/jquery.multi-select.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/typeahead-js/bloodhound.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

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
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/select2.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-tokenfield.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-tagsinput.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-select.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/icheck.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/switchery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/asrange.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/asspinner.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/clockpicker.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/ascolorpicker.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-maxlength.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/jquery-knob.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-touchspin.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/card.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/jquery-labelauty.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/bootstrap-datepicker.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/jt-timepicker.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/datepair-js.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/jquery-strength.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/multi-select.js"></script>
  <script src="<?php echo ROOT_URL; ?>/resource/assets/js/components/jquery-placeholder.js"></script>
<script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

// Example Reset Current
      // ---------------------
      (function() {
        // Reset Current
        $('#exampleTimeButton').on('click', function() {
          $('#inputTextCurrent').timepicker('setTime', new Date());
        });
      })();

      // Example inline datepicker
      // ---------------------
      (function() {
        // Reset Current
        $('#inlineDatepicker').datepicker();
        $("#inlineDatepicker").on("changeDate", function(event) {
          $("#inputHiddenInline").val(
            $("#inlineDatepicker").datepicker('getFormattedDate')
          );
        });
      })();

      // Example Tokenfield With Typeahead
      // ---------------------------------
      (function() {
        var engine = new Bloodhound({
          local: [{
            value: 'red'
          }, {
            value: 'blue'
          }, {
            value: 'green'
          }, {
            value: 'yellow'
          }, {
            value: 'violet'
          }, {
            value: 'brown'
          }, {
            value: 'purple'
          }, {
            value: 'black'
          }, {
            value: 'white'
          }],
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace(
            'value'),
          queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        // engine.initialize();

        $('#inputTokenfieldTypeahead').tokenfield({
          typeahead: [null, {
            name: 'engine',
            displayKey: 'value',
            source: engine.ttAdapter()
          }]
        });
      })();

      // Example Tokenfield Events
      // -------------------------
      (function() {
        $('#inputTokenfieldEvents')
          .on('tokenfield:createtoken', function(e) {
            var data = e.attrs.value.split('|');
            e.attrs.value = data[1] || data[0];
            e.attrs.label = data[1] ? data[0] + ' (' + data[1] + ')' :
              data[0];
          })
          .on('tokenfield:createdtoken', function(e) {
            // �ber-simplistic e-mail validation
            var re = /\S+@\S+\.\S+/;
            var valid = re.test(e.attrs.value);
            if (!valid) {
              $(e.relatedTarget).addClass('invalid');
            }
          })
          .on('tokenfield:edittoken', function(e) {
            if (e.attrs.label !== e.attrs.value) {
              var label = e.attrs.label.split(' (');
              e.attrs.value = label[0] + '|' + e.attrs.value;
            }
          })
          .on('tokenfield:removedtoken', function(e) {
            if (e.attrs.length > 1) {
              var values = $.map(e.attrs, function(attrs) {
                return attrs.value;
              });
              alert(e.attrs.length +
                ' tokens removed! Token values were: ' + values.join(
                  ', '));
            } else {
              alert('Token removed! Token value was: ' + e.attrs.value);
            }
          })
          .tokenfield();
      })();

      // Example Tags Input Objects as tags
      // ----------------------------------
      (function() {
        var cities = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: '<?php echo ROOT_URL; ?>/resource/assets/data/cities.json'
        });
        cities.initialize();

        var options = $.extend(true, {}, $.components.getDefaults(
          "tagsinput"), {
          itemValue: 'value',
          itemText: 'text',
          typeaheadjs: [{
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
          }]
        });

        var $input = $('#inputTagsObject');
        $input.tagsinput(options);

        $input.tagsinput('add', {
          "value": 1,
          "text": "Amsterdam",
          "continent": "Europe"
        });
        $input.tagsinput('add', {
          "value": 4,
          "text": "Washington",
          "continent": "America"
        });
        $input.tagsinput('add', {
          "value": 7,
          "text": "Sydney",
          "continent": "Australia"
        });
        $input.tagsinput('add', {
          "value": 10,
          "text": "Beijing",
          "continent": "Asia"
        });
        $input.tagsinput('add', {
          "value": 13,
          "text": "Cairo",
          "continent": "Africa"
        });
      })();

      // Example Tags Input Categorizing
      // -------------------------------
      (function() {
        var cities = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          prefetch: '<?php echo ROOT_URL; ?>/resource/assets/data/cities.json'
        });
        cities.initialize();

        var options = $.extend(true, {}, $.components.getDefaults(
          "tagsinput"), {
          tagClass: function(item) {
            switch (item.continent) {
              case 'Europe':
                return 'label label-primary';
              case 'America':
                return 'label label-danger';
              case 'Australia':
                return 'label label-success';
              case 'Africa':
                return 'label label-default';
              case 'Asia':
                return 'label label-warning';
            }
          },
          itemValue: 'value',
          itemText: 'text',
          typeaheadjs: [{
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'cities',
            displayKey: 'text',
            source: cities.ttAdapter()
          }]
        });
        var $input = $('#inputTagsCategorizing');

        $input.tagsinput(options);

        $input.tagsinput('add', {
          "value": 1,
          "text": "Amsterdam",
          "continent": "Europe"
        });
        $input.tagsinput('add', {
          "value": 4,
          "text": "Washington",
          "continent": "America"
        });
        $input.tagsinput('add', {
          "value": 7,
          "text": "Sydney",
          "continent": "Australia"
        });
        $input.tagsinput('add', {
          "value": 10,
          "text": "Beijing",
          "continent": "Asia"
        });
        $input.tagsinput('add', {
          "value": 13,
          "text": "Cairo",
          "continent": "Africa"
        });

      })();

      // Example AsSpinner
      // -----------------
      (function() {
        // Custom Format
        var options = $.extend({}, $.components.getDefaults("asSpinner"), {
          format: function(value) {
            return value + '%';
          }
        });

        $('#inputSpinnerCustomFormat').asSpinner(options);
      })();

      // Example Multi-Select
      // --------------------
      (function() {
        // for multi-select public methods example
        $('.multi-select-methods').multiSelect();
        $('#buttonSelectAll').click(function() {
          $('.multi-select-methods').multiSelect('select_all');
          return false;
        });
        $('#buttonDeselectAll').click(function() {
          $('.multi-select-methods').multiSelect('deselect_all');
          return false;
        });
        $('#buttonSelectSome').click(function() {
          $('.multi-select-methods').multiSelect('select', ['Idaho',
            'Montana', 'Arkansas'
          ]);
          return false;
        });
        $('#buttonDeselectSome').click(function() {
          $('.multi-select-methods').multiSelect('select', ['Idaho',
            'Montana', 'Arkansas'
          ]);
          return false;
        });
        $('#buttonRefresh').on('click', function() {
          $('.multi-select-methods').multiSelect('refresh');
          return false;
        });
        $('#buttonAdd').on('click', function() {
          $('.multi-select-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
          });
          return false;
        });
      })();

      // Example Typeahead
      // -----------------
      (function() {
        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',
          'California',
          'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia',
          'Hawaii',
          'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
          'Louisiana',
          'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
          'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada',
          'New Hampshire',
          'New Jersey', 'New Mexico', 'New York', 'North Carolina',
          'North Dakota',
          'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
          'South Carolina', 'South Dakota', 'Tennessee', 'Texas',
          'Utah', 'Vermont',
          'Virginia', 'Washington', 'West Virginia', 'Wisconsin',
          'Wyoming'
        ];

        // basic & Styled
        // --------------
        (function() {
          var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
              var matches, substrRegex;

              // an array that will be populated with substring matches
              matches = [];

              // regex used to determine if a string contains the substring `q`
              substrRegex = new RegExp(q, 'i');

              // iterate through the pool of strings and for any string that
              // contains the substring `q`, add it to the `matches` array
              $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                  matches.push(str);
                }
              });

              cb(matches);
            };
          };

          $('#exampleTypeaheadBasic, #exampleTypeaheadStyle').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'states',
            source: substringMatcher(states)
          });
        })();

        // bloodhound
        // ----------
        (function() {
          var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas',
            'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida',
            'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas',
            'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan',
            'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska',
            'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina',
            'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
            'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas',
            'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin',
            'Wyoming'
          ];
          // constructs the suggestion engine
          var state = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: states
          });

          $('#exampleTypeaheadBloodhound').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
          }, {
            name: 'states',
            source: state
          });
        })();

        // Prefetch typeahead
        // ----------------
        (function() {
          var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: '<?php echo ROOT_URL; ?>/resource/assets/data/countries.json'
          });

          // passing in `null` for the `options` arguments will result in the default
          // options being used
          $('#exampleTypeaheadPrefetch').typeahead(null, {
            name: 'countries',
            source: countries
          });
        })();

      })();
    })(document, window, jQuery);
  </script>

  
</body>

</html>

<?php
}
else
{
echo "<script>window.open('../../index.php','_self')</script>";
}

?>