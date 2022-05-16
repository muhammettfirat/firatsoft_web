<!DOCTYPE html>
<html>
<head>
<title>FIRAT YAZILIM İletisim</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: auto;
  line-height: 1.8;
background: linear-gradient(45deg, #ee7752, #fc9ec2, #8dd9f5, #41ebc3);
	background-size: 500% 500%;
	animation: animeBG 3s ease infinite;
	animation-direction: alternate;
}


@keyframes animeBG {
    0% {background-position: 0%}
    100% {background-position: 100%}
}


/* Full height image header */

.w3-bar .w3-button {
  padding: 16px;
}
.w3-input{
 margin-top: 100px;
  margin: 10px 10px;
  padding: 10px 10px;
}

</style>
</head>
<body>
  
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3 w3-card" id="myNavbar" style="background: #fffbd5;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #b20a2c, #fffbd5);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #b20a2c, #fffbd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  ">
    <a href="#home" class="w3-bar-item w3-button w3-wide"style="font-family: 'Permanent Marker', cursive;">FIRAT YAZILIM</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Ana Sayfa</a>
     
      <a href="mail.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-store"> </i> FIRATSHOP</a>

    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="index.php" class="w3-bar-item w3-button">Ana Sayfa</a>
     
      <a href="mail.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-store"> </i> FIRATSHOP</a>a>
</nav>
<div class="w3-container  iletis" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">İletişim</h3>
  <p class="w3-center w3-large">Bizimle İletişime Geçin:</p>
  <div style="margin:2% 38%">
  <p><i class="fa fa-map-marker fa-fw w3-xlarge w3-margin-right"></i> Hacı Halil mahallesi 1212 sokak no: kat:6 deire:69 Gebze/Kocaeli</p>
    <p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: +02626438054</p>
    <p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: +905394023819</p>
    <p><i class="fa fa-envelope fa-fw w3-large w3-margin-right"> </i> Email: info@mfiratyazilim.net</p><br>
<form method="POST" >
      <p><input class="w3-input w3-border" type="text" placeholder="Ad Soyad"  name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="E-mail"  name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject"  name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit" name="Login">
          <i class="fa fa-paper-plane"></i> Mesaj Gönder
        </button>
      </p>  </form></div></div>
      <!-- Footer -->
      
      <footer class="w3-center w3-black w3-padding-24">

<div class="w3-xlarge w3-section">
<a href="https://www.facebook.com/profile.php?id=100078870971828"><i class="fab fa-facebook w3-hover-opacity"></i></a>  
<a href="https://www.instagram.com/firat.yazilim/"><i class="fab fa-instagram-square w3-hover-opacity"></i></a>
<a href="https://www.youtube.com/channel/UCnNMrmoUL6i6MbevNBDb0Mw"><i class="fab fa-youtube w3-hover-opacity"></i></a>

<a href="https://www.linkedin.com/company/firat-yazilim/?viewAsMember=true"><i class="fab fa-linkedin w3-hover-opacity"></i></a>
</div>
<p>	©2022 Powered by <a href="" title="FIRAT YAZILIM" target="_blank" class="w3-hover-text-green">FIRAT YAZILIM</a></p>
</footer>
  
    <?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require ('PHPMailer/Exception.php');
require ('PHPMailer/SMTP.php');
require ('PHPMailer/PHPMailer.php');
if(isset($_POST['Login']))
{
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $subject=$_POST['Subject'];
  $message=$_POST['Message'];
  $mail = new PHPMailer(true);
  
try {                 //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'firatyazilim41@gmail.com';                     //SMTP username
  $mail->Password   = 'muhammet1.';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       =465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('firatyazilim41@gmail.com', 'FIRAT YAZILIM');
  $mail->addAddress('firatyazilim41@gmail.com');     //Add a recipient


  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Bizimle iletisime Geciniz';
  $mail->Body    = "Name:$name <br> Email:$email <br> Subject:$subject <br> Message: $message";
 

  $mail->send();
  echo "<script>alert('Mesajınız İletildi')</script>";

} catch (Exception $e) {

  echo "<script>alert('Mesajınız İletilemedi. Mailer Error: {$mail->ErrorInfo}')</script>";
}
}
?>  
    </body>
</html>