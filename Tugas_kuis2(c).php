<?php
// Array data produk
$products = [
    ['ID' => 1, 'Produk' => 'Pepsodent', 'Stok' => 30, 'Harga' => 11980],
    ['ID' => 2, 'Produk' => 'Sunlight', 'Stok' => 15, 'Harga' => 12880],
    ['ID' => 3, 'Produk' => 'Baygon', 'Stok' => 10, 'Harga' => 16779],
    ['ID' => 4, 'Produk' => 'Dove', 'Stok' => 20, 'Harga' => 22889],
    ['ID' => 5, 'Produk' => 'Rinso', 'Stok' => 20, 'Harga' => 20769],
    ['ID' => 6, 'Produk' => 'Downy', 'Stok' => 15, 'Harga' => 22880],
    ['ID' => 7, 'Produk' => 'Le Mineral', 'Stok' => 25, 'Harga' => 5650],
];

// Array pembelian (contoh pembelian sesuai struk di gambar)
$purchases = [
    ['Produk' => 'Pepsodent', 'Jumlah' => 27],
    ['Produk' => 'Rinso', 'Jumlah' => 15],
    ['Produk' => 'Downy', 'Jumlah' => 5],
    ['Produk' => 'Dove', 'Jumlah' => 20],
    ['Produk' => 'Le Mineral', 'Jumlah' => 22],
];

// Fungsi untuk mencari harga produk berdasarkan nama produk
function findProductPrice($productName, $products) {
    foreach ($products as $product) {
        if ($product['Produk'] === $productName) {
            return $product['Harga'];
        }
    }
    return 0;
}

// Menghitung total pembelian
$total = 0;
foreach ($purchases as $purchase) {
    $price = findProductPrice($purchase['Produk'], $products);
    $subtotal = $purchase['Jumlah'] * $price;
    $total += $subtotal;
}

// Menentukan diskon
$discount = 0;
if ($total >= 350000) {
    $discount = 0.25; // 25%
} elseif ($total >= 250000) {
    $discount = 0.20; // 20%
}

// Menghitung total setelah diskon
$discountAmount = $total * $discount;
$totalAfterDiscount = $total - $discountAmount;

// Tanggal transaksi
$date = date('d F Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .total, .discount, .final-total {
            font-weight: bold;
        }
        .final-total {
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <h2>Struk Pembelian</h2>
    <p><strong>Tanggal Transaksi:</strong> <?= $date; ?></p>
    <table>
        <tr>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($purchases as $purchase): 
            $price = findProductPrice($purchase['Produk'], $products);
            $subtotal = $purchase['Jumlah'] * $price;
        ?>
        <tr>
            <td><?= $purchase['Produk']; ?></td>
            <td><?= $purchase['Jumlah']; ?> x</td>
            <td class="text-right"><?= number_format($price, 0, ',', '.'); ?></td>
            <td class="text-right"><?= number_format($subtotal, 0, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p class="text-right total">Total: <?= number_format($total, 0, ',', '.'); ?></p>
    <p class="text-right discount">Diskon: <?= ($discount * 100); ?>% (<?= number_format($discountAmount, 0, ',', '.'); ?>)</p>
    <p class="text-right final-total">Total Pembayaran: <?= number_format($totalAfterDiscount, 0, ',', '.'); ?></p>
</div>

</body>
</html>