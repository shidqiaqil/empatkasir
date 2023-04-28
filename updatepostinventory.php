<?php 
// koneksi database
include('connect.php');
$id = $_POST['id'];

$id_inven = $_POST['id_inven'];
$inven_name = $_POST['inven_name'];
$inven_quantity = $_POST['inven_quantity'];
$inven_unit = $_POST['inven_unit'];

 
// update data ke database
mysqli_query($con,"UPDATE inventory SET 
id = '$id',
id_inven='$id_inven', 
inven_name='$inven_name', 
inven_quantity='$inven_quantity',
inven_unit='$inven_unit'
WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>
	alert('Data berhasil di update');
	window.location.href='inputinventory.php';
	</script>" ;

?>