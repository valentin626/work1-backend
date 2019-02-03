<?php
$n = (int)$_POST['god'];
$y = fmod ($n, 4);
if ($n <= 1 or $n >= 999) {
    echo 'Vvedite chislo ot 1 do 999';
} else {
		if($y=0){
            echo "god visokosni";
        } else {
            echo "god ne visokosni";
        }
}
?>