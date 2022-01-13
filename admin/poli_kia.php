<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="STYLE1.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">

<title>C-Myhealthy | Poli KIA</title>

<br><br><br><br>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-5">Selamat Datang</h1>
        <p class="lead"> </p>
        <hr class="my-4">
        <p>Anda dapat mengolah data pasien sekarang !</p>
        <a class="btn btn-primary btn-lg" href="tambah_kia.php" role="button">Tambah Data</a>
        <a class="btn btn-primary btn-lg" href="cetak-kia.php" role="button">Cetak Laporan Data</a>
      </div>
    </div>
</head>
<body id="page-top" class="h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand" href="#page-top"><b>HALAMAN POLI KIA</a></b>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <span><div class="collapse navbar-collapse" id="navbarNav"></span>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="db_petugas.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cp.php">TENTANG KAMI</a>
        </li>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a class="btn btn-primary" href="logout.php">Log Out</a>
      </div>
      </ul>
    </div>
  </div>
</nav>
    <table class="user" align="center">
        <h1 class="judul" align="center">- DATA PASIEN -</h1>
        <tr>
            <th>NO.</th>
            <th>NIK</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>NAMA POLI</th>
            <th>OPSI</th>
        </tr>
 <?php
 include "koneksi.php";
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

$nmr = 1;
        $sql_data = mysqli_query($conn, "SELECT * FROM poli_kia");
        while($data = mysqli_fetch_assoc($sql_data) ) : ?>
        <tr>
            <td><?=$data['NO'];?></td>
            <td><?=$data['NIK'];?></td>
            <td><?=$data['TANGGAL'];?></td>
            <td><?=$data['NAMA'];?></td>
            <td><?=$data['NAMA_POLI'];?></td>
          <td>
            <a href="hapus-kia.php?NO  =<?=$data['NO'];?>" class="btn btn-danger" onclick="return confirm('yakin anda akan menghapus data ini?');">Hapus</a>
        </td>
        </tr>
        <?php $nmr++;?>
        <?php endwhile; ?>

<div class="container">
  <?php 
    $Variabel_satu = "Hi, Anda Login sebagai ";
    $variabel_dua = $_SESSION['Username'];
 
    echo $Variabel_satu;
    echo $variabel_dua;
 ?>
</div>
<br><br>

</table>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>C-Myhealthy</h3>
            <p>
              
              <strong>Phone:</strong> +62 81231946103<br>
              <strong>Email:</strong> ClickMyhealthycare@gmail.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2021 - <a href="" target="_blank" class="text-danger text-decoration-none">clickmyhealthy.com</a>. All rights reserved.
      </div>
    </div>
    </div>
  </footer>
  
        </div>
      </div>
    </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>