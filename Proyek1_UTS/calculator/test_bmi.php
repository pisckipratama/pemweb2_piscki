<?php

require_once 'class_pasien.php';
require_once 'class_bmi.php';
require_once 'class_bmipasien.php';

$pasien1 = new Pasien(1, 'Piscki', 'P001', 'Bandung', '24-02-2000', 'pscki@email.com', 'L');
$pasien2 = new Pasien(2, 'Fenti', 'P002', 'Ciamis', '23-02-1999', 'fnti@email.com', 'P');

$bmi1 = new BMI(72, 172);
$bmi2 = new BMI(49, 167);

$pasienbmi1 = new BMIPasien($bmi1, '23-04-2022', $pasien1);
$pasienbmi2 = new BMIPasien($bmi2, '23-04-2022', $pasien2);

$ar_pasien = [$pasienbmi1, $pasienbmi2];
?>

<table class="table table-striped table-hover">
      <thead class="table-success">
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