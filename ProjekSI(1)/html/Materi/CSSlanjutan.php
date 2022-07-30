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
                        <div class="widget-wrap"   style="padding-top:0px; padding-bottom:0px;">
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
          <article class="blog-entry" style="width:100%;  font-size: 90%;">
            <div class="post-title" style="margin:0px;">
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Modul Tata Letak Grid</font></span><font style="vertical-align: inherit;"> CSS</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1></div>
            <div class="entry-content" style=" width:100%;">
                <div class="w3-col l10 m12" id="main">
                    <br><br>
                    <img src="../../assets/img/css0.png" width="100%">

<!--
<div class="grid-container">
  <div class="grid-item item1"><h1>1</h1></div>
  <div class="grid-item item2"><h1>2</h1></div>
  <div class="grid-item item3"><h1>3</h1></div>  
  <div class="grid-item item4"><h1>4</h1></div>
  <div class="grid-item item5"><h1>5</h1></div>
  <div class="grid-item item6"><h1>6</h1></div>  
  <div class="grid-item item7"><h1>7</h1></div>
</div>
<p>
<a class="w3-btn" target="_blank" href="tryit.asp?filename=trycss_grid_layout">Try it Yourself &raquo;</a>
</p>
-->

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tata Letak Kisi</font></font></h2>
<p>The CSS Grid Layout Module offers a grid-based layout system, with rows and 
columns, making it easier to design web pages without having to use floats and 
positioning.</p>
<hr>
<h2>Browser Support</h2>
<p>The grid properties are supported in all modern browsers.</p>
<div class="w3-responsive">
<table class="browserref notranslate">
  <tbody><tr>
    <th style="width:20%;height:50px;" class="bsChrome" title="Chrome"></th>
    <th style="width:20%;" class="bsEdge" title="Internet Explorer / Edge"></th>
    <th style="width:20%;" class="bsFirefox" title="Firefox"></th>
    <th style="width:20%;" class="bsSafari" title="Safari"></th>
    <th style="width:20%;" class="bsOpera" title="Opera"></th>                
  </tr>
  <tr>
    <td>57.0</td>
    <td>16.0</td>
    <td>52.0</td>
    <td>10</td>
    <td>44</td>
  </tr>
  </tbody></table>
</div>  
<hr>

<h2>Grid Elements</h2>
<p>A grid layout consists of a parent element, with one or more child elements.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> 
  class<span class="attributevaluecolor" style="color:mediumblue">="grid-container"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>1<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> 
  class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>2<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>3<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>4<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> 
  class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>5<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>6<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>7<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> 
  class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>8<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>div<span class="attributecolor" style="color:red"> class<span class="attributevaluecolor" style="color:mediumblue">="grid-item"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>9<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/div<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>

<div class="w3-white notranslate w3-padding">
<div class="grid-container2" style="grid-template-columns:auto auto auto">
  <div class="grid-item2"><h1>1</h1></div>
  <div class="grid-item2"><h1>2</h1></div>
  <div class="grid-item2"><h1>3</h1></div>  
  <div class="grid-item2"><h1>4</h1></div>
  <div class="grid-item2"><h1>5</h1></div>
  <div class="grid-item2"><h1>6</h1></div>  
  <div class="grid-item2"><h1>7</h1></div>
  <div class="grid-item2"><h1>8</h1></div>
  <div class="grid-item2"><h1>9</h1></div>  
</div>
    </div>
</div>

<hr>
<h2>Display Property</h2>
<p>An HTML element becomes a grid container when its <code class="w3-codespan">display</code> property 
is set to
<code class="w3-codespan">grid</code> or <code class="w3-codespan">inline-grid</code>.</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
 
</div>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> inline-grid<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
 
</div>
<p>All direct children of the grid container automatically become <em>grid items</em>.</p>
<hr>
<h2>Grid Columns</h2>
<p>The vertical lines of grid items are called <em>columns</em>.</p>

<img src="../../assets/img/css1.png" style="max-width:100%">
<hr>
<h2>Grid Rows</h2>
<p>The horizontal lines of grid items are called <em>rows</em>.</p>

