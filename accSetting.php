<?php session_start(); ?>
<?php require_once 'includes/functions.php'; ?>
<?php require_once 'includes/connection.php'; ?>

<?php
if(!isset($_SESSION['sessionID'])&&!isset($_SESSION['username'])){
    redirect_to("checkpoint.php");
}else{
   $session_id= $_SESSION['sessionID'];
}

?>
<?php
$user_infor_set = get_userInfo($session_id);
$user_infor_array = mysqli_fetch_assoc($user_infor_set);
?>

<?php require_once 'includes/header.php'; ?> 

  <div class="text-xs-center thumbnail" style="background-color:#1c1e2a">
  <img class="img-rounded img-responsive" src="images/banner/logo2.png" width="200px" height="200px"  >
  </div>

<div class="container-fluid">

<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#myhome">MY ACCOUNT</a></li>
    <li><a data-toggle="pill" href="#menu1">CHANGE PASSWORD</a></li>
    <li><a data-toggle="pill" href="#menu2">CONNECT TO FB</a></li>
</ul>
 
  <div  class="tab-content ">
  <hr>
            <div id="myhome" class="tab-pane fade in active">
                <?php require 'includes/forms/accsetting.php'; ?>
            </div>

            <div id="menu1" class="tab-pane fade">
                <?php require 'includes/forms/passwordChange.php';?>           
            </div> 

            <div id="menu2" class="tab-pane fade">
                <h3>Connect to FaceBoook</h3>
            </div>

  </div>
 
</div>

<?php require'includes/footer.php';?>
