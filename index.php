<?php
session_start();
if (!isset($_SESSION['id_user'])) {
 header("location:login.php");
}
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--[if lt IE 9]> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<title>MATH-TER</title>
<meta name="description" content="">
<meta name="author" content="WebThemez">
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!--[if lte IE 8]>
		<script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
	<![endif]-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <liferay-ui:search-container-column-text name='vendor'
         cssClass="width-10"/>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i><img src="images/logo2.png" style='max-width:120px'/></i></b></a> </div>
        <div class="col-lg-9 col-sm-9 col-2">
          <marquee><font style="font-weight: 700; font-size:15px;">Materi Belajar Matematika Untuk Siswa Kelas 7 Sekolah Menengah Pertama</font></marquee></div>
        <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          <li><a href="#Features" class="scroll-link">Bab 1</a></li>
          <li><a href="#aboutUs" class="scroll-link">Bab 2</a></li>
          <li><a href="#work" class="scroll-link">Bab 3</a></li>
          <li><a href="#plans" class="scroll-link">Bab 4</a></li>
          <li><a href="#team" class="scroll-link">Bab 5</a></li>
          <li><a href="#study" class="scroll-link">Bab 6</a></li>
          <li><a href="pertanyaan.php" class="scroll-link">Ada pertanyaan?</a></li>
          <li><a href="logout.php" class="btn btn-info btn-lg">
            Log out
          </a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> 
  	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="images/foto20.png" alt="banner" /></div>
    <div class="item"><img src="images/foto1.jpeg" alt="banner" /></div>
    <div class="item"><img src="images/foto30.png" alt="banner" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div>
	
  </div>  
  
  <div class="container hero-text2">        
		<div class="col-md-12">
		<h2>MATH-TER</h1>
			<p>MATH-TER adalah sebuah website yang berisi rangkuman semua materi atau BAB yang diajarkan pada kelas 7 Sekolah Menengah Pertama (SMP).</p>   
		</div>  
		<div class="col-md-3">
		</div>
  </div>
</section>
<section id="Features" class="page-section colord">
  <div class="container">
    <div class="row"> 

          <div class="heading text-center"> 
      <!-- Heading -->
        <h2>Bilangan Bulat</h2>
        </div>

      <!-- item -->
      <div class="col-md-12 text-center">
	  <div class="box-item">
	  <i class="circle"> <img src="images/1.png" alt="" /></i>
    <text align="justify">
    <p>Matematika erat kaitannya denagn bilangan. Sobat Math-ter juga pasti sering mendengar istilah “bilangan”, kan? Terus, bilangan itu apa sih? Bilangan merupakan suatu konsep matematika yang memberikan nilai jumlah terhadap sesuatu yang dihitung. Oleh karena itu, bilanagn digunakan dalam pengukuran dan pencacahan.
      Bilangan ini juga punya simbol atau lambang lhoh! Simbol dari bilangan adalah angka. Contohnya, bilangan tujuh dilambangkan oleh angka “7”. 
      Bilangan sendiri memiliki banyakk macam, ada bilangan real, imajiner, kompleks, rasional, irasional, bulat, pecahan, cacah, asli, dan masih banyak lagi lhoh.
      Nah, pada artikel kali ini, kita akan fokus membahas bilangan bulat. Bilangan bulat itu seperti apa sih? So, tunggu apalagi? Yuk, simak artikel ini untuk mendapatkan jawabannya!
    </p></text><hr>
        <h3>Materi</h3>
        <p align="left"><b>Pengertian Bilangan Bulat</b><br>
        Sebelum kita lanjut lebih dalam, sobat Math-ter sudah tahu belum apa itu bilangan bulat? Kata “bulat” di sini yang pasti bukan merujuk pada bentuk visualnya ya, xixixi.
        Bilangan bulat merupakan kumpulan atau himpunan bilangan yang nilainya bulat. Bilangan bulat terdiri dari bilangan bulat negative, bilangan nol, dan bilangan bulat positif. Himpunan bilangan bulat dalam matamatika dilambangkan denagn simbol Z atau Zahlen yang berarti bilangan dalam bahasa Jerman]</b></p>
        
        <p align="center">
        <b>Jenis-Jenis Bilangan Bulat</b><br>
        </p>
        <text align="justify">
        <ol>
          <li><b>Bilangan Cacah</b></li>
          Bilangan cacah adalah himpunan bilangan yang terdiri dari bilangan nol dan bilangan bulat positif. 
            <br>
            Kata kunci: Bilangan cacah berisi bilangan yang nilainya “bukan negatif”. Lambang bilangan cacah adalah W atau Whole Number yang berarti himpunan bilangan cacah.
          <br>Contoh bilangan cacah: 0,1,2,3,4,5,6,7,8,9,10,...
          <br>
          <li><b>Bilangan Nol</b></li>
          Bilangan nol merupakan bilangan yang berarti kosong. Bilangan ini merupakan bagian dari himpunan bilangan cacah dan hanya terdiri dari satu angka saja, yaitu 0 (nol).
          <br>
          <li><b>Bilangan Asli</b></li>
          Bilangan asli sering disebut sebagai bilangan bulat positif karena semua bilangan dalam himpunan bilangan asli bernilai positif. Bilangan asli ini juga merupakan bagian dari bilangan cacah ya, Sobat Math-ter.
            <br>
            Kata kunci: Bilangan asli berisi bilangan yang nilainya pasti positif.
            Lambang bilangan asli adalah N atau Natural Number yang berarti himpunan bilangan asli.
            <br>
            Contoh bilangan asli:
            1,2,3,4,5,6,7,8,9,10,… 
            <br>
          <li><b>Bilangan Bulat Negatif</b></li>
          Seperti namanya, bilangan bulat negative adalah himpunan bilangan bulat yang bernilai negatif. Bilangan ini merupakan kebalikan dari bilangan asli.
          <br>
          Contoh bilangan bulat negatif:
          …,-7,-6,-5,-4,-3,-2,-1 
          <br>
          <li><b>Bilangan Ganjil</b></li>
          Bilangan ganjil adalah himpunan bilangan yang bukan kelipatan dua atau nilainya tidak habis jika dibagi 2.
<br>
Contoh bilangan ganjil:
1,3,5,7,9,… 
…,-9,-7,-5,-3,-1,1,3,5,7,9,… 
<br>
        <li><b>Bilangan Genap</b></li>
        Kebalikan dari bilangan ganjil, bilangan genap adalah himpunan bilangan yang habis jika dibagi 2.
<br>
Contoh biilangan genap:
…,-8,-6,-4,-2,2,4,6,8,… 
          <br>
          <li><b>Bilangan Prima</b></li>
          Bilangan prima merupakan himpunan bilangan yang lebih besar dari 1 dan hanya habis jika dibagi 1 dan bilangan itu sendiri.
