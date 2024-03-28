<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

[$a, $b] = explode(' ', $lines[0]);
echo caluculate($a, $b, 1000000007);

function caluculate($a, $b, $m)
{
  $answer = 1;
  $c = $a;
  for ($i = 0; $i < 30; $i++) {
    $divide = 1 << $i;
    if (($b / $divide) % 2 == 1) {
      $answer = ($answer * $c) % $m;
    }
    $c  = ($c * $c) % $m;
  }
  return $answer;
}
