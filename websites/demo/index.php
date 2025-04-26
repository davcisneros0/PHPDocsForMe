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
                'purchaseUrl' => 'https:www.com'
            ],
            [
                'name' => 'WORLD',
                'author' => 'Johnny Doe',
                'purchaseUrl' => 'https:www.com'
            ]
        ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?> 
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> 
                </a>
            </li>
        <?php endforeach ?>

    </ul>
</body>
</html>