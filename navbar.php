<?php
    session_start();
    include "databaseconn.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" href="navbar.css">
        </head>
        <body>
<div class="navbar">
        <div class="navbar-left">
            <a href="home.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="#">Support</a>
            <a href="#">About</a>
        </div>
        <div class="navbar-center">
            <input type="text" placeholder="Search">
        </div>
        <div class="navbar-right">

            <img src="https://img.icons8.com/ios-filled/50/ffffff/shopping-cart.png" alt="Cart">
            <a href="" ><img src="https://img.icons8.com/ios-filled/50/ffffff/user-male-circle.png" alt="User"></a>
            <img src="https://img.icons8.com/ios-filled/50/ffffff/menu--v1.png" alt="Menu">
        </div>
    </div>