<?php
function BD_connect() {
    mysql_connect('localhost', 'root', '');
    mysql_select_db('News');
}

function BD_query() {
    BD_connect();
    return mysql_query('SELECT * FROM News');
}