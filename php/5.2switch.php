<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        #Оператор switch
        $shop = 'close24223232';
        switch ($shop) {
            case 'open':
                echo 'Иду в магазин';
                break;
            case 'close':
                echo 'Ищу другой магазин';
            break;
            case 'Don t worry please':
                echo 'Паника!!! Коронавирус уже у нас';
                break;
            default:
                echo '<br />I am not afraid
                <br />I am not afraid';
                break;
        }















         ?>
    </body>
</html>
