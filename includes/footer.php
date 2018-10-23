
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

  <div class="navbar navbar-inverse navbar-fixed-bottom text-center" >
  	<h5>Management and Information Technology Society</h5> 
    <h6><kbd>Powered by Students of Management and Information Technology Department</kbd></h6>
    <h6>SOUTH EASTERN UNIVERSITY OF SRILANKA</h6>
  </div>
  </body>
</html>
<?php
if(isset($connection)){
	mysqli_close($connection);
	}
?>