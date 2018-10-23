<div>    

<?php $pid = $sel_posts_array['pid']; ?>
  <form action="reply_process.php?rp_pid=<?php echo $pid; ?>" method="POST">
      <fieldset>
           <h3>Enter Your Answer</h3>
          <?php
            echo "<span style= \"padding:2px 2px 2px 2px\" >You can use  <kbd>";
            echo strtoupper(htmlentities(" <code>|<iframe>|<img>|<pre>|<h1>|<ul>|<ins>|<mark>|<b>|<i>|<a>")), ",</kbd> tags in here</span>";
          ?>
            <div class="form-group row">
              <!--<label for="reply" class="col-sm-1 col-form-label"></label>-->
              <div class="col-sm-12">
                <textarea class="form-control" name="replycontent" id="reply" placeholder="Add your comment" rows="5" required="true"></textarea>
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