<form action="check.php" method="post">

    <p>Имя: <input name="name" type="text"></p>

    <p>Фамилия: <input name="surname" type="text"></p>

    <p>E-mail: <input name="email" type="text"></p>

    <p>Сообщение: <br /><textarea name="message" cols="30" rows="5"></textarea></p>

    <p><input type='submit' value='Отправить'></p>

</form>

<?php

function summ_of_numbers_in_number($number = 1) {
    $result = 0;
    $summ_string = '';
    if (is_int($number)){
        $number = strval($number);
        for($i = 0; $i < strlen($number); $i++){
            $result += $number[$i];
            $summ_string .= "$number[$i] + ";
        }
        $summ_string[-2] = '=';
        return ($summ_string). ($result . '<br/>');
    } else {
        return 'Введите число. <br/>';
    }

}

echo summ_of_numbers_in_number();
echo summ_of_numbers_in_number(1254);
echo summ_of_numbers_in_number('test');


?>



<?php

//# Массивы
//$my_array3 = array('1' => 'first element', '2' => 3);
//echo '<br>';
//$my_array3[] = 21;
//foreach ($my_array3 as $key => $value) {
//    echo $key . ' = ' . $value . '<br/>';
//}
//unset($my_array3[3]);
//
//# Функции
//echo '<hr/>';
//
//function summary($num1, $num2)
//{
//    return $num1 + $num2;
//}
//
//echo summary(17, 76);
//?>

