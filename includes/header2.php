<nav class="navbar navbar-default navbar-fixed-top">
   <!--<nav class="navbar navbar-default">-->
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">MIT<i class="glyphicon glyphicon-fire"></i></a>
              </div>
       
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="topFixedNavbar1">
                  <ul class="nav navbar-nav navbar-right main_UL" >
                      <li><a  href="home.php" data-toggle="tooltip" data-placement="bottom" title="MyHome"><span><i class="glyphicon glyphicon-user"></i></span></a></li>
                      <li><a href="mitforum.php" data-toggle="tooltip" data-placement="bottom" title="Forum"><span><i class="glyphicon glyphicon-globe"></i></span></a></li>
                      <li ><a href="tutes.php" data-toggle="tooltip" data-placement="bottom" title="Documents"><span><i class="glyphicon glyphicon-education"></i></span></a></li>
                      <li ><a href="chat.php" data-toggle="tooltip" data-placement="bottom" title="ChatBox"><span><i class="glyphicon glyphicon-envelope"></i></span></a></li>
                      <li><a  href="#" data-toggle="tooltip" data-placement="bottom" title="Events"><span><i class="glyphicon glyphicon-flag"></i></span></a></li>
                             
                              
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <?php 
                                  if(isset($session_id)){
                                  $set = get_userInfo($session_id); 
                                  $setArray = mysqli_fetch_array($set);
                                  echo $setArray['firstname'];
                                  echo $setArray['lastname'];
                                  }
                                  ?>		
                                  <span class="caret"></span>
                                  </a>
                                    <ul class="dropdown-menu" role="menu">
                                            <li><a href="accSetting.php"><span><i class="glyphicon glyphicon-cog"></i>&nbsp;Account Setting</span></a></li>
                                            <li><a href="sign_out.php"><span><i class="glyphicon glyphicon-log-out"></i>&nbsp;Logout</span></a></li>
                                    </ul>
                              </li>
                        </ul>
              </div>
            <!-- /.navbar-collapse -->
          </div>
      <!-- /.container-fluid -->
  </nav>

  
