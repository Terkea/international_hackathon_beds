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
    Now UI Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
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
            <a class="nav-link" href="<?php echo base_url() . 'user/logout'; ?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?php echo base_url(); ?>assets/img/bg5.jpg');">
      </div>
      <div class="container">
        <div class="photo-container">
          <img src="<?php echo base_url(); ?>assets/img/ryan.jpg" alt="">
        </div>
        <h3 class="title"><?php echo $user[0]->first_name . " " .  $user[0]->last_name; ?></h3>
        <p class="category"><?php echo $user[0]->email;?></p>
      </div>
    </div>
    <div class="section">
        <h3 class="title">Team</h3>
        
        <?php if ($my_team === false): ?>
        <h5 class="description">
        It looks like you haven't signed up to any team yet.
        You can either create your own team or join an existing one.
        </h5>

        <div class="container">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-signup" data-background-color="orange">
                <form action="<?php echo base_url(); ?>user/join_team" method="post" class="form">
                    <div class="card-header text-center">
                        <h3 class="card-title title-up">Join a team</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <input type="hidden" name="student_id" value="<?php echo $user[0]->id?>">
                        <label for="exampleFormControlSelect1" class="text-center">Your university has those teams currently registered:</label>
                        <select class="form-control" name="team_id" id="exampleFormControlSelect1">
                            
                            <option value="" style="color: black;">Pick up your team...</option>
                            <?php foreach ($teams as $key): ?>
                              <option value="<?= $key->id ?>" style="color: black;"> <?= $key->name ?> </option>
                              <br>
                            <?php endforeach ?>
                        </select>
                        </div>
                        </div>
                      <div class="card-footer text-center">
                        <input type="submit" class="btn btn-neutral btn-round btn-lg" value="Team up">
                      </div>
                    </div>
                </form>
            </div>
          </div>

          <div class="section section-contact-us text-center">
            <div class="container">
            <form action="<?php echo base_url(); ?>user/create_team" method="post" class="form">
              <h2 class="title">Create your own team</h2>
              <div class="row">
                <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                  <div class="input-group input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="hidden" name="university_id" value="<?php echo $user[0]->university_id;?>">
                    <input type="hidden" name="team_leader" value="<?php echo $user[0]->id;?>">
                    <input type="text" class="form-control" name="team_name" placeholder="Team name">
                  </div>
                  <div class="send-button">
                    <input type="submit" class="btn btn-primary btn-round btn-block btn-lg" value="Create team">
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>

        <?php else: ?>

        <div class="container">

          <h4 class="text-center">You are currently a proud member of the team <?php echo $my_team[0]->team_id;?></h4>

        </div>
        <?php endif; ?>

        


      </div>
    </div>
    <footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
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
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
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