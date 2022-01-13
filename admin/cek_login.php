<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['Username'];
$password = $_POST['Password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM user WHERE Username='$username' and Password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="petugas"){

  // buat session login dan username
  $_SESSION['Username'] = $username;
  $_SESSION['level'] = "petugas";
  // alihkan ke halaman dashboard admin
  header("location:db_petugas.php");

 // cek jika user login sebagai pegawai
 }else if($data['level']=="pasien"){
  // buat session login dan username
  $_SESSION['Username'] = $username;
  $_SESSION['level'] = "pasien";
  // alihkan ke halaman dashboard pegawai
  header("location:halaman_pasien.php");

 }else{

  // alihkan ke halaman login kembali
  header("location:login.php?pesan=gagal");
 } 
}else{
 header("location:login.php?pesan=gagal");
}

?>