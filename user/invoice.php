<?php
include("../include/session.php");
include("../root.php");
if($session->logged_in){
if(isset($_GET['id'])){

	$order_id = $_GET['id'];
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
if($order_buyer_name!=$session->username)
{
echo "<script>window.open('../index.php','_self')</script>";
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

  <link rel="apple-touch-icon" href="<?php echo ROOT_URL; ?>/admin/resource/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo ROOT_URL; ?>/admin/resource/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/css/order.min.css">

  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
<link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/css/pages/invoice.css">
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/css/dashboard/v2.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>/admin/resource/assets/fonts/brand-icons/brand-icons.min.css">
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
    <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
	  
	  <link type="text/css" rel="stylesheet" href="../css/style.css" />
	  
	  
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

 
  


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
        <a class="btn btn-sm btn-default btn-outline btn-round" href="order.php"
        target="_self">
          <i class="icon wb-plus" aria-hidden="true"></i>
          <span class="hidden-xs">Kembali</span>
        </a>
      </div>
    </div>
	

     <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row">
            <div class="col-md-3">
              <h4>
                <img class="margin-right-10" src="<?php echo ROOT_URL; ?>/admin/resource/assets/images/logo-blue.png"
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
			
			<?php
				$dataz = $_GET['id'];
			
				$sql = "select order_produk_id, order_upload, order_duration from orders where order_id = '$dataz'";
				$query = mysql_query($sql) or die(mysql_error());
				$row = mysql_fetch_array($query);
				
				$datazz = $row[0];
				$datazzz = $row[1];
				$datazzzz = $row[2];
				
				if ($datazzz == NULL) {
		    ?>
			
			<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="../js/jquery.leanModal.min.js"></script>
			
			<a class="btn btn-animate btn-animate-side btn-default btn-outline" id="modal_trigger" href="#modal">Unggah Bukti Pembayaran</a>
			
			<div class="container">
				<div id="modal" class="popupContainer" style="display:none;">
					<header class="popupHeader">
						<span class="header_title">Unggah Bukti Pembayaran</span>
						<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>
					
					<section class="popupBody">
						<div class="user_login">
							<form enctype="multipart/form-data" method="POST" action="upload.php">
								<label>Bukti Pembayaran</label>
								<input type="file" name="dokumen" class="btn btn-animate btn-animate-side btn-default btn-outline" />
								
								<input type="hidden" name="id" value="<?php echo $dataz; ?>">
								<br />

								<div class="action_btns">
									<input type="submit" value="Unggah" class="btn btn-animate btn-animate-side btn-default btn-outline" />
								</div>
							</form>
						</div>
					</section>
				</div>
			</div>

			<script type="text/javascript">
				$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

				$(function(){
					// Calling Login Form
					$("#modal_trigger").click(function(){
						$(".user_login").show();
						return false;
					});
				})
			</script>
			
			<?php
				} else {
			?>
				
				<div style="position:absolute; margin-top:-200px; margin-left:100px;">
					<h3 style="text-align:left;">Durasi Pelunasan Pembayaran</h3>
					<div id="clockdiv">
					  <div>
						<span class="days"></span>
						<div class="smalltext">Days</div>
					  </div>
					  <div>
						<span class="hours"></span>
						<div class="smalltext">Hours</div>
					  </div>
					  <div>
						<span class="minutes"></span>
						<div class="smalltext">Minutes</div>
					  </div>
					  <div>
						<span class="seconds"></span>
						<div class="smalltext">Seconds</div>
					  </div>
					</div>
				</div>

					<script>
						function getTimeRemaining(endtime) {
						  var t = Date.parse(endtime) - Date.parse(new Date());
						  var seconds = Math.floor((t / 1000) % 60);
						  var minutes = Math.floor((t / 1000 / 60) % 60);
						  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
						  var days = Math.floor(t / (1000 * 60 * 60 * 24));
						  return {
							'total': t,
							'days': days,
							'hours': hours,
							'minutes': minutes,
							'seconds': seconds
						  };
						}

						function initializeClock(id, endtime) {
						  var clock = document.getElementById(id);
						  var daysSpan = clock.querySelector('.days');
						  var hoursSpan = clock.querySelector('.hours');
						  var minutesSpan = clock.querySelector('.minutes');
						  var secondsSpan = clock.querySelector('.seconds');

						  function updateClock() {
							var t = getTimeRemaining(endtime);

							daysSpan.innerHTML = t.days;
							hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
							minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
							secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

							if (t.total <= 0) {
							  clearInterval(timeinterval);
							}
						  }

						  updateClock();
						  var timeinterval = setInterval(updateClock, 1000);
						}

						var deadline = new Date(Date.parse(new Date()) + 1 * <?php echo $datazzzz; ?> * 1000);
						initializeClock('clockdiv', deadline);
					
					</script>
				
			<button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline"
            onclick="location.href='../order/order.php?id=<?php echo $datazz; ?>&id2=8&tot=<?php echo $order_jumlah_transfer; ?>'">
              <span> Pelunasan Pembayaran</span>
            </button>
				
			<?php
				}
			
			?>
			
          </div>
        </div>
      </div>
       

        
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
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/jquery/jquery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/intro-js/intro.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
  
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/gmaps/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <!-- Scripts -->
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/core.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/site.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/sections/menu.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/sections/menubar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/sections/sidebar.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/configs/config-colors.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/configs/config-tour.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/asscrollable.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/animsition.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/slidepanel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/switchery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/gmaps.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/resource/assets/js/components/matchheight.js"></script>
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
echo "<script>window.open('../index.php','_self')</script>";
}

?>