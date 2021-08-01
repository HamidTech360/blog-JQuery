<?php require 'db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/blog_post.css">
</head>
<body>
    <div class="wrapper">
        <h1>Post and publish your article</h1>
        <form action="blog_post.php" method="post" enctype="multipart/form-data" >
       
        
        <textarea  id="the-textarea" name="postText"  placeholder="Start Typin..."autofocus ></textarea>
        <div id="the-count">
        
        </div>

        <div class="form-group" id="forms">
            <input type="text" class="form-control" placeholder="post Introductory text/ post trailer" name="introText" >
            <input type="text" class="form-control" placeholder="post title" name="postTitle" >
            <input type="text" class="form-control pwd" placeholder="permit Id" name="permit" >
            
        </div>
        <div id="current"  class="" >
            <img src="pageimg/imgplaceholder.png" class="pull-right placeholder" alt="">
            <button class="btn btn-success pull-left" name="submit">Publish</button>
        </div>  <br>
        <div class=" choose pull-right" >choose an image for your post</div>
        <input type="file" name="imageName" class="fileBtn"  style="display:none" >
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
     <script src="js/imgDisplay.js"></script>
     <?php
    
    
    // error_reporting(E_ALL &~ E_NOTICE);
    if(isset($_POST['submit'])){
        $postText = $_POST['postText'];
        $postTitle = $_POST['postTitle'];
        $imageName = $_FILES['imageName']['name'];
        $permit = $_POST['permit'];
        $intro = $_POST['introText'];
        $date = date("d-m-20y");
        $time = date("h:i:sa");

       if($permit == '12345'){
           $fileDir = 'images/'.$imageName;
           $imageFileType = pathinfo($fileDir, PATHINFO_EXTENSION);
           $validExtension = array('jpg', 'png', 'jpeg');
           $uploadOk = 0;
         
              if($_FILES['imageName']['size'] < 700000){
                if(move_uploaded_file($_FILES['imageName']['tmp_name'], $fileDir)){
                    echo '<script>alert("Image Upload successfu")l</script>';
                    $uploadOk=1;
                }else{
                    echo '<script>alert("There is a problem with this image. please choose another")</script>';
                    echo mysqli_error($connect);
                }
            
              }else{
                echo '<script>alert("This file is too heavy")</script>';
              }
           
           if($uploadOk==1){
                $insert = "INSERT INTO posts (post, title, image, intro, date, time)VALUES ('$postText', '$postTitle', '$imageName', '$intro', '$date', '$time')";
                $query = mysqli_query($connect, $insert);
        
                if($query){
                    echo '<script>alert("record successfully inserted")</script>';
                }else{
                    echo '<script>alert("failed to insert")</script>';
                    echo mysqli_error($connect);
                }
           }
       }else{
           echo '<script>alert("you are not authorized to postt")</script>';
       }

      

    }
     
     ?> 
  
</body>
</html>