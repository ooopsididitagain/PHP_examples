<?php
/*
Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры
в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
*/

function count_of_number($search_number = 1, $number = 111)
{
    $result = 0;
    if (is_int($number) and is_int($search_number)) {

        $number_to_string = strval($number);
        $length_of_string = strlen($number_to_string);

        for($i = 0; $i < $length_of_string; $i++){
            if($search_number == $number_to_string[$i]){
                $result += 1;
            }
        }
        return "Количество цифр $search_number в $number = " . $result . '<br/>';

    } else {
        return 'Введите целое число. <br/>';
    }
}

echo count_of_number(1, 111) . PHP_EOL;
echo count_of_number(1, 0) . PHP_EOL;
echo count_of_number(1, '111') . PHP_EOL;
echo count_of_number('1', 111) . PHP_EOL;
echo count_of_number(1) . PHP_EOL;