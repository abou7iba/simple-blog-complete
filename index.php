<?php 
    // include 
    include_once("header.php");
    require_once("db.php");
    $query = "SELECT * FROM post" ;
    $result = mysqli_query($conn, $query);  

    if(isset($result)){
        while($row = mysqli_fetch_assoc($result)){?>
            <div class="posts">
             <div class="container">
                <h4><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a></h4>
                <p><?php echo $row['post']; ?></p>
                <a href="post.php?id=<?php echo $row['id'];?>"><button>Read More</button></a>
                <br>
              </div>
           </div>
<?php
        }
    }?>
<?php 
    require_once("footer.php");
    
?>