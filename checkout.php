<?php
include('connect.php');
$date = date('Y-m-d H:i:s');

// $id_temp_transaction =  $_GET['id_temp_transaction'];
// $quantity_buy =  $_GET['quantity_buy'];

// $menu_price =  $_GET['menu_price'];
// $temp_creation_time_stamp =  $date;
$sql = mysqli_query($con, "INSERT INTO list_transaction (`id_temp_transaction`, `id_product`, `quantity_buy`, `menu_price`, `temp_creation_time_stamp`)
SELECT * FROM temp_transaction");

$sql0= mysqli_query($con, "SELECT inventory.id_inven ,ingredients.ingredient_name, ingredients.ingredient_quantity*temp_transaction.quantity_buy as jum FROM `ingredients` inner join temp_transaction on ingredients.id_product=temp_transaction.id_product left join inventory on ingredients.ingredient_name = inventory.inven_name");
while($data0 = mysqli_fetch_array($sql0)){
// $data0= mysqli_fetch_array($sql0);


 
// menangkap data yang di kirim dari form

$inven_id=$data0['id_inven'];
$inven_qty=$data0['jum'];
// echo "<br>";
//  echo $inven_id;
//  echo "<br>";
//  echo $inven_qty;
// update data ke database
$sql1 = mysqli_query($con,"update inventory set 
inven_quantity= inven_quantity - '$inven_qty' 
where id_inven='$inven_id'"); }
 
$sql2 = mysqli_query($con, "DELETE FROM `temp_transaction`");


echo "<script>alert('Pesanan Berhasil Checkout'); window.location.href='index.php'</script>";


?>