<?php
include '\model\BD_connect.php';
?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form method="post" action="model\add_news.php">
            <label>
                Название:
            <input type="text" name="name"/>
            </label><br/>
            <label>
                Ингредиенты:
            <textarea name="ingredients"></textarea>
            </label><br/>
            <label>
                Приготовление:
            <textarea name="cook"></textarea>
            </label><br/>
            <input type="submit"/>
        </form>

        <ul>
            <?php
            $array_BD = Array_BD();
            foreach ($array_BD as $values) { ?>

                <li>
                    <a href="once_news.php?id=<?php echo $values['id']; ?>">
                        <?php echo $values['Name']; ?>
                    </a>
                </li>

            <?php }

            ?>
        </ul>
    </body>
</html>