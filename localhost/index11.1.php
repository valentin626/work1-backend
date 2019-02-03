<?php
$n = (int)$_POST['chislo'];
$i = 0;
$S = 0;
do {
    $k = 0;
	$i = $i + 1;
	$k = $i * $i;
	echo "Chislo ".$i." v kvadrate = ".$k. "<br/>";
	$S = $S + $k;
} while ($i != $n);
echo "summa - ".$S;
?>