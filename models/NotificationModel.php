<?php
class NotificationModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addNotification($userId,$notification)
    {
        $stmt = $this->conn->prepare('INSERT INTO notification(user_id,content,url) values(:user_id,:content,:url)');
        $notification["user_id"] = $userId;
        $result = $stmt->execute($notification);
        return $result ? $this->conn->lastInsertId() : -1;
    }
}