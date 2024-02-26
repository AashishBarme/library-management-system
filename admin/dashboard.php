<?php

require '../core/functions.php';
if(!isset($_SESSION) || !$_SESSION['authorized'])
{
    echo 'NOT AUTHORIZED';
    die;
}

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="./assets/css/style.css" />
 <style>
     .banner {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
     }
    </style>
</head>
<body>
<div class="container">
   <?php include('./inc/sidebar.php'); ?>
<div class="main-content">
<div class="banner">
        <h1>Hello <?=$_SESSION['firstname'];?>, Welcome to the Dashboard</h1>
    </div>

    </div>
</body>
</html>