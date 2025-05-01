<?php
    $books = [
            [
                'name' => 'HELLO',
                'author' => 'John Doe',
                'releaseYear' => 2000,
                'purchaseUrl' => 'https://www.com'
            ],
            [
                'name' => 'WORLD',
                'author' => 'Johnny Doe',
                'releaseYear' => 2001,
                'purchaseUrl' => 'https://www.com'
            ],
            [
                'name' => 'ALIENS',
                'author' => 'Johnny Doe',
                'releaseYear' => 2015,
                'purchaseUrl' => 'https://www.com'
            ]
        ];

        

        $filteredBooks = array_filter($books, function($book) {
            return $book['author'] == 'John Doe';
        });

require "index.view.php";
