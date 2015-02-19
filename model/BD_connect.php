<?php
function BD_connect() {
    mysql_connect('localhost', 'root', '');
    mysql_select_db('ШП');
}

function BD_query() {
    BD_connect();
    return mysql_query('SELECT * FROM News');
}

function Array_BD() {
$values = BD_query();
while (($values1 = mysql_fetch_array($values)) !== false) {
    $array_BD[] = $values1;
    }
    return $array_BD;
}