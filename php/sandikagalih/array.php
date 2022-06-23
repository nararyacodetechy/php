<?php

$days = ["Senin","Selasa","Rabu"];
$bulan = ["Januari","Februari","Maret"];
$arr = [123,"Tulisab", True];
$angka = [12,34,56,33,13,56,32,20,32,20,10];

var_dump($days);
echo "<br>";
print_r($bulan);
echo "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        div{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            /* untuk menghilangkan float  */
            clear: both;
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- Menggunakan perulangan -->
    <?php for ( $i = 0; $i < count($angka); $i++) { ?>
        <div class=""><?php echo "$angka[$i]"?></div>
    <?php } ?>
    
    <div class="clear"></div>

    <!-- menggunakan foreach  -->
    <?php foreach ( $days as $day) { ?>
        <div><?php echo "$day"?></div>
    <?php } ?>
</body>
</html>