<br>
Contoh bilangan prima:
2,3,5,7,11,13,… 
          <br>
          <li><b>Bilangan Komposit</b></li>
          Bilangan komposit adalah bilangan yang lebih dari 1 dan bukan termasuk bilangan prima.
<br>
Contoh bilangan komposit:
4,6,8,9,10,12,14,… 
          </text></ol>
          <hr>
        <text align="center"><b>Membandingkan Bilangan Bulat</b></text>
        <br>
        <p>Seperti yang Sobat Math-ter ketahui, bilangan bulat terdiri dari bilangan negatif, bilangan nol, dan bilangan positif. Untuk memebandingkan bilangan bulat, kita perlu melihat kedudukan bilangannya dengan garis bilangan. Untuk bilangan positif, semakin besar bilangannya, maka nilai dari bilangan tersebut semakin besar. Sedangkan jika semakin kecil bilangannya, maka nilai dari bilangan tersebut semakin kecil.
Untuk bilangan negatif, semakin besar bilangannya, maka nilainya semakin kecil. Berlaku sebaliknya, semakin kecil bilangannya, maka nilainya semakin besar.
<br><b>Kata kunci:</b> ditinjau dari garis bilangan, bilangan yang menuju ke arah kanan nilainya lebih besar daripada bilangan yang menuju ke arah kiri
Contoh: <br>
7 > 4 <br>
-5 < -1
<br>
</text>
<hr>
        <text align="left"><b>Operasi Hitung Bilangan Bulat</b></text><br>
        <ol>
          <li>Operasi Penjumlahan dan Pengurangan Bilangan Bulat</li>
          <p align="left">
          Pada operasi penjumlahan dan pengurangan bilangan bulat, Sobat Math-ter perlu mengetahui rumus berikut!
<br>
Salju : Sama, Jumlah <br>
Beku : Beda, Kurang
<br>
Sama dan Beda dalam kata kunci tersebut menyatakan kedudukan bilangan. Apakah bilangan yang dioperasikan sama-sama positif atau sama-sama negatif atau berbeda, negatif dan positif. 
<br>
<br>
Contoh operasi penjumlahan: <br>
7+3=10 (tanda bilangan sama, jumlahkan) <br>
-3+(-2)=-5 (tanda bilangan sama, jumlahkan) <br>
-3+7=4 (tanda beda, kurangkan) <br>
-5+4=-1 (tanda beda, kurangkan) <br>
<br>
Pada dua contoh terakhir, jawaban bernilai negatif atau positif bergantung pada bilangan mana yang nilainya lebih besar, dengan mengabaikan tandanya. Dalam soal di atas, 7>3 sehingga jawaban mengikuti tanda dari angka 7, yaitu positif. Sedangkan di soal terakhir, 5>4 sehingga tanda mengikuti angka 5, yaitu negatif.
<br>
Pada operasi pengurangan, sedikit berbeda. Sobat Math-ter perlu mengubah semua operasi ke bentuk penjumlahan untuk bisa menggunakan rumus salju dan beku di atas.
<br>
<br>
Contoh operasi pengurangan: <br>
5-4=5+(-4)=1 (tanda beda, kurangkan) <br>    
-3-5=-3+(-5)=-8 (tanda sama, jumlahkan) <br>
<br></p>
<li>Operasi Perkalian dan Pembagian Bilangan Bulat</li>
<p align="left">
Pada operasi perkalian dan pembagian, Sobat Math-ter hanya perlu mengalikan atau membagi bilangan seperti biasa. Terus apa bedanya? Pada operasi kali ini, Sobat Math-ter hanya perlu memperhatikan tanda dari bilangan yang dioperasikan dengan rumus berikut.
<br>
(+)×(+)=(+)<br>                                      (+)÷(+)=(+) <br> 
(+)×(-)=(-)          <br>                            (+)÷(-)=(-) <br> 
(-)×(+)=(-)     <br>                                 (-)÷(+)=(-) <br> 
(-)×(-)=(+)               <br>                       (-)÷(-)=(+) <br> 

Dari rumus di atas, di dapatkan kata kunci, yaitu jika tanda bilangan berbeda, maka tanda bilangan pada jawaban adalah negatif, sedangkan jika tanda bilangan sama, maka tanda bilangan pada jawaban adalah positif.
<br>
<br>
Contoh operasi: <br>
5×2=10 <br>
-3×7=21 <br>
4÷(-2)=-2 <br>
-9÷(-3)=3 <br> 
<br></p>
<p align="left"><b>Faktor Bilangan Bulat</b>
<b>Faktor dari suatu bilangan</b> adalalah bilangan-bilangan tertentu yang dapat membagi habis suatu bilangan.
<br>
Contoh:<br>
Faktor dari 12 dalah 1,2,3,4,6,12,-1,-2,-3,-4,-6,-12<br>
<br>
<b>Pasangan faktor dari suatu bilangan</b> adalah pasangan bilangan yang jika dikalikan akan menghasilkan bilangan tertentu.
<br>
Contoh: <br>
Pasangan faktor dari 12 adalah (1,12),(2,6),(3,4),(-1,-12),(-2,-6),(-3,-4) <br>
<br>
<br>
<b>Faktorisasi prima</b> adalah bentuk penulisan suatu bilangan sebagai perkalian dari faktor yang merupakan bilangan prima.
<br>
Contoh: <br>
Faktorisasi prima dari 12 adalah ….
<br>
<p align="left"><b>Menentukan faktorisasi prima dapat menggunakan pohon factor.</b><br>
<b>Pohon faktor</b> adalah pembagian suatu bilangan yang digambarkan ke bawah denagn menyatakan pembagian sebagai perkalian dari bilangan prima.
<br>
Langkah-langkah dalam menentukan faktorisasi oerima suatu bilangan denagn pohon faktor:
<ol>
  <li>Bagilah bilangan tersebut denagn bilangan prima terkecil, yaitu 2.</li>
  <li>Jika bilangan tersebut tidak dapat dibagi oleh 2, maka lanjutkan membagi bilangan tersebut dengan bilangan prima selanjutnya, yaitu 3,5,7, dan seterusnya.</li>
  <li>Perlu diingat bahwa bilangan prima yang digunakan harus dimulai dari yang terkecil dan berhenti di bilangan prima terbesar. </li>
          </ol>
          <br>
          <p align="left">
          Berdasarkan pohon factor di bawah, dapat disimpulkan bahwa faktorisasi prima dari 12=2×2×3.<br></p>
          <br>
          <br>
          <p align="center"><b>Faktor Persekutuan terbesar (FPB) dan Kelipatan Persekutuan terkecil (KPK)</p></b>
        <p align="left">
        <b>Faktor persekutuan dari dua bilanga atau lebih</b> adalah faktor-faktor yang sama dari dua bilangan atau lebih tersebut.
