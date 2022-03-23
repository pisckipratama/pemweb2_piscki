<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <?php
  require_once "class_mahasiswa.php";
  $ns1 = ['id' => 1, 'nama' => 'Faiz Fikri', 'nim' => '02011', 'prodi' => "TI", 'angkatan' => "2012", 'ipk' => 3.8];
  $ns2 = ['id' => 2, 'nama' => 'Alissa Khairunnisa', 'nim' => '02012', 'prodi' => "TI", 'angkatan' => '2012', 'ipk' => 3.9];
  $ns3 = ['id' => 3, 'nama' => 'Rosalie Naurah', 'nim' => '01011', 'prodi' => "SI", 'angkatan' => '2010', 'ipk' => 3.46];
  $ns4 = ['id' => 4, 'nama' => 'Defghi Muhammad', 'nim' => '01012', 'prodi' => "SI", 'angkatan' => '2010', 'ipk' => 3.2];

  $ar_nilai = [$ns1, $ns2, $ns3, $ns4]
  ?>

  <div class="container">
    <br>
    <h2>Daftar Nilai Siswa</h2>
    <br>

    <table class="table table-striped table-hover">
      <thead class="table-success">
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">Nama</th>
          <th scope="col">Prodi</th>
          <th scope="col">Thn Angkatan</th>
          <th scope="col">IPK</th>
          <th scope="col">Predikat</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_nilai as $ns) {
          $mahasiswa = new Mahasiswa($ns['nim'], $ns['nama']);
          $mahasiswa->thn_angkatan = $ns['angkatan'];
          $mahasiswa->prodi = $ns['prodi'];
          $mahasiswa->ipk = $ns['ipk'];

          echo '<tr>';
          echo '<th scope="row">' . $nomor . '</th>';
          echo '<td>' . $mahasiswa->nim . '</td>';
          echo '<td>' . $mahasiswa->nama . '</td>';
          echo '<td>' . $mahasiswa->prodi . '</td>';
          echo '<td>' . $mahasiswa->thn_angkatan . '</td>';
          echo '<td>' . $mahasiswa->ipk . '</td>';
          echo '<td>' . $mahasiswa->predikat_ipk() . '</td>';
          echo '</tr>';
          $nomor++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>