<img src="../../assets/img/css2.png" style="max-width:100%">
<hr>

<h2>Grid Gaps</h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Spasi di antara setiap kolom / baris disebut </font></font><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">celah</font></font></em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>

<img src="../../assets/img/css3.png" style="max-width:100%">

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anda dapat menyesuaikan ukuran celah dengan menggunakan salah satu properti berikut ini:</font></font></p>
<ul>
  <li><code class="w3-codespan">grid-column-gap</code></li>
  <li><code class="w3-codespan">grid-row-gap</code></li>
  <li><code class="w3-codespan">grid-gap</code> </li>
</ul>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-column-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti menetapkan kesenjangan antara kolom:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br><strong>&nbsp; grid-column-gap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 50px<span class="cssdelimitercolor" style="color:black">;</span></span></strong><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-row-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti menetapkan kesenjangan antara baris:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br><strong>&nbsp; grid-row-gap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 50px<span class="cssdelimitercolor" style="color:black">;</span></span><br></strong></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti adalah properti singkatan untuk 
 </font></font><code class="w3-codespan">grid-row-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan 
 </font></font><code class="w3-codespan">grid-column-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sifat:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br><strong>&nbsp; grid-gap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 50px 100px<span class="cssdelimitercolor" style="color:black">;</span></span><br></strong></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-gap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti juga dapat digunakan untuk menetapkan kedua kesenjangan baris dan kesenjangan kolom di satu nilai:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br><strong>&nbsp; grid-gap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 50px<span class="cssdelimitercolor" style="color:black">;</span></span><br></strong></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
<p>
</p>
</div>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garis Kisi</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garis antar kolom disebut </font></font><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">garis kolom</font></font></em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Garis antar baris disebut </font></font><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">garis baris</font></font></em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>

<img src="../../assets/img/css4.png" style="max-width:100%">

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Merujuk ke nomor baris saat menempatkan item kisi dalam wadah kisi:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tempatkan item kisi di baris kolom 1, dan biarkan berakhir di baris kolom 3:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .item1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br><strong>
  &nbsp; </strong>grid-column-start<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 1<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; grid-column-end<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 3<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
<p>
</p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p>Place a grid item at row line 1, and let it end on row line 3:</p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .item1 <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br><strong>
  &nbsp; </strong>grid-row-start<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 1<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; grid-row-end<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 3<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
 
</div>
<hr>

<h2>All CSS Grid Properties</h2>

<table class="w3-table-all notranslate">
  <tbody><tr>
    <th style="width:30%">Property</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_column-gap.asp">column-gap</a></td>
    <td>Specifies the gap between the columns</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_gap.asp">gap</a></td>
    <td>A shorthand property for the <em>row-gap</em> and the <em>column-gap</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid.asp">grid</a></td>
    <td>A shorthand property for the <em>grid-template-rows, 
    grid-template-columns, grid-template-areas, grid-auto-rows, 
    grid-auto-columns</em>, and the <em>grid-auto-flow</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-area.asp">grid-area</a></td>
    <td>Either specifies a name for the grid item, or this property is a shorthand property for the <em>grid-row-start</em>, <em>grid-column-start</em>, <em>grid-row-end</em>, and <em>grid-column-end</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-auto-columns.asp">grid-auto-columns</a></td>
    <td>Specifies a default column size</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-auto-flow.asp">grid-auto-flow</a></td>
    <td>Specifies how auto-placed items are inserted in the grid</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-auto-rows.asp">grid-auto-rows</a></td>
    <td>Specifies a default row size</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-column.asp">grid-column</a></td>
    <td>A shorthand property for the <em>grid-column-start</em> and the <em>grid-column-end</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-column-end.asp">grid-column-end</a></td>
    <td>Specifies where to end the grid item</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-column-gap.asp">grid-column-gap</a></td>
    <td>Specifies the size of the gap between columns</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-column-start.asp">grid-column-start</a></td>
    <td>Specifies where to start the grid item</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-gap.asp">grid-gap</a></td>
    <td>A shorthand property for the <em>grid-row-gap</em> and <em>grid-column-gap</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-row.asp">grid-row</a></td>
    <td>A shorthand property for the <em>grid-row-start</em> and the <em>grid-row-end</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-row-end.asp">grid-row-end</a></td>
    <td>Specifies where to end the grid item</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-row-gap.asp">grid-row-gap</a></td>
    <td>Specifies the size of the gap between rows</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-row-start.asp">grid-row-start</a></td>
    <td>Specifies where to start the grid item</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-template.asp">grid-template</a></td>
    <td>A shorthand property for the <em>grid-template-rows</em>, <em>grid-template-columns</em> 
    and <em>grid-areas</em> properties</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-template-areas.asp">grid-template-areas</a></td>
    <td>Specifies how to display columns and rows, using named grid items</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-template-columns.asp">grid-template-columns</a></td>
    <td>Specifies the size of the columns, and how many columns in a grid layout</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_grid-template-rows.asp">grid-template-rows</a></td>
    <td>Specifies the size of the rows in a grid layout</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_row-gap.asp">row-gap</a></td>
    <td>Specifies the gap between the grid rows</td>
  </tr>
