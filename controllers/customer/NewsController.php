<?php
class NewsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("news");
        $this->load->model("cart");
    }

    public function renderAllNews()
    {
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/shoppage/checkbox-filter.css",
            "css/customer/shoppage/toprate.css",
            "css/customer/shoppage/tagsproduct.css",
            "css/customer/commons/pagination.css",
            "css/customer/news/card.css"
        ];

        $data["list_news"] = $this->news->getAllNews();
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/news/list_news", $data);
    }

    public function renderNewsDetails($id)
    {
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/shoppage/checkbox-filter.css",
            "css/customer/shoppage/toprate.css",
            "css/customer/shoppage/tagsproduct.css",
            "css/customer/news/news_content.css",
            "css/customer/news/news_comment.css"
        ];
        $data["jsFiles"] = [
            "js/customer/news/comment.js",
            "js/customer/news/load_more.js"
        ];
        $data["specialCss"] = '
        <link rel="stylesheet" href="/plugins/ckeditor/sample/styles.css">
        ';
        $data["news"] = $this->news->getNewsById($id);
        $this->load->model("commentNews");
        $pagination = array(
            "page" => 0,
            "size" => 5
        );
        $data["comments"] = $this->commentNews->loadCommentsOfNews($id, $pagination);
        $this->load->model("user");
        $data["user"] = $this->user->findUserById($_SESSION["user_id"]);
        $data["cartproducts"] = $this->cart->getAllProducts_cart();
        $this->load->view("layouts/client", "client/news/news_details", $data);
    }

    public function addComment()
    {
        $userId = $_SESSION["user_id"];
        $now = (new DateTime())->format('Y-m-d H:i:s');
        $comment = [
            "user_id" => $userId,
            "news_id" => $_POST["newsId"],
            "content" => $_POST["content"],
            "created_at" => $now
        ];
        $this->news->addComment($comment);
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
        $newsId = $_GET["newsId"];
        unset($_GET["newsId"]);
        $pagination = $_GET;
        $this->load->model("commentNews");
        $response["comments"] = $this->commentNews->loadCommentsOfNews($newsId, $pagination);
        echo json_encode($response);
    }
}
