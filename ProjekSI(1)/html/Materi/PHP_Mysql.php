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
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Basis Data</font></span><font style="vertical-align: inherit;"> PHP </font></font><span class="color_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL</font></font></span></h1></div>
            <div class="entry-content" style=" width:100%;">
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;"> 
          <br><br>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dengan PHP, Anda dapat terhubung dan memanipulasi database.</font></font></p>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL adalah sistem database paling populer yang digunakan dengan PHP.</font></font></p>

<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa itu MySQL?</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL adalah sistem database yang digunakan di web</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL adalah sistem database yang berjalan di server</font></font></li> 
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL ideal untuk aplikasi kecil dan besar</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL sangat cepat, andal, dan mudah digunakan</font></font></li> 
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL menggunakan SQL standar</font></font></li> 
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL dikompilasi pada sejumlah platform</font></font></li> 
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL gratis untuk diunduh dan digunakan</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL dikembangkan, didistribusikan, dan didukung oleh Oracle Corporation</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nama MySQL diambil dari nama putri salah satu pendiri Monty Widenius: My</font></font></li>
</ul>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Data dalam database MySQL disimpan dalam tabel. </font><font style="vertical-align: inherit;">Tabel adalah kumpulan data terkait, dan terdiri dari kolom dan baris.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Database berguna untuk menyimpan informasi secara kategoris. </font><font style="vertical-align: inherit;">Perusahaan mungkin memiliki database dengan tabel berikut:</font></font></p>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Para karyawan</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Produk</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pelanggan</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pesanan</font></font></li>
</ul>

<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sistem Database PHP + MySQL</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP yang digabungkan dengan MySQL bersifat lintas platform (Anda dapat mengembangkan di Windows dan melayani di platform Unix)</font></font></li>
</ul>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kueri Database</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kueri adalah pertanyaan atau permintaan.</font></font></p>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kita dapat meminta database untuk informasi tertentu dan mengembalikan kumpulan data.</font></font></p>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lihat kueri berikut (menggunakan SQL standar):</font></font></p>

<div class="w3-code w3-border notranslate sqlHigh"><span class="sqlcolor" style="color:black"><div>

<span class="sqlkeywordcolor" style="color:mediumblue">SELECT</span> LastName <span class="sqlkeywordcolor" style="color:mediumblue">FROM</span> Employees

</div> </span></div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kueri di atas memilih semua data di kolom "Nama Belakang" dari tabel "Karyawan".</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk mempelajari lebih lanjut tentang SQL, silakan kunjungi </font></font><a href="/sql/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tutorial SQL</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Unduh Database MySQL</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda tidak memiliki server PHP dengan Basis Data MySQL, Anda dapat mengunduhnya secara gratis di sini: </font></font><a href="http://www.mysql.com" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
http://www.mysql.com</font></font></a><br>
</p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fakta Tentang Database MySQL</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL adalah sistem database standar de-facto untuk situs web dengan volume data yang BESAR dan pengguna akhir (seperti Facebook, Twitter, dan Wikipedia).</font></font></p>
<p><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Hal hebat lainnya tentang MySQL adalah dapat diperkecil untuk mendukung aplikasi database yang disematkan.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lihat </font></font><a target="_blank" href="http://www.mysql.com/customers/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
http://www.mysql.com/customers/</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> untuk gambaran umum perusahaan yang menggunakan MySQL.</font></font></p>


<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CJm_1t3smfACFRoWcgodEl4NkA"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none; display: inline-block; width: 728px; height: 90px;"><iframe frameborder="0" src="https://6310c44b0a5378815276f717333e9201.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html" id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="728" height="90" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" allow="conversion-measurement 'src'" data-google-container-id="7" style="border: 0px; vertical-align: bottom;" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP </font></font><span class="color_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terhubung ke MySQL</font></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP 5 dan yang lebih baru dapat bekerja dengan database MySQL menggunakan:</font></font></p>
<ul>
  <li><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ekstensi MySQLi</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ("i" berarti ditingkatkan)</font></font></li>
  <li><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PDO (Objek Data PHP)</font></font></strong></li>
