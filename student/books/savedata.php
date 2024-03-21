<?php
require '../../core/functions.php'; 
include('../validation.php');
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}
$book_id = $_POST['book_id'];
$member_id = $_POST['member_id'];
$borrow_status = 'pending';
$date_borrow = date('Y-m-d');

if($_POST['action'] == 'update')
{   
    $result = addBorrowedBooksAndUpdateStatus($member_id, $book_id, $date_borrow, $borrow_status);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}
