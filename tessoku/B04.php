<?php
$inputs = array_reverse(str_split(trim(fgets(STDIN))));

$sum = 0;
foreach ($inputs as $key => $value) {
  if (intval($value) === 0) continue;
  $sum += (1 << intval($key));
}
echo $sum;
