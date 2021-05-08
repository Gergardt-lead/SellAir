<?php
session_start();
?>
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
# session.php





// Ждем зрителей
// Наберитесь терпения и чая))


/*Темы урока:
1) Проверка дз
2) Глобальный массив $_SESSION;
3) Практика в работу с $_SESSION;
4) Глобальный массив $_COOKIE;
4) Практика в работе с $_COOKIE;
*/


/*
Важные мелочи:
1) Поддержку сессий пользователя необходимо подключать
до того, как что либо будет отправленно на экран.
2) При помощи функции unset() мы можем удалять данные из
массивка $_SESSION;
*/



echo "<pre>";
print_r($GLOBALS);
echo "</pre>";


if($_GET['logout']) unset($_SESSION['login'], $_SESSION['password']);


if($_SESSION['login']){ // если в ячейке есть данные, значит уже авторизован
echo "Вы уже авторизованы, Ваш логи: ".$_SESSION['login']."<br />
<a href='/session.php?logout=true'>Выход из аккаунта.</a>";
}else{ // не авторизован
if($_POST['login'] and $_POST['password']){
echo "Вы удачно авторизовались! Ваш логин: ".$_POST['login'].", <a href='/session.php?logout=true'>выйти из аккаунта</a>";
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
}else{
echo '
<p>Вы не авторизованы</p>
<form method="POST" action="">
<input type="text" name="login" placeholder="Введите логин" />
<input type="password" name="password" placeholder="Введите пароль" />
<input type="submit" />
</form>';
}
}








/*Задание по сессиям:
1) В файле session.php создать форму с полями "login" и "password"
2) В файле session.php создать условие, которое проверяет, авторизован
ли пользователь (смотрим в массив Session, если есть ячейки login и password)
то пишем о том, что пользователь авторизован и выводим его логин и ссылку на
деавторизацию
3) Если польователь не авторизован, выводим форму для отправки логина и пароля
4) Если ячейки login и password глобального массива $_POST Заполнены, записываем
полученные данные в глобальный массив $_SESSION.
5) В файле session_test.php проверить авторизован пользователь или нет

?logout=true

if($_GET['logout'])

*/

?>
</body>
</html>
