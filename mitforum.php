<?php ob_start();?>
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

<?php require_once 'includes/header2.php'; ?>		



<?php //echo $_SESSION['username']."<br>";echo $_SESSION['sessionID']; ?>

<?php
/*
*cat_id == ($GET[id]) ==post relationship to category[inside post table]
*pid == $_GET['selected_pid'] posts table index
*/
//1 componant
if(!isset($_GET['id'])&&!isset($_GET['selected_pid'])){
/*
*IF BOTH cat_id ($GET[id]) AND POST_ID HAS NOT BEEN SELECTED
*SHOW CATEGORY LIST AS TILES
*/
    if($category_set = get_categories()){
    echo "<div class=\"container-fluid\">";	
	echo "<div class=\"row\">";
	    	while($catTblRow = mysqli_fetch_assoc($category_set))
	    	{
	    		echo "<a href=\"mitforum.php?id=".urlencode($catTblRow['cid'])."\" >";
	    		echo "<div class=\"col-sm-6 col-md-3 text-center \" 
	    		style=\"padding:20px 20px 20px; \">";
	    		echo "<div class=\"thumbnail zoom panel panel-primay tile\"  >";
	    		echo $catTblRow['cname'];
	    		echo "</div></div></a>";	    	
	    	}
	echo "</div>";
	echo "</div>";
    }

}elseif(isset($_GET['id'])){
/*
*IF cat_id ($GET[id]) HAS BEEN SELECTED & is an integer
*SHOW POST LIST AS TILES
*
*/
	//if GET[id] is not an interger
	if(filter_var($_GET['id'],FILTER_VALIDATE_INT)===false){
		redirect_to("index.php");
	}	

				//error found
				//if user change url id, if there is no page for that
				//page not redirecting.
				$check_posts_array = mysqli_fetch_assoc(get_posts_by_cat_id($_GET['id']));

				if(is_null($check_posts_array)){
					redirect_to("index.php");
				}				 
				// check wether there is data relevent to $get[id] in mysql Tbl 


				$posts_set = get_posts_by_cat_id($_GET['id']);
				echo "<div class=\"container-fluid\">";	
	    		echo "<div class=\"row\">";
	    		while($posts_array = mysqli_fetch_assoc($posts_set)){

	    		echo "<a href=\"mitforum.php?selected_pid=".urlencode($posts_array['pid'])."\" >";
	    		echo "<div class=\"col-sm-6 col-md-3 text-center \" 
	    		style=\"padding:20px 20px 20px;\">";
	    		echo "<div class=\"thumbnail zoom \" style=\"font-size:12px\" >";
						echo "<p>",strtoupper($posts_array['post_title']),"</p>";
						
	    				$str = strip_tags($posts_array['post_content']);

	    				$postText = stringGet($str);
	    				
	    				echo nl2br($postText);
	    				

	    		echo "</div></div></a>";
	    		} 
	    		echo "</div>";
	    		echo "</div>";

}elseif (isset($_GET['selected_pid'])){
/*
*IF POST_ID($_GET['selected_pid']) HAS BEEN SELECTED & is an integer
*Show Posts,
*Add Comments,
*Add Likes
*/
		//if GET[id] is not an interger
		if(filter_var($_GET['selected_pid'],FILTER_VALIDATE_INT)===false){
		redirect_to("index.php");
		}

				// check wether there is data relevent to $get['selected_pid'] in mysql Tbl 
				$check_sel_posts_array = mysqli_fetch_assoc(get_posts_by_selected_pid($_GET['selected_pid']));
				if(is_null($check_sel_posts_array)){
					redirect_to("index.php");
				}

				$sel_posts = get_posts_by_selected_pid($_GET['selected_pid']);
				echo "<div class=\"container-fluid\">";	
	    		echo "<div align=\"justify\" style=\"padding:20px 20px 20px 20px;font-family:Neucha; \" >";
	    		$sel_posts_array = mysqli_fetch_assoc($sel_posts);

	    			echo "<h1>",strtoupper($sel_posts_array['post_title']),"</h1>";

	    			echo nl2br(strip_tags($sel_posts_array['post_content'],"<pre>"));
	    			echo "<hr>";
	    			require 'includes/forms/reply.php';
	    			if(getComments($sel_posts_array['pid'])){
	    				echo getComments($sel_posts_array['pid']);
	    			}

	    		
	    		echo "</div>";
	    		echo "</div>";

}else{
	echo "<div class=\"container-fluid\">";	
	echo "</div>";
}
?>


<?php require_once 'includes/footer.php'; ?>

