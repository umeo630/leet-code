<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
list($count, $diff) = explode(' ', $lines[0]);
$nums = explode(' ', $lines[1]);

$array = [];
for ($i = 1; $i <= intval($count); $i++) {
  if ($i === 1) {
    $array[$i] = 1;
  } else {
    $array[$i] = $array[$i - 1];
  };
  while ($array[$i] < intval($count) && $nums[$array[$i]] - $nums[$i - 1] <= intval($diff)) {
    $array[$i] += 1;
  }
}

$answer = 0;
foreach ($array as $key => $value) {
  $answer += $value - $key;
}
echo $answer;
