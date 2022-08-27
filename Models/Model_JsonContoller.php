<?php

class Model_JsonContoller extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function decode()
    {
        $sql = "SELECT * FROM slider";
        $query = $this->doSelect($sql,[]);
        return json_encode($query);
    }
    public function metaDecode()
    {
        $sql = "SELECT * FROM meta";
        $query = $this->doSelect($sql,[]);
        return json_encode($query);
    }

}