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
					<a href="<?php echo site_url('prodi/create') ?>" class="btn btn-success mb-3" rel="noopener noreferrer">Add Prodi</a>
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Prodi</th>
								<th>Kode Prodi</th>
								<th>Ketua Prodi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 1;
							foreach ($list_prodi['records'] as $prodi) {
							?>
								<tr>
									<td><?= $nomor ?></td>
									<td><?= $prodi->nama ?></td>
									<td><?= $prodi->kode ?></td>
									<td><?= $prodi->kaprodi ?></td>
									<td>
										<a href="<?php echo site_url('prodi/view?id=') . $prodi->kode ?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">View</a>
										<a href="<?php echo site_url('prodi/edit?id=') . $prodi->kode ?>" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Edit</a>
										<a href="<?php echo site_url('prodi/delete?id=') . $prodi->kode ?>" onclick="if(!confirm('Anda yakin menghapus mahasiswa dengan prodi <?= $prodi->nama ?> ?')) {return false}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">
											Delete
										</a>
									</td>
								</tr>
							<?php
								$nomor++;
							}
							?>
						</tbody>
					</table>
					<?php echo 'Total Data: ' . '<b>' . $list_prodi['count'] . '</b>'  ?>
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
