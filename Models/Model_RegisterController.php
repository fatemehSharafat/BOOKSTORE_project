<?php

class Model_RegisterController extends Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function checkUser($username, $email, $password, $cpass, $user_type)
    {
//        $sql = 'SELECT * FROM users WHERE $username =? AND $password =? ';
//        $query= $this->doSelect($sql,[$username,$password]);
//        if ($query > 0) {
//            $message = 'user already exist!';
//            echo $message;
//        } else {
//            if ($password != $cpass) {
//                $message = 'تایید رمز عبور مطابقت ندارد!';
//                echo $message;
//            } else {
//                $this->insertUser($username, $email, $password, $user_type);
//                $message[] = 'با موفقیت ثبت شد!';
//                echo $message;
//            }
//
////        }
//        return $message;
    }

    public function insertUser($username, $email, $password, $user_type)
    {
        $sql = 'INSERT INTO users (username, email, password, user_type) VALUES (?, ?, ?,?)';
        $this->doQuery($sql, [$username, $email, $password, $user_type]);
    }

}