<?php

class Model_SubscribeController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertEmail($email)
    {
            $sql="INSERT INTO subscribe_email(email) VALUES(?)";
            $this->doQuery($sql, [$email]);
    }
    public function getEmail($email)
    {
        $sql = "select * from subscribe_email where email = ? ";
        $query = $this->doSelect($sql, [$email], 1);
        return $query;
    }

}