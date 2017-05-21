<?php
include("../../include/session.php");
?>

 <form action="" method="post" enctype="multipart/form-data">
					<div class="input-group">ID
                    <input type="text" class="form-control" name="conversation_id">
                    </div>
					<div class="input-group">username
                    <input type="text" class="form-control" name="msg_username">
                    </div>
					<div class="input-group">email
                    <input type="text" class="form-control" name="msg_email">
                    </div>
					<div class="input-group">content
                    <input type="text" class="form-control" name="msg_content">
					</div>
					
                    <div class="input-group-btn">
                      <button name="tambah_kategori" id="submit" type="submit" class="btn btn-default btn-outline" tabindex="-1">Tambahkan</button>
                    </div>
					</form>
					
<?php 
if(isset($_POST['tambah_kategori'])){
	
	 
		$conversation_id = $_POST['conversation_id'];
		$msg_date = date('d-m-Y');
		$msg_username = $_POST['msg_username'];
		$msg_email = $_POST['msg_email'];
		$msg_content = $_POST['msg_content'];
		$msg_status = 1;
		$time= substr(str_replace("+",":",str_replace("T"," ",date(DATE_ATOM))),0,18);
		
		$insert_posts = "insert into messages (conversation_id,msg_date,msg_username,msg_email,msg_content,msg_status,time) values ('$conversation_id','$msg_date','$msg_username','$msg_email','$msg_content','$msg_status','$time')";
		
		$run_posts = mysql_query($insert_posts); 
		
		
			
			echo "<script>alert('Kategori Berhasil Ditambahkan!')</script>";
			
		
		}
		
$conversation_id = 1;
$data = "SELECT * FROM messages WHERE conversation_id=$conversation_id ORDER BY Time ASC";
$result = mysql_query($data);
while ($row_products = mysql_fetch_array($result))
	{
	 $msg_username = $row_products['msg_username'];
	 $msg_email = $row_products['msg_email'];
	 $msg_content = $row_products['msg_content'];
	 $time = $row_products['time'];
	 
	}
	$req_user = trim('admin');
	$req_user_info = $database->getUserInfo($req_user);
?> 

<?php echo "".$req_user_info['email'].""; ?>