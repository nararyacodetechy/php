<html>
<body>
<!-- PHP $ _REQUEST adalah variabel PHP super global yang digunakan untuk mengumpulkan data setelah mengirimkan form HTML. Contoh di bawah ini menunjukkan form dengan kolom input dan tombol kirim. Saat pengguna mengirimkan data dengan mengklik "Kirim", formulir dikirim ke file yang ditentukan dalam atribut action dari tag <form>. Dalam contoh ini, menunjuk ke file ini sendiri untuk memproses data formulir. Jika ingin menggunakan file PHP lain untuk memproses data form, ganti dengan nama file pada atribut action yang diinginkan. Kemudian, kita dapat menggunakan variabel super global $ _REQUEST untuk mengumpulkan nilai bidang input: -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
    }
?>

</body>
</html>