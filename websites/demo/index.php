<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php
        $books = [
            [
                'name' => 'HELLO',
                'author' => 'John Doe',
                'releaseYear' => 2000,
                'purchaseUrl' => 'https:www.com'
            ],
            [
                'name' => 'WORLD',
                'author' => 'Johnny Doe',
                'releaseYear' => 2001,
                'purchaseUrl' => 'https:www.com'
            ],
            [
                'name' => 'ALIENS',
                'author' => 'Johnny Doe',
                'releaseYear' => 2015,
                'purchaseUrl' => 'https:www.com'
            ]
        ];

        function filterByAuthor($books, $author) {
            $filteredBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === $author) {
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }
    ?>
    <ul>
        <?php foreach (filterByAuthor($books, 'Johnny Doe') as $book) : ?> 
            <?php if ($book['author'] === 'Johnny Doe') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author']; ?>
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach ?>

    </ul>


</body>
</html>