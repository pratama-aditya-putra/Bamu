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

  <title>"Bamu - Banyak Ilmu"</title>

  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/mobster.css">
    <style>
        .button1{
            background-color: transparent;
            color: white;
            border: 0;
            font-size: 20px;
        }
        .button1:hover{
            background-color: white;
            color: black;
        }
        .button2{
            background-color: white;
            color: black;
            border: 0;
            font-size: 20px;
        }
        .button2:hover{
            background-color: white;
            color: black;
        }
        .btn3 {
          color: #ffffff;
          background-color: #0328fc;
          border-color: transparent !important;
        }

        .btn3:hover {
          color: #ffffff;
          background-color: #1737f1;
          box-shadow: 0 4px 12px rgba(61, 88, 243, 0.3);
        }

        .btn3:focus {
          color: #ffffff;
          background-color: #1737f1;
          box-shadow: none;
        }

        .btn3.disabled,
        .btn-primary:disabled {
          color: #ffffff;
          background-color: #556df4;
        }

        .btn3:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
          color: #ffffff;
          background-color: #3D58F3;
          box-shadow: none;
        }

        .btn3:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
          box-shadow: none;
        }
    </style>
    <?php
            if(isset($_POST['submit'])){
                $name = $_POST['username'];

            if(!empty($_POST['avatar'])) {    
                foreach($_POST['avatar'] as $value){
                    $profile = $value;
                }
            }
                $temp1 = $_POST['temp'];
                $temp2 = $_POST['pass2'];
                if($temp1 == $temp2){
                    $pass = $temp1;
                }
                if(($name == "")&&($pass == "")){
                    $output = "update user set profile = '$profile' where username='$username';";
                }elseif($name == ""){
                    $output = "update user set profile = '$profile', password = '$pass' where username='$username';";
                }else{
                    $output = "update user set fName = '$name', profile = '$profile', password = '$pass' where username='$username';";
                }
                $query = mysqli_query($koneksi, $output);
                header('Location:home.php');
        }
    ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/favicon-light.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" onclick="window.location.href='home.php'">Back to Home</button>
      </div>
    </div>
  </div>
</nav>

<div class="page-hero-section bg-image hero-home-2" style="background-image: url(../assets/img/bg_hero_2.svg);">
  <div class="hero-caption"  style="margin-left: 32%;">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100"  style="text-align: center;">
        <div class="col-lg-6 wow fadeInUp" style="margin-top: 0%; text-align:center;">
          <h1 class="mb-4 fw-normal  ml-2">Edit Account</h1>
            <div style="width: 100%;height: 460px; border: solid; border-radius: 20px; border-color: white;">
                    <form class="form" style="margin-left: 30px; margin-right: 30px;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
                        <?php   
                                $output = "select * from user where username = '$username'";
                                $query = mysqli_query($koneksi, $output);
                                while($d1 = mysqli_fetch_array($query)){
                                    $name = $d1['fName'];
                                    $profile = $d1['profile'];
                                }
                            ?>
                        <div   style="margin-bottom: 20px;"></div>
                      <label class="sr-only" for="FormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="text-align:center; width:123px;" >Username</div>
                        </div>
                        <input type="text" name="username" class="form-control" id="username" placeholder="<?php echo "$name"; ?>">
                      </div>
                      <div   style="margin-bottom: 20px;"></div>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="height:40px;">Avatar Profile</div>
                        </div>
                        <div style="text-align:left; margin-left:10px;">
                          <div class="d-flex flex-row">
                          <div class="p-2">
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault1" value="1"  checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                <img src="../assets/img/avatar1.png" class="rounded-pill" style="width:50px;" >
                              </label>
                            </div>

                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault1" value="2">
                              <label class="form-check-label" for="flexRadioDefault1">
                                <img src="../assets/img/avatar2.png" class="rounded-pill" style="width:50px;">
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault2" value="3">
                              <label class="form-check-label" for="flexRadioDefault2">
                                <img src="../assets/img/avatar3.png" class="rounded-pill" style="width:50px;">
                              </label>
                            </div>
                              </div>
                              
                          <div class="p-2">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault2" value="4">
                              <label class="form-check-label" for="flexRadioDefault2">
                                <img src="../assets/img/avatar4.png" class="rounded-pill" style="width:50px;">
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault2" value="5">
                              <label class="form-check-label" for="flexRadioDefault2">
                                <img src="../assets/img/avatar5.png" class="rounded-pill" style="width:50px;">
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="avatar[]" id="flexRadioDefault2" value="6">
                              <label class="form-check-label" for="flexRadioDefault2">
                                <img src="../assets/img/avatar6.png" class="rounded-pill" style="width:50px;">
                              </label>
                            </div>
                              </div>
                        </div>
                         </div>
                     </div>
                        <div   style="margin-bottom: 20px;"></div>
                      <label class="sr-only" for="FormInputGroupUsername2" name="update">Password</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="text-align:center; width:123px;" >Password</div>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder=""  name="temp">
                      </div>
                        <div   style="margin-bottom: 20px;"></div>
                      <label class="sr-only" for="FormInputGroupUsername2">Re-enter New Password</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text" style="text-align:center; width:123px;" >Re-enter Pass</div>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder=""  name="pass2">
                      </div>
                      <button type="submit" class="btn3 float-right rounded-pill" style="width: 100px; height: 50px;" name="submit">Update</button>
                        <div   style="margin-bottom: 20px;"></div>
                    </form>
        </div>
      </div>
    </div>
  </div>
    </div></div>

<div style="background-color: darkslategrey; color: white; height: 70px;">
  
  <hr>
  <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2021 <a href="https://www.macodeid.com/" class="fg-white fw-medium">"Bamu - Banyak Ilmu"</a> Kelompok3 - Sistem Informasi</p>
</div>
    
<script>
    const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("username");

    if (localStorage.checkbox && localStorage.checkbox !== "") {
      rmCheck.setAttribute("checked", "checked");
      emailInput.value = localStorage.username;
    } else {
      rmCheck.removeAttribute("checked");
      emailInput.value = "";
    }

    function lsRememberMe() {
      if (rmCheck.checked && emailInput.value !== "") {
        localStorage.username = emailInput.value;
        localStorage.checkbox = rmCheck.value;
      } else {
        localStorage.username = "";
        localStorage.checkbox = "";
      }
    }
</script>
    
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>