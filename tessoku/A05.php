<?php
$input = explode(' ', trim(fgets(STDIN)));
$N = intval($input[0]);
$K = intval($input[1]);

$cnt = 0;
for ($i = 1; $i <= $N; $i++) {
  for ($j = 1; $j <= $N; $j++) {
    $k = $K - ($i + $j);
    if ($k > 0 && $k <= $N) $cnt++;
  }
}

echo $cnt;
