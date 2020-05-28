<?php 

    $con = mysqli_connect("localhost","root","","blog") or die(mysqli_error($con));
 $id;
if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $postid = $_POST['id'];
    $commentor = $_POST['commentor'];
    $comment = $_POST['comment'];
    $sq = " INSERT INTO comment(email,commentor,comment,postid) VALUES('$email','$commentor','$comment','$postid')";
    $query = mysqli_query($con,$sq);
    if($query){
        echo "<script>alert('comment submitted');</script>";
    }else{
                echo "<script>alert('comment was not submitted');</script>";

    }
}
$cat="";
$pid="";
if(isset($_GET['id'])){
   $id = $_GET['id'];
                
 $sql = " SELECT * FROM blog WHERE id='$id' ";
 $query = mysqli_query($con,$sql);
 if ($query) {
 while($row = mysqli_fetch_object($query)){
  $post  = "
  <div class='row'>
         <h3>$row->title </h3><br>
    <img src='./blogphoto/{$row->photo}'>
       <p id='desc'>$row->textz </p>
</div>
<br> ";
$cat=$row->cat;
$pid=$row->id;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row->title; ?></title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body{
            background-color: background-color: dimgray;

        }
        .container {
            margin-left: 6px;
            margin-right: 6px;

        }

        nav {
            background-color: black;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            padding: 2px;
        }

        #brand {
            color: orangered;
            ;
            font-size: 20px;
            font-weight: bolder;
            padding-left: 10px;
        }


        @media only screen and (max-width:495px) {

            .container {
                margin: 3px;
            }

            .col-md-4 {
                float: left;
            }

            .col-md-8 {
                float: right;
            }

            img {
                width: 80px;
                float: left;
            }

            .main {
                float: right;
            }
            .img{
            float:left;
            width:100px;
            height: 80px;
        }
        .body{
            float: right;
        }

        }

        @media only screen and (min-width:495px) {
            img {
                margin: 0px;
                width: 100%;
                height: ;
            }
           .img{
            float:left;
            width:150px;
            height: 80px;
        }
        .body{
            float: right;
            margin-left:-20px:
        }
        }
        img{
            width:90%;
            height: 380px;
        }
        small {
            color: red;
        }

        #desc {
            color: grey;
            margin: 0;
        }
        h3{
            color: grey;
        }
         .inverse{
            background-color: cadetblue;
            text-align: center;
        }
         
    </style>
</head>

<body>
    <header>
        <nav class="nav">
            <div id="brand">
                <h4>rald</h4>
            </div>
        </nav>
    </header><br>
    <div class="container">
        <div class="row">
           <DIV class="col-md-2"></DIV>
            <div class="col-md-8">

                <?php
     echo ' <p><small> Author: emerald hycient </small>><small> category: '.$row->cat.' </small></p> ';
  echo  $post;
     
     
     
       $temp ='
       <h6>COMMENT*</h6>
 <form action="" method="POST" enctype="multipart/form-data">
    <input type="email" name="email" class="form-control" placeholder="email" required><br>
     <input type="hidden" name="id" class="form-control" value='.$row->id.'>
    <input type="text" name="commentor" class="form-control" placeholder=" name            optional*"><br>
    <textarea id="content" name="comment" class="form-control"  placeholder=" comment......." required></textarea><br>
     <input name="btn" type="submit" class="btn btn-danger">
  </form>
  
';
echo $temp;
 }
 
} else {
     echo mysqli_error($con);
}
    
}

$sq = " SELECT * FROM comment WHERE postid='$id' ORDER BY id DESC";
 $query = mysqli_query($con,$sq);
 if ($query) {
     $count = mysqli_num_rows($query);
     echo "
     <h3> $count COMMENTS</h3>
     "
     ;
 while($row = mysqli_fetch_object($query)){
     if(! empty($row->commentor )){
           $post  = "
         <h5>$row->commentor </h5>
       <p id='desc'>$row->comment </p>
<br> ";
     echo $post;
     }else{
           $post  = "
         <h5> Anonymous </h5>
       <p id='desc'>$row->comment </p>
<br> ";
     echo $post;
     }

 }}else{
     echo mysqli_error($con);
 }

  $sq = "SELECT * FROM blog WHERE cat='$cat' LIMIT 2";
  $query = mysqli_query($con,$sq);
  if ($query) {
     while($row = mysqli_fetch_object($query)){
         if(!$row->id==$row->cat){
      $ouput = "
      <br>
      <hr>
    <h3>related posts</h3>
    <br>
      <div class='output'>
    <img src='./blogphoto/{$row->photo}' class='img'>
     <div class='body'>
         <h3>$row->title </h3><br>
       <p>$row->textz </p>
       </div>
      </div>
      "; 
         echo $ouput; 
         }else{
             echo "
             <br>
      <hr>
    <h3>related posts</h3>
    <br>
    <h5>no related post currently</h5>
             ";
             break;
         }
     }
  }
?>
         
            </div>
            <div class="col-md-2 i">
                <h4> Categories</h4>

                <h6><a href="catview.php?cat=App_development"> App development</a> </h6>
                <h6>
                    <a href="catview.php?cat=Graphic_design ">Graphic design </a>
                </h6>
                <h6>
                    <a href=" catview.php?cat=Database_tips">Database tips </a>

                </h6>
                <h6>
                    <a href="catview.php?cat=Tech_gist ">Tech gist </a>

                </h6>
                <h6>
                    <a href="catview.php?cat=Business "> Business</a>

                </h6><br><br>
                <h4> Pages</h4>

                <h6><a href=" "> Advertise With Us </a></h6>
                <h6><a href=" ">Contact Us </a> </h6>
                <h6> <a href=" ">Promote Music/Video On rald </a></h6>
                <h6><a href=" ">Write/Submit A Post To rald </a> </h6>


            </div>


        </div>



    </div>
<footer class="inverse">
    <h5>developed by :<b>hycient</b> with love...</h5>
</footer>
    <script src="./jquery-3.4.0.js"></script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {


        });

    </script>
</body>

</html>
