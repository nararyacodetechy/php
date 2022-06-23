<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Selamat Datang
    <?php 
        $nama_depan = "Sandhika";
        $nama_belakang = "Galih";
        echo $nama_depan . " " . $nama_belakang;
    ?>
    </h1>

    <h3>
        Perulangan For <br>
    <?php 
        for ($i = 0; $i < 5; $i++) {
            echo "Hello World! <br>";
        }
    ?>
    </h3>

    <h3>
        Perulangan While <br>
    <?php 
        $a = 0; //jika False pada perulangan pertama, maka tidak akan ada yang ditampilkan
        while ($a < 5) {
            echo "Hello World! <br>";
            $a++;
        }
    ?>
    </h3>

    <h3>
        Perulangan Do While <br>
    <?php 
        $b = 0; //jika False pada perulangan pertama, maka akan ditampilkan 1x 
        do {
            echo "Hello World! <br>";
            $b++;
        } while ($b < 5);
    ?>
</body>
</html>