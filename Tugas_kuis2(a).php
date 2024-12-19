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