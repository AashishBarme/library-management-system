<?php
require '../../core/functions.php';
$books = listBooks();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Panel</title>
 <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
<div class="main-content">
        <h2>Books</h2>
        <div class="content">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date Added</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book):?>
                <tr>
                    <td>1</td>
                    <td><?=$book['book_title'];?></td>
                    <td><?=$book['author'];?></td>
                    <td><?=$book['date_added'];?></td>
                    <td><?=$book['status'];?></td>
                    <td class="action-buttons">
                        <a class="edit"  href="./issue.php?id=<?=$book['id'];?>">Issue Book</a>
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