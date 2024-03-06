<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = intval($lines[0]);

$area = [];
for ($i = 0; $i <= 1500; $i++) {
  for ($j = 0; $j <= 1500; $j++) {
    $area[$i][$j] = 0;
  }
}

for ($i = 1; $i <= $count; $i++) {
  list($a, $b, $c, $d) = explode(' ', $lines[$i]);
  $area[$a][$b] += 1;
  $area[$a][$d] -= 1;
  $area[$c][$b] -= 1;
  $area[$c][$d] += 1;
}

for ($i = 0; $i <= 1500; $i++) {
  for ($j = 1; $j <= 1500; $j++) {
    $area[$i][$j] += $area[$i][$j - 1];
  }
}

for ($j = 0; $j <= 1500; $j++) {
  for ($i = 1; $i <= 1500; $i++) {
    $area[$i][$j] += $area[$i - 1][$j];
  }
}

$answer = 0;
for ($i = 0; $i <= 1500; $i++) {
  for ($j = 0; $j <= 1500; $j++) {
    if ($area[$i][$j] > 0) $answer += 1;
  }
}
echo $answer;
