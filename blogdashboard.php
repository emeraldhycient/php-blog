<?
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
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
            color: rgb(133, 31, 133);
            ;
            font-size: 20px;
            font-weight: bolder;
            padding-left: 10px;
        }

        #new {
            color: red;
            font-size: 20px;
            font-weight: bolder;
        }

        @media only screen and (max-width:495px) {
            #activity {
                display: none;
                background-color: black;
                color: rgb(133, 31, 133);
                height: 400px;
            }

            #menu-icon {
                visibility: visible;
                margin-left: 10px;
                color: rgb(133, 31, 133);
                font-size: 1.6em;
                font-weight: bolder;
            }

            .container {
                margin: 3px;
            }

            #brand {
                display: none;
            }
        }

        @media only screen and (min-width:495px) {
            #menu-icon {
                visibility: hidden;
            }

            #activity {
                visibility: visible;
                background-color: black;
                color: rgb(133, 31, 133);
                height: 400px;
            }

            #x {
                display: none;
            }
        }

        img {
            margin-left: ;
            width: 100%;
            height: ;
        }

        hr {
            height: 4px;
            background-color: red;
        }

        .post {
            background: black;
            color: rgb(133, 31, 133);
        }

        small {
            color: red;
        }

        #desc {
            color: grey;
        }

        a {
            color: rgb(133, 31, 133);
        }

        .col-md-3 {
            margin-left: 5px;
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
    </header>
    </div>
    <div class="container">
        <div class="row">
            <div id="activity" class="col-md-3">
                <hr>
                <ul>
                    <li id="x"><span style="float:right;font-weight: bolder;">x</span></li>
                    <li>
                        <p><img src="./watches\wristwatchonhand.jpeg" style="width:50px;margin-right:4px;"><span>emerald hycient</span></p>
                    </li>
                    <li>
                        <p><a href="blogcreate.php"><span id="new">+</span>New post</a> </p>
                    </li>
                    <li>
                        <p>Number Of Post<span> <?php
                                    $db = new mysqli('localhost','root','','blog') or die(mysqli_error($db));
                                 $sql = " SELECT * FROM blog";
                                 $query = mysqli_query($db,$sql);
                                    if($query){
                                        $count = mysqli_num_rows($query);
                                        echo $count;
                                    }
                                
                                
                                ?></span></p>
                    </li>

                </ul>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-6">
                <center class="text-lg">recent post</center>
                <div class="row">
                    <?php

 $con = mysqli_connect("localhost","root","","blog") or die(mysqli_error($con));
 $sql = " SELECT * FROM blog ORDER BY id DESC";
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
<button class='btn btn-default'><a href=''>view</a></button>
                  <button class='btn btn-default'><a href=''>delete</a></button>       </p>
  </div>
</div>
<br>
 
  ";

  echo  $post;
 }
} else {

}

?>
            </div>



        </div>

        <script src="./jquery-3.4.0.js"></script>
        <script src="./bootstrap/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                let menuicon = $("#menu-icon");
                let activity = $("#activity");
                let x = $("#x");
                menuicon.click(function() {
                    activity.show();
                });
                x.click(function() {
                    activity.hide();
                });


            });

        </script>
</body>

</html>
