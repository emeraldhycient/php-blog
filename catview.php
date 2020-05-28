<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view blogs by category</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
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


        }

        @media only screen and (min-width:495px) {
            img {
                margin: 0px;
                width: 100%;
                height: ;
            }

        }

        small {
            color: greenyellow;
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
            <div class="col-md-7">

                <?php
if(isset($_GET['cat'])){
   $cat = $_GET['cat'];
    $con = mysqli_connect("localhost","root","","blog") or die(mysqli_error($con));
                
 $sql = " SELECT * FROM blog WHERE cat='$cat' ORDER BY id DESC";
 $query = mysqli_query($con,$sql);
 if ($query) {
 while($row = mysqli_fetch_object($query)){
  $post  = "
  <div class='row'>
  <div class='col-md-4 '>
    <img src='./blogphoto/{$row->photo}'>
</div>
<div class='col-md-8  main'> 
       <h3>$row->title </h3>
       <p><small> Author: emerald hycient </small>><small> category: $row->cat</small></p> 
       <p id='desc'>$row->textz<br>
           <a href='mainview.php?id=$row->id'>view in details</a>
       </p>
  </div>
</div>
<br>
 
  ";

  echo  $post;
 }
} else {

}

}
 
?>
            </div>
            <div class="col-md-2 ">
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
