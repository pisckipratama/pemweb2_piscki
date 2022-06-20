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
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('dosen') ?>" class="btn btn-danger mb-3" rel="noopener noreferrer">Back to Home</a>
					<?php echo form_open('dosen/save') ?>
					<div class="form-group row">
						<label for="nama" class="col-3 col-form-label">Nama Lengkap</label>
						<div class="col-9">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fa fa-address-card"></i>
									</div>
								</div>
								<input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="nidn" class="col-3 col-form-label">NIDN</label>
						<div class="col-9">
							<input id="nidn" name="nidn" placeholder="NIDN" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3">Jenis Kelamin</label>
						<div class="col-9">
							<div class="custom-control custom-radio custom-control-inline">
								<input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
								<label for="jk_0" class="custom-control-label">Laki-Laki</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
								<label for="jk_1" class="custom-control-label">Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="pendidikan" class="col-3 col-form-label">Pendidikan</label>
						<div class="col-9">
							<select id="pendidikan" name="pendidikan" class="custom-select">
								<option value="S1">S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="tmp_lahir" class="col-3 col-form-label">Tempat Lahir</label>
						<div class="col-9">
							<input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="tgl_lahir" class="col-3 col-form-label">Tanggal Lahir</label>
						<div class="col-9">
							<input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-3 col-9">
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