<br>
Contoh :<br>
Faktor dari 6 adalah 1,2,3,6. Faktor dari 15 adalah 1,3,5,15.<br>
Faktor perekutuan dari 6 dan 15 adalah 1,3.
<br>
<br>
<b>Faktor persekutuan terbesar (FPB) </b> adalah faktor persekutuan yang nilainya terbesar diantara faktor-faktor persekutuan lainnya.
<br>
Contoh : <br>
<b>Cara 1: mendaftar faktor persekutuan</b>
Faktor dari 6 adalah 1,2,3,6. <br>
Faktor dari 15 adalah 1,3,5,15. <br>
Faktor perekutuan dari 6 dan 15 adalah 1,3. <br>
FPB(6,15)=3 <br>
<b>Cara 2: menggunakan faktorisasi prima</b><br>
6=2×3 <br>
15=3×5 <br>
FPB(6,15)=3 <br> 
<br>
<b>Kelipatan suatu bilangan</b> adalah hasil perkalian bilangan itu denagn bilangan asli.
<br>
Contoh:<br>
Kelipatan 6 adalah 6,12,18,24,30,36,….<br>
<br>
<b>Kelipatan persekutuan dari dua bilangan atau lebih</b> adalah kelipatan dari suatu bilangan yang sama denagn kelipayan bilangan lainnya.
<br>
Contoh : <br>
Kelipatan 6 adalah 6,12,18,24,30,36,42,48,54,60,…. <br>
Kelipatan 15 adalah 15,30,45,60,75,…. <br>
Kelipatan persekutuan 6 dan 15 adalah 30,60,…. <br>
<br>
<b>Kelipatan persekutuan terkecil (KPK)</b> adalah bilangan kelipatan terkecil yang sama dari banyaknya kelipatan suatu bilanga tertentu.
<br>
Contoh :<br>
<b>Cara 1: mendaftar kelipatan</b><br>
Kelipatan 6 adalah 6,12,18,24,30,36,42,48,54,60,….<br>
Kelipatan 15 adalah 15,30,45,60,75,….<br>
KPK(6,15)=30 <br>
<b>Cara 2: menggunakan faktorisasi prima</b><br>
6=2×3 <br>
15=3×5 <br>
KPK(6,15)=2×3×5=30 <br>
        </p>
          </p>
</p>
        <h3>Contoh Soal</h3>
        <p align="justify">
          <ol type="1">
        <li>Perubahan cuaca ektrem menyebabkan perubahan suhu yang cukup drastis di Kota A pada waktu tertentu.  
            <ol type="a">
              <li>Jika suhu saat ini adalah 0 derajat Celcius, berapa suhu lima jam kemudian jika tiap jamnya suhu bertambah 3 derejat Celcius?</li>
              <li>Jika suhu saat ini adalah 0 derajat Celcius, berapa suhu tiga jam kemudian jika tiap jamnya terjadi penurunan suhu sebanyak 2 derajat Celcius?</li>
      </ol>
      <br>
      <li>Pada hari kasih sayang, suatu restoran membagikan coklat gratis kepada setiap pelanggan ke-28 dan sepotong kue untuk setiap pelanggan ke-40. Pada hari itu, terdapat 1.400 pelanggan yang dating ke restoran tersebut. Berapa banyak orang yang menerima coklat dan kue gratis tersebut?</li>
          </ol>
        </p>

            <h3>Pembahasan</h3>
            <p align="justify">
              <ol type="1">
                <li>Perubahan cuaca ekstrem menyebabkan perubahan suhu yang cukup drastis di kota A pada waktu tertentu:</li>
                <ol type="a">
                  <li>Suhu 5 jam kemudian adalah 0 derajat Celcius + (5 x 3 derajat Celcius) = 0 derejat Celcius + 15 derejat Celcius = 15 derejat Celcius.</li>
                  <li>Suhu 3 jam kemudian adalah 0 derejat Celcius - (3 x 2 derajat Celcius) = 0 derajat Celcius - 6 derajat Celcius = -6 derajat Celcius.</li>
          </ol>
          <br>
                    <li>Banyak orang yang menerima coklat dan kue gratis = pelanggan yang menerima coklat gratis + pelanggan yang menerima kue gratis = (1.400:28) + (1.400:40) = 50+35 = 85.</li>
          </ol>
          <br>
          <p align="center">
        <a href="bab1.html" class="btn">Latihan Soal</a>
          </p>
        <br>
      </div>
	   </div>
      <!-- end: --> 
  <!--/.container--> 
</section>
<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 

      <!-- Heading -->
      
      <h2>Bilangan Rasional</h2>
    </div>
    <div class="row feature design">
      <div class="area1 columns left">
      <p>Halo Sobat Math-ter! Setelah mempelajari tentang bilangan bulat, kali ini kita akan membahas tentang bilangan rasional. Hah? Bilangan rasional? Iya! Bilangan rasional. Sobat Math-ter sering menemukan salah satu contoh bilangan rasional ini lhoh. Sobat Math-ter bisa cek gawai kalian, kecepatan internet kalian berapa Mbps?
Selain itu, Sobat Math-ter pasti pernah kan dicek suhu tubuhnya menggunakan termometer? Ada angka berapa tuh?
Xixixi, terus apa hubungannya? Eitss, dari pada Sobat Math-ter makin penasaran, mari simak artikel tentang bilangan rasional ini dengan seksama ya!
          </p>
        <h3>Materi</h3>
        <p align="justify">
        <p><b>Pengertian Bilangan Bulat</b>
        <p>Bilangan rasional berbeda dengan bilangan bulat. Ambil bilangan a dan b yang keduanya merupakan bilang bulat dan b≠0, maka semua bilangan yang dapat dinyatakan dalam a/b disebut sebagai bilangan rasional. </p>
        <p align="justify">
        <p><b>Menyatakan Bilangan Rasional dalam Bentuk Pecahan dan Desimal</b>
        <p>Sobat Math-ter, coba nyatakan -0,5 dalam bentuk a/b ! Bisa jadi ada yang menuliskan -1/2,(-1)/2, atau 1/(-2) atau bentuk lain yang ekuivalen. Nah, ketiga penulisan tersebut berbeda, tetapi menyatakan bilangan rasional yang sama. Sebuah bilangan rasional dapat dinyatakan dengan banyakk cara penulisan a/b.<br>
          Bilangan rasional dapat dinyatakan dalam bentuk desimal. Di sekolah dasar, Sobat Math-ter telah mempelajari bilangan rasional dalam bentuk pecahan dan desimal yang bernilai positif. Kali ini, Sobat Math-ter juga akan mempelajari bilangan rasional yang bernilai negatif.
            <br>
          <p>Selain bilangan rasional, terdapat bilangan irasional. Sebagai contoh, bilangan√2,π, dan e. Ketiga bilangan tersebut merupakan bilangan irasional karena tidak dapat dinyatakan dalam pembagian bilangan bulat a/b dengan b≠0. </p>
          <p align="justify">
            <b>Operasi Hitung Bilangan Rasional</b>
            <p><ol>
              <li>Operasi Penjumlahan dan Pengurangan Bilangan Rasional</li>
              <p>Operasi penjulahan  dan pengurangan bilangan rasional dapat dinyatakan dalam bentuk pecahan, desimal, maupun pecahan dan desimal. Namun untuk menghitungnya, Sobat Math-ter perlu menyamakan bentuknya terlebih dahulu agar mudah untuk dihitung.
            <br>
            Untuk operasi penjumlahan dan pengurangan bilangan rasional dengan menggunakan pecahan, Sobat Math-ter perlu menyamakan penyebutnya terlebih dahulu sebelum mengoperasikannya.
          <br>
          Untuk operasi penjumlahan dan pengurangan bilangan rasional dengan menggunakan desimal, Sobat Math-ter perlu menyamakan posisi koma bilangan pada operasi bersusun. Kemudian menghitungnya seperti pada operasi bilangan bulat.
        <br>
        <li>Operasi Perkalian dan Pembagian Bilangan Rasional</li>
        <p>  Seperti operasi penjumlahan dan pengurangan, operasi perkalian dan pembagian bilagan rasional juga dapat dinyatakan dalam bentuk pecahan, desimal, maupun pecahan dan desimal. Namun untuk menghitungnya, Sobat Math-ter perlu menyamakan bentuknya terlebih dahulu agar mudah untuk dihitung.
