<?php
class UserController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
    }

    public function renderLoginForm()
    {
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/login/login-form.css",
        ];
        $this->load->view("layouts/client", "account/login", $data);
    }

    public function redirectLogin()
    {
        $_SESSION["location"] = $_GET["location"];
        header("Location: /login");
    }

    public function renderRegisterForm()
    {
        $data["title"] = "Register";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/register/register-form.css",
        ];
        $this->load->view("layouts/client", "account/register", $data);
    }
    public function register()
    {
        if ($_POST["password"] == $_POST['rePassword']) {
            unset($_POST["rePassword"]);
            $this->user->register($_POST);
            header("Location: /login");
        }
    }
    public function login()
    {
        $data["title"] = "Login";
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/login/login-form.css",
        ];
        $user = $this->user->findUserByEmail($_POST["email"]);
        $data["email"] = $_POST["email"];
        if ($user) {
            if (password_verify($_POST["password"],$user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                $_SESSION["role"] = $user["role"];
                $location = isset($_SESSION["location"]) ? $_SESSION["location"] : "/";
                unset($_SESSION["location"]);
                header("Location: ".$location);
            } else {
                $data["error"] = [
                    "password" => "Mật khẩu không đúng"
                ];
                $this->load->view("layouts/client", "account/login", $data);
            }
        } else {
            $data["error"] = [
                "email" => "Email chưa đăng ký"
            ];
            $this->load->view("layouts/client", "account/login", $data);
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: /");
        echo "trong";
    }
}
