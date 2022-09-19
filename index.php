<?php
$n = rand(1, 12);
switch ($n){
    case 1: echo "Класс $n: Учим буквы"; break;
    case 2: echo "Класс $n: Учим таблицу умножения"; break;
    case 3: echo "Класс $n: делаем упражнения"; break;
    case 4: echo "Класс $n: учим английский"; break;
    case 5: echo "Класс $n: ходим на физ-ру"; break;
    case 6: echo "Класс $n: учим биологию"; break;
    case 7: echo "Класс $n: учим алгебру"; break;
    case 8: echo "Класс $n: учим историю"; break;
    case 9: echo "Класс $n: готовимся к пда"; break;
    case 10: echo "Класс $n: кайфуем"; break;
    case 11: echo "Класс $n: готовимся к зно"; break;
    default: echo "<span style=\"color:green;\">Такого класса у нас нет!</span>";
}