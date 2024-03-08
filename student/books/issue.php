<?php 
  require '../../core/functions.php'; 
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  if(empty($id))
  {
    echo 'Not Authorized';
    die;
  }
  $book = getBook(intval($id));
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Panel</title>
 <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
    <div class="main-content">
    <h2>Return Book: <?=$book[0]['book_title'];?> </h2>
    <div class="form-container">
    <form action="savedata.php" method="POST">
      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="book_id" value="<?=$id;?>" />
      <input type="hidden" name="member_id" value="7" />
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" disabled="disabled" id="title" name="title" placeholder="Enter your title" required 
        value="<?=$book[0]['book_title'];?>">
      </div>
      <div class="form-group">
          <label for="title">Due Date :</label>
          <input type="date" id="title" name="due_date" >
        </div>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>