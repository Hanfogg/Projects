<?php

$link = mysqli_connect('localhost', 'root', '');

if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'shop');

if (!$db_selected) {
    die ('Не удалось выбрать базу shop: ' . mysqli_error());
}

echo 'Успешно соединились';

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
        echo 'Таблица создалась успешно!';
    } else {
        echo 'Возникли проблемы при создании таблицы sert';
    }
}

$query = 'SELECT * FROM `milk` WHERE 1';
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '</br>';
    echo 'name: ' . $row['name'] . ' - count: ' . $row['count'] . ' - price: ' . $row['price'];
}



mysqli_close($link);