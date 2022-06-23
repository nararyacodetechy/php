<!-- Menampilkan Data (SELECT.PHP) -->
<?php require "functions.php"; 

$mahasiswa = query($conn, "SELECT * FROM tb_mahasiswa"); 

if(isset($_POST)) {

    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        li {
            margin: 10px;
            display: inline;
            flex-direction: column;
        }
        input {
            width: 500px;
            height: 20px;
        }
        button {
            width: 100px;
            height: 20px;
        }
    </style> 
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <button style="margin-bottom: 10px; background-color:darkgreen; border:none; padding:5px;">
        <a href="insert.php" style="color: #fff; text-decoration: none;">Tambahkan</a>
    </button>
    <ul>
        <li>
            <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukan Keyword Pencarian">
            <button type="submit" name="cari">Cari Data</button>
        </li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0" style="margin-top:10px;">

        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Gambar</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th>Email</th>
            <th width="150px">Aksi</th>
        </tr>

        <!-- agar tampil id tidak sesuai dengan database, jika salah satu database dihapus maka yang ditampilkan di halaman admin tidak terurut -->
        <?php $id = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $id ?></td> 
            <td><?= $row["nama"];?></td>
            <td><?= $row["nim"];?></td>
            <td>
                <img src="img/<?= $row["gambar"];?>" alt="" width="50px" height="50px">
            </td>
            <td><?= $row["jurusan"];?></td>
            <td><?= $row["fakultas"];?></td>
            <td><?= $row["email"];?></td>
            <td style="width: 160px; text-align: center; font-size: 14px;">
                <a href="edit.php?id=<?= $row["id"] ?>" style="color:green; text-decoration: none;">EDIT</a> | <a href="delete.php?id=<?= $row["id"];?>" style="color:red; text-decoration: none;" onclick="return confirm('Apakah Anda Yakin ingin Menghapusnys ?')">DELETE</a>
            </td>
        </tr>
        <?php $id++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>