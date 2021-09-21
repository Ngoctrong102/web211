<?php
class AccountController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "breadcum.css",
            "login/login-form.css",
        ];

        $this->load->view("layouts/client", "account/login", $data);
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
    public function renderRegisterView()
    {
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "breadcum.css",
            "register/register-form.css",
        ];

        $this->load->view("layouts/client", "account/register", $data);
    }
}
