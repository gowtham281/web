<?php
define('DB_SERVER','localhost');
define('DB_USER','oxygen');
define('DB_PASS','');
define('DB_NAME','onlinecourse');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) ;
if (!$con) {
echo "Failed to connect to MySQL: ". mysqli_connect_error() ;
}
?>