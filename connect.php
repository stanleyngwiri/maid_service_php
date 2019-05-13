<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 4/20/2019
 * Time: 2:38 PM
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
