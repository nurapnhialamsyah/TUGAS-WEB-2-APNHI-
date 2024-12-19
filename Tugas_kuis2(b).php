<?php
// Array data produk dengan jumlah, harga, dan total yang dihitung
$produk = [
    ["nama" => "Pepsodent", "stok" => 30, "harga" => 11980],
    ["nama" => "Sunlight", "stok" => 15, "harga" => 12880],
    ["nama" => "Baygon", "stok" => 10, "harga" => 16779],
    ["nama" => "Dove", "stok" => 20, "harga" => 22688],
    ["nama" => "Rinso", "stok" => 20, "harga" => 20769],
    ["nama" => "Downy", "stok" => 15, "harga" => 12880],
    ["nama" => "Le Minerale", "stok" => 25, "harga" => 5650],
];

// Variabel untuk menghitung total keseluruhan
$totalKeseluruhan = 0;

// Menampilkan struk
echo "<h2>TABEL HARGA</h2>";
echo "<table border='1' cellpadding='8' cellspacing='5'>";
echo "<tr><th>Produk</th><th>stok</th><th>Harga</th><th>Jumlah</th></tr>";

// Menghitung total harga per produk dan menampilkan data
foreach ($produk as $item) {
    $totalHarga = $item["stok"] * $item["harga"];
    $totalKeseluruhan += $totalHarga;

    
    echo "<tr>";
    echo "<td>{$item['nama']}</td>";
    echo "<td>{$item['stok']}</td>";
    echo "<td>Rp" . number_format($item['harga'], 0, ',', '.') . "</td>";
    echo "<td>Rp" . number_format($totalHarga, 0, ',', '.') . "</td>";
    echo "</tr>";

}


echo "<tr><td colspan='3'><strong>Total Keseluruhan</strong></td>";
echo "<td><strong>Rp" . number_format($totalKeseluruhan, 0, ',', '.') . "</strong></td></tr>";
echo "</table>";
?>