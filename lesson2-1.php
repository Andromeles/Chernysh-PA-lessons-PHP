<?php

//Урок 2. Задание 1
$reAnswer = "\nПопробуем ещё раз: ";
echo <<<HERE
Когда Москва впервые упомянута в летописи?
а) в  988 г.
б) в 1147 г.
в) в 1223 г.\n\n
HERE;
$answer = readline("Ваш вриант: ");
start:
if ($answer == 988) {
    echo("В этом году было принятие христианства на Руси.\nВым бы стоило подучить историю.");
    $answer = readline($reAnswer);
    goto start;
}
elseif($answer == 1147){
    echo("ПОЗДРАВЛЯЕМ ВЫ УГАДАЛИ!!!");
    return;
} elseif ($answer == 1223) {
    echo("31 мая 1223 г. татары разгромили русско-половецкие дружины на реке Калка.\nВым бы стоило подучить историю.");
    $answer = readline($reAnswer);
    goto start;
} else {
    echo("Такого варианта ответа нет. Введите дату из предложенных вариантов.\n");
    $answer = readline($reAnswer);
    goto start;
}