</tbody></table>

<br>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="css_rwd_templates.asp">❮ Previous</a>
<a class="w3-right w3-btn" href="css_grid_container.asp">Next ❯</a>
</div>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
                <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CK2a97jpmfACFcpFKwodWFsEPg"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_1" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" allow="conversion-measurement 'src'" srcdoc="" style="border: 0px; vertical-align: bottom;" data-google-container-id="6" data-load-complete="true"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Kontainer Grid</font></span><font style="vertical-align: inherit;"> CSS</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<div class="grid-container">
  <div class="grid-item item1"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
  <div class="grid-item item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
  <div class="grid-item item3"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
  <div class="grid-item item4"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></h1></div>
  <div class="grid-item item5"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></h1></div>
  <div class="grid-item item6"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></h1></div>  
  <div class="grid-item item7"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></h1></div>
  <div class="grid-item item8"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></h1></div>
</div>
<p>
</p>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kontainer Grid</font></font></h2>
<p><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">Untuk membuat elemen HTML berperilaku sebagai wadah kisi, Anda harus menyetel </font></font><code class="w3-codespan">display</code><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">properti ke </font></font><code class="w3-codespan">
grid</code><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">atau </font></font><code class="w3-codespan">inline-grid</code><font style="vertical-align: inherit;"><font class="" style="vertical-align: inherit;">.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wadah kisi terdiri dari item kisi, ditempatkan di dalam kolom dan baris.</font></font></p>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti grid-template-kolom</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-template-columns</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti mendefinisikan jumlah kolom dalam tata letak grid Anda, dan dapat menentukan lebar setiap kolom.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nilainya adalah daftar yang dipisahkan spasi, di mana setiap nilai menentukan lebar kolom masing-masing.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda ingin tata letak kisi Anda berisi 4 kolom, tentukan lebar dari 4 kolom tersebut, atau "otomatis" jika semua kolom harus memiliki lebar yang sama.</font></font></p> 

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buat kisi dengan 4 kolom:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  grid-template-columns<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> auto auto auto auto<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>

<div class="w3-panel w3-note">
<p><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Jika Anda memiliki lebih dari 4 item dalam kisi 4 kolom, kisi akan secara otomatis menambahkan baris baru untuk memasukkan item.</font></font></p>
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-template-columns</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti juga dapat digunakan untuk menentukan ukuran (lebar) dari kolom.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tetapkan ukuran untuk 4 kolom:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  grid-template-columns<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 80px 200px auto 40px<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti grid-template-row</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">grid-template-rows</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti mendefinisikan ketinggian setiap baris.</font></font></p>
<div class="grid-container2" style="grid-template-columns:auto auto auto auto;grid-template-rows:80px 200px;">
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></h1></div>
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></h1></div>
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></h1></div>  
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></h1></div>  
  <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></h1></div>  
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nilainya adalah daftar yang dipisahkan spasi, di mana setiap nilai menentukan tinggi baris masing-masing:</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  grid-template-rows<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 80px 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>

