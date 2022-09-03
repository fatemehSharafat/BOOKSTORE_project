<?php

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

//    public function index()
//    {
//        $this->View('Product/index');
//    }

    public function index($id=0,$edit='')
    {
        $product =$this->modelDb->getProductId($id);
        $data=['id'=>$id, 'edit'=>$edit, 'product'=>$product];
        $this->View('Admin/Product/index',$data);

    }

    public function insertProduct()
    {
        $title=$_POST['title'];
        $author=$_POST['author'];
        $category=$_POST['category_type'];
        $summary=$_POST['summary'];
        $price=$_POST['price'];
        $image=$_FILES['image'];
        $image_new=Model::UploadImage($image,'Views/Admin/Product/Images/');
        $this->modelDb->insertProduct($title,$author,$category,$summary,$price,$image_new);
        Model::landingPage('ProductController/index');
    }

    public function showSettingProduct()
    {
        $product=$this->modelDb->showSettingProduct();
        $data=['product'=>$product];
        $this->View('Admin/Product/show',$data);
    }
    public function deleteSettingProduct()
    {
        $id=$_POST['id'];
        $path=$_POST['path'];
        $this->modelDb->deleteSettingProduct($id, $path);
        Model::landingPage('ProductController/showSettingProduct');
    }
    public function updateProduct()
    {
        $title=$_POST['title'];
        $author=$_POST['author'];
        $category=$_POST['category_type'];
        $summary=$_POST['summary'];
        $price=$_POST['price'];
        $image=$_FILES['image'];
        $id=$_POST['id'];
        $image_new=Model::UploadImage($image,'Views/Admin/Product/Images/');
        $this->modelDb->updateProduct($title,$author,$category,$summary,$price,$image_new,$id);
        Model::landingPage('ProductController/showSettingProduct');
    }
}
