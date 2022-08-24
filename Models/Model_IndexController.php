<?php

class Model_IndexController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMeta()
    {
        $sql = "SELECT * FROM meta ORDER BY id DESC limit 1 offset 0";
        $query = $this->doSelect($sql,[],1);
        return $query;
    }
}