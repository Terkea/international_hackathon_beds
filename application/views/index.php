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
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  IUSCH | Home
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

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top">
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
  <div class="wrapper" style="padding-top: 70px;">
    
      <div class="container">
      <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block" filter-color="orange" src="<?php echo base_url() . 'assets/img/uni/University-of-Bedfordshire-UK.jpg'?>" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounce" style="background-color:  black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit laboriosam officia minima dicta quidem modi, in illum quod corporis a perferendis, necessitatibus nihil provident mollitia impedit, voluptatibus nemo dolore ducimus.</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block" filter-color="orange" src="<?php echo base_url() . 'assets/img/uni/Colorminium_Bedforshire-Uni-Library_∏Hufton_Crow_019.jpg'?>" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounce" style="background-color:  black;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis alias cupiditate nemo saepe totam quibusdam perspiciatis accusamus temporibus explicabo commodi aperiam animi omnis laudantium quod aut maxime, fugit consequatur modi.</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block" filter-color="orange" src="<?php echo base_url() . 'assets/img/uni/84096602_530518220903651_6661097498427260928_n.jpg'?>" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="animated bounce" style="background-color:  black;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo aliquam aspernatur eius maiores, vero quibusdam illum quo et facere ab eaque minus itaque suscipit, delectus aperiam quae esse cum at.</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="now-ui-icons arrows-1_minimal-right"></i>
          </a>
        </div>      
      </div>
  </div>

 
            



    </div>
    <div class="section section-about-us animated pulse">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">About us</h2>
            <h5 class="description">The UK currently faces a major IT skills deficit 
            and we’re struggling to keep up with the pace of digital change. Education is the power tool we must use to kickstart innovation and sustain our future in the industry.</h5>
          </div>
        </div>
        <div class="separator separator-primary"></div>
        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('<?php echo base_url(); ?>assets/img/previous_hackathon/20191201_150343.jpg')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                  <br>
                  <br>
                  <small>-NOAA</small>
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container" style="background-image: url('<?php echo base_url(); ?>assets/img/previous_hackathon/20191201_155325.jpg')"></div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('<?php echo base_url(); ?>assets/img/previous_hackathon/20191201_162742.jpg')"></div>
              <h3>Title</h3>
              <p>Details about the Hackathon go here</p>
                <ul>
                    <li>Register your University Student Chapter</li>
                    <li>Create a Group</li>
                    <li>Join a Group</li>
                    <li>Scenarios will be available prior to the Hackathon here</li>
                    <li>Prize winners to be awarded their prizes in London</li>
                </ul>
            </div>
          </div>
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