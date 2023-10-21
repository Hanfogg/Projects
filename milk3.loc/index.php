<?php

$link = mysqli_connect('localhost', 'root', '');

if (!$link) {
    die('error 1' . mysqli_error());
}

$db_selected = mysqli_select_db($link, 'shop');

if (!$db_selected) {
    die ('error 2' . mysqli_error());
}

$exist = true;

if (!$exist) {
    $query = 'CREATE TABLE sert (
    id int,
    name varchar(255),
    code varchar(255)
);';

    $result = mysqli_query($link, $query);

    if ($result === true) {
        echo 'created';
    } else {
        echo 'error 3';
    }
}

//$query = 'SELECT name FROM `milk` WHERE (price <= 25 AND count >= 20) OR price >=30 AND count <= 25 AND id_persent_of_fat = 1';
//$result = mysqli_query($link, $query);
//
//while ($row = mysqli_fetch_assoc($result)) {
//    echo '</br>';
//    var_dump($row);
//}

$query = 'SELECT count(id) as count_of_milk FROM `milk` WHERE name = "Milk 7"';
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['count_of_milk'] > 0) {
//        echo '</br>';
//        echo $row['count_of_milk'];
    } else {
        $query = 'INSERT `milk` (name, id_persent_of_fat, count, id_v, price) VALUES ("Milk 7", 1, 50, 2, 25)';
        mysqli_query($link, $query);

        // Showing list of milk
        $query = 'SELECT name FROM `milk`';
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {
//            echo '</br>';
//            var_dump($row);
        }
    }
}

function getMilkFromShop($name = 'Milk 1', $count = 1)
{
    global $link;

    $query = 'SELECT `count` FROM `milk` WHERE name = "' . $name . '"';
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result)) { //if(1)
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['count'] > 0) {
                if ($count > $row['count']) {
                    $countUpdate = $row['count'];
                } else {
                    $countUpdate = $count;
                }

                $query = 'UPDATE `milk` SET count = count - ' . $countUpdate . ' WHERE `name` = "' . $name . '"';
                mysqli_query($link, $query);
                echo 'Bought ' . $countUpdate . ' packs of ' . $name;
            } else {
                echo 'This Milk is empty :(';
                echo '<br>';
                echo 'But, you can buy another milk:';
                showAllNotEmptyMilk();
            }
        }
    } else {
        echo 'No this Milk: ' . $name;
    }
}

getMilkFromShop('Milk 1', 50);

//$query = 'INSERT `milk` (name, id_persent_of_fat, count, id_v, price) VALUES ("Milk 7", 1, 50, 2, 25)';
//mysqli_query($link, $query);
//
//$query = 'SELECT name FROM `milk`';
//$result = mysqli_query($link, $query);
//
//while ($row = mysqli_fetch_assoc($result)) {
//    echo '</br>';
//    var_dump($row);
//}

function showAllNotEmptyMilk()
{
    global $link;

    $query = 'SELECT name, price, count FROM `milk` WHERE count > 0';
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '</br>';
        echo ' - Name: ' . $row['name'] . '. Count: ' . $row['count'] . '. Price: ' . $row['price'] . '.';
    }
}

mysqli_close($link);