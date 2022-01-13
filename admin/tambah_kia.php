<form action="" method="POST">
<!doctype html>
<html lang="en" class="h-100">
<!-- Title -->
  <title>C-Myhealthy | Antrian Poli KIA</title>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="STYLE1.css">
</head>



<body id="page-top" class="h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand" href="#page-top"><b>POLI KIA/KB</a></b>
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
<br><br><br>
  <main class="flex-shrink-0">
    <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
        <i class="bi-info-circle text-success me-3 fs-3"></i>
        <div>
          Selamat Datang di <strong>C-Myhealthy</strong>. Silahkan isi data diri terlebih dahulu dan ambil nomor antreanmu sekarang.
        </div>
      </div>

        <div class="row gx-5">
        <!-- link halaman nomor antrian -->
        <div class="col-lg-6 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
              <div class="feature-icon-1 bg-success bg-gradient mb-4">
                <i class="bi-people"></i>
              </div>
              <table>
	<tr>
		<td><label for="nik">NIK</label></td>
		
		<td><input type="text" name="nik" class="resizedTextbox1" autofocus required></td>
	</tr>
	<tr>
		<td><label for="tanggal">TANGGAL</label></td>
		
		<td><input type="date" name="tanggal" class="resizedTextbox1" required></td>
	</tr>

	<tr>
		<td><label for="nama">NAMA</label></td>
		
		<td><input type="text" name="nama" class="resizedTextbox1" required></td>
	</tr>

		<tr>
		<td><label for="nama_poli">NAMA POLI</label></td>
		
		<td><input type="text" name="namapoli" class="resizedTextbox1" required ></td>
	</tr>
	<tr>
	<td colsplan=3><center><input type="submit" name="simpan" class="btn btn-success2 rounded-pill px-4 py-2" value=Simpan>
		</td>
     <td><a href="halaman_pasien.php" class="btn btn-success2 rounded-pill px-4 py-2">Batal</a></td>
		</td>
	</tr>
</table>
            </div>
          </div>
        </div>
        <!-- link halaman panggilan antrian -->
        <div class="col-lg-6 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
              <div class="feature-icon-1 bg-success bg-gradient mb-4">
                <i class="bi-people"></i>
              </div>
              <h3>Ambil Antrian</h3>
              <p class="mb-4">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p>
              <a href="nomor-antrian - kia" class="btn btn-success2 rounded-pill px-4 py-2">
                Got it <i class="bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </main>
    <?php
		if (isset($_POST['simpan']) ){
			include"koneksi.php";
			//echo"Tombol login terclick";
			$nik = $_POST['nik'];
			$nama	  = $_POST['nama'];
			$namapoli	  = $_POST['namapoli'];

			$cek_nik = mysqli_query($conn, "SELECT * FROM poli_kia WHERE NIK='$nik'");
			$row	  = mysqli_num_rows($cek_nik);
						
			if($row > 0){
				echo "<script>alert('NIK tersebut sudah digunakan');</script>";
			}else {
				$query_simpan = mysqli_query($conn, "INSERT INTO poli_kia(NIK, TANGGAL, NAMA, NAMA_POLI) VALUES('$nik', '$tanggal', '$nama', '$namapoli')");
				if(!$query_simpan){
					echo "<script>alert('Data gagal disimpan');document.location.href='tambah_kia.php';</script>";
				}else { 
					echo "<script>alert('Data berhasil disimpan');document.location.href='tambah_kia.php';</script>";
				}
			}
		}
				?>
</form>
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
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>