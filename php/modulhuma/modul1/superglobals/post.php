<html>
<body>
<!-- PHP $ _POST adalah variabel PHP super global yang digunakan untuk mengumpulkan data setelah mengirimkan formulir HTML dengan method = "post". $ _POST juga banyak digunakan untuk mengirimkan variabel. Contoh di bawah ini menunjukkan form dengan kolom input dan tombol kirim. Saat pengguna mengirimkan data dengan mengklik "Kirim", formulir dikirim ke file yang ditentukan dalam atribut action dari tag <form>. -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;  }
}
?>

</body>
</html>