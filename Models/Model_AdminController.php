<?php

class Model_AdminController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertSettingAdmin($title, $author, $description, $keywords)
    {
        $sql = "INSERT INTO meta (title,author,description,keywords) VALUES ,?,?,?)";
        $this->doQuery($sql, [$title, $author, $description, $keywords]);
    }
    public function showSettingAdmin()
    {
        $sql = "SELECT * FROM meta ";
        $query = $this->doSelect($sql, []);
        return $query;
    }
    public function deleteSettingAdmin($id)
    {
        $sql = "delete from meta where id=?";
        $this->doQuery($sql, [$id]);
    }



}