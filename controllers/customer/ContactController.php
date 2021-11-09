<?php
class ContactController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function renderPageContact()
    {
        $data["title"] = "Contact";
        $data["cssFiles"] = [
            "css/customer/contact/contact.css"
        ];
        $this->load->view("layouts/client", "client/contactpage/contactpage", $data);
    }
}