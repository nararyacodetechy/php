<?php

$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
            color: green;
        }
        .kotak:hover {
            transform: rotate(-360deg);
            border-radius: 50%;
            color: #fff;
        } 
        .clear {
            /* untuk menghilangkan float  */
            clear: both;
        }
    </style>
</head>
<body>

<?php foreach($angka as $array1) :?>
    <?php foreach($array1 as $array2) :?>
        <div class="kotak">
            <?php echo "$array2";?>
        </div>
    <?php endforeach;?>
    <div class="clear"></div>
<?php endforeach;?>

</body>
</html>