<?php
require '../../core/functions.php'; 
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}
$book_id = $_POST['book_id'];
$member_id = $_POST['member_id'];
$borrow_status = 'returned';
$return_date = date('Y-m-d');

if($_POST['action'] == 'update')
{   
    $result = updateBorrowedBookStatus($member_id, $book_id, $return_date, $borrow_status);
    // var_dump($result);die;
    if($result)
    {
        header("Location: list.php");
        die;
    }
}
