<?php
include '\model\BD_connect.php';
?>

<html>
    <head>
        <title></title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form method="post" action="">
            <label>
                Название:
            <input type="text" name="name"/>
            </label><br/>
            <label>
                Ингредиенты:
            <textarea></textarea>
            </label><br/>
            <label>
                Приготовление:
            <textarea></textarea>
            </label><br/>
            <input type="submit"/>
        </form>

        <ul>
            <?php
            $array_BD = Array_BD();
            foreach ($array_BD as $values) {
                $_GET['id'] = $values['id']; ?>

                <li>
                    <a href="once_news.php?id=<?php echo $_GET['id']; ?>">
                        <?php echo $values['Name']; ?>
                    </a>
                </li>

            <?php }

            ?>
        </ul>
    </body>
</html>