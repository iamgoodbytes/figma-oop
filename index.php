<?php 
    include_once("bootstrap.php");
    try {
        $shape = new \Figma\Circle();
        $shape->setColor("red");
        $shape->setPosition(100, 20);
        $shape->setRadius(500);
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
    <?php endif; ?>
</body>
</html>