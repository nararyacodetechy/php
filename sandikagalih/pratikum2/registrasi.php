<?php 
require "functions.php";

if ( isset($_POST["register"])) {

    // data baru 
    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil Menambahkan User!');
              </script>";
    } else {
        echo mysqli_error($conn);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>

<form action="" method="post">

<ul>
    <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required autocomplete="off">
    </li>
    <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required autocomplete="off">
    </li>
    <li>
        <label for="passwordConfirm">Confirm Password</label>
        <input type="password" name="passwordConfirm" id="passwordConfirm" required autocomplete="off">
    </li>
    <li>
        <button type="submit" name="register">Register</button>
    </li>
</ul>


</form>
    
</body>
</html>