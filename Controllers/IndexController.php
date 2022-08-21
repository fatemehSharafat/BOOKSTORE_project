<?php

class IndexController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $this->modelDb ->test();
        $this->Header('Index/header');
        $this->View('Index/index');
        $this->Footer('Index/footer');
    }
}