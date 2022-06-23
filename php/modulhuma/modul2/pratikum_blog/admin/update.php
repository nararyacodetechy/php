<style>
    input {
        margin: 10px 0;
    }
    .content {
        width: 100%;
    }
</style>

<?php include "header.php"?>

<?php 


$update = $conn->query("SELECT * FROM post WHERE id=$id");
$updateData = $update->fetch_object();

?>

<div class="card">
    <h2 style="text-align:center;">Edit Data</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titles" value="<?php echo $updateData->title ?>"><br>
        <!-- <input type="text" value="<?php echo $updateData->createdAt ?>"><br> -->
        <!-- <input type="file" name="image" value="<?php echo $updateData->image; ?>"><br> -->
        <!-- <input type="text" name="content" class="content" value="<?php echo $updateData->content ?>"> -->

        <button type="submit" name="submit" style="color: green; width: 100%;">Edit</button>
    </form>
</div>

<div class="card" style="text-align: center;">
    <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
</div>


<?php 

if (isset($_POST['submit'])) {
    $title      = $_POST['titles'];
    // $image      = $_POST['images'];
    // $content    = $_POST['contents'];

    $conn->query(" UPDATE post SET title='$title' WHERE id='$id' ");

    // echo "<div align: center;><h5>Mohon Tunggu data sedang di Update...</h5></div>";
}

?>
