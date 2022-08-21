<?php

class Error404Controller extends Controller
{
    public function __construct()
    {
        $this->Header('Error404/header');
        $this->View('Error404/index');
        $this->Footer('Error404/footer');
    }

    public function index()
    {
        $this->Header('Error404/header');
        $this->View('Error404/index');
        $this->Footer('Error404/footer');
    }
}