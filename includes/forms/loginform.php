<div id="loginmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="login_process.php" method="POST">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">SIGN IN HERE!</h4>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                  <label for="email" class="col-lg-2 control-label">Email: </label>
                  <div class="col-lg-10">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="email" name="email" class="form-control" placeholder="Email">
                          </div>                                      
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="password" class="col-lg-2 control-label">Password: </label>
                  <div class="col-lg-10">
                  <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="password">
                  </div>                                      
                  </div>
                </div>

            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-default" name="submit" value="Sign In">
            </div>
    </form>
    </div>

  </div>
</div>