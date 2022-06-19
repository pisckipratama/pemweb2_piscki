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
								<th>Pendidikan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$nomor = 1;
							foreach ($list_dsn as $dsn) {
							?>
								<tr>
									<td><?= $nomor ?></td>
									<td><?= $dsn->nidn ?></td>
									<td><?= $dsn->nama ?></td>
									<td><?= $dsn->pendidikan ?></td>
								</tr>
							<?php
								$nomor++;
							}
							?>
						</tbody>
					</table>
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
