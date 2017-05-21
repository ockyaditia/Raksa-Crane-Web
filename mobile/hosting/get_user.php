<?php
	include("config.php");
	
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	
	if (!empty($_POST)) {
		if (empty($_POST['username'])) {
			$response["success"] = 0;
			$response["message"] = "Insert Your Username.";
			die(json_encode($response));
		}
		else if (empty($_POST['password'])) {
			$response["success"] = 1;
			$response["message"] = "Insert Your Password.";
			die(json_encode($response));
		}
		
		$query = " SELECT * FROM users WHERE username = '$username' and password = '$password'";
		
		$sql1 = mysql_query($query);
		$row = mysql_fetch_array($sql1);
		
		if (!empty($row)) {
			$response["success"] = 3;
			$response["message"] = "You Have Been Sucessfully Login.";
			$response["Email"] = $row['email'];
			$response["Fullname"] = $row['nama_lengkap'];
			$response["Address"] = $row['alamat_lengkap'];
			$response["Phone"] = $row['phone_number'];
			die(json_encode($response));
		}
		else {
			$response["success"] = 2;
			$response["message"] = "Invalid Username or Password.";
			die(json_encode($response));
		}
	}
	else {
		$response["success"] = 0;
		$response["message"] = "Insert Your Username and Password.";
		die(json_encode($response));
	}
	
	mysql_close();
?>