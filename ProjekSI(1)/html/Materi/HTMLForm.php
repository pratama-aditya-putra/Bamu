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
            <div class="post-title" style="margin:0px;">HTML Form</div>
            <div class="entry-content" style=" width:100%;">
                <div class="w3-col l10 m12" id="main"><br><br>

<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Formulir HTML digunakan untuk mengumpulkan masukan pengguna. </font><font style="vertical-align: inherit;">Masukan pengguna paling sering dikirim ke server untuk diproses.</font></font></p>
<hr>


<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-white w3-padding notranslate">
<form action="#">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen &lt;form&gt;</font></font></h2>
<p><font style="vertical-align: inherit;"></font><code class="w3-codespan">&lt;form&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Elemen </font><font style="vertical-align: inherit;">HTML </font><font style="vertical-align: inherit;">digunakan untuk membuat formulir HTML untuk input pengguna:</font></font></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 .<br>
<i>form elements</i><br>
 .<br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 </div>
</div>
<p>The <code class="w3-codespan">&lt;form&gt;</code> element is a container for different types of input elements, 
such as: text fields, checkboxes, radio 
buttons, submit buttons, etc.</p>
<p>All
the different form elements are covered in this chapter:
<a href="html_form_elements.asp">HTML Form Elements</a>.
</p>

<hr>

<h2>The &lt;input&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;input&gt;</code> element is the most 
used form element. </p>
<p>An <code class="w3-codespan">&lt;input&gt;</code> element can be displayed in 
many ways, depending on the <code class="w3-codespan">type</code> 
attribute.</p>
<p>Here are some examples:</p>
<table class="w3-table-all">
 <tbody><tr>
  <th>Type</th>
  <th>Description</th>
 </tr>
 <tr>
  <td>&lt;input type="text"&gt;</td>
  <td>Displays a single-line text input field</td>
 </tr>
 <tr>
  <td>&lt;input type="radio"&gt;</td>
  <td>Displays a radio button (for selecting one of many choices)</td>
 </tr>
 <tr>
  <td>&lt;input type="checkbox"&gt;</td>
  <td>Displays a checkbox (for selecting zero or more of many choices)</td>
 </tr>
 <tr>
  <td>&lt;input type="submit"&gt;</td>
  <td>Displays a submit button (for submitting the form)</td>
 </tr>
 <tr>
  <td>&lt;input type="button"&gt;</td>
  <td>Displays a clickable button</td>
 </tr>
 </tbody></table>
<p>All the different input types are covered in this chapter:
<a href="html_form_input_types.asp">HTML Input Types</a>.
</p>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CPDXyKDWl_ACFeeeSwUdy8YP-g" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_2__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_3__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>
<h2>Text Fields</h2>
<p>The <code class="w3-codespan">&lt;input type="text"&gt;</code> defines a single-line input field for 
text input.</p>
<div class="w3-example">
<h3>Example</h3>
  <p>A form with input fields for text:</p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
  &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<form>
First name:<br>
<input type="text" name="fname"><br>
Last name:<br>
<input type="text" name="lname">
</form>

<div class="w3-panel w3-note"><p><b>Note:</b> The form itself is not visible. Also note that the default width 
of an input field is 20 characters.</p>
</div>
<hr>
<h2>The &lt;label&gt; Element</h2>
<p>Notice the use of the <code class="w3-codespan">&lt;label&gt;</code> element in the 
example above. </p>
<p>The <code class="w3-codespan">&lt;label&gt;</code> tag defines a label for many 
form elements.</p>
<p>The <code class="w3-codespan">&lt;label&gt;</code> element is useful for 
screen-reader users, because the screen-reader will read out loud the label when 
the user focus on the input element.</p>
<p>The <code class="w3-codespan">&lt;label&gt;</code> element also help users who have 
difficulty clicking on very small regions (such as radio buttons or checkboxes) 
- because when the user clicks the text within the <code class="w3-codespan">&lt;label&gt;</code> element, it toggles 
the radio button/checkbox.</p>
<p>The <code class="w3-codespan">for</code> attribute of the <code class="w3-codespan">&lt;label&gt;</code> tag should 
be equal to the <code class="w3-codespan">id</code> attribute of the <code class="w3-codespan">&lt;input&gt;</code>  
element to bind them together. </p>
<hr>

