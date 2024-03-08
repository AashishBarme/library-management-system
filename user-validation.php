<?php
 require './core/functions.php';
if(!isset($_POST['action'])){
    echo 'NOT Authorized';
    die;
}

if($_POST['action'] == 'Login')
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $user = verifyUserLogin($username, $password);
    if(count($user) == 0)
    {
        echo 'Login Error';
        die;
    }

    $userDetails = getUsersDetails($user[0]['id']);
    if($userDetails[0]['role'] == 'admin')
    {
        session_start();
        $_SESSION["firstname"] = $userDetails[0]['firstname'];
        $_SESSION["authorized"] = true;
        header("Location:./admin/dashboard.php");
        die;
    }
    if($userDetails[0]['role'] == 'student')
    {
        session_start();
        $_SESSION["firstname"] = $userDetails[0]['firstname'];
        $_SESSION["authorized"] = true;
        header("Location:./student/dashboard.php");
        die;
    }
    if($userDetails[0]['role'] == 'librarian')
    {
        session_start();
        $_SESSION["firstname"] = $userDetails[0]['firstname'];
        $_SESSION["authorized"] = true;
        header("Location:./librarian/dashboard.php");
        die;
    }

    

}
