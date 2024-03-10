<?php
require '../../core/functions.php'; 
include('../validation.php');
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
 $username = isset($_POST['username']) ? $_POST['username']: '';
 $password = $_POST['password'];

 $update_password = isset($_POST['update_password']) ? $_POST['update_password'] : 'off';
if($_POST['action'] == 'update')
{   
    $id = $_POST['id'];
    $result = updateUser($id, $firstname, $lastname, $gender, $role, $address, $contact,$status);
    if($result || $update_password == 'on')
    {
        updateUserLogin($id, $password, $status);
        header("Location: list.php");
        die;
    }
    header("Location: list.php");
    die;
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