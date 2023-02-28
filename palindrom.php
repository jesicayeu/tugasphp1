<?php

$kata = "malam";
$palindrom = strrev($kata);

if($kata == $palindrom) {
    echo "$kata adalah kata palindrom";
} else {
    echo "$kata bukan kata palindrom";
}

