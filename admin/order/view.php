<?php
include("../../include/session.php");
include("../root.php");
if($session->isAdmin()){
if(isset($_GET['order_id'])){

	$order_id = $_GET['order_id'];
$get_product = "select * from orders where order_id='$order_id'";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
	 $order_judul = $row_products['order_judul'];
$order_date = $row_products['order_date'];
$order_tipe = $row_products['order_tipe'];
$order_start = $row_products['order_start'];
$order_end = $row_products['order_end'];
$order_buyer_name = $row_products['order_buyer_name'];
$order_bank = $row_products['order_bank'];
$order_atas_nama = $row_products['order_atas_nama'];
$order_nomor_transfer = $row_products['order_nomor_transfer'];
$order_jumlah_transfer = $row_products['order_jumlah_transfer'];
$order_total = $row_products['order_total'];
$order_status = $row_products['order_status'];
$order_tujuan_id = $row_products['order_tujuan_id'];
		

	}
	
	$get_products = "select * from pembayaran where id='$order_tujuan_id'";
	$run_products = mysql_query($get_products); 
	while ($row_product = mysql_fetch_array($run_products))
	{
		$nama_bank = $row_product['nama_bank'];
		$cabang = $row_product['cabang'];
		$nama_pemilik = $row_product['nama_pemilik'];
		$nomor_rekening = $row_product['nomor_rekening'];
	}
	
$get_perusahaan = "select * from settings where id='1'";
	$run_perusahaan = mysql_query($get_perusahaan); 
	while ($row_perusahaan = mysql_fetch_array($run_perusahaan))
	{
		$alamat_perusahaan = $row_perusahaan['alamat_perusahaan'];
		$telephone_perusahaan = $row_perusahaan['telephone_perusahaan'];
		$email_perusahaan = $row_perusahaan['email_perusahaan'];
		
	}
	
$req_user = trim($order_buyer_name);
$req_user_info = $database->getUserInfo($req_user);
?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="gws cms">
  <meta name="author" content="">

  <title>Halaman Order | RWK</title>

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
<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/pages/invoice.css">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
 

<style>
    /* for demo */
    
    .example-modal {
      display: block;
      width: 100%;
      padding: 35px 15px;
      background-color: #f3f7f9;
    }
    
    .example-modal .modal {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      z-index: 1;
      display: block;
    }
    
    .example-modal .modal .modal-dialog {
      width: auto;
      max-width: 600px;
      margin: 15px auto;
    }
    
    .example-modal-top .center {
      top: 0;
      -webkit-transform: translate(-50%, 0px);
      -ms-transform: translate(-50%, 0px);
      -o-transform: translate(-50%, 0px);
      transform: translate(-50%, 0px);
    }
    
    .example-modal-bottom .center {
      top: auto;
      bottom: 0;
      -webkit-transform: translate(-50%, 0px);
      -ms-transform: translate(-50%, 0px);
      -o-transform: translate(-50%, 0px);
      transform: translate(-50%, 0px);
    }
    
    .example-modal-sidebar .center {
      top: 0;
      right: 5px;
      left: auto;
      -webkit-transform: none;
      -ms-transform: none;
      -o-transform: none;
      transform: none;
    }
    
  </style>

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
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/" data-slug="produk-tambah">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tambah Produk</span>
                  </a>
                </li>
				 <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo ROOT_URL; ?>/produk/" data-slug="produk-kategori">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Kategori</span>
                  </a>
                </li>
               
                  </ul>
                </li>
				
				<li class="site-menu-item active open">
              <a href="index.php" data-slug="order">
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
						<a href="<?php echo ROOT_URL; ?>/setting/index.php" data-slug="setting">
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
      <h1 class="page-title">Order #<?php echo $order_id; ?></h1>
	  <span>Diterbitkan Pada: <?php echo $order_date; ?></span>
	  <br><br><button class="btn btn-primary" data-target="#examplePositionSidebar" data-toggle="modal"
                        type="button"><?php echo $order_status ;?></button>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="view.php?order_id=<?php echo $order_id ?>"
        target="_self">
          <i class="icon wb-plus" aria-hidden="true"></i>
          <span class="hidden-xs">Reload</span>
        </a>
      </div>
    </div>
	

     <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-3">
              <h4>
                <img class="margin-right-10" src="<?php echo ROOT_URL; ?>/resource/assets/images/logo-blue.png"
                alt="...">RWK</h4>
              <address>
                <?php echo $alamat_perusahaan ;?>
                <br>
                <abbr title="Mail">Email:</abbr>&nbsp;&nbsp;<?php echo $email_perusahaan ;?>
                <br>
                <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;<?php echo $telephone_perusahaan ;?>
				</address>
			  <h4>Tujuan Transfer</h4>
			  <span>Bank: <?php echo $nama_bank; ?></span>
              <br>
			  <span>Cabang: <?php echo $cabang; ?></span>
              <br>
			  <span>Nama Pemilik: <?php echo $nama_pemilik; ?></span>
              <br>
			  <span>Nomor Rekening: <?php echo $nomor_rekening; ?></span>
              <br>
            </div>
            <div class="col-md-3 col-md-offset-6 text-right">
             
              <p>
                <br> Kepada:
                <br>
                <span class="font-size-20"><?php echo $order_buyer_name; ?></span>
              </p>
              <address>
				<abbr title="Nama">Nama Lengkap:</abbr>&nbsp;&nbsp;<?php echo $req_user_info['nama_lengkap']; ;?>
				<br>
				<abbr title="Email">E-mail:</abbr>&nbsp;&nbsp;<?php echo $req_user_info['email']; ;?>
                <br>
                <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;<?php echo $req_user_info['phone_number']; ;?>
                <br>
              </address>
              <h4>Asal Transfer</h4>
			  <span>Bank: <?php echo $order_bank; ?></span>
              <br>
			  <span>Nama Pemilik: <?php echo $order_atas_nama; ?></span>
              <br>
			  <span>Nomor Rekening: <?php echo $order_nomor_transfer; ?></span>
              <br>
			  
			  
            </div>
          </div>

          <div class="page-invoice-table table-responsive">
            <table class="table table-hover text-right">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Nama Produk</th>
                  <th class="text-right">Jumlah</th>
                  <th class="text-right">Harga Unit</th>
                  <th class="text-right">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    1
                  </td>
                  <td class="text-left">
                    <?php echo $order_judul; ?>
                  </td>
                  <td>
                    1
                  </td>
                  <td>
                    Rp.<?php echo $order_total; ?>
                  </td>
                  <td>
                    Rp.<?php echo $order_total; ?>
                  </td>
                </tr>
               
                
                
              </tbody>
            </table>
          </div>

          <div class="text-right clearfix">
            <div class="pull-right">
              <p>Jumlah Yang Di Transfer:
                <span>Rp.<?php echo $order_jumlah_transfer; ?></span>
              </p>
              <p>Total Harga Pembelian/Penyewaan:
                <span>Rp.<?php echo $order_total; ?></span>
              </p>
			  <?php
			  $order_total = filter_var($order_total,FILTER_SANITIZE_NUMBER_INT);
			  $order_jumlah_transfer = filter_var($order_jumlah_transfer,FILTER_SANITIZE_NUMBER_INT);
			  
			  
			  $order_total2 = $order_total - $order_jumlah_transfer;
			  $order_total2 = number_format("$order_total2",0,",",".");
			  ?>
              <p class="page-invoice-amount">Total Harga Yang Belum Di Transfer:
                <span>Rp.<?php echo $order_total2; ?></span>
              </p>
            </div>
          </div>

          <div class="text-right">
           
            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
            onclick="javascript:window.print();">
              <span><i class="icon wb-print" aria-hidden="true"></i> Print</span>
            </button>
          </div>
        </div>
      </div>
       

        
      </div>
    </div>
  </div>
  <!-- End Page -->
<div class="modal fade" id="examplePositionSidebar" aria-hidden="true" aria-labelledby="examplePositionSidebar"
                        role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-sidebar modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Perbarui Status Order</h4>
                              </div>
                              <div class="modal-body">
								<form action="" method="post" enctype="multipart/form-data">
							  <select data-style="btn-outline btn-primary" class="bs-select-hidden" name="order_status">
									<option value="Pending" <?php if($order_status=="Pending"){echo "selected";} ;?>>Pending</option>
									<option value="In Progress"<?php if($order_status=="In Progress"){echo "selected";} ;?>>In Progress</option>
									<option value="Success"<?php if($order_status=="Success"){echo "selected";} ;?>>Success</option>
									<option value="Cancelled" <?php if($order_status=="Cancelled"){echo "selected";} ;?>>Cancelled</option>
								</select>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Save changes</button>
                                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
								</form>
                              </div>
                            </div>
                          </div>
                        </div>
  
<?php

if(isset($_POST['submit'])){
	
	
		$order_status = $_POST['order_status'];
	$update_categories = "update orders set order_status='$order_status' where order_id='$order_id'";
		
		$run_update = mysql_query($update_categories); 
			echo "<script>alert('Order Status Berhasil Diperbarui!')</script>";
			echo "<script>window.open('view.php?order_id=$order_id','_self')</script>";
	}

?>

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