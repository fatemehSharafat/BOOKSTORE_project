<?php

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $meta=$this->modelDb ->getMeta();
        $data=['meta'=>$meta];
        $this->Header('Index/header',$data);
        $this->View('Index/index');
        $this->Footer('Index/footer');
    }
}