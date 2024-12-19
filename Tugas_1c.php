<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Layout</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 50px); 
            grid-template-rows: repeat(3, 50px); 
            gap: 10px; 
            justify-content: center; 
            align-items: center; 
            margin-top: 50px; 
        }

        .grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            width: 50px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
        }
        .item1 { grid-column: 1; grid-row: 1; }
        .item2 { grid-column: 1; grid-row: 2; }
        .item3 { grid-column: 2; grid-row: 2; }
        .item4 { grid-column: 1; grid-row: 3; }
        .item5 { grid-column: 2; grid-row: 3; }
        .item6 { grid-column: 3; grid-row: 3; }
    </style>
</head>
<body>

<?php
// mendefenisikan variable
$letterA = 'A';
$letterB = 'B';
$letterC = 'C';
?>

<div class="grid-container">
    <div class="grid-item item1"><?php echo $letterA; ?></div>
    <div class="grid-item item2"><?php echo $letterA; ?></div>
    <div class="grid-item item3"><?php echo $letterB; ?></div>
    <div class="grid-item item4"><?php echo $letterA; ?></div>
    <div class="grid-item item5"><?php echo $letterB; ?></div>
    <div class="grid-item item6"><?php echo $letterC; ?></div>
</div>

</body>
</html>


