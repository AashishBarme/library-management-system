<?php
require '../../core/functions.php'; 
include('../validation.php');
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}
$title = $_POST['title'];
$desc = $_POST['description'];

if($_POST['action'] == 'update')
{   
    $id = $_POST['id'];
    $result = updateCategory($id, $title, $desc);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}


if($_POST['action'] == 'create')
{   
    $result = addCategory($title, $desc);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}