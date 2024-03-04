<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$pointCount = intval($lines[0]);

$area = [];
$verticals = [];
$horizontal = [];

// 座標格納
for ($i = 1; $i <= $pointCount; $i++) {
  list($x, $y) = explode(' ', $lines[$i]);
  $area[$x][$y] = $area[$x][$y] + 1 ?? 1;
  $horizontal[] = intval($x);
  $verticals[] = intval($y);
}

// 存在しない座標を0で埋める
// 計算用配列を初期化
$width = max($horizontal);
$height = max($verticals);
$sums = [];
for ($i = 0; $i <= $width; $i++) {
  for ($j = 0; $j <= $height; $j++) {
    $area[$i][$j] = $area[$i][$j] ?? 0;
    $sums[$i][$j] = 0;
  }
}


// 横の累積和をとる
for ($j = 1; $j <= $height; $j++) {
  for ($i = 1; $i <= $width; $i++) {
    $sums[$i][$j] = $sums[$i - 1][$j] + $area[$i][$j];
  }
}

// 縦の累積和をとる
for ($i = 1; $i <= $width; $i++) {
  for ($j = 1; $j <= $height; $j++) {
    $sums[$i][$j] = $sums[$i][$j - 1] + $sums[$i][$j];
  }
}

$questionLine = $pointCount + 1;
$questionCount = intval($lines[$questionLine]);
for ($k = 1; $k <= $questionCount; $k++) {
  list($a, $b, $c, $d) = explode(' ', $lines[$questionLine + $k]);
  echo $sums[$c][$d] + $sums[$a - 1][$b - 1] - $sums[$a - 1][$d] - $sums[$c][$b - 1] . "\n";
}
