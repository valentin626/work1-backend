<?php
$k [1] = "1";
$k [2] = "2";
$k [3] = "3";
$k [4] = "4";
$k [5] = "5";
$k [6] = "6";
$k [7] = "7";
$k [8] = "8";
$k [9] = "9";
$k [10] = "10";
$k [11] = "Valet";
$k [12] = "Dama";
$k [13] = "Korol";
$k [14] = "Tuz";
$n = (int)$_GET['karta'];
foreach ($k as $key => $value) {
        if ($key == $n) {
            echo "Vi vibrali kartu - ".$value;
        }
}
if ($n >= 15 or $n <1 ) {
    echo "Vedeno nevernoe znachenie. vvedite ot 1 do 14.";
}
?>