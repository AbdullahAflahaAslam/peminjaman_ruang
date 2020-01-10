<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Peminjaman Ruang </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/bootstrap.css" rel="stylesheet" />
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/jcarousel.css" rel="stylesheet" />
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/flexslider.css" rel="stylesheet" />
  <link href="<?php  echo base_url(); ?>/assets/Flattern/css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="<?php  echo base_url(); ?>/assets/Flattern/skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php  echo base_url(); ?>/assets/Flattern/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php  echo base_url(); ?>/assets/Flattern/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php  echo base_url(); ?>/assets/Flattern/ico/apple-touch-icon-72-precomposed.png" />

  <!-- data tables -->
    <link href="<?php echo base_url(); ?>assets/user/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/user/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/user/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/user/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/user/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <link rel="apple-touch-icon-precomposed" href="<?php  echo base_url(); ?>/assets/Flattern/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo/logo-uns-biru.png">
  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <!-- <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
         <!--  <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a> -->
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
<!--                 <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li> -->
                <?php if ($_SESSION['login_status'] != 'admin'): ?>
                  <li><a href="#Profile" data-toggle="modal"><i class="icon-user"></i>Profile</a></li>
                <?php endif ?>
                <li><a href="<?php if($_SESSION['login_status'] == 'admin'){echo base_url('admin/logout');} else{echo base_url('auth/logout');}?>" data-toggle="modal">Logout</a></li>
              </ul>
            </div>


            <!-- Signup Modal -->
           <!--  <div id="Profile" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Setting  <strong>Profile</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nama</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Nama" name="nama_user" value="<?php echo $_SESSION['nama']; ?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">NIM/NIP</label>
                    <div class="controls">
                      <input type="text" id="inputSignupPassword" placeholder="NIM_NIP" value="<?php echo $_SESSION['NIM_NIP']; ?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div> -->
            <!-- end signup modal -->


            <!-- Sign in Modal -->
            <!-- <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div> -->
            <!-- end signin modal -->


            <!-- Reset Modal -->
            <!-- <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div> -->
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
<!--               <a href="index.html"><img src="<?php  echo base_url(); ?>/assets/Flattern/img/logo.png" alt="" class="logo" /></a> -->
              <a href="https://fp.uns.ac.id/"><h4>FAKULTAS PERTANIAN </h4></a>
              <h1>Universitas Sebelas Maret Surakarta </h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <?php if ($_SESSION['login_status'] == 'admin'){ ?>
                      <li class="dropdown">
                        <a href="<?php echo base_url('admin'); ?>">Home</a>
                      </li>
                      <li class="dropdown">
                        <a href="<?php echo base_url('admin/setting'); ?>">Setting</a>
                      </li>
                    <?php } else { ?>
                    <li class="dropdown active">
                      <a href="<?php echo base_url('user'); ?>">Home </i></a>
                    </li>
                    <li class="dropdown">
                      <a href="<?php echo base_url('user/Peminjaman'); ?>">Daftar Peminjaman <!-- <i class="icon-angle-down"></i> --></a>
                    </li>
                    <?php } ?>
                    <!-- <li class="dropdown">
                      <a href="#">Daftar Ruang </i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="pricingbox.html">Pricing boxes</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li> -->
                   <!--  <li class="dropdown">
                      <a href="#">Pinjam Ruang </a>
                    </li> -->
<!--                     <li class="dropdown">
                      <a href="#">Cetak Dokumen </a>
                    </li> -->

                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <?php echo $contents; ?>
    <footer>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Sistem Peminjaman Ruang - FP UNS.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
<!--             <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </footer>
  </div>


<!--   model profile -->
             <div id="Profile" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Setting  <strong>Profile</strong></h4>
              </div>
              <div class="modal-body">
              <form method="POST" action="<?php  echo base_url(); ?>user/Profile" class="form-horizontal" >
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Nama</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Nama" name="nama_user" value="<?php echo $_SESSION['nama']; ?>">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">NIM/NIP</label>
                    <div class="controls">
                      <input type="text" id="inputSignupPassword" name="NIM_NIP" placeholder="NIM_NIP" disabled="" value="<?php echo $_SESSION['NIM_NIP']; ?>" required="">
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Username</label>
                    <div class="controls">
                      <input type="text" id="inputSignupPassword" placeholder="Username" name="user" value="<?php echo $_SESSION['user']; ?>" required="">
                    </div>
                  </div>
                <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Last Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" name="last_pass" placeholder="Last Password" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">New Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" name="pass" placeholder="New Password" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" name="confirm_pass" placeholder="Password" required="">
                       <input type="hidden" id="inputSignupPassword2" name="id_user" placeholder="<?php echo $_SESSION['id']; ?>" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <input type="submit" name="save" class="btn" value="Save"></input>
                    </div>
                  <!--   <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p> -->
                  </div>
                </form>
              </div>
            </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
    
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.easing.1.3.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/bootstrap.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.fancybox.pack.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.fancybox-media.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/google-code-prettify/prettify.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/portfolio/jquery.quicksand.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/portfolio/setting.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.flexslider.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.nivo.slider.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/modernizr.custom.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.ba-cond.min.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/jquery.slitslider.js"></script>
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php  echo base_url(); ?>/assets/Flattern/js/custom.js"></script>

  <!-- <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/js/bootstrap.min.js"></script> -->
   <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

  <!-- datatables -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

</body>
</html>
