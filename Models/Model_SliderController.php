<?php

class Model_SliderController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertSlider($caption, $link, $image_new)
    {
        $sql = "insert into  slider (caption,link,image) VALUES (?,?,?)";
        $this->doQuery($sql, [$caption, $link, $image_new]);
    }

    public function showSettingSlider()
    {
        $sql = "SELECT * FROM slider order by id desc";
        $query = $this->doSelect($sql, []);
        return $query;
    }

    public function deleteSettingSlider($id, $path)
    {
        unlink($path);
        $sql = "delete from slider where id=?";
        $this->doQuery($sql, [$id]);
    }

    public function getSliderId($id)
    {
        $sql = "SELECT * FROM slider WHERE id=?";
        $query = $this->doSelect($sql, [$id], 1);
        return $query;
    }

    public function updateSlider($caption, $link, $image_new, $id)
    {
        if ($image_new == time()) {
            $slider=$this->getSliderId($id);
            $image_new=$slider['image'];
        } else {
            $image_new = $image_new;
            $sql = "update slider set  caption=?,link=?,image=? WHERE id=?";
            $query = $this->doSelect($sql, [$caption, $link, $image_new, $id]);
        }
    }
}