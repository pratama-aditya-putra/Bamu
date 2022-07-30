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
              top: 5px;
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
        <li class="nav-item  active">
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
              <h3 class="mb-4 fw-medium">Cascading Style Sheet</h3>
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
            <div class="post-title" style="margin:0px;">
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Pengantar</font></span><font style="vertical-align: inherit;"> CSS</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1></div>
            <div class="entry-content" style=" width:100%;">
<div class="w3-col l10 m12" id="main">
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS adalah bahasa yang kami gunakan untuk mendesain halaman Web.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apa itu CSS?</font></font></h2>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS adalah singkatan dari Cascading Style Sheets</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS menjelaskan bagaimana elemen HTML akan ditampilkan di layar, kertas, atau di media lain</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS menghemat banyak pekerjaan. </font><font style="vertical-align: inherit;">Itu dapat mengontrol tata letak beberapa halaman web sekaligus</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Stylesheet eksternal disimpan dalam file CSS</font></font></li>
</ul>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mengapa Menggunakan CSS?</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS digunakan untuk menentukan gaya halaman web Anda, termasuk desain, tata letak, dan variasi tampilan untuk berbagai perangkat dan ukuran layar.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh CSS</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
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
</span><span class="cssdelimitercolor" style="color:black">}</span> </span></div></div>

<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS Memecahkan Masalah Besar</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTML TIDAK PERNAH dimaksudkan untuk memuat tag untuk memformat halaman web!</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HTML dibuat untuk mendeskripsikan konten halaman web, seperti:</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;h1&gt; Ini adalah sebuah heading &lt;/h1&gt;</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;p&gt; Ini adalah sebuah paragraf. &lt;/p&gt;</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saat tag seperti &lt;font&gt;, dan atribut warna ditambahkan ke spesifikasi HTML 3.2, itu memulai mimpi buruk bagi pengembang web. </font><font class="" style="vertical-align: inherit;">Pengembangan situs web besar, di mana font dan informasi warna ditambahkan ke setiap halaman, menjadi proses yang panjang dan mahal.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Untuk mengatasi masalah ini, World Wide Web Consortium (W3C) membuat CSS.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS menghapus format gaya dari halaman HTML!</font></font></p>
<div class="w3-note w3-panel">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda tidak tahu apa itu HTML, kami sarankan Anda membaca </font></font><a href="/html/default.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tutorial HTML</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> kami </font><font style="vertical-align: inherit;">.</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS Menghemat Banyak Pekerjaan!</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Definisi gaya biasanya disimpan dalam file .css eksternal.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dengan file stylesheet eksternal, Anda dapat mengubah tampilan seluruh situs web hanya dengan mengubah satu file!</font></font></p>
<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->
        
        <div id="div-gpt-ad-1422003450156-2" data-google-query-id="COHDmOvLmfACFUGhSwUdxKgL2g">
          
        <div id="google_ads_iframe_/16833175/MainLeaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/16833175/MainLeaderboard_0" title="Konten iklan pihak ketiga" name="google_ads_iframe_/16833175/MainLeaderboard_0" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="1" data-load-complete="true"></iframe></div></div>
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Sintaks</font></span><font style="vertical-align: inherit;"> CSS</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Aturan CSS terdiri dari pemilih dan blok deklarasi.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sintaks CSS</font></font></h2>
<p><img src="selector.gif" alt="Pemilih CSS" class="w3-image"></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selektor menunjuk ke elemen HTML yang ingin Anda gaya.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Blok deklarasi berisi satu atau lebih deklarasi yang dipisahkan oleh titik koma.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Setiap deklarasi menyertakan nama properti CSS dan nilai, dipisahkan oleh titik dua.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beberapa deklarasi CSS dipisahkan dengan titik koma, dan blok deklarasi dikelilingi oleh tanda kurung kurawal.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam contoh ini, semua &lt;p&gt; elemen akan diratakan tengah, dengan warna teks merah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
p
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh Dijelaskan</font></font></h4>
<ul>
<li><code class="w3-codespan">p</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> adalah pemilih dalam CSS (ini menunjuk ke elemen HTML yang ingin Anda tentukan gaya: &lt;p&gt;).</font></font></li>
<li><code class="w3-codespan">color</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">adalah properti, dan </font></font><code class="w3-codespan">red</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">merupakan nilai properti</font></font></li>
<li><code class="w3-codespan">text-align</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">adalah properti, dan </font></font><code class="w3-codespan">center</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">merupakan nilai properti</font></font></li>
</ul>
<div class="w3-note w3-panel">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda akan belajar lebih banyak tentang pemilih CSS dan properti CSS di bab-bab selanjutnya!</font></font></p>
</div>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CI374IHMmfACFUexSwUdtEgDSQ"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="7" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Pemilih</font></span><font style="vertical-align: inherit;"> CSS</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih CSS memilih elemen HTML yang ingin Anda atur.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih CSS</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih CSS digunakan untuk "menemukan" (atau memilih) elemen HTML yang ingin Anda gaya.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kita dapat membagi pemilih CSS menjadi lima kategori:</font></font></p>
<ul>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Selektor sederhana (pilih elemen berdasarkan nama, id, kelas)</font></font></li>
  <li><a href="css_combinators.asp"><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Pemilih kombinator</font></font></a><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;"> (pilih elemen berdasarkan hubungan tertentu di antara mereka)</font></font></li>
  <li><a href="css_pseudo_classes.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih kelas semu</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (pilih elemen berdasarkan keadaan tertentu)</font></font></li>
  <li><a href="css_pseudo_elements.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih elemen semu</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (pilih dan gaya bagian dari elemen)</font></font></li>
  <li><a href="css_attribute_selectors.asp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Atribut selektor</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (pilih elemen berdasarkan atribut atau nilai atribut)</font></font></li>
