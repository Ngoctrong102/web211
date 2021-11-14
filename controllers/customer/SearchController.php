<?php
class SearchController extends BaseController {
    public function __construct() {
        parent::__construct();
    }

    public function search()
    {
        $data["title"] = "Search";
        $this->load->view("layouts/client", "client/search/search_result", $data);
    }
}