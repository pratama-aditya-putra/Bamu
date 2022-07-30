<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>"Bamu" - Login</title>

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
        <button class="btn btn-primary rounded-pill" onclick="window.location.href='index.html'">Back to Home</button>
      </div>
    </div>
  </div>
</nav>

<div class="page-hero-section bg-image hero-home-2" style="background-image: url(../assets/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100 d-flex justify-content-center ">
        <div class="col-lg-6 wow fadeInUp" style="margin-bottom: 6%;text-align:center;">
          <h1 class="mb-4 fw-normal">"Banyak Ilmu"</h1>
          <h6 class="mb-4 ml-3">Login to Continue Learn & Practice HTML</h6>
            <div style="width: 78%;height: 400px; border: solid; border-radius: 20px; border-color: white; margin-left:10%;">
                <div class="d-flex justify-content-center align-items-stretch p-2" style="height: 80px;">
                  <div class="p-2 flex-fill" style="border-right : solid;border-color: white; width:100%;">
                      <button class="button2" style="width: 95%;height: 50px; border-top-left-radius: 10px; margin-left:3%;" onclick="window.location.href='login.php'">Login</button>
                  </div>
                  <div class="p-2 flex-fill" style="border-left: solid; border-color: white; width:100%;">
                      <button class="button1" style="width: 95%;height: 50px; border-top-right-radius: 10px; margin-left:3%;" onclick="window.location.href='signup.php'">Sign Up</button></div>
                </div>
                <div>
                    <form class="form" style="margin-left: 30px; margin-right: 30px;" action="aksi_login.php" method="post">
                        <div   style="margin-bottom: 20px;"></div>
                      <label class="sr-only" for="FormInputGroupUsername2">Username</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><img src="../assets/img/icon2.png" style="width: 20px; height: 20px;"> </div>
                        </div>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                      </div>
                        <div   style="margin-bottom: 20px;"></div>
                        <label class="sr-only" for="FormInputGroupUsername2">Password</label>
                      <div class="input-group mb-2 mr-sm-2"  style="margin-bottom: 30px;">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><img src="../assets/img/icon3.png" style="width: 20px; height: 20px;"></div>
                        </div>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                      </div>
                        <div   style="margin-bottom: 30px;"></div>
                      <div class="form-group">
                        <div class="form-check float-left">
                          <input class="form-check-input" type="checkbox" value="lsRememberMe" id="rememberMe">
                          <label class="form-check-label" for="gridCheck">
                            Remember me
                          </label>
                        </div>
                      </div>
                      <div   style="margin-bottom: 100px;"></div>
                      <button class="btn3 float-right rounded-pill" style="width: 100px; height: 50px;">Login</button>

                    </form>
            </div>
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