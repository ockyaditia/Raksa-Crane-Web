<?php
	include("config.php");
	
	$category_id=$_POST["category_id"];
	$produk_tipe=$_POST["produk_tipe"];
	
	if (!empty($_POST)) {
		
		$query = " SELECT * FROM produk WHERE category_id = '$category_id' and produk_tipe = '$produk_tipe'";
		
		$sql1 = mysql_query($query);
		
		$rows = array();
		while ($row = mysql_fetch_assoc($sql1)) {
			$rows[] = $row;
		}
		
		$data = "{produk :".json_encode($rows)."}";
		echo $data;
	}
	
	mysql_close();
?>