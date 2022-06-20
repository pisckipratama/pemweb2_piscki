<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Praktikum 7</h1>
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
					<a href="<?php echo site_url('dosen/create') ?>" class="btn btn-warning mb-3" rel="noopener noreferrer">Create Again</a>
					<a href="<?php echo site_url('dosen') ?>" class="btn btn-danger mb-3" rel="noopener noreferrer">Back to Home</a>
					<div class="table-responsive">
						<table class="table table-striped table-bordered ">
							<tbody>
								<tr>
									<th scope="row">NIDN</th>
									<td><?= $dsn1->nidn ?></td>
								</tr>
								<tr>
									<th scope="row">Nama</th>
									<td><?= $dsn1->nama ?></td>
								</tr>
								<tr>
									<th scope="row">Gender</th>
									<td><?= $dsn1->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
								</tr>
								<tr>
									<th scope="row">TTL</th>
									<td><?= $dsn1->tmp_lahir . ', ' . $dsn1->tgl_lahir ?></td>
								</tr>
								<tr>
									<th scope="row">Pendidikan</th>
									<td><?= $dsn1->pendidikan ?></td>
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
