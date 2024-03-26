<?php
require '../../core/functions.php';
include('../validation.php');
$status = 'available';
$title = (isset($_POST['title']) ? $_POST['title'] : '');
$books = [];
if($title != '') {
    $books = listBooksInStudentPanel($status, $title);  
} ?>
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
    <div class="form-container">
    <form method="POST">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter your title" required >
      </div>
      <button type="submit" class="btn-blue">Search Now</button>
    </form>

    <?php if(!isset($_POST['title'])): ?>
        <p>Search books you want to borrow</p>
    <?php else :?>


    <?php if(count($books)) :?>
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
                    <?php foreach($books as $key=> $book):?>
                    <tr>
                        <td><?=$key + 1;?></td>
                        <td><?=$book['book_title'];?></td>
                        <td><?=$book['author'];?></td>
                        <td><?=$book['date_added'];?></td>
                        <td><?=$book['status'];?></td>
                        <td class="action-buttons">
                            <a class="edit"  href="./issue.php?id=<?=$book['id'];?>">Request Book</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <a href="#">Previous</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">Next</a>
                </div>
        <?php else:?>
                <p>Book with title <?=$title;?> not found</p>
        <?php endif;?>
    <?php endif;?>
    </div>
    </div>
    </div>
</div>
</body>
</html>