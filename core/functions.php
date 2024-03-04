<?php
//  require 'config.php';
 require 'db.php';
 session_start();
 function listCategories()
 {
    $query="SELECT * FROM `category`";
    return db::getInstance()->get_result($query);
 }

 function getCategory($id)
 {
    $query = "select * from `category` where ID ='".$id."'";
    return db::getInstance()->get_result($query);
 }


 function addCategory($title, $description)
 {
   $query = "insert into `category`(title, description) values('".$title."','".$description."')";
   return db::getInstance()->dbquery($query);
 }

 function updateCategory($id, $title, $description)
 {
     $query = "update `category` set `title` = '".$title."', `description` = '".$description."' where `id` = '".$id."'";
     return db::getInstance()->dbquery($query);
 }

 function deleteCategory($id)
 {
   $query = "delete from `category` where `id`='".$id."'";
   return db::getInstance()->dbquery($query);
 }

 function verifyUserLogin($username, $password)
 {
   $query = "select * from `user_login` where username='".$username."' and password='".$password."' and status = 'active'";
   return db::getInstance()->get_result($query);
 } 



 function listBooks()
 {
    $query="SELECT * FROM `book`";
    return db::getInstance()->get_result($query);
 }

 function getBook($id)
 {
    $query = "select * from `book` where ID ='".$id."'";
    return db::getInstance()->get_result($query);
 }


 function addBook($title, $category_id, $author, $book_copies, $book_pub, $publisher_name, $isbn, $copyright, $date_receive, $date_added, $status)
 {
   $query = "insert into `book`(book_title, category_id, author, book_copies, book_pub, publisher_name, isbn, copyright_year, date_receive, date_added, status) values('".$title."','".$category_id."','".$author."','".$book_copies."','".$book_pub."','".$publisher_name."','".$isbn."','".$copyright."','".$date_receive."','".$date_added."','".$status."')";
   var_dump($query);
   return db::getInstance()->dbquery($query);
 }

 function updateBook($id, $title, $category_id, $author, $book_copies, $book_pub, $publisher_name, $isbn, $copyright, $date_receive, $date_added, $status)
 {
     $query = "update `book` set 
      `book_title` = '".$title."' 
      ,`category_id` = '".$category_id."'
      , `author` = '".$author."'
      , `book_copies` = '".$book_copies."'
      , `book_pub` = '".$book_pub."'
      , `publisher_name` = '".$publisher_name."'
      , `isbn` = '".$isbn."'
      , `copyright_year` = '".$copyright_year."' 
      , `date_receive` = '".$date_receive."'
      , `date_added` = '".$date_added."'
      , `status` = '".$status."'
      where `id` = '".$id."'";
     return db::getInstance()->dbquery($query);
 }

 function deleteBook($id)
 {
   $query = "delete from `book` where `id`='".$id."'";
   return db::getInstance()->dbquery($query);
 }


 function listUsers()
 {
    $query="SELECT * FROM `user`";
    return db::getInstance()->get_result($query);
 }

 
 function getUsersDetails($id)
 {
   $query = "select * from `user` where id='".$id."'";
   return db::getInstance()->get_result($query);
 } 


 function addUser($firstname, $lastname, $gender, $role, $address, $contact,$status)
 {
   $query = "insert into `user`(firsname, lastname, gender, role, address, contact, status) values('".$firstname."','".$lastname."','".$gender."','".$role."','".$address."','".$contact."','".$status."')";
   return db::getInstance()->dbquery($query);
 }

 function updateUser($id, $firstname, $lastname, $gender, $role, $address, $contact,$status)
 {
     $query = "update `user` set 
     `firstname` = '".$firstname."'
     , `lastname` = '".$lastname."' 
      , `gender` = '".$gender."' 
     , `role` = '".$role."' 
     , `address` = '".$address."' 
     , `contact` = '".$contact."' 
     , `status` = '".$status."' 
     where `id` = '".$id."'";
     return db::getInstance()->dbquery($query);
 }

 function deleteUser($id)
 {
   $query = "delete from `user` where `id`='".$id."'";
   return db::getInstance()->dbquery($query);
 }

 

 function addUserLogin($username, $password, $status)
 {
   $query = "insert into `user_login`(username, password, status) 
    values('".$username."','".$password."','".$status."')";
   return db::getInstance()->dbquery($query);
 }

 function updateUserLogin($id, $username, $password, $status)
 {
     $query = "update `user_login` set 
     , `password` = '".$password."' 
     , `status` = '".$status."' 
     where `id` = '".$id."'";
     return db::getInstance()->dbquery($query);
 }



