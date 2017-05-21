<?php
	include("config.php");
	
	$username=$_REQUEST['username'];
	$name=$_REQUEST['name'];
	$telpon=$_REQUEST['telpon'];
	$address=$_REQUEST['address'];
	
	$flag['code']=0;
	
	if(mysql_query("update users set nama_lengkap = '$name', alamat_lengkap = '$address', phone_number = '$telpon' WHERE username = '$username'"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>