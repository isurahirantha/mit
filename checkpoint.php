<?php session_start(); ?>
<?php require_once 'includes/functions.php'; ?>
<?php
if(isset($_SESSION['sessionID'])&&isset($_SESSION['username'])){
    redirect_to("mitforum.php");
}else{
	//$session_id = $_SESSION['sessionID'];
}
?>


<?php require_once 'includes/headerflexible.php'; ?>

<section id="home" style="background:url(images/banner/bgone.jpg); background-size:100% 100%;" class="loginRegister container text-center col-lg-12">



<h1>WELCOME TO AGNI <span style="background-color:#333333;border:1px solid #FFFFFF;border-radius:5px;padding:2px;">MIT</span> CLUB</h1>

<p class="lead">Enroll With Us to Share the Knowledge</p>

<?php
if(isset($_GET['process_id'])){
	if($_GET['process_id']==1||$_GET['process_id']==2||$_GET['process_id']==3){
		if($_GET['process_id']==1){
			echo "<div class=\"msgbox alert alert-success\">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<div class=\"panel-heading \"><b>REGISTER SUCCESS, PLEASE <mark>SIGN IN</mark> TO CONTINUE!</b></div>";
			echo "</div>";
		}elseif($_GET['process_id']==2){
			echo "<div class=\"msgbox alert alert-danger \">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<div class=\"panel-heading \">";
			echo "Hi IP: <ins>",$user_ip = get_ip()."</ins>, ";
			echo "<b>PLEASE COMPLETE REGISTRATION FROM CORRECTLY</b></div>";
			echo "</div>";
		}elseif($_GET['process_id']==3){
			echo "<div class=\"msgbox alert alert-warning \">";
			echo "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
			echo "<div class=\"panel-heading \">";
			echo "Hi IP: <ins>",$user_ip = get_ip()."</ins>, ";
			echo "<b>PLEASE PROVIDE CORRECT LOGINS!</b></div>";
			echo "</div>";			
		}

	}else{
		redirect_to("https://goo.gl/umMyrV");
	}

}
?>

<button class="btn btn-default" data-toggle="modal" data-target="#loginmodal">Sign In</button>

<button class="btn btn-default "  data-toggle="modal" data-target="#registermodal">Register</button>



</section>



<!--include login modal-->
<?php require_once 'includes/forms/loginform.php'; ?>

<?php require_once 'includes/forms/registerform.php'; ?>
    
<?php //require_once 'testing.php'; ?>


<?php require_once 'includes/footer.php'; ?>
<!--
a5318723_seudb
a5318723_isura
-->