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
    public function renderOrderEditPage($order_id)
    {
        $data["title"] = "Edit Information";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/cart/cart.css",
        ];
        $user_id = $_SESSION["user_id"];
        $data["order_id"] = $order_id;
        $data["addresses"] = $this->cart->getAddresses($user_id);
        $data["phonenumber"] = $this->cart->getPhoneNumber($user_id);
        $data["jsFiles"] = ["js/customer/cart/cart.js"];
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/ordereditpage", $data);
    }


    public function renderOrderProductPage()
    {
        $data["title"] = "Your Order Products";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/order/orderproduct.css",
        ];
        $data["orderproducts"] = $this->order->getAllProducts_order();
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/orderproductpage", $data);
    }
    public function orderDeleted($id)
    {
        $this->order->product_orderDeleted($id);
        $this->order->orderDeleted($id);
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
