<?php 
  require '../../core/functions.php'; 
  include('../validation.php');
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  if(empty($id))
  {
    echo 'Not Authorized';
    die;
  }
  $category = getCategory(intval($id));
?>


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
    <div class="form-container">
    <form action="savedata.php" method="POST">
      <input type="hidden" name="action" value="update" />
      <input type="hidden" name="id" value="<?=$id;?>" />
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter your title" required 
        value="<?=$category[0]['title'];?>">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" placeholder="Enter your description"
        value="<?=$category[0]['description'];?>" >
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>