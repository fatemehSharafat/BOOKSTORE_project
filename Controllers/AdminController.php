<?php

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'this page is admin';
//        $this->Header('Index/header');
//        $this->View('Index/index');
//        $this->Footer('Index/footer');
    }

}