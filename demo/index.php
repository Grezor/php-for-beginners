<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo</title>
</head>
<body>
    <h1><?php
    $greeting = "hello";
    echo "$greeting Everybody!"; 
    ?></h1>
    <!-- condition-->
    <?php 
    $name = "Dark Matter";
    $read = true;
    if ($read) {
        $message = "You have read $name";
    } else {
        $message = "You have NOT read $name";
    }
    ?>
    <h2 class="text2"><?= $message; ?></h2>

    <!-- arrays -->
    <h1>recommanded Books</h1>
    <?php 
        $books = [
            "Atomic Habits",
            "June",
            "BookName 2",
            "Harry Potter"
        ];
    ?>
    <ul>
        <?php foreach($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>