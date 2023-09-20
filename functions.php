<?php

// function generateMagicAnswer($min, $max) {
//   return rand($min, $max);
// }

// function generateMagicAnswer($min, $max, &$num) {
//   $num = rand($min, $max);
// }

function generateMagicAnswer() {
    global $min;
    global $max;
    return rand($min, $max);
}

?>
