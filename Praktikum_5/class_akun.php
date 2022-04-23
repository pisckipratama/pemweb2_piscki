<?php


class Account
{
  protected $nomor;
  protected $nama;
  protected $saldo;

  // public function __construct($num, $saldo)
  // {
  //   $this->nomor = $num;
  //   $this->saldo = $saldo;
  // }

  public function deposit($uangMasuk)
  {
    $this->saldo += $uangMasuk;
  }

  public function withdraw($uangKeluar)
  {
    $this->saldo -= $uangKeluar;
  }

  public function cetak()
  {
    echo "Account $this->nama - $this->nomor memiliki sisa saldo sebanyak " . number_format($this->saldo, 2, ',', '.') . "</br>";
  }
}
