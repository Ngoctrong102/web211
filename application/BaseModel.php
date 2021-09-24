<?php
abstract class BaseModel
{
    private $conn;
    public function __construct()
    {
        global $database;
        extract($database);
        $this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $databasename, $username, $password);
    }
}
