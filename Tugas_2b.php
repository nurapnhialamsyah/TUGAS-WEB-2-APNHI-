<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            float: left;
            margin: 3px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
    // Variablejumlah baris dan kolom
    $rows = 5;

    // Loop untuk menghasilkan stiap baris
    for ($i = 1; $i <= $rows; $i++) {
        // Loop untuk menghasilkan jymlah kotak sama dngan nomor baris
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        // selesikan setiap baris
        echo "<div class='clear'></div>";
    }
    ?>
</body>
</html>


