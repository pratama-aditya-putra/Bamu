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
        <li class="nav-item  active">
          <a class="nav-link" href="HTMLDasar.php">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CSS.php">CSS</a>
        </li>
        <li class="nav-item">
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
            <h3 class="mb-4 fw-medium">Hyper-Text Markup Language</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section" style="padding: 0px;">
    <div class="container" style="padding:0px;">
      <div class="row">
          <!-- Sidebar -->
        <div class="col-lg-4 py-3">
            <div id="bar-fixed">
                <div class="sidebar">
                    <div class="bar" style="text-align: left; ">
                        <div class="widget-wrap"  style="padding-top:0px; padding-bottom:0px;">
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
            <div class="post-title"><a href="blog-details.html">HTML Dasar</a></div>
            <div class="entry-content"  style=" width:100%;">
                <div class="w3-col l10 m12 " id="main">
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam bab ini kami akan menunjukkan beberapa contoh HTML dasar.</font></font></p>
<p class="intro"><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Jangan khawatir jika kami menggunakan tag yang belum Anda pelajari.</font></font></p>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dokumen HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua dokumen HTML harus dimulai dengan deklarasi tipe dokumen: </font></font><code class="w3-codespan">&lt;!DOCTYPE html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dokumen HTML itu sendiri dimulai dengan </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan diakhiri dengan </font></font><code class="w3-codespan">&lt;/html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bagian dokumen HTML yang terlihat adalah antara </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan </font></font><code class="w3-codespan">&lt;/body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deklarasi &lt;! DOCTYPE&gt;</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;!DOCTYPE&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">deklarasi mewakili jenis dokumen, dan membantu browser untuk tampilan halaman web dengan benar.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini hanya boleh muncul sekali, di bagian atas halaman (sebelum tag HTML apa pun). </font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;!DOCTYPE&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">deklarasi ini tidak case sensitive.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;!DOCTYPE&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">deklarasi HTML5 adalah:</font></font></p>
<div class="w3-example">
 <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Judul HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Judul HTML ditentukan dengan </font><font style="vertical-align: inherit;">tag </font></font><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ke </font></font><code class="w3-codespan">&lt;h6&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan tajuk paling penting. </font></font><code class="w3-codespan">&lt;h6&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan tajuk yang paling tidak penting:&nbsp;</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h2<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is heading 3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h3<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CK2N1Kq-l_ACFc-LSwUdO18IHw" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 300px; height: 250px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_2__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Paragraf HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Paragraf HTML ditentukan dengan </font></font><code class="w3-codespan">&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is another paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tautan HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tautan HTML ditentukan dengan </font></font><code class="w3-codespan">&lt;a&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a link<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>The link's destination is specified in the <code class="w3-codespan">href</code> attribute.&nbsp;</p>
<p>Attributes are used to provide additional information about HTML elements.</p>
<p>You will learn more about attributes in a later chapter.</p>
<hr>

<h2>HTML Images</h2>
<p>HTML images are defined with the <code class="w3-codespan">&lt;img&gt;</code> tag.</p>
<p>The source file (<code class="w3-codespan">src</code>), alternative text (<code class="w3-codespan">alt</code>), 
<code class="w3-codespan">width</code>, and <code class="w3-codespan">height</code> are provided as attributes:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="w3schools.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="W3Schools.com"</span> width<span class="attributevaluecolor" style="color:mediumblue">="104"</span> height<span class="attributevaluecolor" style="color:mediumblue">="142"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>
<br>
</div>

                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CKGR9d7Ll_ACFaNDfQodLAsCrQ" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Elemen</font></span><font style="vertical-align: inherit;"> HTML</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML ditentukan oleh tag awal, beberapa konten, dan tag akhir.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML</font></font></h2>

<p><font style="vertical-align: inherit;"></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> HTML </font><font style="vertical-align: inherit;">adalah segalanya mulai dari tag awal hingga tag akhir:</font></font></p>

<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> tagname </font></font><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Konten</font><span style="color:brown"><font style="vertical-align: inherit;"> ditempatkan di</font></span><font style="vertical-align: inherit;"> sini ...</font></font><span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &lt;</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / tagname </font></font><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></span>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh beberapa elemen HTML:</font></font></p>

<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt; </font></font><span style="color:brown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">h1</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &gt;</font></font></span></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Heading Pertama Saya</font></font><span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &lt;</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / h1 </font></font><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></span>
</div>

