
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <title>LoA | ICSAS UNS</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets\login\img\logo.png">
    <!-- Bootstrap -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="<?php  echo base_url(); ?>assets/user/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php  echo base_url(); ?>assets/user/build/css/custom.min.css" rel="stylesheet">
  </head>
<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
p{
  font-family: "Times New Roman", Times, serif;
  font-size: 11px;
}
h2{
  font-family: "Times New Roman", Times, serif;
  font-size: 14px;
}
h3{
  margin: 0px 0 0px 0;
  font-size: 14px;
  font-family: "Times New Roman", Times, serif;
  
}
div.a {
    text-align: center;
}
div.b {
    text-align: right;
}
div.c {
    text-align: justify;
}
table.blueTable {
  border: 1px solid #000000;
  background-color: #FFFFFF;
  width: 100%;
  text-align: center;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #000000;
  padding: 1px 2px;
}

table td{
	font-family: "Times New Roman", Times, serif;
	font-size: 11px;
}

table.blueTable tbody td {
  font-size: 11px;
}
table.blueTable tr:nth-child(even) {
  background: #F5F5F5;
}
table.blueTable thead {
  background: #FFFFFF;
  background: -moz-linear-gradient(top, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  background: -webkit-linear-gradient(top, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  background: linear-gradient(to bottom, #ffffff 0%, #ffffff 66%, #FFFFFF 100%);
  border-bottom: 1px solid #000000;
}
table.blueTable thead th {
  font-size: 12px;
  font-weight: bold;
  color: #000000;
  text-align: center;
  border-left: 1px solid #000000;
}
table.blueTable thead th:first-child {
  border-left: none;
}

.pagebreak { page-break-after: always; }

</style>
<?php $row = $peminjaman; ?>
  <body class="nav-md" onload="window.print()">  
        <!-- page content -->
        <div class="menu_fixed" role="main" style="page-break-after: always;">
          
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-1">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <br>
                  <div class="x_title">
                  	<div class="a">
                    <center><u style="font-family: Monaco, Verdana, Sans-serif;"><strong>SURAT PERMOHONAN PEMINJAMAN RUANG</strong></u></center>
                    </div>

                    

                    <div class="clearfix"></div>                
                  </div>
                  <div class="x_content" >
                      <div class="profile_img">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="col-md-12 col-sm-12 col-xs-12 c">
                            <p>Yth. Kepala Sub Bagian Akademik</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fakultas Pertanian Universitas Sebelas Maret</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;di Surakarta</p>
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                            <!-- <p>Subject : Letter of Acceptance</p> -->
                            <!-- <p>March 31st, 2018
                            </p> -->
                          </div> 
                          <div class="col-md-12 col-sm-12 col-xs-12 c ">
                            <p>Bersama ini kami mohon peminjaman ruang di Fakultas Pertanian UNS pada:</p>
                            <table>
                            	<tr>
                            		<td>Hari</td>
                            		<td> :</td>
                            		<td> <?php 
                            		$date = date_create($row[0]->tgl_pinjam);
                            		$hari = date_format($date, 'D');
                            		switch($hari){
										case 'Sun':
											$hari_ini = "Minggu";
										break;
								 
										case 'Mon':			
											$hari_ini = "Senin";
										break;
								 
										case 'Tue':
											$hari_ini = "Selasa";
										break;
								 
										case 'Wed':
											$hari_ini = "Rabu";
										break;
								 
										case 'Thu':
											$hari_ini = "Kamis";
										break;
								 
										case 'Fri':
											$hari_ini = "Jumat";
										break;
								 
										case 'Sat':
											$hari_ini = "Sabtu";
										break;
										
										default:
											$hari_ini = "Tidak di ketahui";		
										break;
									}
                            		echo $hari_ini; ?></td>
                            	</tr>
                            	<tr>
                            		<td>Tanggal</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php $tgl = date_create($row[0]->tgl_pinjam);
                            		echo date_format($tgl, 'd - M - Y'); ?></td>
                            	</tr>
                            	<tr>
                            		<td>Sesi ke</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php echo $row[0]->jam_mulai ; ?></td>
                            	</tr>
                            	<tr>
                            		<td>Sampai</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php echo $row[0]->jam_selesai ; ?></td>
                            	</tr>
                            	<tr>
                            		<td>Keperluan</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php echo $row[0]->keperluan ; ?></td>
                            	</tr>
                            </table>
                            <br>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 c ">
                            <p>Demikian permohonan kami, atas perhatian dan terpenuhinya permohonan ini kami ucapkan terima kasih.</p>
                            <br>
                          </div>                                  
                          <div class="pull-right" style="margin-right: 80px;">
                          	<p>Peminjam,</p>
                          	<br>
                          	<br>
                          	<br>
                          	<p><strong><?php echo ucwords($row[0]->nama_user) ; ?></strong></p>
                          	<p>NIM/NIP. <?php echo $row[0]->NIM_NIP ; ?> </p>
                          </div>
                          <div class="col-md-4"></div>
                        </div>
                      </div>
                  </div>
                        </div>
                      </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="menu_fixed" role="main" style="page-break-before: always;">
          
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-1">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel ">
                  <br>
                  <div class="x_title">

                    <div class="col-md-3 col-sm-3 col-xs-3">
                    
                    <img src="<?php echo base_url() ?>assets/img/logo/logo-uns-biru.png" width="100px">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 a" >
                      <h3>KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h3>
                      <h3>UNIVERSITAS SEBELAS MARET</h3>
                      <h3><b>Fakultas Pertanian</b></h3>
                      <p>Secretariat: Physics Department, Graduate Program, <br>
                      	Jl. Ir. Sutami 36 A Kentingan Surakarta Kode Pos 57126 <br>
                      	Telpon. (0271) 637457 Fax. (0271) 637457 Website. http://fp.uns.ac.id <br>
                      	Email. pertanian@uns.ac.id
                      </p>
                    </div>

                    <div class="clearfix"></div>                
                  </div>
                  <div class="x_content" >
                      <div class="profile_img">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="col-md-12 col-sm-12 col-xs-12 c">
                            <p>Kepada Yth : Kepala Subbagian _____________________________</p>
                          </div>
                          <div class="col-md-4 col-sm-4 col-xs-4">
                            <!-- <p>Subject : Letter of Acceptance</p> -->
                            <!-- <p>March 31st, 2018
                            </p> -->
                          </div> 
                          <div class="col-md-12 col-sm-12 col-xs-12 c ">
                            <p>Dengan ini kami beritahukan bahwa, besok pada : </p>
                            <table>
                            	<tr>
                            		<td>Hari, Tanggal</td>
                            		<td> :</td>
                            		<td> <?php 
                            		$date = date_create($row[0]->tgl_pinjam);
                            		$hari = date_format($date, 'D');
                                $tgl = date_create($row[0]->tgl_pinjam);
                            		switch($hari){
										case 'Sun':
											$hari_ini = "Minggu";
										break;
								 
										case 'Mon':			
											$hari_ini = "Senin";
										break;
								 
										case 'Tue':
											$hari_ini = "Selasa";
										break;
								 
										case 'Wed':
											$hari_ini = "Rabu";
										break;
								 
										case 'Thu':
											$hari_ini = "Kamis";
										break;
								 
										case 'Fri':
											$hari_ini = "Jumat";
										break;
								 
										case 'Sat':
											$hari_ini = "Sabtu";
										break;
										
										default:
											$hari_ini = "Tidak di ketahui";		
										break;
									}
                            		echo $hari_ini.", ".date_format($tgl, 'd - M - Y'); ?></td>
                            	</tr>
                            	<!-- <tr>
                            		<td>Tanggal</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php $tgl = date_create($row[0]->tgl_pinjam);
                            		echo date_format($tgl, 'd - M - Y'); ?></td>
                            	</tr> -->
                            	<tr>
                            		<td>Jam </td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php echo $row[0]->jam_mulai ; ?> <strong>s.d</strong> <?php echo $row[0]->jam_selesai ; ?></td>
                            	</tr>
                            	<!-- <tr>
                            		<td>Keperluan</td>
                            		<td>&nbsp;:&nbsp;</td>
                            		<td> <?php echo $row[0]->keperluan ; ?></td>
                            	</tr> -->
                            </table>
                            <br>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 c ">
                            <p>Akan digunakan untuk kegiatan : 
                              <br><strong><?php echo $row[0]->keperluan ; ?></strong></p>
                            <p>Mengingat waktu tersebut sudah diluar jadwal kuliah, mohon kiranya dapat mengkoordinasikan dengan petugas keamanan dalam hal pengawasan.</p>
                            <p>Atas kerjasama yang baik, kami ucapkan terimakasih</p>
                            <br>
                          </div>                                  
                          <div class="pull-right" style="margin-right: 80px;">
                          	<p>Surakarta,</p>
                          	<p>Kepala Sub Bagian Akademik FP</p>
                          	<br>
                          	<br>
                          	<br>
                          	<p>Agung Nugroho,S.Sos</p>
                          	<p>NIP. 197705052009101002</p>
                          </div>
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                          	<p>Catatan :</p>
                          	<p>Harap berkoordinasi dengan petugas keamanan (SATPAM) apabila penggunaan ruang diluar jam kuliah</p>
                          </div>
                        </div>
                      </div>
                  </div>
                        </div>
                      </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- jQuery -->
 <!-- jQuery -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php  echo base_url(); ?>assets/user/vendors/iCheck/icheck.min.js"></script>
  </body>
</html>