<?php
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BabyGram</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="BabyGram" href="BabyGram/main.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  body {
    background-size: cover;
    background-color: white;
    /*background-image: url('camera-3000953_640.png');*/
    background-image: url(../../BabyCollage.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
    /*background-size: 90%;*/
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
    }
    elseif (isset($_POST['register'])) { //user registering

        require 'register.php';

    }
}
?>

<body>
  <div class="navbar">
    <div class="main-title">
    <h1 style="font-family: Calibri; font-size: 4em;">BabyGram</h1>
    <i style="color:lightgrey;">"Babies are always more trouble than you thought and more wonderful."</i>
    <hr>
    </div>
    <div class="start-btns">
      <button class="button" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-sign-in"></i> Login</button>
      <button class="button" onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-clipboard"></i> Sign Up</button>
    </div>
  </div>
  <!-- Modal Login -->
  <!-- ================================ -->

  <div class="container">
  <div class="row">
    <div id="id01" class="w3-modal w3-animate-opacity" role="dialog">
      <div class="modal-dialog ">
      <form class="modal-content" action="index.php" method="post" autocomplete="off">
      <!-- <form class="modal-content" action="main.php"> -->
        <div class="modal-header">
          <h4 class="modal-title">
            Login
            <a onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</a>
          </h4>
        </div>
        <div class="modal-body">
          <p>Please enter account information.</p>
          <hr>

          <label for="userName" class="ui-hidden-accessible col-sm-3">Username:</label>
          <input class="col-sm-6" type="text" name="email" id="userName" placeholder="Username">
          <div class="clearfix"></div>
          <br>

          <label for="passwd" class="ui-hidden-accessible col-sm-3">Password:</label>
          <input class="col-sm-6" type="password" name="password" id="passwd" placeholder="Password">
          <div class="clearfix"></div>
          <br>
          <div class="clearfix"></div>

        </div>
        <div class="modal-footer">
          <button type="submit" id="submitLogin" data-inline="true" value="Log in" name="login"><i class="fa fa-check-square-o"></i> Log In</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><i class="fa fa-times-rectangle-o"></i> Cancel</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  </div>
  <!-- Modal Sign Up -->
  <!-- ================================ -->

  <div class="container">
  <div class="row">
    <div id="id02" class="modal w3-animate-opacity" role="dialog">
      <div class="modal-dialog ">
      <form class="modal-content" action="index.php" method="post" autocomplete="off" >
      <!-- <form class="modal-content" action="/action_page.php"> -->
        <div class="modal-header">
          <h4 class="modal-title">Sign Up
              <a class="pull-right close" onclick="document.getElementById('id02').style.display='none'">X</a>
          </h4>
        </div>
        <div class="modal-body">
          <p>Please fill in this form to create an account.</p>

          <hr>

                    <hr>
                    <label class="col-sm-3" for="firstname"><b>First Name</b></label>
                    <input class="col-sm-6" type="text" placeholder="Enter First Name" name='firstname' required>
                    <div class="clearfix"></div>
                    <br>

                    <label class="col-sm-3" for="lastname"><b>Last Name</b></label>
                    <input class="col-sm-6" type="text" placeholder="Enter Last Name" name='lastname' required>
                    <div class="clearfix"></div>
                    <br>

                    <label class="col-sm-3" for="email"><b>Email</b></label>
                    <input class="col-sm-6" type="text" placeholder="Enter Email" name='email' required>
                    <div class="clearfix"></div>
                    <br>

                    <label class="col-sm-3" for="psw"><b>Password</b></label>
                    <input class="col-sm-6" type="password" placeholder="Enter Password" name='password' required>
                    <div class="clearfix"></div>
                    <br>

                    <label class="col-sm-3" for="psw-repeat"><b>Repeat Password</b></label>
                    <input class="col-sm-6" type="password" placeholder="Repeat Password" name="" required>
                    <div class="clearfix"></div>
                    <br>

      <!--    <label  class="col-sm-12">
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
          <br>  -->
        </div>
        <div class="modal-footer">
          <button type="submit" class="signup" name="register"><i class="fa fa-check-square-o"></i>  Sign Up</button>
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn"><i class="fa fa-times-rectangle-o"></i> Cancel</button>
        </div>
      </form>
    </div>
    </div>
  </div>
  </div>
  <script src="main.js" charset="utf-8"></script>
  <script src="browse.js" charset="utf-8"></script>
  <footer style="padding: 15px;">

    <div class="container" style="text-align:center;">
      <p style="display:inline;"><a href="about.html">About Us</a> | <a href="support.html">Support</a>
        | <a href="jobs.html">Jobs</a> | <a href="terms.html">Terms</a> | <a href="language.html">Language</a>
      </p>
        <p>
          <ul class="list-inline mb-0 " style="display:inline;">
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/jackie/">
                <i class="fa fa-fw fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://plus.google.com/communities/113075194636442434542">
                <i class="fa fa-fw fa-google-plus"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/Cinnabon">
                <i class="fa fa-fw fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.linkedin.com/school/california-state-university-fullerton/">
                <i class="fa fa-fw fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </p>
      <p>&copy 2018 BabyGram</p>
    </div>
</footer>
</body>

</html>
