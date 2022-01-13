 <!DOCTYPE html>
<html>
<head>
 <title>C-Myhealthy | Login Akun</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
    <script type="text/javascript">  
    </script>
</head> 

<body>
<br>
<br>
 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah ! Silahkan Cek Kembali</div>";
  }
 }
 ?>
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
 <br><br><br>
 <h1 align="center"> C-Myhealthy</h1>
 <div class="panel_login">
  <p class="tulisan_atas"><B>Silahkan Masuk</B></p>

  <form action="cek_login.php" method="post">
   <label><b>Username</b></label>
   <input type="text" name="Username" class="form_login" placeholder="Silahkan Masukkan Username Anda" required="required">

   <label><b>Password</b></label>
   <input type="password" name="Password" class="form_login" placeholder="Silahkan Masukkan Password Anda" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">
   <P class="login-register-text">Belum Punya Akun? <a href="registrasi.php">Register Disini.</a></P>

   <br/>
   <br/>
   
  </form>
  
 </div>
<marquee width="1700" height="40">| Selamat Datang | Silahkan Login Sebagai Petugas atau Pasien | Apabila Anda Kebingungan Silahkan Meminta Anjuran Pengisian Kepada Petugas Layanan | Terimakasih Semoga Lekas Membaik.  </marquee>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>