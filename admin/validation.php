<?php
// include '../core/config.php';
// require_once('../core/config.php');
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    $url = MAIN_URL.'index.php';
    header("location: $url");
    exit();
}

if(!isset($_SESSION['role']) || (trim($_SESSION['role']) !='admin'))
{
    echo 'Not Authorized';
    die;
}

?>