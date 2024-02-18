<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
 <link rel="stylesheet" href="../assets/css/style.css" />
 <style>  
  .form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 40px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    display: block;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
  }
  
  .form-group input {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    font-size: 16px;
  }
  
  .form-group input:focus {
    outline: none;
    border-color: #6ea3ff;
  }
  
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
  }
  
  .btn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
<div class="container">
   <?php include('../inc/sidebar.php'); ?>
    <div class="main-content">
    <div class="form-container">
    <form action="#" method="POST">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="name" placeholder="Enter your title" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="description" id="description" name="description" placeholder="Enter your description" required>
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>