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
					<a href="<?php echo site_url('prodi/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Create Again</a>
					<a href="<?php echo site_url('prodi') ?>" class="btn btn-secondary mb-3" rel="noopener noreferrer">Back to Home</a>
					<div class="table-responsive">
						<table class="table table-striped table ">
							<tbody>
								<tr>
									<th scope="row">Kode Prodi</th>
									<td><?= $prodi->kode ?></td>
								</tr>
								<tr>
									<th scope="row">Nama Prodi</th>
									<td><?= $prodi->nama ?></td>
								</tr>
								<tr>
									<th scope="row">Ketua Prodi</th>
									<td><?= $prodi->kaprodi ?></td>
								</tr>
							</tbody>

						</table>
					</div>
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
