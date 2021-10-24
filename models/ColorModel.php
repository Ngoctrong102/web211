<?php
class ColorModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllColors()
    {
        $stmt = $this->conn->prepare('SELECT * FROM color');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function addNewColor($color)
    {
        $stmt = $this->conn->prepare('INSERT INTO color(color_name) values(:colorName)');

        return $stmt->execute(array(
            "colorName" => $color
            
        ));

    }
    public function getColorById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM color WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("id" => $id));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }
    public function addColor($color)
    {
        $stmt = $this->conn->prepare('INSERT INTO color(color_name) values(:colorName)');
        $result = $stmt->execute(array(
            "colorName" => $color
        ));

    }
    public function editColor($id, $color)
    {
        $stmt = $this->conn->prepare('UPDATE color SET color_name = :colorName WHERE id = :id');
        return $stmt->execute(array(
            "id" => $id,
            "colorName" => $color
        ));

    }
    public function DeleteColor($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM color WHERE id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));

    }

}