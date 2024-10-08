<?php 

function smallestEvenMultiple($n) {
      return $n%2 == 0 ? $n : $n*2;
}

$n = 6;
echo smallestEvenMultiple($n);