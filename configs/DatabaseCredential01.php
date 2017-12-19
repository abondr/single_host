<?php

if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
    defined("DATA_BASE_NAME") || define("DATA_BASE_NAME", "zero_host");
    defined("USER_NAME") || define("USER_NAME", "root");
    defined("PASSWORD") || define("PASSWORD", "system");
    defined("HOST_NAME") || define("HOST_NAME", "localhost");
} else {
    defined("DATA_BASE_NAME") || define("DATA_BASE_NAME", "u287175439_db01");
    defined("USER_NAME") || define("USER_NAME", "u287175439_root");
    defined("PASSWORD") || define("PASSWORD", "abondr@1984");
    defined("HOST_NAME") || define("HOST_NAME", "mysql.hostinger.in");
    
}
$dsn = "mysql:host=".HOST_NAME.";dbname=".DATA_BASE_NAME.";";
