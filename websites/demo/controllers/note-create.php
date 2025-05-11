<?php

require 'Validator.php';

$db = new Database();

$heading = "Create Note";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // confirm if body has text
    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body of no more than 1000 characters is required.";
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
 
require 'views/note-create.view.php';