</ul>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Versi PHP sebelumnya menggunakan ekstensi MySQL. </font><font style="vertical-align: inherit;">Namun, ekstensi ini tidak digunakan lagi pada tahun 2012.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Haruskah Saya Menggunakan MySQLi atau PDO?</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda membutuhkan jawaban singkat, jawabannya adalah "Apapun yang Anda suka".</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Baik MySQLi dan PDO memiliki kelebihan:</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PDO akan bekerja pada 12 sistem database yang berbeda, sedangkan MySQLi hanya akan bekerja dengan database MySQL.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jadi, jika Anda harus mengalihkan proyek Anda untuk menggunakan database lain, PDO membuat prosesnya mudah. </font><font style="vertical-align: inherit;">Anda hanya perlu mengubah string koneksi dan beberapa kueri. </font><font style="vertical-align: inherit;">Dengan MySQLi, Anda perlu menulis ulang seluruh kode - termasuk kueri.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Keduanya berorientasi objek, tetapi MySQLi juga menawarkan API prosedural.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Keduanya mendukung Pernyataan Siap. </font><font style="vertical-align: inherit;">Pernyataan yang Disiapkan melindungi dari injeksi SQL, dan sangat penting untuk keamanan aplikasi web.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh MySQL dalam Sintaks MySQLi dan PDO</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di sini, dan di bab-bab berikut kami mendemonstrasikan tiga cara bekerja dengan PHP dan MySQL:</font></font></p>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQLi (berorientasi objek)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQLi (prosedural)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PDO</font></font></li>
</ul>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instalasi MySQLi</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk Linux dan Windows: Ekstensi MySQLi terinstal secara otomatis dalam banyak kasus, ketika paket mysql php5 diinstal.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk detail instalasi, kunjungi:
 </font></font><a href="http://php.net/manual/en/mysqli.installation.php" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
http://php.net/manual/en/mysqli.installation.php</font></font></a></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instalasi PDO</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk detail instalasi, kunjungi:
 </font></font><a href="http://php.net/manual/en/pdo.installation.php" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
http://php.net/manual/en/pdo.installation.php</font></font></a></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buka Koneksi ke MySQL</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sebelum kita dapat mengakses data di database MySQL, kita harus dapat terhubung ke server:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (MySQLi Object-Oriented)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br>$password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br><br><span class="commentcolor" style="color:green">// Create connection<br></span>$conn = <span class="phpkeywordcolor" style="color:mediumblue">new</span> mysqli($servername, $username, $password);<br><span class="phpnumbercolor" style="color:red">
</span> <br><span class="commentcolor" style="color:green">// Check connection<br></span><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">if</span> ($conn-&gt;connect_error)&nbsp;{<br><span class="phpnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Connection failed: "</span> . $conn-&gt;connect_error);<br>}<span class="phpnumbercolor" style="color:red">
</span><br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Connected successfully"</span>;<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>


