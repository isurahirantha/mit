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
<!--
style="background-image:url(http://www.assai.info/wp-content/uploads/111-just-live-fb-timeline-cover-image.jpg); width:200px height:200px"
-->


<?php require_once 'includes/header.php'; ?>
 

	<div class="text-xs-center thumbnail" style="background-color:#1c1e2a">
	<img class="img-rounded img-responsive" src="images/banner/logo2.png" width="200px" height="200px"  >
	</div>


<div class="container-fluid">	

<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#menu"><span><i class="glyphicon glyphicon-dashboard"></i><span>&nbsp;MANAGE POSTS</a></li>
    <li><a data-toggle="pill" href="#menu1"><span><i class="glyphicon glyphicon-plus-sign"></i><span>&nbsp;NEW POST</a></li>
    <li><a data-toggle="pill" href="#member"><span><i class="glyphicon glyphicon-user"></i><span>&nbsp;MEMBERS</a></li>
    <li><a data-toggle="pill" href="#projects"><span><i class="glyphicon glyphicon-share"></i><span>&nbsp;PROJECTS</a></li>
    <li><a href="home.php"><span><i class="glyphicon glyphicon-fast-backward"></i><span></a></li>
</ul>

  <div  class="tab-content">
  <hr>
        <div id="menu" class="tab-pane fade in active">
	        <?php 
	        if(!isset($_GET['edit_pid'])){
	        require 'includes/my_post_and_question_tbl.php';
  	    	}elseif(isset($_GET['edit_pid'])) {
  	    	require 'includes/forms/edit_post.php';
  	    	}
	    	?>
        </div>

        <div id="menu1" class="tab-pane fade">
        	<?php require 'includes/forms/postform.php'; ?>
        </div>

        <div id="member" class="tab-pane fade">
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>MEMBERS</strong>
            <p>This feature will be available in the near future.</p>
            <li>Read Member's Information which they ahre with you</li>
            <li>Send Messages to them</li>
          </div>
        </div>

        <div id="projects" class="tab-pane fade">
          <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>PROJECTS</strong> 
            <p>This feature will be available in the near future.<p>
            <li>Projects you are working with</li>
          </div>
        </div>       

  </div>


</div> 

<?php require_once 'includes/footer.php'; ?>

