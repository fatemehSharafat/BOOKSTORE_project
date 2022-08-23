<?php

class Model
{
    public static $db;

    public function __construct()
    {
        //cofig project to database
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'bookstore_db';
        self::$db = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName, $userName, $password);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        self::$db->exec('set names utf8');
    }
//query methods
    public function doQuery($sql, $values = [])
    {
        $query = self::$db->prepare($sql);
        foreach ($values as $key => $item) {
            $query->bindValue($key + 1, $item);
        }
        $query->execute();
    }

    public function doSelect($sql, $values = [], $fetch = '')
    {
        $query = self::$db->prepare($sql);
        foreach ($values as $key => $item) {
            $query->bindValue($key + 1, $item);
        }
        $query->execute();
        if ($fetch === '') {
            return $query->fetchAll();
        } else {
            return $query->fetch();
        }
    }

//comeBack method
    public static function landingPage($path)
    {
        header('Location: ' . URL . $path);
    }

//    uploadImage method
    public function UploadImage($image, $path)
    {
        $upload = 1;
        $image_new = $image['name'];
        $exist = $path . $image_new;
        if (file_exists($exist)) {
            $image_new = time() . $image_new;
        }
        $targetFile = $path . $image_new;
        $fileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        if ($fileType !== '.jpg' && $fileType !== '.png') {
            $upload = 0;
        }
        if ($image['size'] > 5000000) {
            $upload = 0;
        }
        if ($upload == 1) {
            move_uploaded_file($image['tmp_name'], $targetFile);
        }
        return $image_new;
    }
//sessions methods
    public  static function initSession()
    {
        session_start();
    }
    public static function setSession($name, $value){
        $_SESSION[$name]= $value;
    }
    public  static function getSession($name)
    {
       if (isset($_SESSION[$name])){
           return $_SESSION[$name];
       }else{
           return false;
       }
    }
}