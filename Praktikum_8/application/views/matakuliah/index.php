<div class="col-md-12">
	<h3>Daftar Mata Kuliah</h3>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode</th>
				<th>Nama</th>
				<th>Jumlah SKS</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$nomor = 1;
			foreach ($list_mk as $matkul) {
			?>
				<tr>
					<td><?= $nomor ?></td>
					<td><?= $matkul->kode ?></td>
					<td><?= $matkul->nama ?></td>
					<td><?= $matkul->sks ?></td>
				</tr>
			<?php
				$nomor++;
			}
			?>
		</tbody>
	</table>
</div>
