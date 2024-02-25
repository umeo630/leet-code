<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = $lines[0];
$amounts = explode(' ', $lines[1]);
const EXPECT_TOTAL = 1000;

function isExpectTotal($amounts)
{
  foreach ($amounts as $amount1) {
    foreach ($amounts as $amount2) {
      foreach ($amounts as $amount3) {
        if ($amount1 === $amount2 || $amount1 === $amount3 || $amount2 === $amount3) break;
        $total = $amount1 + $amount2 + $amount3;
        if (intval($total) === EXPECT_TOTAL) return true;
      }
    }
  }
  return false;
}

$answer = isExpectTotal($amounts);
echo $answer ? 'Yes' . "\n" : 'No' . "\n";
