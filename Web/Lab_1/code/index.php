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

/** 3. Умножение и деление */
// Поможем Мэг посчитать стольок дней в среднем у неё ушло на изучение каждого языка программирования
$num_languages = 4; // столько языков программирования знает Мэг
$month = 11; // столько месяцев она поратила на обучение
$days = $month * 16; // стольок дней занималась Мэг (по её мнению)
$days_per_language = $days/$num_languages; // столько дней в среднем у неё ушло на изучение каждого языка
echo "В среденем на изучение одного языка Мэг потратила:  $days_per_language\n";

/** 4. Степень */
echo "8^10 = ", 8**10, "\n";// возвели 8 в 10 степень

/** 5. Операторы присваивания */
$my_num  = 666; // создаём переменную и присваиваем значение
$answer = $my_num; // 1) создаём новую переменную и присаиваем ей значение первой переменной
$answer += 2; // 2) прибавляем 2
$answer *= 2; // 3) умножаем на 2
$answer -= 2; // 4) вычитаем 2
$answer /= 2; // 5) делим на 2
$answer -= $my_num; // 6) вычитаем изначальное значение
echo "$answer\n";

/** 6. Математические функции */
// Найдем остаток от деления 10 на 3
$a = 10;
$b = 3;
echo "Остаток деления $a на $b:",$a%$b,"\n";

// Сделаем проверку число делится с остатком или нет
$a = 12;
$b = 5;
if ($a % $b == 0) { echo "Делится: ", $a/$b, "\n"; }
else { echo "Делится с остатком: ",$a % $b, "\n";}

// Работаем со степенью и корнями
$st = pow(2,10); // возводим в степень
echo "$st\n";

$sqr = sqrt(245); // находим корень
echo  "$sqr\n";

// вычислили корень суммы квадратов элементов массива
$mas = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($mas as $i)
{
    $sum += pow($i, 2);
}
$res = sqrt($sum);
echo "$res\n";

// Функции округления
$sqrt = sqrt(379);
$sqrtInt = round($sqrt); // округляем до целых
echo "$sqrtInt\n";
$sqrtFloat1 = round($sqrt,1); // округляем до делятых
echo "$sqrtFloat1\n";
$sqrtFloat2 = round($sqrt, 2); // округляем до сотых
echo "$sqrtFloat2\n";

$sqrt = sqrt(587);
$mas1 = [
    'floor' => floor($sqrt), // округляем в меньшую сторону
    'ceil' => ceil($sqrt) // округляем в большкю сторону
];
echo $mas1['floor'], "\n", $mas1['ceil'], "\n";

// Работа с min и max
$masMin = [4, -2, 5, 19, -130, 0, 10];
$min = min($masMin); // Находим минимальное число из массива
$max = max($masMin); // Находим максимальное число из массива
echo "Минимальное значение: $min\n и максимальное значение: $max\n";

// Работа с рандомаом
$rand = rand(0, 100); // создаётся случайное число
echo "Случайное число от 0 до 100: $rand\n";

// заполняю массив 10-ю разными числами
$masRand = [];
for ($i = 0; $i < 10; $i++)
{
    $masRand[$i] = rand(0,200);
}
var_dump($masRand);
echo "\n";

// Работа с модулем
$a = 9;
$b = 12;
$module = abs($a-$b); // находим модуль разности
echo "Модуль разности $a и $b равен $module\n";

// Сделать из массива где есть отридцательные чила в массив толькок с положительными
$masNegNum = [1, 2, -1, -2, 3, -3];
$masPosNum = [ ];
$i = 0;
foreach ($masNegNum as $value)
{
    $masPosNum[$i] = abs($value); // Берём модуль числа и сохроняем его в новый массив
    $i++;
}
var_dump($masPosNum);
echo "\n";

// Общее

//создасть массив, хронящий делители какого-то числа
$num = 15; // заданное число
$divisors = []; // будующий массив с делителями
$count = 0; // индекс нашего массива
for ($i = 1; $i <= 30; $i++)
{
    if ( $num % $i == 0) // если остаток от деления равен 0 то это делитель
    {
        $divisors[$count] = $i;
        $count++;
    }
}
echo "Делители числа $num: ";
var_export($divisors);
echo "\n";

// Узнайте, сколько первых элементов массива нужно сложить, чтобы сумма получилась больше 10
$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];// наш массив
$sum = 0; // сумма элементов
$count = 0; // количество элементов
foreach ($mas as $ma)
{
    if ($sum <= 10)
    {
        $sum += $ma;
        $count++;
    }
}
echo "Перыве $count элемента(ов) надо, чтобы сумма была больше 10\n";

/** 7. Функции */
// Функция, которая печатает текс и вохвращает число
function  printStringReturnNumber()
{
    echo "С 8 мартом!!!\n";
    return 8;
}
$my_num = printStringReturnNumber();
echo "$my_num\n";

