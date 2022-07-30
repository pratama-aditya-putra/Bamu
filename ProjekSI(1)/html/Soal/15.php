<!DOCTYPE html>
<?php
session_start();
include "../koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:../login.php");
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
    <?php
    $output = "select * from score where IDuser = '$username';";
    $query = mysqli_query($koneksi, $output);
    while($d1 = mysqli_fetch_array($query)){
        $xxx = $d1['soal15'];
    }
    if($xxx == 1){
        $input = "CREATE TABLE Persons";
    }else{
        if(isset($_POST['SubmitAns'])){
            $input = $_POST['ex1'];
            if(($input == "CREATE TABLE Persons")||($input == "create table Persons")){
                $output1 = "update score set soal15=1 where IDuser = '$username';";
                $query1 = mysqli_query($koneksi, $output1); 
                $output1 = "select * from user where username = '$username';";
                $query1 = mysqli_query($koneksi, $output1);
                while($d2 = mysqli_fetch_array($query1)){
                    $temp = $d2['score'];
                }
                $temp += 130;
                $output1 = "update user set score = $temp where username = '$username';";
                $query1 = mysqli_query($koneksi, $output1);
                $xxx = 1;
            }
            else{
                $input = "";
            }
        }
        else{
            $input = "";
        }
        
    }
    ?>
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
          <a class="nav-link" href="../Materi/HTMLDasar.php">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Materi/CSS.php">CSS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Materi/PHP.php">PHP</a>
        </li>
        <li class="nav-item   active">
          <a class="nav-link" href="1.php">Exercise</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" onclick="window.location.href='../aksi_logout.php'">Log Out</button>
      </div>
    </div>
  </div>
</nav>

    <main>
<div class="page-hero-section bg-image hero-home-2" style="background-image: url(../../assets/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
        
<div class="d-flex justify-content-center" style="padding:5%;">
        <div class="row widget-wrap" style="border:solid; margin-top:10%; margin-right:5%; color:black; text-align:center; height:100%;">
            <h3 style="margin-bottom:6%;">Page Navigation</h3>
            <table style=" font-size:25px;">
                <?php 
                    $output = "select * from score where IDuser = '$username';";
                    $query = mysqli_query($koneksi, $output);
                    while($d2 = mysqli_fetch_array($query)){
                        for($i=1;$i<=15;$i++){
                            if($i % 3 == 1){
                                echo "<tr>";
                            }
                            $temp = $d2['soal'.$i];
                            if($temp == 1)
                                echo "<td> <button type='button' class='btn btn-dark' style='width:100%;' onclick='window.location.href =\"$i.php\"  '>$i</button> </td>";
                            else
                                echo "<td> <button type='button' class='btn btn-danger' style='width:100%;' onclick='window.location.href =\"$i.php\"  '>$i</button> </td>";
                            if($i % 3 == 0){
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </table>
    </div>
    <div class="row align-items-center h-100" style="margin-top:10%;">
        <div class="col-lg-6 wow fadeInUp" style="margin-bottom: 0px;">
            <form autocomplete="off" id="w3-exerciseform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="bg-dark" style="width:750px;; padding:10px;  border-radius:10px;">
                <h1>PHP Exercises</h1>
                <div class="exercisewindow" style="background-color:white; color:black; padding:10px;">
<h2>Altering Table Exercise:</h2>
<p>Write the correct SQL statement to create a new table called <code class="w3-codespan">Persons</code>.</p>
<div class="exerciseprecontainer">
<pre><input name="ex1" maxlength="20" style="width: 212px;"  id="text-box1" value="<?php echo $input; ?>" <?php if($xxx == 1) echo 'disabled' ?>> (
  PersonID int,
  LastName varchar(255),
  FirstName varchar(255),
  Address varchar(255),
  City varchar(255) 
);
</pre>
</div>
<br>
                <button type="submit" class="btn btn-success" name="SubmitAns">Submit Answer »</button>
                </div>
            </form>
            <div class="d-flex justify-content-between" style="width:750px; margin-top:50px;">
                <button class=" btn btn-dark"type="button" onclick="window.location.href='14.php'" style="width:120px;">« Before</button>
                <div></div>
            </div>
      </div>
    </div>
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
      if (topLimit <= $(window).scrollTop()) {
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
