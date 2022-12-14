<?php
//--Блок ввода
$value = (int)readline("Введите любое целое число: ");
//проверка введенных значений
while(empty($value)){
    echo("Значение не может быть словом и не может равняться 0.\n");
    $value = readline("Введите любое целое число: ");
}

//--Блок логики объединён с выводом
if($value<=5){
    switch($value)
    {
        case(1):
            echo("Выбран большой палец.");
            return;
        case(2):
            echo("Выбран указательный палец.");
            return;
        case(3):
            echo("Выбран средний палец.");
            return;
        case(4):
            echo("Выбран безымянный палец.");
            return;
    }
}
elseif(((intval(($value - 6)/4)) % 2) == 1){
    switch(($value - 6) % 4)
    {
        case(0):
            echo("Выбран указательный палец.");
            return;
        case(1):
            echo("Выбран средний палец.");
            return;
        case(2):
            echo("Выбран безымянный палец.");
            return;
        case(3):
            echo("Выбран мизинец.");
            return;
    }
}
else{
    switch(($value-6) % 4 )
    {
        case(3):
            echo("Выбран большой палец.");
            return;
        case(2):
            echo("Выбран указательный палец.");
            return;
        case(1):
            echo("Выбран средний палец.");
            return;
        case(0):
            echo("Выбран безымянный палец.");
            return;
    }
}
