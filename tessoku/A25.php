<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

[$height, $width] = explode(' ', $lines[0]);

for ($i = 1; $i <= $height; $i++) {
  $area[$i] = str_split($lines[$i]);
}

for ($i = 1; $i <= $height; $i++) {
  for ($k = 1; $k <= $width; $k++) {
    if ($i == 1 && $k == 1) {
      $dp[$i][$k] = 1;
      continue;
    }
    $dp[$i][$k] = 0;
    if ($i >= 2 && $area[$i - 1][$k - 1] === '.') $dp[$i][$k] += $dp[$i - 1][$k];
    if ($k >= 2 && $area[$i][$k - 2] == '.') $dp[$i][$k] += $dp[$i][$k - 1];
  }
}
echo $dp[$height][$width];
