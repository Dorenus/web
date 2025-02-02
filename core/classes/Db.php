<?php

class Db
{

    private $conn;

    public function __construct(array $db_config)
    {
        $dsn = "mysql:host={$db_config["host"]};dbname={$db_config["dbname"]}";
        $this->conn = new PDO($dsn, $db_config["username"], $db_config["password"], $db_config["options"]);
    }

    public function query($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
