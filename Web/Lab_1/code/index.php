<?php
/** 1. Доступ по ссылке */

//Imagine a lot of code here
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name; // объявляем переменную как ссылку
$order .= " and two French fries ";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

/** 2. Числа */
// объявим переменную и присвоим значение 100 и выводим это число
$number1 = 100;
echo $number1;

// объявим вторую переменную и присвоим значение 255 и выводим это число в новой строке
$number2 = 255;
echo  "\n$number2";

// объявим третью переменную и присвоим значение 3.14 и выводим это число в новой строке
$number3 = 3.14;
echo  "\n$number3\n";

// напечатаем число 12 не используя само число 12
echo 2*10-8;

// высчитаем разницу рассходов
$last_month = 1187.23;
$this_month = 1089.98;
echo "\nРазница между рассходами составит: ", $last_month - $this_month, "\n";


