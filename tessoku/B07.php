<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

$closingTime = intval($lines[0]);
$employees = intval($lines[1]);
$shift = [];
for ($i = 1; $i <= $employees; $i++) {
  list($start, $end) = explode(' ', $lines[$i + 1]);
  $shift[$start] += 1;
  $shift[$end] -= 1;
}

$answers[0] = 0;
for ($k = 1; $k <= $closingTime; $k++) {
  $answers[$k] = ($answers[$k - 1] + $shift[$k - 1]) ?? 0;
  echo $answers[$k] . "\n";
}
