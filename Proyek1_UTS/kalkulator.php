<?php

include_once 'header.php';
include_once 'sidebar.php';
require_once 'calculator/class_pasien.php';
require_once 'calculator/class_bmi.php';
require_once 'calculator/class_bmipasien.php';

$pasien1 = new Pasien('Piscki', 'P001', 'L');
$pasien2 = new Pasien('Fenti', 'P002', 'P');
$pasien3 = new Pasien('John', 'P003', 'L');

$bmi1 = new BMI(72, 172);
$bmi2 = new BMI(49, 167);
$bmi3 = new BMI(80, 170);

$pasienbmi1 = new BMIPasien($bmi1, '23-04-2022', $pasien1);
$pasienbmi2 = new BMIPasien($bmi2, '23-04-2022', $pasien2);
$pasienbmi3 = new BMIPasien($bmi3, '22-04-2022', $pasien3);

$ar_pasien = [$pasienbmi1, $pasienbmi2, $pasienbmi3];
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kalkultor Sehat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kalkultor Sehat</li>
          </ol>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Pasien</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tanggal Periksa</th>
                <th scope="col">Kode Pasien</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Gender</th>
                <th scope="col">Berat (kg)</th>
                <th scope="col">Tinggi (cm)</th>
                <th scope="col">Nilai BMI</th>
                <th scope="col">Status BMI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $nomor = 1;
              foreach ($ar_pasien as $pasien) {


                echo '<tr>';
                echo '<th scope="row">' . $nomor . '</th>';
                echo '<td>' . $pasien->tanggal . '</td>';
                echo '<td>' . $pasien->pasien->kode . '</td>';
                echo '<td>' . $pasien->pasien->nama . '</td>';
                echo '<td>' . $pasien->pasien->gender . '</td>';
                echo '<td>' . $pasien->bmi->berat . '</td>';
                echo '<td>' . $pasien->bmi->tinggi . '</td>';
                echo '<td>' . $pasien->bmi->nilaiBMI() . '</td>';
                echo '<td>' . $pasien->bmi->statusBMI($pasien->bmi->nilaiBMI()) . '</td>';
                echo '</tr>';
                $nomor++;
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Hitung BMI</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form method="GET">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input id="nama" name="nama" placeholder="Nama" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
              <label for="gender">Jenis Kelamin</label>
              <div>
                <select id="gender" name="gender" class="custom-select" required="required">
                  <option value="L">L</option>
                  <option value="P">P</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="berat">Berat Badan (kg)</label>
              <input id="berat" name="berat" placeholder="Berat Badan" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
              <label for="tinggi">Tinggi Badan (cm)</label>
              <input id="tinggi" name="tinggi" placeholder="Tinggi Badan" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
              <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">BMI Result</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?php
          $kd_pasien = 'P' . str_pad(count($ar_pasien) + 1, 3, '0', STR_PAD_LEFT);
          $input_pasien = new Pasien($_GET['nama'], $kd_pasien, $_GET['gender']);
          $input_bmi = new BMI($_GET['berat'], $_GET['tinggi']);
          $result = new BMIPasien($input_bmi, date("Y-m-d"), $input_pasien);

          echo 'Halo ' . $result->pasien->nama . ', hasil BMI Anda adalah <b>' . $result->bmi->nilaiBMI() . '</b>, dengan status <b>' . $result->bmi->statusBMI($result->bmi->nilaiBMI()) . '</b><br>';
          ?>
        </div>
      </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'footer.php';
?>