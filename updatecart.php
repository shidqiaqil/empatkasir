<?php
include('connect.php');
$date = date('Y-m-d H:i:s');

$id_temp_transaction =  $_GET['id_temp_transaction'];
$quantity_buy =  $_GET['quantity_buy'];

// $menu_price =  $_GET['menu_price'];
// $temp_creation_time_stamp =  $date;
$sql2 = mysqli_query($con, "select product.menu_price from temp_transaction left join product on temp_transaction.id_product=product.id_product where id_temp_transaction='".$id_temp_transaction."' ");
$l = mysqli_fetch_array($sql2);

$menu_price =  $l['menu_price']*$quantity_buy;

// echo $id_temp_transaction;
// echo $quantity_buy;
// echo $menu_price;

    $updt	= mysqli_query($con, "UPDATE temp_transaction SET quantity_buy='$quantity_buy',menu_price='$menu_price' where id_temp_transaction='$id_temp_transaction'");

    if($updt){
            echo "<script> window.location.href='index.php'</script>";
        }else{
            echo "<script> window.location.href='index.php'</script>";
        }



?>