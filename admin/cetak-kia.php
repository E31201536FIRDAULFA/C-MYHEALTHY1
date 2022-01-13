<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Laporan</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" type="text/css" href="STYLE1.css">

</head>
<body id="page-top">
    <table class="user" align="center">
        <h1 class="judul" align="center">C-Myhealty</h1>
        <h2 class="judul" align="center">- Data Pasien Poli KIA/KB -</h2>
        <tr align="center">
            <th>NO.</th>
            <th>NIK</th>
            <th>TANGGAL</th>
            <th>NAMA</th>
            <th>NAMA POLI</th>
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
            
        </tr>
        <?php $nmr++;?>
        <?php endwhile; ?>

	<script>
		window.print();
	</script>
</table><br><br><br><br><br>
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

</body>
</html>