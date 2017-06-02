<?php
// одномерный массив

$arr = [1, 1, 1, 1];

function sum_rec($arr, $n = 0) {
  $sum = 0;
  if (array_key_exists($n, $arr)) {
    $sum = $arr[$n] + sum_rec($arr, $n + 1);
  }
  return $sum;
}

echo sum_rec($arr) . PHP_EOL;
