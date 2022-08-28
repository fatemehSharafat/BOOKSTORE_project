<?php

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View('Product/index');
    }

}