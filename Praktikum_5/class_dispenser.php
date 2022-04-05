<?php

class Dispenser
{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas = 250;
  public $namaMinuman;

  public function isi($vol)
  {
    $this->volume = $vol;
  }

  public function hargaSegelas($harga)
  {
    $this->hargaSegelas = $harga;
  }

  public function namaMinum($nama)
  {
    $this->namaMinuman = $nama;
  }

  public function beli()
  {
    $this->volume -= $this->volumeGelas;
    if ($this->volume > 0) {
      echo "Selamat Menikmati Minuman $this->namaMinuman <br/>";
    } else {
      echo "Sorry, $this->namaMinuman sudah habis terjual <br/>";
    }
  }
}

$jusMangga = new Dispenser();
$jusMangga->isi(1000);
$jusMangga->hargaSegelas(5000);
$jusMangga->namaMinuman = "Jus Mangga Kang Aam";


$jusMangga->beli();
$jusMangga->beli();
$jusMangga->beli();
$jusMangga->beli();
$jusMangga->beli();
