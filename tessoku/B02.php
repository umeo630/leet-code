<?php
$input = explode(' ', trim(fgets(STDIN)));
const DIVIDEND = 100;
for ($i = $input[0]; $i <= $input[1]; $i++) {
  $answer = DIVIDEND % $i === 0;
  if ($answer) break;
}
echo $answer ? 'Yes' . "\n" : 'No' . "\n";
