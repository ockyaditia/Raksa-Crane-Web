<?php
include("../../include/session.php");
if(isset($_GET['del'])){
		
		$delete_id = $_GET['del'];
		
		
		$delete_post = "delete from categories where cat_id='$delete_id'";
		
		$run_delete = mysql_query($delete_post); 
		
		
		echo "
		<script>alert('Kategori Berhasil Dihapus!')</script> 
		<script>window.open('kategori.php','_self')</script>";
		
		
		
		
		
		
		
		
		
		
		}



?>