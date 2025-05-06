<?php

require 'functions.php';
require 'router.php';
require 'Database.php';



// connect to SQLite database, execute query with a CLASS

// $db = 'demo.db';

// class Database {
//     public $connection;

//     public function __construct() 
//     {
//         $this->connection = new PDO("sqlite:demo.db"); 
//         // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }

//     public function query($query) {
//         try {
//             // $pdo = new PDO("sqlite:{$db}"); 
//             // $pdo = new PDO("sqlite:demo.db"); 
//             // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//             $statement = $this->connection->prepare($query);
//             $statement->execute();

//             return $statement;
        
//             // return $statement->fetch(PDO::FETCH_ASSOC);
        
//         } catch (PDOException $e) {
//             echo "Error via database: " . $e->getMessage();
//         }
//     }
// }


$dbb = new Database();
$posts = $dbb->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);


// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }

// $db = 'demo.db';

// try {
//     $pdo = new PDO("sqlite:{$db}"); 
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $statement = $pdo->prepare("SELECT * FROM posts");
//     $statement->execute();

//     $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// } catch (PDOException $e) {
//     echo "Error via database: " . $e->getMessage();
// }
