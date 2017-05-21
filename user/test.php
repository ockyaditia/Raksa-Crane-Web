<?php
include("../include/session.php");
include("../root.php");

?>

<?php
	$get_product = "select * from orders where order_buyer_name='test123'";
	$run_product = mysql_query($get_product); 
	while ($row_products = mysql_fetch_array($run_product))
	{
$order_id = $row_products['order_id'];
$order_produk_id = $row_products['order_produk_id'];
$order_judul = $row_products['order_judul'];
$order_date = $row_products['order_date'];
$order_tipe = $row_products['order_tipe'];
$order_status = $row_products['order_status'];
$get_products = "select * from produk where produk_id='$order_produk_id'";
	$run_products = mysql_query($get_products); 
	while ($row_product = mysql_fetch_array($run_products))
	{
	 $time = $row_product['time'];
	 $produk_gambar = $row_product['produk_gambar'];
	}
  echo $order_judul;		
} 
?>




