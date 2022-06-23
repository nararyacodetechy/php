<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script>
        let xhr = new XMLHttpRequest();

        xhr.onload = function() {
            let data = JSON.parse(xhr.responseText);
            for(post of data) {
                let divPost = document.getElementById('posts');
                divPost.innerHTML += `
                <div class="card">
                    <a href="post.php?id=${post.id}"><h2>${post.title}</h2></a>
                    <h5>${post.createdAt}</h5>
                    <div class="fakeimg" style="height:200px;">Image</div>
                </div>
                `;
            }
        }

        function getData() {
            xhr.open('GET', 'api/post.php');
            xhr.send();
        }
    </script>
 
    <div class="header">
        <h1>My Blog</h1> 
        <p>Mari Berbagi Cerita</p>
    </div>

    <?php include "koneksi.php"; ?>

    <button onclick="getData()">get data</button>

    <!-- Menampikan kolom sebelah kiri -->
    <div class="row">
        <div class="leftcolumn">

        <div id="posts">

        </div>



    