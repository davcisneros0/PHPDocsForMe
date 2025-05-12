<?php

$dbb = new Database();

$heading = "My Notes";

$notes = $dbb->query('SELECT * from notes WHERE user_id = 1')->fetchAll();


require "views/notes.view.php";