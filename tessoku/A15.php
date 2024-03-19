<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = intval($lines[0]);
$nums = explode(' ', $lines[1]);
$uniqueNums = array_unique($nums);
sort($uniqueNums);

foreach ($nums as $value) {
  $answer[] = findMatch($uniqueNums, $value);
}

echo implode(' ', $answer);

function findMatch($array, $value)
{
  $left = 0;
  $right = count($array);
  while ($left < $right) {
    $mid = intdiv($left + $right, 2);
    if ($value == $array[$mid]) {
      return $mid + 1;
    }

    if ($value > $array[$mid]) {
      $left = $mid + 1;
    } else {
      $right = $mid;
    }
  }
}
