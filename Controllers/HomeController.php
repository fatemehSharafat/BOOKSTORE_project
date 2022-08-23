<?php

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->Header('Home/header');
        $this->View('Home/index');
        $this->Footer('Home/footer');
    }

}