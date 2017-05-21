<?php
	include("config.php");
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$message=$_REQUEST['message'];
	$date=$_REQUEST['date'];
	
	$flag['code']=0;
	
	if(mysql_query("insert into messages(msg_date, conversation_id, msg_username, msg_email, msg_content, msg_status) values('$date', 3, '$name', '$email', '$message', 1)"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>