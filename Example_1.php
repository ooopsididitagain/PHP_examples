<?php
/*
Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
По желанию можете сделать проверку на корректность введения данных пользователем.
*/

function sum_of_numbers_in_a_number($number = 1)
{
    $result = 0;
    $sum_string = '';
    if (is_int($number)) {
        $number = strval($number);
        for ($i = 0; $i < strlen($number); $i++) {
            $result += $number[$i];
            $sum_string .= "$number[$i] + ";
        }
        $sum_string[-2] = '=';
        return ($sum_string) . ($result . '<br/>');
    } else {
        return 'Введите число. <br/>';
    }

}

echo sum_of_numbers_in_a_number();
echo sum_of_numbers_in_a_number(1254);
echo sum_of_numbers_in_a_number('test');