<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Perhatikan contoh berorientasi objek di atas:</font></font></strong> </p>
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ connect_error rusak hingga PHP 5.2.9 dan 5.3.0. </font><font style="vertical-align: inherit;">Jika Anda perlu memastikan kompatibilitas dengan versi PHP sebelum 5.2.9 dan 5.3.0, gunakan kode berikut sebagai gantinya: </font></font><br><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
// Periksa koneksi </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">jika (mysqli_connect_error ()) { </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;&nbsp;die ("Koneksi database gagal:". Mysqli_connect_error ()); </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">}</font></font></p></div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (MySQLi Prosedural)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> $password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br><br><span class="commentcolor" style="color:green">// Create connection<br></span>
$conn = mysqli_connect($servername, $username, $password);<br><span class="phpnumbercolor" style="color:red">
</span> <br><span class="commentcolor" style="color:green">// Check connection<br></span><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">if</span> (!$conn)&nbsp;{<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Connection failed: "</span> . mysqli_connect_error());<br>}<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Connected successfully"</span>;<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (PDO)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> $password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br><br><span class="phpkeywordcolor" style="color:mediumblue">try</span> {<br>&nbsp;&nbsp;$conn = <span class="phpkeywordcolor" style="color:mediumblue">new</span> PDO(<span class="phpstringcolor" style="color:brown">"mysql:host=$servername;dbname=myDB"</span>, $username, $password);<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="commentcolor" style="color:green">// set the PDO error mode to exception<br></span>&nbsp; $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Connected successfully"</span>;<span class="phpnumbercolor" style="color:red">
</span> <br>} <span class="phpkeywordcolor" style="color:mediumblue">catch</span>(PDOException $e)&nbsp;{<br>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Connection failed: "</span> . $e-&gt;getMessage();<br>}<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>

<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Dalam contoh PDO di atas kami juga telah 
 </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">menentukan database (myDB)</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> . </font><font style="vertical-align: inherit;">PDO memerlukan database yang valid untuk disambungkan. </font><font style="vertical-align: inherit;">Jika tidak ada database yang ditentukan, pengecualian akan dilempar.</font></font></p>
</div>

<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tip:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Manfaat besar PDO adalah ia memiliki kelas pengecualian untuk menangani masalah apa pun yang mungkin terjadi dalam kueri database kami. </font><font style="vertical-align: inherit;">Jika pengecualian dilempar dalam blok try {}, skrip berhenti mengeksekusi dan mengalir langsung ke blok catch () {} pertama.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tutup Koneksi</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Koneksi akan ditutup secara otomatis saat skrip berakhir. </font><font style="vertical-align: inherit;">Untuk menutup koneksi sebelumnya, gunakan yang berikut ini:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Berorientasi Objek MySQLi:</font></font></h3>
<div class="w3-code htmlHigh notranslate">
$conn-&gt;close(); </div>
<br>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Prosedur MySQLi:</font></font></h3>
<div class="w3-code notranslate">
mysqli_close($conn);
</div>
<br>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PDO:</font></font></h3>
<div class="w3-code notranslate">
$conn = null;
</div>
<br>
</div>

<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CJvlzPXsmfACFREVKwodlSwHAw"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="7" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PHP </font></font><span class="color_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MySQL Menyisipkan Data</font></font></span></h1>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Masukkan Data Ke MySQL Menggunakan MySQLi dan PDO</font></font></h2>
<p><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Setelah database dan tabel dibuat, kita bisa mulai menambahkan data di dalamnya.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Berikut beberapa aturan sintaks yang harus diikuti:</font></font></p>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kueri SQL harus dikutip dalam PHP</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nilai string di dalam kueri SQL harus dikutip</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nilai numerik tidak boleh dikutip</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kata NULL tidak boleh dikutip</font></font></li>
</ul>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pernyataan INSERT INTO digunakan untuk menambahkan record baru ke tabel MySQL:</font></font></p>
<div class="w3-code w3-border notranslate">
 <div>
INSERT INTO table_name (column1, column2, column3,...)<br>
VALUES (value1, value2, value3,...)
</div></div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk mempelajari lebih lanjut tentang SQL, silakan kunjungi </font></font><a href="/sql/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tutorial SQL</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pada bab sebelumnya kita membuat tabel kosong bernama "MyGuests" dengan lima kolom: "id", "firstname", "lastname", "email" dan "reg_date". </font><font style="vertical-align: inherit;">Sekarang, mari kita isi tabel dengan data.</font></font></p>

<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Jika kolom AUTO_INCREMENT (seperti kolom "id") atau TIMESTAMP dengan update default current_timesamp (seperti kolom "reg_date"), tidak perlu ditentukan dalam kueri SQL; </font><font style="vertical-align: inherit;">MySQL secara otomatis akan menambahkan nilainya.</font></font></p>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh berikut menambahkan record baru ke tabel "MyGuests":</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (MySQLi Object-oriented)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br>$password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br>$dbname = <span class="phpstringcolor" style="color:brown">"myDB"</span>;<br><br><span class="commentcolor" style="color:green">// Create connection<br></span>$conn = <span class="phpkeywordcolor" style="color:mediumblue">new</span> mysqli($servername, $username, $password, $dbname);<br><span class="phpnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Check connection<br></span><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">if</span> ($conn-&gt;connect_error)&nbsp;{<br><span class="phpnumbercolor" style="color:red">
</span>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Connection failed: "</span> . $conn-&gt;connect_error);<br>}<span class="phpnumbercolor" style="color:red">
</span><br><span class="phpnumbercolor" style="color:red">
</span> <br>$sql = <span class="phpstringcolor" style="color:brown">"INSERT INTO MyGuests (firstname, lastname, email)<br>
 VALUES ('John', 'Doe', 'john@example.com')"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> <br><span class="phpkeywordcolor" style="color:mediumblue">if</span> ($conn-&gt;query($sql) === TRUE) {<br>&nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"New record created successfully"</span>;<br>} <span class="phpkeywordcolor" style="color:mediumblue">else</span> {<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Error: "</span> . $sql . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span> . $conn-&gt;error;<br>}<br><br>$conn-&gt;close();<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
