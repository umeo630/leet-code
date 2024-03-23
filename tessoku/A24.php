<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

$count = intval($lines[0]);
$nums = explode(' ', $lines[1]);
$n = count($nums);
$L = array_fill(0, $n + 1, 0);
$len = 0;

for ($i = 1; $i <= $n; $i++) {
  $pos = binarySearch($L, $len + 1, $nums[$i - 1]);
  $dp[$i] = $pos;
  $L[$pos] = $nums[$i - 1];
  if ($pos > $len) {
    $len++;
  }
}

echo $len;

function binarySearch($arr, $right, $target)
{
  $left = 0;
  while ($left < $right) {
    $mid = intdiv($left + $right, 2);
    if ($arr[$mid] < $target) {
      $left = $mid + 1;
    } else {
      $right = $mid;
    }
  }
  return $left;
}