<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti konten justify</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">justify-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti digunakan untuk menyelaraskan seluruh grid dalam wadah.</font></font></p>
  <div class="grid-container2" style="grid-template-columns:50px 50px 50px;justify-content: space-evenly;">
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></h1></div>
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></h1></div>
    <div><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></h1></div>  
  </div>
<div class="w3-panel w3-note">
<p><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Lebar total kisi harus kurang dari lebar penampung agar </font></font><code class="w3-codespan">justify-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti memiliki efek apa pun.</font></font></p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-evenly<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-around<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-between<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</p>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> start<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> end<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti align-content</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">align-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti digunakan untuk </font></font><em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
vertikal</font></font></em><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> menyelaraskan seluruh grid dalam wadah.</font></font></p>

<div class="w3-white notranslate w3-padding">
  <div class="grid-container2" style="height:400px;grid-template-columns:auto auto auto;align-content: center;">
    <div><h1>1</h1></div>
    <div><h1>2</h1></div>
    <div><h1>3</h1></div>  
    <div><h1>4</h1></div>
    <div><h1>5</h1></div>
    <div><h1>6</h1></div>  
  </div>
</div>

<div class="w3-panel w3-note">
<p><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Tinggi total kisi harus kurang dari tinggi wadah agar </font></font><code class="w3-codespan">align-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti memiliki efek apa pun.</font></font></p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-evenly<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-around<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-between<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> start<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .grid-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>
  &nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> grid<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 400px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
    align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> end<span class="cssdelimitercolor"></span>
    </div>

<br>
<div id="mypagediv2" style="position:relative;text-align:center;"></div>
<br>

</div>
<div class="w3-col l10 m12" id="main"> 
<h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kontainer </font><font style="vertical-align: inherit;">CSS </font></font><span class="color_h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Flex</font></font></span><font style="vertical-align: inherit;"></font></h1> 
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen Induk (Penampung)</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seperti yang kami tentukan di bab sebelumnya, ini adalah </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">wadah
</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> fleksibel </font><font style="vertical-align: inherit;">(area biru) dengan tiga </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">item</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> fleksibel </font><font style="vertical-align: inherit;">:</font></font></p>

<div class="flex-container2">
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kontainer flex menjadi fleksibel dengan menyetel </font></font><code class="w3-codespan">display</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti ke
 </font></font><code class="w3-codespan">flex</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">:</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>

<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span> </span></div>
 
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti wadah fleksibel adalah:</font></font></p>

<ul>
  <li><a href="#flex-direction"><code class="w3-codespan">flex-direction</code></a></li>
  <li><a href="#flex-wrap"><code class="w3-codespan">flex-wrap</code></a></li>
  <li><a href="#flex-flow"><code class="w3-codespan">flex-flow</code></a></li>
  <li><a href="#justify-content"><code class="w3-codespan">justify-content</code></a></li>
  <li><a href="#align-items"><code class="w3-codespan">align-items</code></a></li>
  <li><a href="#align-content"><code class="w3-codespan">align-content</code></a></li>
</ul>
<hr>

<div class="anchor-container"><a id="flex-direction"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti flex-direction</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-direction</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan properti di arah mana wadah ingin menumpuk item fleksibel.</font></font></p>

<div class="flex-container2" style="flex-direction:column">
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">column</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai tumpukan barang-barang fleksibel vertikal (dari atas ke bawah):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-direction<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> column<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">column-reverse</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai tumpukan barang-barang fleksibel vertikal (tapi dari bawah ke atas):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-direction<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> column-reverse<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">row</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai tumpukan barang-barang fleksibel horizontal (dari kiri ke kanan):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-direction<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> row<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">row-reverse</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai tumpukan barang-barang fleksibel horizontal (tapi dari kanan ke kiri):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-direction<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> row-reverse<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>
<hr>

