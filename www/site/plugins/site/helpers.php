<?php

function toDigit($num, $digit)
{
  $i = 0;
  while ($i < $digit) :
    $num = '0' . $num;
    $i++;
  endwhile;
  $num = substr($num, -$digit);
  return $num;
}

function getSrcset($percentage)
{
  $array = [300, 450, 600, 750, 900, 1050, 1200, 1350, 1500, 1650, 1800, 2000, 2200, 2400, 2560];
  $map = array_map(function ($num) use ($percentage) {
    return ceil($num * $percentage);
  }, $array);
  return $map;
}
