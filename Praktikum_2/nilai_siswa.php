<?php

$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_tugas = $_POST['nilai_tugas'];

$presentase_nilai_uas = $nilai_uas * 0.35;
$presentase_nilai_uts = $nilai_uts * 0.3;
$presentase_nilai_tugas = $nilai_tugas * 0.35;

$total_nilai_presentase = $presentase_nilai_tugas + $presentase_nilai_uas + $presentase_nilai_uts;

if (!empty($proses)) {
  echo 'Proses : ' . $proses;
  echo '<br/>Nama : ' . $nama_siswa;
  echo '<br/>Mata Kuliah : ' . $mata_kuliah;
  echo '<br/>Nilai UTS : ' . $nilai_uts;
  echo '<br/>Nilai UAS : ' . $nilai_uas;
  echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
  echo '<br/>Presentasi Total Nilai : ' . $total_nilai_presentase;
}

switch ($total_nilai_presentase) {
  case $total_nilai_presentase >= 80 && $total_nilai_presentase <= 100:
    echo "<br><br>Grade : <b>A</b> (Sangat Memuaskan)";
    break;
  case $total_nilai_presentase >= 70 && $total_nilai_presentase <= 84:
    echo "<br><br>Grade : <b>B</b> (Memuaskan)";
    break;
  case $total_nilai_presentase >= 56 && $total_nilai_presentase <= 69:
    echo "<br><br>Grade : <b>C</b> (Cukup)";
    break;
  case $total_nilai_presentase >= 36 && $total_nilai_presentase <= 55:
    echo "<br><br>Grade : <b>D</b> (Kurang)";
    break;
  case $total_nilai_presentase >= 0 && $total_nilai_presentase <= 35:
    echo "<br><br>Grade : <b>E</b> (Sangat Kurang)";
    break;
  default:
    echo "<br><br>Grade : <b>I</b> (Tidak ada)";
    break;
}

if ($total_nilai_presentase > 55 && $total_nilai_presentase < 100) {
  echo "<br/><br/>Selamat anda dinyatakan <b>LULUS</b> untuk mata kuliah " . $mata_kuliah;
} elseif ($total_nilai_presentase <= 55 && $total_nilai_presentase > 0) {
  echo "<br/><br/>Mohon maaf anda dinyatakan <b>BELUM LULUS</b> untuk mata kuliah " . $mata_kuliah;
} else {
  echo "<br/><br/>Mohon Maaf sepertinya anda salah menginput nilai, silahkan coba input nilai kembali.";
}
