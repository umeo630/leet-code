<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
list($height, $width, $days) = explode(' ', $lines[0]);

$area = [];
$answer = [];
for ($i = 0; $i <= intval($height); $i++) {
  for ($j = 0; $j <= intval($width); $j++) {
    $answer[$i][$j] = 0;
    $area[$i][$j] = 0;
  }
}

for ($l = 1; $l <= intval($days); $l++) {
  list($a, $b, $c, $d) = explode(' ', $lines[$l]);
  $area[$a][$b] += 1;
  $area[$a][$d + 1] -= 1;
  $area[$c + 1][$b] -= 1;
  $area[$c + 1][$d + 1] += 1;
}

for ($i = 1; $i <= intval($height); $i++) {
  for ($j = 1; $j <= intval($width); $j++) {
    $answer[$i][$j] = $answer[$i][$j - 1] + $area[$i][$j];
  }
}

for ($j = 1; $j <= intval($width); $j++) {
  for ($i = 1; $i <= intval($height); $i++) {
    $answer[$i][$j] = $answer[$i - 1][$j] + $answer[$i][$j];
  }
}

for ($i = 1; $i <= intval($height); $i++) {
  for ($j = 1; $j <= intval($width); $j++) {
    if ($j >= 2) echo " ";
    echo $answer[$i][$j];
  }
  echo "\n";
}
