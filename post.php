<?php 
    // include 
    include_once("header.php"); 
    require_once("db.php");
    $id=$_GET['id'];
    $query = "SELECT * FROM post WHERE id=".$id;
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    ?>
            <div class="">
             <div class="container">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['post']; ?></p>
                <br>
              </div>
           </div>
<?php 
    require_once("footer.php");
    
?>