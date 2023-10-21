<?php
$name = 'Helen';
echo 'Helen - ' . strlen($name);
echo '<br>';
echo '<br>';


$a = 9;
$b = 7;
$c = 3;
$d = 4;
$k = 6;
$n = 3;

$result1 = $b * $c;
echo '1)$b + $c = ' . $result1;
echo '<br>';
echo '<br>';
$result2 = $a * $a;
echo '2)$a * $a = ' . $result2;
echo '<br>';
echo '<br>';
$result3 = $result2 + $result1;
echo '3)(($a * $a) * ($b * $c)) = ' . $result3;
echo '<br>';
echo '<br>';
$result4 = pow ($result3  , $n ) ;
echo '4)(($a * $a) * ($b * $c)) ** $n = ' . $result4;
echo '<br>';
echo '<br>';
$result5 = sqrt($d) ;
echo '5)koren($d) = ' . $result5;
echo '<br>';
echo '<br>';
$result6 = $result5 * $k ;
echo '6)koren($d * $k) = ' . $result6;
echo '<br>';
echo '<br>';
$result = $result4 / $result6;
echo 'result = ' . $result;
echo '<br>';
echo '<br>';


$result = pow ((($a * $a) + ($b * $c))  , $n ) / (sqrt($d) * $k);
echo 'result = ' . $result;
echo '<br>';