<?php
// число
$number = "1547";
// суда будем записывать сумму
$sum = 0;
// получаем сумму цифр числа
// доступ к каждой цифре числа можно получить через оператор доступа элементов массива
for($i = 0; $i <= strlen($number); $i++) {
    $sum += $number[$i];
}
// выводим данные
echo $number. "<br/>";
echo $sum;
?>