<?php

$dbb = new Database();

$currentUserId = 23;
$heading = "Note";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $note = $dbb->query('SELECT * from notes WHERE id = :id', [
        'id' => $_GET['id']
        ])->fetch();


    if (!$note) {
        abort();
    }

    if ($note['user_id'] != $currentUserId) {
        abort(Response::FORBIDDEN);
    }

    $dbb->query('DELETE FROM notes WHERE id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /notes');
    exit();

} else {

    $currentUserId = 1;

    $note = $dbb->query('SELECT * from notes WHERE id = :id', [
        'id' => $_GET['id']
        ])->fetch();


    if (!$note) {
        abort();
    }

    if ($note['user_id'] != $currentUserId) {
        abort(Response::FORBIDDEN);
    }

}
require "views/note.view.php"; 