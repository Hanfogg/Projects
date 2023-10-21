<?php

$link = mysqli_connect('localhost', 'root', '');

if (!$link) {
    die('error 1' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'shop');

if (!$db_selected) {
    die ('error 2' . mysqli_error());
}

echo 'ok';

$exist = true;

if (!$exist) {
    $query = 'CREATE TABLE sert (
    id int,
    name varchar(255),
    code varchar(255)
);';

    $result = mysqli_query($link, $query);

    echo '</br>';

    if ($result === true) {
        echo 'created';
    } else {
        echo 'error 3';
    }
}

$query = 'SELECT name FROM `milk` WHERE (price <= 25 AND count >= 20) 
OR price >=30 AND count <= 25 AND id_persent_of_fat = 1';
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '</br>';
    var_dump($row);
}



mysqli_close($link);