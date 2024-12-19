<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 50%;
            margin-right: 10px;
            text-align: left;
        }
        .form-group input {
            width: 50%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 15px;
        }
        .button-container input[type="submit"], .button-container input[type="reset"] {
            padding: 10px 20px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button-container input[type="submit"] {
            background-color: #0075be;
            color: white;
        }
        .button-container input[type="reset"] {
            background-color: #0075be;
            color: white;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post">
        <div class="form-group">
            <label>Nama Mahasiswa:</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>Ujian Tengah Semester:</label>
            <input type="number" name="uts" required>
        </div>

        <div class="form-group">
            <label>Tugas Mandiri:</label>
            <input type="number" name="tugas" required>
        </div>

        <div class="form-group">
            <label>Ujian Akhir Semester:</label>
            <input type="number" name="uas" required>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $uts = $_POST['uts'];
            $tugas = $_POST['tugas'];
            $uas = $_POST['uas'];

            $rata_rata = ($uts + $tugas + $uas) / 3;
            $grade = '';

            if ($rata_rata >= 100) {
                $grade = 'A';
            } elseif ($rata_rata >= 85) {
                $grade = 'B';
            } elseif ($rata_rata >= 60) {
                $grade = 'C';
            } elseif ($rata_rata >= 50) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }

            $status = $rata_rata >= 60 ? 'lulus' : 'tidak lulus';

            echo "<div class='result'>$nama mendapatkan nilai rata-rata $rata_rata ($grade) dan $status</div>";
        }
        ?>
        <div class="button-container">
            <input type="reset" value="Reset">
            <input type="submit" name="submit" value="Hitung Nilai">
        </div>
    </form>
</div>

</body>
</html>


