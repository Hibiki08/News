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
}
elseif ((!empty($_POST)) &&
    isset($_POST)) {
    header('Location:'. __DIR__ . '..\index.php'); ?>
    <p>Не все поля заполнены!</p>
<?php
}