<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="card">
    <div class="card-header">
      Sistem Penilaian
    </div>
    <div class="card-body">
      <h2>Form Nilai Siswa</h2>
      <hr>
      <div class="container">
        <form method="GET" action="form_nilai.php">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label>
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select">
                <option value="DDP">Dasar Dasar Pemrograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
            <div class="col-2">
              <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
            <div class="col-2">
              <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
            <div class="col-2">
              <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" type="submit" class="btn btn-primary" name="proses" value="Simpan">
            </div>
          </div>
        </form>

        <?php
        $proses = $_GET['proses'];
        $nama_siswa = $_GET['nama'];
        $mata_kuliah = $_GET['matkul'];
        $nilai_uas = $_GET['nilai_uas'];
        $nilai_uts = $_GET['nilai_uts'];
        $nilai_tugas = $_GET['nilai_tugas'];

        echo 'Proses : ' . $proses;
        echo '<br/>Nama : ' . $nama_siswa;
        echo '<br/>Mata Kuliah : ' . $mata_kuliah;
        echo '<br/>Nilai UTS : ' . $nilai_uts;
        echo '<br/>Nilai UAS : ' . $nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
        ?>
      </div>
    </div>
    <div class="card-footer text-muted">
      Develop by Piscki @ 2022
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>