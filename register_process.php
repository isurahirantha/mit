<?php require_once 'includes/connection.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/form_functions.php'; ?>

<?php
if(isset($_POST['submit'])){
	$fname = mysql_escape($_POST['firstname']);
	$lname = mysql_escape($_POST['lastname']);
	$email = mysql_escape($_POST['email']);
	$password = $_POST['password'];

}
?>
<?php
$errors = array();
$requiredFields = array("firstname","lastname","email","password");
$errors = array_merge($errors,checkRequiredFields($requiredFields));
?>
<?php
if(empty($errors)){
//var_dump($errors);
$hashed_password = password_hash($password,PASSWORD_DEFAULT);
$sql = "INSERT INTO members ";
$sql .="(firstname,lastname,email,password) ";
$sql .="VALUES('{$fname}','{$lname}','{$email}','{$hashed_password}') ";

$result = mysqli_query($connection,$sql);
confirmQuery($result); 
	$urlStr = "process_id=".urlencode(1);
	redirect_to("checkpoint.php?".htmlentities($urlStr));	
}else{
$urlStr = "process_id=".urlencode(2);
redirect_to("checkpoint.php?".htmlentities($urlStr));
//var_dump($errors);
}
?>

<?php
if(isset($connection)){
	mysqli_close($connection);
}
?>
