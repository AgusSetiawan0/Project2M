<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crowdfund</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
        <style media="screen">
          @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1d5aaa!important;
              }
          }
          .navbar {
                  background-color: rgba(0, 0, 0, 0.5);
          }

          .top-nav-collapse {
            /* #1C2331 */
            background-color: #1d5aaa;
          }

          /* Adding color to the Navbar on mobile */
          @media  only screen and (max-width: 768px) {
            .navbar {
              background-color: #1d5aaa; }
          }
          html,
          body,
          header,
          .jarallax {
            height: 100vh;
          }

          html,
          body,
          header,
          .intro-2 {
            height: 700px;
          }
        </style>

        <style type="text/css">/* Chart.js */
          @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
          @keyframes  chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
          .chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
        </style>

        <style type="text/css" id="jarallax-clip-0">
          #jarallax-container-0 {
               clip: rect(0 1349px 600px 0);
               clip: rect(0, 1349px, 600px, 0);
          }
        </style>

        <style type="text/css" id="jarallax-clip-1">
          #jarallax-container-1 {
            clip: rect(0 1349px 700px 0);
            clip: rect(0, 1349px, 700px, 0);
          }
        </style>

        <style type="text/css" id="jarallax-clip-2">
          #jarallax-container-2 {
            clip: rect(0 1349px 700px 0);
            clip: rect(0, 1349px, 700px, 0);
          }
        </style>
    </head>

    <body>

      <!--Navbar-->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <br>
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand h5" href="/">Crowdfund</a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="basicExampleNav">
              <!-- Links -->
              
              <ul class="navbar-nav ml-auto">
                <?php if(Route::has('login')): ?>
                  <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link h5" href="<?php echo e(url('/home')); ?>">Home</a>
                    </li>
                    <?php else: ?>
                      <li class="nav-item">
                          <a class="nav-link h5" href="<?php echo e(route('login')); ?>">Login</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link h5" href="<?php echo e(route('register')); ?>">Register</a>
                      </li>
                  <?php endif; ?>
                <?php endif; ?>
              </ul>
              <!-- Links -->
          </div>
          <!-- Collapsible content -->
        </div>
        <br>
      </nav>
      
      <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: none; background-repeat: no-repeat; background-size: cover; background-position: center center; z-index: 0;">
        <div class="mask rgba-stylish-strong">
          <div class="container flex-center text-center">
            <div class="row mt-5">
              <div class="col-md-12 wow fadeIn mb-3" style="visibility: visible; animation-name: fadeIn;">

                <h1 class="display-3 mb-2 wow fadeInDown text-white" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInDown; animation-delay: 0.3s;">
                  Crowdfund
                </h1>

                <h4 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn text-white" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                  Memudahkan Anda Berinvestasi Di bidang Perikanan
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
          <div style="background-image:url(<?php echo e(asset('image/tambak.jpg')); ?>); background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1349px; height: 932px; overflow: hidden; pointer-events: none; margin-top: -373.5px; transform: translate3d(0px, 41.5px, 0px);">
          </div>
        </div>
      </div>

      
      <div class="container-fluid grey darken-3">
        <div class="container">
          <!--Grid row-->
          <br><br>
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold text-white">
                  Mengapa Crowdfund ?
                </h1>
            </div>
            <!--Grid column-->
          </div>
          <br>
          <div class="row">
            <div class="col-md- text-center h5">
              <p align="justify" class="text-white">
                Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.
              </p>
            </div>
          </div>
          <!--Grid row-->
        </div>
        <br><br>
      </div>

      
      <div class="view jarallax intro-2" data-jarallax='{"speed": 0.2}' style="background-image: none; background-repeat: no-repeat; background-size: cover; background-position: center center; z-index: 0;">
        <div class="mask grey lighten-3">
          <div class="container flex-center text-center">
            <div class="row mt-5">
              <div class="col-md-12 wow fadeIn mb-3" style="visibility: visible; animation-name: fadeIn;">

                <h1 class="display-3 mb-2 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInDown; animation-delay: 0.3s;">
                  Bagaimana Crowdfund Bekerja
                </h1>
                <br>
                <h6 class="text-uppercase mb-3 mt-1 font-weight-bold wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h6>
              </div>
            </div>
          </div>
        </div>

        <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
          <div style=" background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; position: fixed; top: 0px; left: 0px; width: 1349px; height: 1112px; overflow: hidden; pointer-events: none; margin-top: -463.5px; transform: translate3d(0px, 57.2px, 0px);"></div>
        </div>
      </div>

      <div class="container-fluid blue">
        <h1 class="blue blue-text">fjdahgfasdgfhasdgf</h1>
        <br>
      </div>

      
      <div class="container">
        <h1 class="h1-reponsive mb-4 mt-2 black-text font-bold text-center" style="padding:20px">Project Pilihan</h1>
      </div>
      <div class="view jarallax intro-2" data-jarallax='{"speed": 0.2}' style="background-image: none; background-repeat: no-repeat; background-size: cover; background-position: center center; z-index: 0;">
        <div class="mask rgba-purple-slight">
          <div class="container h-100 d-flex align-items-center d-flex justify-content-center">
            <div class="row mt-5">
              <div class="col-md-12 wow fadeIn mb-3" style="visibility: hidden; animation-name: none;">
                
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <!--Card-->
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-cascade narrower mb-4" style="margin-top: 28px">

                        <!--Card image-->
                        <div class="view view-cascade">
                            <img src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg" class="card-img-top" alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-body card-body-cascade">
                            <h5 class="pink-text"></i><?php echo e($project->judul); ?></h5>
                            <!--Title-->
                            <h6 class="card-title">Rp.<?php echo e($project->jumlah_uang); ?></h6>
                            <h6 class="card-title">Total Slot : <?php echo e($project->slot); ?></h6>
                            <!--Text-->
                            <p class="card-text"><?php echo e($project->deskripsi); ?></p>
                            <a href="/projects/<?php echo e($project->slug); ?>" class="btn btn-unique">Lihat</a>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <div class="container text-center">
                  <a href="/projects" class="btn btn-warning btn-rounded btn-lg" role="button">Lihat Project Lain&nbsp; >></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;">
          <div style="background-image:url(<?php echo e(asset('image/tambakudang.jpg')); ?>); background-position: 50% 50%; background-size: cover; background-repeat: no-repeat;  position: fixed; top: 0px; left: 0px; width: 1349px; height: 1112px; overflow: hidden; pointer-events: none; margin-top: -463.5px; transform: translate3d(0px, 353.6px, 0px);"></div>
        </div>
      </div>

      
      <div class="container">
          <!--Grid row-->
          <div class="row">
              <!--Grid column-->
              <div class="col-md-12 text-center my-3">
                  <br>
                  <h1 class="font-weight-bold pink-text mb-3">Deskripsi Perusahaan.</h1>
                  <p align="justify">
                    Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores maxime nesciunt possimus quis, soluta velit debitis amet, veritatis cupiditate reprehenderit.
                  </p>
              </div>
              <!--Grid column-->
          </div>
          <!--Grid row-->
      </div>

      <!-- Footer -->
      <footer class="page-footer font-small light-blue darken-4 pt-4">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
          <!-- Grid row -->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
              <!-- Content -->
              <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
              <p>Here you can use rows and columns here to organize your footer content.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate esse
                quasi, veritatis totam voluptas nostrum.</p>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mb-4">About</h5>
              <ul class="list-unstyled">
                <li>
                  <p>
                    <a href="#!">PROJECTS</a>
                  </p>
                </li>
                <li>
                  <p>
                    <a href="#!">ABOUT US</a>
                  </p>
                </li>
                <li>
                  <p>
                    <a href="#!">BLOG</a>
                  </p>
                </li>
                <li>
                  <p>
                    <a href="#!">AWARDS</a>
                  </p>
                </li>
              </ul>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
              <!-- Contact details -->
              <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
              <ul class="list-unstyled">
                <li>
                  <p>
                    <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                </li>
                <li>
                  <p>
                    <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                </li>
                <li>
                  <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                </li>
                <li>
                  <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </li>
              </ul>
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none">
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">&copy; 2018 Copyright:
          <a href="#"></a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->

      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>

      <script>
        new WOW().init();
      </script>

      <div class="hiddendiv common"></div>

    </body>
</html>
