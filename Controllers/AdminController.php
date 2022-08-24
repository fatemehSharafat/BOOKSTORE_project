<?php

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Model::initSession();
        if(Model::getSession('admin')==false){
            Model::landingPage('LoginAdminController/index');
        }
    }

    public function index()
    {

        $this->Header('Admin/AdminPage/header');
        $this->View('Admin/AdminPage/index');
        $this->Footer('Admin/AdminPage/footer');
    }

}