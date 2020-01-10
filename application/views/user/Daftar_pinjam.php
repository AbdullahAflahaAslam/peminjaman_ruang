<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <h2>Sistem Informasi Peminjaman Ruang</h2>
            </div>
          </div>
         <!--  <div class="span4">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Daftar Pinjam</a><i class="icon-angle-right"></i></li>
              
            </ul>
          </div> -->
        </div>
      </div>
</section>
<section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">



        <!--   <?php foreach ($ruang->result() as $key): ?>
            <div class="span3" style="margin-bottom: 10px">
              <div class="wrapper">
                <div class="testimonial">
                  <p>
                    <strong> <?php echo $key->nama_ruang; ?></strong>
                  </p>
                  <div class="author">
                    <p class="name">
                     <a href="#pinjam" data-toggle="modal" class="btn btn-green">Pinjam</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?> -->
      </div>

<div class="row">
          <div class="span12">
            <div class="headnav">

            <a href="#pinjam" data-toggle="modal"><i class="icon-plus"></i></i>Pinjam Ruang</a>
            </div>
            <h4>Daftar Seluruh Peminjaman</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Hari
                  </th>
                  <th>
                    Tanggal Peminjaman
                  </th>
                  <th>
                    Jam Mulai
                  </th>
                  <th>
                    Jam Selesai
                  </th>
                  <th>
                    Keperluan
                  </th>
                  <th>
                    Lembaga Peminjam
                  </th>
                  <th>
                    Nama Peminjam
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Tempat
                  </th>
<!--                   <th>
                    Keterangan

                  </th> -->
                </tr>
              </thead>
              <tbody>
             <?php $i = 1; 

              foreach ($pinjam as $row) { ?>
                        <tr>
                        <td>
                           <?php echo $i; $i=$i+1?> 
                        </td>
                        <td>
                           <?php 
                                $date = date_create($row->tgl_pinjam);
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
                        echo $hari_ini; ?>
                        </td>
                        <td class="time">
                          <?php echo date($row->tgl_pinjam  ); ?>
                        </td>
                        <td class="time">
                            <?php echo $row->jam_mulai ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->jam_selesai ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->keperluan ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->lembaga ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->nama_user ; ?>
                        </td>
                         <td class="time">
                          <?php 
                            if ($row->st==0) {
                              echo '<span class="label btn-danger">Reject</span>';
                            }elseif ($row->st==1) {
                              echo '<span class="label btn-info">Pending</span>';
                            }else{
                              echo '<span class="label label-success">Accept</span>';
                            }
                           ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->nama_ruang ; ?>
                        </td>
                        <td class="text-right">
                        
                        </td>
                      </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>




      <!-- Pinjam Modal -->
            <div id="pinjam" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="pinjamModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Peminjaman Ruang</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>User/Pinjam">
                  <div class="control-group">
                    <label class="control-label" >Tanggal</label>
                   <!--  <p id="demo">a</p> -->
                    <div class="controls">
                      <input type="date"  onchange="Custom()" id="tgl" name="tgl_pinjam" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Jam</label>
                    <div class="controls" >
                      <div id="mulai">
                      <select required="" name="jam_mulai" id="mySelect" style="visibility: visible;" >
                          <option value=""></option>
                      </select>
                      </div>
                      <p>
                        s.d
                      </p>
                      <div id="selesai">
                      <select required="" name="jam_selesai" id="mySelect1" style="visibility: visible;" >
                          <option value=""></option>
                      </select>
                      </div>
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label">Ruang</label>
                    <div class="controls">
                      <select required="" name="id_ruang">
                        <option></option>
                        <?php foreach ($ruang->result() as $ruang): ?>
                          <option value="<?php echo $ruang->id_ruang ?>"><?php echo $ruang->nama_ruang ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Lembaga Peminjam</label>
                    <div class="controls">
                      <input type="text" name="lembaga" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Keperluan</label>
                    <div class="controls">
                      <input type="text" name="keperluan" required="" >
                      <input type="hidden" name="id_user" required="" value="<?php echo $user;?>" >
                      <input type="hidden" name="tgl_pengajuan" required="" value="<?php echo date("Y-m-d");?>" >
                      <input type="hidden" name="jam_pengajuan" required="" value="<?php echo  date("H:i:s"); ?>" >
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn" name="submit">Submit</button>
                    </div>
                   
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
    </section>

    <script >
        

        function Custom(){
            var dasar = document.getElementById("tgl").value;
             var a =  new Date(dasar);
              var weekdays = new Array(7);
              weekdays[0] = "Sunday";
              weekdays[1] = "Monday";
              weekdays[2] = "Tuesday";
              weekdays[3] = "Wednesday";
              weekdays[4] = "Thursday";
              weekdays[5] = "Friday";
              weekdays[6] = "Saturday";
              var d = weekdays[a.getDay()];
              //document.getElementById("demo").innerHTML = d;

             if (d == "Friday") {
                var array1 = ["07:30:00","08:25:00","09:20:00","10:15:00","13:00:00","13:55:00","15:30:00","16:25:00","18:10:00","19:30:00","20:25:00","21:20:00"];
                var array2 = ["08:20:00","09:15:00","09:20:00","11:05:00","13:50:00","15:25:00","16:20:00","17:15:00","19:00:00","20:20:00","21:55:00","22:10:00"];
              }
              else if(d == "Sunday" || d == "Saturday" ){
                var array1 = ["08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00"];

                var array2 = ["09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00","18:00:00"];
              } else{
                var array1 = ["07:30:00","08:25:00","09:20:00","10:15:00","11:10:00","13:00:00","13:55:00","15:30:00","16:25:00","18:10:00","19:30:00","20:25:00","21:20:00"];
                var array2 = ["08:20:00","09:15:00","09:20:00","11:05:00","12:00:00","13:50:00","15:25:00","16:20:00","17:15:00","19:00:00","20:20:00","21:55:00","22:10:00"];
              }


              ///JAM MULAI
              var mulai = document.getElementById("mulai");
              var element1 = document.getElementById("mySelect");
              element1.parentNode.removeChild(element1);
              //Create and append select list
              var selectList = document.createElement("select");
              selectList.setAttribute("id", "mySelect");
              selectList.setAttribute("name", "jam_mulai");
              mulai.appendChild(selectList);

              //Create and append the options
              for (var i = 0; i < array1.length; i++) {
                  var option = document.createElement("option");
                  option.setAttribute("value", array1[i]);
                  option.text = array1[i];
                  selectList.appendChild(option);
              }


              //JAM SELESAI
              var selesai = document.getElementById("selesai");
              var element2 = document.getElementById("mySelect1");
              element2.parentNode.removeChild(element2);
              //Create and append select list
              var selectList2 = document.createElement("select");
              selectList2.setAttribute("id", "mySelect1");
              selectList2.setAttribute("name", "jam_selesai");
              selesai.appendChild(selectList2);

              //Create and append the options
              for (var i = 0; i < array2.length; i++) {
                  var option2 = document.createElement("option");
                  option2.setAttribute("value", array2[i]);
                  option2.text = array2[i];
                  selectList2.appendChild(option2);
              }
          }
    </script>