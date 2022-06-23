<?php include "index.php";

$id = $_GET["id"];
$result = $conn->query("DELETE FROM post WHERE id=$id");

echo "<meta http-equiv='refresh' content='1; url=http://localhost/php/modulhuma/modul2/pratikum_blog/admin/index.php'";

?> 