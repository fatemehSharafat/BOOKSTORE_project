<?php

class Model_ProductController extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insertProduct($title,$author,$category,$summary,$price,$image_new)
    {
        $sql = "insert into  product (title,author,category_type,summary,price,image) VALUES (?,?,?,?,?,?)";
        $this->doQuery($sql, [$title,$author,$category,$summary,$price,$image_new]);
    }

    public function showSettingProduct()
    {
        $sql = "SELECT * FROM product order by id desc";
        $query = $this->doSelect($sql, []);
        return $query;
    }

    public function deleteSettingProduct($id, $path)
    {
        unlink($path);
        $sql = "delete from product where id=?";
        $this->doQuery($sql, [$id]);
    }

    public function getProductId($id)
    {
        $sql = "SELECT * FROM product WHERE id=?";
        $query = $this->doSelect($sql, [$id], 1);
        return $query;
    }

    public function updateProduct($title,$author,$category,$summary,$price,$image_new, $id)
    {
        if ($image_new == time()) {
            $product=$this->getProductId($id);
            $image_new=$product['image'];
        } else {
            $image_new = $image_new;
            $sql = "update product set  title=?,author=?,category_type=?,summary=?,price=?,image_new=? WHERE id=?";
            $query = $this->doSelect($sql, [$title,$author,$category,$summary,$price,$image_new, $id]);
        }
    }
}