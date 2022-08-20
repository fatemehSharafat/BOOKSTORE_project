<?php

class Model
{
    public static $sql = '';

    public function __construct()
    {
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bookstore_db';
        self::$sql = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $password);
        self::$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$sql->exec('set names utf8');
    }

    public function doQuery($sql,$values=[])
    {
        $query = self::$sql->prepare($sql);
        foreach ($values as $key => $item) {
            $query->bindValue($key+1,$item);
        }
        $query->execute();
    }
}