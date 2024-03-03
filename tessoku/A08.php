<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

list($height, $width) = explode(' ', $lines[0]);

// 座標を格納
$area = [];
for ($i = 1; $i <= intval($height); $i++) {
  $nums = explode(' ', $lines[$i]);
  for ($j = 1; $j <= intval($width); $j++) {
    $area[$i][$j] = $nums[$j - 1];
  }
}

// 配列を初期化
$sums = [];
for ($i = 0; $i <= intval($height); $i++) {
  for ($j = 0; $j <= intval($width); $j++) {
    $sums[$i][$j] = 0;
  }
}

// 横方向に累積和をとる
for ($i = 1; $i <= intval($height); $i++) {
  for ($j = 1; $j <= intval($width); $j++) {
    $sums[$i][$j] = $sums[$i][$j - 1] + $area[$i][$j];
  }
}

// 縦方向に累積和をとる
for ($j = 1; $j <= intval($width); $j++) {
  for ($i = 1; $i <= intval($height); $i++) {
    $sums[$i][$j] = $sums[$i - 1][$j] + $sums[$i][$j];
  }
}

$questionLine = intval($height) + 1;
$questionCount = $lines[$questionLine];
for ($k = 1; $k <= intval($questionCount); $k++) {
  list($a, $b, $c, $d) = explode(' ', $lines[$questionLine + $k]);
  $answer = $sums[$c][$d] + $sums[$a - 1][$b - 1] - $sums[$a - 1][$d] - $sums[$c][$b - 1];
  echo $answer . "\n";
}
