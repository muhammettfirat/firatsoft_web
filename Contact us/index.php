<!DOCTYPE html>
<html>
<head>
<title>FIRAT YAZILIM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
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
.neonText {
  color: black;
  text-shadow:
      0 0 7px #000,
      0 0 10px #000,
      0 0 21px #000,
      0 0 42px #f0a,
      0 0 82px #f0a,
      0 0 92px #f0a,
      0 0 102px #f0a,
      0 0 151px #f0a;
}

/* Full height image header */
.bgimg-1 {
  
  background-position: center;
  background-size: cover;

  background-image: url("laptop-5673901.jpg");
  filter: contrast(200%) brightness(150%);
filter: drop-shadow(8px 8px 10px gray);

  min-height: 80%;

}

.w3-bar .w3-button {
  padding: 16px;
}

.iletis{
  text-align: center;
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
      <a href="#about" class="w3-bar-item w3-button">Biz Kimiz</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Ekip</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Hizmetlerimiz</a>
     
      <a href="iletisim.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> İletişim</a>
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
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Biz Kimiz</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">Ekip</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Hizmetlerimiz</a>
  
  <a href="iletisim.php" onclick="w3_close()" class="w3-bar-item w3-button">İletişim</a>
  <a href="mail.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-store"> </i> FIRATSHOP</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white  neonText" style="text-align:center">
    <span class="w3-jumbo w3-hide-small">Bir Şeyler Yapmaya Şimdi Başla</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"  >Bir Şeyler Yapmaya Şimdi Başla </span><br>
    <span class="w3-large">Sektörde Söz Sahibi Olmak İçin Dijital Hizmetlerimizden Sizlerde Faydalanın</span>
    <p><a href="iletisim.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"  style="padding:28px">Daha Fazlası İçin...</a></p><br><br>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large  neonText" style="padding:24px 48px">
  <a href="https://www.facebook.com/profile.php?id=100078870971828"><i class="fab fa-facebook w3-hover-opacity"></i></a>  
 <a href="https://www.instagram.com/firat.yazilim/"><i class="fab fa-instagram-square w3-hover-opacity"></i></a>
 <a href="https://www.youtube.com/channel/UCnNMrmoUL6i6MbevNBDb0Mw"><i class="fab fa-youtube w3-hover-opacity"></i></a>
  
 <a href="https://www.linkedin.com/company/firat-yazilim/?viewAsMember=true"><i class="fab fa-linkedin w3-hover-opacity"></i></a>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Firmamız Hakkında</h3>
  <p class="w3-center w3-large">Firmamızın temel özellikleri</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Duyarlı</p>
      <p>Değişimleri Görüyor ve Hergün Güncelleniyoruz</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Tutkulu</p>
      <p>İşimizi Severek Yapıyoruz.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Yaratıcı</p>
      <p>Çözümlerimizde Yaratıcılığı Esas Alıyoruz.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Destekleyici</p>
      <p>Dijital Dönüşümde Her Anınızda Yanınızda Yer Alıyoruz</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-red" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h2>Sektörün İsteklerini Biliyoruz</h2><br>
      <p>Dijital Dönüşümde Teknolojiyi Yakından Takip Ediyor, Dönüşümün Bir Parçası Olmanıza Destek Sağlıyoruz.</p><br>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> Hizmetlerimize Göz At</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="cubes-2492010.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container " style="padding:128px 16px" id="team">
  <h3 class="w3-center">Ekip</h3>
  <p class="w3-center w3-large">Firmamızı Yönetenler</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col 12 m4 w3-margin-bottom  w3-gray">
      <div class="w3-card ">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Metehan FIRAT</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Yazılım Uzmanı,Kamu Yönetimi ve Siyasal Bilimci</p><br>
         
       
       

          

       
        </div>
      </div>
    </div>
    <div class="w3-col 12 m4 w3-margin-bottom  w3-gray">
      <div class="w3-card">
        <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Kübra AYAR</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Web Tasarım Uzmanı,Sosyolog,Çocuk Gelişim Eğitmeni</p><br>
         
        </div>
      </div>
    </div>
    <div class="w3-col 12 m4 w3-margin-bottom  w3-gray">
      <div class="w3-card">
        <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Muhammet FIRAT</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Yazılım Uzmanı,Mekatronik Mühendisi,Usta Öğretici</p><br>
        
        </div>
      </div>
    </div>
  
  </div>
</div>



<!-- Work Section -->
<div class="w3-container-red" style="padding:8px 16px" id="work">
  <h3 class="w3-center">Hizmetlerimiz</h3>
  <p class="w3-center w3-large">Sizin İçin Ne Yapabiliriz?</p>

  <div class="w3-row-padding w3-section w3-center" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="web-tas.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="Web Tasarım">
    <p>Web Tasarım ve Kodlama Süreçleriniz</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="yazilim.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="Yazılım">
      <p>Firma ve Kişi Yazılımları</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="seo.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="Seo Uyumlu İçerik">
      <p>Arama Motoru Optimizasyonu(Seo)</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="eticaret.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="E- Ticaret">
      <p>E-Ticaret ve Danışmanlığı</p>
    </div>
  </div>

  <div class="w3-row-padding w3-section w3-center">
    <div class="w3-col l3 m6">
     
      <img src="logo.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
      <p>Logo Ve Sosyal Medya İçerik Tasarımı</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="reklamy.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
      <p>Adsence Reklam Yönetimi</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="danişmanlik.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
      <p>Yazılım Danışmanlığı</p>
    </div>
    <div class="w3-col l3 m6">
      <img src="iletisim.png" style="width:30%;height:30%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
      <p>Sosyal Medya Yönetimi</p>
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-blue w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Yeteneklerimiz</h3>
      <p>Firmanıza özel yazılım çözümleri ile sizleri dijital ortamda kendinizi en iyi şekilde temsil etmenize yardımcı oluyoruz</p>
      <p>Yazılım danışmanlığı,E ticaret danışmanlığı ve Reklamlar sayesinde sizleri sektörde söz sahibi olmanız hususunda destek oluyoruz.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:70%">70%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:95%">95%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:65%">65%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Firma Yazılımları</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
    </div>
  </div>
</div>



<!-- Contact Section -->
<div class="w3-container  iletis" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">İletişim</h3>
  <p class="w3-center w3-large">Ofisimize Bekleriz:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xlarge w3-margin-right"></i> Hacı Halil mahallesi 1212 sokak no: kat:6 deire:69 Gebze/Kocaeli</p>
    <p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: +02626438054</p>
    <p><i class="fa fa-phone fa-fw w3-large w3-margin-right"></i> Phone: +905394023819</p>
    <p><i class="fa fa-envelope fa-fw w3-large w3-margin-right"> </i> Email: info@mfiratyazilim.net</p>
    <br>
    
    <!-- Image of location/map -->
    <img src="https://ucdn.tatilbudur.net/Otel/855x426/libiza-hotel_412992.jpg" class="w3-image w3-greyscale" style="width:50%;margin-top:48px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-24">

  <div class="w3-xlarge w3-section">
 <a href="https://www.facebook.com/profile.php?id=100078870971828"><i class="fab fa-facebook w3-hover-opacity"></i></a>  
 <a href="https://www.instagram.com/firat.yazilim/"><i class="fab fa-instagram-square w3-hover-opacity"></i></a>
 <a href="https://www.youtube.com/channel/UCnNMrmoUL6i6MbevNBDb0Mw"><i class="fab fa-youtube w3-hover-opacity"></i></a>
  
 <a href="https://www.linkedin.com/company/firat-yazilim/?viewAsMember=true"><i class="fab fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>	©2022 Powered by <a href="https://www.mfiratyazilim.net/" title="FIRAT YAZILIM" target="_blank" class="w3-hover-text-green">FIRAT YAZILIM</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>