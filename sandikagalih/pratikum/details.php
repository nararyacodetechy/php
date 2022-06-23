<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Mahasiswa</title>
    <style>
        img {
            width: 200px;
            height: 200px;
        }
        li {
            list-style: none;
            padding: 5px 0px;
        }
    </style>
</head>
<body>
    <ul>
        <li><?= $_GET["name"];?></li>
        <li><?= $_GET["nim"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>

    <a href="mahasiswa.php">Kembali</a>
</body>
</html>