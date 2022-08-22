<?php

class RegisterController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->Header('Register/header');
        $this->View('Register/index');
        $this->Footer('Register/footer');
    }
}