<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$rooms = intval($lines[0]);
$tmp1 = explode(' ', $lines[1]);
$tmp2 = explode(' ', $lines[2]);

$times[0] = 0;
$times[1] = $tmp1[0];
$times[2] = min(($times[1] + $tmp1[1]), $tmp2[0]);
for ($i = 3; $i < $rooms; $i++) {
  $root1 = $times[$i - 1] + $tmp1[$i - 1];
  $root2 = $times[$i - 2] + $tmp2[$i - 2];
  $times[$i] = min($root1, $root2);
}

// ゴールから考える
$place = $rooms;
while (true) {
  $answer[] = $place;
  if ($place == 1) break;
  if ($times[$place - 1] - $tmp1[$place - 2] == $times[$place - 2]) {
    $place = $place - 1;
  } else {
    $place = $place - 2;
  }
}

$answer = array_reverse($answer);
echo count($answer) . "\n";
echo implode(' ', $answer);
