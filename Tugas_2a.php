<!DOCTYPE html>
<html>
<head>
    <title>Tabel dengan Looping PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Mendefinisikan jumlah baris dan kolom
$jumlah_baris = 15;
$jumlah_kolom = 5;

echo "<table>";
echo "<tr>";
// Membuat header kolom
for ($k = 1; $k <= $jumlah_kolom; $k++) {
    echo "<th>Kolom $k</th>";
}
echo "</tr>";

// Membuat baris dan kolom dengan looping
for ($i = 1; $i <= $jumlah_baris; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $jumlah_kolom; $j++) {
        echo "<td>Baris $i Kolom $j</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
