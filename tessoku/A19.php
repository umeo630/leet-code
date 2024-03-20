<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
[$count, $maxWeight] = explode(' ', $lines[0]);
for ($i = 1; $i <= intval($count); $i++) {
  [$weight, $value] = explode(' ', $lines[$i]);
  $weights[$i] = $weight;
  $values[$i] = $value;
}

for ($i = 0; $i <= intval($count); $i++) {
  for ($j = 0; $j <= intval($maxWeight); $j++) {
    $tmp[$i][$j] = -1000000000;
  }
}

$tmp[0][0] = 0;
for ($i = 1; $i <= intval($count); $i++) {
  for ($j = 0; $j <= intval($maxWeight); $j++) {
    $w = $weights[$i];
    if ($j < $w) {
      $tmp[$i][$j] = $tmp[$i - 1][$j];
    }
    if ($j >= $w) {
      $v = $values[$i];
      $tmp[$i][$j] = max($tmp[$i - 1][$j], $tmp[$i - 1][$j - $w] + $v);
    }
  }
}

$answer = 0;
for ($i = 0; $i <= intval($maxWeight); $i++) {
  $answer = max($answer, $tmp[$count][$i]);
}
echo $answer;
