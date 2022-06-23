<?php include "../header.php";
if(isset($_POST["ngapain"]) && $_POST["ngapain"] == 'insert') {
   $target_dir = "uploads/";
   $target_file = $target_dir . basename($_FILES["image"]["name"]);
   move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
   // $id = $_GET["id"];
   $title = $_POST['title'];
   $content = $_POST['content'];
   $image = $_FILES["image"]["name"];
   $conn->query("INSERT INTO Post set title='$title', content='$content', image='$image'");
}
$posts = $conn->query("SELECT * FROM Post");
?>

<div class="card">
   <a href="insert.php">Buat Artikel</a>
</div>

<?php
while($post = $posts->fetch_object()) {
?>
   <div class="card">
      <a href="post.php?id=<?php echo $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
      <h5><?php echo $post->createdAt; ?></h5>
      <div class="fakeimg" style="height:200px;">
         <img src="uploads/<?php echo $post->image; ?>" alt="" style="width: 100%; height: 100%; baxkground-repeat: no-repeat;">
      </div>
      <div class="button" style="padding-top: 20px; display:flex; justify-content:space-around;">
         <a href="update.php?id=<?php echo $post->id; ?>" style="text-decoration: none; color: green;">Edit</a>
         <a href="delete.php?delete=artikel&id=<?php echo $post->id ?>" style="text-decoration: none; color: salmon;">Delete</a>
      </div>
   </div>
   <?php 
}
?>

<?php include "../footer.php" ?>

