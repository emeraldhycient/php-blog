<?php
$con = mysqli_connect("localhost","root","","blog") or die(mysqli_error($con));

if (isset($_POST["btn"])) {
 if (!empty($_POST["title"]) || !empty($_FILES["photo"]) && !empty($_POST["text"]) && !empty($_POST["cat"]) ) {
    $photod =  "./blogphoto/".basename($_FILES["photo"]["name"]);
    $title = $_POST["title"];
  $photo =  $_FILES["photo"]["name"];
  $text =  $_POST["content"];
  $cat = $_POST["cat"];
    $move = move_uploaded_file($_FILES["photo"]["tmp_name"],$photod);
    $sql =" INSERT INTO blog(title,photo,textz,cat) VALUES ('$title','$photo','$text','$cat')";
    $query = mysqli_query($con,$sql);
    if($query){
     if ($move ) {
      echo "<script>alert('submitted');</script>";
      header("location:inde.php");
    }else{
      echo "<script>alert('could not be submittted');</script>";
       header("location:blogcreate.html");

     }
    }else{
      echo "<script>alert('image could not be moved');</script>";
     header("location:blogcreate.html");

    }
 } else {
      echo "<script>alert('fill all form');</script>";
      header("location:blogcreate.html");

  }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create post</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            background-color: gray;
        }
        nav{
            background-color:black; 
        }
     #brand{
        color:rgb(133, 31, 133);;
        font-size:20px;
        font-weight:bolder;
        padding-left:10px; 
    }
        .container{
            padding: 5px;
            background-color: aliceblue;
        }
    @media only screen and (max-width:495px){
      #menu-icon{
          visibility:visible;
          margin-left: 10px;
          color:rgb(133, 31, 133);
          font-size:1.6em;
        font-weight:bolder;
     }
        #brand{
          display:none;
    }
    }
     @media only screen and (min-width:495px){
     #menu-icon{
        visibility:hidden;
     }
    }
textarea{
  width:100%;
  height:200px;
}
    </style>
</head>
<body>
    <header>
            <nav class="nav">
                <div id="brand">
                  <h4>rald</h4>
                </div>
                  <h4 id="menu-icon">&#9776;</h4> 
             </nav>  
    </header><br>
<div class="container">
    <form action="blogcreate.php" method="POST" class="container" enctype="multipart/form-data">
    <input type="text" id="title" name="title" class="form-control" placeholder="enter title"><br>
        <select name="cat">
        <option>choose category</option>
        <option>App_development</option>
        <option> Web_development </option>
        <option> Graphic_design </option>
        <option> Database_tips </option>
        <option> Tech_gist </option>
        <option> Business </option>
</select><br><br>
    <input type="file" id="image" name="photo" style="width:150px;"><br><br>
    <textarea id="content" name="content" placeholder=" post......."></textarea><br>
     <input name="btn" type="submit" class="btn btn-danger">
  </form>
  
</div>

<div id="div"></div>
        <script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function (){
              /*
            let title = $("#title").value();
            let photo = $("#file").value();
            let cat = $("#cat").value();
            let text = $("#text").value();
            let btn = $("#btn");
                btn.click(function() {
                  $.ajax({
                   url:"blogcreate.php",
                   type:"post",
                   data:{
                        title:title,
                        photo:photo,
                        text:text,
                        cat:cat
                   },
                   success:function (e){
                    $("#div").html(e);
                    //windows.location=windows.location;
                   });
                });
*/
              });
         </script>
    </body>
    </html>