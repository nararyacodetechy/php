<?php 

$mahasiswa = ["Sandhika Galih", "42030099", "Teknik Informatika", "email.com"];
$students = [
    [
        "nama" => "Sandhika Galih", 
        "nim" => "42030099", "Teknik Informatika", 
        "email" => "email.com",
        "gambar" => "raditya.jpeg"
    ],
    [
        "nama" => "Galih Ferdiansyah", 
        "nim" => "42030098", "Teknik Informatika", 
        "email" => "email.com",
        "gambar" => "nara.jpeg"
    ],
    [
        "nama" => "Sandhika Pratama", 
        "nim" => "42030097", "Teknik Industri", 
        "email" => "email.com",
        "tugas" => [90, 80, 100],
        "gambar" => "alex.jpg"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            text-align: center;
        }
        img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa | foreach</h1>

    <ul>
        <?php foreach ($mahasiswa as $data_mahasiswa) { ?>
            <li><?php echo "$data_mahasiswa"?></li>
        <?php } ?>
    </ul>


    <h1>Daftar Mahasiswa | List</h1>

    <ul>
        <li><?php echo "$mahasiswa[0]";?></li>
        <li><?php echo "$mahasiswa[1]";?></li>
        <li><?php echo "$mahasiswa[2]";?></li>
        <li><?php echo "$mahasiswa[3]";?></li>
    </ul>
     

    <h1>Daftar Mahasiswa | forech & List</h1>

    <?php foreach($students as $student) : ?>
    <ul>
        <li>
            <img src="img/<?= $student["gambar"]?>">
        </li>
        <li><?php echo "$mahasiswa[0]";?></li>
        <li><?php echo "$mahasiswa[1]";?></li>
        <li><?php echo "$mahasiswa[2]";?></li>
        <li><?php echo "$mahasiswa[3]";?></li>
    </ul>
    <?php endforeach; ?>



<?php
    // Nim dari sandhika Pratama
    echo "NIM : ", $students[2]["nim"];
?>
<br>
<?php
    // nilai tugas ke 2 dari sandhika Pratama
    echo "Nilai : ", $students[2]["tugas"][1];
?>

</body>
</html>