<?php
require '../../core/functions.php'; 
include('../validation.php');
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(empty($id))
    {
      echo 'Not Authorized';
      die;
    }
    $result = deleteBook($id);
    if($result)
    {
        header("Location: list.php");
        die;
    }
