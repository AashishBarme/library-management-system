<?php
require '../../core/functions.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
<div class="main-content">
        <h2>Users</h2>
        <div class="action-buttons">
            <a class="add" href="./add.php">Add New</a>
        </div>
        <div class="content">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Admin</td>
                    <td class="action-buttons">
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
        <div class="pagination">
            <a href="#">Previous</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next</a>
        </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>