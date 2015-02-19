<?php
include 'model\once_news.php';
?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h2><?php  echo $name; ?></h2>
        <h3>Ингредиенты:</h3>
        <p><?php echo $ingredients; ?></p>
        <h3>Приготовление:</h3>
        <p><?php echo $cook; ?></p>
    </body>
</html>