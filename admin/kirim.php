<!-- Favicon icon -->
<link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['submit']))
{

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $nama                 = $_POST['nama'];
    $email                = $_POST['email'];
    $admin                = $_POST['admin'];
    $masalah              = $_POST['masalah'];

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'clickmyhealthycare@gmail.com';                     //SMTP username
    $mail->Password   = 'emailmilikcmyhealthy123';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('clickmyhealthycare@gmail.com    ', 'Keluhan Sistem');
    $mail->addAddress($email, $nama);     //Add a recipient

    $mail->addReplyTo('clickmyhealthycare@gmail.com', 'Keluhan Sistem');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Keluhan sistem dari Localhost ke Server';
    $mail->Body    = 'Halo Admin, Ada Keluhan Tentang Sistem, Atas Nama Pengirim '.$nama.' Email Pelapor '.$admin.' Dengan Alamat Email Tujuan '.$email.' Detail Permasalahan '.$masalah.'';

    if($mail->send())
    {
        echo"<script>alert('Formulir Anda Telah Terkirim, Silahkan Tunggu Balasan Dari Admin. Terimakasih!');document.location.href='cp.php';</script>";
    }
    else{
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    echo "tekan dulu tombolnya";
}