// Функция, которая добовляет '!' к строке
function increaseEnthusiasm($string)
{
    return $string .= '!';
}
$string = 'С 8 мартом';
$string = increaseEnthusiasm($string);
echo "$string\n";

//  Функция, которая утраивает строку
function  repeatThreeTimes($string)
{
    return $string.$string.$string;
}
$string1 = 'Счастливого праздника';
$string1 =  repeatThreeTimes($string1);
echo "$string1\n";

echo increaseEnthusiasm(repeatThreeTimes(increaseEnthusiasm('Привт мир'))), "\n"; // используем 2 функции сразу

// Функция, которая печатает определённое количесиво первых символов в тексте
function cup($string, $int = 10)
{
    return $string = substr($string, 0, $int*2); // делаю уножение на 2 т.к без этого выводит половину
                                                             //  от количества которое надо
}

echo cup("КакойХорошийДень"), "\n";

// Работаем с рекурисией
function  echoArray($mas, $i = 0) // функция рекурсивно выводит массив
{
    if ($i <sizeof($mas)) // если элемент меньше размера массива
    {
        echo "$mas[$i] "; // то выводим значение под этим индексом
        echoArray($mas, $i+1); // вызывем рекурсивно функциию, но увеличив значение $i
    }
}
$masRec = [10, 1, 2, 4, 5, 11, 123, 234];
echoArray($masRec);
echo "\n";

//Функция складывает цифры числа. Если сумма получилась более 9-ти, опять складывает его цифры. И так, пока сумма не
// станет однозначным числом (9 и менее)
function sumNum($num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = floor($num / 10);
    }
    if ($sum > 9) {
        return sumNum($sum);
    }
    return $sum;
}
echo sumNum(12), "\n";

/** 8. Массивы */
// функция, котороя заполняет массив (колличество элементов сами определяем) "x",
// в каждом последующем элементе на 1 "х" больше
function musX($count)
{
 $res = ['x'];
 for ($i = 1; $i < $count; $i++)
 {
     $res[$i] = $res[$i-1].'x';
 }
 return $res;
}
echoArray(musX(5));
echo "\n";

//функция, которая заполняет массив заданными значениями
function  arrayFill($syb, $count)
{
    $res = [];
    for ($i = 0; $i < $count; $i++)
    {
        $res[$i] = $syb;
    }
    return $res;
}

echoArray(arrayFill('a', 8));
echo "\n";

//Функция, которая считает сумму элементов 2-мерного массива
function SumArrayElement($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        for ($j = 0; $j < count($array[$i]); $j++)
        {
            $sum += $array[$i][$j];
        }
    }
    return $sum;
}

$Array2d = [[1,2,3],[4,5],[6]];
echo SumArrayElement($Array2d), "\n";

// Создадим с помощью 2 цикла  2-мерный массив
$num = 1;
for ($i = 0; $i < 3; $i++)
{
    for ($j = 0; $j < 3; $j++)
    {
        $array2D[$i][$j] = $num;
        $num++;
    }
}
var_export($array2D);
echo "\n";

// Операция над элементами массива
$ar = [2, 5, 3, 9];
$result = ($ar[0]*$ar[1])+($ar[2]*$ar[3]);
echo "$result\n";

// работаем с ключами массива (ФИО)
$user = ['name' => 'Kirill', 'surname' => 'Lapshin', 'patronymic' => 'Danilovuch'];
echo "$user[surname] $user[name] $user[patronymic]\n";

// работаем с ключами массива (дата)
$data = ['year' => 2024, 'month' => 3, 'day' => 05];
echo "$data[year] $data[month] $data[day]\n";

//Дан массив
$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr), "\n"; // 1)
echo "$arr[4]\n";// 2)

/** 9. Конструкция if else */
// Функция, которая выводит "true" ели сумма 2-х чисел больше 10
function more10($num1, $num2)
{
    if ($num1+$num2 > 10)
        return True;
    else
        return False;
}
echo more10(2, 2), "\n";

// Функция, которая вернёт "true" если числа равны
function equal($num1, $num2)
{
    if ($num1 == $num2)
        return True;
    else
        return False;
}
echo equal(2, 2), "\n";

// перепишем в сокращенной форме
$test = 0;
//if ($test == 0) {
//		echo 'верно';
//	}
if ($test == 0) echo 'верно';
echo "\n";

//прверям входит ли число в диапозон и смотрим какое это число двузначно или однозначно
$age = 47;
if ($age > 10 && $age < 99)
{
    if ($age%10+($age%10)%10 > 9) echo "Данное чило двузначна\n";
    else echo "Данное чило однозначна\n";
}
else echo "Данное чило не вродит в диапозон [10,99]\n";

// Проверка в массиве 3 элемента и если так то выводим их сумму
$arr = [32, 23, 343];
if (sizeof($arr) == 3) echo array_sum($arr), "\n";
else echo  "В массиве ", sizeof($arr), " элемента(ов)\n";

