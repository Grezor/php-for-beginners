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
</body>
</html>