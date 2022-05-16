<!DOCTYPE html>
<html>
<head>
<title>FIRAT Shop</title>
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


/* Full height image header */

.w3-bar .w3-button {
  padding: 16px;
}
.w3-input{
 margin-top: 100px;
  margin: 10px 10px;
  padding: 10px 10px;
}
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;

  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.ana-kart {
	padding: 20px 20px;
	background: #fff;
	
}
.toplam {
	height: 400px;
	overflow: hidden;
	background:#fff;
	position: relative;
}
#resim-wrap1 {
	width: 500px;
	height: 300px;
}
#resim-wrap2 {
	width: 500px;
	height: 300px;
}
#resim-wrap3 {
	width: 500px;
	height: 300px;
}
#resim-wrap4 {
	width: 500px;
	height: 300px;
}
.govde {
	text-align: center;
}
.govde img {
	width: 100px;
	height: 70px;
	border:5px solid #ddd;
	margin:8px 2px;
	cursor: pointer;
	transition: 0.3s;
}
.govde img:hover {
	border-color: #ee7752;
}
.fiyat {
	position: absolute;
	top: 20px;
	right: 20px;
	color:  #ff6000;
	font-size: 34px;
}
.urun-bilgi {
	padding: 24px;
}
.urun-ismi {
	text-transform: uppercase;
	font-size: 25px;
  color: #537ecf;
}
.urun-aciklama {
	font-size: 17px;
	opacity: 1;
 
}
.buton {
  -webkit-transition-duration: .1s;
    -moz-transition-duration: .1s;
    transition-duration: .1s;
    -webkit-transition-property: background-color,border-color;
    -moz-transition-property: background-color,border-color;
    transition-property: background-color,border-color;
    background-color: #ff6000;
    white-space: nowrap;
    color: #fff;
    border: 0;
    border-radius: 5px;
    padding: 10px 16px;
    outline: 0;
    cursor: pointer;
    line-height: 1;
    display: inline-block;
    text-decoration: none;
}
.buton:hover {
	background: #333;
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
    <a href="index.php" class="w3-bar-item w3-button w3-wide"style="font-family: 'Permanent Marker', cursive;">FIRATSHOP</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Ana Sayfa</a>
     
      <a href="iletisim.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> İletisim</a>

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
     
      <a href="iletisim.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>İletisim</a>a>
</nav><br><br>

<div class="row">
  <div class="column" style="background-color:#bbb;">
    <h2>JBL C100SIUBLK Mikrofonlu Kulakiçi Kulaklık CT IE Siyah</h2>
  <div class="ana-kart">
		<div class="toplam">
			<img src="https://productimages.hepsiburada.net/s/1/550/9515753734194.jpg/format:webp" id="resim-wrap1" alt="">
			<div class="govde">
				<img src="https://productimages.hepsiburada.net/s/1/550/9515753701426.jpg/format:webp" onclick="change_img1(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/1/550/9515753734194.jpg/format:webp" onclick="change_img1(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/1/550/9515753766962.jpg/format:webp" onclick="change_img1(this)" alt="">
			</div>
			<div class="fiyat">179,00 TL
</div>
		</div>
		<div class="urun-bilgi">
			<div class="urun-ismi">JBL C100SIUBLK Mikrofonlu Kulakiçi Kulaklık CT IE Siyah</div>
			<div class="urun-aciklama">Ergonomik JBL Kulak İçi Kulaklık ile Rahata Kavuşun</div>
			<a href="https://www.hepsiburada.com/jbl-c100siublk-mikrofonlu-kulakici-kulaklik-ct-ie-siyah-p-HBV00000201EP?magaza=F%C4%B1ratShop" class="buton">Ürüne Git</a>
		</div>
	</div>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Everest KM-G77 X-Vayne  Gaming Oyuncu Klavye + Mouse Set</h2>
  <div class="ana-kart">
		<div class="toplam">
			<img src="https://productimages.hepsiburada.net/s/47/550/10920495251506.jpg/format:webp" id="resim-wrap2" alt="">
			<div class="govde">
				<img src="https://productimages.hepsiburada.net/s/47/550/10920495218738.jpg/format:webp" onclick="change_img2(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/47/550/10920495251506.jpg/format:webp" onclick="change_img2(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/47/550/10920495317042.jpg/format:webp" onclick="change_img2(this)" alt="">
			</div>
			<div class="fiyat">173,63 TL</div>
		</div>
		<div class="urun-bilgi">
			<div class="urun-ismi">Everest KM-G77 Gaming Oyuncu Klavye + Mouse Set</div>
			<div class="urun-aciklama">
Everest KM-G77 X-Vayne Siyah USB Gökkuşağı Zemin Aydınlatmalı Gaming Oyuncu Klavye + Mouse Set</div>
			<a href="https://www.hepsiburada.com/everest-km-g77-x-vayne-siyah-usb-gokkusagi-zemin-aydinlatmali-gaming-oyuncu-klavye-mouse-set-p-HBV000011CVLU?magaza=F%C4%B1ratShop" class="buton">Ürüne Git</a>
		</div>
	</div>
  </div>
</div>
<div class="row">
  <div class="column" style="background-color:#bbb;">
    <h2>Lenovo Thinkplus Livepods LP40S</h2>
  <div class="ana-kart">
		<div class="toplam">
			<img src="https://productimages.hepsiburada.net/s/182/550/110000147474763.jpg/format:webp" id="resim-wrap3" alt="">
			<div class="govde">
				<img src="https://productimages.hepsiburada.net/s/183/550/110000148297285.jpg/format:webp" onclick="change_img3(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/182/550/110000147474763.jpg/format:webp" onclick="change_img3(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/182/550/110000147474762.jpg/format:webp" onclick="change_img3(this)" alt="">
			</div>
			<div class="fiyat">369,00 TL
</div>
		</div>
		<div class="urun-bilgi">
			<div class="urun-ismi">Lenovo Thinkplus Livepods LP40S</div>
			<div class="urun-aciklama">Lenovo Explosion-LP40 gerçek kablosuz Bluetooth kulaklık:</div>
			<a href="https://www.hepsiburada.com/lenovo-thinkplus-livepods-lp40s-p-HBCV00001OYYXC?magaza=F%C4%B1ratShop" class="buton">Ürüne Git</a>
		</div>
	</div>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Everest KB-120 Sleek Gökkuşağı Aydınlatmalı Q Gaming Oyuncu Klavyesi</h2>
  <div class="ana-kart">
		<div class="toplam">
			<img src="https://productimages.hepsiburada.net/s/43/550/10765150715954.jpg/format:webp"  id="resim-wrap4" alt="">
			<div class="govde">
				<img src="https://productimages.hepsiburada.net/s/43/550/10765150683186.jpg/format:webp" onclick="change_img4(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/43/550/10765150715954.jpg/format:webp" onclick="change_img4(this)" alt="">
				<img src="https://productimages.hepsiburada.net/s/43/500/10765150748722.jpg" onclick="change_img4(this)" alt="">
			</div>
			<div class="fiyat">160,00 TL
</div>
		</div>
		<div class="urun-bilgi">
			<div class="urun-ismi">Everest KB-120 Sleek Siyah</div>
			<div class="urun-aciklama"> USB Gökkuşağı Aydınlatmalı Q Gaming Oyuncu Klavyesi</div>
			<a href="https://www.hepsiburada.com/everest-kb-120-sleek-siyah-usb-gokkusagi-aydinlatmali-q-gaming-oyuncu-klavyesi-p-HBV00000XEBO9?magaza=F%C4%B1ratShop" class="buton">Ürüne git</a>
		</div>
	</div>
  </div>
</div>
<script>
		var container1 = document.getElementById("resim-wrap1");
    function change_img1(image1) {
      container1.src = image1.src;
      
		}
  
	</script>
     <script>
	var container2 = document.getElementById("resim-wrap2");
    function change_img2(image2) {
    
      container2.src = image2.src;
		}
    
	</script>
  <script>
	var container3 = document.getElementById("resim-wrap3");
   
    function change_img3(image3) {
      
      container3.src = image3.src;
     
		}
   
	</script>
  <script>
	var container4 = document.getElementById("resim-wrap4");
    function change_img4(image4) {
      container4.src = image4.src;
		}
    
	</script>
<footer class="w3-center w3-black w3-padding-24">

  <div class="w3-xlarge w3-section">
 <a href="https://www.facebook.com/profile.php?id=100078870971828"><i class="fab fa-facebook w3-hover-opacity"></i></a>  
 <a href="https://www.instagram.com/firat.yazilim/"><i class="fab fa-instagram-square w3-hover-opacity"></i></a>
 <a href="https://www.youtube.com/channel/UCnNMrmoUL6i6MbevNBDb0Mw"><i class="fab fa-youtube w3-hover-opacity"></i></a>
  
 <a href="https://www.linkedin.com/company/firat-yazilim/?viewAsMember=true"><i class="fab fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>	©2022 Powered by <a href="https://www.mfiratyazilim.net/" title="FIRAT YAZILIM" target="_blank" class="w3-hover-text-green">FIRAT YAZILIM</a></p>
</footer>
 
    </body>
</html>