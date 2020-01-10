<!DOCTYPE html>



<html lang="en">



  <head>



    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



    <!-- Meta, title, CSS, favicons, etc. -->



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1">



      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/logo/logo-uns-biru.png">







    <title>Sistem Peminjaman Ruang </title>



    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/img/logo_sishu.png">



    <!-- Bootstrap -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Font Awesome -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">



    <!-- NProgress -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">



    <!-- iCheck -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/table.css" rel="stylesheet">



  



    <!-- bootstrap-progressbar -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">



    <!-- JQVMap -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>



    <!-- bootstrap-daterangepicker -->



    <link href="<?php echo base_url(); ?>assets/user/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">



    <link rel="icon" type="image/png" sizes="16x16" href="">



    <!-- Custom Theme Style -->



    <link href="<?php echo base_url(); ?>assets/user/build/css/custom.min.css" rel="stylesheet">



  </head>
  <body class="login">
    <div class="container body">

      <div class="main_container">
           <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Peminjaman Ruang <small>Fakultas Pertanian UNS</small></h3>
                    
                  <div class="filter">

                

                   </div>
                    <div class="clearfix"></div>
                <!-- menu -->

                    <ul class="nav nav-pills" role="tablist">
                    <li role="presentation"><a href="#">Daftar Peminjaman</a>
                    </li>
                    <li role="presentation"><a href="#">Daftar Ruang</a>
                    </li>
                    <li role="presentation"><a href="#">Pinjam Ruang</a>
                    </li>
                    <li role="presentation"><a href="#">Cetak Dokumen</a>
                    </li>
                    <li role="presentation"><a href="<?php echo base_url();?>/auth/logout">Logout</a>
                    </li>
                     <div id="calndar" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="fa fa-calendar"></i>
                        <span><?php echo date('Y-m-d')?></span>
                        </div>
                   <!--  <li role="presentation" class="dropdown">
                      <a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                  Dropdown
                                  <span class="caret"></span>
                              </a>
                      <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Action</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Another action</a>
                        </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Something else here</a>
                        </li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="https://twitter.com/fat">Separated link</a>
                        </li>
                      </ul>
                    </li> -->
                   
                  </ul>
                <!-- batas menu -->
                  </div>
                  <div class="x_content">
                    <?php echo $contents; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    <footer>
                      <div class="pull-right">
                        <a href=""> FP UNS | Fakultas Pertanian Universitas Sebelas Maret</a>
                      </div>
                      <div class="clearfix"></div>
                    </footer>
</div>  
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php  echo  base_url(); ?>assets/user/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/Flot/jquery.flot.resize.js"></script>
   <!-- Flot plugins -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo  base_url(); ?>assets/user/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/moment/min/moment.min.js"></script>
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php  echo base_url(); ?>assets/user/build/js/custom.min.js"></script>


</html>



