<?php
class ContactController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("contact");
    }
    public function renderPageContact()
    {
        $data["title"] = "Contact";
        $data["cssFiles"] = [
            "css/customer/contact/contact.css"
        ];
        $this->load->view("layouts/client", "client/contactpage/contactpage", $data);
    }

    public function Addnewcontact()
    {
        $contact = $_POST;
        $this->contact->insertNewContact($contact);
        header("Location: /contact");
    }
}