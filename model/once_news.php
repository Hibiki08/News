<?php
include 'BD_connect.php';
$arrayBD = Array_BD();


if (isset($_GET['id'])) {
    if ($_GET['id'] == $arrayBD[$_GET['id'] - 1]['id']) {
        $name = $arrayBD[$_GET['id'] - 1]['Name'];
        $ingredients = $arrayBD[$_GET['id'] - 1]['Ingredients'];
        $cook = $arrayBD[$_GET['id'] - 1]['Cook'];
 }
}