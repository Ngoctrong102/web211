<?php
class UserModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function register($registerInfo)
    {
        $registerInfo["role"] = "customer";
        $registerInfo["password"] = password_hash($registerInfo["password"], PASSWORD_BCRYPT, array('cost' => 12));
        $stmt = $this->conn->prepare('INSERT INTO user(email,password,role,first_name,last_name) values(:email,:password,:role,:firstName,:lastName)');
        return $stmt->execute($registerInfo);
    }
    public function findUserById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("id" => $id));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
    public function findUserByEmail($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("email" => $email));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
}
