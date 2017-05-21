<?php
	include("config.php");
	
	$order_id=$_REQUEST['order_id'];
	$angka1Convert=$_REQUEST['angka1Convert'];
	
	$flag['code']=0;
	
	if(mysql_query("update orders set order_jumlah_transfer = '$angka1Convert', order_upload = 'Mobile DP' WHERE order_id = '$order_id'"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>