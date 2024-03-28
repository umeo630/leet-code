<?php
$num = trim(fgets(STDIN));
$answer = 0;

$answer += intdiv($num, 3);
$answer += intdiv($num, 5);
$answer -= intdiv($num, 15);

echo $answer;
