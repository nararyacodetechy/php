<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .warna-baris {
            background-color: red;
        }
        .warna-colomn {
            background-color: blue;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="15" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>

        <!-- Percabangan ganjil -->
        <?php if ($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>

            <?php for ($j = 1; $j <= 5; $j++) : ?>

                <!-- Percabangan Genap -->
                <?php if ($j % 2 == 0) : ?>
                    <td class="warna-colomn">
                <?php else : ?>
                    <td>
                <?php endif; ?>
                    <?php echo "$i,$j"?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>