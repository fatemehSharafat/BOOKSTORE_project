<?php

class Model_LoginAdminController extends Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function getAdmin()
    {
        $sql = "SELECT * FROM login_admin ";
        $query = $this->doSelect($sql,[],1);
        return $query;
    }

    public function insertAdmin($username, $password)
    {
        $sql = "INSERT INTO login_admin (username, password) VALUES ( ?,?)";
        $this->doQuery($sql,[$username, $password]);
    }

}