<div style="font-size:20px;padding:10px;margin-bottom:10px;">
<span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> p </font></font><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Paragraf pertama saya. </font></font><span style="color:brown"><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> / p </font></font><span style="color:mediumblue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;</font></font></span></span>
</div>

<table class="w3-table-all notranslate">
<tbody><tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</tbody></table>

<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Beberapa elemen HTML tidak memiliki konten (seperti elemen &lt;br&gt;). </font><font style="vertical-align: inherit;">Elemen-elemen ini disebut elemen kosong. </font><font style="vertical-align: inherit;">Elemen kosong tidak memiliki tag akhir!</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML Bersarang</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML dapat disarangkan (ini berarti elemen dapat berisi elemen lain).</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua dokumen HTML terdiri dari elemen HTML bersarang.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh berikut berisi empat elemen HTML ( </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, </font></font><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
dan </font></font><code class="w3-codespan">&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">):</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh Dijelaskan</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen elemen root dan mendefinisikan dokumen HTML secara keseluruhan.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini memiliki tag awal </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan tag akhir </font></font><code class="w3-codespan">&lt;/html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kemudian, di dalam </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen tersebut terdapat </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
elemen:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div></div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen mendefinisikan tubuh dokumen.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini memiliki tag awal </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan tag akhir </font></font><code class="w3-codespan">&lt;/body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kemudian, di dalam </font></font><code class="w3-codespan">&lt;body&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen tersebut terdapat dua elemen lainnya:
 </font></font><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan </font></font><code class="w3-codespan">
&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div></div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen mendefinisikan heading.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini memiliki tag awal </font></font><code class="w3-codespan">&lt;h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan tag akhir </font></font><code class="w3-codespan">&lt;/h1&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:</font></font></p>

<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My First Heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen mendefinisikan sebuah paragraf.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ini memiliki tag awal </font></font><code class="w3-codespan">&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan tag akhir </font></font><code class="w3-codespan">&lt;/p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:</font></font></p>

<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>My first paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CKOR9d7Ll_ACFaNDfQodLAsCrQ" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jangan Pernah Lewati Tag Akhir</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beberapa elemen HTML akan ditampilkan dengan benar, meskipun Anda lupa tag akhir:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph<br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph<br>
<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>

<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Namun, jangan pernah mengandalkan ini! </font><font style="vertical-align: inherit;">Hasil dan kesalahan yang tidak diharapkan dapat terjadi jika Anda lupa tag akhir!</font></font></strong></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML Kosong</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen HTML tanpa konten disebut elemen kosong.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;br&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag mendefinisikan satu baris, dan merupakan elemen kosong tanpa tag penutup:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span> paragraph with a line break.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTML Tidak Peka Huruf Besar-Kecil</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tag HTML tidak peka huruf besar-kecil: </font></font><code class="w3-codespan">&lt;P&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">artinya sama dengan </font></font><code class="w3-codespan">&lt;p&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Standar HTML tidak memerlukan tag huruf kecil, tetapi W3C
 </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">merekomendasikan</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> huruf kecil dalam HTML, dan </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">menuntut</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> huruf kecil untuk jenis dokumen yang lebih ketat seperti XHTML.</font></font></p>
<div class="w3-panel w3-note">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di W3Schools kami selalu menggunakan nama tag huruf kecil.</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Referensi Tag HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Referensi tag W3Schools berisi informasi tambahan tentang tag ini dan atributnya.</font></font></p>
<table class="w3-table-all notranslate">
<tbody><tr>
  <th>Tag</th>
  <th>Description</th>
</tr>
<tr>
  <td><a href="/tags/tag_html.asp">&lt;html&gt;</a></td>
  <td>Defines the root of an HTML document</td>
</tr>
<tr>
  <td><a href="/tags/tag_body.asp">&lt;body&gt;</a></td>
  <td>Defines the document's body</td>
</tr>
<tr>
  <td><a href="/tags/tag_hn.asp">&lt;h1&gt; to &lt;h6&gt;</a></td>
  <td>Defines HTML headings</td>
</tr>
</tbody></table>

<div class="w3-note w3-panel">
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk daftar lengkap semua tag HTML yang tersedia, kunjungi </font></font><a href="/tags/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Referensi Tag HTML</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
</div>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
                
<div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CIP--f3Ll_ACFaNDfQodLAsCrQ" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Atribut</font></span><font style="vertical-align: inherit;"> HTML</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut HTML memberikan informasi tambahan tentang elemen HTML.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut HTML</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua elemen HTML dapat memiliki </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut</font></font></b></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut memberikan </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">informasi tambahan</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> tentang elemen</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut selalu ditentukan di </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag awal</font></font></b></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut biasanya datang dalam pasangan nama / nilai seperti: </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">name = "value"</font></font></b></li>
</ul>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut href</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;a&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag mendefinisikan hyperlink. </font><font style="vertical-align: inherit;">The 
 </font></font><code class="w3-codespan">href</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut menentukan URL dari halaman link pergi ke:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Visit W3Schools<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda akan mempelajari lebih lanjut tentang tautan di </font></font><a href="html_links.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bab Tautan HTML</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut src</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;img&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag digunakan untuk menanamkan gambar di halaman HTML. </font><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">src</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">menspesifikasikan atribut path ke gambar yang akan ditampilkan:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_girl.jpg"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ada dua cara untuk menentukan URL di </font></font><code class="w3-codespan">src</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
atribut:</font></font></p>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1. URL Mutlak</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Tautan ke gambar eksternal yang dihosting di situs web lain. </font><font style="vertical-align: inherit;">Contoh: src = "https://www.w3schools.com/images/img_girl.jpg".</font></font></p>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gambar eksternal mungkin memiliki hak cipta. </font><font style="vertical-align: inherit;">Jika Anda tidak mendapatkan izin untuk menggunakannya, Anda mungkin melanggar undang-undang hak cipta. </font><font style="vertical-align: inherit;">Selain itu, Anda tidak dapat mengontrol gambar eksternal; </font><font style="vertical-align: inherit;">itu bisa tiba-tiba dihapus atau diubah.</font></font></p>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2. URL Relatif</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> - Tautan ke gambar yang dihosting di dalam situs web. </font><font style="vertical-align: inherit;">Di sini, URL tidak menyertakan nama domain. </font><font style="vertical-align: inherit;">Jika URL dimulai tanpa garis miring, itu akan relatif terhadap halaman saat ini. </font><font style="vertical-align: inherit;">Contoh: src = "img_girl.jpg". </font><font style="vertical-align: inherit;">Jika URL diawali dengan garis miring, itu akan menjadi relatif terhadap domain. </font><font style="vertical-align: inherit;">Contoh: src = "/ images / img_girl.jpg".</font></font></p>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tip:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cara terbaik adalah menggunakan URL relatif. </font><font style="vertical-align: inherit;">Mereka tidak akan rusak jika Anda mengubah domain.</font></font></p>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut lebar dan tinggi</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">&lt;img&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag juga harus berisi
 </font></font><code class="w3-codespan">width</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan </font></font><code class="w3-codespan">
height</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut, yang menentukan lebar dan tinggi gambar (dalam pixel):</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_girl.jpg"</span> width<span class="attributevaluecolor" style="color:mediumblue">="500"</span> height<span class="attributevaluecolor" style="color:mediumblue">="600"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut alt</font></font></h2>
<p><font style="vertical-align: inherit;"></font><code class="w3-codespan">alt</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut </font><font style="vertical-align: inherit;">wajib </font><font style="vertical-align: inherit;">untuk </font></font><code class="w3-codespan">&lt;img&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
tag menentukan teks alternatif untuk gambar, jika gambar karena alasan tertentu tidak dapat ditampilkan. </font><font style="vertical-align: inherit;">Hal ini dapat disebabkan oleh koneksi yang lambat, atau kesalahan pada </font></font><code class="w3-codespan">src</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut, atau jika pengguna menggunakan pembaca layar.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_girl.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Girl 
  with a jacket"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lihat apa yang terjadi jika kami mencoba menampilkan gambar yang tidak ada:</font></font></p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red"> src<span class="attributevaluecolor" style="color:mediumblue">="img_typo.jpg"</span> alt<span class="attributevaluecolor" style="color:mediumblue">="Girl 
  with a jacket"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda akan mempelajari lebih lanjut tentang gambar di </font></font><a href="html_images.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bab Gambar HTML</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CIX--f3Ll_ACFaNDfQodLAsCrQ" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut gaya</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">style</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut digunakan untuk menambah gaya untuk elemen, seperti warna, font, ukuran, dan banyak lagi.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
  <div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:red;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a red paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
   </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda akan mempelajari lebih lanjut tentang gaya di </font></font><a href="html_styles.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bab Gaya HTML</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut lang</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda harus selalu menyertakan </font></font><code class="w3-codespan">lang</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut di dalam </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag, untuk menyatakan bahasa halaman Web. </font><font style="vertical-align: inherit;">Ini dimaksudkan untuk membantu mesin pencari dan browser.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh berikut menetapkan bahasa Inggris sebagai bahasa:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="attributecolor" style="color:red"> lang<span class="attributevaluecolor" style="color:mediumblue">="en"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>...<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kode negara juga dapat ditambahkan ke kode bahasa di </font></font><code class="w3-codespan">lang</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
atribut. </font><font style="vertical-align: inherit;">Jadi, dua karakter pertama menentukan bahasa halaman HTML, dan dua karakter terakhir menentukan negara.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh berikut menetapkan bahasa Inggris sebagai bahasa dan Amerika Serikat sebagai negaranya:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="attributecolor" style="color:red"> lang<span class="attributevaluecolor" style="color:mediumblue">="en-US"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>...<br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut judul</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">title</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut mendefinisikan beberapa informasi tambahan tentang elemen.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nilai atribut judul akan ditampilkan sebagai keterangan alat saat Anda mengarahkan mouse ke elemen:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> title<span class="attributevaluecolor" style="color:mediumblue">="I'm a tooltip"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami Sarankan: Selalu Gunakan Atribut Huruf Kecil</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Standar HTML tidak memerlukan nama atribut huruf kecil.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut judul (dan semua atribut lainnya) dapat ditulis dengan huruf besar atau kecil seperti </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">judul</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> atau </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TITLE</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Namun, W3C </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">merekomendasikan</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> atribut huruf kecil dalam HTML, dan </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">meminta</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  
atribut huruf kecil untuk jenis dokumen yang lebih ketat seperti XHTML.</font></font></p>
<div class="w3-panel w3-note">
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di W3Schools kami selalu menggunakan nama atribut huruf kecil.</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kami Sarankan: Selalu Kutip Nilai Atribut</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Standar HTML tidak membutuhkan tanda kutip di sekitar nilai atribut.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Namun, W3C </font></font><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">merekomendasikan</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kutipan dalam HTML, dan </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">meminta</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kutipan untuk jenis dokumen yang lebih ketat seperti XHTML.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Baik:</font></font></h3>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">="https://www.w3schools.com/html/"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Visit our HTML tutorial<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div></div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buruk:</font></font></h3>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>a<span class="attributecolor" style="color:red"> href<span class="attributevaluecolor" style="color:mediumblue">=https://www.w3schools.com/html/</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Visit our HTML tutorial<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/a<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div></div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terkadang Anda harus menggunakan tanda kutip. </font><font style="vertical-align: inherit;">Contoh ini tidak akan menampilkan atribut judul dengan benar, karena mengandung spasi:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red">
 title<span class="attributevaluecolor" style="color:mediumblue">=About </span>W3Schools</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<div class="w3-panel w3-note">
  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;Di W3Schools kami selalu menggunakan tanda kutip di sekitar nilai atribut.</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kutipan Tunggal atau Ganda?</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tanda kutip ganda di sekitar nilai atribut adalah yang paling umum di HTML, tetapi tanda kutip tunggal juga dapat digunakan.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam beberapa situasi, ketika nilai atribut itu sendiri berisi tanda kutip ganda, perlu menggunakan tanda kutip tunggal:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> title<span class="attributevaluecolor" style="color:mediumblue">='John "ShotGun" Nelson'</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atau sebaliknya:</font></font></p>

<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> title<span class="attributevaluecolor" style="color:mediumblue">="John 'ShotGun' Nelson"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ringkasan Bab</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua elemen HTML dapat memiliki </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut</font></font></strong></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">href</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut </font></font><code class="w3-codespan">
  &lt;a&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menentukan URL halaman link pergi ke</font></font></li>
  <li><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">The </font></font><code class="w3-codespan">src</code><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">atribut </font></font><code class="w3-codespan">
  &lt;img&gt;</code><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">menentukan path ke gambar yang akan ditampilkan</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">width</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan </font></font><code class="w3-codespan">height</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut </font></font><code class="w3-codespan">&lt;img&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">memberikan informasi ukuran untuk gambar</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">alt</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut </font></font><code class="w3-codespan">
  &lt;img&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">menyediakan teks alternatif untuk gambar</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">style</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut digunakan untuk menambah gaya untuk elemen, seperti warna, font, ukuran, dan lebih</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">lang</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut dari </font></font><code class="w3-codespan">&lt;html&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tag menyatakan bahasa halaman Web</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">title</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut mendefinisikan beberapa informasi tambahan tentang elemen</font></font></li>
</ul>
<hr>
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
        <p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">"Bamu - Banyak Ilmu"</a> Kelompok 3</p>
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