<h2>Radio Buttons</h2>
<p>The <code class="w3-codespan">&lt;input type="radio"&gt;</code> defines a radio button.</p>
<p>Radio buttons let a user select ONE of a limited number of choices.</p>
<div class="w3-example">
 <h3>Example</h3>
  <p>A form with radio buttons:</p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="male"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="male"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="male"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Male<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="female"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="female"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> 
  for<span class="attributevaluecolor" style="color:mediumblue">="female"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Female<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="other"</span> 
  name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="other"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="other"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Other<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<hr>

<h2>Checkboxes</h2>
<p>The <code class="w3-codespan">&lt;input type="checkbox"&gt;</code> defines a <strong>checkbox</strong>.</p>
<p>Checkboxes let a user select ZERO or MORE options of a limited number of choices.</p>
<div class="w3-example">
 <h3>Example</h3>
  <p>A form with checkboxes:</p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> id<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Bike"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> I have a bike<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> id<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Car"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> 
  I have a car<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> 
  id<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="Boat"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> I have a boat<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label>
<hr>

<h2>The Submit Button</h2>
<p>The <code class="w3-codespan">&lt;input type="submit"&gt;</code> defines a button for submitting the form data to a form-handler.</p>
<p>The form-handler is typically a file on the server with a script for processing 
input data.</p>
<p>The form-handler is specified in the form's <code class="w3-codespan">action</code> 
attribute.</p>
<div class="w3-example">
<h3>Example</h3>
  <p>A form with a submit button:</p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="/action_page.php"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="John"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Doe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<form action="#">
First name:<br>
<input type="text" name="firstname" value="John"><br>
Last name:<br>
<input type="text" name="lastname" value="Doe"><br><br>
<input type="submit" value="Submit">
</form> 
<hr>

<h2>The Name Attribute for &lt;input&gt;</h2>
<p>Notice that each input field must have a <code class="w3-codespan">name</code> attribute to be submitted.</p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika </font></font><code class="w3-codespan">name</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut dihilangkan, nilai field input tidak akan dikirim sama sekali.</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh ini tidak akan mengirimkan nilai kolom input "Nama depan":&nbsp;</font></font></p>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="/action_page.php"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> value<span class="attributevaluecolor" style="color:mediumblue">="John"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>
<br>

</div><div class="w3-col l10 m12" id="main">
<h1><font style="vertical-align: inherit;"><span class="color_h1"><font style="vertical-align: inherit;">Jenis Input</font></span><font style="vertical-align: inherit;"> HTML</font></font><span class="color_h1"><font style="vertical-align: inherit;"></font></span></h1>
<hr>
<p class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bab ini menjelaskan berbagai jenis </font></font><code class="w3-codespan">&lt;input&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">elemen </font><font style="vertical-align: inherit;">HTML </font><font style="vertical-align: inherit;">.</font></font></p>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jenis Input HTML</font></font></h2>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Berikut adalah jenis masukan berbeda yang dapat Anda gunakan dalam HTML:</font></font></p>
<ul>
  <li><code class="w3-codespan">&lt;input type="button"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="checkbox"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="color"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="date"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="datetime-local"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="email"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="file"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="hidden"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="image"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="month"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="number"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="password"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="radio"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="range"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="reset"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="search"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="submit"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="tel"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="text"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="time"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="url"&gt;</code></li>
  <li><code class="w3-codespan">&lt;input type="week"&gt;</code></li>
</ul>

