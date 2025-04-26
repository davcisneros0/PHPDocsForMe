<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <?php
        $numbers = [
            "1",
            "2",
            "3"
        ];
    ?>
    <ul>
        <!-- <?php foreach ($numbers as $number) {
            echo "<li>{$number}</li>";
        }    
        ?> -->

        <?php foreach ($numbers as $number) : ?>
            <li><?php echo $number; ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>