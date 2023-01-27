<?php

$link = mysqli_connect('localhost', 'root', '', 'test');
if( !$link){
    echo 'Ошибка: ' . mysqli_connect_errno() . ':' . mysqli_connect_error();
}
$query = 'SELECT * FROM test_table';
$result = mysqli_query($link, $query);
mysqli_close($link);
$row = mysqli_fetch_assoc($result);
var_dump($row);
?>n