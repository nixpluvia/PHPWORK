<?php
define('DB_HOST', 'localhost');
define('DB_ID', 'root');
define('DB_PW', '1234');
define('DB_NAME', 'test');
define('DB_PORT', 3306);

$dbConn = mysqli_connect(DB_HOST,DB_ID,DB_PW,DB_NAME,DB_PORT) or die("DB CONNECTION ERROR");
?>