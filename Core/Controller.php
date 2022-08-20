<?php

class Controller
{
    public function __construct()
    {

    }

    public function Header($urlHeader)
    {
        require 'Views/' . $urlHeader . '.php';
    }

    public function View($urlView)
    {
        require 'Views/' . $urlView . '.php';
    }

    public function Footer($urlFooter)
    {
        require 'Views/' . $urlFooter . '.php';
    }

}