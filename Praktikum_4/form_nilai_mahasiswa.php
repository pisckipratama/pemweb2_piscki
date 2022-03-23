<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Pemweb 4 Piscki - Form Nilai Ujian</title>
</head>

<body>
  <div class="card">
    <div class="card-header">
      WEB02
    </div>
    <div class="card-body">
      <h2>Form Nilai Ujian</h2>
      <hr>
      <div class="container">
        <form method="POST">
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
              <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 col-form-label" for="matkul">Pilih MK</label>
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select">
                <option value="Data Warehouse">Data Warehouse</option>
                <option value="DevOps">DevOps</option>
                <option value="Web Security">Web Security</option>
                <option value="Data Science">Data Science</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label>
            <div class="col-2">
              <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" type="submit" class="btn btn-success" name="proses" value="Simpan">
            </div>
          </div>
        </form>
      </div>
      <hr>

      <?php
      require_once "class_nilaimahasiswa.php";
      $nilaiMahasiswa = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']);
      echo "NIM : " . $nilaiMahasiswa->nim . '<br/>';
      echo "Nama Mata Kuliah : " . $nilaiMahasiswa->matakuliah . '<br/>';
      echo "Nilai : " . $nilaiMahasiswa->nilai . '<br/>';
      echo "Hasil Ujian : " . $nilaiMahasiswa->hasil() . '<br/>';
      echo "Grade : " . $nilaiMahasiswa->grade() . '<br/>';
      ?>
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