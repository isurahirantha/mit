<div>

  <form action="post_process.php" method="POST">
      <fieldset>
          <legend class="bg-primary text-warning" >CREATE A POST</legend>

            <div class="form-group row">
                <label for="selectCategory" class="col-sm-3 control-label">Select the Category</label>
                <div class="col-sm-9">
                    <select class="input-small form-control" name="category" id="category" placeholder="category" required="required">
                      <?php
                      $category_set = get_categories();
                      while($catTblRow = mysqli_fetch_assoc($category_set)){
                        echo "<option ";
                        echo "value=\"{$catTblRow['cid']}\" ";
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
                    <option value="1"selected disabled>Select One Option</option>
                    <option value="1">Tutorial</option>
                    <option value="0">Question</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="title" class="col-sm-3 control-label">Post Title</label>
                <div class="col-sm-9">
                  <input type="text" name="title" class="form-control" id="title" placeholder="Post Title" required="true">
                </div>
              </div>

              <div class="form-group row">
                <label for="post" class="col-sm-3 control-label">Your Post</label>
                <div class="col-sm-9">
          <?php
            echo "<span style= \"padding:2px 2px 2px 2px\" >You can use  <kbd>";
            echo strtoupper(htmlentities(" <code>|<iframe>|<img>|<pre>|<h1>|<ul>|<ins>|<mark>|<b>|<i>|<a>")), ",</kbd> tags in here</span>";
          ?>
                  <textarea class="form-control" name="content" id="content" placeholder="Write Your Post" rows="16" required="true"></textarea>
                </div>
              </div>

            <div class="form-group row">
                <label for="selectCategory" class="col-sm-3 control-label">Post Visibility</label>
                <div class="col-sm-9">
                    <select class=" input-small form-control" name="visibility">
                    <option value="1"selected disabled>Select Visibility</option>
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="reply" class="col-sm-3 col-form-label"></label>
                  <div class="col-sm-9">
                      <input type="submit" name="submit" value="POST" class="btn btn-primary  btn-block">
                  </div>
              </div>
    </fieldset>
  </form>

</div>