</div>
<hr>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (MySQLi Prosedural)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br>$password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br>$dbname = <span class="phpstringcolor" style="color:brown">"myDB"</span>;<br><br><span class="commentcolor" style="color:green">// Create connection<br></span>
$conn = mysqli_connect($servername, $username, $password, $dbname);<br><span class="phpnumbercolor" style="color:red">
</span> <span class="commentcolor" style="color:green">// Check connection<br></span><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">if</span> (!$conn)&nbsp;{<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Connection failed: "</span> . mysqli_connect_error());<br>}<br><br>$sql = <span class="phpstringcolor" style="color:brown">"INSERT INTO MyGuests (firstname, lastname, email)<br>
 VALUES ('John', 'Doe', 'john@example.com')"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> <br><span class="phpkeywordcolor" style="color:mediumblue">if</span> (mysqli_query($conn, $sql)) {<br>&nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"New record created successfully"</span>;<br>} <span class="phpkeywordcolor" style="color:mediumblue">else</span> {<br>&nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Error: "</span> . $sql . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span> . mysqli_error($conn);<br>}<br><br>mysqli_close($conn);<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh (PDO)</font></font></h3>
<div class="w3-code htmlHigh notranslate">
<span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$servername = <span class="phpstringcolor" style="color:brown">"localhost"</span>;<br>$username = <span class="phpstringcolor" style="color:brown">"username"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> $password = <span class="phpstringcolor" style="color:brown">"password"</span>;<br>$dbname = <span class="phpstringcolor" style="color:brown">"myDBPDO"</span>;<br><br><span class="phpkeywordcolor" style="color:mediumblue">try</span> {<br>&nbsp;&nbsp;$conn = <span class="phpkeywordcolor" style="color:mediumblue">new</span> PDO(<span class="phpstringcolor" style="color:brown">"mysql:host=$servername;dbname=$dbname"</span>, $username, $password);<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="commentcolor" style="color:green">// set the PDO error mode to exception<br></span>&nbsp; $conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; $sql = <span class="phpstringcolor" style="color:brown">"INSERT INTO MyGuests (firstname, lastname, email)<br>
  &nbsp;
 VALUES ('John', 'Doe', 'john@example.com')"</span>;<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="commentcolor" style="color:green">// use exec() because no results are returned<br></span>&nbsp; $conn-&gt;exec($sql);<br><span class="phpnumbercolor" style="color:red">
</span>  &nbsp; <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"New record created successfully"</span>;<br>} <span class="phpkeywordcolor" style="color:mediumblue">catch</span>(PDOException $e) <span class="phpnumbercolor" style="color:red">
</span>  {<br>&nbsp;&nbsp;<span class="phpkeywordcolor" style="color:mediumblue">echo</span> $sql . <span class="phpstringcolor" style="color:brown">"&lt;br&gt;"</span> . $e-&gt;getMessage();<br><span class="phpnumbercolor" style="color:red">
</span>  }<br><span class="phpnumbercolor" style="color:red">
</span> <br>$conn = null;<br>
<span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>
<br>
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
        <p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">"Bamu - Banyak Ilmu"</a> Kelompok 3 </p>
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
      if((topLimit <= $(window).scrollTop()) && (innerWidth > 970)) {
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
