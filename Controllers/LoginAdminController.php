<?php

class LoginAdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Model::initSession();
    }

    public function index()
    {
        $admin = $this->modelDb->getAdmin();
        if(empty($admin)){
            $username = "fatemehSh";
            $password = "1401";
            $hash= sha1($password);
            $finalPass= sha1($hash);
            $this->modelDb->insertAdmin($username,$finalPass);
        }
         $this->View('Admin/LoginAdmin/index');
     }

    public function checkAdmin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash= sha1($password);
        $finalPass= sha1($hash);
        $admin= $this->modelDb->getAdmin();
        if($admin['username'] == $username && $admin['password'] == $finalPass) {
            Model::setSession('admin', $username);
            Model::landingPage('AdminController/index');
        }else{
            Model::setSession('wrong','نام كاربري و كلمه عبور شما اشتباه مي باشد!! ' );
            Model::landingPage('LoginAdminController/index');
        }
    }

    public function logOut()
    {
        Model::SetSession('admin',null);
        Model::SetSession('wrong',null);
        Model::landingPage('LoginAdminController/index');

    }
}