<?php

$db = 'demo.db';

class Database {
    public $connection;

    public function __construct() 
    {
        $this->connection = new PDO("sqlite:demo.db"); 
    }

    public function query($query, $params = []) {
        try {        
            $statement = $this->connection->prepare($query);
            $statement->execute($params);

            return $statement;
        
        } catch (PDOException $e) {
            echo "Error via database: " . $e->getMessage();
        }
    }
}

