<?php
$colors = array ("hijau", "kuning", "kelabu", "merah muda");
$blue = array ("biru");

// Menampilkan kalimat dengan nilai array
echo "Balonku ada lima.<br>";
echo "Rupa-rupa warnanya: ";
echo implode(", ", $colors) . ", dan " . $blue . ".<br>";
echo "Meletus balon " . $colors[0] . " DOR!!!<br>";
echo "Hatiku sangat kacau.";
?>