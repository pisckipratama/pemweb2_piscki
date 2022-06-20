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
				</div>
			</div>
			<div class="card-body">
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('mahasiswa/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Add Mahasiswa</a>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Prodi</th>
								<th>Gender</th>
								<th>IPK</th>
								<th>Predikat</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 1;
							foreach ($list_mhs['records'] as $mhs) {
							?>
								<tr>
									<td><?= $nomor ?></td>
									<td><?= $mhs->nim ?></td>
									<td><?= $mhs->nama ?></td>
									<td><?= $mhs->prodi_kode ?></td>
									<td><?= $mhs->gender == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
									<td><?= $mhs->ipk ?></td>
									<td><?= $mhs->ipk >= 3.75 ? 'Cumlaude' : 'Baik' ?></td>
									<td>
										<a href="<?php echo site_url('mahasiswa/view?id=') . $mhs->nim ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View</a>
										<a href="<?php echo site_url('mahasiswa/edit?id=') . $mhs->nim ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
										<a href="<?php echo site_url('mahasiswa/delete?id=') . $mhs->nim ?>" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
									</td>
								</tr>
							<?php
								$nomor++;
							}
							?>
						</tbody>
					</table>
					<?php echo 'Total Data: ' . '<b>' . $list_mhs['count'] . '</b>'  ?>
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
