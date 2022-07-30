<!DOCTYPE html>
<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>
<html lang="en">
<head>
  

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>"Bamu - Banyak Ilmu"</title>

  <link rel="shortcut icon" href="../../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../../assets/css/maicons.css">

  <link rel="stylesheet" href="../../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../assets/css/mobster.css">
    
    <link rel="stylesheet" href="../../assets/css/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      
  <style>
      
            a {
              color: orange;
            }
            #bar-fixed {
                width: 260px;
            }
            #bar-fixed.stickIt {
              position: fixed;
              top: 10px;
                margin-top: 0px;
            }
            .sidebar {
                font-family: verdana;
              float: left;
              width: 100%;
              height: 470px;
            }
            #text {
              float: right;
              width: 75%;
            }
            .bar{
                margin-top: 10px;
            }
          .skills {
              text-align: left;
              padding-top: 10px;
              padding-bottom: 10px;
              color: white;
            }
        .php {width: 20%; background-color: #2196F3;}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="../../assets/favicon-light.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../content.php">Get Started</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HTMLDasar.php">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CSS.php">CSS</a>
        </li>
        <li class="nav-item  active">
          <a class="nav-link" href="PHP.php">PHP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Soal/1.php">Exercise</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" onclick="window.location.href='../aksi_logout.php'">Log Out</button>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../../assets/img/materi.jpg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
              <h3 class="mb-4 fw-medium">PHP : Hypertext Preprocessor</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section" style="padding: 0px;">
    <div class="container" style="padding:0px; background-color:white;">
      <div class="row">
          <!-- Sidebar -->
        <div class="col-lg-4 py-3">
            <div id="bar-fixed">
                <div class="sidebar" style="  padding-bottom:0px;">
                    <div class="bar" style="text-align: left;">
                        <div class="widget-wrap" style="padding-top:0px; padding-bottom:0px;">
                          <h3 class="widget-title">Topik Bahasan</h3>
                          <ul class="categories">
                              <?php 
                                include('koneksi.php');
                                $output = "select * from courses;";
                                $query = mysqli_query($koneksi, $output);
                                while($d = mysqli_fetch_array($query)){
                                    $temp = $d['IDcourse'];
                                    $output1 = "select * from materi where course = '$temp';";
                                    echo "<h3>".$d['courseName']."</h3>";
                                    $query1 = mysqli_query($koneksi, $output1);
                                    while($d1 = mysqli_fetch_array($query1)){
                                        echo "<li><a href='../".$d1['dirFile']."'>".$d1['judul']."</a></li>";

                                    }
                                }
                              ?>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- end sidebar -->
          
        <div class="col-lg-8 py-3   widget-wrap" style="padding-bottom:0px;">
          <article class="blog-entry" style=" width:100%;  font-size: 90%;">
            <div class="post-title" style="margin:0px;">
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Pengenalan</font></span><font style="vertical-align: inherit;"> PHP</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1></div>
            <div class="entry-content" style=" width:100%;">
<div class="w3-col l10 m12" id="main">
    <br><br>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kode PHP dijalankan di server.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa Yang Harus Anda Ketahui</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sebelum Anda melanjutkan, Anda harus memiliki pemahaman dasar tentang hal-hal berikut:</font></font></p>
<ul>
  <li><a href="/html/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTML</font></font></a></li>
  <li><a href="/css/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS</font></font></a></li>
  <li><a href="/js/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">JavaScript</font></font></a></li>
</ul>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda ingin mempelajari subjek ini terlebih dahulu, temukan tutorialnya di </font></font><a href="/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">halaman Beranda</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami
 </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa itu PHP?</font></font></h2>
<ul>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP adalah singkatan dari "PHP: Hypertext Preprocessor"</font></font></li> 
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP adalah bahasa skrip open source yang banyak digunakan</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Skrip PHP dijalankan di server</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP gratis untuk diunduh dan digunakan</font></font></li> 
</ul>

<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP adalah bahasa yang luar biasa dan populer!</font></font></strong></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini cukup kuat untuk menjadi inti dari sistem blog terbesar di web (WordPress)! </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cukup dalam untuk menjalankan jejaring sosial terbesar (Facebook)! </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini juga cukup mudah untuk menjadi bahasa sisi server pemula yang pertama!</font></font></p></div>

<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa itu File PHP?</font></font></h2>
<ul>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">File PHP dapat berisi teks, HTML, CSS, JavaScript, dan kode PHP</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kode PHP dijalankan di server, dan hasilnya dikembalikan ke browser sebagai HTML biasa</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">File PHP memiliki ekstensi " </font></font><code class="w3-codespan">.php</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"</font></font></li> 
</ul>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa Yang Dapat Dilakukan PHP?</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat menghasilkan konten halaman dinamis</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat membuat, membuka, membaca, menulis, menghapus, dan menutup file di server</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat mengumpulkan data formulir</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat mengirim dan menerima cookie</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat menambah, menghapus, mengubah data dalam database Anda</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat digunakan untuk mengontrol akses pengguna</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP dapat mengenkripsi data</font></font></li>
</ul>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dengan PHP Anda tidak terbatas pada keluaran HTML. </font><font style="vertical-align: inherit;">Anda dapat mengeluarkan gambar, file PDF, dan bahkan film Flash. </font><font style="vertical-align: inherit;">Anda juga dapat mengeluarkan teks apa pun, seperti XHTML dan XML.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mengapa PHP?</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP berjalan di berbagai platform (Windows, Linux, Unix, Mac OS X, dll.)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP kompatibel dengan hampir semua server yang digunakan saat ini (Apache, IIS, dll.)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP mendukung berbagai macam database</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP gratis. </font><font style="vertical-align: inherit;">Unduh dari sumber resmi PHP: </font></font><a target="_blank" href="http://www.php.net/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">www.php.net</font></font></a></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP mudah dipelajari dan berjalan secara efisien di sisi server</font></font></li>
</ul>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa yang baru di PHP 7</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP 7 jauh lebih cepat daripada rilis stabil populer sebelumnya (PHP 5.6)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP 7 telah meningkatkan Penanganan Kesalahan</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP 7 mendukung Deklarasi Jenis yang lebih ketat untuk argumen fungsi</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP 7 mendukung operator baru (seperti operator pesawat ruang angkasa: </font></font><code class="w3-codespan">&lt;=&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></li>
</ul>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
<div class="w3-col l10 m12" id="main">
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Sintaks</font></span><font style="vertical-align: inherit;"> PHP</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Skrip PHP dijalankan di server, dan hasil HTML biasa dikirim kembali ke browser.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sintaks PHP Dasar</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Skrip PHP dapat ditempatkan di mana saja dalam dokumen.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Skrip PHP dimulai dengan </font></font><code class="w3-codespan">&lt;?php</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan diakhiri dengan 
 </font></font><code class="w3-codespan">?&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:</font></font></p>
<div class="w3-code w3-border notranslate"><div>
&lt;?php<br>
// PHP code goes here<br>
?&gt;
</div></div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ekstensi file default untuk file PHP adalah " </font></font><code class="w3-codespan">.php</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">".</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">File PHP biasanya berisi tag HTML, dan beberapa kode skrip PHP.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di bawah ini, kami memiliki contoh file PHP sederhana, dengan skrip PHP yang menggunakan fungsi PHP bawaan " </font></font><code class="w3-codespan">echo</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">" untuk menampilkan teks "Hello World!" </font><font style="vertical-align: inherit;">di halaman web:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code htmlHigh notranslate">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first PHP page<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello World!"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Pernyataan PHP diakhiri dengan titik koma ( </font></font><code class="w3-codespan">;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">).</font></font></p>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CMzcs4PsmfACFZadSwUdyh4AQw"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="9" data-load-complete="true"></iframe></div></div>

</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sensitivitas Kasus PHP</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam PHP, kata kunci (misalnya </font></font><code class="w3-codespan">if</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, 
 </font></font><code class="w3-codespan">else</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, </font></font><code class="w3-codespan">while</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, 
 </font></font><code class="w3-codespan">echo</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, dll), kelas, fungsi, dan fungsi yang ditetapkan pengguna tidak case-sensitive.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pada contoh di bawah ini, ketiga pernyataan gema di bawah ini sama dan legal:</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code htmlHigh notranslate">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">ECHO</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">EcHo</span> <span class="phpstringcolor" style="color:brown">"Hello World!&lt;br&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<div class="w3-note w3-panel">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Namun; </font><font style="vertical-align: inherit;">semua nama variabel peka huruf besar kecil!</font></font></p>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lihat contoh di bawah ini; </font><font style="vertical-align: inherit;">hanya pernyataan pertama yang akan menampilkan nilai 
 </font></font><code class="w3-codespan">$color</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">variabel! </font><font style="vertical-align: inherit;">Ini karena 
 </font></font><code class="w3-codespan">$color</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">,, </font></font><code class="w3-codespan">$COLOR</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan 
 </font></font><code class="w3-codespan">$coLOR</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">diperlakukan sebagai tiga variabel berbeda:</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code htmlHigh notranslate">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
    <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$color = <span class="phpstringcolor" style="color:brown">"red"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My car is "</span> . $color . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My house is "</span> . $COLOR . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My boat is "</span> . $coLOR . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CI_xsJ7smfACFdCcSwUdIFQLhQ"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="7" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Penanganan Formulir</font></span><font style="vertical-align: inherit;"> PHP</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1> 
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Superglobals PHP $ _GET dan $ _POST digunakan untuk mengumpulkan data formulir.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP - Formulir HTML Sederhana</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh di bawah ini menampilkan formulir HTML sederhana dengan dua bidang masukan dan tombol kirim:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="welcome.php"</span> method<span class="attributevaluecolor" style="color:mediumblue">="post"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
Name: <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> name<span class="attributevaluecolor" style="color:mediumblue">="name"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
E-mail: <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> name<span class="attributevaluecolor" style="color:mediumblue">="email"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ketika pengguna mengisi formulir di atas dan mengklik tombol kirim, data formulir dikirim untuk diproses ke file PHP bernama "welcome.php". </font><font style="vertical-align: inherit;">Data formulir dikirim dengan metode HTTP POST.</font></font></p>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk menampilkan data yang dikirimkan, Anda cukup menggemakan semua variabel. </font><font style="vertical-align: inherit;">"Welcome.php" terlihat seperti ini:</font></font></p>
<div class="w3-code w3-border notranslate"><div>
&lt;html&gt;<br>
&lt;body&gt;<br>
<br>
Welcome &lt;?php echo $_POST["name"]; ?&gt;&lt;br&gt;<br>
 Your email address is: &lt;?php echo $_POST["email"]; ?&gt;<br>
<br>
&lt;/body&gt;<br>
&lt;/html&gt;
</div></div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Outputnya bisa seperti ini:</font></font></p>
<div class="w3-code htmlHigh w3-border notranslate"><div>
 Welcome John<br>
Your email address is john.doe@example.com </div> </div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hasil yang sama juga dapat dicapai dengan menggunakan metode HTTP GET:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="welcome_get.php"</span> method<span class="attributevaluecolor" style="color:mediumblue">="get"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 Name: <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> name<span class="attributevaluecolor" style="color:mediumblue">="name"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 E-mail: <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> name<span class="attributevaluecolor" style="color:mediumblue">="email"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan "welcome_get.php" terlihat seperti ini:</font></font></p>
<div class="w3-code w3-border notranslate"><div>
&lt;html&gt;<br>
&lt;body&gt;<br>
<br>
Welcome &lt;?php echo $_GET["name"]; ?&gt;&lt;br&gt;<br>
 Your email address is: &lt;?php echo $_GET["email"]; ?&gt;<br>
<br>
&lt;/body&gt;<br>
&lt;/html&gt;
</div></div>
<p>The code above is quite simple. However, the most important thing is missing. You need 
to validate form data to protect your script from malicious code.</p>

<div class="w3-panel w3-note">
<p><strong>Think SECURITY when processing PHP forms!</strong></p>
<p>This page does not contain any form validation, it just shows how you can 
send and retrieve form data.</p>
<p>However, the next pages will show how to process PHP forms with security in mind! Proper validation of form data is important 
to protect your form from hackers and spammers!</p>
</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CJHxsJ7smfACFdCcSwUdIFQLhQ" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>
<h2>GET vs. POST</h2>
<p>Both GET and POST create an array (e.g. array( key1 =&gt; value1, 
key2 =&gt; value2, key3 =&gt; value3, ...)). This array holds key/value pairs, where 
keys are the names of the form controls and values are the input data from the user.</p>
<p>Both GET and POST are treated as $_GET and $_POST. These are superglobals, 
which means that they are always accessible, regardless of scope - and you can access them from any function,
class or file without having to do anything special.</p>
<p>$_GET is an array of variables passed to the current script via the URL parameters.</p>
<p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>
<hr>

<h2>When to use GET?</h2>
<p>Information sent from a form with the GET method is <strong>visible to everyone</strong> (all 
variable names and values are displayed in the URL). GET also has limits on the amount of 
information to send. The limitation is about 2000 characters. However, 
because the variables are displayed in the URL, it is possible to bookmark the 
page. This can be useful in some cases.</p>
<p>GET may be used for sending non-sensitive data.</p>
<p><b>Note:</b> GET should NEVER be used for sending passwords or other sensitive information!</p>
<hr>

<h2>When to use POST?</h2>
<p>Information sent from a form with the POST method is <strong>invisible to others</strong> 
(all names/values are embedded within the body of the HTTP request) and 
has <strong>no limits</strong> on the amount of information to send.</p>
<p>Moreover POST supports advanced functionality such as support for multi-part 
binary input while uploading files to server.</p>
<p>However, because the variables are not displayed in the URL, it is not possible to bookmark the page.</p>
<div class="w3-panel w3-note">
<p><strong>Developers prefer POST for sending form data.</strong></p>
</div>
<p>Next, lets see how we can process PHP forms the secure way!</p>

<br> 
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
            </div>
          </article>

          
        </div>
      </div>
    </div>
  </div>

</main>


<footer class="page-footer-section bg-dark fg-white" style="padding-top: 0px;">
  <hr>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 py-2">
        <img src="../../assets/favicon-light.png" alt="" width="40">
        <!-- Please don't remove or modify the credits below -->
        <p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">"Bamu - Banyak Ilmu"</a> Kelompok3 </p>
      </div>
      <div class="col-12 col-md-6 py-2">
        <ul class="nav justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link">- Sistem Informasi Kom B -</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer> <!-- .page-footer -->
    
    <script>
    var topLimit = $('#bar-fixed').offset().top;
    $(window).scroll(function() {
      //console.log(topLimit <= $(window).scrollTop())
      if ((topLimit <= $(window).scrollTop()) && (innerWidth > 970)) {
        $('#bar-fixed').addClass('stickIt')
      } else {
        $('#bar-fixed').removeClass('stickIt')
      }
    })
    </script>
<script src="/assets/js/w3codecolor.js"></script>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../../assets/vendor/wow/wow.min.js"></script>

<script src="../../assets/js/mobster.js"></script>

</body>
</html>
