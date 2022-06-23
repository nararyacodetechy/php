<?php include "../header.php"; ?>

<?php 
include "../koneksi.php";

$id = $_GET["id"];
$update = $conn->query("SELECT * FROM post WHERE id=$id");
$updateData = $update->fetch_object();

?>

<div class="card">
    <h2 style="text-align:center;">Edit Data</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="fname">Ubah Title</label><br>
        <input type="text" name="titles" value="<?php echo $updateData->title?>" id="fname"><br><br>

        <!-- <label for="fimage">Ubah Gambar</label><br>
        <input type="file" name="images" id="fimage" value="<?php echo $updateData->image?>"><br><br>

        <label for="fcontent">Ubah Content :</label><br>
        <textarea name="contents" rows="10" id="content" value="<?php echo $updateData->content?>"></textarea><br><br> -->
        <button type="submit" name="submit" style="color: green; width: 100%;">Edit</button>
    </form>
</div>

<div class="card">
    <a href="index.php" style="text-decoration: none; color: black;">Cancel</a>
</div>

<?php 

if (isset($_POST['submit'])) {
    $title      = $_POST['titles'];
    // $image      = $_POST['images'];
    // $content    = $_POST['contents'];

    $conn->query(" UPDATE INTO post SET title='$title' WHERE id='$id' ");

    // echo "<div align: center;><h5>Mohon Tunggu data sedang di Update...</h5></div>";
}

?>

<?php include "../footer.php" ?>