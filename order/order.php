<?php
include("../include/session.php");
include("../root.php");
if($session->logged_in){
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
	$produk_id = $_GET['id'];
	$get_product = "select * from produk where produk_id='$produk_id'";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
	 $produk_judul = $row_products['produk_judul'];
	 $produk_tipe = $row_products['produk_tipe'];
	 $produk_harga = $row_products['produk_harga'];
	 $produk_pabrikan = $row_products['produk_pabrikan'];
	 $produk_model = $row_products['produk_model'];
	 $produk_tahun = $row_products['produk_tahun'];
	 $produk_kapasitas = $row_products['produk_kapasitas'];
	 $produk_boom = $row_products['produk_boom'];
	 $produk_jib = $row_products['produk_jib'];

	}
	
?>
<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Sewa <?php echo $produk_judul; ?> | RWK</title>

  <link rel="apple-touch-icon" href="../admin/resource/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../admin/resource/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../admin/resource/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../admin/resource/assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../admin/resource/assets/css/order.min.css">
  
   <link rel="stylesheet" href="../admin/resource/assets/vendor/jquery-wizard/jquery-wizard.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/formvalidation/formValidation.css">

  <link rel="stylesheet" href="../admin/resource/assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="../admin/resource/assets/vendor/select2/select2.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-select/bootstrap-select.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/icheck/icheck.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/asrange/asRange.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/asspinner/asSpinner.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/clockpicker/clockpicker.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/ascolorpicker/asColorPicker.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/card/card.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/jquery-labelauty/jquery-labelauty.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/jt-timepicker/jquery-timepicker.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/jquery-strength/jquery-strength.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/multi-select/multi-select.css">
  <link rel="stylesheet" href="../admin/resource/assets/vendor/typeahead-js/typeahead.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="../admin/resource/assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../admin/resource/assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    .bootstrap-select {
      width: 100% !important;
    }
    
    .datepair-wrap {
      position: relative;
      overflow: hidden;
    }
    
    .input-daterange-wrap {
      float: left;
    }
    
    .input-daterange-to {
      float: left;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
    }
    
    @media (max-width: 1360px) {
      .input-daterange-wrap,
      .input-daterange-to {
        display: block;
        float: none;
      }
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../admin/resource/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../admin/resource/assets/vendor/media-match/media.match.min.js"></script>
    <script src="../admin/resource/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../admin/resource/assets/vendor/modernizr/modernizr.js"></script>
  <script src="../admin/resource/assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
 <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Form Order <?php echo $produk_judul; ?></h1>
      <ol class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../produk/">Produk</a></li>
        <li class="active">Order</li>
      </ol>
      
    </div>
	<div class="page-content container-fluid">
	
     
        <div class="col-md-6">
          <!-- Panel Wizard Form -->
          <div class="panel" id="exampleWizardForm">
            <div class="panel-heading">
              <h3 class="panel-title">Form Order</h3>
            </div>
            <div class="panel-body">
              <!-- Steps -->
              
              <!-- End Steps -->

			  
<?php
if($produk_tipe=="Disewakan")
{
?>			  
<?php
if(isset($_POST['sewa1'])){
	$order_start = $_POST['start'];
	$order_end = $_POST['end'];
	$order_bank = $_POST['order_bank'];
	$order_atas_nama = $_POST['order_atas_nama'];
	$order_nomor_transfer = $_POST['order_nomor_transfer'];
	
	
?>
<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Penyewaan</span>
                  </div>
                </div>

                <div class="step col-md-4 current">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembayaran</span>
                  </div>
                </div>

                <div class="step col-md-4" >
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Konfirmasi Pembayaran</span>
                  </div>
                </div>
              </div>
<div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                 
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Tujuan transfer</label>
                      <select name="id_bank">
						<?php
						$get_pembayaran = "select * from pembayaran";
	$run_pembayaran = mysql_query($get_pembayaran); 
	while ($row_pembayaran = mysql_fetch_array($run_pembayaran))
	{
		$id = $row_pembayaran['id'];
		$nama_bank = $row_pembayaran['nama_bank'];
		echo"<option value='$id'>$nama_bank</option>";
	}
						?>
					  </select>
                    </div>
                    <input type="hidden" name="order_start" value="<?php echo $order_start; ?>">
                    <input type="hidden" name="order_end" value="<?php echo $order_end; ?>">
                    <input type="hidden" name="order_atas_nama" value="<?php echo $order_atas_nama; ?>">
                    <input type="hidden" name="order_bank" value="<?php echo $order_bank; ?>">
                    <input type="hidden" name="order_nomor_transfer" value="<?php echo $order_nomor_transfer; ?>">
					
					
					
					<div align="center">
					<button type="submit" name="sewa2" id="submit" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Validasi Order</span>
                  </button></div>
                </div>
                
                
              </div>
              <!-- End Wizard Content -->

			</form>

<?php
}
else if(isset($_POST['sewa2'])){
$id_bank = $_POST['id_bank'];
$order_start = $_POST['order_start'];
$order_end = $_POST['order_end'];
$order_bank = $_POST['order_bank'];
$order_atas_nama = $_POST['order_atas_nama'];
$order_nomor_transfer = $_POST['order_nomor_transfer'];

$order_total = filter_var($produk_harga,FILTER_SANITIZE_NUMBER_INT);

$startTimeStamp = strtotime($order_start);
$endTimeStamp = strtotime($order_end);

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);
$total_hari = $numberDays + 1;
$total_harga = $total_hari * $order_total;
$order_jumlah_transfer = $total_harga / 100 * 30 ;
$order_total = $total_harga - $order_jumlah_transfer;
$order_jumlah_transfer = number_format("$order_jumlah_transfer",0,",",".");
$order_total = number_format("$order_total",0,",",".");
$total_harga = number_format("$total_harga",0,",",".");



$get_bank = "select * from pembayaran where id='$id_bank'";
	$run_bank = mysql_query($get_bank); 
	while ($row_banks = mysql_fetch_array($run_bank))
	{
	 $order_tujuan_id = $row_banks['id'];
	 $nama_bank = $row_banks['nama_bank'];
	 $cabang = $row_banks['cabang'];
	 $nama_pemilik = $row_banks['nama_pemilik'];
	 $nomor_rekening = $row_banks['nomor_rekening'];

	}

	
?>

<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Penyewaan</span>
                  </div>
                </div>

                <div class="step col-md-4">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembayaran</span>
                  </div>
                </div>

                <div class="step col-md-4 current" >
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Konfirmasi Pembayaran</span>
                  </div>
                </div>
              </div>
<div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
			  
			  <input type="hidden" name="order_start" value="<?php echo $order_start; ?>">
<input type="hidden" name="order_end" value="<?php echo $order_end; ?>">
<input type="hidden" name="order_bank" value="<?php echo $nama_bank; ?>">
<input type="hidden" name="order_atas_nama" value="<?php echo $order_atas_nama; ?>">
<input type="hidden" name="order_nomor_transfer" value="<?php echo $order_nomor_transfer; ?>">
<input type="hidden" name="order_jumlah_transfer" value="<?php echo $order_jumlah_transfer; ?>">
<input type="hidden" name="order_tujuan_id" value="<?php echo $id_bank; ?>">
			  
 <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Rincian Penyewaan <?php echo $produk_judul; ?>.</h4>
                    <div class="table-responsive">
                      <table class="table table-hover text-right">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th>Description</th>
                            <th class="text-right">Harian</th>
                            <th class="text-right">Jumlah Hari</th>
                            <th class="text-right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-left"><?php echo $produk_judul; ?></td>
                            <td>Rp.<?php echo $produk_harga; ?></td>
                            <td><?php echo $total_hari; ?></td>
                            <td>Rp.<?php echo $total_harga; ?></td>
                          </tr>
						  <tr>
                            <td class="text-center"></td>
                            <td class="text-left"></td>
                            <td>DP yang harus dibayar sebesar</td>
                            <td> 30%  </td>
                            <td>Rp.<?php echo $order_jumlah_transfer; ?></td>
                          </tr>
						  <tr>
                            <td class="text-center"></td>
                            <td class="text-left"></td>
                            <td>Sisa yang harus dibayar selesai sewa sebesar</td>
                            <td> 70%  </td>
                            <td>Rp.<?php echo $order_total; ?></td>
                          </tr>
                         
                        </tbody>
                      </table>
					  <h4>Informasi Pembayaran</h4>
					  
					  
					  <h5>Anda memilih pembayaran menuju ke rekening <?php echo $nama_bank; ?> kami. Rincian rekening sebagai berikut :</h5>
					  <h5>
					  Nomor Rekening <?php echo $nama_bank;?> : <?php echo $nomor_rekening; ?>
					  <br>
					  Nama Pemilik : <?php echo $nama_pemilik; ?>
					  <br>
					  Cabang : <?php echo $cabang; ?>
					  <br>
					  </h5>
					  
					  <h5>Silahkan melakukan pembayaran secara manual via ATM/Internet Banking ke rekening kami diatas.</h5>
					  
					  <div align="center">
					 
					<button type="submit" name="sewa3" id="sewa3" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Submit</span>
                  </button></div>
				  
                    </div>
                  </div>
                </div>
                </div>

<?php
}
else if(isset($_POST['sewa3'])){
	 $order_produk_id = $produk_id;
	 $order_judul = $produk_judul;
	 $order_date	  = date('d-m-Y');
	 
	 $order_duration = 86400;
	 
	 $order_tipe = $produk_tipe;
	 $order_start = $_POST['order_start'];
	 $order_end = $_POST['order_end'];
	 $order_buyer_name = $session->username;
	 $order_bank = $_POST['order_bank'];
	 $order_atas_nama = $_POST['order_atas_nama'];
	 $order_nomor_transfer = $_POST['order_nomor_transfer'];
	 $order_jumlah_transfer = $_POST['order_jumlah_transfer'];
	 $order_status = "In Progress";
	 $order_total = $produk_harga;
	 $order_tujuan_id = $_POST['order_tujuan_id'];
	 $order_publish= 1;
	$insert_order = "insert into orders (order_produk_id,order_judul,order_date,order_tipe,order_start,order_end,order_buyer_name,order_bank,order_atas_nama,order_nomor_transfer,order_jumlah_transfer,order_status,order_total,order_tujuan_id,order_publish,order_duration) 
values 
('$order_produk_id','$order_judul','$order_date','$order_tipe','$order_start','$order_end','$order_buyer_name','$order_bank','$order_atas_nama','$order_nomor_transfer','$order_jumlah_transfer','$order_status','$order_total','$order_tujuan_id','$order_publish','$order_duration')";
		
$run_order = mysql_query($insert_order);

	$update = "update produk set jumlah_barang = jumlah_barang-1 where produk_id = '$order_produk_id'";
	mysql_query($update);
	
	if (isset($_GET['id2'])){
		$data = $_GET['id2'];
		
		echo $data;
		
	$get_pembayaran = "update orders set order_jumlah_transfer = order_jumlah_transfer + '$order_total' where order_id = 8";
	mysql_query($get_pembayaran); 
}
		
echo "<script>alert('Order berhasil dikirim, silahkan cek status di user panel!')</script>";
echo "<script>window.open('../user/index.php','_self')</script>";
		
	
}
else
{
?>
			  
              <!-- Wizard Content -->
              <div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                 
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Nama Produk</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_judul" value="<?php echo $produk_judul; ?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Kapasitas</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_kapasitas" value="<?php echo $produk_kapasitas; ?>">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputUserName">Boom</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_boom" value="<?php echo $produk_boom; ?>">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputUserName">Jib</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_jib"value="<?php echo $produk_jib; ?>">
                    </div>
					<label class="control-label" for="inputUserName">Tanggal Sewa</label>
					<div class="input-daterange" data-plugin="datepicker">
					
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" id="start" name="start"/>
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">hingga</span>
                      <input type="text" class="form-control" name="end" />
                    </div>
                  </div><br>
				  <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Nama Bank</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="order_bank" placeholder="Nama Bank">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputCardNumber">Atas Nama</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="order_atas_nama" placeholder="Atas Nama / Pemilik">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nomor Rekening</label>
                      <input type="text" class="form-control" id="inputCVV" name="order_nomor_transfer" data-fv-field="type_numberic" placeholder="Nomor Rekening">
                    </div>
					<div align="center">
					<button type="submit" name="sewa1" id="submit" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Validasi Order</span>
                  </button></div>
                </div>
                
                
              </div>
			  
              <!-- End Wizard Content -->

			</form>
			<?php
			}
			}
			
