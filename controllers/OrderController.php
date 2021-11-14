<?php
class OrderController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("order");
        $this->load->model("cart");
    }
    public function renderOrderPage()
    {
        $data["title"] = "Your Orders";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/order/order.css",
        ];
        $user_id = $_SESSION["user_id"];
        $data["orders"] = $this->order->getOrderInfo($user_id);
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/orderpage", $data);
    }

    public function renderOrderProductPage()
    {
        $data["title"] = "Your Order Products";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/order/orderproduct.css",
        ];
        $user_id = $_SESSION["user_id"];
        $data["orders"] = $this->order->getOrderInfo($user_id);
        $data["orderproducts"] = $this->order->getAllProducts_order();
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/orderproductpage", $data);
    }
    public function orderCancelled($id)
    {
        $this->order->product_orderDeleted($id);
        $this->order->orderCancelled($id);
        header("Location: /order");
    }
    public function addOrder($id)
    {
        $user_id = $_SESSION["user_id"];
        $status = "Processing";
        $this->order->addOrder($id,  $user_id, $status);
        $this->order->moveToPro_Order();
        $this->cart->deleteAllCart($user_id);
        header("Location: /order");
    }
    public function orderUpdated($address_id, $order_id)
    {
        $this->order->orderUpdated($address_id, $order_id);
        header("Location: /order");
    }
}
