<?php

class Error404Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->View('Error404/index');
    }
}