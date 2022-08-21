<?php

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->Header('Login/header');
        $this->View('Login/index');
        $this->Footer('Login/footer');
    }
}