<?php
class NotificationController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("notification");
    }

    public function viewNoti($id)
    {

        // ddansh dấu đã xem
        // chuyển trang sang url
        //header("Location: url từ noti");
        if (isset($_SESSION["user_id"])) {
            $user_id = $_SESSION["user_id"];
            $data["notifications"] = $this->notification->getAllNoti($user_id);
        }
    }
}
