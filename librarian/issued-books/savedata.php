<?php
require '../../core/functions.php'; 
include('../validation.php');
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}


$book_id = $_POST['book_id'];
$member_id = $_POST['member_id'];
$return_date = '';
$due_date = $_POST['due_date'];
$borrowed_id = $_POST['borrowed_id'];

if($_POST['action'] == 'approve')
{   
   
    $borrow_status = 'borrowed';
    $result = updateBorrowedBookStatus($borrowed_id, $member_id, $book_id,  $return_date, $borrow_status, $due_date);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}


if($_POST['action'] == 'return')
{   
    $borrow_status = 'returned';
    $return_date = date('Y-m-d');
    $result = updateBorrowedBookStatus($borrowed_id, $member_id, $book_id, $return_date, $borrow_status, $due_date);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}
