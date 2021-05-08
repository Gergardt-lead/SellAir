<html>
<head>
<meta charset="UTF-8" />
<title>Глобальные массивы в PHP</title>
<style>
a{
color:orange;
}
</style>
</head>

<body style="background-color:#343434; color:white;">
<?php
# get.php


// Ждем зрителей
// Наберитесь терпения и чая))


/*Темы урока:
1) Проверка дз
2) Глобальный массив $_GET
3) Глобальный массив $_POST
4) HTML поля и формы
*/

/*
Важные мелочи:
1) Все глобальные массивы доступны по всех облостях видимости
переменных.
2) В массив $_GET попадают данные из строки URL адреса
3) Строка с GET параметрами начинается с знака '?', после чего
указвается имя параметра, этму имени при помощи символа '='
присваивается значением.
4) Если необходимо передать несколько параметров, после имени
предыдущего параметра необходимо поставить разделитесь параметров
который является символом '&'.
5) Пример строки с двумя параметрами:
script.php?name=valentin&lastname=gurov
*/



echo "<pre>";
print_r($_GET);
echo "</pre>";

if($_GET['location'] and $_GET['street']){
echo "Я живу с стране которая называется ".$_GET['location'].'. Живу на улице '.$_GET['street'];
}else{
echo "Недостаточно данных для исполнения скрипта!";
}


function createTable($rows, $cols, $tableSize, $borderColor, $headColor, $fieldsColor){
echo "<table border='$tableSize' bordercolor='$borderColor'>";
for($i = 1; $i <= $rows; $i++){
echo "<tr>";
for($j = 1; $j <= $cols; $j++){
if($j == 1 or $i == 1) echo "<td style='background-color:$headColor; font-weight:bold; text-align:center;'>";
else echo "<td style='background-color:$fieldsColor;'>";
echo $i * $j;
echo "</td>";
}
echo "</tr>";
}
echo "<table>";
}

if($_GET['rows'] and $_GET['cols'] and $_GET['borderSize'] and $_GET['borderColor'] and $_GET['headColor'] and $_GET['fieldsColor']){
createTable($_GET['rows'], $_GET['cols'], $_GET['borderSize'], $_GET['borderColor'], $_GET['headColor'], $_GET['fieldsColor']);
}else{
echo "<h3 style='color:red;'>Вы прислали недостаточное количество параметров отображения таблицы! Генерация таблицы не возможна! <br/> <a href='get.php?rows=5&cols=7&borderSize=10&borderColor=orange&headColor=black&fieldsColor=gray'>Сгенерировать тестовую таблицу</a></h3>";
}


/*
Передайте необходимые аргументы для функции генерации
таблицы умножения с помощью параметров GET.

* Постарайтесь сделать проверку, которая не допустит
запуск функции, если хотя бы один из параметров функции
не был отправлен.
*/


// $_GET;




// $_POST;
// $_SESSION;
// $_COOKIE;

// $_SERVER;
// $_FILES;

// $GLOBALS;



// function giveMeArrayInDisplay(){
// echo count($_GET);
// }

// giveMeArrayInDisplay();


?>
</body>
</html>

<html>
<head>
<meta charset="UTF-8" />
<title>Глобальные массивы в PHP часть 2</title>
<style>
a{
color:orange;
}
</style>
</head>

<body style="background-color:#343434; color:white;">
<?php
# post.php


// Ждем зрителей
// Наберитесь терпения и чая))


/*Темы урока:
1) Проверка дз
2) Глобальный массив $_GET
3) Глобальный массив $_POST
4) HTML поля и формы
*/

/*
Важные мелочи:
1)
*/


function createTable($rows, $cols, $tableSize, $borderColor, $headColor, $fieldsColor){
echo "<table border='$tableSize' bordercolor='$borderColor'>";
for($i = 1; $i <= $rows; $i++){
echo "<tr>";
for($j = 1; $j <= $cols; $j++){
if($j == 1 or $i == 1) echo "<td style='background-color:$headColor; font-weight:bold; text-align:center;'>";
else echo "<td style='background-color:$fieldsColor;'>";
echo $i * $j;
echo "</td>";
}
echo "</tr>";
}
echo "<table>";
}

createTable($_POST['rows'], $_POST['cols'], 1, 'yellow', 'red', 'blue');



/*
1) Необходимо произвести вывод таблицы умножения с данными которые передаются
из полей при помощи массива $_POST.
2) Т.е надо создать достаточное количество полей для
того что бы передать данные в аргументы функции которая генерирует таблицу
умножения.
*/

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// if($_POST['login'] == 'root' and $_POST['password'] == 'ZTER01'){
// echo

"Секретный ключ доступа: ZTRE-07DE-55IL-PKPS";
// }else{
// echo «<HTML
// <h3>Вы не авторизованы либо неправильно ввели данные:</h3>
// <form method="POST" action="">
// <input type="text" name="login" placeholder="Введите логин" />
// <input type="password" name="password" placeholder="Введите пароль" />
// <input type="submit" />
// </form>
// HTML;
// }


?>
<form method="POST" action="">
<input type="number" name="rows" placeholder="количество строк" />
<input type="number" name="cols" placeholder="количество ячеек" />
<input type="submit" />
</form>

</body>
</html>
