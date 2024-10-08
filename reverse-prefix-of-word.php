<?php 

function reversePrefix($word, $ch) {
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] === $ch) {
            for ($j = 0; $j < $i; $j++) {
                $temp = $word[$j];
                $word[$j] = $word[$i];
                $word[$i] = $temp;
                $i--;
            }

            return $word;
        }
    }

}

$word = "abxcdefd";
$ch = "d";
echo reversePrefix($word, $ch);