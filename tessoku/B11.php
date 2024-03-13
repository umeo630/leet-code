<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = intval($lines[0]);
$nums = explode(' ', $lines[1]);
sort($nums);

$questions = intval($lines[2]);
for ($i = 3; $i < $questions + 3; $i++) {
  $target = intval($lines[$i]);
  echo lowerBound($target, $nums, $count) . "\n";
}

function lowerBound($value, $array, $right)
{
  $left = 0;

  while ($left < $right) {
    $mid = intdiv($left + $right, 2);
    if ($array[$mid] < $value) {
      $left = $mid + 1;
    } else {
      $right = $mid;
    }
  }
  return $left;
}
