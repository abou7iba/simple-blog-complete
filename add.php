<?php 
    // include 
    include_once("header.php");
    require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div class="container">
        <div class="container">
            <form action="" method="post">
            <h4 class="add-c">Add New Post From Here :</h4><br><br>
            <h5>Title</h5>
            <input type="text" placeholder="Title" value="" name="ntital" required >
            <h5>Post</h5>
            <input type="text" placeholder="Post" value="" name="npost" required ><br><br>
            <input type="submit" placeholder="Post" value="POST" name="btnp" >
            <?php
            if(isset($_POST['btnp'])){
                $title = $_POST['ntital'];
                $post = $_POST['npost'];
                $send = $_POST['btnp'];

                $query = "INSERT INTO `post`(`title`, `post`) VALUES ('$title','$post');";
                mysqli_query($conn, $query);
                echo "Your Post is Published Successfully";
                
            }
            
            
            ?>
            </form>
         </div>
        </div>
    </center>
</body>
</html>