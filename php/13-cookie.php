<?php
session_start();

setcookie("userName", 'Vasya', time()+3600*24);
?>
<html>
<head>
<meta charset="UTF-8" />
<title>Куки в PHP</title>
<style>
a{
color:orange;
}
</style>
</head>

<body style="background-color:#343434; color:white;">
<?php
# cookie.php

/*
Важные мелочи:
1) Куки в отличии от сейсий - долгосрочно хранят данные.
2) Данные из кук хранятся на комрьютере пользователя
3) Куки могут быть удаленый пользователем или сервером который
их отправил (при помощи срокагодности кук).
*/

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo "ID сессии на сервере: ".$_COOKIE['PHPSESSID'];

/*Задание по кукам:
Задание по авторизации сделать с помощью кук, без сесий.
*/


?>
</body>
</html>
