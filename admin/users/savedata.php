<?php
require '../../core/functions.php'; 
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname']; 
 $gender = $_POST['gender']; 
 $role = $_POST['role']; 
 $address = $_POST['address']; 
 $contact = $_POST['contact']; 
 $status = $_POST['status']; 
 $username = $_POST['username'];
 $password = $_POST['password'];

if($_POST['action'] == 'update')
{   
    $id = $_POST['id'];
    $result = updateUser($id, $firstname, $lastname, $gender, $role, $address, $contact,$status);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}


if($_POST['action'] == 'create')
{   
    $result = addUser($firstname, $lastname, $gender, $role, $address, $contact,$status);
    if(isset($result) && $result > 0)
    {
        addUserLogin(intval($result), $username, $password, $status);
        header("Location: list.php");
        die;
    }
}