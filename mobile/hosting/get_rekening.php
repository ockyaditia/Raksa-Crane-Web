<?php
	include("config.php");
	
	$tujuan_transfer=$_POST["tujuan_transfer"];
	
	if (!empty($_POST)) {
		if (empty($_POST['tujuan_transfer'])) {
			$response["success"] = 0;
			$response["message"] = "Pilih Tujuan Transaksi.";
			die(json_encode($response));
		}
		
		$query = " SELECT * FROM pembayaran WHERE nama_bank = '$tujuan_transfer'";
		
		$sql1 = mysql_query($query);
		$row = mysql_fetch_array($sql1);
		
		if (!empty($row)) {
			$response["success"] = 3;
			$response["cabang"] = $row['cabang'];
			$response["nama_pemilik"] = $row['nama_pemilik'];
			$response["nomor_rekening"] = $row['nomor_rekening'];
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