<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

$results = explode(' ', $lines[1]);

$win[0] = 0;
$lose[0] = 0;
$winCount = 0;
$loseCount = 0;
foreach ($results as $key => $result) {
  intval($result) === 1 ? $winCount++ : $loseCount++;
  $win[$key + 1] = $winCount;
  $lose[$key + 1] = $loseCount;
}

$lineCount = intval($lines[2]);

for ($i = 3; $i < $lineCount + 3; $i++) {
  list($start, $end) = explode(' ', $lines[$i]);
  $difference = ($win[$end] - $win[$start - 1]) - ($lose[$end] - $lose[$start - 1]);
  if ($difference > 0) echo 'win' . "\n";
  if ($difference === 0) echo 'draw' . "\n";
  if ($difference < 0) echo 'lose' . "\n";
}
