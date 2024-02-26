<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

$results = explode(' ', $lines[1]);

$win[0] = 0;
$lost[0] = 0;
$winCount = 0;
$lostCount = 0;
foreach ($results as $key => $result) {
  $result ? $winCount++ : $lostCount++;
  $win[$key] = $winCount;
  $lost[$key] = $lostCount;
}

$lineCount = $line[2];

for ($i = 3; $i < $lineCount + 3; $i++) {
  list($start, $end) = explode(' ', $line[$i]);
  $difference = ($lost[$end - 1] - $lost[$start - 1]) - ($win[$end - 1] - $win[$start - 1]);
  if ($difference > 0) echo 'win' . "\n";
  if ($difference === 0) echo 'draw' . "\n";
  if ($difference < 0) echo 'lose' . "\n";
}
