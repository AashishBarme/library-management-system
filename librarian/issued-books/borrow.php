<?php 
  require '../../core/functions.php'; 
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  if(empty($id))
  {
    echo 'Not Authorized';
    die;
  }
  $borrowed_id = $_GET['borrowed_id'];
  $book = getBorrowedBookDetails(intval($id), intval($borrowed_id));
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Panel</title>
 <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
    <div class="main-content">
    <h2>Approve Issue Status for Book: <?=$book[0]['book_title'];?> </h2>
    <div class="form-container">
    <form action="savedata.php" method="POST">
      <input type="hidden" name="action" value="approve" />
      <input type="hidden" name="book_id" value="<?=$id;?>" />
      <input type="hidden" name="borrowed_id" value="<?=$borrowed_id;?>" />
      <input type="hidden" name="member_id" value="<?=$book[0]['member_id'];?>" />
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" disabled="disabled" id="title" name="title" placeholder="Enter your title" required 
        value="<?=$book[0]['book_title'];?>">
      </div>
      <div class="form-group">
        <label for="title">Student Username:</label>
        <input type="text" disabled="disabled" id="title" name="title" placeholder="Enter your title" required 
        value="<?=$book[0]['username'];?>">
      </div>
      <div class="form-group">
        <label for="title">Due Date:</label>
        <input type="text" disabled="disabled" id="title" name="title" placeholder="Enter your title" required 
        value="<?=$book[0]['due_date'];?>">
      </div>
      <button type="submit" class="btn">Approved</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>