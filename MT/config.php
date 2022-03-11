
<?php
define('DB_SEVER', 'remotemysql.com');
define('DB_USERNAME', 'ZjQ9CPdSZz');
define('DB_PASSWORD', 'qAw5P2ZVkB');
define('DB_NAME', 'ZjQ9CPdSZz');

$link = mysqli_connect(DB_SEVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
	die("ERROR: Could not connect." .mysqli_connect_error());
}
?>
