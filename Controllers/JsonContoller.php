<?php

class JsonContoller extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $query=$this->modelDb->decode();

    }

    public function metaDecode()
    {
        $meta=$this->modelDb->metaDecode();
    }
}