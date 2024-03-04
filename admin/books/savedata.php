<?php
require '../../core/functions.php'; 
if(!isset($_POST['action'])){
    echo 'Not Authorized';
    die;
}
$title = $_POST['title']; 
$category_id = $_POST['category_id'];
$author = $_POST['author'];
$book_copies = $_POST['book_copies'];
$book_pub = $_POST['book_pub'];
$publisher_name = $_POST['publisher_name'];
$isbn = $_POST['isbn'];
$copyright_year = $_POST['copyright_year']; 
$date_receive = $_POST['date_receive'];
$date_added = $_POST['date_added'];
$status = $_POST['status'];

if($_POST['action'] == 'update')
{   
    $id = $_POST['id'];
    $result = updateBook($id, $title, $category_id, $author, $book_copies, $book_pub, $publisher_name, $isbn, $copyright_year, $date_receive, $date_added, $status);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}


if($_POST['action'] == 'create')
{   
    $result = addBook($title, $category_id, $author, $book_copies, $book_pub, $publisher_name, $isbn, $copyright_year, $date_receive, $date_added, $status);
    var_dump($result);
    if($result)
    {
        header("Location: list.php");
        die;
    }
}