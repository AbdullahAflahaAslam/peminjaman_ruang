<?php $cat = $user->result(); ?>
<div class="" role="tabpanel" data-example-id="togglable-tabs">
 	<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#data_peminjaman" id="data_peminjaman-tab" role="tab" data-toggle="tab" aria-expanded="true">Edit User</a>
	    </li>
	</ul>
	<div id="myTabContent" class="tab-content">
	    <div role="tabpanel" class="tab-pane fade in fa-hover active" id="data_peminjaman" aria-labelledby="data_peminjaman-tab">
			<form class="form-horizontal form-label-left" method="post" action="<?php echo base_url('admin/user') ?>">
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12">NIM/NIP User</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="nim_nip" class="form-control col-md-7 col-xs-12" value="<?php echo $cat[0]->NIM_NIP ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12">Nama User</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" name="nama_user" class="form-control col-md-7 col-xs-12" value="<?php echo $cat[0]->nama_user ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-2 col-xs-12">Prodi</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control" name="prodi" required="">
                        <option value="<?php echo $cat[0]->prodi ?>"><?php echo $cat[0]->prodi ?></option>
                        <option value="Agribisnis">Agribisnis</option>
                        <option value="Agroteknologi/Agroekoteknologi">Agroteknologi/Agroekoteknologi</option>
                        <option value="Agroteknologi/Agroekoteknologi Asing">Agroteknologi/Agroekoteknologi Asing</option>
                        <option value="D2 Teknologi Hasil Pertanian PDD">D2 Teknologi Hasil Pertanian PDD</option>
                        <option value="D3 Agribisnis Minat Agrofarmaka">D3 Agribisnis Minat Agrofarmaka</option>
                        <option value="D3 Agribisnis Minat Hortikultura">D3 Agribisnis Minat Hortikultura</option>
                        <option value="D3 Agribisnis Minat Peternakan">D3 Agribisnis Minat Peternakan</option>
                        <option value="D3 Teknologi Hasil Pertanian">D3 Teknologi Hasil Pertanian</option>
                        <option value="Ilmu dan Teknologi Pangan">Ilmu dan Teknologi Pangan</option>
                        <option value="Ilmu dan Teknologi Pangan (Transfer)">Ilmu dan Teknologi Pangan (Transfer)</option>
                        <option value="Ilmu Tanah">Ilmu Tanah</option>
                        <option value="Penyuluhan dan Komunikasi Pertanian">Penyuluhan dan Komunikasi Pertanian</option>
                        <option value="Produksi Ternak/Peternakan">Produksi Ternak/Peternakan</option>
                        <option value="S1 Pengelolaan Hutan">S1 Pengelolaan Hutan</option>
                      </select>
					</div>
				</div>
				<div class="form-group">
					<div class="">
						<input type="hidden" name="id_user" value="<?php echo $cat[0]->id_user ?>">
						<center><input type="submit" name="editUser" class="btn btn-success" value="Update"></center>
					</div>
				</div>
			</form>
	    </div>
	</div>
</div>
			