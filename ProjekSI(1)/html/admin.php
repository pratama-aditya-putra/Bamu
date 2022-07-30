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
            $output = "select * from admin where username = '$username'";
            $query = mysqli_query($koneksi, $output);
            while($d1 = mysqli_fetch_array($query)){
                $IDadmin = $d1['IDadmin'];
                $fNameAdmin = $d1['fNameAdmin'];
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
            }
            #bar-fixed.stickIt {
              position: fixed;
              top: 0px;
            }
            .sidebar {
                font-family: verdana;
              float: left;
              width: 100%;
              height: 120px;
                border: solid;
            }
            #text {
              float: right;
              width: 75%;
            }
            .bar{
                margin-top: 10px;
            }
          .skills {
              text-align: center;
              padding-top: 10px;
              padding-bottom: 10px;
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
          <h3 class="mb-4 fw-medium" style="font-size: 70px;">Admin Home</h3>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
 
    <div id="bar-fixed">
    <div class="sidebar card-page" style="height:200px;">
        <div class="bar " style="text-align: center; ">
        <div class="bar" style="text-align: left; margin-left: 10px; margin-right:10px;">
            <p>ID Admin : <?php echo $IDadmin; ?></p></div>
        </div>
        <div class="bar" style="text-align: left; margin-left: 10px;">
            <p><?php echo $fNameAdmin; ?></p>
        </div>
        <div class="bar float-left">
            <div class="d-flex flex-row bd-highlight" style="margin-left: 0px;">
              <div class="p-2 bd-highlight">
                <button type="button" class="btn btn-primary" onclick="window.location.href='aksi_logout.php'" style="width: 90px; padding-left: 10px; font-size: 18px; padding-top: 3px; padding-bottom: 5px;">Logout</button></div>
            </div>
        </div>
    </div>
  </div>

  <div id="text">
      <div class="card-page">
          <h5 class="fg-primary">Table User</h5>
          <hr>

          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight" style=" font-size: 20px;width: 400px;">
                  <div> 
                    <?php
                        include('koneksi.php');
                        $temp="user";
                        $i = 0;
                        $data = mysqli_query($koneksi,"select * from $temp;");
                        $output = "<table style='margin-left:30px; font-size:19px; text-align:center; padding:10px;'>";
                        foreach($data as $key => $var) {
                            $j = 0;
                            if($key===0) {
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>" . $col . '</td>';
                                    $j = $j+1;
                                    if($j == 1) $temp1 = $col;
                                }
                                $output .= '<td>Operasi</td>';
                                $output .= '</tr>';
                                $j=0;
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>". $val ."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'>
                                                <form action='hapus_proses.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2' onclick = 'getConfirmation(\"$temp2\", \"$temp1\");'>hapus</button>
                                                </form></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            else {
                                $output .= "<tr  style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>".$val."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'>
                                                <form action='hapus_proses.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2' onclick = 'getConfirmation(\"$temp2\", \"$temp1\");'>hapus</button>
                                                </form></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            $i = $i+1;
                        }
                        $output .= '</table>';
                        echo $output;
                    ?>
                </div>
              </div>
            </div>
          
        </div>
        <div class="card-page mt-3">
          <h5 class="fg-primary">Tabel Materi</h5>
          <hr>
          
          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight">
                  <div> 
                    <?php
                        include('koneksi.php');
                        $temp="materi";
                        $i = 0;
                        $data = mysqli_query($koneksi,"select * from $temp;");
                        $output = "<table style='margin-left:30px; font-size:19px; text-align:center; padding:10px;'>";
                        foreach($data as $key => $var) {
                            $j = 0;
                            if($key===0) {
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>" . $col . '</td>';
                                    $j = $j+1;
                                    if($j == 1) $temp1 = $col;
                                }
                                $output .= '<td>Operasi</td>';
                                $output .= '</tr>';
                                $j=0;
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>". $val ."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            else {
                                $output .= "<tr  style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>".$val."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            $i = $i+1;
                        }
                        $output .= '</table>';
                        echo $output;
                    ?>
                </div>
              </div>
            </div>
        </div>
        <div class="card-page mt-3" style="margin-bottom: 50px;">
          <h5 class="fg-primary">Tabel Courses</h5>
          <hr>
          
          <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight">
                  <div> 
                    <?php
                        include('koneksi.php');
                        $temp="courses";
                        $i = 0;
                        $data = mysqli_query($koneksi,"select * from $temp;");
                        $output = "<table style='margin-left:30px; font-size:19px; text-align:center; padding:10px;'>";
                        foreach($data as $key => $var) {
                            $j = 0;
                            if($key===0) {
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>" . $col . '</td>';
                                    $j = $j+1;
                                    if($j == 1) $temp1 = $col;
                                }
                                $output .= '<td>Operasi</td>';
                                $output .= '</tr>';
                                $j=0;
                                $output .= "<tr style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>". $val ."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            else {
                                $output .= "<tr  style='padding:10px;'>";
                                foreach($var as $col => $val) {
                                    $output .= "<td style='padding:10px;'>".$val."</td>";
                                    $j = $j+1;
                                    if($j == 1) $temp2 = $val;
                                }
                                $output .= "<td style='padding:10px;'>
                                                <table><tr><td style='padding:10px;'>
                                                <form action='coba.php' method='post'>
                                                    <button type='submit' name='temp' value='$temp $temp1 $temp2'>edit</button>
                                                </form></td><td style='padding:10px;'></td></tr>
                                                </table>
                                                </td>";
                                $output .= '</tr>';
                            }
                            $i = $i+1;
                        }
                        $output .= '</table>';
                        echo $output;
                    ?>
                </div>
              </div>
            </div>
        </div>
  </div>
        
      </div>
    </div>
</div>
</main>    


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
    $(window).scroll(function() {
      //console.log(topLimit <= $(window).scrollTop())
      if (topLimit <= $(window).scrollTop()) {
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