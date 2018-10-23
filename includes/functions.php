<?php

function mysql_escape($value){
	global $connection;
	$magic_quote_active = get_magic_quotes_gpc();
	$enough_php = function_exists("mysqli_real_escape_string");
	if($enough_php){
		if($magic_quote_active){stripslashes($value);}
		$value = mysqli_real_escape_string($connection,$value);
	}else{
		if(!$magic_quote_active){
			$value=addslashes($value);
		}
	}
	return $value;
}

function confirmQuery($sqlquery)
{
		global $connection;
		if(mysqli_num_rows($sqlquery)<0){
			die(mysqli_error($connection));
		}
		else
		{
		return true;
		}
}

function redirect_to($location=NULL){
	if($location!=NULL){
	header("Location:{$location}");
	exit;		
	}
}

function select_all_category(){
	global $connection;
	$query = "SELECT * FROM postcategory ORDER BY position ASC";
	$result = mysqli_query($connection,$query);
	confirmQuery($result);
	return $result;
}

	function get_ip(){

		if(!empty($_SERVER['HTTP_CLIENT_IP']))
		{
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED'];
		}elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_FORWARDED_FOR'];
		}elseif(!empty($_SERVER['HTTP_FORWARDED'])){
			$ip = $_SERVER['HTTP_FORWARDED'];
		}elseif (!empty($_SERVER['REMOTE_ADDR'])) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}else{
			$ip = null;
		}
		return $ip;

	}

function get_categories(){
	global $connection;
	$sql = "SELECT * FROM postcategory ORDER BY cid ASC ";
    $result_set = mysqli_query($connection,$sql);
    if(confirmQuery($result_set)){
    	return $result_set;
    }
}

function get_posts_by_cat_id($cat_id){
	global $connection;
	$sql = "SELECT * FROM posts WHERE cat_id = {$cat_id} AND visibility = 1";
	$posts_set = mysqli_query($connection,$sql);
	if(confirmQuery($posts_set)){
		return $posts_set;
	}
}

function get_posts_by_selected_pid($sected_pid){
	global $connection;
	$sql = "SELECT * FROM posts WHERE pid = {$sected_pid}";
	$posts_set = mysqli_query($connection,$sql);
	if(confirmQuery($posts_set)){
		return $posts_set;
	}
}

function stringGet($string){
	if(isset($string)){
		$search = ".";
		$pos = strpos($string,$search);
		$stringCut = substr($string,0,$pos);
		return $stringCut;
	}
}

function get_userInfo($sessionID){
	global $connection;
	$sql = "SELECT * FROM members WHERE autoID = {$sessionID} LIMIT 1";
	$userInfoSet = mysqli_query($connection,$sql);
	if(confirmQuery($userInfoSet)){
		return $userInfoSet;
	}
}


function get_posts($requerst,$session_id,$pid=""){
	global $connection;

			if($requerst=="post"){
			$sql = "SELECT * FROM posts WHERE user_id = {$session_id}  ORDER BY pid ASC";
			}elseif(!is_null($pid)){
			
			$sql = "SELECT * FROM posts WHERE user_id = {$session_id} AND pid = {$pid}";	
			}

			$resultset = mysqli_query($connection,$sql);

			if(!confirmQuery($resultset)){
				die("Mysqli error");
			}else{
				return $resultset;
			}
}

function get_posts_to_edit($pid,$session_id){
	global $connection;
	$sql = "SELECT * FROM posts WHERE pid = {$pid} AND user_id = {$session_id} LIMIT 1";
	$resultset = mysqli_query($connection,$sql);
	if(confirmQuery($resultset)){
	$user_sel_post = mysqli_fetch_assoc($resultset);
		return $user_sel_post;
	}	


}

function getComments($post_id){
	global $connection;

	$sql = "SELECT * FROM comments WHERE pid = {$post_id} ORDER BY com_id DESC ";

	$commentSet = mysqli_query($connection,$sql);

	if(confirmQuery($commentSet)){
		echo "<div class=\"well\">";
		while($commentsArray = mysqli_fetch_assoc($commentSet)){
			echo "<div class=\"panel panel-primary\">";
				
				echo "<div class=\"panel-footer\">";	
				echo "Posted by:-".$commentsArray['name'];
				echo "</div>";

					echo "<div class=\"panel-body\">";
					echo $commentsArray['replycontent'];
					echo "</div>";

			echo "</div>";
		}
		echo "<div>";

	}

}

?>