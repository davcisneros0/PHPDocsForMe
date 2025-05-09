<?php

$dbb = new Database();

$heading = "Note";
$currentUserId = 1;

$note = $dbb->query('SELECT * from notes WHERE id = :id', [
    // 'user' => 1,
    'id' => $_GET['id']
    ])->fetch();


if (!$note) {
    abort();
}

if ($note['user_id'] != $currentUserId) {
    abort(Response::FORBIDDEN);
}


require "views/note.view.php"; 