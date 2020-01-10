<div class="" role="tabpanel" data-example-id="togglable-tabs">
  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
    <li role="presentation" class="active"><a href="#data_peminjaman" id="data_peminjaman-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Peminjaman</a>
    </li>
  </ul>
  <!-- Data Peminjaman -->
  <div id="myTabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane fade in fa-hover active" id="data_peminjaman" aria-labelledby="data_peminjaman-tab">
      <table class="table table-border" id="datatable-responsive">
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
              Aksi
            </th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1;
          foreach ($pinjam->result() as $row): ?>
            <tr>
              <td><?php echo $i; $i=$i+1?> </td>
              <td><?php 
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
                                echo $hari_ini; ?></td>
              <td>
                <?php echo date($row->tgl_pinjam) ?>
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
                    echo '<span class="label label-danger">Reject</span>';
                  }elseif ($row->st==1) {
                    echo '<span class="label label-info">Pending</span>';
                  }elseif ($row->st == 2){
                    echo '<span class="label label-success">Accept</span>';
                  } else {
                    echo '<span class="label label-primary">Completed</span>';
                  }
                 ; ?>
              </td>
              <td class="time">
                <?php echo $row->nama_ruang ; ?>
              </td>
              <td class="fa-hover">
                <?php if ($row->st == 1){ ?>
                  <a href="<?php echo base_url('admin/accept_peminjaman/'.$row->id_pinjam) ?>" class="btn btn-sm btn-success"><i class='fa fa-check'></i></a>
                  <a href="<?php echo base_url('admin/reject_peminjaman/'.$row->id_pinjam) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Reject?')"><i class='fa fa-times'></i></a>
                <?php } else {
                  echo "<i class='fa fa-check'></i>";
                } ?>
                
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>