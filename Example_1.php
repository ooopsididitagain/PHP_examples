<?php
/*
 * Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 * По желанию можете сделать проверку на корректность введения данных пользователем.
*/

function sum_of_numbers_in_a_number($number = NAN)
{

    if ($number > 0) {
        $array_num = str_split($number);

        return 'Результат - ' . array_sum($array_num) . '<br/>';
    } else {
        return 'Введите целое число. <br/>';
    }

}

echo sum_of_numbers_in_a_number();
echo sum_of_numbers_in_a_number(1254);
echo sum_of_numbers_in_a_number(1254.2);
echo sum_of_numbers_in_a_number('test');