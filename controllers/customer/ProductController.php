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
        $_GET["page"] = isset($_GET["page"]) && $_GET["page"] != "" ? $_GET["page"] : 1;
        $condition = array(
            "categoryId" => $_GET["category"],
            "q" => $_GET["q"],
            "pagination" => array(
                "size" => 9,
                "page" => $_GET["page"] - 1
            )
        );
        $data["products"] = $this->product->getAllProductsShopPage($condition);
        unset($condition["pagination"]);
        $data["number_products"] = sizeof($this->product->getAllProductsShopPage($condition));
        $this->load->model("category");
        $data["categories"] = $this->category->getAllCategories();
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/shoppage/shoppage", $data);
    }
    public function renderDetailPage($id)
    {
        $data["title"] = "Product Detail";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/detailpage/detailpage.css",
            "css/customer/news/news_comment.css",
            "libs/rateit.js-master/scripts/rateit.css",
        ];
        $data["jsFiles"] = [
            "js/customer/detailpage/detailpage.js",
            "js/customer/product/comment.js",
            "js/customer/product/rate.js",
            "libs/rateit.js-master/scripts/jquery.rateit.js"
        ];
        $data["product"] = $this->product->getProductForDetail($id);
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $pagination = array(
            "page" => 0,
            "size" => 5
        );
        $data["comments"] = $this->product->loadCommentsOfProduct($id, $pagination);

        $this->load->model("user");
        $data["user"] = $this->user->findUserById($_SESSION["user_id"]);

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

    public function addComment()
    {
        $userId = $_SESSION["user_id"];
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $comment = [
            "user_id" => $userId,
            "product_id" => $_POST["productId"],
            "content" => $_POST["content"],
            "created_at" => $now
        ];
        $this->product->addComment($comment);
        $this->load->model("user");
        $user = $this->user->findUserById($userId);

        $comment["avatar"] = $user["avatar"];
        $comment["username"] = $user["first_name"] . " " . $user["last_name"];
        $comment["created_at"] = $now;

        $response = [
            "success" => true,
            "comment" => $comment
        ];
        echo json_encode($response);
    }

    public function loadComments()
    {
        $productId = $_GET["productId"];
        $lastCommentId = $_GET["lastCommentId"];
        $response["comments"] = $this->product->loadMoreCommentsOfProduct($productId, $lastCommentId);
        echo json_encode($response);
    }
}
