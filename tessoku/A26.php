<?php
while ($line = trim(fgets(STDIN))) {
  $lines[] = $line;
}

for ($i = 1; $i <= $lines[0]; $i++) {
  echo isPrime($lines[$i]) ? 'Yes' : 'No';
  echo "\n";
}

function isPrime($value)
{
  for ($i = 2; $i * $i <= $value; $i++) {
    if ($value % $i == 0) return false;
  }
  return true;
}
