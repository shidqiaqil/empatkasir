<?php
include('connect.php');
$id = $_GET['id'];

mysqli_query($con, "delete from inventory where id='$id'");

echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='inputinventory.php';
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