<?php session_start(); ?>
<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/form_functions.php'; ?>
<?php

if(isset($_POST['submit'])){
$errors = array();

     $firstname =  mysql_escape(strip_tags($_POST['firstname']));
     $lastname =  mysql_escape(strip_tags($_POST['lastname']));
     $birthday =  mysql_escape($_POST['birthday']);
     $email =  mysql_escape($_POST['email']);
     $address =  mysql_escape(htmlentities($_POST['address']));
     $telephone =  mysql_escape($_POST['telephone']);
     $website =  mysql_escape($_POST['website']);
     $other =  mysql_escape(strip_tags($_POST['other']));
     $gender =  mysql_escape(htmlentities($_POST['gender']));
     $user_id = $_SESSION['sessionID'];
     //echo $dob= date("Y-m-d",$birthday);
     $dob = date("Y-m-d", strtotime($birthday));

 $updateSql = "UPDATE members SET firstname = '{$firstname}',  
    lastname = '{$lastname}', 
    birthday = '{$dob}', 
    email = '{$email}',  
    address = '{$address}', 
    telephone = '{$telephone}',  
    website = '{$website}', 
    other = '{$other}', 
    gender = {$gender} 
    WHERE autoID = {$user_id} ";
/*
  $updateSql  = "UPDATE members SET ";
  $updateSql .= " firstname = '{$firstname}', lastname = '{$lastname}', ";
  $updateSql .= " birthday ='{$dob}', email = '{$email}', ";
  $updateSql .= " address = '{$address}', telephone = '{$telephone}', website ='{$website}', other = '{$other}', ";
  $updateSql .= " gender = {$gender} ";
  $updateSql .= " WHERE autoID = {$user_id} ";
*/
      if(!mysqli_query($connection,$updateSql)){
        die("Error updating record: " . mysqli_error($connection));
      }else{
        redirect_to("accSetting.php?stutus=ok");
      }
  //confirmQuery($result); 

}else{
  redirect_to("index.php");
}
?>
<?php
if(isset($connection)){
  mysqli_close($connection);
}
?>