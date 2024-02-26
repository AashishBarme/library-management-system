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


 function getUsersDetails($id)
 {
   $query = "select * from `user` where id='".$id."'";
   return db::getInstance()->get_result($query);
 } 


