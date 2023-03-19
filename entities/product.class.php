<?php

require_once("./config/db.class.php");

class Product
{
    public $productID;
    public $productName;
    public $cateID;
    public $price;
    public $quantity;
    public $destription;
    public $picture;

    public function _construct($pro_name, $cate_id, $price, $quantity, $destription, $picture)
    {
        $this->productName = $pro_name;
        $this->cateID = $cate_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->destription = $destription;
        $this->picture = $picture;
    }

    public function save()
    {
        $db = new Db();
        $sql = "INSERT INTO Product(ProductName, cateID, Price, Quantity, destription, picture) VALUES
    ('$this->productName', '$this->cateID', '$this->price', '$this -> quentity', '$this -> destription','$this->picture')";
        $result = $db->query_execute($sql);
        return $result;
    }

    public static function list_product()
    {
        $db = new Db();
        $sql = "SELECT * FROM product";
        $result = $db->select_to_array($sql);
        return $result;
    }
}
