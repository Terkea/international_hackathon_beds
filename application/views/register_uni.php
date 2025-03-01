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
  IUSCH | Register university
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>/assets/demo/demo.css" rel="stylesheet" />
  <style>
  ul.ui-autocomplete {
      list-style: none;
      list-style-type: none;
      padding: 0px;
      margin: 0px;
  }
  </style>
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">

      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url() . 'welcome'?>">
          HOME
        </a>
        <a class="navbar-brand" href="<?php echo base_url() . 'scenarious'?>">
          SCENARIOS
        </a>
        <a class="navbar-brand" href="<?php echo base_url() . 'user/contact_us'?>">
          CONTACT US
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url(); ?>assets/img/blurred-image-1.jpg">
        <?php if ($this->session->userdata('email') != ''): ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'user/my_account'?>">My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'user/logout'?>">Logout</a>
            </li>
          </ul>
        <?php else: ?>
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'user'; ?>">Login</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url() . 'register_user'?>">Student</a>
                <a class="dropdown-item" href="<?php echo base_url() . 'register_uni'?>">University</a>
              </div>
            </div>
          </li>
        </ul>
        <?php endif; ?>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" >
    <div class="page-header-image" style="background-image:url(<?php echo base_url(); ?>assets/img/uni/UoB_JimStephenson-23-WebRes.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-signup animated shake" data-background-color="orange" style="margin-top:10%">

            <form class="form" method="post" action="<?php echo base_url(); ?>register_uni/validation">
              <div class="card-header text-center">
              <h3 class="card-title title-up">Register University</h3>
                <div class="logo-container">
                </div>
              </div>
              <div class="card-body">



              <span class="text-danger">
                <?php echo form_error('name');?>
                <?php echo form_error('contact_first_name');?> 
                <?php echo form_error('contact_last_name');?> 
                <?php echo form_error('contact_email');?> 
              </span>

                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" value="<?php echo set_value('contact_first_name'); ?>" name="contact_first_name" placeholder="Contact first name" class="form-control" />
                </div>

                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" value="<?php echo set_value('contact_last_name'); ?>" name="contact_last_name" placeholder="Contact last name" class="form-control" />
                </div>

                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" value="<?php echo set_value('contact_email'); ?>" name="contact_email" placeholder="Contact email" class="form-control" />
                </div>

                <div class="input-group no-border input-lg" id="div_suggestions">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" value="<?php echo set_value('name'); ?>" name="name" id="name" class="form-control" placeholder="University name">
                </div>

               
          

              </div>
              

              <div class="card-footer text-center">
                <input type="submit" name='register_uni' class="btn btn-neutral btn-round btn-lg">
            </form>
            </div>
          </div>
        </div>
      </div>
    

  </div>
  <!--   Core JS Files   -->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/js/autocomplete_uni.js" type="text/javascript"></script>




</body>

</html>