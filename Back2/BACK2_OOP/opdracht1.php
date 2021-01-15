<?php
function berekenkamer($len, $br, $hg = 1){
    $inh = $len * $br * $hg;
    return $inh;
}

echo "he inhoud is" . berekenkamer(2,3,4) . "<br>";

echo "de opdervlakte is" . berekenkamer(2,3) . "<br>";