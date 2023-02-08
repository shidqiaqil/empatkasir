<?php
include('connect.php');
$id = $_GET['id'];
$id_product = $_GET['id_product'];
mysqli_query($con, "delete from ingredients where id='$id'");

echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='detailsingredient.php?id_product=$id_product';
	</script>";

// try {
// 	$sql = "DELETE FROM karyawan WHERE id_karyawan=".$_GET['id_karyawan'];
// 	$koneksi->query($sql);
// } catch (Exception $e) {
// 	echo $e;
// 	die();
// }
//   echo "<script>
// 	alert('Data berhasil di hapus');
// 	window.location.href='manageemployee.php';
// 	</script>";
?>