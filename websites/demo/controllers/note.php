<?php

$dbb = new Database();

$heading = "Note";

$note = $dbb->query('SELECT * from notes WHERE id = :id', ['id' => $_GET['id']])->fetch();


require "views/note.view.php"; 