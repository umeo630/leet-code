<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

list($days, $questionCount) = explode(' ', $lines[0]);
$guests = explode(' ', $lines[1]);

$total[0] = 0;
foreach ($guests as $key => $guest) {
  $total[$key + 1] = $total[$key] + intval($guest);
}

for ($i = 0; $i < $questionCount; $i++) {
  list($a, $b) = explode(' ', $lines[$i + 2]);
  $answer = $total[$b] - $total[$a - 1];
  echo $answer . "\n";
}
