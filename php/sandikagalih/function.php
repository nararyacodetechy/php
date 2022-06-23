<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
</head>
<body>
    <?php 
        echo date("l, d-M-Y");
    ?>
    <br>
    <?php 
        // Waktu saat ini
        echo time();
    ?>
    <br>
    <?php 
        // Waktu saat 150 hari kemudian
        echo date("l", time()+60*60*24*150);
    ?>
    <br>
    <?php 
        // Waktu saat 150 hari sebelumnya
        echo date("l", time()-60*60*24*150);
    ?>
    <br>
    <?php 
        // add function untuk mengetahui hari pada tahun sebelumnya/kemudian dengan integer
        // mKtime terdapat 6 parameter yakni : mktime(jam, menit, detik, bulan, tanggal, tahun);
        echo date("l", mktime(0,0,0,10,13,2002));
    ?>
    <br>
    <?php 
        // add function untuk mengetahui hari pada tahun sebelumnya/kemudian dengan string
        echo date("l", strtotime("13 october 2002"));
    ?>

</body>
</html>