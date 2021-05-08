<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $var = 123;
            $test = 321;
            $name1 = 'Gale';
            $name2 = 'Stone';

            function sayText(){
                global $var, $test;

                echo $var, $test;
                echo '<br />'
            }

            saytext();

            $name = 'Gergard';
            function sayMyName(){
                echo sayMyName();
            }

            sayMyName();

            # function2.php


// Ждем зрителей
// Наберитесь терпения и чая))


/*Темы урока:

1) Проверка д\з
2) Работа с облостями видимости
2.1) Ключевое слово global
2.2) Сверх-глобальная переменная (массив) GLOBALS.
Глобальные массивы - доступны в любых облостях видимости
3) Статические переменные
4) Возвращение значения
5) Больше возможностей работы с аргументами функций
6) Уточнение типа аргумента

*/



// $var = 123;
// $test = 321;
// $name1 = 'Josh';
// $name2 = 'Drake';


// function sayName($name1){
// global $name1;

// echo $name1;
// }

// sayName('Valentin');


/*
Практика по первому занятию
1) Создать переменную $name значением в виде своего имени
2) Создать функцию sayMyName
3) В теле описанной функции выведите на экран значение глобальной
переменной $name (двумя способами)

Решить до 18.30;

*/








# Возвращение значения из функции
/*
1) Оператор RETURN возвращает какое либо значение как результат
работы функции в которой данный оператор применяется
2) Использование данного опператор не обязательно
3) Использование данного оператор в теле функции останавливает
исполнение функции в месте, где вызывается данный оператор
4) Если внутри тела функции не используется оператор RETURN, функция
возвращает NULL
*/

// function thisIsText($text){
// if(is_string($text)) return 'Yes, this is text!';
// else return 'No, this not a text!';
// }


// echo thisIsText(123123);


// $var = gettype($value);
// $sum = strlen($value);
// $isText = is_string();

// $array = [1,2,3];

// var_dump($array);
// define();




/*
Больше возможностей работы с аргументами функций

1) func_num_args(); // возвращает количество присланных в функцию аргументов

2) func_get_args(); // возвращает массив присланных в функцию аргументов

3) func_get_arg(); // возвращает указанный аргумент (по индексу)


*/





// function name(){
// echo "В функцию прислали ".func_num_args()." аргументов<br/>";
// echo "<pre>";
// print_r(func_get_args());
// echo "</pre>";


// echo func_get_arg(5);
// }

// name(1,2,3,4,5,"Hey!", "!", 0,false, 'red', null, null, 1);
// name(1,false, 'red', null, null, 1);
// name();








/*
Домашнее задание:
1) Опишите функцию, которая будет принимать или не принимать
аргументы.
2) В случае, если аргументы были отправленны, необходимо вывести
на экран сообщение о том, что аргументы были получены.
3) В случае, если аргументы не отправляли при вызове функции,
вывести на экран сообщение об этом.
4) Вызвать описанную функцию несколько раз с аргументами и без.
*/

# Уточнение типа аргумента

// function getMeUserProfile(array $userProfile){
// echo "ok, this is array";
// }

// getMeUserProfile(['root', 'asdDE_FjX01', 'Almaty']);


# Статические переменные

function name(){
static $count;
// ...

if($count > 20) {
echo "Функция вызвалась уже целых 20 раз, прекращай!";
return;
}
else $count++;
}

name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
name();
















         ?>
    </body>
</html>
