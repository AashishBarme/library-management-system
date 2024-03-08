<?php
require '../../core/functions.php'; 
$users = listUsers(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="../../assets/css/style.css" />
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
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user):?>
                <tr>
                    <td>1</td>
                    <td><?=$user['username'];?></td>
                    <td><?=$user['role'];?></td>
                    <td><?=$user['status'];?></td>
                    <td class="action-buttons">
                        <a class="edit" href="./edit.php?id=<?=$user['id'];?>">Edit</a>
                        <a class="delete" href="./delete.php?id=<?=$user['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
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