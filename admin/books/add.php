<?php
require '../../core/functions.php'; 
$categories = listCategories();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="../assets/css/style.css" />
 <style>  
 
</style>
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
    <div class="main-content">
    <div class="form-container">
    <form action="savedata.php" method="POST">
    <input type="hidden" name="action" value="create" />
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Book Title" required>
      </div>
      <div class="form-group">
        <label for="title">Category:</label>
        <select name="category_id" required>
                <option value="" disabled selected>Select Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?=$category['id'];?>"><?=$category['title'];?></option>
                <?php endforeach;?>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Author:</label>
        <input type="text" id="title" name="author" placeholder="Book Author" required>
      </div>
      <div class="form-group">
        <label for="title">Book Copies Available:</label>
        <input type="text" id="title" name="book_copies" placeholder="Enter Total Num of copies" required>
      </div>
      <div class="form-group">
        <label for="title">Book Publication:</label>
        <input type="text" id="title" name="book_pub" placeholder="Book Publication" required>
      </div>
      <div class="form-group">
        <label for="title">Publisher Name:</label>
        <input type="text" id="title" name="publisher_name"  required>
      </div>
      <div class="form-group">
        <label for="title">ISBN:</label>
        <input type="text" id="title" name="isbn" placeholder="Enter your title" required>
      </div>
      <div class="form-group">
        <label for="title">Copyright Year:</label>
        <input type="text" id="title" name="copyright_year" placeholder="Enter your title" required>
      </div>
      <div class="form-group">
          <label for="title">Date Added:</label>
          <input type="date" id="title" name="date_added" placeholder="Enter your title" required>
        </div>
        <div class="form-group">
          <label for="title">Date Received:</label>
          <input type="date" id="title" name="date_receive" placeholder="Enter your title" >
        </div>
      <div class="form-group">
        <label for="description">Status:</label>
        <select name="status" required>
                <option value="" disabled selected>Select Status</option>
                <option value="available">Available</option>
                <option value="borrowed">Borrowed</option>
                <option value="out-of-stock">Out of Stock</option>
            </select>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>