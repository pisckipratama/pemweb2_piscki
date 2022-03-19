<?php

require_once 'libfungsi.php';

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

$grade_nilai = grade($total_nilai_presentase);
echo "<br/><br/>Grade : " . $grade_nilai;

$predikat_nilai = predikat($grade_nilai);
echo "<br/>Predikat : " . $predikat_nilai;

$hasil_ujian = kelulusan($total_nilai_presentase);

if ($hasil_ujian) {
  echo "<br/><br/>Anda dinyatakan <b>$hasil_ujian</b> untuk kode mata kuliah " . $mata_kuliah . '.';
} else {
  echo "<br/><br/>Mohon Maaf sepertinya anda salah menginput nilai, silahkan coba input nilai kembali.";
}

echo '<p>kembali ke <a href="form_nilai.php">form siswa</a></p>';