<div class="w3-panel w3-note">
<p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tip:</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Nilai default dari </font></font><code class="w3-codespan">type</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">atribut ini adalah "teks".</font></font></p>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jenis Input Teks</font></font></h2>
<p><code class="w3-codespan">&lt;input type="text"&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
bidang input teks satu baris</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> :</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
  &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beginilah kode HTML di atas akan ditampilkan di browser:</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama depan:</font></font><br>
<input type="text"><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama keluarga:</font></font><br>
<input type="text"><br>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Masukkan Jenis Kata Sandi</font></font></h2>
<p><code class="w3-codespan">&lt;input type="password"&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bidang kata sandi</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> :</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 &nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="username"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Username:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> 
  id<span class="attributevaluecolor" style="color:mediumblue">="username"</span> name<span class="attributevaluecolor" style="color:mediumblue">="username"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="pwd"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Password:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="password"</span> id<span class="attributevaluecolor" style="color:mediumblue">="pwd"</span> name<span class="attributevaluecolor" style="color:mediumblue">="pwd"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beginilah kode HTML di atas akan ditampilkan di browser:</font></font></p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama pengguna:</font></font><br>
<input type="text"><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Kata sandi:</font></font><br>
<input type="password">
<div class="w3-panel w3-note">
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Karakter di bidang kata sandi ditutupi (diperlihatkan sebagai tanda bintang atau lingkaran).
</font></font></p>
</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CJripoXfl_ACFWUycgodHWAPdA" style="display: none;"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; width: 728px; height: 90px;"></div><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_1__container__" style="border: 0pt none; width: 728px; height: 90px;"></div></div>

</div>
<hr>
<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jenis Masukan Kirim</font></font></h2>
<p><code class="w3-codespan">&lt;input type="submit"&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan tombol untuk </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
mengirimkan</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> data formulir ke </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">penangan formulir</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penangan formulir biasanya adalah halaman server dengan skrip untuk memproses data masukan.</font></font></p>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Penangan formulir ditentukan dalam </font></font><code class="w3-codespan">action</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
atribut </font><font style="vertical-align: inherit;">formulir </font><font style="vertical-align: inherit;">:</font></font></p>
<div class="w3-example">
 <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="/action_page.php"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="John"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Doe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beginilah kode HTML di atas akan ditampilkan di browser:</font></font></p>
<form action="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama depan:</font></font><br>
<input type="text" name="firstname" value="John"><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama keluarga:</font></font><br>
<input type="text" name="lastname" value="Doe">
<br><br>
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Kirimkan"></font></font></font></font>
</form> 
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jika Anda menghilangkan atribut nilai tombol kirim, tombol tersebut akan mendapatkan teks default:</font></font></p>
<div class="w3-example">
<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="/action_page.php"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="John"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Doe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<hr>

<h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Jenis Input Reset</font></font></h2>
<p><code class="w3-codespan">&lt;input type="reset"&gt;</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mendefinisikan </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tombol reset</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  
yang akan mengatur ulang semua nilai formulir ke nilai defaultnya:</font></font></p>
<div class="w3-example">
 <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contoh</font></font></h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="attributecolor" style="color:red"> action<span class="attributevaluecolor" style="color:mediumblue">="/action_page.php"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First 
  name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="John"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="lname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Last name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="lname"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Doe"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="reset"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beginilah kode HTML di atas akan ditampilkan di browser:</font></font></p>
<form action="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama depan:</font></font><br>
<input type="text" name="firstname0" value="John"><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Nama keluarga:</font></font><br>
<input type="text" name="lastname0" value="Doe">
<br><br>
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Kirimkan"></font></font></font></font>
<input type="reset">
</form>
<div class="w3-note w3-panel">
<p>If you change the input values and then click the "Reset" button, the form-data will be reset to the default values.</p>
</div>
<hr>

