
<html>
    <head>
        <meta charset="UTF-8" />
        <title>PHP</title>
    </head>
<?php

$name = "Josh";
$pay = null;
$t_ch = 'Oplata proizvedena dannomu cheloveku:';
$t_p = '<br />v razmere:';
if($name == 'Josh'){
    $pay = 2000;
    echo $t_ch, $name, $t_p, $pay;
}
elseif($name == 'Vasya'){
    $pay = 300;
    echo $t_ch, $name, $t_p, $pay;
}
elseif($name == 'Kolya'){
    $pay = 3000;
    echo $t_ch, $name, $t_p, $pay;
}
elseif($name == 'Danil'){
    $pay = 500;
    echo $t_ch, $name, $t_p, $pay;
}
elseif($name == 'Gosha'){
    $pay = 5300;
    echo $t_ch, $name, $t_p, $pay;
}
else{
    $pay = 0;
    echo 'Оплата не проведена! Человек не найден';
}

#Тернарный оператор (? - сам тернарный оператор)
$shop = true;
echo ($shop) ? "Иду в магазин"/*выводит если true*/ : "Иду домой"/*выводит если false*/;

#Оператор switch
#Циклы









 ?>
