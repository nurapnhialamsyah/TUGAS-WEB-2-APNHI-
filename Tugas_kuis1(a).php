<?php
function hitungDiskon($jumlah_bayar) {
    if ($jumlah_bayar >= 500000) {
        return 0.05; // Diskon 5%
    } elseif ($jumlah_bayar >= 100000) {
        return 0.1;  // Diskon 10%
    } elseif ($jumlah_bayar >= 50000) {
        return 0.50; // Diskon 5%
    } else {
        return 0;   // Tidak ada diskon
    }
}

// Contoh penggunaan
$jumlah_pembelian = 100000;
$diskon = hitungDiskon($jumlah_pembelian);
$total_bayar = $jumlah_pembelian - ($jumlah_pembelian * $diskon);

echo "Jumlah pembelian: Rp " . number_format($jumlah_pembelian) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total bayar: Rp " . number_format($total_bayar);
?>