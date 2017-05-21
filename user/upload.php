<?php
include("config.php");

$id=$_POST['id'];

$dokumen=$_FILES['dokumen']['name'];
$size=$_FILES['dokumen']['size'];
$type=$_FILES['dokumen']['type'];
$temp=$_FILES['dokumen']['tmp_name'];
move_uploaded_file($temp,"../files/".$dokumen);

$update=mysql_query("update orders set order_upload = '$dokumen' where order_id = '$id'");

if($update) {
	header('location:invoice.php?id='.$id);
}
else {
	die(mysql_error());
}
?>