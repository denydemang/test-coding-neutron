<?php

$plus = 5;
for ($a = 1; $a <= $plus; $a++) {
    for ($j = $plus; $j >= $a; $j -= 1) {
        echo "&nbsp";
    }
    for ($c = 1; $c <= $a; $c++) {
        echo "+";
    }
    echo "<br>";
}
for ($a = 1; $a <= $plus; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo "&nbsp";
    }
    for ($c = $plus; $c >= $a; $c -= 1) {
        echo "+";
    }
    echo "<br>";
}
