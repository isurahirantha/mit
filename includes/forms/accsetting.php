<div>
<form  class="form-horizontal"  action="update_user.php" method="POST">
      <fieldset >        
      <legend>
        ACCOUNT SETTING
      </legend>         
                      <div class="form-group row">
                       <label for="firstname" class="col-sm-3 control-label">First Name: </label>
                        <div class="col-sm-9">
                                <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="firstname" class="form-control" value="<?php echo $user_infor_array['firstname']; ?>">
                                </div>                                      
                        </div>
                      </div>
                      
                      <div class="form-group row">
                         <label for="lastname" class="col-sm-3 control-label">Last Name:</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input type="text" name="lastname" class="form-control" value="<?php echo $user_infor_array['lastname']; ?>">
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                         <label for="lastname" class="col-sm-3 control-label">Birth Day:</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                              <input type="date" name="birthday" class="form-control" value="<?php echo $user_infor_array['birthday']; ?>" >
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-sm-3 control-label">Email Addr:</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input type="email" name="email" class="form-control" value="<?php echo $user_infor_array['email']; ?>">
                              </div>
                          </div>
                      </div>
                      

                      <div class="form-group row">
                          <label for="address" class="col-sm-3 control-label">Address:</label> 
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                              <input type="text" name="address" class="form-control" id="address" value="<?php echo $user_infor_array['address']; ?>">
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="telephone" class="col-sm-3 control-label">Mobile Phone</label>
                          <div class="col-sm-9">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                              <input type="tele" name="telephone" class="form-control" id="telephone" value="<?php echo $user_infor_array['telephone']; ?>">
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="website" class="col-sm-3 control-label">Website:</label> 
                          <div class="col-sm-9">
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-transfer"></i></span>
                                <input type="url" name="website" class="form-control" id="website" value="<?php echo $user_infor_array['website']; ?>">
                              </div>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="Other" class="col-sm-3 control-label">Other Info:</label>
                            <div class="col-sm-9">
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-plus-sign"></i></span>
                                    <input type="text" name="other" class="form-control" id="other" value="<?php echo $user_infor_array['other']; ?>">
                                  </div>
                            </div>
                      </div>
<?php 
$gen= $user_infor_array['gender'];

?>
                      <div class="form-group row">
                          <label for="gender" class="col-sm-3 control-label">Gender:</label>
                            <div class="col-sm-9">
                                <div class="input-group well well-sm">
                                    <div class="radio ">
                                    <label class=""><input type="radio" name="gender" value="1"
                                    <?php if($gen==1){ echo "checked";} ?>
                                    >Male</label>
                                    </div>
                                    <div class="radio">
                                    <label class=""><input type="radio" name="gender" value="0" 
                                    <?php if($gen==0){ echo "checked";} ?>
                                    >Female</label>
                                    </div>
                                </div>
                              </div>
                      </div>

                  <div class="form-group row">
                          <label for="button" class="col-sm-3 control-label"></label>
                            <div class="col-lg-9">
                              <input type="submit" name="submit" class="btn btn-success primary" value="UPDATE">
                            </div>
                  </div>   
          </fieldset>   
</form>
</div>