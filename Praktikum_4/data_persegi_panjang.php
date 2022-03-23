<?php

require_once "class_persegi_panjang.php";

$persegiPanjang1 = new PersegiPanjang(20, 10);
$persegiPanjang2 = new PersegiPanjang(30, 20);

echo "<br/>Luas Persegi Panjang 1 : " . $persegiPanjang1->getLuas();
echo "<br/>Luas Persegi Panjang 2 : " . $persegiPanjang2->getLuas();

echo "<br/>Keliling Persegi Panjang 1 : " . $persegiPanjang1->getKeliling();
echo "<br/>Keliling Persegi Panjang 2 : " . $persegiPanjang2->getKeliling();
