<?php

$db = 'demo.db';

class Database {
    public $connection;

    public function __construct() 
    {
        $this->connection = new PDO("sqlite:demo.db"); 
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query($query) {
        try {
            // $pdo = new PDO("sqlite:{$db}"); 
            // $pdo = new PDO("sqlite:demo.db"); 
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $statement = $this->connection->prepare($query);
            $statement->execute();

            return $statement;
        
            // return $statement->fetch(PDO::FETCH_ASSOC);
        
        } catch (PDOException $e) {
            echo "Error via database: " . $e->getMessage();
        }
    }
}

