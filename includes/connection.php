<?php

include 'constants.php';

?>
<?php


$connection  = mysqli_connect(SERVER,USERNAME,SERVERPASS,DBNAME);

mysqli_set_charset($connection,'utf8');

if(!$connection){
	die(mysqli_connect_error());
}

?>