
<form  class="form-horizontal" action="update_user.php" method="POST" >
      <fieldset>
          <legend>PASSWORD CHANGE</legend>                 
                      <div class="form-group row">
                          <label for="oldpassword" class="col-sm-3 control-label">OLD PASSWORD</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input type="password" name="oldpassword" class="form-control">
                              </div>
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="newpassword" class="col-sm-3 control-label">NEW PASSWORD</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input type="password" name="newpassword" class="form-control">
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="confirmpassword" class="col-sm-3 control-label">CONFIRM PASSWORD</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input type="password" name="confpassword" class="form-control">
                              </div>
                          </div>
                      </div>


                  <div class="form-group row">
                          <label for="button" class="col-sm-3 control-label"></label>
                            <div class="col-lg-8">
                              <input type="submit" name="submit" class="btn btn-success primary" value="UPDATE">
                            </div>
                  </div>
      </fieldset>   
</form>
