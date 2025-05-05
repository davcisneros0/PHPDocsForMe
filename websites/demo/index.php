<?php

require 'functions.php';
require 'router.php';

// connect to SQLite database

$db = 'demo.db';

try {
    $pdo = new PDO("sqlite:{$db}"); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error via database: " . $e->getMessage();
}

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}