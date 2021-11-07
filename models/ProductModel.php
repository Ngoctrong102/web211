<?php
class ProductModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $stmt = $this->conn->prepare("SELECT *,product.id as id, unit.title as unit_title FROM (product JOIN unit ON product.unit_id = unit.id)");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll();
        for ($i = 0; $i < sizeof($products); $i++) {
            $stmt = $this->conn->prepare("SELECT id, title FROM (product_category JOIN category ON product_category.category_id = category.id) WHERE product_id = :productId");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(
                "productId" => $products[$i]["id"]
            ));
            $products[$i]["categories"] = $stmt->fetchAll();
        }
        return $products;
    }

    public function insertNewProducts($product)
    {
        $product_images = $product["product_images"];
        unset($product["product_images"]);
        $categories = $product["categories"];
        unset($product["categories"]);

        $stmt = $this->conn->prepare('INSERT INTO product(name,thumbnails,description,unit_id,price,quantity) values(:name,:thumbnails,:description,:unit_id,:price,:quantity)');
        $result = $stmt->execute($product);
        if (!$result) return false;

        $productId = $this->conn->lastInsertId();

        $imageUrls = explode(":_:_:", $product_images);
        $values = [];
        foreach ($imageUrls as $url) {
            array_push($values, $productId . ",'" . $url . "'");
        }
        $values = "values(" . join("),(", $values) . ")";
        $sqlInsertImage = 'INSERT INTO product_image(product_id,image_url) ' . $values;
        $stmt = $this->conn->prepare($sqlInsertImage);
        $result = $stmt->execute();

        $values = [];
        foreach ($categories as $categoryId) {
            array_push($values, $productId . "," . $categoryId);
        }
        $values = "values(" . join("),(", $values) . ")";
        $sqlInsertCategories = 'INSERT INTO product_category(product_id,category_id) ' . $values;
        $stmt = $this->conn->prepare($sqlInsertCategories);
        $result = $stmt->execute();
        return $result;
    }

    // Lay tat ca cac category
    public function getAllCategoryHomeCus()
    {

        // $stmt = $this->conn->prepare("
        // SELECT product.*,product_category.*,category.*
        // FROM product_category
        // INNER JOIN product on  product_category.product_id = product.id
        // LEFT JOIN  category on product_category.category_id = category.id
        // ");

        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();

        // $products = $stmt->fetchAll();

        // return $products;

        $stmt = $this->conn->prepare("SELECT * FROM product ORDER BY id LIMIT 12");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll();
        for ($i = 0; $i < sizeof($products); $i++) {
            $stmt = $this->conn->prepare("SELECT * FROM (product_category JOIN category ON product_category.category_id = category.id) WHERE product_id = :productId");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(
                "productId" => $products[$i]["id"]
            ));
            $products[$i]["categories"] = $stmt->fetchAll();
        }
        return $products;
    }

    public function getNewCategoryHome()
    {
        $stmt = $this->conn->prepare("SELECT * FROM product ORDER BY id DESC LIMIT 12");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll();
        for ($i = 0; $i < sizeof($products); $i++) {
            $stmt = $this->conn->prepare("SELECT * FROM (product_category JOIN category ON product_category.category_id = category.id) WHERE product_id = :productId");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(
                "productId" => $products[$i]["id"]
            ));
            $products[$i]["categories"] = $stmt->fetchAll();
        }
        return $products;
    }

    public function loadTittleImgCate()
    {
        $stmt = $this->conn->prepare("SELECT * FROM category");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public function getProductById($id)
    {
        $stmt = $this->conn->prepare("SELECT *,product.id as id, unit.title as unit_title, unit.id as unit_id FROM (product JOIN unit ON product.unit_id = unit.id) WHERE product.id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("id" => $id));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            $product = $rows[0];
            $stmt = $this->conn->prepare("SELECT id, title, thumbnails FROM (product_category JOIN category ON product_category.category_id = category.id) WHERE product_id = :productId");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(
                "productId" => $product["id"]
            ));
            $product["categories"] = $stmt->fetchAll();

            $stmt = $this->conn->prepare("SELECT image_url FROM product_image WHERE product_id = :productId");
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute(array(
                "productId" => $product["id"]
            ));
            $product["images"] = $stmt->fetchAll();
            return $product;
        } else return null;
    }

    public function updateProducts($id, $product)
    {
        $unit["id"] = $id;
        $stmt = $this->conn->prepare('UPDATE product SET name = :name,thumbnails = :thumbnails,description = :description,unit_id = :unit_id, price = :price, quantity = :quantity WHERE id = :id');
        $result =  $stmt->execute(array(
            "name" => $product["name"],
            "thumbnails" => $product["thumbnails"],
            "description" => $product["description"],
            "unit_id" => $product["unit_id"],
            "price" => $product["price"],
            "quantity" => $product["quantity"],
            "id" => $id
        ));

        $stmt = $this->conn->prepare('DELETE FROM product_category WHERE product_id = :id');
        $result = $stmt->execute(array(
            "id" => $id
        ));
        $stmt = $this->conn->prepare('DELETE FROM product_image WHERE product_id = :id');
        $result = $stmt->execute(array(
            "id" => $id
        ));

        $imageUrls = explode(":_:_:", trim($product["product_images"]));
        $values = [];
        foreach ($imageUrls as $url) {
            array_push($values, $id . ",'" . $url . "'");
        }
        $values = "values(" . join("),(", $values) . ")";
        $sqlInsertImage = 'INSERT INTO product_image(product_id,image_url) ' . $values;
        $stmt = $this->conn->prepare($sqlInsertImage);
        $result = $stmt->execute();

        $values = [];
        foreach ($product["categories"] as $categoryId) {
            array_push($values, $id . "," . $categoryId);
        }
        $values = "values(" . join("),(", $values) . ")";
        $sqlInsertCategories = 'INSERT INTO product_category(product_id,category_id) ' . $values;
        $stmt = $this->conn->prepare($sqlInsertCategories);
        $result = $stmt->execute();
        return $result;
    }

    public function deleteById($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM product_image WHERE product_id = :id');
        $stmt->execute(array(
            "id" => $id
        ));
        $stmt = $this->conn->prepare('DELETE FROM product_category WHERE product_id = :id');
        $stmt->execute(array(
            "id" => $id
        ));
        $stmt = $this->conn->prepare('DELETE FROM product WHERE id = :id');
        $stmt->execute(array(
            "id" => $id
        ));
    }
}
