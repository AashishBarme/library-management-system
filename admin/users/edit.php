<?php
require '../../core/functions.php';  
$id = isset($_GET['id']) ? $_GET['id'] : '';
if(empty($id))
{
  echo 'Not Authorized';
  die;
}
$user = getUserDetails(intval($id))[0];
?>
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
    <form action="savedata.php" method="POST">
    <input type="hidden" name="action" value="update" />
      <input type="hidden" name="id" value="<?=$id;?>" />
      <div class="form-group">
        <label for="title">First Name:</label>
        <input type="text" id="title" name="firstname" value="<?=$user['firstname'];?>" required>
      </div>
      <div class="form-group">
        <label for="title">Last Name:</label>
        <input type="text" id="title" name="lastname" value="<?=$user['lastname'];?>" required>
      </div>
      <div class="form-group">
        <label for="title">Username:</label>
        <input  disabled = "disabled" type="text" id="title" name="username" value="<?=$user['username'];?>" required>
      </div>
      <div class="form-group">
        <label for="title">Gender:</label>
        <select name="gender" id="gender" value="<?=$user['gender'];?>">
          <option value="male" <?=$user['gender'] == 'male' ? ' selected="selected"' : '';?>>Male</option>
          <option value="female" <?=$user['gender'] == 'female' ? ' selected="selected"' : '';?>>Female</option>
          <option value="others" <?=$user['gender'] == 'others' ? ' selected="selected"' : '';?>>Others</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Role:</label>
        <select name="role" id="gender" value="<?=$user['role'];?>">
        <option value="admin" <?=$user['role'] == 'admin' ? ' selected="selected"' : '';?>>Admin</option>
          <option value="librarian" <?=$user['role'] == 'librarian' ? ' selected="selected"' : '';?>>Librarian</option>
          <option value="student" <?=$user['role'] == 'student' ? ' selected="selected"' : '';?>>Student</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Address:</label>
        <input type="text" id="title" name="address" value="<?=$user['address'];?>" required>
      </div>
      <div class="form-group">
        <label for="title">Contact:</label>
        <input type="text" id="title" name="contact" value="<?=$user['contact'];?>" required>
      </div>
      <div class="form-group">
        <label for="title">Active Status:</label>
        <select name="status" id="title" value="<?=$user['status'];?>">
          <option value="active" <?=$user['status'] == 'active' ? ' selected="selected"' : '';?>>Active</option>
          <option value="inactive" <?=$user['status'] == 'inactive' ? ' selected="selected"' : '';?>>Inactive</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Password:</label>
        <input type="checkbox" name="update_password"> Check this field to update user password
        <input type="password" id="title" name="password" value="<?=$user['password'];?>">
      </div>
      <button type="submit" class="btn">Submit</button>
    </form>
  </div>
    </div>
</div>
</body>
</html>