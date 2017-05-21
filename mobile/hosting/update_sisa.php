<?php
	include("config.php");
	
	$order_id=$_REQUEST['order_id'];
	$harga=$_REQUEST['harga'];
	
	$flag['code']=0;
	
	if(mysql_query("update orders set order_jumlah_transfer = '$harga', order_status = 'Success', order_upload = 'Mobile Sisa' WHERE order_id = '$order_id'"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>