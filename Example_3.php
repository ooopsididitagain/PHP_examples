<?php
/*
 * Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел.
 * Рекомендую использовать функцию fmod для определения "делится число" или "не делится".
 */


function get_sum_of_delimiters($array_start, $array_end, $delimiter)
{
    if (is_int($array_start) and is_int($array_end) and is_int($delimiter)) {
        $array_of_numbers_that_are_divisible_by_delimiter = [];
        foreach (range($array_start, $array_end) as $value) {
            if (fmod($value, $delimiter) == 0) {
                array_push($array_of_numbers_that_are_divisible_by_delimiter, $value);
            }
        }
        return array_sum($array_of_numbers_that_are_divisible_by_delimiter) . '<br/>';
    } else {
        return 'Введите целое число. <br/>';
    }
}


echo get_sum_of_delimiters(20, 45, 5);
echo get_sum_of_delimiters(20.6, 45, 5);
