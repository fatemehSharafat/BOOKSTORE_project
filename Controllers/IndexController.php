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
        $product=$this->modelDb ->getProduct();
        $data=['meta'=>$meta, 'slider'=>$slider , 'product'=>$product];
        $this->Header('Index/header',$data);
        $this->View('Index/index',$data);
        $this->Footer('Index/footer');

//        $this->View('Index/index',$data);
    }
}