<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .login-box {
        width: 320px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }
    .login-box h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .login-box input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #333;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .login-box input[type="submit"]:hover {
        background-color: #555;
    }
    .login-box p {
        margin-top: 15px;
        text-align: center;
    }
    .login-box p a {
        color: #333;
        text-decoration: none;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container">
    <div class="login-box">
        <h2>Login</h2>
        <form action="#">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
</div>
</body>
</html>
