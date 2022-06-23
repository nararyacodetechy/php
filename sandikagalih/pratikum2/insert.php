<?php 
require "functions.php";

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
} 

// else {
//     echo '<script type ="text/JavaScript">';  
//     echo 'alert("Gagal Menambhakan Data!")';  
//     echo '</script>';  
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        ul {
            height: 100%; 
            background-color: white;
        }
        li {
            margin: 10px;
            display: flex;
            flex-direction: column;
        }
        input, button {
            width: 500px;
            height: 20px;
            outline: none;
        }
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <h2>Tambah Data Mahasiswa</h2>
        <ul>
            <li>
                <label for="name">Nama Mahasiswa</label>
                <input type="text" name="nama" id="name" placeholder="Masukkan nama mahasiswa baru" autocomplete="off" required>
            </li>
            <li>
                <label for="nim">NIM Mahasiswa</label>
                <input type="text" name="nim" id="nim" placeholder="Masukkan nim mahasiswa" autocomplete="off" required>
            </li>
            <li>
                <label for="gambar">Gambar Mahasiswa</label>
                <input type="file" name="gambar" id="gambar" placeholder="Pilih gambar profile mahasiswa" autocomplete="off">
            </li>
            <li>
                <label for="jurusan">Jurusan Mahasiswa</label>
                <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan jurusan mahasiswa" autocomplete="off" required>
            </li>
            <li>
                <label for="fakultas">Fakultas Mahasiswa</label>
                <input type="text" name="fakultas" id="fakultas" placeholder="Masukkan fakultas mahasiswa" autocomplete="off" required>
            </li>
            <li>
                <label for="emails">Email Mahasiswa</label>
                <input type="email " name="email" id="emails" placeholder="Masukkan nama email mahasiswa" autocomplete="off" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
        
</body> 
</html> 