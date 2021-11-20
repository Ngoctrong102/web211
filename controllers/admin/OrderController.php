<?php 
class OrderController extends BaseController {
    public function __construct() {
        parent::__construct();
        $this->load->model("order");
    }

    public function renderAllOrder()
    {
        $data["title"] = "Order";
        $data["nav"] = "orders";

        $data["jsFiles"] = ["js/admin/orders/datatable.js"];
        $data["cssFiles"] = [
            "css/admin/orders/status.css"
        ];

        $data["specialCss"] = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">';

        $data["specialJs"] = '<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>';
        
        $data["orders"] = $this->order->getAllOrder();
        
        $this->load->view("layouts/admin", "admin/order/list_order", $data);
    }

    public function renderDetail($id)
    {
        $data["title"] = "Order detail";
        $data["nav"] = "orders";
        $data["cssFiles"] = [
            "css/admin/orders/detail.css",
            "css/admin/orders/status.css"
        ];
        $data["order"] = $this->order->getOrderDetail($id);
        
        $this->load->view("layouts/admin", "admin/order/view_order", $data);
    }

    public function deliverOrder($id)
    {
        $status = "Delivered";
        $this->order->updateStatus($id, $status);
        header("Location: /admin/orders");
    }

    public function cancelOrder($id)
    {
        $status = "Canceled";
        $this->order->updateStatus($id, $status);
        $orderproducts = $this->order->getAllProducts_order($id);
        foreach ($orderproducts as $orderproduct) {
            $this->order->incProductQuantity($orderproduct);
        }
        header("Location: /admin/orders");
    }
}