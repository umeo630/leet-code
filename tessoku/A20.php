<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$arr1 = str_split($lines[0]);
$arr2 = str_split($lines[1]);

$tmp[0][0] = 0;
$count1 = count($arr1);
$count2 = count($arr2);
for ($i = 0; $i <= $count1; $i++) {
  for ($j = 0; $j <= $count2; $j++) {
    if ($i >= 1 && $j >= 1 && $arr1[$i - 1] === $arr2[$j - 1]) {
      $tmp[$i][$j] = max($tmp[$i - 1][$j], $tmp[$i][$j - 1], $tmp[$i - 1][$j - 1] + 1);
    } elseif ($i >= 1 && $j >= 1) {
      $tmp[$i][$j] = max($tmp[$i - 1][$j], $tmp[$i][$j - 1]);
    } elseif ($i >= 1) {
      $tmp[$i][$j] = $tmp[$i - 1][$j];
    } elseif ($j >= 1) {
      $tmp[$i][$j] = $tmp[$i][$j - 1];
    }
  }
}

$answer = $tmp[$count1][$count2];
echo $answer;
