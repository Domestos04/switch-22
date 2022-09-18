<?php
$n = rand(1, 5);
switch ($n){
    case 1: echo "Класс $n: Учим буквы"; break;
    case 2: echo "Класс $n: Учим таблицу умножения"; break;
    case 3: echo "Класс $n: делаем упражнения"; break;
    case 4: echo "Класс $n: учим английский"; break;
    case 5: echo "Класс $n: ходим на физ-ру"; break;
    default: echo "<span style=\"color:green;\">Такого класса у нас нет!</span>";
}