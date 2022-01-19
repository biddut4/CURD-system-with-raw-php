<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--main css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
        @media only screen and (max-width:800px) {
            #no-more-tables tbody,
            #no-more-tables tr,
            #no-more-tables td {
                display: block;
            }
            #no-more-tables thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            #no-more-tables td {
                position: relative;
                padding-left: 50%;
                border: none;
                border-bottom: 1px solid #eee;
            }
            #no-more-tables td:before {
                content: attr(data-title);
                position: absolute;
                left: 6px;
                font-weight: bold;
            }
            #no-more-tables tr {
                border-bottom: 1px solid #ccc;
            }
        }
    </style>
</head>

<body style="background: #282C34;">

    <header style="padding: 10px 0; background:#4C4C4C;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <span style="font-family: 'Neonderthaw', cursive; color:#fff; font-size:30px;">Simple</span>
                </div>
                <div class="col-md-7 d-flex justify-content-end">
                    <nav class="d-flex align-items-center">
                        <ul style="display: flex;">
                        <li style="list-style: none; margin-left:20px;"><a href="index.php" class="btn" style="color:#fff;font-size:15px;">Home</a></li>
                            <?php 
                                if(isset($_SESSION['id'])){
                                   ?>
                                   <li style="list-style: none; margin-left:20px;"><a href="user.php?id=<?= $_SESSION['id']?>" class="btn" style="color:#fff;font-size:15px;">Profile</a></li>
                                   <?php 
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['id'])){
                                   ?>
                                   <li style="list-style: none; margin-left:20px;"><a href="list.php" class="btn" style="color:#fff;font-size:15px;">View list</a></li>
                                   <?php 
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['id'])){
                                   ?>
                                   <li style="list-style: none; margin-left:20px;"><a href="logout.php" class="btn" style="color:#fff;font-size:15px;">Logout</a></li>
                                   <?php 
                                }
                            ?>

                            <?php 
                                if(!isset($_SESSION['id'])){
                                   ?>
                                   <li style="list-style: none; margin-left:20px;"><a href="login.php" class="btn" style="color:#fff;font-size:15px;">Login</a></li>
                                   <?php 
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>