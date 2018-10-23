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

<?php require_once 'includes/header.php'; ?>

<div class="container-fluid col-lg-12" >
<h1 onclick="$(this).hide();">START SEARCH DOCUMENTS.</h1>
<form class="form-horizontal" action="tutes.php" method="post">
                      <div class="form-group row">
                       <label for="searchbar" class="col-sm-3 control-label">SEARCH </label>
                        <div class="col-sm-6">

                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	                               	 <input id="searchtext" type="text" name="searchtext" class="form-control" >
                                </div>

                                <span id="search_result"></span>
                               
                        </div>
                      </div>
</form>

<div >
	
</div>

</div> 


<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<?php require_once 'includes/footer.php'; ?>

