<?php
function faktorial($a) {
  if ($a == 0) {
    return 1;
  } else {
    return $a * faktorial($a - 1);
  }
}

$a = 5;
$hasil = faktorial($a);
echo "Faktorial dari $a = $hasil";

?>