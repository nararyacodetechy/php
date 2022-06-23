
<?php 
require "functions.php";
// ambil id dari Url
$id = $_GET["id"];

$mhs = query ($conn, "SELECT * FROM tb_mahasiswa WHERE id=$id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah!');
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
    <title>Ubah Data</title>
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
        <h2>Ubah Data Mahasiswa</h2>
        <ul>
            <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
            <li>
                <label for="name">Nama Mahasiswa</label>
                <input type="text" name="nama" id="name" value="<?= $mhs["nama"] ?>" autocomplete="off">
            </li>
            <li>
                <label for="nim">NIM Mahasiswa</label>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"] ?>"autocomplete="off">
            </li>
            <li>
                <label for="gambar">Gambar Mahasiswa</label>
                <img src="img/<?= $mhs["gambar"] ?>" style="width: 100px;">
                <input type="file" name="gambar" id="gambar" autocomplete="off">
            </li>
            <li>
                <label for="jurusan">Jurusan Mahasiswa</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>" autocomplete="off" required>
            </li>
            <li>
                <label for="fakultas">Fakultas Mahasiswa</label>
                <input type="text" name="fakultas" id="fakultas"value="<?= $mhs["fakultas"] ?>" autocomplete="off">
            </li>
            <li>
                <label for="emails">Email Mahasiswa</label>
                <input type="email " name="email" id="emails" value="<?= $mhs["email"] ?>" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">SAVE</button>
            </li>
        </ul>
    </form>
        
</body> 
</html> 