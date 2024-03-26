<?php
require '../../core/functions.php';
include('../validation.php');
$books = getBorrowedBooks( $_SESSION["user_id"]);  ?>
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
                    <th>Borrowed Date</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $key=> $book):?>
                <tr>
                    <td><?=$key + 1 ?></td>
                    <td><?=$book['book_title'];?></td>
                    <td><?=$book['author'];?></td>
                    <td><?=$book['date_borrow'];?></td>
                    <td><?=$book['due_date'];?></td>
                    <td><?=$book['borrow_status'];?></td>
                    <td class="action-buttons">
                    <?php if($book['borrow_status'] == 'pending'): ?>
                        <a class="edit disabled">Waiting for approval </a>
                        <?php elseif($book['borrow_status'] == 'borrowed') :?>
                        <a class="edit"  href="./return.php?borrowed_id=<?=$book['borrowed_id'];?>&id=<?=$book['book_id'];?>">Return Book</a>
                        <?php else: ?>
                            <a class="delete disabled">No Action Required </a>
                        <?php endif;?>
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