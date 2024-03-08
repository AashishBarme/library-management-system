<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="../../assets/css/style.css" />
 <style>  
 
</style>
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
    <div class="main-content">
    <div class="form-container">
    <form action="#" method="POST">
      <div class="form-group">
        <label for="title">Book:</label>
        <input type="text" id="title" name="name" placeholder="Book Title" required>
      </div>
      <div class="form-group">
        <label for="title">Student Name:</label>
        <input type="text" id="title" name="st" placeholder="Book Title" required>
      </div>
      
      <div class="form-group">
        <label for="title">Issued Date:</label>
        <input type="text" id="title" name="name" placeholder="Book Title" required>
      </div>
      
      <div class="form-group">
        <label for="title">Return Date:</label>
        <input type="text" id="title" name="name" placeholder="Book Title" required>
      </div>
      

      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>