<?php
	include("config.php");
	
	$order_id=$_POST["order_id"];
	
	if (!empty($_POST)) {
		
		$query = " SELECT * FROM orders WHERE order_id = $order_id";
		
		$sql1 = mysql_query($query);
		$row = mysql_fetch_array($sql1);
		
		if (!empty($row)) {
			$response["success"] = 3;
			$response["produk_id"] = $row['order_produk_id'];
			$response["nama_produk"] = $row['order_judul'];
			$response["current_date"] = $row['order_date'];
			$response["tipe"] = $row['order_tipe'];
			$response["date1"] = $row['order_start'];
			$response["date2"] = $row['order_end'];
			$response["sharedUsername"] = $row['order_buyer_name'];
			$response["tujuan_transfer"] = $row['order_bank'];
			$response["atas_nama"] = $row['order_atas_nama'];
			$response["nomor_rekening"] = $row['order_nomor_transfer'];
			$response["order_jumlah_transfer"] = $row['order_jumlah_transfer'];
			$response["order_status"] = $row['order_status'];
			$response["order_publish"] = $row['order_publish'];
			$response["harga"] = $row['order_total'];
			$response["order_tujuan_id"] = $row['order_tujuan_id'];
			$response["order_nomor_transaksi"] = $row['order_nomor_transaksi'];
			$response["order_duration"] = $row['order_duration'];
			die(json_encode($response));
		}
		else {
			$response["success"] = 2;
			die(json_encode($response));
		}
	}
	else {
		$response["success"] = 0;
		die(json_encode($response));
	}
	
	mysql_close();
?>