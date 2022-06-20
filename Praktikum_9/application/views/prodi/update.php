<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Praktikum 9</h1>
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
				<?php $hidden = ['kodeedit' => $prodiedit->kode] ?>
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('prodi') ?>" class="btn btn-secondary mb-3" rel="noopener noreferrer">Back to Home</a>
					<?php echo form_open('prodi/save', '', $hidden) ?>
					<div class="form-group row">
						<label for="kode" class="col-3 col-form-label">Kode Program</label>
						<div class="col-9">
							<input id="kode" name="kode" placeholder="Kode" type="text" class="form-control" value="<?= $prodiedit->kode ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="prodi" class="col-3 col-form-label">Nama Program Studi</label>
						<div class="col-9">
							<input id="prodi" name="prodi" placeholder="Program Studi" type="text" class="form-control" value="<?= $prodiedit->nama ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="kaprodi" class="col-3 col-form-label">Ketua Program Studi</label>
						<div class="col-9">
							<input id="kaprodi" name="kaprodi" placeholder="Kaprodi" type="text" class="form-control" value="<?= $prodiedit->kaprodi ?>">
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
