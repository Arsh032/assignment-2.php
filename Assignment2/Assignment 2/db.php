<?php
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASSWORD','');
define('DB_NAME','books');


$con = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysqli_connect_error());
mysqli_select_db($con,DB_NAME) or die(mysqli_error($con));

?>