<?php
    $action = $_GET['action'];
    $content = "";
    $error = ''; //Для ошибок


    $db = mysqli_connect('localhost', 'root', '', 'sellair');

    if($action === 'news' ){
        $actTitle .= 'Новости интернет магазина';
        $contentTitle .= 'Все новости';

        $tmpFile = 'news.php';
    }elseif($action === 'basket'){
        $actTitle .= 'Корзина';
        $contentTitle .= 'Корзина ваших покупок';

        $tmpFile = 'basket.php';
    }elseif($action === 'contacts'){
        $actTitle .= 'Контакты';
        $contentTitle .= 'Контакты компании';

        $tmpFile = 'contacts.php';
    }elseif($action === 'category'){
        $actTitle .= 'Промотр категории товаров';
        $contentTitle .= 'Категория';

        $tmpFile = 'category.php';
    }elseif($action === 'item'){
            $actTitle .= 'Промотр орпределенного товара';
            $contentTitle .= 'Страница товара';

            if($db){
                $itemId = (int) $_GET['id'];
                if($itemId){
                    $selectItem = "SELECT * FROM `items` WHERE id='{$itemId}'";

                    if($result = mysqli_query($db, $selectItem)){
                        $item = mysqli_fetch_assoc($result);

                        if($item){
                            // echo '<pre>';
                            //     var_dump($item);
                            // echo '<pre>';

                            $actTitle = $item['itemName'];
                        }else{
                            $error .='Товара с таким id нет';
                        }
                    }else{
                        $error .= "<b>Ошибка:</b> не удалось выполнить запрос на получение записи из базы";
                    }
                }else{
                    $error .= "Ошибка: не указан id товара";
                }
            }else{
                $error .= "Ошибка подключения к базе данных";
            }

            $tmpFile = 'item.php';
    }else{
        $actTitle .= 'Главная страница';
        $contentTitle .= 'Главная страница магазина SellAIR';

        $tmpFile = 'main.php';
    }

    if($db){
        $selectAllItems = "SELECT * FROM `items`";

        if($result = mysqli_query($db, $selectAllItems)){
            $allItems = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // echo "<pre>";
            //     var_dump($allItems);
            // echo "</pre>";
        }else{
            $error .= 'Ошибка запроса в базу: не могуполучить список товаров';
        }
    }else{
        $error .= "Ошибка подключения к базе данных";
    }

    include('template.php');






















 ?>
