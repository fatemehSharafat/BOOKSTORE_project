<?php

class RegisterController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->Header('Register/header');
        $this->View('Register/index');
        $this->Footer('Register/footer');
    }

    public function checkUser()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpass =$_POST['cpassword'];
        $user_type = $_POST['user_type'];
        $massage=$this->modelDb->checkUser($username,$email,$password,$cpass,$user_type);
//        $data=['massage'=>$massage];
//        $this->View('Register/index',$data);
        Model::landingPage('RegisterController/index');
    }
}