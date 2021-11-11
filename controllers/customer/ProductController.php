<?php
class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("cart");
        $this->load->model("product");
    }

    public function renderHomeShop()
    {
        $data["title"] = "Shop";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/shoppage/checkbox-filter.css",
            "css/customer/shoppage/toprate.css",
            "css/customer/shoppage/tagsproduct.css",
            "css/customer/shoppage/banner.css",
            "css/customer/shoppage/card-product.css",
            "css/customer/shoppage/grid-products.css",
            "css/customer/commons/pagination.css",
            "css/customer/shoppage/filter.css",
            "libs/rateit.js-master/scripts/rateit.css",

        ];
        $data["jsFiles"] = [
            "libs/rateit.js-master/scripts/jquery.rateit.js"
        ];
<<<<<<< HEAD
        $pagination = array(
            "size" => 9,
            "page" => isset($_GET["page"]) ? $_GET["page"] : 0
        );
        $data["products"] = $this->product->getAllProducts($pagination);
=======
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
>>>>>>> master
        $this->load->view("layouts/client", "client/shoppage/shoppage", $data);
    }
    public function renderDetailPage($id)
    {
        $data["title"] = "Product Detail";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/detailpage/detailpage.css",
        ];
        $data["jsFiles"] = [
            "js/customer/detailpage/detailpage.js",
        ];
        $data["product"] = $this->product->getProductForDetail($id);
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/detailpage", $data);
    }
    public function addToCart()
    {
        $data = $_POST;
        $quantity = $data["quantity"];
        $product_id = $data["product_id"];
        $user_id = $_SESSION["user_id"];
        $success = $this->product->addToCart($user_id, $product_id, $quantity);
        $current_product = $this->product->getCurrentProduct($product_id);
        $response = [
            "success" => $success,
            "productinfo" => $current_product
        ];

        echo json_encode($response);
    }
}
