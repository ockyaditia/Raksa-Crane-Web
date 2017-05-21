<?php
	include("config.php");
	
	$produk_id=$_REQUEST['produk_id'];
	$nama_produk=$_REQUEST['nama_produk'];
	$current_date=$_REQUEST['current_date'];
	$tipe=$_REQUEST['tipe'];
	$date1=$_REQUEST['date1'];
	$date2=$_REQUEST['date2'];
	$sharedUsername=$_REQUEST['sharedUsername'];
	$tujuan_transfer=$_REQUEST['tujuan_transfer'];
	$atas_nama=$_REQUEST['atas_nama'];
	$nomor_rekening=$_REQUEST['nomor_rekening'];
	$order_jumlah_transfer=$_REQUEST['order_jumlah_transfer'];
	$order_status=$_REQUEST['order_status'];
	$order_publish=$_REQUEST['order_publish'];
	$harga=$_REQUEST['harga'];
	$order_tujuan_id=$_REQUEST['order_tujuan_id'];
	$order_nomor_transaksi=$_REQUEST['order_nomor_transaksi'];
	$order_duration=$_REQUEST['order_duration'];
	
	$flag['code']=0;
	
	if(mysql_query("insert into orders(order_produk_id, order_judul, order_date, order_tipe, order_start, order_end, order_buyer_name, order_bank, order_atas_nama, order_nomor_transfer, order_jumlah_transfer, order_status, order_publish, order_total, order_tujuan_id, order_nomor_transaksi, order_duration) values($produk_id, '$nama_produk', '$current_date', '$tipe', '$date1', '$date2', '$sharedUsername', '$tujuan_transfer', '$atas_nama', '$nomor_rekening', '$order_jumlah_transfer', '$order_status', '$order_publish', '$harga', '$order_tujuan_id', '$order_nomor_transaksi', '$order_duration')"))
	{
		if(mysql_query("update produk set jumlah_barang = jumlah_barang-1 WHERE produk_id = '$produk_id'"))
	{
		$flag['code']=1;
	}
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>