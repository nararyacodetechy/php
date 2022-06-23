<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Upload Produk</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="insert.php">Tambah Produk</a></li>
        </ul>
    </header>
    <div class="content-insert">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="namaProduk" placeholder="Tambahkan nama produk">
            <input type="text" name="hargaProduk" placeholder="Tambahkan harga produk">
            <input type="file" name="gambarProduk">
            <input type="submit" name="simpanProduk" value="Tambahkan Produk">
        </form>
    </div>
    <?php 
    
    if(isset($_POST['simpanProduk'])) {
        $folder = "admin";
        $nama_g = $_FILES['gambarProduk']['name'];
        $sumber_g = $_FILES['gambarProduk']['tmp_name'];
        $rename_file = date('') . $nama_g;
        move_uploaded_file($sumber_g, $nama_g);
        $insert = mysqli_query($conn, "INSERT INTO tb_produk VALUES (NULL, '$_POST[namaProduk]', '$_POST[hargaProduk]', '$rename_file', NULL)");

        if ($insert) {
            echo "1 Data Berhasil Ditambahkan!";
        } else {
            echo "Data Gagal Ditambahkan!";
        }
    }
    
    ?>
</body>
</html>