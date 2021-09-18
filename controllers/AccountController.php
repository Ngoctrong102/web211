<?php
class AccountController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("layouts/client", "login");
    }
    public function login()
    {
        $_SESSION["role"] = $_GET["role"];
        $data["title"] = "Toán";
        $data["content"] = "Đây là nội dung";
        $data["cssFiles"] = [
            "style.css",
        ];
        $data["jsFiles"] = [
            "script.js"
        ];
        $this->load->view("layouts/client", "student/math/index", $data);
    }
}
