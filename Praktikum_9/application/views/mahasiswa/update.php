<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Praktikum 8</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $judul ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"><?= $judul ?></h3>

				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<?php $hidden = ['idedit' => $mhsedit->nim] ?>
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-secondary mb-3" rel="noopener noreferrer">Back to Home</a>
					<?php echo form_open('mahasiswa/save', '', $hidden) ?>
					<div class="form-group row">
						<label for="nim" class="col-2 col-form-label">NIM</label>
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-address-book"></i>
									</div>
								</div>
								<input id="nim" name="nim" type="text" class="form-control" value="<?= $mhsedit->nim ?>">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="nama" class="col-2 col-form-label">Nama Lengkap</label>
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-address-book"></i>
									</div>
								</div>
								<input id="nama" name="nama" type="text" class="form-control" value="<?= $mhsedit->nama ?>">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2">Jenis Kelamin</label>
						<div class="col-8">
							<div class="custom-control custom-radio custom-control-inline">
								<input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" <?= $mhsedit->gender == 'L' ? 'checked' : '' ?>>
								<label for="jk_0" class="custom-control-label">Laki-Laki</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" <?= $mhsedit->gender == 'P' ? 'checked' : '' ?>>
								<label for="jk_1" class="custom-control-label">Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="tmp_lahir" class="col-2 col-form-label">Tempat Lahir</label>
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-anchor"></i>
									</div>
								</div>
								<input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $mhsedit->tmp_lahir ?>">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="tgl_lahir" class="col-2 col-form-label">Tanggal Lahir</label>
						<div class="col-8">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-adjust"></i>
									</div>
								</div>
								<input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" value="<?= $mhsedit->tgl_lahir ?>">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="prodi" class="col-2 col-form-label">Program Studi</label>
						<div class="col-8">
							<select id="prodi" name="prodi" class="custom-select">
								<option value="BD" <?= $mhsedit->prodi_kode == 'BD' ? 'selected' : '' ?>>Bisnis Digital</option>
								<option value="SI" <?= $mhsedit->prodi_kode == 'SI' ? 'selected' : '' ?>>Sistem Informasi</option>
								<option value="TI" <?= $mhsedit->prodi_kode == 'TI' ? 'selected' : '' ?>>Teknik Informatika</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="ipk" class="col-2 col-form-label">IPK</label>
						<div class="col-8">
							<input id="ipk" name="ipk" type="text" class="form-control" value="<?= $mhsedit->ipk ?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-2 col-2">
							<button name="submit" type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
					<?php echo form_close() ?>
				</div>

			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<p>By Piscki F. Pratama - 0110221001</p>
			</div>
			<!-- /.card-footer-->
		</div>
		<!-- /.card -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
