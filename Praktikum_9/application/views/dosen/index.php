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
				</div>
			</div>
			<div class="card-body">
				<!-- mulai nampilin data dari database -->
				<div class="col-md-12">
					<a href="<?php echo site_url('dosen/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Add Dosen</a>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>NIDN</th>
								<th>Nama</th>
								<th>Program Studi</th>
								<th>Gender</th>
								<th>TTL</th>
								<th>Pendidikan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 1;
							foreach ($list_dsn['records'] as $dsn) {
							?>
								<tr>
									<td><?= $nomor ?></td>
									<td><?= $dsn->nidn ?></td>
									<td><?= $dsn->nama ?></td>
									<td>
										<?php
										switch ($dsn->prodi_kode) {
											case 'BD':
												echo 'Bisnis Digital';
												break;
											case 'TI':
												echo 'Teknik Informatika';
												break;
											case 'SI':
												echo 'Sistem Informasi';
												break;
										}
										?>
									</td>
									<td><?= $dsn->gender == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
									<td><?= $dsn->tmp_lahir . ', ' . $dsn->tgl_lahir ?></td>
									<td><?= $dsn->pendidikan_akhir ?></td>
									<td>
										<a href="dosen/view?id=<?= $dsn->nidn ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View</a>
										<a href="dosen/edit?id=<?= $dsn->nidn ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
										<a href="dosen/delete?id=<?= $dsn->nidn ?>" class="btn btn-danger btn-sm active" onclick="if(!confirm('Anda yakin menghapus dosen dengan NIDN <?= $dsn->nidn ?> ?')) {return false}" role="button" aria-pressed="true">Delete</a>
									</td>
								</tr>
							<?php
								$nomor++;
							}
							?>
						</tbody>
					</table>
					<?php echo 'Total Data: ' . '<b>' . $list_dsn['count'] . '</b>'  ?>
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
