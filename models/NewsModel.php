<?php
class NewsModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAllNews()
    {
        $stmt = $this->conn->prepare("SELECT * FROM news");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function insertNews($news)
    {
        $stmt = $this->conn->prepare('INSERT INTO news(title, thumbnails,description, content) values(:title, :thumbnails, :description, :content)');
        $result = $stmt->execute($news);
        return $result ? $this->conn->lastInsertId() : -1;
    }
    public function getNewsById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM news WHERE id = :id");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array("id" => $id));
        $rows = $stmt->fetchAll();
        if (isset($rows[0])) {
            return $rows[0];
        } else return null;
    }

    public function editNews($id, $news)
    {
        $news["id"] = $id;
        $stmt = $this->conn->prepare('UPDATE news SET title = :title, thumbnails = :thumbnails, description = :description, content = :content WHERE id = :id');
        return $stmt->execute($news);
    }

    public function deleteById($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM news WHERE id = :id');
        return $stmt->execute(array(
            "id" => $id
        ));
    }
    public function addComment($comment)
    {
        $stmt = $this->conn->prepare('INSERT INTO comment_news(user_id, news_id, content, created_at) values(:user_id, :news_id, :content, :created_at)');
        $result = $stmt->execute($comment);
        return $result ? $this->conn->lastInsertId() : -1;
    }
}
