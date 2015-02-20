<?php
include_once 'BD_connect.php';

$name = $_POST['name'];
$ingredients = $_POST['ingredients'];
$cook = $_POST['cook'];

if ((!empty($_POST['name'])) &&
    (!empty($_POST['ingredients'])) &&
    (!empty($_POST['cook']))) {

    BD_connect();
    mysql_query("INSERT INTO `News`
    (Name, Ingredients, Cook)
    VALUES
    ('$name', '$ingredients', '$cook')");
    $_POST = []; ?>
    <p>Рецепт успешно добавлен!</p>

    <?php
}
elseif ((!empty($_POST)) &&
    isset($_POST)) {
    $_POST = []; ?>
    <p>Не все поля заполнены!</p>
<?php
}