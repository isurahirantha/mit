<?php session_start(); ?>
<?php require_once 'includes/connection.php';?>
<?php require_once 'includes/functions.php';?>
<?php require_once 'includes/form_functions.php';?>


<?php
if(isset($_POST['submit']))
{
	$errors = array();
	$loginRequireds =array('email','password');
	//$errors = array_merge($errors,checkRequiredFields($loginRequireds));

	foreach($loginRequireds as $login){
		if(!isset($_POST[$login])||empty($_POST[$login])){
			$errors[] =$login;
		}
	}
	//var_dump($errors);
}
?>
<?php
if(empty($errors)){
	$email = trim(mysql_escape($_POST['email']));
	$password = $_POST['password'];
	$sql ="SELECT autoID, firstname, password FROM members WHERE email = '{$email}' LIMIT 1 ";

	$result = mysqli_query($connection,$sql);

		if(!confirmQuery($result)){
		redirect_to("checkpoint.php?process_id=3");
		}

	while($tblRow = mysqli_fetch_array($result)){
		$hashed_password = $tblRow['password'];
		$username = $tblRow['firstname'];
		$ses_id		=$tblRow['autoID'];
	}

	if(password_verify($password,$hashed_password)){
		$_SESSION['username'] = $username;
		$_SESSION['sessionID'] = $ses_id;
		redirect_to("mitforum.php");
	}else{

		//wrong password
		redirect_to("checkpoint.php?process_id=3");
	}


	//echo "error not found";var_dump($errors);
}else{
	//wrong email
	redirect_to("checkpoint.php?process_id=3");
	//echo "error found";var_dump($errors);
}
?>

<?php
if(isset($connection)){
	mysqli_close($connection);
}
?>