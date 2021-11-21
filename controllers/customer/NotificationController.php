<?php 
class NotificationController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function viewNoti($id)
    {
        // get noti =>
        // ddansh dấu đã xem
        // chuyển trang sang url
        header("Location: url từ noti");
    }
}