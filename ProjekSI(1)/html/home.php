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
    <?php
            $output = "select * from user where username = '$username'";
            $query = mysqli_query($koneksi, $output);
            while($d1 = mysqli_fetch_array($query)){
                $name = $d1['fName'];
                $score = $d1['score'];
                $profile = $d1['profile'];
            }
        ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>"Bamu - Banyak Ilmu"</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
    
  <style>
      
            a {
              color: orange;
            }
            #bar-fixed {
                width: 260px;
                margin-left: 0px;
            }
            #bar-fixed.stickIt {
              position: fixed;
              top: 0px;
            }
            #bar-fixed.temp {
              margin-left: 25%;
            }
            .sidebar {
                font-family: verdana;
              float: left;
              width: 95%;
              height: auto;
                border: solid;
                margin-top: 5%;
            }
            #text {
              float: right;
              width: 73%;
            }
      #text.temp{
          width: 100%;
      }
            .bar{
                margin-top: 6px;
            }
          .skills {
              text-align: center;
              padding-top: 6px;
              padding-bottom: 6px;
              color: white;
            }
        .php {width: <?php $temp = $score/1000; $temp *= 100; echo $temp."%"; ?>; background-color: #2196F3;}
  </style>
    <link rel="stylesheet" href="../assets/css/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
        <li class="nav-item  active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
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

<main class="bg-light">
<div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-4 fw-medium" style="font-size: 70px;">Home</h3>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
 
    <div class="col-lg-4 py-3   wow fadeInUp">
            <div id="bar-fixed">
    <div class="sidebar card-page">
        <div class="bar " style="text-align: center; ">
            <img src="
                      <?php 
                        echo "../assets/img/avatar$profile.png";
                ?>" class="rounded-pill" style="width: 100%; height:100%; border:solid;">
        </div>
        <div class="bar" style="text-align: left; margin-left: 10px;">
            <p><?php echo $name; ?></p>
        </div>
        <div class="bar" style="text-align: left; margin-left: 10px;">
            <p><?php if($score <=300)
                        echo "Status : Newbie";
                    else if($score <= 600)
                        echo "Status : Intermediate";
                    else if($score <= 1000)
                        echo "Status : Master";
                ?></p>
        </div>
        <div class="bar" style="text-align: left; margin-left: 10px;">
            <p>Score  &nbsp;: <?php echo $score; ?></p>
        </div>
        <div class="bar" style="text-align: left; margin-left: 10px; margin-right:10px;">
            <div class="skills php"><?php echo $temp."%"; ?></div>
        </div>
        <div class="bar float-left">
            <div class="d-flex flex-row bd-highlight" style="margin-left: 0px;">
              <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-dark" onclick="window.location.href='edit.php'"  style="width: 90px; font-size: 18px; padding-top: 3px; padding-bottom: 3px;">Edit</button></div>
              <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary" onclick="window.location.href='aksi_logout.php'" style="width: 90px; padding-left: 13px; font-size: 18px; padding-top: 3px; padding-bottom: 3px;">Logout</button></div>
            </div>
        </div>
    </div>
            </div>
            
        </div>

  <div id="text">
      <div class="card-page">
          <h5 class="fg-primary">HTML</h5>
          <hr>
          
          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight" style="width: 400px; font-size: 17px;"><p>Singkatan dari "Hypertext Markup Language." HTML adalah bahasa yang digunakan untuk membangun sebuah website. "Hypertext" merujuk kepada hyperlinks yang ada pada halaman HTML. "Markup language" refers to the way tags are used to define the page layout and elements within the page merujuk kepada .</p>
              </div>
              <div class="p-2 bd-highlight">
                <div class="w3-example"> 
                    <h4>HTML Example</h4>
                    <div class="w3-code notranslate htmlHigh">
                         <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>title<span class="tagcolor" style="color:mediumblue">&gt;</span></span>Page Title<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/title<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                         <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
                            <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
                    </div>
<button type="button" class="btn btn-success rounded-pill" onclick="window.open('https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default', '_blank')">Cobalah Sendiri >></button>  
                </div>
              </div>
            </div>
          
        </div>
      
      
        <div class="card-page mt-3">
          <h5 class="fg-primary">CSS</h5>
          <hr>

          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight" style=" font-size: 20px;width: 400px;">
                  <div class="w3-example"> 
                    <h4>CSS Example</h4>
                    <div class="w3-code htmlHigh notranslate">
                        <span class="cssselectorcolor" style="color:brown">
                        body
                        <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp;&nbsp;background-color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> lightblue<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br>
                        <br>h1
                        <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
                        &nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> white<span class="cssdelimitercolor" style="color:black">;</span></span><br>
                        &nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
                        </span><span class="cssdelimitercolor" style="color:black">}</span><br><br>
                        p
                        <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
                          &nbsp;
                        font-family<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> verdana<span class="cssdelimitercolor" style="color:black">;</span></span><br>
                        &nbsp;&nbsp;font-size<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 20px<span class="cssdelimitercolor" style="color:black">;</span></span><br>
                        </span><span class="cssdelimitercolor" style="color:black">}</span> </span>
                    </div>
                      
