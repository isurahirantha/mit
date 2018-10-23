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
if(isset($_POST['submit'])){
$errors = array();
$requiredFields = array("title","content");
$errors = array_merge($errors,checkRequiredFields($requiredFields));

  if(empty($errors)){
     $type =  mysql_escape(strip_tags($_POST['type']));
     $category =  mysql_escape(strip_tags($_POST['category']));
     $title =  mysql_escape(htmlentities($_POST['title']));
     $content =  mysql_escape(htmlentities($_POST['content']));
     $visibility =  mysql_escape(strip_tags($_POST['visibility']));
  

 $sql = "INSERT INTO posts(cat_id, posttype, url_ref, post_title, post_content, user_id, visibility) VALUES(
         {$category}, {$type}, '{$title}', '{$title}', '{$content}', {$session_id}, {$visibility}
        )";
/*
  $updateSql  = "UPDATE members SET ";
  $updateSql .= " firstname = '{$firstname}', lastname = '{$lastname}', ";
  $updateSql .= " birthday ='{$dob}', email = '{$email}', ";
  $updateSql .= " address = '{$address}', telephone = '{$telephone}', website ='{$website}', other = '{$other}', ";
  $updateSql .= " gender = {$gender} ";
  $updateSql .= " WHERE autoID = {$user_id} ";
*/
      if(!mysqli_query($connection,$sql)){
        echo "Error Addning record: " . mysqli_error($connection);
      }else{
        redirect_to("home.php?stutus=ok");
      }

  }else{
   redirect_to("home.php?stutus=1");
  }

}else{
  redirect_to("index.php");
}
?>



