<?php

class Error404Controller extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        $this->Header('Error404/header');
        $this->View('Error404/index');
        $this->Footer('Error404/footer');
    }
}