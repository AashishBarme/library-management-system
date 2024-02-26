<?php
require '../../core/functions.php'; 
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(empty($id))
    {
      echo 'Not Authorized';
      die;
    }
    $result = deleteCategory($id);
    if($result)
    {
        header("Location: list.php");
        die;
    }
