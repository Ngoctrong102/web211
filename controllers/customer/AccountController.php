<?php
class AccountController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user");
        $this->load->model("address");
    }

    public function renderAccountPage()
    {
        $data["cssFiles"] = [
            "css/customer/commons/breadcum.css",
            "css/customer/myaccount/avatar.css",
            "css/customer/myaccount/information.css",
            "css/customer/myaccount/address.css"
        ];

        $data["jsFiles"] = [
            "js/customer/commons/editfield.js",
            "js/customer/myaccount/address.js"
        ];


        $user = $this->user->findUserById($_SESSION["user_id"]);
        $user["addresses"] = $this->address->findAllAddressOfUser($_SESSION["user_id"]);
        $data["user"] = $user;

        $this->load->view("layouts/client", "client/myaccount/myaccount", $data);
    }

    public function addNewAddress()
    {
        $address = $_POST["address"];
        $userId = $_SESSION["user_id"];
        $result = $this->address->addNewAddress($userId, $address);
        if ($result != -1) {
            echo json_encode(array(
                "success" => true,
                "id" => $result,
                "address" => $address
            ));
        } else {
            echo json_encode(array(
                "success" => false,
            ));
        }
    }

    public function deleteAddress()
    {
        $addressId = $_POST["addressId"];
        $result = $this->address->deleteAddress($addressId);
        echo json_encode(array(
            "success" => $result,
        ));
    }

    public function updateAddress()
    {
        $addressId = $_POST["id"];
        $address = $_POST["address"];
        $result = $this->address->updateAddress($addressId, $address);
        echo json_encode(array(
            "success" => $result,
        ));
    }
}