<div class="anchor-container"><a id="flex-wrap"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti flex-wrap</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti menentukan apakah item fleksibel harus membungkus atau tidak.</font></font></p>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh di bawah ini memiliki 12 item flex, untuk mendemonstrasikan </font></font><code class="w3-codespan">
flex-wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">propertinya </font><font style="vertical-align: inherit;">dengan lebih baik </font><font style="vertical-align: inherit;">.</font></font></p>

  <div class="flex-container2" style="flex-wrap:wrap">
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></h1></div>  
  </div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menetapkan bahwa item fleksibel akan membungkus jika perlu:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">nowrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menetapkan bahwa item fleksibel tidak akan membungkus (ini adalah default):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> nowrap<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">wrap-reverse</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menetapkan bahwa barang-barang yang fleksibel akan membungkus jika perlu, dalam urutan terbalik:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap-reverse<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>
<hr>

<div class="anchor-container"><a id="flex-flow"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti aliran fleksibel</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-flow</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti adalah properti singkatan untuk pengaturan baik </font></font><code class="w3-codespan">
flex-direction</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan 
 </font></font><code class="w3-codespan">flex-wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sifat.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-flow<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> row wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>
<hr>

<div class="anchor-container"><a id="justify-content"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti konten justify</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">justify-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti digunakan untuk menyelaraskan item fleksibel:</font></font></p>
  <div class="flex-container2" style="justify-content:center">
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
  </div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">center</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai sejalan item fleksibel di tengah wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-start</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai disejajarkan item fleksibel pada awal wadah (ini adalah default):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-start<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-end</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai sejalan item fleksibel pada akhir wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-end<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">space-around</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan item fleksibel dengan ruang sebelumnya, antara, dan setelah baris:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-around<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">space-between</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan item fleksibel dengan ruang antara garis:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-between<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>
<hr>

<div class="anchor-container"><a id="align-items"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti align-item</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">align-items</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti digunakan untuk menyelaraskan item fleksibel.</font></font></p>

<div class="flex-container2" style="align-items:center;height:200px;">
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
  <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
</div>

<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam contoh ini kami menggunakan penampung tinggi 200 piksel, untuk mendemonstrasikan </font></font><code class="w3-codespan">
align-items</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti </font><font style="vertical-align: inherit;">dengan lebih baik </font><font style="vertical-align: inherit;">.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">center</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai disejajarkan item flex di tengah wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-start</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai sejalan item fleksibel di bagian atas wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-start<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-end</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai sejalan item fleksibel di bagian bawah wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-end<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">stretch</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai membentang item fleksibel untuk mengisi wadah (ini adalah default):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> stretch<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">baseline</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai meluruskan item fleksibel seperti baseline disejajarkan mereka:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 200px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> baseline<span class="cssdelimitercolor" style="color:black">;</span></span><br></span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div>
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Catatan:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> contoh ini menggunakan ukuran font yang berbeda untuk menunjukkan bahwa item disejajarkan dengan garis dasar teks:</font></font></p>

<div class="w3-white notranslate w3-padding">
<div style="position:relative;">
<hr style="position:absolute;color:red;background-color:red;border-color:red;top:42px;width:100%">
</div>
  <div class="flex-container2" style="align-items:baseline;height:100px;">
    <div class="flex-item2"><h1>1</h1></div>
    <div class="flex-item2"><h6>2</h6></div>
    <div class="flex-item2"><h3>3</h3></div>  
    <div class="flex-item2"><small>4</small></div>  
  </div>
</div>
<p> 
</div>
<hr>

<div class="anchor-container"><a id="align-content"></a></div>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti align-content</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">align-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti digunakan untuk menyelaraskan garis fleksibel.</font></font></p>
  <div class="flex-container2" style="flex-wrap:wrap;align-content:space-between;height:300px;">
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></h1></div>  
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></h1></div>
    <div class="flex-item2"><h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></h1></div>  
  </div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam contoh ini kami menggunakan penampung tinggi 600 piksel, dengan </font></font><code class="w3-codespan">
