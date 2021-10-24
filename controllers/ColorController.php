<?php
class ColorController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("color");
    }
    public function renderShowColor()
    {   
        $data["title"]="Color";
        $data["cssFiles"]=["css/admin/showcolor.css",];
        $data["colors"]= $this->color->getAllColors();
        $this->load->view("layouts/admin","admin/color/showcolor",$data);
    }
    public function renderAddColor()
    {   
        $data["title"]="Add Color";
        $data["cssFiles"]=["css/admin/showcolor.css",];
        $this->load->view("layouts/admin","admin/color/addcolor",$data);
    }
    public function ColorAdded()
    {   
       $color = $_POST["addingcolorname"];
       $this->color->addColor($color);
       header ("Location: /showcolor");
    }

    public function renderEditColor($id)
    {   
        $data["title"]="Edit Color";
        $data["cssFiles"]=["css/admin/showcolor.css",];
        $data["color"]= $this->color->getColorById($id);
        $this->load->view("layouts/admin","admin/color/editcolor",$data);
    }
   
    public function ColorEdited($id)
    {   
       $color = $_POST["editcolorname"];
       $this->color->editColor($id, $color);
       header ("Location: /showcolor");
    }
    public function ColorDeleted($id)
    {   
       $this->color->DeleteColor($id);
       header ("Location: /showcolor");
    }
}