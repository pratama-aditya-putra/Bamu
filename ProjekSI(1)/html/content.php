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

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
    
    <link rel="stylesheet" href="../assets/css/w3.css">
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
              height: 600px;
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
      <img src="../assets/favicon-light.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item  active">
          <a class="nav-link" href="content.php">Get Started</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Materi/HTMLDasar.php">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Materi/CSS.php">CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Materi/PHP.php">PHP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Soal/1.php">Exercise</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" onclick="window.location.href='aksi_logout.php'">Log Out</button>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Get Started</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Let's Start With HTML Introduction</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section" style="padding-top: 0px;">
    <div class="container" style="padding-top: 0px;">
      <div class="row">
          <!-- Sidebar -->
        <div class="col-lg-4 py-3   wow fadeInUp">
            <div id="bar-fixed">
                <div class="sidebar">
                    <div class="bar" style="text-align: left; ">
                        <div class="widget-wrap" style="padding-bottom:0px;">
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
                                        echo "<li><a href='".$d1['dirFile']."'>".$d1['judul']."</a></li>";

                                    }
                                }
                              ?>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- end sidebar -->
          
        <div class="col-lg-8 py-3">
          <article class="blog-entry">
            <div class="entry-header">
              <div class="post-thumbnail">
                <img src="../assets/img/html5.jpg" alt="">
              </div>
            </div>
            <div class="post-title"><a href="blog-details.html">HTML &amp; HTML5</a></div>
            <div class="entry-content">
              <div class="post__content" style="height: auto !important;"><p>Hai semuanya, pada artikel ini kita akan belajar tentang tag HTML.</p><p>Bagi yang belum tahu, tag adalah text khusus (markup) yang biasanya terdiri dari pembuka dan penutup. Untuk penulisan tag pembuka adalah <code class="language-text">&lt;nama&gt;</code> sedangkan penutup dengan <code class="language-text">&lt;/nama&gt;</code>.</p><p>Jadi perbedaan antara tag pembuka dan penutup hanya terletak pada garis miring.</p><p>Sebagai contoh perhatikan struktur html berikut ini:</p>
                  <div class="w3-code notranslate htmlHigh">
                         <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>title<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Page Title<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/title<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                         <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                    </div>
                  <p>Jadi, kita memiliki tag <code class="language-text">html</code> lalu didalamnya terdapat tag <code class="language-text">head</code> dan <code class="language-text">body</code>.</p><p>Sebagai catatan, semua kode html harus ditulis didalam tag <code class="language-text">html</code>.</p><p>Lalu, tag <code class="language-text">head</code> berfungsi untuk menyimpan informasi dari sebuah halaman misalnya <code class="language-text">title</code> (Judul dari sebuah Halaman) dan <code class="language-text">meta</code> (pengkodean karakter UFT-8).</p><p>Sedangkan bagian tag <code class="language-text">body</code> akan ditampilkan ke browser.</p><p>Dan pada contoh diatas kita memasukan tag <code class="language-text">h1</code> dan <code class="language-text">p</code> didalam tag <code class="language-text">body</code>.</p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"></div><p>Nah, seperti yang anda lihat. Hampir semua setiap tag pembuka memiliki tag penutup (contoh: <code class="language-text">&lt;h1&gt;</code> tulisan <code class="language-text">&lt;/h1&gt;</code>). Sebagai tips, tulislah html dengan jarak menonjol antar tag..</p><div class="google-auto-placed ap_container" style="width: 100%; height: auto; clear: both; text-align: center;"></div></div>
            </div>
            <a href="Materi/HTMLDasar.php" class="btn btn-primary">Continue</a>
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
        <img src="../assets/favicon-light.png" alt="" width="40">
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
      if ((topLimit <= $(window).scrollTop()) && (innerWidth > 970)) {
        $('#bar-fixed').addClass('stickIt')
      } else {
        $('#bar-fixed').removeClass('stickIt')
      }
    })
    </script>
<script src="/assets/js/w3codecolor.js"></script>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>
