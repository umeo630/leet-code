<?php
[$sum, $a, $b] = explode(' ', trim(fgets(STDIN)));

// 0:L,1:L,2:W,3:W,4:W,5:L,6:L,7:W,8:W
for ($i = 0; $i <= $sum; $i++) {
  if ($i >= $a && $result[$i - $a] == false) {
    $result[$i] = true;
  } else if ($i >= $b && $result[$i - $b] == false) {
    $result[$i] = true;
  } else {
    $result[$i] = false;
  }
}
if ($result[$sum] == true) {
  echo 'First';
} else {
  echo 'Second';
}
