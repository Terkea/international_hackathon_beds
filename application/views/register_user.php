<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  IUSCH | Register user
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">

      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          HOME
        </a>
        <a class="navbar-brand" href="#">
          SCENARIOS
        </a>
        <a class="navbar-brand" href="#">
          CONTACT US
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url(); ?>assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange" style="min-height: auto; max-height:none;">
    <div class="page-header-image" style="background-image:url(<?php echo base_url(); ?>assets/img/login.jpg)"></div>
    <div class="content" style="margin-top: 6%;">
      <div class="container">
        <h1 class="title">Register student</h1>
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">

            <form class="form" method="post" action="<?php echo base_url(); ?>register_user/validation">
              <div class="card-header text-center">
              </div>
              <div class="card-body">

              <span class="text-danger">
                <?php echo form_error('first_name');?>
                <?php echo form_error('last_name');?> 
                <?php echo form_error('email');?> 
                <?php echo form_error('university_id');?> 
                <?php echo form_error('course');?> 
                <?php echo form_error('year');?> 
                <?php echo form_error('dob');?> 
                <?php echo form_error('password');?> 
              </span>

                <div class="input-group no-border input-lg">
                  <input type="text" class="form-control" name="first_name"
                  value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
                </div>

                <div class="input-group no-border input-lg">
                  <input type="text" placeholder="Last Name" name="last_name"
                  value="<?php echo set_value('last_name'); ?>" class="form-control" />
                </div>

                 
                <div class="input-group no-border input-lg">
                  <input type="text" placeholder="Email address" name="email"
                  value="<?php echo set_value('email'); ?>" class="form-control" />
                </div>

                 
                <div class="input-group no-border input-lg">
                <select class="form-control" id="select-uni" name="university_id" placeholder="University">
                  <option value="">Select your university...</option>
                  

                  <?php foreach ($universities as $key): ?>
                    <option value="<?= $key['id'] ?>" style="color: black;"> <?= $key['name'] ?> </option>
                    <br>
                  <?php endforeach ?>

                </select>
                </div>

                <div class="input-group no-border input-lg">
                  <input type="text" placeholder="The course your currently studying"
                   value="<?php echo set_value('course'); ?>" name="course" class="form-control" />
                </div>

                 
                <div class="input-group no-border input-lg">
                  <input type="text" placeholder="Year of study" name="year" 
                  value="<?php echo set_value('year'); ?>" class="form-control" />
                </div>

                 
                <div class="input-group no-border input-lg">
                <input type="text" class="form-control date-picker" placeholder="Date of birth" name="dob"
                value="<?php echo set_value('dob'); ?>"  data-datepicker-color="primary">
                </div>

                 
                <div class="input-group no-border input-lg">
                  <input type="password" placeholder="Password" name="password" class="form-control" />
                </div>

                <li>If your university doesnt appear on the select menu that means it wasn't registered yet. To do so please access the following link</li>
                <br>
                <li>By registering you agree on the terms and conditions of the event</li>

              </div>
              <div class="card-footer text-center">
                <input type="submit" name='register_user' class="btn btn-primary btn-round btn-lg btn-block">
            </form>


            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="">
                About Us
              </a>
            </li>
            <li>
              <a href="">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="" target="_blank">Invision</a>. Coded by
          <a href="" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>