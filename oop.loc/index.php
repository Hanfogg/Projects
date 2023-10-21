<?php

include_once 'Human.php';

$humanOne = new Human();
$humanTwo = new Human();

$humanOne->height = 172;
$humanTwo->height = 180;

$humanOne->weight = 60;
$humanTwo->weight = 73;

$humanOne->name = 'Ivan';
$humanTwo->name = 'Alexander';

$humanOne->hairColor = 'TemnoRusii';
$humanTwo->hairColor = 'Rusii';

$humanOne->eyesColor = 'Blue';
$humanTwo->eyesColor = 'Brown';

var_dump($humanOne);
echo '<br>';
var_dump($humanTwo);
echo '<br>';
echo '<br>';

$humanOne->takeItem('Flash disk');
$humanTwo->takeItem('Mouse');

var_dump($humanOne);
echo '<br>';
var_dump($humanTwo);
echo '<br>';
echo '<br>';

$humanOne->grow(20);
$humanTwo->grow(-100);

var_dump($humanOne);
echo '<br>';
var_dump($humanTwo);
echo '<br>';
echo '<br>';

