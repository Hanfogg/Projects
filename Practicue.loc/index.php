<?php

$users = explode(',', $_GET['username']);
echo '<ul>';
foreach($users as $user) {
    $tUser = trim($user);
    $lUser = strlen($user);

   echo '<li>';
   echo ($tUser) . ' Symbol lenght: ' . $lUser;
   echo '</li>';   
}

echo '</ul>';

$name = str_replace(['1', '@'] , ['I', 'a'] ); 