
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbedaan</title>
</head>
<body>
    <tr> Perbedaan fungsi isset() dan empty</tr> <br> <br>
   <tr>
    <th>Fungsi isset : memeriksa apakah variabel telah di deklarasikan dan memiliki nilai yang bukan NULL</th> <br>
    <th> Fungsi  empty : memeriksa apakah sebuah variabel kosong</th>
   </tr><br><br> 
<tr>contoh isset()</tr><br><br>
<?php
$var1 = "Hello";
$var2 = "";
$var3 = NULL;

if (isset($var1)) {
  echo "Variabel \$var1 telah dideklarasikan dan memiliki nilai.</br>"; 
} else {
  echo "Variabel \$var1 tidak dideklarasikan atau memiliki nilai NULL.</br>";
}

if (isset($var2)) {
  echo "Variabel \$var2 telah dideklarasikan dan memiliki nilai.</br>";
} else {
  echo "Variabel \$var2 tidak dideklarasikan atau memiliki nilai NULL.</br>";
}

if (isset($var3)) {
  echo "Variabel \$var3 telah dideklarasikan dan memiliki nilai.</br>";
} else {
  echo "Variabel \$var3 tidak dideklarasikan atau memiliki nilai NULL.</br>";
}
?> <br><br>
<tr>contoh empty</tr><br><br>
<?php
$var1 = "Hello";
$var2 = "";
$var3 = NULL;
$var4 = 0;
$var5 = array();

if (empty($var1)) {
  echo "Variabel \$var1 kosong.</br>";
} else {
  echo "Variabel \$var1 tidak kosong.</br>";
}

if (empty($var2)) {
  echo "Variabel \$var2 kosong.</br>";
} else {
  echo "Variabel \$var2 tidak kosong.</br>";
}

if (empty($var3)) {
  echo "Variabel \$var3 kosong.</br>";
} else {
  echo "Variabel \$var3 tidak kosong.</br>";
}

if (empty($var4)) {
  echo "Variabel \$var4 kosong.</br>";
} else {
  echo "Variabel \$var4 tidak kosong.</br>";
}

if (empty($var5)) {
  echo "Variabel \$var5 kosong.";
} else {
  echo "Variabel \$var5 tidak kosong.";
}
?>

</body>
</html>