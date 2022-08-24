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
        $this->View('Admin/AdminPage/index');
    }

    public function insertSettingAdmin()
    {
        $title=$_POST['title'];
        $author=$_POST['author'];
        $description=$_POST['description'];
        $keywords=$_POST['keywords'];
        $this->modelDb->insertSettingAdmin($title,$author,$description,$keywords);
        Model::landingPage('AdminController/index');
    }

    public function showSettingAdmin()
    {
        $query=$this->modelDb->showSettingAdmin();
        $data=['meta'=>$query];
        $this->View('Admin/AdminPage/show',$data);
    }
    public function deleteSettingAdmin($id)
    {
        $this->modelDb->deleteSettingAdmin($id);
       Model::landingPage('AdminController/showSettingAdmin');
    }



}