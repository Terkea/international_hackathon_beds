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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  IUSCH | Scenarious
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
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
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?php echo base_url(); ?>assets/img/uni/Colorminium_Bedforshire-Uni-Library_∏Hufton_Crow_013.jpg');">
      </div>
      <div class="container animated fadeIn">
        <h3 class="title animated pulse">Terms and conditions of participation</h3>
        <h5 class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sed quisquam expedita enim magni dolore eum hic rerum totam eius qui vero doloremque numquam suscipit dolorem quasi doloribus, nemo autem.</h5>
      </div>
    </div>
    <div class="section">

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h3 class="title text-center">Available scenarious</h3>
            <div class="row">


                <?php foreach ($scenarious as $key): ?>
                  <div class="col-md-12 blockquote">
                    <h3><?php echo $key['name'];?></h3>
                    <p><?php echo $key['description'];?></p>
                    <footer class="blockquote-footer text-right">DIFFICULTY LEVEL: <?php echo $key['difficulty_level'];?></footer>
                  </div>
                  <br>
                <?php endforeach; ?>

            </div>

          </div>
          <!-- Tab panes -->

        </div>
      </div>
    </div>
    <footer class="footer footer-default text-center">
      <div class=" container ">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>
          University of Bedfordshire
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
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>