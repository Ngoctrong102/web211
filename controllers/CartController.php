<?php
class CartController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cart");
    }
    public function renderShoppingCart()
    {
        $data["title"] = "Your Shopping Cart";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/cart/cart.css",
        ];
        $data["cartproducts"] = $this->cart->getAllProducts();
        $this->load->view("layouts/client", "client/shoppage/cartpage", $data);
    }
}