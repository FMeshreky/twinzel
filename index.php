<?php

  include('./php/pdo.php');
  // include('./php/login.php');
  // include('./php/signup.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Twinzel - More Social Fun!</title>

    <!-- Main Font -->
    <script src="js/webfontloader.min.js"></script>

    <script>
      WebFont.load({
        google: {
          families: ['Roboto:300,400,500,700:latin']
        }
      });
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

    <!-- Theme Styles CSS -->
    <link rel="stylesheet" type="text/css" href="css/theme-styles.css">
    <link rel="stylesheet" type="text/css" href="css/blocks.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">

    <!-- Styles for plugins -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">

</head>
<body class="landing-page">

<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<div class="header--standard header--standard-landing">
  <div class="container">
    <div class="header--standard-wrap">
      <a href="index.php" class="logo">
        <img src="img/logo-landing.png" alt="Twinzel">
        <!-- <h6 class="logo-title">Twinzel</h6>
        SOCIAL NETWORK -->
      </a>
      <a href="#" class="open-responsive-menu js-open-responsive-menu">
        <svg class="twinz-menu-icon"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
      </a>
      <div class="nav nav-pills nav1 header-menu">
        <div class="mCustomScrollbar">
          <ul>
            <li class="nav-item">
              <a href="index.php" class="nav-link">Learn More</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Terms of Service</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">We Are Hiring!</a>
            </li>
            <li class="close-responsive-menu js-close-responsive-menu">
              <svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
            </li>
            <li class="nav-item js-expanded-menu">
              <a href="#" class="nav-link">
                <svg class="twinz-menu-icon"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
                <svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
              </a>
            </li>
            <!-- <li class="shopping-cart more">
              <a href="#" class="nav-link">
                <svg class="twinz-shopping-bag-icon"><use xlink:href="icons/icons.svg#twinz-shopping-bag-icon"></use></svg>
                <span class="count-product"></span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="header-spacer--standard"></div>

<div class="container">
  <div class="row display-flex">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="landing-content">
            <h1>Welcome to Twinzel!<br />It Is More Than Fun Here!</h1>
            <p>With more than 50 mollion active users, here you have got all the fun waiting for you. <br />Join and invite more friends for awesome surprizes and more fun for everybody.
            </p>
            <a href="#" class="btn btn-md btn-border c-white">Learn More</a>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
      <div class="registration-login-form">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">
              <svg class="twinz-login-icon"><use xlink:href="icons/icons.svg#twinz-login-icon"></use></svg>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#home" role="tab">
              <svg class="twinz-register-icon"><use xlink:href="icons/icons.svg#twinz-register-icon"></use></svg>
            </a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="profile" role="tabpanel" data-mh="log-tab">
            <div class="title h4">Login to your account</div>



            <form class="content" action="php/login.php" method="post">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Email Address</label>
                    <input class="form-control" placeholder="" type="email" name="email" required>
                  </div>
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Password</label>
                    <input class="form-control" placeholder="" type="password" name="pwd" required>
                  </div>
                  <div class="remember">
                    <!--<div class="checkbox">
                      <label>
                        <input name="optionsCheckboxes" type="checkbox" name="checkbox">
                        Remember Me
                      </label>
                    </div>-->
                    <div class="checkbox">

                    </div>
                    <a href="#" class="forgot">Forgot your password?</a>
                  </div>
                  <button href="#" name="submit" class="btn btn-lg btn-primary full-width" type="submit">Login</button>
                  <div class="or"></div>
                  <a href="#" class="btn btn-lg bg-google full-width btn-icon-left"><i class="fa fa-google-plus" aria-hidden="true"></i>Login with Google+</a>
                  <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>
                  <p>Don't you have an account? <a href="#home" data-toggle="tab">Register Now!</a> It is fun down there ;)</p>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="home" role="tabpanel" data-mh="log-tab">
            <div class="title h4">Register to Twinzel</div>

            <form class="content" action="php/signup.php" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">First Name</label>
                    <input class="form-control" placeholder="" type="text" name="first" required>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Last Name</label>
                    <input class="form-control" placeholder="" type="text" name="last" required>
                  </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Email Address</label>
                    <input class="form-control" placeholder="" type="email" name="email" required>
                  </div>
                  <div class="form-group label-floating is-empty">
                    <label class="control-label">Password</label>
                    <input class="form-control" placeholder="" type="password" name="pwd" required>
                  </div>
                  <div class="form-group date-time-picker label-floating is-empty">
                    <label class="control-label">Birthday</label>
                    <input name="datetimepicker" required>
                    <span class="input-group-addon">
                      <svg class="twinz-calendar-icon"><use xlink:href="icons/icons.svg#twinz-calendar-icon"></use></<svg>
                    </span>
                  </div>
                  <div class="form-group label-floating is-select">
                    <label class="control-label">Gender</label>
                    <select class="selectpicker form-control" name="gen" required>
                      <option style="display:none"></option>
                      <option value="MA">Male</option>
                      <option value="FE">Female</option>
                    </select>
                  </div>
                  <div class="remember">
                    <div class="checkbox">
                      <label>
                        <input name="optionsCheckboxes" type="checkbox" required>
                        I agree to <a href="#">Terms of Service</a> of Twinzel.
                      </label>
                    </div>
                  </div>

                  <button href="#" name="register" class="btn btn-purple btn-lg full-width" type="submit">Register</button>
                </div>
              </div>
            </form>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... end Login-Registeration Form -->

<!-- <a class="back-to-top" href="#">
  <img src="icons/back-to-top.svg" alt="arrow" class="back-icon">
</a> -->

<!-- jQuery first, then Other JS, -->
<script src="js/jquery-3.2.0.min.js"></script>
<!-- Js effects for material design. + Tooltips -->
<script src="js/material.min.js"></script>
<!-- Helper scripts (Tabs, Equal height, Scrollbar, etc) -->
<script src="js/theme-plugins.js"></script>
<!-- Init functions -->
<script src="js/main.js"></script>

<!-- Select / Sorting script -->
<script src="js/selectize.min.js"></script>

<!-- Swiper / Sliders -->
<script src="js/swiper.jquery.min.js"></script>

<!-- Datepicker input field script -->
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.min.js"></script>

<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/mediaelement-playlist-plugin.min.js"></script>

</body>
</html>
