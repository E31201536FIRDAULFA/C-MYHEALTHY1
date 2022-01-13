<?php 
include "koneksi.php";
$NO = $_GET['NO'];
$sql_hapus = mysqli_query($conn, "DELETE FROM poli_kia WHERE NO='$NO'");
if(!$sql_hapus){
	echo"<script>alert('Proses Hapus Gagal');document.location.href='poli_kia.php';</script>";
}else {
	echo"<script>alert('Berhasil Menghapus Data');document.location.href='poli_kia.php';</script>";
}
?>