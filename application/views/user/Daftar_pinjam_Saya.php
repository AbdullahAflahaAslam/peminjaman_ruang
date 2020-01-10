<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <h2>Sistem Informasi Peminjaman Ruang</h2>
            </div>
          </div>
        

        </div>
      </div>
</section>
<section id="content">
      <div class="container">
        <!-- Default table -->
        <div class="row">
      </div>

<div class="row">
          <div class="span12">
            <h4>Daftar Peminjaman Saya</h4>
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
                  <th>
                    Keterangan

                  </th>
                </tr>
              </thead>
              <tbody>
             <?php $i = 1; 

              foreach ($peminjaman as $row) { ?>
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
                              echo '<span class="atv">Reject</span>';
                            }elseif ($row->st==1) {
                              echo '<span class="tag">Pending</span>';
                            }else{
                              echo '<span class="atn">Accept</span>';
                            }
                           ; ?>
                        </td>
                        <td class="time">
                          <?php echo $row->nama_ruang ; ?>
                        </td>
                        <td class="text-right">
                          <?php if ($row->st >= 2){ ?>
                            <a href="<?php  echo base_url('User/Cetak/'.$row->id_pinjam); ?>" target="_blank">
                             <span class="l-btn-text icon-print" > Cetak Form </span>
                           </a>
                          <?php } else { ?>
                            <span>-</span>
                          <?php } ?>
                        </td>
                      </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>




      
    </section>