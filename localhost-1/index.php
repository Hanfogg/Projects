<?php

$link = mysqli_connect('localhost-1','root','');

if($link) {
	echo 'connected<br>';
	
}

$query = 'CREATE TABLE `test`.`Ejji` (
 `id` INT NOT NULL AUTO_INCREMENT ,
 `name` INT(20) NOT NULL ,
 PRIMARY KEY (`id`)
 ) ENGINE = InnoDB';
 
 mysqli_query($link,$query);