<h2>Input Type Radio</h2>
<p><code class="w3-codespan">&lt;input type="radio"&gt;</code> defines a <strong>radio button</strong>.</p>
<p>Radio buttons let a user select ONLY ONE of a limited number of choices:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="male"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="male"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="male"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Male<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="female"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="female"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> 
  for<span class="attributevaluecolor" style="color:mediumblue">="female"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Female<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="radio"</span> id<span class="attributevaluecolor" style="color:mediumblue">="other"</span> 
  name<span class="attributevaluecolor" style="color:mediumblue">="gender"</span> value<span class="attributevaluecolor" style="color:mediumblue">="other"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="other"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Other<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<hr>

<h2>Input Type Checkbox</h2>
<p><code class="w3-codespan">&lt;input type="checkbox"&gt;</code> defines a <strong>checkbox</strong>.</p>
<p>Checkboxes let a user select ZERO or MORE options of a limited number of choices.</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> id<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Bike"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle1"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> I have a bike<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> id<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Car"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle2"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> 
  I have a car<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="checkbox"</span> 
  id<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="Boat"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vehicle3"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> I have a boat<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label>
<hr>

<h2>Input Type Button</h2>
<p><code class="w3-codespan">&lt;input type="button"&gt;</code> defines a <strong>button</strong>:</p>
<div class="w3-example">
 <h3>Example</h3>
 <div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="button"</span> onclick<span class="attributevaluecolor" style="color:mediumblue">="alert('Hello World!')"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Click Me!"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<p>This is how the HTML code above will be displayed in a browser:</p>
<input type="button" onclick="alert('Hello World!')" value="Click Me!"> 
<hr>

<h2>Input Type Color</h2>
<p>The <code class="w3-codespan">&lt;input type="color"&gt;</code> is used for input fields that should contain a color.</p>
<p>Depending on browser support, a color picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="favcolor"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Select your favorite 
  color:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="color"</span> id<span class="attributevaluecolor" style="color:mediumblue">="favcolor"</span> name<span class="attributevaluecolor" style="color:mediumblue">="favcolor"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Date</h2>
<p>The <code class="w3-codespan">&lt;input type="date"&gt;</code> is used for input fields that should contain a date.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="birthday"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Birthday:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="date"</span> id<span class="attributevaluecolor" style="color:mediumblue">="birthday"</span> name<span class="attributevaluecolor" style="color:mediumblue">="birthday"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div> 
</div>

<p>You can also use the <code class="w3-codespan">min</code> and <code class="w3-codespan">max</code> attributes to add restrictions to dates:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="datemax"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Enter a date before 
  1980-01-01:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="date"</span> id<span class="attributevaluecolor" style="color:mediumblue">="datemax"</span> name<span class="attributevaluecolor" style="color:mediumblue">="datemax"</span> 
  max<span class="attributevaluecolor" style="color:mediumblue">="1979-12-31"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="datemin"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Enter a date after 
  2000-01-01:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="date"</span> id<span class="attributevaluecolor" style="color:mediumblue">="datemin"</span> name<span class="attributevaluecolor" style="color:mediumblue">="datemin"</span> 
  min<span class="attributevaluecolor" style="color:mediumblue">="2000-01-02"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div> 
</div>
<hr>

<h2>Input Type Datetime-local</h2>
<p>The <code class="w3-codespan">&lt;input type="datetime-local"&gt;</code> specifies 
a date and time input field, with no time zone.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="birthdaytime"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Birthday (date and 
  time):<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="datetime-local"</span> id<span class="attributevaluecolor" style="color:mediumblue">="birthdaytime"</span> name<span class="attributevaluecolor" style="color:mediumblue">="birthdaytime"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Email</h2>
<p>The <code class="w3-codespan">&lt;input type="email"&gt;</code> is used for input fields that should contain an e-mail address.</p>
<p>Depending on browser support, the e-mail address can be automatically validated when submitted.</p>
<p>Some smartphones recognize the email type, and add ".com" to the keyboard to match email input.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="email"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Enter your email:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="email"</span> id<span class="attributevaluecolor" style="color:mediumblue">="email"</span> name<span class="attributevaluecolor" style="color:mediumblue">="email"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type File</h2>
<p>The <code class="w3-codespan">&lt;input type="file"&gt;</code> 
defines a file-select field and a "Browse" button for file uploads.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="myfile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Select a file:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="file"</span> id<span class="attributevaluecolor" style="color:mediumblue">="myfile"</span> name<span class="attributevaluecolor" style="color:mediumblue">="myfile"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>


