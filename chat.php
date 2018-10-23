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

<div>    

  <form action="" method="POST">
      <fieldset>
           <h3>CHAT BOX</h3>
            <div class="form-group row">
              <!--<label for="reply" class="col-sm-1 col-form-label"></label>-->
              <div class="col-sm-12">
                <input type="text" class="form-control" name="replycontent" id="reply" placeholder="Friend's name" rows="5" required="true">
              </div>
            </div>

            <div class="form-group row">
              <!--<label for="reply" class="col-sm-1 col-form-label"></label>-->
              <div class="col-sm-12">
                <textarea class="form-control" name="replycontent" id="reply" placeholder="TEXT" rows="5" required="true"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <!--<label for="reply" class="col-sm-1 col-form-label"></label>-->
                <div class="col-sm-12">
                    <input type="submit" name="reply" value="Post" class="btn btn-primary ">
                </div>
            </div>
    </fieldset>
  </form>
</div>

</div> 


<?php require_once 'includes/footer.php'; ?>
