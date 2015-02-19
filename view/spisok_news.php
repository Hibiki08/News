<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
</head>
<body>
    <ul>
    <?php
        include '..\model\BD_connect.php';
        $array_BD = Array_BD();
        foreach ($array_BD as $values) { ?>

        <li><?php echo $values['Name']; ?></li>

        <?php }

    ?>
    </ul>
</body>
</html>