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
if(isset($_GET['rp_pid'])){
	$rp_pid = $_GET['rp_pid'];
}

if(isset($_POST['reply'])){

		$userinfo =  get_userInfo($session_id);
		$user_info_set = mysqli_fetch_array($userinfo);
		$fname = $user_info_set['firstname'];
		$lname = $user_info_set['lastname'];
		$name = $fname." ".$lname;

$errors = array();
$requiredFields = array("reply");
$errors = array_merge($errors,checkRequiredFields($requiredFields));
	if(empty($errors)){
		$replyContent =  mysql_escape(htmlentities($_POST['replycontent']));
		$sql = "INSERT INTO comments(name,pid,replycontent) VALUES('{$name}',{$rp_pid},'{$replyContent}') ";
		if(!mysqli_query($connection,$sql)){
			redirect_to("index.php?msg=error");
		}else{
			redirect_to("mitforum.php?selected_pid={$rp_pid}");
		}

	}
}


?>
