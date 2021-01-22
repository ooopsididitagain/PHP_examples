<?php
/*
 * Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры
 * в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
*/


function count_of_number($search_number = 1, $number = 111)
{

    if (is_int($number) and is_int($search_number)) {
        return count(array_filter(str_split($number), function ($k) use ($search_number) {
                return $k == $search_number;
            },)) . '<br/>';

    } else {
        return 'Введите целое число. <br/>';
    }
}

echo count_of_number(1, 111) . PHP_EOL;
echo count_of_number(2, 2222222) . PHP_EOL;
echo count_of_number(1, 0) . PHP_EOL;
echo count_of_number(1, '111') . PHP_EOL;
echo count_of_number('1', 111) . PHP_EOL;
echo count_of_number(1) . PHP_EOL;