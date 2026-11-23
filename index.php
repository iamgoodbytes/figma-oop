<?php 
    include_once("bootstrap.php");
    try {
        $shape = new \Figma\Circle();
        $shape->setColor("red");
        $shape->setPosition(100, 20);
        $shape->setRadius(500);

        $rectangle = new \Figma\Rectangle();
        $rectangle->setColor("blue");
        $rectangle->setPosition(200, 200);
        $rectangle->setWidth(200);
        $rectangle->setHeight(100);
        $rectangle->setRotation(45);
    } catch (Error $e) {
       $error = $e->getMessage();
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="canvas">
    <?php if (isset($error)) :?>
        <p class="error">Error: <?= $error ?></p>
    <?php else: ?>
        <?php $shape->draw(); ?>
        <?php $rectangle->draw(); ?>
    <?php endif; ?>
</body>
</html>