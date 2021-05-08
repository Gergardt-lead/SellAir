<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        // function getMeArgs() {
        //     $name = func_num_args();
        //
        //     if($name) echo 'Аргумент пришел хазяина :) <br/>';
        //     else echo 'Шибильме начальнике, ничего нет <br/>';
        // }
        // getMeArgs(1,2,3,1,3);
        // getMeArgs();
        // getMeArgs(null);
        // getMeArgs()
        //
        // define() - создает константу
        // echo() - выводит текст на экран
        // print() - выводит текст на экран
        // print_r() - выводит текст на экран
        // var_dump() - запутался в том что делает
        // gettype() - присылает тип данных
        // settype() - присваивает тип данных
        // is_string() - возвращает true если строка
        // is_bool() - возвращает true если булеан
        // is_int() - возвращает true если число
        // is_float() - возвращает true если
        // is_array() - возвращает true если массив
        // is_null() - возвращает тип данных равный
        // isset()
        // empty()
        // error_reporting() - отправляет ошибку
        // func_num_args() - показывает количество аргументов
        // func_get_args() -  возвращает аргументы в функцию
        // func_get_arg() - возвращает указанный аргумент в функцию
        // count()
        //

        $text = 'Loren ipsum text. |Hello my friend. |i am a best programmer. |Top programmer in the world! ';
        $array = explode( '|', $text);
        echo $array,' <br /> ';

        $num = 12;
        $text2 = '...       Hello world!       ...';
        echo trim($text2),'<br/>';

        $text3 = 'V|s|e|m| |p|r|i|v|e|t|!';
        $array2 = explode('|', $text3);
        echo $array2;










        ?>

    </body>
</html>
