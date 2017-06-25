<?php

if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
    $databaseName = "zero_host";
    $username = "root";
    $password = "system";
    $hostName = "localhost";
    $dsn = "mysql:dbname=" . $databaseName;
} else {
    $databaseName = "u287175439_db01";
    $username = "u287175439_root";
    $password = "abondr@1984";
    $hostName = "mysql.hostinger.in";
}
$dsn = "mysql:host={$hostName};dbname={$databaseName};";
