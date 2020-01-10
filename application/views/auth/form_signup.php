<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/assets/login/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/logo/logo-uns-biru.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Fakultas Pertanian UNS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/login/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/assets/login/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>/assets/login/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->

  <!-- End Navbar -->
  <div class="section section-contact-us text-center">
      <div class="container">
        <form method="POST" action="<?php echo base_url(); ?>auth/signup">
        <h2 class="title">Register</h2>
        <p class="description">Personal Information</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
          <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons business_badge"></i>
                </span>
              </div>
              <input type="text" class="form-control"  name= "nama_user" placeholder="Name..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_single-02"></i>
                </span>
              </div>
              <select class="form-control" name="status" required="">
                <option value="">Status</option>
                <option class="form-control" value="1">Mahasiswa</option>
                <option class="form-control" value="2">Dosen</option>
                <option class="form-control" value="3">Karyawan</option>
                <option class="form-control" value="4">Staf</option>
              </select>
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons business_bank"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="fakultas" placeholder="Fakultas..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons business_briefcase-24"></i>
                </span>
              </div>

              <select class="form-control" name="prodi" required="">
                <option value="">Prodi</option>
                <option class="form-control" value="Agribisnis">Agribisnis</option>
                <option class="form-control"value="Agroteknologi">Agroteknologi</option>
                <option class="form-control"value="D2 Teknologi Hasil Pertanian PDD">D2 Teknologi Hasil Pertanian PDD</option>
                <option class="form-control"value="D3 Agribisnis Minat Agrofarmaka">D3 Agribisnis Minat Agrofarmaka</option>
                <option class="form-control"value="D3 Agribisnis Minat Hortikultura & Ars. Pert.">D3 Agribisnis Minat Hortikultura & Ars. Pert.</option>
                <option class="form-control"value="D3 Agribisnis Minat Peternakan">D3 Agribisnis Minat Peternakan</option>
                <option class="form-control"value="D3 Teknologi Hasil Pertanian">D3 Teknologi Hasil Pertanian</option>
                <option class="form-control"value="Ilmu Dan Teknologi Pangan">Ilmu Dan Teknologi Pangan</option>
                <option class="form-control"value="Ilmu Dan Teknologi Pangan (Transfer)">Ilmu Dan Teknologi Pangan (Transfer)</option>
                <option class="form-control"value="Ilmu Tanah">Ilmu Tanah</option>
                <option class="form-control"value="Penyuluhan & Komunikasi Pertanian">Penyuluhan & Komunikasi Pertanian</option>
                <option class="form-control"value="Produksi Ternak/Peternakan">Produksi Ternak/Peternakan</option>
                <option class="form-control"value="S-1 Pengelolaan Hutan">S-1 Pengelolaan Hutan</option>  
              </select>
              
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-phone"></i>
                </span>
              </div>
              <input type="text" class="form-control" name="no_telp" placeholder="No.Telp..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_calendar-60"></i>
                </span>
              </div>
              <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="email" class="form-control" name="email" placeholder="Email..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons business_badge "></i>
                </span>
              </div>
              <input type="text" class="form-control" name="NIM_NIP" placeholder="NIM/NIP..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08 "></i>
                </span>
              </div>
              <input type="text" class="form-control" name="user" placeholder="Username..." required="">
            </div>
            <!-- batas -->
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                </span>
              </div>
              <input type="password" class="form-control" name="pass" placeholder="Password..." required="">
            </div>
            <!-- batas -->
             <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                </span>
              </div>
              <input type="password" class="form-control" name="repass" placeholder="Repeat Password..." required="">
            </div>
            <!-- batas -->
          

            <div class="send-button">
              <input type="submit" name="add" class="btn btn-primary btn-round btn-block btn-lg" value="Create User Account"></input>
               <a href="<?php echo base_url(); ?>auth/login" class="text-primary category">do you have account? <i>Click here to LOGIN</i></a>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <footer class="footer">
      <div class=" container ">
        <nav>
          Go To Main<a href="https://fp.uns.ac.id/" target="_blank" class=""> Page</a>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Peminjaman Ruang
          <a href="https://fp.uns.ac.id/" target="_blank">Fakultas Pertanian UNS</a>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>/assets/login/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>