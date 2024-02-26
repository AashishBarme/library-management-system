<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 20px;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        nav a:hover {
            color: #ffd700;
        }
        .banner {
            background-image: url('https://via.placeholder.com/1500x400');
            background-size: cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            font-size: 24px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .banner h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .about-us {
            padding: 40px 20px;
            text-align: center;
        }
        .about-us h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .about-us p {
            font-size: 18px;
            line-height: 1.6;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
        footer p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#about-us">About Us</a>
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
        </nav>
    </header>
    <div class="banner">
        <div>
            <h2>Welcome to Our Website</h2>
            <p>This is a description of our website.</p>
        </div>
    </div>
    <div class="about-us" id="about-us">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sed magna nisi. Nullam sed magna nisi.</p>
    </div>
    <footer>
        <p>&copy; 2024 LMS. All rights reserved.</p>
    </footer>
</body>
</html>
