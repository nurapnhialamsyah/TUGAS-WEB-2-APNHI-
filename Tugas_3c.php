<?php
function pangkat($sangka, $pangkat) {
  return pow($sangka, $pangkat);
}

$sangka = 5;
$pangkat = 4;
$hasil = pangkat($sangka, $pangkat);
echo "$sangka pangkat $pangkat = $hasil";

?>