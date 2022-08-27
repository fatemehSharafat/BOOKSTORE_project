<?php

class Model_CategoryController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertCategory($title, $image_new)
    {
        $sql = "insert into  category (title,image) VALUES (?,?)";
        $this->doQuery($sql, [$title,  $image_new]);
    }

    public function showSettingCategory()
    {
        $sql = "SELECT * FROM category order by id desc";
        $query = $this->doSelect($sql, []);
        return $query;
    }

    public function deleteSettingCategory($id, $path)
    {
        unlink($path);
        $sql = "delete from category where id=?";
        $this->doQuery($sql, [$id]);
    }

    public function getCategoryId($id)
    {
        $sql = "SELECT * FROM category WHERE id=?";
        $query = $this->doSelect($sql, [$id], 1);
        return $query;
    }

    public function updateCategory($title,  $image_new, $id)
    {
        if ($image_new == time()) {
            $category=$this->getCategoryId($id);
            $image_new=$category['image'];
        } else {
            $image_new = $image_new;
            $sql = "update category set  title=?,image=? WHERE id=?";
            $query = $this->doSelect($sql, [$title, $image_new, $id]);
        }
    }

}