if($produk_tipe=="Dijual")
{
	if(isset($_POST['order1'])){
	$order_bank = $_POST['order_bank'];
	$order_atas_nama = $_POST['order_atas_nama'];
	$order_nomor_transfer = $_POST['order_nomor_transfer'];
	
?>
	<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembelian</span>
                  </div>
                </div>

                <div class="step col-md-4 current">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembelian</span>
                  </div>
                </div>

                <div class="step col-md-4" >
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Konfirmasi Pembayaran</span>
                  </div>
                </div>
              </div>
<div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                 
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Tujuan transfer</label>
                      <select name="id_bank">
						<?php
						$get_pembayaran = "select * from pembayaran";
	$run_pembayaran = mysql_query($get_pembayaran); 
	while ($row_pembayaran = mysql_fetch_array($run_pembayaran))
	{
		$id = $row_pembayaran['id'];
		$nama_bank = $row_pembayaran['nama_bank'];
		echo"<option value='$id'>$nama_bank</option>";
	}
						?>
					  </select>
                    </div>
                    <input type="hidden" name="order_atas_nama" value="<?php echo $order_atas_nama; ?>">
                    <input type="hidden" name="order_bank" value="<?php echo $order_bank; ?>">
                    <input type="hidden" name="order_nomor_transfer" value="<?php echo $order_nomor_transfer; ?>">
					
					
					
					<div align="center">
					<button type="submit" name="order2" id="submit" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Validasi Order</span>
                  </button></div>
                </div>
                
                
              </div>
              <!-- End Wizard Content -->

			</form>
<?php
}
else if(isset($_POST['order2'])){
$id_bank = $_POST['id_bank'];
$order_bank = $_POST['order_bank'];
$order_atas_nama = $_POST['order_atas_nama'];
$order_nomor_transfer = $_POST['order_nomor_transfer'];

$order_total = filter_var($produk_harga,FILTER_SANITIZE_NUMBER_INT);


$order_jumlah_transfer = $order_total / 100 * 30 ;
$order_total = $order_total - $order_jumlah_transfer;
$order_jumlah_transfer = number_format("$order_jumlah_transfer",0,",",".");
$order_total = number_format("$order_total",0,",",".");

$get_bank = "select * from pembayaran where id='$id_bank'";
	$run_bank = mysql_query($get_bank); 
	while ($row_banks = mysql_fetch_array($run_bank))
	{
	 $order_tujuan_id = $row_banks['id'];
	 $nama_bank = $row_banks['nama_bank'];
	 $cabang = $row_banks['cabang'];
	 $nama_pemilik = $row_banks['nama_pemilik'];
	 $nomor_rekening = $row_banks['nomor_rekening'];

	}
?>
<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
                <div class="step col-md-4" data-target="#exampleAccount" role="tab">
                  <span class="step-number">1</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembelian</span>
                  </div>
                </div>

                <div class="step col-md-4">
                  <span class="step-number">2</span>
                  <div class="step-desc">
                    <span class="step-title">Informasi Pembelian</span>
                  </div>
                </div>

                <div class="step col-md-4 current" >
                  <span class="step-number">3</span>
                  <div class="step-desc">
                    <span class="step-title">Konfirmasi Pembelian</span>
                  </div>
                </div>
              </div>
<div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
			  
			  
<input type="hidden" name="order_bank" value="<?php echo $nama_bank; ?>">
<input type="hidden" name="order_atas_nama" value="<?php echo $order_atas_nama; ?>">
<input type="hidden" name="order_nomor_transfer" value="<?php echo $order_nomor_transfer; ?>">
<input type="hidden" name="order_jumlah_transfer" value="<?php echo $order_jumlah_transfer; ?>">
<input type="hidden" name="order_tujuan_id" value="<?php echo $id_bank; ?>">
			  
 <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                  <div class="text-center margin-vertical-20">
                    <h4>Rincian Pembelian <?php echo $produk_judul; ?>.</h4>
                    <div class="table-responsive">
                      <table class="table table-hover text-right">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th>Description</th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Harga</th>
                            <th class="text-right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">1</td>
                            <td class="text-left"><?php echo $produk_judul; ?></td>
                            <td>1</td>
                            <td>Rp.<?php echo $produk_harga; ?></td>
                            <td>Rp.<?php echo $produk_harga; ?></td>
                          </tr>
						  <tr>
                            <td class="text-center"></td>
                            <td class="text-left"></td>
                            <td>DP yang harus dibayar sebesar</td>
                            <td> 30%  </td>
                            <td>Rp.<?php echo $order_jumlah_transfer; ?></td>
                          </tr>
						  <tr>
                            <td class="text-center"></td>
                            <td class="text-left"></td>
                            <td>Sisa yang harus dibayar selesai dikonfirmasi sebesar</td>
                            <td> 70%  </td>
                            <td>Rp.<?php echo $order_total; ?></td>
                          </tr>
                         
                        </tbody>
                      </table>
					  <h4>Informasi Pembayaran</h4>
					  
					  
					  <h5>Anda memilih pembayaran menuju ke rekening <?php echo $nama_bank; ?> kami. Rincian rekening sebagai berikut :</h5>
					  <h5>
					  Nomor Rekening <?php echo $nama_bank;?> : <?php echo $nomor_rekening; ?>
					  <br>
					  Nama Pemilik : <?php echo $nama_pemilik; ?>
					  <br>
					  Cabang : <?php echo $cabang; ?>
					  <br>
					  </h5>
					  
					  <h5>Silahkan melakukan pembayaran secara manual via ATM/Internet Banking ke rekening kami diatas, setelah anda berhasil melakukan transfer, maka silahkan untuk mengisikan  nomor transaksi dibawah ini.</h5>
					  
					  <div class="form-group">
                      <label class="control-label" for="inputUserName">Nomor Transaksi Pembayaran</label>
                      <input type="text" class="form-control" id="inputUserName" name="order_nomor_transaksi">
                    </div>
					  <div align="center">
					 
					<button type="submit" name="order3" id="order3" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Submit</span>
                  </button></div>
				  
                    </div>
                  </div>
                </div>
                </div>
<?php
}
else if(isset($_POST['order3'])){
	 $order_produk_id = $produk_id;
	 $order_judul = $produk_judul;
	 $order_date	  = date('d-m-Y');
	 $order_tipe = $produk_tipe;
	 $order_buyer_name = $session->username;
	 $order_bank = $_POST['order_bank'];
	 $order_atas_nama = $_POST['order_atas_nama'];
	 $order_nomor_transfer = $_POST['order_nomor_transfer'];
	 $order_jumlah_transfer = $_POST['order_jumlah_transfer'];
	 $order_nomor_transaksi = $_POST['order_nomor_transaksi'];
	 $order_status = "In Progress";
	 $order_total = $produk_harga;
	 $order_tujuan_id = $_POST['order_tujuan_id'];
	 $order_publish= 1;
	 if($order_nomor_transaksi==''){
		
		echo "<script>alert('Harap Masukan Nomor Transaksi')</script>";
		exit();
		}
	$insert_order = "insert into orders (order_produk_id,order_judul,order_date,order_tipe,order_buyer_name,order_bank,order_atas_nama,order_nomor_transfer,order_jumlah_transfer,order_nomor_transaksi,order_status,order_total,order_tujuan_id,order_publish) 
values 
('$order_produk_id','$order_judul','$order_date','$order_tipe','$order_buyer_name','$order_bank','$order_atas_nama','$order_nomor_transfer','$order_jumlah_transfer','$order_nomor_transfer','$order_status','$order_total','$order_tujuan_id','$order_publish')";
		
$run_order = mysql_query($insert_order); 
		
		if (isset($_GET['id2']) && isset($_GET['tot'])){
		$data = $_GET['id2'];
		$tot = $_GET['tot'];
		
		echo $data;
		
		$order_jumlah_transfer = filter_var($order_jumlah_transfer,FILTER_SANITIZE_NUMBER_INT);
		$total = $tot + $order_jumlah_transfer;
		
		$total = number_format("$total",0,",",".");
		
	$get_pembayaran = "update orders set order_jumlah_transfer = '$total' where order_id = '$data'";
	mysql_query($get_pembayaran); 
}
		
echo "<script>alert('Order berhasil dikirim, silahkan cek status di user panel!')</script>";
echo "<script>window.open('../user/index.php','_self')</script>";
		
	
}else
{
?>
			  
              <!-- Wizard Content -->
              <div class="wizard-content">
			  <form autocomplete="off" action="" method="post" enctype="multipart/form-data">
                <div class="wizard-pane active" id="exampleAccount" role="tabpanel">
                 
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Nama Produk</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_judul" value="<?php echo $produk_judul; ?>">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputUserName">Kapasitas</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_kapasitas" value="<?php echo $produk_kapasitas; ?>">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputUserName">Boom</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_boom" value="<?php echo $produk_boom; ?>">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputUserName">Jib</label>
                      <input readonly type="text" class="form-control" id="inputUserName" name="produk_jib"value="<?php echo $produk_jib; ?>">
                    </div>
					
                    
                  </div><br>
				  <div class="form-group">
                      <label class="control-label" for="inputCardNumber">Nama Bank</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="order_bank" placeholder="Nama Bank">
                    </div>
					<div class="form-group">
                      <label class="control-label" for="inputCardNumber">Atas Nama</label>
                      <input type="text" class="form-control" id="inputCardNumber" name="order_atas_nama" placeholder="Atas Nama / Pemilik">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputCVV">Nomor Rekening</label>
                      <input type="text" class="form-control" id="inputCVV" name="order_nomor_transfer" data-fv-field="type_numberic" placeholder="Nomor Rekening">
                    </div>
					<div align="center">
					<button type="submit" name="order1" id="submit" class="btn btn-animate btn-lg btn-animate-vertical btn-success">
                    <span><i class="icon wb-download" aria-hidden="true"></i>Validasi Order</span>
                  </button></div>
                </div>
                
                
              </div>
			  
              <!-- End Wizard Content -->

			</form>

<?php
}
}
?>
			
            </div>
          </div>
          <!-- End Panel Wizard One Form -->
        </div>

        

    </div>
	
	
