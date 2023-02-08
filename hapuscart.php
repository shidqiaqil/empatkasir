<?php
include('connect.php');
$id_temp_transaction = $_GET['id_temp_transaction'];
// $id_product = $_GET['id_product'];
mysqli_query($con, "delete from temp_transaction where id_temp_transaction='$id_temp_transaction'");

echo "<script>
	alert('Pesanan berhasil di hapus');
	window.location.href='index.php';
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