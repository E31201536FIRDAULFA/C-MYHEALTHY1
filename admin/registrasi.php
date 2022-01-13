<?php

// menghubungkan php dengan koneksi database
include 'koneksi.php';

error_reporting(0);

 if(isset($_POST['submit'])){
    $Username = mysqli_real_escape_string($conn, trim($_POST['Username']));
    $Password = mysqli_real_escape_string($conn, trim($_POST['Password']));
    $CPassword = mysqli_real_escape_string($conn, trim($_POST['CPassword']));
    $level = mysqli_real_escape_string($conn, trim($_POST['level']));

  if($Password != $CPassword){
    header('location: index.php?konfirmasipassword-field');

    }else{

      try {
        $sql='insert into user(Username, Password, level) values("'.$Username.'", "'.$Password.'", "'.$level.'")';
          mysqli_query($conn, $sql);
          header('location: login.php');
          echo "<script>alert('Berhasil Register')</script>";
      } catch (Exception $e) {
        print_r($e->getMessage());
      }
          
        
    }
  }


 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C-Myhealthy | Registrasi Akun</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">

    <script type="text/javascript">
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <span><div class="collapse navbar-collapse" id="navbarNav"></span>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <script type="text/javascript">        
    function tampilkanwaktu(){            
    var waktu = new Date();             
    var sh = waktu.getHours() + "";    
    var sm = waktu.getMinutes() + "";      
    var ss = waktu.getSeconds() + "";  
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
    </script>

    <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
    <span id="clock"></span> 

    <?php
    $hari = date('l');
    /*$new = date('l, F d, Y', strtotime($Today));*/
    if ($hari=="Sunday") {
     echo "Minggu";
    }elseif ($hari=="Monday") {
     echo "Senin";
    }elseif ($hari=="Tuesday") {
     echo "Selasa";
    }elseif ($hari=="Wednesday") {
     echo "Rabu";
    }elseif ($hari=="Thursday") {
     echo("Kamis");
    }elseif ($hari=="Friday") {
     echo "Jum'at";
    }elseif ($hari=="Saturday") {
     echo "Sabtu";
    }
    ?>,

    <?php
    $tgl =date('d');
    echo $tgl;
    $bulan =date('F');
    if ($bulan=="January") {
     echo " Januari ";
    }elseif ($bulan=="February") {
     echo " Februari ";
    }elseif ($bulan=="March") {
     echo " Maret ";
    }elseif ($bulan=="April") {
     echo " April ";
    }elseif ($bulan=="May") {
     echo " Mei ";
    }elseif ($bulan=="June") {
     echo " Juni ";
    }elseif ($bulan=="July") {
     echo " Juli ";
    }elseif ($bulan=="August") {
     echo " Agustus ";
    }elseif ($bulan=="September") {
     echo " September ";
    }elseif ($bulan=="October") {
     echo " Oktober ";
    }elseif ($bulan=="November") {
     echo " November ";
    }elseif ($bulan=="December") {
     echo " Desember ";
    }
    $tahun=date('Y');
    echo $tahun;
    ?>
      </div>
      </ul>
    </div>
  </div>
</nav>
 <div class="panel_login">
  <p class="tulisan_atas"><b>Registrasi</b></p>

  <form action="" method="post">
   <label><b>Username</b></label>
   <input type="text" name="Username" class="form_login" placeholder="Silahkan Masukkan Username Anda" value="<?php echo $Username; ?>" required="required">

   <label><b>Password</b></label>
   <input type="password" name="Password" class="form_login" placeholder="Silahkan Masukkan Password Anda" value="<?php echo $_POST['Password']; ?>"required="required">

    <label><b>Confirm Password</b></label>
   <input type="password" name="CPassword" class="form_login" placeholder="Confirm Password" value="<?php echo $_POST['CPassword']; ?>"required="required">

   <label><b>Daftar Sebagai</b></label>
   <input type="text" name="level" class="form_login" placeholder="Pasien atau Petugas"value="<?php echo $level; ?>" required="required">

   <input name="submit" type="submit" class="tombol_login" value="REGISTER">

   <P class="login-register-text">Sudah Punya Akun? <a href="login.php">Login Disini.</a></P>

   <br/>
   <br/>
   
  </form>
  
 </div>
<marquee width="1700" height="40">| Silahkan Mendaftar Sebagai Petugas atau Pasien dengan Mengisi Data-data yang Sesuai | Apabila Anda Kebingungan Silahkan Meminta Anjuran Pengisian Kepada Petugas Layanan | Terimakasih Semoga Lekas Membaik.  </marquee>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>