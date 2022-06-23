<?php include "../header.php"; ?>

    <div class="card">
        <h2>Artikel baru</a>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ngapain" value="insert">
            <input type="text" name="title"><br>
            <input type="file" name="image"><br>
            <textarea name="content" rows="10"></textarea><br>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <div class="card">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
    </div>
   
<?php include "../footer.php" ?>