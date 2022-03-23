<?php

class Mahasiswa
{
  var $nim;
  var $nama;
  var $thn_angkatan;
  var $prodi;
  var $ipk;

  function __construct($nim, $nama)
  {
    $this->nim = $nim;
    $this->nama = $nama;
  }

  function predikat_ipk()
  {
    if ($this->ipk < 2.0) return "cukup";
    elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
    elseif ($this->ipk >= 3.0 && $this->ipk < 3.5) return "Memuaskan";
    elseif ($this->ipk >= 3.5 && $this->ipk < 4) return "Cum Laude";
  }
}
