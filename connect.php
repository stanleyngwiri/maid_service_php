<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 6/6/16
 * Time: 9:40 AM
 */
function connect()
{
    $username = "root";
    $password = "!QAZ2wsx";
    $serverName = "127.0.0.1";
    $dbName = "maids";
    $connection = new mysqli($serverName, $username, $password, $dbName);
    if ($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
    }
    return $connection;
}
