<?php
// Soal a) menggunakan while
$i = 1;
while ($i <= 16) {
    echo $i . " "; // Cetak nilai
    $i += 5; // Tambah 5 setiap iterasi
}
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal b) menggunakan while
$i = 10;
while ($i >= 0) {
    echo $i . " "; // Cetak nilai
    $i--; // Kurangi 1 setiap iterasi
}
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal c) menggunakan do-while
$i = 30;
do {
    echo $i . " "; // Cetak nilai
    $i -= 3; // Kurangi 3 setiap iterasi
} while ($i >= 0);
echo "<br>"; // Baris baru setelah deret selesai
?>

<?php
// Soal d) menggunakan do-while
$i = 10;
do {
    echo $i . " "; // Cetak nilai
    $i -= 2; // Kurangi 2 setiap iterasi
} while ($i >= 0);
echo "<br>"; // Baris baru setelah deret selesai
?>