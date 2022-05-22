<div class="col-md-12">
	<h3>Daftar Mahasiswa</h3>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>IPK</th>
				<th>Predikat</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$nomor = 1;
			foreach ($list_mhs as $mhs) {
			?>
				<tr>
					<td><?= $nomor ?></td>
					<td><?= $mhs->nim ?></td>
					<td><?= $mhs->nama ?></td>
					<td><?= $mhs->gender ?></td>
					<td><?= $mhs->ipk ?></td>
					<td><?= $mhs->predikat() ?></td>
				</tr>
			<?php
				$nomor++;
			}
			?>
		</tbody>
	</table>
</div>
