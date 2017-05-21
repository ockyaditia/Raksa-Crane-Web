<?php
	include("config.php");
	
	$order_buyer_name=$_POST["order_buyer_name"];
	
	if (!empty($_POST)) {
		
		$query = " SELECT orders.*, produk.produk_gambar FROM orders, produk WHERE order_buyer_name = '$order_buyer_name' AND order_status != 'Failed'  AND orders.order_produk_id = produk.produk_id";
		
		$sql1 = mysql_query($query);
		
		$rows = array();
		while ($row = mysql_fetch_assoc($sql1)) {
			$rows[] = $row;
		}
		
		$data = "{orders :".json_encode($rows)."}";
		echo $data;
	}
	
	mysql_close();
?>