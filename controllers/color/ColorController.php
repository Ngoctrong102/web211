<?php
class ColorController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("color");
    }

    public function renderColorPage()
    {
        $data["jsFiles"] = [
            "js/color.js"
        ];
        $data["colors"] = $this->color->getAllColors();
        $this->load->view("layouts/admin", "color/listcolor", $data);
    }

    public function renderAddPage()
    {
        $this->load->view("layouts/admin", "color/addColor");
    }

    public function addNewColor()
    {
        $color = $_POST["color"];
        $this->color->insertNewColor($color);
        header("Location: /color");
    }
    public function renderEditPage($id)
    {
        $data["color"] = $this->color->getColorById($id);
        $this->load->view("layouts/admin", "color/editColor", $data);
    }
    public function submitEditColor($id)
    {
        $color = $_POST["color"];
        $this->color->editColor($id, $color);
        header("Location: /color");
    }
    public function deleteColor($id)
    {
        $this->color->deleteById($id);
        header("Location: /color");
    }
    public function addNewColorAjax()
    {
        $color = $_POST["color"];
        $id = $this->color->insertAndReturnId($color);

        $response = [
            "success" => $id != -1,
            "color" => $color,
            "id" => $id
        ];

        echo json_encode($response);
    }
}


// ["den", "xanh", "hong"]

// [
//     ["id"=>"1", "color_name"=>"den"],
//     ["id"=>"2", "color_name"=>"xam"]
// ]