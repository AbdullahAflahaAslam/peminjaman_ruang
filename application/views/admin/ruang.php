<div class="" role="tabpanel" data-example-id="togglable-tabs">
  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
    <li role="presentation" class="active>"><a href="#data_ruang" role="tab" id="data_ruang-tab" data-toggle="tab" aria-expanded="false">Data Ruang</a>
    </li>
  </ul>
  <!-- Data Peminjaman -->
  <div id="myTabContent" class="tab-content">
    <!-- Data Ruang -->
    <div role="tabpanel" class="tab-pane fade in fa-hover active" id="data_ruang" aria-labelledby="data_ruang-tab">
      <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#addRuang">Tambah Ruang</button>
      <form method="post" action="<?php echo base_url('admin/ruang'); ?>">
        <table class="table table-border table-hover col-md-10" id="datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Ruang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $k = 1;
            foreach ($ruang->result() as $catRuang): ?>
              <tr>
                <td><?php echo $k; $k = $k + 1 ?></td>
                <td><?php echo $catRuang->nama_ruang ?></td>
                <td><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#editRuang<?php echo $catRuang->id_ruang ?>">Edit</button>
                  <input type="hidden" name="id_ruang" value="<?php echo $catRuang->id_ruang ?>">
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" name="hapusRuang">Delete</button>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </form>
        <div id="addRuang" class="modal fade" role="dialog">
          <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Tambah Ruang</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?php echo base_url('admin/ruang') ?>">
                    <input type="text" name="nama_ruang" class="form-control" required="" placeholder="Nama Ruang">
                    <br>
                    <input type="submit" name="tambahRuang" value="Tambah" class="btn btn-sm btn-success">
                  </form>
                </div>
              </div>
          </div>
      </div>
      <?php foreach ($ruang->result() as $editRuang): ?>
        <div id="editRuang<?php echo $editRuang->id_ruang ?>" class="modal fade" role="dialog">
          <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Ruang</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?php echo base_url('admin/ruang') ?>">
                    <input type="text" name="nama_ruang" class="form-control" required="" placeholder="Nama Ruang" value="<?php echo $editRuang->nama_ruang; ?>">
                    <br>
                    <input type="hidden" name="id_ruang" value="<?php echo $editRuang->id_ruang ?>">
                    <input type="submit" name="editRuang" value="Update" class="btn btn-sm btn-success">
                  </form>
                </div>
              </div>
          </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>