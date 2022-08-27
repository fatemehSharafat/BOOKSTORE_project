<?php

class CategoryController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = 0, $edit = '')
    {
        $category = $this->modelDb->getCategoryId($id);
        $data = ['id' => $id, 'edit' => $edit, 'category' => $category];
        $this->View('Admin/Category/index', $data);

    }

    public function insertCategory()
    {
        $title = $_POST['title'];
        $image = $_FILES['image'];
        $image_new = Model::UploadImage($image, 'Views/Admin/Category/Images/');
        $this->modelDb->insertCategory($title, $image_new);
        print_r($image_new);
        Model::landingPage('CategoryController/index');
    }

    public function showSettingCategory()
    {
        $category = $this->modelDb->showSettingCategory();
        $data = ['category' => $category];
        $this->View('Admin/Category/show', $data);
    }

    public function deleteSettingCategory()
    {
        $id = $_POST['id'];
        $path = $_POST['path'];
        $this->modelDb->deleteSettingCategory($id, $path);
        Model::landingPage('CategoryController/showSettingCategory');
    }

    public function updateCategory()
    {
        $title = $_POST['title'];
        $image = $_FILES['image'];
        $id = $_POST['id'];
        $image_new = Model::UploadImage($image, 'Views/Admin/Category/Images/');
        $this->modelDb->updateCategory($title, $image_new, $id);
        Model::landingPage('CategoryController/showSettingCategory');
    }

}
