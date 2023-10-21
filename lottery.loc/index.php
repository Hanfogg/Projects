<?php
echo 'День розыграша : <br>';
echo date('d M Y');
echo '<br>';
echo 'Время розыгрыша : ';
echo '<br>';
echo date('H:i:s',strtotime('now'));
echo '<br>';

$userBalls = [9,2,99,15,66,17];

function game($countOfBalls = 100,$chooseBalls = 6){
$already_balls = [];
$balls = range(1,$countOfBalls);

for( $i = 0; $i < $chooseBalls ; $i++){
    shuffle($balls);
    $already_balls[] = array_pop($balls);
}
sort($already_balls);

return $already_balls;
}
$winnerBalls = game();
$difference = array_diff($userBalls,$winnerBalls);
if(count($difference) == 6){
    echo'Вы лузер!!!!';
}else{
    $rightBallsCount = 6 - count($difference);
    echo 'Winner' . $rightBallsCount ;
}



