<?php

class BMI {
  public $berat;
  public $tinggi;

  function __construct($berat, $tinggi)
  {
    $this->berat = $berat;
    $this->tinggi = $tinggi;
  }

  public function nilaiBMI() {
    return round($this->berat / (($this->tinggi / 100) * ($this->tinggi / 100)), 1);
  }

  public function statusBMI($nilaiBMI) {
    switch ($nilaiBMI) {
      case $nilaiBMI < 18.5:
        return 'Kekurangan Berat Badan';
        break;
      case $nilaiBMI >= 18.5 && $nilaiBMI <= 24.9:
        return 'Normal (ideal)';
        break;
      case $nilaiBMI >= 25.0 && $nilaiBMI <= 29.9:
        return 'Kelebihan Berat Badan';
        break;
      case $nilaiBMI >= 30.0:
        return 'Kegemukan (Obesitas)';
        break; 
      default:
        return 'Nilai tidak valid';
        break;
    }
  }
}