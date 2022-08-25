<?php

class SliderController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($id=0,$edit='')
    {
        $slider =$this->modelDb->getSliderId($id);
        $data=['id'=>$id, 'edit'=>$edit, 'slider'=>$slider];
        $this->View('Admin/Slider/index',$data);

    }

    public function insertSlider()
    {
        $caption=$_POST['caption'];
        $link=$_POST['link'];
        $image=$_FILES['image'];
        $image_new=Model::UploadImage($image,'Views/Admin/Slider/Images/');
        $this->modelDb->insertSlider($caption,$link,$image_new);
        Model::landingPage('SliderController/index');
    }

    public function showSettingSlider()
    {
        $slider=$this->modelDb->showSettingSlider();
        $data=['slider'=>$slider];
        $this->View('Admin/Slider/show',$data);
    }
    public function deleteSettingSlider()
    {
        $id=$_POST['id'];
        $path=$_POST['path'];
        $this->modelDb->deleteSettingSlider($id, $path);
        Model::landingPage('SliderController/showSettingSlider');
    }
    public function updateSlider()
    {
        $caption=$_POST['caption'];
        $link=$_POST['link'];
        $image=$_FILES['image'];
        $id=$_POST['id'];
        $image_new=Model::UploadImage($image,'Views/Admin/Slider/Images/');
        $this->modelDb->updateSlider($caption,$link,$image_new,$id);
        Model::landingPage('SliderController/showSettingSlider');
    }
}