<h2>Input Type Hidden</h2>
<p>The <code class="w3-codespan">&lt;input type="hidden"&gt;</code> 
defines a hidden input field (not visible to a user).</p>
<p>A hidden field let web developers include data that cannot be seen or 
modified by users when a form is submitted.</p>
<p>A hidden field often stores what database record that needs to be updated 
when the form is submitted.</p>
<p><strong>Note:</strong> While the value is not displayed to the user in the 
page's content, it is visible (and can be edited) using any browser's developer 
tools or "View Source" functionality. Do not use hidden inputs as a form of 
security!</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>First name:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="text"</span> id<span class="attributevaluecolor" style="color:mediumblue">="fname"</span> name<span class="attributevaluecolor" style="color:mediumblue">="fname"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>br<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="hidden"</span> id<span class="attributevaluecolor" style="color:mediumblue">="custId"</span> name<span class="attributevaluecolor" style="color:mediumblue">="custId"</span> value<span class="attributevaluecolor" style="color:mediumblue">="3487"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="submit"</span> value<span class="attributevaluecolor" style="color:mediumblue">="Submit"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>


<h2>Input Type Month</h2>
<p>The <code class="w3-codespan">&lt;input type="month"&gt;</code> allows the user to select a month and year.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="bdaymonth"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Birthday (month and 
  year):<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="month"</span> id<span class="attributevaluecolor" style="color:mediumblue">="bdaymonth"</span> name<span class="attributevaluecolor" style="color:mediumblue">="bdaymonth"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Number</h2>
<p>The <code class="w3-codespan">&lt;input type="number"&gt;</code> defines a <strong>
numeric</strong> input field.</p>
<p>You can also set restrictions on what numbers are accepted.</p>
<p>The following example displays a numeric input field, where you can enter a value from 1 to 5:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Quantity (between 1 and 
  5):<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="number"</span> id<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span> name<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span> 
  min<span class="attributevaluecolor" style="color:mediumblue">="1"</span> max<span class="attributevaluecolor" style="color:mediumblue">="5"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Restrictions</h2>
<p>Here is a list of some common input restrictions:</p>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:20%">Attribute</th>
<th>Description</th>
</tr>
<tr>
<td>checked</td>
<td>Specifies that an input field should be pre-selected when the page loads (for type="checkbox" or type="radio")</td>
</tr>
<tr>
<td>disabled</td>
<td>Specifies that an input field should be disabled</td>
</tr>
<tr>
<td>max</td>
<td>Specifies the maximum value for an input field</td>
</tr>
<tr>
<td>maxlength</td>
<td>Specifies the maximum number of character for an input field</td>
</tr>
<tr>
<td>min</td>
<td>Specifies the minimum value for an input field</td>
</tr>
<tr>
<td>pattern</td>
<td>Specifies a regular expression to check the input value against</td>
</tr>
<tr>
<td>readonly</td>
<td>Specifies that an input field is read only (cannot be changed)</td>
</tr>
<tr>
<td>required</td>
<td>Specifies that an input field is required (must be filled out)</td>
</tr>
<tr>
<td>size</td>
<td>Specifies the width (in characters) of an input field</td>
</tr>
<tr>
<td>step</td>
<td>Specifies the legal number intervals for an input field</td>
</tr>
<tr>
<td>value</td>
<td>Specifies the default value for an input field</td>
</tr>
</tbody></table>
<p>
You will learn more about input restrictions in the next chapter.</p>
<p>
The following example displays a numeric input field, where you can enter a 
value from 0 to 100, in steps of 10. The default value is 30:</p>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Quantity:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> 
  type<span class="attributevaluecolor" style="color:mediumblue">="number"</span> id<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span> name<span class="attributevaluecolor" style="color:mediumblue">="quantity"</span> min<span class="attributevaluecolor" style="color:mediumblue">="0"</span> max<span class="attributevaluecolor" style="color:mediumblue">="100"</span> step<span class="attributevaluecolor" style="color:mediumblue">="10"</span> 
  value<span class="attributevaluecolor" style="color:mediumblue">="30"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Range</h2>
