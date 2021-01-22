<?php
/*
 * Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
 * найти максимальное и минимальное значение массива и поменять их местами.
 */


function max_and_min_value_change($first_start_number = 1, $first_end_number = 100, $second_start_number = 1,
                                  $second_end_number = 100)
{
    if (!is_int($first_start_number) or !is_int($first_end_number) or !is_int($second_start_number)
        or !is_int($second_end_number)) {
        return 'Вводите только целые числа.';

    }
    $random_array = range(rand($first_start_number, $first_end_number), rand($second_start_number, $second_end_number));
    shuffle($random_array);
    $max_value = max($random_array);
    $min_value = min($random_array);
    $max_value_index = False;
    $min_value_index = False;
    foreach ($random_array as $key => $value) {
        if ($value == $max_value) {
            $max_value_index = $key;
        } elseif ($value == $min_value) {
            $min_value_index = $key;
        }

    }
    $random_array[$max_value_index] = $max_value;
    $random_array[$min_value_index] = $min_value;

    return $random_array;

}

var_dump(max_and_min_value_change());

