<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
[$count, $target] = explode(' ', $lines[0]);
$cards = explode(' ', $lines[1]);

$tmp[0][0] = true;
for ($i = 1; $i <= intval($target); $i++) $tmp[0][$i] = false;

for ($i = 1; $i <= intval($count); $i++) {
  for ($j = 0; $j <= intval($target); $j++) {
    $cardNum = $cards[$i - 1];
    if ($j < $cardNum) {
      $tmp[$i][$j] = $tmp[$i - 1][$j];
    }
    if ($j >= $cardNum) {
      if ($tmp[$i - 1][$j] == true || $tmp[$i - 1][$j - $cardNum] == true) {
        $tmp[$i][$j] = true;
      } else {
        $tmp[$i][$j] = false;
      }
    }
  }
}

echo $tmp[$count][$target] ? 'Yes' : 'No';
