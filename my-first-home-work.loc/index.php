<?php
 echo 'MyNameisHelen';
 echo '<br>';
function hobbies()
{
    $Myhobbies = array(
        'Travelling',
        'Sport',
        'Reading',
        'Music'
    );
    foreach ($Myhobbies as $item){
        echo  'My hobbies is ' . $item  . '<br>';
    }
}
echo hobbies() ;
function music()
{
    $Myfavouritemusic  = array(
        'Rock',
        'Pop'
    );
    foreach ($Myfavouritemusic as $item){
        echo  'My favourite music is ' . $item  . '<br>';
    }
}
echo music() ;