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
        <?php
        include '..\model\BD_connect.php';
        ?>
        <ul>
            <?php
            $array_BD = Array_BD();
            foreach ($array_BD as $values) { ?>

                <li>
                    <a href="">
                        <?php echo $values['Name']; ?>
                    </a>
                </li>

            <?php }

            ?>
        </ul>
    </body>
</html>