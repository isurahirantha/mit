<div id="registermodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" action="register_process.php" method="POST">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">JOIN WITH US!</h4>
            </div>
            <div class="modal-body">
             
                <div class="form-group">
                 <label for="firstname" class="col-lg-3 control-label">First Name: </label>
                  <div class="col-lg-8">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" name="firstname" class="form-control" placeholder="First Name">
                          </div>                                      
                  </div>
                </div>
                
                <div class="form-group">
                   <label for="lastname" class="col-lg-3 control-label">Last Name:</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-lg-3 control-label">Email Addr:</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-lg-3 control-label">Password:</label> 
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-lg-3 control-label">Confirm Password:</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal-footer">
              <input type="submit" name="submit" class="btn btn-success primary " value="Sign In">
            </div>
    </form>
    </div>

  </div>
</div>