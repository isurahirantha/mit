
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
if(isset($_GET['edit_pid'])){

     //post with relevent user_id

  $user_post_set = get_posts("post",$session_id);

    //post with relevent user_id and getvalue
  $pid =$_GET['edit_pid'];
// $sql = "SELECT * FROM posts WHERE pid = {$pid} AND user_id = {$session_id} LIMIT 1";
// $resultset = mysqli_query($connection,$sql);
// $user_sel_post = mysqli_fetch_assoc($resultset);

  $user_sel_post=get_posts_to_edit($pid,$session_id);

}
?>  
  <?php 
 //debug   
   // echo $user_sel_post['pid'],"<br>";
   // echo $user_sel_post['post_title'],"<br>";
  ?>
  <?php $id = $user_sel_post['pid'];?>
  <form action="update_post.php?update_p_id=<?php echo $id;?>" method="POST">
      <fieldset>
          <legend>EDIT : <?php echo strtoupper($user_sel_post['post_title']); ?></legend>

            <div class="form-group row">
                <label for="selectCategory" class="col-sm-3 control-label">Select the Category</label>
                <div class="col-sm-9">
                    <select class="input-small form-control" name="category" id="category" placeholder="category" required="required">
                      <?php
                      $category_set = get_categories();
                      while($catTblRow = mysqli_fetch_assoc($category_set)){
                        echo "<option ";
                        echo "value=\"{$catTblRow['cid']}\" ";
                        if($user_sel_post['cat_id']==$catTblRow['cid']){echo "selected";}
                        echo ">{$catTblRow['cname']}</option>";
                      }
                      ?>
                    </select>
                </div>
              </div>

            <div class="form-group row">
                <label for="selectCategory" class="col-sm-3 control-label">Question or Tutorial</label>
                <div class="col-sm-9">
                    <select class=" input-small form-control" name="type" id="type">
                    <?php

                    echo "<option value=\"1\" ";
                    if($user_sel_post['posttype']==1){echo "selected";}
                    echo ">Tutorial</option>";

                    echo "<option value=\"0\" ";
                    if($user_sel_post['posttype']==0){echo "selected";}
                    echo ">Question</option>";                   

                    ?>

                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="title" class="col-sm-3 control-label">Post Title</label>
                <div class="col-sm-9">
                  <input type="text" name="title" class="form-control" id="title" 
                    value= "<?php echo trim($user_sel_post['post_title']); ?>"
                   required="true">
                </div>
              </div>

              <div class="form-group row">
                <label for="post" class="col-sm-3 control-label">Your Post</label>
                <div class="col-sm-9">
          <?php
            echo "<span style= \"padding:2px 2px 2px 2px\" >You can use  <kbd>";
            echo strtoupper(htmlentities(" <code>|<iframe>|<img>|<pre>|<h1>|<ul>|<ins>|<mark>|<b>|<i>|<a>")), ",</kbd> tags in here</span>";
          ?>
                  <textarea class="form-control" name="content" id="content" rows="16"
                  required="true"><?php echo trim($user_sel_post['post_content']); ?></textarea>
                </div>
              </div>

            <div class="form-group row">
                <label for="selectCategory" class="col-sm-3 control-label">Post Visibility</label>
                <div class="col-sm-9">
                    <select class=" input-small form-control" name="visibility">
                    <?php

                    echo "<option value=\"1\" ";
                    if($user_sel_post['visibility']==1){echo "selected";}
                    echo ">Public</option>";

                    echo "<option value=\"0\" ";
                    if($user_sel_post['visibility']==0){echo "selected";}
                    echo ">Private</option>";                   

                    ?>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="reply" class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                      <input type="submit" name="update" value="POST" class="btn btn-primary  btn-block">
                  </div>
              </div>
    </fieldset>
  </form>
