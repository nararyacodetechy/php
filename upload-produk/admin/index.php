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
    <?php include "koneksi.php";

    $produk = mysqli_query($conn, "SELECT * FROM tb_produk");

    while ($hasil = mysqli_fetch_array($produk)) : ?>
        <div class="container">
            <div class="content">
                <div class="produk">
                    <img src="<?php echo $hasil['gambar_produk']; ?>">
                    <?php echo $hasil['nama_produk'];?><br>
                    <?php echo "Rp.", $hasil['harga_produk'];?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    
</body>
</html>