<button type="button" class="btn btn-success  rounded-pill" onclick="window.open('https://www.w3schools.com/css/tryit.asp?filename=trycss_default', '_blank')">Cobalah Sendiri >></button>  
                </div>
              </div>
              <div class="p-2 bd-highlight" style="width: 500px; font-size: 17px;">
                  <p>Cascading Style Sheets atau lebih dikenal dengan CSS adalah bahasa pemrograman desain yang berguna untuk menyederhanakan proses pembuatan website.

CSS merupakan bahasa pemrograman yang dipakai untuk mendesain halaman depan atau tampilan website (front end). CSS menangani tampilan dan ‘rasa’ dari halaman website.

Ada banyak hal yang dapat Anda lakukan menggunakan CSS dibandingkan dengan bahasa pemrograman inti seperti HTML dan PHP. Ketika menggunakan CSS, Anda dapat mengatur warna teks, jenis font, baris antar paragraf, ukuran kolom, dan jenis background yang dipakai.</p>
              </div>
            </div>
        </div>
      
        <div class="card-page mt-3">
          <h5 class="fg-primary">PHP</h5>
          <hr>

          <div class="d-flex flex-row bd-highlight mb-3">
          
          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight" style="width: 400px; font-size: 17px;"><p>Pengertian PHP, PHP Adalah bahasa scripting server-side, Bahasa pemrograman yang digunakan untuk mengembangkan situs web statis atau situs web dinamis atau aplikasi Web. PHP singkatan dari Hypertext Pre-processor, yang sebelumnya disebut Personal Home Pages.

Script sendiri merupakan sekumpulan instruksi pemrograman yang ditafsirkan pada saat runtime. Sedangkan Bahasa scripting adalah bahasa yang menafsirkan skrip saat runtime.</p>
              </div>
              <div class="p-2 bd-highlight">
                <div class="w3-example"> 
                    <h4>PHP Example</h4><div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
 <span class="marked"><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">
</span> <span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"My first PHP script!"</span>;<br><span class="phpnumbercolor" style="color:red">
</span> <span class="phptagcolor" style="color:red">?&gt;</span></span></span><br>
 <br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
                </div>
<button type="button" class="btn btn-success  rounded-pill" onclick="window.open('https://www.w3schools.com/php/phptryit.asp?filename=tryphp_intro', '_blank')">Cobalah Sendiri >></button>  
              </div>
            </div>
            </div>
        </div>
      
        <div class="card-page mt-3" style="margin-bottom: 50px;">
          <h5 class="fg-primary">Exercise</h5>
          <hr>

        <div style="font-size: 17px;">
            <p>This website will be featured with exercise that will help you to train everything every topic that you we have discused in this website
            </p>
        </div>
        </div>
  </div>
        
      </div>
    </div>
</div>
</main> <!-- .bg-light -->


<div class="page-footer-section bg-dark fg-white" style="padding-top: 6px;">

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
</div>
    <script>
    var topLimit = $('#bar-fixed').offset().top;
    var width = window.innerWidth;
    $(window).scroll(function() {
      //console.log(topLimit <= $(window).scrollTop())
      if ((topLimit <= $(window).scrollTop()) && (innerWidth > 970)) {
        $('#bar-fixed').addClass('stickIt');
      } else {
        $('#bar-fixed').removeClass('stickIt');
            $('#text').removeClass('temp');
        $('#bar-fixed').removeClass('temp');
          if((topLimit <= $(window).scrollTop()) || (innerWidth < 970)){
            $('#bar-fixed').addClass('temp');
            $('#text').addClass('temp');
          }
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