<p>The <code class="w3-codespan">&lt;input type="range"&gt;</code> defines a control for entering a number whose exact value is not important (like a slider control). Default 
range is 0 to 100. However, you can set restrictions on what 
numbers are accepted with the <code class="w3-codespan">min</code>, <code class="w3-codespan">max</code>, and <code class="w3-codespan">step</code> attributes:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="vol"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Volume (between 0 and 50):<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="range"</span> id<span class="attributevaluecolor" style="color:mediumblue">="vol"</span> name<span class="attributevaluecolor" style="color:mediumblue">="vol"</span> min<span class="attributevaluecolor" style="color:mediumblue">="0"</span> max<span class="attributevaluecolor" style="color:mediumblue">="50"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Search</h2>
<p>The <code class="w3-codespan">&lt;input type="search"&gt;</code> is used for search fields (a search field behaves like a regular text field).</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="gsearch"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Search Google:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="search"</span> id<span class="attributevaluecolor" style="color:mediumblue">="gsearch"</span> name<span class="attributevaluecolor" style="color:mediumblue">="gsearch"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Tel</h2>
<p>The <code class="w3-codespan">&lt;input type="tel"&gt;</code> is used for input fields that should contain a telephone number.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="phone"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Enter your phone number:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
    <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="tel"</span> id<span class="attributevaluecolor" style="color:mediumblue">="phone"</span> name<span class="attributevaluecolor" style="color:mediumblue">="phone"</span> 
    pattern<span class="attributevaluecolor" style="color:mediumblue">="[0-9]{3}-[0-9]{2}-[0-9]{3}"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Time</h2>
<p>The <code class="w3-codespan">&lt;input type="time"&gt;</code> allows the user to select a time (no time zone).</p>
<p>Depending on browser support, a time picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="appt"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Select a time:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="time"</span> id<span class="attributevaluecolor" style="color:mediumblue">="appt"</span> name<span class="attributevaluecolor" style="color:mediumblue">="appt"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Url</h2>
<p>The <code class="w3-codespan">&lt;input type="url"&gt;</code> is used for input fields that should contain a URL address.</p>
<p>Depending on browser support, the url field can be automatically validated 
when submitted.</p>
<p>Some smartphones recognize the url type, and adds ".com" to the keyboard to match 
url input.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="homepage"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Add your homepage:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="url"</span> id<span class="attributevaluecolor" style="color:mediumblue">="homepage"</span> name<span class="attributevaluecolor" style="color:mediumblue">="homepage"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
<hr>

<h2>Input Type Week</h2>
<p>The <code class="w3-codespan">&lt;input type="week"&gt;</code> allows the user to select a week and year.</p>
<p>Depending on browser support, a date picker can show up in the input field.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>form<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>label<span class="attributecolor" style="color:red"> for<span class="attributevaluecolor" style="color:mediumblue">="week"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span>Select a week:<span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/label<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>&nbsp; 
  <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>input<span class="attributecolor" style="color:red"> type<span class="attributevaluecolor" style="color:mediumblue">="week"</span> id<span class="attributevaluecolor" style="color:mediumblue">="week"</span> name<span class="attributevaluecolor" style="color:mediumblue">="week"</span></span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/form<span class="tagcolor" style="color:mediumblue">&gt;</span></span> </div>
</div>
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
      if((topLimit <= $(window).scrollTop()) && (innerWidth > 970)){
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
