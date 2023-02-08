<?php
include('connect.php');
$date = date('Y-m-d H:i:s');
// $id = $_GET['id'];
// $id_product = $_GET['id_product'];
// // $name = $_POST['name'];
// $quantity_buy = $_GET['quantity_buy'];
// $menu_price = $_GET['menu_price'];

// echo $_GET['id_product'];
// echo $_GET['menu_price'];
// echo $quantity_buy;
$id_product =  $_GET['id_product'];
$quantity_buy =  1;
$menu_price =  $_GET['menu_price'];
$temp_creation_time_stamp =  $date;




    //     $a=1;
    //     $sql = mysqli_query($con, "INSERT INTO temp_transaction 
    //                 (id_temp_transaction,id_product,quantity_buy ,menu_price,temp_creation_time_stamp) 
    //                 VALUES ('','".$_POST['id_product']."','".$a."','".$_POST['menu_price']."','".$date."')");
        
    // echo "<script>
	// alert('Berhasil dimasukkan keranjang');
	// window.location.href='index.php;
	// </script>";

    $jadwal	= mysqli_query($con, "INSERT INTO temp_transaction ( id_product, quantity_buy, menu_price, temp_creation_time_stamp) VALUES('$id_product','$quantity_buy','$menu_price','$temp_creation_time_stamp')");

    if($jadwal){
            echo "<script> alert('Pesanan Berhasil Ditambahkan');window.location.href='index.php'</script>";
        }else{
            echo "<script> alert('Pesanan Gagal Ditambahkan');window.location.href='index.php'</script>";
        }



?>




$jadwal	= mysql_query("INSERT INTO jadwal_lapangan(kode_jadwal, jam_mulai, jam_selesai) VALUES('$kode_jadwal','$jam_mulai','$jam_selesai')");

if($jadwal){
        echo "<script> alert('Data jadwal lapangan berhasil ditambahkan');window.location.href='admin.php?page=Data-Jadwal-Lapangan'</script>";
	}else{
		echo "<script> alert('Data jadwal lapangan gagal ditambahkan');window.location.href='admin.php?page=Data-Jadwal-Lapangan'</script>";
	}