<br>
Untuk operasi perkalian bilagan rasional dengan menggunakan pecahan, Sobat Math-ter bisa langsung mengalikan pembilang dengan pembilang dan penyebut dengan penyebut. Berdeda dengan operasi pembagian bilagan rasional, Sobat Math-ter perlu menukar posisi pembilang dan penyebut bilangan rasional dibelakang tanda pembagian.
<br>
Untuk operasi perkalian dan pembagian bilangan rasional dengan menggunakan desimal, Sobat Math-ter perlu memperhatikan jumlah bilangan yang terletak di belakang tanda koma untuk menentukan jawabannya. Cara menghitungnya sama seperti pada operasi bilangan bulat.
<br>
        </p>
        </div>
      <div class="area2 columns feature-media right"> <img src="bab2/jenisbilangan.jpeg" alt="Gambar.1 Jenis Bilangan" width="100%"> 
      <br><img src="bab2/diagramvenn.jpeg" alt="Gambar.2 Diagram Venn" width="100%"></div>
    </div>
						<div class="col-md-12 col-sm-16">							
							<h3>Contoh Soal</h3>
                            <ol type="1">
								<li>Bu Lani memiliki usaha pembuatan es kul kul. Pada suatu ketika, Bu Lani memasarkan produknya pada acara bazar. Bu Lani membawa sejumlah stok es kul kul untuk dijual di acara tersebut selama tiga hari. Pada hari pertama, Bu Lani menjual 3/5 bagian dari stok es kul kul yang ada. Hari kedua, Bu Lani menjual 1/3 bagian dari sisa stok es kul kul di hari pertama. Pada hari ketiga, Bu Lani berhasil menjual semua stok yang ada.</li>
          <ol type="a">
                  <li>Berapa sisa stok es kul kul pada hari pertama?</li>
                  <li>Berapa bagian stok es kul kul yang di jual Bu Lani pada hari ketiga?</li>
          </ol>
          <br>
                <li>Umur Dini 1/4  umur Bagas. Umur Caca saat ini 0,75 kali umur Bagas. Umur Bagas sekarang adalah 24 tahun.</li>
                <ol type="a">
                  <li>Berapakah umur Dini saat ini?</li>
                  <li>Berapakah umur Caca saat ini?</li>
                  <li>Berapakah umur Bagas saat Dini lahir?</li>
          </ol>

          <h3>Pembahasan</h3>
          <ol type="1">
            <li>Pada hari ketiga, Bu Lani berhasil menjual semua stok yang ada</li>
            <ol type="a">
              <li>Kita menyatakan seluruh stok es kul-kul Bu Lani sebagai 1 bagian utuh, diperoleh 1 - 3/5 = 2/5 bagian.</li>
              <li>Kita perlu menghitung bagian yang terjual di hari kedua terlebih dahulu adalah 1/3 : 2/5 = 1/3 x 5/2 = 5/6 bagian. Kemudian diperoleh bahwa pada hari kedua, Bu Lani berhasil menjual 5/6  bagian dari seluruh stok es kul kul yang di bawa. Maka, kita dapat menghitung stok es kul kul yang terjual pada hari ketiga, yaitu: 1 - 5/6 = 1/6 bagian.</li>
          </ol>
          <li>Umur Dini 1/4  umur Bagas. Umur Caca saat ini 0,75 kali umur Bagas. Umur Bagas sekarang adalah 24 tahun.</li>
          <ol type="a">
            <li>Diketahui bahwa umur Bagas saat ini adalah 24 tahun. Umur Dini = 1/4 x umur bagas = 1/4 x 24 = 6 tahun.</li>
            <li>Diketahui bahwa umur Bagas saat ini adalah 24 tahun. Umur Caca = 0,75 x umur bagas = 0,75 x 24 = 18 tahun.</li>
            <li>Diketahui 	bahwa saat ini umur Bagas adalah 24 tahun dan umur Dini 6 tahun.
24-6=18 tahun.</li>
          </ol>
      </ol>
              <a href="bab2.html" class="btn">Latihan Soal</a>                            
							<!-- Accordion starts -->
							</div>
					</div>
  </div>
</section> 
<section id="work" class="page-section page">
  <div class="container text-center">
    <div class="heading">
      <h2>Rasio</h2>
      </div>
      <p align="justify">
      Hmm, Sobat Math-ter pernah tidak minum susu coklat yang rasanya terlalu manis? Atau pernah minum susu coklat yang rasanya sangat pahit? Kok bisa ya? Padahal keduanya sama-sama susu coklat. Kira-kira, apa yang membuat rasanya bisa berbeda seperti itu ya? Mungkin mayoritas dari Sobat Math-ter setuju bahwa yang membedakan adalah perbandingan susu dan coklatnya.
<br>
<br>
Lalu apakah Sobat Math-ter pernah mengamati foto dengan lukisan yang gambarnya sama? Walaupun ukurannya berbeda, tetapi kedua gambar itu tetap terlihat pas dan seolah hanya berbeda ukuran saja kan?
<br>
<br>
Nah, apakah Sobat Math-ter sudah dapat menebak apa yang akan kita bahas kali ini? Yap, betul sekali! Kali ini kita akan mempelajari terkait bagaimana rasio atau perbandingan dua besaran, dapat digunakan untuk menyelesaikan berbagai masalah, seperti menentukan ukuran lukisan jika diketahui ukuran foto dan komposisi susu dan coklat untuk menentukan rasa susu coklat yang diinginkan.
          </p>
          <hr>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active">Materi</a> </li></ul>
            <br>
            <p align="justify">
              <u><b>Konsep Rasio</u></b>
              <br>
              Sebagai contoh, perbandingan komposisi susu dan coklat dari keseluruhan gelas dapat ditulis sebagai pecahan. Pecahan menyatakan berapa banyak bagian dari keseluruhan.
