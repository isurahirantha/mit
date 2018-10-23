<?php session_start(); ?>

<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/form_functions.php'; ?>
<?php require_once 'includes/connection.php'; ?>

<?php
if(!isset($_SESSION['sessionID'])&&!isset($_SESSION['username'])){
    redirect_to("checkpoint.php");
}else{
   $session_id= $_SESSION['sessionID'];
}
?>

<?php

if(isset($_POST['update'])||isset($_GET['update_p_id'])){
    
      if(filter_var($_GET['update_p_id'],FILTER_VALIDATE_INT)===false){
        redirect_to("index.php");
      }else{

        $pid = $_GET['update_p_id'];
      }

$errors = array();
$requiredFields = array("title","content");
$errors = array_merge($errors,checkRequiredFields($requiredFields));

  if(empty($errors)){
     $type =  mysql_escape(strip_tags($_POST['type']));
     $category =  mysql_escape(strip_tags($_POST['category']));
     $title =  mysql_escape(htmlentities($_POST['title']));
     $content =  mysql_escape(htmlentities($_POST['content']));
     $visibility =  mysql_escape(strip_tags($_POST['visibility']));


  $updateSql  = "UPDATE posts SET ";
  $updateSql .= " cat_id = {$category}, posttype = {$type}, ";
  $updateSql .= " url_ref ='{$title}', post_title = '{$title}', ";
  $updateSql .= " post_content = '{$content}', user_id = {$session_id}, visibility = {$visibility} ";
  $updateSql .= " WHERE pid = {$pid} ";


      if(!mysqli_query($connection,$updateSql)){
        echo "Error update record: " . mysqli_error($connection);
      }else{
        redirect_to("home.php?status=Updated");
      }

  }else{
    //if $errors array is not empty
   redirect_to("home.php?status=1");
  }

}else{
  //if not set GET and POST values
  redirect_to("index.php");
}
?>