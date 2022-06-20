<div class="col-md-12">
	<h3>Daftar Dosen</h3>
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
