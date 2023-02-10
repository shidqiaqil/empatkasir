<?php
include('connect.php');
$date = date('Y-m-d H:i:s');

// $id_temp_transaction =  $_GET['id_temp_transaction'];
// $quantity_buy =  $_GET['quantity_buy'];

// $menu_price =  $_GET['menu_price'];
// $temp_creation_time_stamp =  $date;
$sql = mysqli_query($con, "INSERT INTO list_transaction (`id_temp_transaction`, `id_product`, `quantity_buy`, `menu_price`, `temp_creation_time_stamp`)
SELECT * FROM temp_transaction");

$sql1 = mysqli_query($con, "DELETE FROM `temp_transaction`");

echo "<script>alert('Pesanan Berhasil Checkout'); window.location.href='index.php'</script>";


?>