Misalnya, kita akan membandingkan banyak gelas berisi susu denagn banyak gelas berisi coklat, yaitu 4 : 6 yang disederhanakan menjadi 2 : 3. Perlu diperhatikan bahwa tanda (:) bukan berarti pembagian.
Perbandingan banyak gelas berisi susu terhadap banyak gelas berisi coklat disebut sebagai rasio.
<br>
<br>
<b>Rasio</b> merupakan perbandingan dua besaran, dapat berupak ukuran atau jumlah benda.
<br>
Rasio dapat dituliskan sebagai berikut:
<br>
a : b
<br>
Rasio dapat dituliskan dalam bentuk yang paling sederhana, artinya perbandingan dibuat sekecil mungkin. 
<br>
Contoh 3 : 9 = 1 : 3.
          </p>
            <br>
            <p align="left"><u><b>Skala</b></u>
            <br>
            Skala berkaitan dengan perbesaran atau pengecilan suatu ukuran, tetapi tidak mengubah bentuknya. Hal ini dapat dilakukan dengan menggunakan rasio yang sama.
Rasio yang ekuivalen, apakah memperbesar atau memperkecil, akan menghasilkan bentuk yang proporsional.

Dua rasio dikatakan ekuivalen jika nilai kedua rasio tersebut adalah sama. 
<br>
a : b = c : d
<br>
Skala menggunakan rasio yang memperkecil ukuran di mana jarak sebenarnya diwakili oleh jarak pada peta.
          </p>
          <hr>
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active">Contoh Soal</a> </li></ul>
            <p align="justify">
              <ol>
                <li>Pak Gito memiliki 6 ekor kelinci. Suatu hari Pak Gito meminta tolong pada Rendi untuk memberi makan kelinci. Pak Gito mengatakan bahwa satu kelinci cukup diberi 54 gram makanan. Berapa banyak makanan yang diperlukan oleh 6 kelinci?</li>
                <li>Tabel penggunaan bahan bakar dan jarak tempuh oleh empat jenis mobil yang sama, tetapi merek berbeda diberikan di bawah ini.<br><img src="bab3/tabellatsol2.png">
            <br>
            <br>
          </p>
          </hr>
            <div class="row">
      <div class="col-md-12">
        <div id="portfolio">
          <ul class="filters list-inline">
            <li> <a class="active">Pembahasan</a> </li></ul>
            <p align="justify">
              <ol type="1">
                <li>1 kelinci menjadi 6 kelinci artinya perbesaran 6 kali. Jadi, banyak makanan juga menjadi 6 kali, yaitu 324 gram.</li>
                <br>
                <li>Mobil A = 10 : 140 = 1 : 14<br>
Mobil B = 15 : 165 = 1 : 11<br>
Mobil C = 20 : 195 = 1 : 9,75<br>
Mobil D = 25 : 325 = 1 : 13<br>
Jadi, mobil yang menggunakan bahan bakar paling efisien adalah mobil C.</li>
          </ol>
          </p>
<br>
<p>
          </ol>
            <a href="bab3.html" class="btn">Latihan Soal</a>
          </ul>
          </p>
          <ul class="items list-unstyled clearfix animated fadeInRight showing" data-animation="fadeInRight" style="position: relative; height: 438px;">
            <li class="item branding" style="position: absolute; left: 0px; top: 0px;"> 
			  </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="plans" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Bentuk Aljabar</h2>
    </div>
    <div class="row flat">
  <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">
    <ul class="plan plan1">
      <li class="plan-name2">
      <p align="justify">Sobat Math-ter pernah dengar istilah aljabar tidak? Aljabar itu adalah salah satu cabang ilmu matematik yang menggunakan symbol dan operasi matematika (penjumlahan, pengurangan, perkalian, dan pembagian) untuk pemecahan masalah. Aljabar berasal dari Bahasa Arab, Al-Jabr yang artinya melengkapi. Penemu aljabar ini merupakan cendekiawan muslim bernama Al-Khawarizmi.
      Aljabar tidak hanya diterapkan dalam matematika saja, tetapi diterapkan di berbagai bidang juga lhoh, Sobat Math-ter! Antara lain seperti kimia, biologi, ekonomi, dan lain sebagainya. Nah, untuk mengetahui informasi lebih lanjut mengenai aljabar, simak baik-baik artikel kali ini ya!
          </p>
          </ul></ul></div>
          <div class="row flat">
  <div class="col-lg-6 col-md-6 col-sm-9 col-xs-15">
    <ul class="plan plan1">
      <li class="plan-name">Materi</li>
      <p align="justify"><b>Unsur-unsur Bentuk Aljabar</b></p>
      <p align="justify">Bentuk aljabar merupakan ekspresi matematika yang menggunakan huruf. Mari kita mengamati unsur-unsur pada bentuk aljabar 1 + 3n.</p>
      <img src="bab4/gambar1.png">
      <br>
      <p align="justify">Suku adalah bilangan, variabel, atau campuran perkalian bilangan dan variabel yang dipisahkan oleh operasi penjumlahan dan pengurangan.
      <br>Konstanta adalah bilangan yang nilainya tetap.
      <br>Koefisien adalah bilangan yang menyatakan factor pengali dari suatu variabel.
      <br>Variabel adalah suatu huruf atau simbol yang digunakan untuk menyatakan suatu kuantitas yang berubah-ubah atau kuantitas yang tidak diketahui. 
                </p>
          <hr>
        <p align="justify"><b>Sifat-sifat dan Operasi Aljabar</b></p>
        <p align="justify">Ada banyak cara untuk menuliskan bentuk aljabar untuk menyatakan konteks yang sama. Kalian juga dapat melakukan substitusi nilai ke variabel pada setiap bentuk aljabar dan membandingkan nilai dari bentuk aljabar yang diperoleh. Jika nilainya sama maka dapat disimpulkan mereka mempunyai bentuk aljabar yang ekuivalen.
        <br>Metode substitusi adalah metode yang bersifat uji coba untuk mengecek ekuivalensi bentuk aljabar.
        <br>Bentuk aljabar juga mempunyai sifat-sifat dan operasi yang sama dengan sifat-sifat dan operasi bilangan. 
                  </p>
        <p align="justify"><b>Sifat Distributif:</b>
        <p align="justify">Sifat distributif memiliki aturan berikut ini:
          <br>
          a(b + c)	= a x b + a x c = ab + ac <br>
          a(b – c)	= a x b – a x c = ab – ac <br>
          Bentuk faktor adalah a(b + c) dan a(b – c). Sedangkan bentuk jabaran adalah ab + ac dan ab – ac. <br>
          Setelah menggunakan sifat distributif untuk menjabarkan suatu bentuk aljabar, terkadang akan menghasilkan suku yang sejenis. Suku sejenis adalah suku yang memiliki variabel yang sama atau suku konstanta dalam bentuk aljabar.
                  </p>

        <p align="justify"><b>Sifat Komutatif:</b>
        <p align="justify">Sifat komutatif memiliki aturan berikut ini:
          <br>
          Penjumlahan : a + b = b + a <br>
          Perkalian : ab = ba <br>
                  </p>

        <p align="justify"><b>Sifat Asosiatif:</b>
        <p align="justify">Sifat asosiatif memiliki aturan berikut ini:
          <br>
          Penjumlahan : (a + b) + c = a + (b + c) <br>
          Perkalian : (ab)c = a(bc) <br>
        </p><hr>

        <p align="justify"><b>Pemodelan dengan Bentuk Aljabar</b></p>
        <p align="justify">
        Permasalahan matematis dapat dimodelkan dalam bentuk aljabar. Untuk lebih jelasnya, amatilah contoh berikut denagn seksama!
        <br>Galang bersepeda mengelilingi kota. Pada 20 menit pertama, Galang bersepeda dengan kecepatan 7 meter per menit. Setelah merasa lelah, Galang bersepeda dengan kecepatan 4 meter per menit hingga selesai. Tentukan bentuk aljabar dari total jarak yang ditempuh oleh Galang setelah t menit bersepeda!
        <br>
        <br>Jawab:
        <br>Rumus Jarak = Kecepatan x Waktu
        <br>Jarak pada 20 menit pertama = 7 x 20 = 140 meter
        <br>Jarak pada t menit selanjutnya = 4 x t = 4t meter
        <br>Jadi, jarak bentuk aljabar dari total jarak yang ditempuh oleh Galang setelah t menit bersepeda adalah 140 + 4t.
        </p>
  </div>
      <div class="col-lg-6 col-md-6 col-sm-9 col-xs-15">
        <ul class="plan plan3">
        <li class="plan-name">Contoh Soal</li>
        <p align="justify">Gunakan sifat-sifat dan operasi aljabar untuk menentukan apakah pasangan-pasangan bentuk aljabar berikut ekuivalen.</p>
      <p align="justify">
        a. 5x dan 13x − 7x <br>
        b. 6(5 + 3x) − 10x dan 8x + 30 <br>
        c. 9x − 17x dan 8x <br>
        d. 8 − 3(3 − 5x) dan −1 − 15x <br>
        <br>
        <p align="justify">Ayu memiliki berat badan p kg. Tulislah bentuk aljabar dari kondisi berikut pada bagian a hingga c. </p>
        <p align="justify">
        a. Berat badan Tanti 10 kg lebih ringan dari berat badan Ayu. <br>
        b. Berat badan Kevin 3 kg lebih ringan dari 2 kali berat badan Ayu. <br>
        c. Berat badan Winda 8 kg lebih berat dari setengah berat badan Ayu. <br>
        d. Jika berat badan Ayu adalah 40 kg. Berapakah berat badan Tanti, Kevin, dan Winda? <br>
        <br> 
        <li class="plan-name">Pembahasan</li>
        <p align="justify">
            1. Jawaban:<br>
              a. Tidak ekuivalen.<br>
              b. Ekuivalen.<br>
              c. Ekuivalen.<br>
              d. Tidak ekuivalen.<br>
