<?php
$class = rand(1, 4);
switch ($class){
    case 1: echo "Учим буквы"; break;
    case 2: echo "Учим таблицу умножения"; break;
    case 3: echo "делаем упражнения"; break;
    case 4: echo "учим английский"; break;
    case 5: echo "ходим на физ-ру"; break;
    default: echo "<span style=\"color:green;\">Такого класса у нас нет!</span>";
}