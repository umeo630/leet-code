<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
[$n, $r] = explode(' ', $lines[0]);
$m = 1000000007;

$a = 1;
for ($i = 1; $i <= $n; $i++) {
  $a = $a * $i % $m;
}

$b = 1;
for ($i = 1; $i <= $r; $i++) {
  $b = $b * $i % $m;
}
for ($i = 1; $i <= $n - $r; $i++) {
  $b = $b * $i  % $m;
}

echo $a * caluculate($b, $m - 2, $m) % $m;

function caluculate($a, $b, $m)
{
  $answer = 1;
  $p = $a;
  for ($i = 0; $i < 30; $i++) {
    $c = 1 << $i;
    if (($b / $c) % 2 == 1) $answer = ($p * $answer) % $m;
    $p = ($p * $p) % $m;
  }
  return $answer;
}