</div>

  <!-- Core  -->
  <script src="../admin/resource/assets/vendor/jquery/jquery.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="../admin/resource/assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="../admin/resource/assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="../admin/resource/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="../admin/resource/assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="../admin/resource/assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="../admin/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="../admin/resource/assets/vendor/intro-js/intro.js"></script>
  <script src="../admin/resource/assets/vendor/screenfull/screenfull.js"></script>
  <script src="../admin/resource/assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="../admin/resource/assets/vendor/select2/select2.min.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="../admin/resource/assets/vendor/icheck/icheck.min.js"></script>
  <script src="../admin/resource/assets/vendor/switchery/switchery.min.js"></script>
  <script src="../admin/resource/assets/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="../admin/resource/assets/vendor/asspinner/jquery-asSpinner.min.js"></script>
  <script src="../admin/resource/assets/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
  <script src="../admin/resource/assets/vendor/ascolor/jquery-asColor.min.js"></script>
  <script src="../admin/resource/assets/vendor/asgradient/jquery-asGradient.min.js"></script>
  <script src="../admin/resource/assets/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="../admin/resource/assets/vendor/jquery-knob/jquery.knob.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="../admin/resource/assets/vendor/card/jquery.card.js"></script>
  <script src="../admin/resource/assets/vendor/jquery-labelauty/jquery-labelauty.js"></script>
  <script src="../admin/resource/assets/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="../admin/resource/assets/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
  <script src="../admin/resource/assets/vendor/datepair-js/datepair.min.js"></script>
  <script src="../admin/resource/assets/vendor/datepair-js/jquery.datepair.min.js"></script>
  <script src="../admin/resource/assets/vendor/jquery-strength/jquery-strength.min.js"></script>
  <script src="../admin/resource/assets/vendor/multi-select/jquery.multi-select.js"></script>
  <script src="../admin/resource/assets/vendor/typeahead-js/bloodhound.min.js"></script>
  <script src="../admin/resource/assets/vendor/typeahead-js/typeahead.jquery.min.js"></script>
  <script src="../admin/resource/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <script src="../admin/resource/assets/vendor/jquery-wizard/jquery-wizard.js"></script>
  <script src="../admin/resource/assets/vendor/formvalidation/formValidation.js"></script>
  <script src="../admin/resource/assets/vendor/formvalidation/framework/bootstrap.js"></script>

  <!-- Scripts -->
  <script src="../admin/resource/assets/js/core.js"></script>
  <script src="../admin/resource/assets/js/site.js"></script>

  <script src="../admin/resource/assets/js/sections/menu.js"></script>
  <script src="../admin/resource/assets/js/sections/menubar.js"></script>
  <script src="../admin/resource/assets/js/sections/sidebar.js"></script>

  <script src="../admin/resource/assets/js/configs/config-colors.js"></script>
  <script src="../admin/resource/assets/js/configs/config-tour.js"></script>

  <script src="../admin/resource/assets/js/components/asscrollable.js"></script>
  <script src="../admin/resource/assets/js/components/animsition.js"></script>
  <script src="../admin/resource/assets/js/components/slidepanel.js"></script>
  <script src="../admin/resource/assets/js/components/switchery.js"></script>
  <script src="../admin/resource/assets/js/components/select2.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-tokenfield.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-tagsinput.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-select.js"></script>
  <script src="../admin/resource/assets/js/components/icheck.js"></script>
  <script src="../admin/resource/assets/js/components/switchery.js"></script>
  <script src="../admin/resource/assets/js/components/asrange.js"></script>
  <script src="../admin/resource/assets/js/components/asspinner.js"></script>
  <script src="../admin/resource/assets/js/components/clockpicker.js"></script>
  <script src="../admin/resource/assets/js/components/ascolorpicker.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-maxlength.js"></script>
  <script src="../admin/resource/assets/js/components/jquery-knob.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-touchspin.js"></script>
  <script src="../admin/resource/assets/js/components/card.js"></script>
  <script src="../admin/resource/assets/js/components/jquery-labelauty.js"></script>
  <script src="../admin/resource/assets/js/components/bootstrap-datepicker.js"></script>
  <script src="../admin/resource/assets/js/components/jt-timepicker.js"></script>
  <script src="../admin/resource/assets/js/components/datepair-js.js"></script>
  <script src="../admin/resource/assets/js/components/jquery-strength.js"></script>
  <script src="../admin/resource/assets/js/components/multi-select.js"></script>
  <script src="../admin/resource/assets/js/components/jquery-placeholder.js"></script>
  
  
  
  

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
            // Über-simplistic e-mail validation
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
          prefetch: '../admin/resource/assets/data/cities.json'
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
          prefetch: '../admin/resource/assets/data/cities.json'
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
            prefetch: '../../assets/data/countries.json'
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
  
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Wizard Form
      // -------------------
      (function() {
        // set up formvalidation
        $('#exampleAccountForm').formValidation({
          framework: 'bootstrap',
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30,
                  message: 'The username must be more than 6 and less than 30 characters long'
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9_\.]+$/,
                  message: 'The username can only consist of alphabetical, number, dot and underscore'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                different: {
                  field: 'username',
                  message: 'The password cannot be the same as username'
                }
              }
            }
          }
        });

        $("#exampleBillingForm").formValidation({
          framework: 'bootstrap',
          fields: {
            number: {
              validators: {
                notEmpty: {
                  message: 'The credit card number is required'
                }
                // creditCard: {
                //   message: 'The credit card number is not valid'
                // }
              }
            },
            cvv: {
              validators: {
                notEmpty: {
                  message: 'The CVV number is required'
                }
                // cvv: {
                //   creditCardField: 'number',
                //   message: 'The CVV number is not valid'
                // }
              }
            }
          }
        });

        // init the wizard
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          buttonsAppendTo: '.panel-body'
        });

        var wizard = $("#exampleWizardForm").wizard(options).data(
          'wizard');

        // setup validator
        // http://formvalidation.io/api/#is-valid
        wizard.get("#exampleAccount").setValidator(function() {
          var fv = $("#exampleAccountForm").data('formValidation');
          fv.validate();

          if (!fv.isValid()) {
            return false;
          }

          return true;
        });

        wizard.get("#exampleBilling").setValidator(function() {
          var fv = $("#exampleBillingForm").data('formValidation');
          fv.validate();

          if (!fv.isValid()) {
            return false;
          }

          return true;
        });
      })();

      // Example Wizard Form Container
      // -----------------------------
      // http://formvalidation.io/api/#is-valid-container
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          onInit: function() {
            $('#exampleFormContainer').formValidation({
              framework: 'bootstrap',
              fields: {
                username: {
                  validators: {
                    notEmpty: {
                      message: 'The username is required'
                    }
                  }
                },
                password: {
                  validators: {
                    notEmpty: {
                      message: 'The password is required'
                    }
                  }
                },
                number: {
                  validators: {
                    notEmpty: {
                      message: 'The credit card number is not valid'
                    }
                  }
                },
                cvv: {
                  validators: {
                    notEmpty: {
                      message: 'The CVV number is required'
                    }
                  }
                }
              }
            });
          },
          validator: function() {
            var fv = $('#exampleFormContainer').data(
              'formValidation');

            var $this = $(this);

            // Validate the container
            fv.validateContainer($this);

            var isValidStep = fv.isValidContainer($this);
            if (isValidStep === false || isValidStep === null) {
              return false;
            }

            return true;
          }
        });

        $("#exampleWizardFormContainer").wizard(options);
      })();

      // Example Wizard Pager
      // --------------------------
     

      // Example Wizard Progressbar
      // --------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");

        var options = $.extend(true, {}, defaults, {
          step: '.wizard-pane',
          onInit: function() {
            this.$progressbar = this.$element.find('.progress-bar')
              .addClass('progress-bar-striped');
          },
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          onAfterChange: function(prev, step) {
            var total = this.length();
            var current = step.index + 1;
            var percent = (current / total) * 100;

            this.$progressbar.css({
              width: percent + '%'
            }).find('.sr-only').text(current + '/' + total);
          },
          buttonsAppendTo: '.panel-body'
        });

        $("#exampleWizardProgressbar").wizard(options);
      })();

      // Example Wizard Tabs
      // -------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '> .nav > li > a',
          onBeforeShow: function(step) {
            step.$element.tab('show');
          },
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          buttonsAppendTo: '.tab-content'
        });

        $("#exampleWizardTabs").wizard(options);
      })();

      // Example Wizard Accordion
      // ------------------------
      (function() {
        var defaults = $.components.getDefaults("wizard");
        var options = $.extend(true, {}, defaults, {
          step: '.panel-title[data-toggle="collapse"]',
          classes: {
            step: {
              //done: 'color-done',
              error: 'color-error'
            }
          },
          templates: {
            buttons: function() {
              return '<div class="panel-footer">' + defaults.templates
                .buttons.call(this) + '</div>';
            }
          },
          onBeforeShow: function(step) {
            step.$pane.collapse('show');
          },

          onBeforeHide: function(step) {
            step.$pane.collapse('hide');
          },


          buttonsAppendTo: '.panel-collapse'
        });

        $("#exampleWizardAccordion").wizard(options);
      })();

    })(document, window, jQuery);
  </script>
<script type="text/javascript">
    $("button:#Get").click(function () {
		
	$('#msg').html($("#start").val());
		
    });
	
</script>
<script>
$(function() {
    $('#term').click(function() {
        if ($(this).is(':checked')) {
            $('#sewa3').removeAttr('disabled');
        } else {
            $('#sewa3').attr('disabled', 'disabled');
        }
    });
	
});
</sript>
</body>

</html>

<?php
}
else
{
echo "<script>window.open('../index.php','_self')</script>";
}
}
else
{
echo "<script>window.open('../index.php','_self')</script>";
}
?>