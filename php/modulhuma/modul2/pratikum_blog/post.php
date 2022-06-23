<?php include "header.php";

$id = $_GET["id"];
$result = $conn->query("SELECT * FROM post WHERE id=$id");
$post = $result->fetch_object();

?>

<div class="card">
   <h2><?php echo $post->title ?></h2>
   <h5><?php echo $post->createdAt ?></h5>
   <div class="fakeimg" style="height:200px;">
      <img src="admin/uploads/<?php echo $post->image; ?>" alt="" style="width: 100%; height: 100%; baxkground-repeat: no-repeat;">
   </div>
   <p><?php echo $post->content ?></p>
</div>

<?php include "footer.php" ?>