flex-wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti disetel ke </font></font><code class="w3-codespan">wrap</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, untuk mendemonstrasikan </font></font><code class="w3-codespan">align-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">properti </font><font style="vertical-align: inherit;">dengan lebih baik </font><font style="vertical-align: inherit;">.</font></font></p>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">space-between</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan garis fleksibel dengan ruang yang sama di antara mereka:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-between<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">space-around</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan garis fleksibel dengan ruang sebelumnya, antara, dan setelah mereka:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> space-around<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">stretch</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai membentang garis fleksibel untuk mengambil ruang yang tersisa (ini adalah default):</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> stretch<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">center</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">menampilkan nilai menampilkan garis flex di tengah wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-start</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan garis fleksibel pada awal wadah:</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-start<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>

<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The </font></font><code class="w3-codespan">flex-end</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nilai menampilkan garis fleksibel pada akhir wadah:&nbsp;</font></font></p>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; 
  display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 600px<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  flex-wrap<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> wrap<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; 
  align-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex-end<span class="cssdelimitercolor" style="color:black">;</span></span><br>
</span><span class="cssdelimitercolor" style="color:black">}</span>
 </span></div> 
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pemusatan Sempurna</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dalam contoh berikut, kita akan menyelesaikan masalah gaya yang sangat umum: pemusatan sempurna.</font></font></p>
  <div class="flex-container2" style="justify-content:center;align-items:center;height:300px;">
    <div class="flex-item2" style="height:100px;width:100px;"></div>
  </div>

<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SOLUSI:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Setel </font><font style="vertical-align: inherit;">properti </font></font><code class="w3-codespan">justify-content</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">dan </font></font><code class="w3-codespan">align-items</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ke
 </font></font><code class="w3-codespan">center</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">, dan item flex akan berada di tengah dengan sempurna:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate cssHigh"><span class="cssselectorcolor" style="color:brown">
  .flex-container <span class="cssdelimitercolor" style="color:black">{</span><span class="csspropertycolor" style="color:red"><br>&nbsp; display<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> flex<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; height<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 300px<span class="cssdelimitercolor" style="color:black">;</span></span><br><strong>&nbsp; justify-content<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> 
  center<span class="cssdelimitercolor" style="color:black">;</span></span><br>&nbsp; align-items<span class="csspropertyvaluecolor" style="color:mediumblue"><span class="cssdelimitercolor" style="color:black">:</span> center<span class="cssdelimitercolor" style="color:black">;</span></span><br></strong></span><span class="cssdelimitercolor" style="color:black">}</span><br>  </span></div> 
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Properti Kontainer CSS Flexbox</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tabel berikut mencantumkan semua properti CSS Flexbox Container:</font></font></p>
<table class="w3-table-all notranslate">
  <tbody><tr>
    <th style="width:25%">Property</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_align-content.asp">align-content</a></td>
    <td>Modifies the behavior of the flex-wrap property. It is similar to align-items, but instead of aligning flex items, it aligns flex lines</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_align-items.asp">align-items</a></td>
    <td>Vertically aligns the flex items when the items do not use all available space on the cross-axis</td>
  </tr>
  <tr>
    <td><a href="/cssref/pr_class_display.asp">display</a></td>
    <td>Specifies the type of box used for an HTML element</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_flex-direction.asp">flex-direction</a></td>
    <td>Specifies the direction of the flexible items inside a flex container</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_flex-flow.asp">flex-flow</a></td>
    <td>A shorthand property for flex-direction and flex-wrap</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_flex-wrap.asp">flex-wrap</a></td>
    <td>Specifies whether the flex items should wrap or not, if there is not enough room for them on one flex line</td>
  </tr>
  <tr>
    <td><a href="/cssref/css3_pr_justify-content.asp">justify-content</a></td>
    <td>Horizontally aligns the flex items when the items do not use all available space on the main-axis</td>
  </tr>
  </tbody></table>

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
