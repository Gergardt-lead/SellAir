<?php
    session_start()


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            // echo "<pre>";
            //     print_r($GLOBALS);
            // echo "</pre>";
            //
            // unset($_COOKIE);
            //
            // setcookie('login', $_POST['login']);
            // setcookie('password', $_POST['password']);
            //
            //
            //
            // $itsMyDay = mktime(10, 5, 20, 8, 13, 2003);

            $date = getdate(time());

            echo '<pre>';
                print_r($date);
            echo '</pre>';
            if($_SESSION['lastMyVisit'])

            echo 'Посещал:'.' '.$date['weekday'].' '.$date['mday'].$date['mont'];

                echo 'в '.$date['minutes'].':'.$date['seconds'];
                if($date['hours' > 12]) echo 'AM';
                else echo 'PM';
                //Валентин, подскажи пожалуйста как правильно написать






                # datetime.php


                // Ждем зрителей
                // Наберитесь терпения и чая))


                /*Темы урока:
                1) Проверка дз
                2) Работа с функциями времени
                —--------------------------—
                3) Работа с генерацией паролей
                4) Работа с сериализацией данных
                5) Практика (создаем корзину с товарами)
                —--------------------------—
                */

                /*
                Важные мелочи:
                1) time() - возвращает временную метку нынешнего времени
                2) getdate() - возвращает массив с удобно читаемой информацией на
                указанную в первом аргументе временную метку (можно не указывать)
                3)
                */

                function translateMonthName($montName){
                $ruName = '';

                switch($montName){
                case "January":
                $ruName = 'Января';
                break;
                case "February":
                $ruName = 'Февраля';
                break;
                case "March":
                $ruName = 'Марта';
                break;
                case "April":
                $ruName = 'Апреля';
                break;
                case "May":
                $ruName = 'Мая';
                break;
                case "June":
                $ruName = 'Июня';
                break;
                case "July":
                $ruName = 'Июля';
                break;
                case "August":
                $ruName = 'Августа';
                break;
                case "September":
                $ruName = 'Сентября';
                break;
                case "October":
                $ruName = 'Октября';
                break;
                case "November":
                $ruName = 'Ноября';
                break;
                case "December":
                $ruName = 'Декабря';
                break;

                }

                return $ruName;
                }

                function getMeDateInfoInStr($time){
                $date = getdate($time);
                return "<span style='color:yellow;'>".$date['mday']."</span> ".translateMonthName($date['month']).' '.$date['year'].' в <span style="color:green;">'.$date['hours'].':'.$date['minutes'].':'.$date['seconds']."</span>";
                }

                echo "Вы просмотрели страницы нашего сайта уже целых <b>".count($statsData)."</b> раз";
                echo "<br /><br /> Первое посещение сайта: ".getMeDateInfoInStr($statsData[0][0]);
                echo "<br /><br /> Последнее посещение сайта: ".getMeDateInfoInStr($statsData[count($statsData) - 2][0]);

                echo "<br /><br /> Список всех посещений:";
                foreach($statsData as $value){
                echo "<br />Вы посетили страницу сайта в: ".getMeDateInfoInStr($value[0])." файл <span style='color:orange;'>".$value[1]."</span>";
                }

                // временная метка
                // это набор чисел состоящий из количества секунд
                // которые прошли с момента запуска компьютерного времени, которое было запущенно
                // в
                // 1970 году, 30 января


                // echo time();

                // 1590754925
                // 111111111









                // Практическое задание по работе с временем:
                /*
                При помощи сессий создайте массив с информацие о том, сколько раз и когда
                Вы посещали страницы данного сайта.
                */

                /*
                Домашнее задание:
                Перенести систему статистики на куки.
                */























        ?>
        <!-- <form class="" action="index.html" method="post">
            <input type="text" name="login" placeholder="login" value="" />
            <input type="password" name="password" placeholder="password" value="" />
            <input type="submit" />
        </form> -->
    </body>
</html>
