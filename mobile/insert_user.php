<?php
	include("config.php");
	
	$username=$_REQUEST['username'];
	$password=md5($_REQUEST['password']);
	$email=$_REQUEST['email'];
	$contact=$_REQUEST['contact'];
	$fullname=$_REQUEST['fullname'];
	
	$flag['code']=0;
	
	if(mysql_query("insert into users(username, password, nama_lengkap, email, phone_number, userid, userlevel, timestamp) values('$username', '$password', '$fullname', '$email', '$contact', '1', 1 ,1)"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>