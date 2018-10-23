<?php session_start(); ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/connection.php'; ?>

<?php
if(!isset($_SESSION['sessionID'])&&!isset($_SESSION['username'])){
    redirect_to("checkpoint.php");
}else{
	$session_id = $_SESSION['sessionID'];
}
?>

<?php
if(isset($_POST['search_term'])){
	$name = $_POST['search_term'];

	$query = "SELECT firstname , lastname FROM members WHERE firstname LIKE '%$name%' OR lastname LIKE '%$name%'  ";

	 $result_row = mysqli_query($connection,$query);

	 confirmQuery($result_row);

	 $result_count = mysqli_num_rows($result_row);

	 //echo "You searched for <mark>{$name}</mark> returned <mark>{$result_count}</mark> results<br>";

	 while($names = mysqli_fetch_assoc($result_row)){
	 	echo "<span class=''>",$names['firstname']." ".$names['lastname']."</span><br>";
	 }
}
?>