<br>
        2. Jawaban:<br>
        a. Berat badan Tanti = a – 10 kg<br>
        b. Berat badan Kevin = 2a – 3 kg<br>
        c. Berat badan Winda = 0,5a + 8 kg<br>
        d. Berat badan Tanti = a – 10 kg = 40 – 10 = 30 kg<br>
        Berat badan Kevin = 2a – 3 kg = 2 x 40 – 3 = 80 – 3 = 77 kg<br>
        Berat badan Winda = 0,5a + 8 kg = 0,5 x 40 + 8 = 20 + 8 = 28 kg<br>
        </p>
      </ul>
      </div>
    </div>
    <a href="bab4.html" class="btn">Latihan Soal</a> 
  </div>
</section>

<section id="team" class="page-section">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Kesebangunan</h2>
    </div>
    <!-- Team Member's Details -->
    <div class="team-content">
      <div class="row">
    <p align="justify">
    Pada artikel sebelumnya, Sobat Math-ter telah mempelajari tentang rasio. Nah, artikel kali ini akan sedikit mirip dan berhubungan dengan artikel rasio kemarin.
    Sebelum masuk ke materi, apakah Sobat Math-ter pernah mendengar istilah sebangun? Dalam matematika, dua benda yang sebangun berarti bahwa kedua benda tersebut berbentuk sama, tetapi memiliki ukuran yang berbeda.
    Nah, artikel kali ini akan fokus membahas tentang kesebangunan, Sobat Math-ter. Mari simak dengan seksama.
        </div></p>
    <div class="team-content">
      <div class="row"> 
			<h4>Materi</h4>
            <p align="justify"><b>Hubungan Antar Sudut</b></p>
      <p>Sebelum mempelajari lebih lanjut tentang kesebangunan, Sobat Math-ter perlu tahu bahwa kesebangunan memiliki hubungan antar sudut. Sudut sering diberi nama dengan huruf Yunani. Untuk lebih jelasnya, akan diberikan dua garis yang sejajar yang dipotong dengan garis lain. 
        <img src="bab5/gambar1.png">
        <p>Pada dua garis yang berpotongan, terdapat sudut yang bertolak belakang, sedangkan pada dua garis sejajar yang berpotongan dengan garis lain, dikenal istilah sehadap, dalam berseberangan, luar berseberangan, dalam sepihak, luar sepihak. 
        </p>  
        <img src="bab5/tabel1.png">
          <p align="justify"><b>Arti Kesebangunan</b></p>
          <p>foto dapat dicetak dengan ukuran berbeda-beda. Berapa pun ukurannya, foto yang tercetak sama. Secara matematis, istilah yang digunakan adalah sebangun. Benda yang sebangun dapat memiliki ukuran yang berbeda, namun bentuknya tetap.
        </p>  
          <img src="bab5/gambar2.png">
            <p align="justify"><b>Kesebangunan Pada Segitiga</b></p>
            <p>Pas foto dapat dicetak dengan ukuran berbeda-beda. Berapa pun ukurannya, foto yang tercetak sama. Secara matematis, istilah yang digunakan adalah sebangun. Benda yang sebangun dapat memiliki ukuran yang berbeda, namun bentuknya tetap.</p>
            <img src="bab5/gambar3.png">
            <p>∆ABC sebangun dengan ∆DEF dapat dituliskan ∆ABC ~ ∆DEF. </p>
              <p>Perhatikan bahwa urutan huruf dalam penulisan ini artinya </p>
              <img src="bab5/bawahgambar3.png">
        </div>
        <hr>
            <h4>Contoh Soal</h4>
      <p align="justify">
        <ol type="1">
          <li>Gambar berikut menunjukkan dua pasang garis sejajar. Salah satu sudut diketahui besarnya.</li>
          <img src="bab5/cthsoal1.jpeg">
          <ol type="a">
            <li>Tentukan besar sudut-sudut yang lain.</li>
            <li>Bangun apakah yang ditunjukkan oleh segi empat ABCD? Jelaskan.</li>
          </ol>
          <br>
          <li>Pada 	∆ABC,AB=7 cm,BC=5 cm,AC=6 cm. Titik D terletak pada AB sehingga AD = 4 cm, DB = 3 cm.</li>
          <img src="bab5/cnthsoal2.jpeg">
      </p>

      <h4>Pembahasan</h4>
      <p align="justify">
        <ol type="1">
          <li>Jawaban:</li>
          <ol type="a">
            <li>Akan dicari nilai dari ∠B,∠C,dan ∠D. <br>
            Nilai ∠B <br>
