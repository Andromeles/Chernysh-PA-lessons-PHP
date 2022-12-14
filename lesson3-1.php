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

//--Блок логики--
function Map_SummArr(&$el1, &$el2, &$el3): array
{
   for ($i = 0; $i < 14; $i++) {
      $el3[]=$el1[$i]*$el2[$i];
   }
   return $el3;
}

function Rand_Arr(&$arr): array
{
   for ($i = 0; $i < 14; $i++) {
      $arr[] = rand(0, 100);
   }
   return $arr;
}

//--Блок ввода--
$arr1 = Rand_Arr($arr1);
$arr2 = Rand_Arr($arr2);
$arrTotal = Map_SummArr($arr1, $arr2, $arrTotal);

//--Блок вывода
print_r($arrTotal);

/*
Второй вариант, но он немного не корректен.

function Map_SummArr($el1, $el2): array
{
   return [$el1 * $el2];
}

function Rand_Arr($arr): array
{
   for ($i = 0; $i < 14; $i++) {
      $arr[] = rand(0, 100);
   }
   return $arr;
}

$arr1 = Rand_Arr($arr1);
$arr2 = Rand_Arr($arr2);

$arrTotal = array_map('Map_SummArr', $arr1, $arr2);

print_r($arrTotal);*/