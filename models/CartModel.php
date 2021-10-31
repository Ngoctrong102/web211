<?php
class CartModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $stmt = $this->conn->prepare("SELECT product.id, product.name, product.thumbnails, product.price, product_cart.quantity FROM (product JOIN product_cart ON product.id = product_cart.product_id)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}