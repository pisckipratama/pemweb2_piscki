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
					<a href="<?php echo site_url('mahasiswa/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Create Again</a>
					<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-secondary mb-3" rel="noopener noreferrer">Back to Home</a>
					<div class="table-responsive">
						<table class="table table-striped ">
							<tbody>
								<tr>
									<th scope="row">NIM</th>
									<td><?= $mhs->nim ?></td>
								</tr>
								<tr>
									<th scope="row">Nama</th>
									<td><?= $mhs->nama ?></td>
								</tr>
								<tr>
									<th scope="row">Gender</th>
									<td><?= $mhs->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
								</tr>
								<tr>
									<th scope="row">TTL</th>
									<td><?= $mhs->tmp_lahir . ', ' . $mhs->tgl_lahir ?></td>
								</tr>
								<tr>
									<th scope="row">Prodi</th>
									<td><?= $mhs->prodi_kode ?></td>
								</tr>
								<tr>
									<th scope="row">IPK</th>
									<td><?= $mhs->ipk ?></td>
								</tr>
								<tr>
									<th scope="row">Predikat</th>
									<td><?= $mhs->ipk >= 3.75 ? 'Cumlaude' : 'Baik' ?></td>
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