</ul>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Halaman ini akan menjelaskan pemilih CSS paling dasar.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih elemen CSS</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih elemen memilih elemen HTML berdasarkan nama elemen.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di sini, semua &lt;p&gt; elemen pada halaman akan diratakan tengah, dengan warna teks merah:&nbsp;</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
p
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemilih ID CSS</font></font></h2>
<p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
<p>The id of an element is unique within a page, so the id selector is 
used to 
select one unique element!</p>
<p>To select an element with a specific id, write a hash (#) character, followed by 
the id of the element.</p>
<div class="w3-example">
<h3>Example</h3>
<p>The CSS rule below will be applied to the HTML element with id="para1":&nbsp;</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
#para1
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<div class="w3-panel w3-note">
 <p><strong>Note:</strong> An id name cannot start with a number!</p>
</div>
<hr>

<h2>The CSS class Selector</h2>
<p>The class selector selects HTML elements with a specific class attribute.</p>
<p>To select elements with a specific class, write a period (.) character, followed by the 
class name.</p>
<div class="w3-example">
<h3>Example</h3>
<p>In this example all HTML elements with class="center" will be red and center-aligned:&nbsp;</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
.center <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>

<p>You can also specify that only specific HTML elements should be affected by a class.</p>
<div class="w3-example">
<h3>Example</h3>
<p>In this example only &lt;p&gt; elements with class="center" will be 
red and center-aligned:&nbsp;</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
p.center <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>

<p>HTML elements 
can also refer to more than one class.</p>
<div class="w3-example">
<h3>Example</h3>
<p>In this example the &lt;p&gt; element will be styled according to class="center" 
and to class="large":&nbsp;</p>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="center large"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This paragraph refers to two classes.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> A class name cannot start with a number!</p>
</div>

<hr>

<h2>The CSS Universal Selector</h2>
<p>The universal selector (*) selects all HTML 
elements on the page.</p>
<div class="w3-example">
<h3>Example</h3>
<p>The CSS rule below will affect every HTML element on the page:&nbsp;</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  *
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> blue<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<hr>

<h2>The CSS Grouping Selector</h2>
<p>The grouping selector selects all the HTML elements with the same style 
definitions.</p>
<p>Look at the following CSS code (the h1, h2, and p elements have the same 
style definitions):</p>
<div class="w3-example">
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
h1
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span><br>
<br>h2
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp;
text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br>
<br>p
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span> </span></div></div>


<p>It will be better to group the selectors, to minimize the code.</p>
<p>To group selectors, separate each selector with a comma.</p>
<div class="w3-example">
<h3>Example</h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam contoh ini kami telah mengelompokkan penyeleksi dari kode di atas:&nbsp;</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
h1, h2, p
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp;
text-align<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> red<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
</div>
<hr>

<div class="w3-container w3-padding ws-css-exercises">
  <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uji Diri Anda dengan Latihan!</font></font></h2>
  <div class="w3-bar w3-margin-bottom">
    <a class="w3-bar-item w3-btn" href="exercise.asp?filename=exercise_selectors1" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latihan 1 "</font></font></a>
    <a class="w3-bar-item w3-btn" href="exercise.asp?filename=exercise_selectors2" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latihan 2 »</font></font></a>
    <a class="w3-bar-item w3-btn" href="exercise.asp?filename=exercise_selectors3" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latihan 3 »</font></font></a>
    <a class="w3-bar-item w3-btn" href="exercise.asp?filename=exercise_selectors4" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Latihan 4 »</font></font></a>
  </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua Pemilih Sederhana CSS</font></font></h2>
<div class="w3-responsive">
<table class="w3-table-all notranslate">
  <tbody><tr>
    <th style="width:20%">Selector</th>
    <th style="width:20%">Example</th>
    <th>Example description</th>
  </tr>
  <tr>
    <td><a href="/cssref/sel_id.asp">#<i>id</i></a></td>
    <td class="notranslate">#firstname</td>
    <td>Selects the element with id="firstname"</td>
  </tr>
  <tr>
    <td><a href="/cssref/sel_class.asp">.<i>class</i></a></td>
    <td class="notranslate">.intro</td>
    <td>Selects all elements with class="intro"</td>
  </tr>
  <tr>
    <td><em><a href="../cssref/sel_element_class.asp">element.class</a></em></td>
    <td class="notranslate">p.intro</td>
    <td>Selects only &lt;p&gt; elements with class="intro"</td>
  </tr>
  <tr>
    <td><a href="/cssref/sel_all.asp">*</a></td>
    <td class="notranslate">*</td>
    <td>Selects all elements</td>
  </tr>
  <tr>
    <td><i><a href="/cssref/sel_element.asp">element</a></i></td>
    <td class="notranslate">p</td>
    <td>Selects all &lt;p&gt; elements</td>
  </tr>
  <tr>
    <td><i><a href="/cssref/sel_element_comma.asp">element,element,..</a></i></td>
    <td class="notranslate">div, p</td>
    <td>Selects all &lt;div&gt; elements and all &lt;p&gt; elements</td>
  </tr>
</tbody></table>
</div>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
<div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CMXjucLQmfACFSaiSwUdpbUFQw"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="7" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><span class="color_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bagaimana Menambahkan CSS</font></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saat browser membaca style sheet, itu akan memformat dokumen HTML sesuai dengan informasi di style sheet.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiga Cara Menyisipkan CSS</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ada tiga cara untuk memasukkan style sheet:</font></font></p>
<ul>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS Eksternal</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS internal</font></font></li>
<li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS sebaris</font></font></li>
</ul>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS Eksternal</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dengan lembar gaya eksternal, Anda dapat mengubah tampilan seluruh situs web hanya dengan mengubah satu file!</font></font></p>
<p><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Setiap halaman HTML harus menyertakan referensi ke file lembar gaya eksternal di dalam elemen &lt;link&gt;, di dalam bagian head.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gaya eksternal ditentukan dalam elemen &lt;link&gt;, di dalam bagian &lt;head&gt; pada halaman HTML:</font></font></p>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> href<span class="attributevaluecolor" style="color:mediumblue">="mystyle.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Style sheet eksternal dapat ditulis di editor teks apa pun, dan harus disimpan dengan ekstensi .css.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">File .css eksternal tidak boleh berisi tag HTML apa pun.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Berikut tampilan file "mystyle.css":</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">"mystyle.css"</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
body <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp;&nbsp;background-color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> lightblue<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br><br>h1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> navy<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp;&nbsp;margin-left<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 20px<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
</div>
<div class="w3-panel w3-warning">
  <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Jangan menambahkan spasi antara nilai properti dan unit (seperti </font></font><code class="w3-codespan">margin-left: 20 px;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">). </font><font style="vertical-align: inherit;">Cara yang benar adalah:</font></font><code class="w3-codespan">margin-left: 20px;</code></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">CSS internal</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Style sheet internal dapat digunakan jika satu halaman HTML memiliki gaya yang unik.</font></font></p>
<p>The internal style is defined inside the &lt;style&gt; element, inside the head 
section.</p>
<div class="w3-example">
<h3>Example</h3>
  <p>Internal styles are defined within the &lt;style&gt; element, inside the &lt;head&gt; section of an HTML page:</p>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>body <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  background-color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> linen<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br><br>h1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> maroon<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  margin-left<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 40px<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> <br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a 
  heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Inline CSS</h2>
<p>An inline style may be used to apply a unique style for a single element.</p>
<p>To use inline styles, add the style attribute to the relevant element. The
style attribute can contain any CSS property.</p>
<div class="w3-example">
<h3>Example</h3>
  <p>Inline styles are defined within the "style" attribute of the relevant 
  element:</p>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>h1<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:blue;text-align:center;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This 
  is a heading<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/h1<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>p<span class="attributecolor" style="color:red"> style<span class="attributevaluecolor" style="color:mediumblue">="color:red;"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>This is a paragraph.<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/p<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br>
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<div class="w3-panel w3-note">
  <p><strong>Tip:</strong> An inline style loses many of the advantages of a style sheet (by mixing
content with presentation). Use this method sparingly.</p>
</div>

<hr>

<h2>Multiple Style Sheets</h2>
<p>If some properties have been defined for the same selector (element) in different style sheets,
the value from the last read style sheet will be used.&nbsp;</p>
<div class="w3-example">
<p> Assume that an <strong>external style sheet</strong> has the following style for the &lt;h1&gt; element:</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
h1
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> navy<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span> </span></div></div>

<div class="w3-example">
<p>Then, assume that an <strong>internal style sheet</strong> also has the following style for the &lt;h1&gt; element:</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
h1
<span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> orange<span class="cssdelimitercolor" style="color:black">;</span></span>&nbsp;&nbsp;&nbsp;
<br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div></div>

<div class="w3-example">
<h3>Example</h3>
  <p>If the internal style is defined <strong>after</strong> the link to the external style sheet, the &lt;h1&gt; elements will be 
"orange":</p>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text/css"</span> href<span class="attributevaluecolor" style="color:mediumblue">="mystyle.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>h1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> orange<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<div class="w3-example">
<h3>Example</h3>
<p>However, if the internal style is defined <strong>before</strong> the link to the external style sheet, the &lt;h1&gt; elements will be 
"navy":&nbsp;</p>
<div class="w3-code notranslate htmlHigh htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>head<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="cssselectorcolor" style="color:brown"><br>h1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp;&nbsp;color<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> orange<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span><br></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/style<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>link<span class="attributecolor" style="color:red"> rel<span class="attributevaluecolor" style="color:mediumblue">="stylesheet"</span> type<span class="attributevaluecolor" style="color:mediumblue">="text/css"</span> href<span class="attributevaluecolor" style="color:mediumblue">="mystyle.css"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/head<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Cascading Order</h2>
<p>What style will be used when there is more than one style specified for an HTML element?</p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Semua gaya di halaman akan "bertingkat" menjadi lembar gaya "virtual" baru dengan aturan berikut, dengan nomor satu memiliki prioritas tertinggi:</font></font></p>
<ol>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gaya sebaris (di dalam elemen HTML)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lembar gaya eksternal dan internal (di bagian kepala)</font></font></li>
  <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Default browser</font></font></li>
</ol>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jadi, gaya sebaris memiliki prioritas tertinggi, dan akan menggantikan gaya eksternal dan internal serta default browser.</font></font></p>
<p></p>
<hr>

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
