<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    
    <ul>
        <?php foreach ($filteredBooks as $book) : ?> 
            <?php if ($book['author'] === 'John Doe') : ?>
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