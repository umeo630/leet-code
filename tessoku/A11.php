<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
list($strNum, $strTarget) = explode(' ', $lines[0]);
$array = explode(' ', $lines[1]);

$answer = binarySearch($strNum, $strTarget, $array);

echo $answer;

function binarySearch($strNum, $strTarget, $array)
{
  $left = 1;
  $right = intval($strNum);
  $target = intval($strTarget);
  while ($left <= $right) {
    $mid = intval(($left + $right) / 2);
    $value = intval($array[$mid - 1]);
    if ($value === $target) return $mid;
    if ($value < $target) $left = $mid + 1;
    if ($value > $target) $right = $mid - 1;
  }
}
