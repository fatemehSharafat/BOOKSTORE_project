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
        $slider=$this->modelDb ->getSlider();
        $data=['meta'=>$meta, 'slider'=>$slider];
        $this->Header('Index/header',$data);
        $this->View('Index/index',$data);
        $this->Footer('Index/footer');

//        $this->View('Index/index',$data);
    }
}