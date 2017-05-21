<?php

$i = '100.000';
$a = '21.000.000';

$i = filter_var($i,FILTER_SANITIZE_NUMBER_INT);
$a = filter_var($a,FILTER_SANITIZE_NUMBER_INT);


$total = $a - $i;

$total = number_format("$total",0,",",".");

echo $total;
?>

Pending, In Progress, Shipped, or Cancelled . 