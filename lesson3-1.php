<?php
/*
Подготовьте два массива одинаковой размерности, 
но не менее 10 элементов, с произвольными числовыми 
значениями. Разработайте скрипт для запуска из командной 
строки, выполняющий перемножение элементов двух 
массивов и выводящий результат в консоль с помощью 
print_r. Умножение должно выполняться только между 
элементами соответствующих индексов, то есть нулевой 
элемент первого массива умножается на нулевой элемент 
второго массива; 
*/

$array1[10]=[19,28,37,46,55,64,73,82,91];
$array2[10]=[28,19,46,37,64,55,82,73,91];

function sum(){
   for($i=0; $i<10; $i++){
    echo $array1[$i];
    echo $array2[$i];
    $arraySumm[]=$array1[$i] * $array2[$i];
   } 
   print_r($arraySumm);
}

sum();