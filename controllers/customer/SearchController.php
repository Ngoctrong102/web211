<?php
class SearchController extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->load->model("product");
        $this->load->model("news");
    }

    public function search()
    {
        $data["title"] = "Search";

        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/shoppage/card-product.css",
            "css/customer/news/card.css",
            "css/customer/shoppage/grid-products.css",

        ];
        $condition = array(
            "q" => $_GET["keyword"],
            "pagination" => array(
                "size" => 6,
                "page" => 0
            )
        );
        $data["products"] = $this->product->getAllProductsShopPage($condition);
        $data["list_news"] = $this->news->getAllNews($condition);
        $this->load->view("layouts/client", "client/search/search_result", $data);
    }
}