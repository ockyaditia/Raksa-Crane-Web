<?php
	include("config.php");
	
	$title=$_REQUEST['title'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone_number=$_REQUEST['phone_number'];
	$content=$_REQUEST['content'];
	$username=$_REQUEST['username'];
	$date=$_REQUEST['date'];
	
	$flag['code']=0;
	
	if(mysql_query("insert into conversation(conversation_date, conversation_title, conversation_full_name, conversation_email, conversation_phone_number, conversation_content, conversation_status, conversation_read, username) values('$date', '$title', '$name', '$email', '$phone_number', '$content', 0, 1, '$username')"))
	{
		$flag['code']=1;
	}
	
	print(json_encode($flag));
	mysql_close($con);
?>