<?php
phpinfo();

// ЗАДАНИЕ 1: 
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_map('strtoupper', $arr);
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
echo "Результат: " . implode(", ", $result) . "<br><br>";

// ЗАДАНИЕ 2 
$arr = ['a', 'b', 'c', 'd', 'e'];
$lastIndex = count($arr) - 1;
echo "Последний элемент массива: " . $arr[$lastIndex] . "<br><br>";

// ЗАДАНИЕ 3
$arr = [1, 2, 3, 4, 5];
if (in_array(3, $arr)) {
    echo "Элемент со значением 3 найден<br><br>";
} else {
    echo "Элемент со значением 3 не найден<br><br>";
}

// ЗАДАНИЕ 4
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$merged = array_merge($arr1, $arr2);
echo "Результат объединения: " . implode(", ", $merged) . "<br><br>";

// ЗАДАНИЕ 5
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3); // начиная с индекса 1, длиной 3
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
echo "Срез (2, 3, 4): " . implode(", ", $result) . "<br><br>";

// ЗАДАНИЕ 6
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
echo "Массив: ";
print_r($arr);
echo "<br>Ключи: " . implode(", ", $keys) . "<br>";
echo "Значения: " . implode(", ", $values) . "<br><br>";

// ЗАДАНИЕ 7
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$assoc = array_combine($keys, $values);
echo "Результат array_combine: ";
print_r($assoc);
echo "<br><br>";

// ЗАДАНИЕ 8
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr);
echo "Позиция первого элемента '-': " . $position . "<br><br>";

// ЗАДАНИЕ 9
$arr = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];
print_r($arr);
echo "<br>";

$arr_asort = $arr;
asort($arr_asort);
echo "asort";
print_r($arr_asort);
echo "<br>";

$arr_arsort = $arr;
arsort($arr_arsort);
echo "arsort";
print_r($arr_arsort);
echo "<br>";

$arr_ksort = $arr;
ksort($arr_ksort);
echo "ksort";
print_r($arr_ksort);
echo "<br>";

$arr_krsort = $arr;
krsort($arr_krsort);
echo "krsort";
print_r($arr_krsort);
echo "<br>";

$arr_sort = $arr;
sort($arr_sort);
echo "sort";
print_r($arr_sort);
echo "<br><br>";

// ЗАДАНИЕ 10
$str = '1234567890';
$digits = str_split($str);
$sum = array_sum($digits);
echo "Строка: $str<br>";
echo "Массив цифр: " . implode(", ", $digits) . "<br>";
echo "Сумма цифр: $sum<br><br>";

// ЗАДАНИЕ 11
$arr = array_fill(0, 10, 'x');
echo "Массив из 10 'x': " . implode(", ", $arr) . "<br><br>";

// ЗАДАНИЕ 12
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$common = array_intersect($arr1, $arr2);
echo "Первый массив: " . implode(", ", $arr1) . "<br>";
echo "Второй массив: " . implode(", ", $arr2) . "<br>";
echo "Общие элементы: " . implode(", ", $common) . "<br>";
?>
