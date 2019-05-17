<?php
/**
 * User: stanley
 * Date: 20/4/19
 * Time: 11:45 AM
 * available APIs
    *1 . http://51.15.233.87/maids/add-maid.php
    *2 . http://51.15.233.87/maids/get-maid.php
    *3 . http://51.15.233.87/maids/get-maids.php
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
