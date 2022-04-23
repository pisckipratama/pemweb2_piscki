<?php

class Pasien
{
  public $nama;
  public $kode;
  public $tmp_lahir;
  public $tgl_lahir;
  public $email;
  public $gender;

  function __construct($nama, $kode, $gender)
  {
    $this->nama = $nama;
    $this->kode = $kode;
    $this->gender = $gender;
  }
}
