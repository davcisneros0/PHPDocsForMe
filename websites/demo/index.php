<?php

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';




// connect to SQLite database, execute query with a CLASS

$dbb = new Database();

// $id = $_GET['id'];
// $query = "select * from posts WHERE id = :id";

// dd($query);

// $posts = $dbb->query($query, [':id' => $id])->fetch();


// dd($posts);


// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
