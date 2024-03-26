<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
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
    .register-box {
        width: 320px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
    }
    .register-box h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    .register-box input[type="text"],
    .register-box input[type="password"],
    .register-box select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .register-box input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #333;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .register-box input[type="submit"]:hover {
        background-color: #555;
    }
</style>
</head>
<body>
<div class="container">
    <div class="register-box">
        <h2>Register</h2>
        <form action="#">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="librarian">Librarian</option>
                <option value="user">User</option>
            </select>
            <input type="submit" value="Register">
        </form>
    </div>
</div>
</body>
</html>