∠B=180 derejat - 130 derajat = 50 derajat karena dalam sepihak dengan ∠A
<br>
	Nilai ∠C <br>
∠C=130 derajat karena dalam bersebrangan dengan ∠A <br>

	Nilai ∠D <br>
∠D=50 derajat karena dalam bersebrangan dengan ∠B <br>

Jadi nilai dari nilai dari  ∠B adalah 50 derajat, ∠C adalah 130 derajat, dan ∠D adalah 50 derajat. </li>
<li>Bangun yang ditunjukkan oleh segi empat ABCD adalah jajar genjang karena sudut yang berhadapan sama besar dan memeiliki sisi sajajar yang sama panjang.</li>
        </ol><br>
        <li>Diminta 	agar ∆ABC ~ ∆ADE, sehingga dapat disimpukan bahwa ∠A saling berhimpit. Dari hal tersebut, dapat disimpulkan bahwa titik E akan terletak di garis AC.<br>
Dengan prinsip kesebangungan, diperoleh:<br>
AD/AB=AE/AC <br>
4/7=AE/6 <br>
AE=(4×6)/7 <br>
AE=3 1/7 cm <br>

Jadi, titik E terletak pada AC, sehingga AE=3 1/7 cm dan EC=2 6/7 cm.<br></li>
<br>
<li>Panjang 	DE dapat ditentutan dengan prinsip kesebangunan<br>
AD/AB=DE/BC <br>
4/7=DE/5 <br>
DE=(4×5)/7 <br>
DE=2 6/7 cm <br>

Jadi, panjang DE adalah 2 6/7 cm. <br>
        </li>
        </ol>
        <br>
      <a href="bab5.html" class="btn">Latihan Soal</a> 
			</div>
    </div>
  </div>
  <!--/.container--> 
