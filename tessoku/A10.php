<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}
$rooms = intval($lines[0]);
$persons = explode(' ', $lines[1]);
$days = intval($lines[2]);

// 部屋番号を昇順で配列に格納
// $array[部屋番号] = 部屋番号までの最大値
$max_persons[0] = 0;
for ($i = 1; $i <= $rooms; $i++) {
  $max_persons[$i] = max($max_persons[$i - 1], intval($persons[$i - 1]));
}

// 部屋番号を降順で配列に格納
// $array[部屋番号] = 部屋番号までの最大値
$reverse_persons = array_reverse($persons);
$reverse_max_persons[0] = 0;
for ($i = 1; $i <= $rooms; $i++) {
  $reverse_max_persons[$i] = max($reverse_max_persons[$i - 1], intval($reverse_persons[$i - 1]));
}

for ($i = 1; $i <= $days; $i++) {
  list($start, $end) = explode(' ', $lines[$i + 2]);
  $answer = max($max_persons[intval($start) - 1], $reverse_max_persons[$rooms - intval($end)]);
  echo $answer . "\n";
}
