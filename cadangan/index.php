<?php include "header.php";
$posts = $conn->query("SELECT * FROM post");
 
while($post = $posts->fetch_object()) { 
  ?>
    <div class="card">
        <a href="post.php?id=<?php echo $post->id ?>">
            <h2><?php echo $post->title; ?></h2>
        </a>
        <h5><?php echo $post->createdAt; ?></h5>
        <div class="fakeimg" style="height:200px;">
          <img src="admin/uploads/<?php echo $post->image; ?>" alt="" style="width: 100%; height: 100%; baxkground-repeat: no-repeat;">
        </div>
    </div>
  <?php
}

 

?>

<?php include "footer.php" ?>