</section>
<section id="study">
  <div class="container">
    <div class="heading text-center"> 

      <!-- Heading -->
      <h2>Data dan Diagram</h2>
    </div>
    <div class="row feature design">
        <p align="justify">
        Statistika, hmm, apa itu ya? Sobat Math-ter ada yang tahu? Statistika merupakan cabang ilmu dari matematika yang erat kaitannya dengan pengumpulan, pengorganisasian, tampilan, analisis, dan interpretasi data yang biasanya disajikan dalam bentuk numerik.
        <br>Dengan statistika, kita dapat menyatakan data-data yang rumit menjadi lebih ringkas dan mudah dipahami. Terus, apa hubungan statistika denagn data dan diagram?
        <br>Nah, pasti Sobat Math-ter sudah tidak sabar untuk menyimak artikel kali ini. So, tanpa berlama-lama lagi, mari kita menuju ke artikel tentang data dan diagram.
        </p>
        <h3>Materi</h3>
        <p align="justify"><b>Investigasi Statistika</b></p>
        <p align="justify">
          Untuk melakukan investigasi statistika, Sobat Math-ter harus memformulasikan pertanyaan terkait investigasi yang akan dilakukan. Setelah Sobat Math-ter memformulasikan pertanyaan, maka langkah selanjutnya adalah melakukan pengumpulan data yang terkait dengan pertanyaan. Lalu, data yang terkumpul dapat diolah menjadi bentuk diagram atau mencari nilai ukuran pemusatannya. Langkah terakhir adalah kalian dapat menganalisis hasilnya dan menjawab pertanyaan awal secara statistika, seperti pada tampilan diagram alur investigasi statistika berikut.
          <img src="bab6/gambar1.png"></p>
        
        <p align="justify"><b>Macam-Macam Data</b></p>
        <p align="justify">
          Data diperlukan oleh berbagai badan pemerintah, perusahaan, organisasi atau siapa pun untuk dianalisis sehingga mendapatkan gambaran apa yang sedang terjadi. Informasi ini sangat berguna untuk membuat kesimpulan dan mengambil keputusan tentang apa yang harus dilakukan di masa mendatang. Berdasarkan bentuknya, data dapat dibagi menjadi 2 kelompok jenis data:
          <br>
          <img src="bab6/gambar2.png"></p>

        <p align="justify"><b>Data Kategorik</b></p>
        <p align="justify">
        Data yang berbentuk kualitatif, biasanya bukan berbentuk bilangan, misalnya 
        <ol type="1">
          <li>Nama provinsi: Sumatra Selatan, Jawa Timur, Maluku Utara, Papua Barat. </li>
          <li>Nama negara: Indonesia, Singapura, Finlandia.</li>
          <li>Urutan nomor kelas: 7-1, 7-2, 7-3, dan seterusnya.</li>
          <li>dan lainnya.</li>
          </ol>
          <br></p>
        
        <p align="justify"><b>Data Numerik</b></p>
        <p align="justify">
        Data yang selalu berbentuk angka, misalnya tinggi badan, panjang nama, jumlah medali dalam olimpiade, jumlah gol dalam pertandingan sepakbola, suhu badan, dan lainnya.
        <br>Untuk urutan kelas data 7-1, 7-2, 7-3, walaupun jawabannya berupa bilangan yaitu urutan kelas, jenis data ini adalah data kategorik, bukan numerik karena bilangan pada peringkat tidak dapat dioperasikan dengan operasi matematika seperti operasi tambah atau kurang. Contoh data kategorik lainnya yang berupa bilangan adalah nomor presensi siswa di kelas kalian.
          </p>

        <p align="justify"><b>Data dalam Statistika</b></p>
        <p align="justify">
          Penggunaan diagram adalah cara yang sangat efektif untuk menampilkan data atau informasi numerik. Koran biasanya selalu mengeluarkan informasi berupa diagram untuk menunjukkan kepada kita jenis data tertentu. Penggunaan diagram membuat data lebih mudah dipahami daripada informasi tertulis. Foto-foto dan gambar seringkali lebih cepat dibaca dan dicerna daripada paragraf tulisan. 
        <br>Namun, tanpa keterampilan membaca diagram, kalian bisa salah mengartikan diagram itu atau tidak terlalu mengerti dengan apa yang ditampilkan oleh diagram itu. Pada subbab ini kalian akan mempelajari bagaimana menggunakan diagram, membacanya dengan akurat dan memahami informasi apa yang bisa diperoleh dan informasi yang tidak bisa diperoleh dari diagram yang disajikan.
        <br>Setiap diagram seharusnya memiliki fitur judul, label pada setiap sumbu atau bagian, skala pada sumbu atau bagian yang sama besar. Skala ini juga harus konsisten dan satuan yang digunakan terlihat pada diagram. Serta legenda, meskipun tidak selalu harus ada, namun sangat penting ketika ingin menunjukkan dua atau lebih elemen pada diagram.
        <br>Perhatikan contoh diagram Perolehan Medali Emas Olimpiade Musim Panas!
        <br>
        <img src="bab6/gambar3.png">
        <br>Cara membaca data tersebut, yaitu dengan memperhatikan keterangan-keterangan yang telah tertera dalam diagram.
        <br>Contoh informasi yang didapatkan dari diagram Perolehan Medali Emas Olimpiade Musim Panas:
          <ol type="1">
            <li>Peroleh medali emas negara AS pada tahun 2020 lebih rendah dari tahun 2016.</li>
            <li>Pada tahun 2020, negara yang meraih medali emas terbanyak adalah negara AS.</li>
            <li>Pada tahun 2016, negara yang meraih medali emas paling sedikit adalah negara Jepang.</li>
        </ol></p>

        <p align="justify"><b>Diagram Batang</b></p>
        <p align="justify">
        Salah satu cara menampilkan data secara sederhana adalah dengan menggunakan diagram batang. Diagram batang, umumnya digunakan pada data kategorik, di mana data-data tersebut dibagi ke dalam beberapa grup lalu kita menghitung frekuensi dari setiap grup. Untuk lebih memudahkan kalian dalam mengelompokkan data, kalian dapat menggunakan tabel frekuensi. Tabel frekuensi juga akan membuat data yang kalian perlukan jadi lebih mudah dibaca. 
        <br>
        Diagram batang harus mencantumkan beberapa fitur sebagai berikut: 
        <br>
        <ol type="1">
          <li>Judul</li>
          <li>Label pada sumbu horizontal dan vertikal yang jelas dengan skala yang konsisten </li>
          <li>Lebar tiap batang sama </li>
          <li>Adanya jarak antar batang</li>
        </ol>
        <br>
        Contoh diagram batang:
        <br>
        <img src="bab6/gambar4.png">
        <br></p>

        <p align="justify"><b>Diagram Lingkaran</b></p>
        <p align="justify">
        Diagram lingkaran cukup berbeda dari diagram yang telah kita lihat sebelumnya. Diagram lingkaran tidak memiliki sumbu vertikal atau horizontal. Biasanya diagram ini digunakan untuk menampilkan bagian atau bagian yang berbeda yang membentuk satu keseluruhan dari suatu objek atau peristiwa. Diagram lingkaran terdiri atas juringjuring lingkaran.
        <br>
        Langkah-langkah menggambar diagram lingkaran: 
        <br>
        <ol type="a">
          <li>Tentukan besar sudut pusat dari setiap juring pada diagram.</li>
          <li>Ubahlah setiap sudut tersebut sebagai bentuk pecahan atau proporsi dari sudut total 360 derajat, nyatakan dalam bentuk yang paling sederhana. </li>
          <li>Kalikanlah pecahan tersebut dengan 100%. Ini disebut sebagai persentase.</li>
        </ol>
        <br>
        Contoh diagram lingkaran:
        <br>
        <img src="bab6/gambar5.png">
        </p>

        <p align="justify"><b>Memilih Diagram yang Tepat</b></p>
          <p align="justify">
            Setelah Sobat Math-ter belajar tentang diagram batang baik tunggal maupun berganda, diagram lingkaran, dan sedikit mengenai diagram garis, maka pada subbab ini kita akan belajar mengenai cara memilih diagram yang lebih tepat sesuai dengan jenis data dan situasinya.
            <br>
            <img src="bab6/tabel1.png">
        </p>
      </div>
						<div class="col-md-6 col-sm-8">
							
							<h3>Contoh Soal</h3>
                <ol type="1">
								<li>Diagram apakah yang akan kalian gunakan untuk menampilkan data pengeluaran penggunaan listrik keluarga kalian tiap bulannya? Jelaskan!</li>
								<li>Jawablah pertanyaan berikut berdasarkan diagram batang ganda di bawah ini yang menunjukkan perolehan medali emas, perak, dan perunggu Indonesia dalam ajang Pesta Olahraga Se-Asia Tenggara SEA Games.</li>
								<img src="bab6/cthsoal2.jpeg">
                <ol type="a">
                  <li>Pada SEA Games tahun berapakah Indonesia memperoleh 64 medali emas? </li>
                  <li>Pada SEA Games tahun berapakah Indonesia memperoleh medali emas paling banyak? </li>
                  <li>Pada SEA Games tahun berapa sajakah Indonesia memperoleh jumlah medali perak yang hampir sama banyak?  </li>
                  <li>Pada SEA Games tahun berapa sajakah Indonesia memperoleh jumlah medali emas di atas 70 medali? </li>
                  <li>Pada SEA Games tahun berapakah jumlah medali perak yang diperoleh Indonesia lebih banyak dari jumlah medali perunggunya? </li>
        </ol>
							</ol>
<br>
              <p><b>Pembahasan</b></p>
                <ol type="a">
                  <li>Pada SEA Games tahun 2013.</li>
                  <li>Pada SEA Games tahun 2011.</li>
                    <li>Pada SEA Games tahun 2013 dan 2019.</li>
                      <li>Pada SEA Games tahun 2011 dan 2019.</li>
                        <li>Pada SEA Games tahun 2011.</li>
                        <br>
              <a href="bab6.html" class="btn">Latihan Soal</a>  
							</div>
					</div>
  </div>
</section> 
<br>
<footer>
<div class="container">
        <div class="row">
            <div class="col-md-6">
            	<div class="col">
                   <h4>Contact us</h4>
                   <ul>
                        <li>Yogyakarta</li>
                        <li>Phone: +62 812 345 679</li>
                        <li>Email: <a href="gmail.com" title="Email Us">math.ter@gmail.com</a></li>
                        <li>Skype: <a href="youtube.com" title="Youtube">MATH-TER CHANEL</a></li>
                    </ul>
                 </div>
            </div>
             <div class="col-md-6">
             	<div class="col">
                    <h4>Quotes</h4>
                    <p>
                    "Inti dari matematika adalah untuk tidak membuat hal-hal sederhana menjadi rumit, tetapi untuk membuat hal-hal rumit menjadi sederhana."" <br>
                    ~ S. Gudder
                    <br><br>
                    </p>
                </div>
            </div>
        </div>
         
    </div>
    
</footer>
<!--/.page-section-->
<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2023 | Math is fun! <a href="http://webThemez.com">MATH-TER</a> </div>
    </div>
    <!-- / .row --> 
  </div>
</section>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
