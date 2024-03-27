<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

$answer = 0;
for ($i = 1; $i <= $lines[0]; $i++) {
  [$symbol, $num] = explode(' ', $lines[$i]);
  if ($symbol == '+') $answer += $num;
  if ($symbol == '-') $answer -= $num;
  if ($symbol == '*') $answer *= $num;

  if ($answer < 0) $answer += 10000;

  $answer %= 10000;
  echo $answer . "\n";
}
