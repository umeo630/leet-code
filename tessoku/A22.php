<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$count = intval($lines[0]);
$tmp1 = explode(' ', $lines[1]);
$tmp2 = explode(' ', $lines[2]);

$answer[1] = 0;
for ($i = 2; $i <= $count; $i++) {
  $answer[$i] = -1000000;
}

for ($i = 0; $i < $count - 1; $i++) {
  $answer[$tmp1[$i]] = max($answer[$tmp1[$i]], $answer[$i + 1] + 100);
  $answer[$tmp2[$i]] = max($answer[$tmp2[$i]], $answer[$i + 1] + 150);
}

echo $answer[$count];
