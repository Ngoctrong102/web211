<?php
class OrderModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getOrderInfo($user_id)
    {
        $stmt = $this->conn->prepare("SELECT `order`.id, address.address, user.first_name, user.last_name, user.phone, created_at, status 
        FROM (`order` JOIN address ON `order`.user_id = address.user_id AND `order`.address_id=address.id JOIN user ON `order`.user_id=user.id) 
        WHERE `order`.user_id = :id ORDER BY created_at DESC");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array(
            "id" => $user_id,
        ));
        return $stmt->fetchAll();
    }
    public function orderDeleted($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM `product_order` WHERE `product_order`.order_id = :id');
        $stmt = $this->conn->prepare('DELETE FROM `order` WHERE `order`.id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));
    }
    public function product_orderDeleted($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM `product_order` WHERE `product_order`.order_id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));
    }
    public function addOrder($id, $user_id, $status)
    {
        $stmt = $this->conn->prepare("INSERT INTO `order`(user_id, address_id, status) VALUES(:user_id, :address_id, :status) ON DUPLICATE KEY UPDATE address_id = :address_id");
        return $stmt->execute(array(
            "user_id" => $user_id,
            "address_id" => $id,
            "status" => $status
        ));
    }
    public function orderUpdated($address_id, $order_id)
    {
        $stmt = $this->conn->prepare("UPDATE `order` SET `address_id`=:address_id WHERE `order`.id=:order_id");
        return $stmt->execute(array(
            "order_id" => $order_id,
            "address_id" => $address_id
        ));
    }
    public function  moveToPro_Order()
    {
        $stmt = $this->conn->prepare('INSERT INTO product_order (order_id, product_id, quantity, unit_id, price) SELECT `order`.id, product_id, product_cart.quantity, unit_id, price FROM product_cart JOIN `order` ON product_cart.user_id=`order`.user_id JOIN product ON product_cart.product_id=product.id');
        $stmt->execute();
    }
    public function getAllProducts_order()
    {
        $stmt = $this->conn->prepare("SELECT product.id, product.name, product.thumbnails, product.price, product_order.quantity FROM (product JOIN product_order ON product.id = product_order.product_id)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllOrder()
    {
        $stmt = $this->conn->prepare("SELECT *, order.id as id FROM ((`order` JOIN user ON user_id = user.id) JOIN address ON address_id = address.id) ORDER BY created_at DESC");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOrderDetail($id)
    {
        $stmt = $this->conn->prepare("SELECT *, order.id as id FROM ((`order` JOIN user ON user_id = user.id) JOIN address ON address_id = address.id) WHERE order.id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("id" => $id));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            $order = $rows[0];
            $stmt = $this->conn->prepare("SELECT *, product.id as id, product_order.quantity as quantity FROM product_order JOIN product ON product_id = product.id WHERE order_id = :id");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array("id" => $id));
            $order["products"] = $stmt->fetchAll();
            return $order;
        } else return null;
    }

    public function updateStatus($id, $status)
    {
        $stmt = $this->conn->prepare('UPDATE `order` SET status = :status WHERE id = :id');
        return $stmt->execute(array(
            "id" => $id,
            "status" => $status
        ));
    }
}
