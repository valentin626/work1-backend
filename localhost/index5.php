<!--Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.-->
<?php
$min = rand(1, 50);
$max = rand(51, 100);
$a = range($min, $max);
$maxCount = count($a);


echo "Element bolshe nulya i parni index";
for($i=2; $i < $maxCount; $i=$i+2) {
	if($a[$i] > 0){
		echo " " . $a[$i]." ";
	}
}
echo " ". $b ."<br>";
echo "Element bolshe nulya i ne parni index";
for($i=1; $i < $maxCount; $i=$i+2) {
	if($a[$i] > 0){
		echo " " . $a[$i]." ";
	}
}
?>