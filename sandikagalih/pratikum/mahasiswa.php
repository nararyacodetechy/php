<?php 

$mahasiswa = [
    [   
        "gambar" => "alex.jpg",
        "nama" => "Sandhika Galih", 
        "nim" => "42030099", 
        "jurusan" => "Teknik Informatika", 
        "email" => "alexanderyu@gmail.com"
    ],
    [
        "gambar" => "nara.jpeg",
        "nama" => "Galih Ferdiansyah", 
        "nim" => "42030098", 
        "jurusan" => "Teknik Informatika", 
        "email" => "nara2932@gmail.com"
    ],
    [
        "gambar" => "raditya.jpeg",
        "nama" => "Sandhika Pratama", 
        "nim" => "42030097", 
        "jurusan" => "Teknik Industri", 
        "email" => "raditya23@gmail.com"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
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

    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach($mahasiswa as $student) : ?>
        <li><a href="details.php?name=<?= $student["nama"]?>
                                &nim=<?= $student["nim"]?>
                                &jurusan=<?= $student["jurusan"]?>"><?= $student["nama"]?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>