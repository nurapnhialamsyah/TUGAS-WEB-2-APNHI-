<?php

$koneksi = mysqli_connect("localhost", "root", "") or die ("koneksi ke database gagal");
mysqli_select_db ($koneksi, "dbakademik1") or die ("database tidak ada");

// Proses form ketika di-submit
if(isset($_POST['daftar'])) {
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $minat = implode(", ", $_POST['minat']); // Gabungkan array minat menjadi string

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp_name, "uploads/".$gambar);

    // Query insert
    $query = "INSERT INTO mahasiswa (id_mahasiswa, nama, alamat, jenis_kelamin, tanggal_lahir, jurusan, minat, gambar) 
              VALUES ('$id_mahasiswa', '$nama', '$alamat', '$jenis_kelamin', '$tanggal_lahir', '$jurusan', '$minat', '$gambar')";
    
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        .form-container {
            width: 500px;
            padding: 20px;
            border: 20px solid #ccc;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: inline-block;
            width: 120px;
        }
        .form-group input[type="text"],
        .form-group textarea,
        .form-group select {
            width: 250px;
            padding: 5px;
        }
        .form-group textarea {
            height: 100px;
        }
        .btn {
            padding: 5px 15px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulir Pendaftaran</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>Id Mahasiswa:</label>
                <input type="text" name="id_mahasiswa" required>
            </div>

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" required></textarea>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
            </div>

            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label>Jurusan:</label>
                <select name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                </select>
            </div>

            <div class="form-group">
                <label>Minat:</label>
                <input type="checkbox" name="minat[]" value="Programming"> Programming
                <input type="checkbox" name="minat[]" value="Animasi"> Animasi
                <input type="checkbox" name="minat[]" value="Desain"> Desain
                <input type="checkbox" name="minat[]" value="DB"> DB
            </div>

            <div class="form-group">
                <label>Gambar:</label>
                <input type="file" name="gambar" accept="image/*">
            </div>

            <div class="form-group">
                <input type="submit" name="daftar" value="Daftar" class="btn">
                <input type="reset" value="Batal" class="btn">
            </div>
        </form>
    </div>
</body>
</html>