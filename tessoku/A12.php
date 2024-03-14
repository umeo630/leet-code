<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
list($units, $target) = explode(' ', $lines[0]);
$prints = explode(' ', $lines[1]);

$left = 1;
$right = 1000000000;

while ($left < $right) {
  $mid = intdiv($left + $right, 2);
  $answer = check($prints, $mid, $target);
  if (!$answer) $left = $mid + 1;
  if ($answer) $right = $mid;
}
echo $left;

function check($prints, $mid, $target)
{
  $sum = 0;
  foreach ($prints as $key => $value) {
    $sum += intdiv(intval($mid), intval($value));
  }
  return $sum >= intval($target);
}
