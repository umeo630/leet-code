<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$rooms = intval($lines[0]);
$tmp1 = explode(' ', $lines[1]);
$tmp2 = explode(' ', $lines[2]);

$answer[0] = 0;
$answer[1] = $tmp1[0];
$answer[2] = min(($answer[1] + $tmp1[1]), $tmp2[0]);
for ($i = 3; $i < $rooms; $i++) {
  $root1 = $answer[$i - 1] + $tmp1[$i - 1];
  $root2 = $answer[$i - 2] + $tmp2[$i - 2];
  $answer[$i] = min($root1, $root2);
}

echo $answer[$rooms - 1];
