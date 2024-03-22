<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

[$items, $coupons] = explode(' ', $lines[0]);

for ($i = 1; $i <= $coupons; $i++) {
  $tmp[$i] = explode(' ', $lines[$i]);
}

for ($i = 0; $i <= $coupons; $i++) {
  for ($j = 0; $j < (1 << $items); $j++) {
    $dp[$i][$j] = 1000000000;
  }
}

$dp[0][0] = 0;
for ($i = 1; $i <= $coupons; $i++) {
  for ($j = 0; $j < (1 << $items); $j++) {
    for ($k = 1; $k <= $items; $k++) {
      // 1の場合、商品kはすでに無料になっている
      $already[$k] = ($j / (1 << $k - 1) % 2 == 0) ? 0 : 1;
    }
    $v = 0;
    for ($k = 1; $k <= $items; $k++) {
      // クーポンiを選んだ場合の整数表現を計算する
      if ($already[$k] == 1 || $tmp[$i][$k - 1]) $v += (1 << ($k - 1));
    }
    $dp[$i][$j] = min($dp[$i][$j], $dp[$i - 1][$j]);
    $dp[$i][$v] = min($dp[$i][$v], $dp[$i - 1][$j] + 1);
  }
}

$answer = -1;
if ($dp[$coupons][(1 << $items) - 1] < 1000000000) $answer = $dp[$coupons][(1 << $items) - 1];

echo $answer;
