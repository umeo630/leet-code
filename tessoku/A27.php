<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

[$a, $b] = explode(' ', $lines[0]);

function calculateGCD($a, $b)
{
  while ($a >= 1 && $b >= 1) {
    if ($a >= $b) {
      $a = $a % $b;
    } else {
      $b = $b % $a;
    }
  }
  if ($a != 0) return $a;
  return $b;
}

echo calculateGCD($a, $b);
