<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = intval($lines[0]);

for ($i = 1; $i <= $count; $i++) {
  [$order, $point] = explode(' ', $lines[$i]);
  $orders[$i] = $order;
  $points[$i] = $point;
}

$tmp[1][$count] = 0;
for ($i = $count - 2; $i >= 0; $i--) {
  for ($l = 1; $l <= $count - $i; $l++) {
    $r = $l + $i;

    $score1 = 0;
    if ($l > 1 && $l <= $orders[$l - 1] && $orders[$l - 1] <= $r) {
      $score1 = $points[$l - 1];
    }

    $score2 = 0;
    if ($r < $count && $l <= $orders[$r + 1] && $orders[$r + 1] <= $r) {
      $score2 = $points[$r + 1];
    }

    if ($l == 1) {
      $tmp[$l][$r] = $tmp[$l][$r + 1] + $score2;
    } elseif ($r == $count) {
      $tmp[$l][$r] = $tmp[$l - 1][$r] + $score1;
    } else {
      $tmp[$l][$r] = max($tmp[$l - 1][$r] + $score1, $tmp[$l][$r + 1] + $score2);
    }
  }
}

$answer = 0;
for ($i = 1; $i <= $count; $i++) {
  $answer = max($answer, $tmp[$i][$i]);
}

echo $answer;
