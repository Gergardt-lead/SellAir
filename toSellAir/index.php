<?php
	// включаем сессию
	session_start();

	$action = $_GET['action'];
	$content = "";
	$error = ''; // для ошибок
	
	// подключение библиотек
	include('functions.php');
	
	// Подключение к базе данных
	$db = mysqli_connect('localhost', 'root', "", "astore");
	
	if($action === "news"){
		$act_title = "Новости интернет магазина";
		$content_title = "Все новости сайта";
		
		$tmpFile = 'news.php';
	}
	elseif($action === "basket"){
		$act_title = "Ваша корзина";
		$content_title = "Просмотр корзины товаров";
		
		$tmpFile = 'basket.php';
		
	}elseif($action === "contacts"){
		$act_title = "Контакты интернет магазина AStore";
		$content_title = "Контакты компании";
		
		$tmpFile = 'contacts.php';
		
	}elseif($action === "category"){
		$act_title = "Просмотр определенной категории товаров";
		$content_title = "Просмотр категории";
		
		$categoryId = (int) $_GET['id'];
		
		if($categoryId AND $allCategory[$categoryId]){
			$act_title = "Товары из категории '".$allCategory[$categoryId]."'";
			$content_title = "Все товары из категории '".$allCategory[$categoryId]."'";
			
			$selectAllInCategory = "SELECT * FROM `items` WHERE itemCategory='{$categoryId}' ORDER BY id DESC";
			
			if($result = mysqli_query($db, $selectAllInCategory)){
				$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
			}else{
				$error .= "Ошибка: Не удалось получить список всех товаров из категории";
			}
		}else{
			$error .= "Ошибка: не указан ID категории";
		}
		
		$tmpFile = 'category.php';
	}elseif($action === "item"){
		$act_title = "Просмотр товара";
		$content_title = "Страница товара";
		
		if($db){
			$itemId = (int) $_GET['id'];
			
			if($itemId){
				$selectItem = "SELECT * FROM `items` WHERE id='{$itemId}'";
				
				if($result = mysqli_query($db, $selectItem)){
					$item = mysqli_fetch_assoc($result);
					
					if($item){
						if($item['itemDopImg']){
							$dopImg = unserialize($item['itemDopImg']);
						}
						
						$act_title = $item['itemName'];
						$content_title = $item['itemName']." <a href='/admin.php?action=edititem&id={$item['id']}' target='_Blank'><span class='glyphicon glyphicon-edit gly-edit-item'></span></a>";
					}else{
						$error .= "Товара с таким ID нет";
					}
				}else{
					$error .= "<b>Ошибка:</b> Не удалось выполнить запроса на получение записи и базы";
				}
			}else{
				$error .= "<b>Ошибка:</b> не указан ID товара";
			}
		}else{
			$error .= "<b>Ошибка:</b> Нет подключение к базе данных";
		}
		
		$tmpFile = 'item.php';
	}else{
		$act_title = "Главная странциа интернет магазина AStore";
		$content_title = "Магазин компьютерных технологий 'STORE.KZ'";
		
		if($db){
			$selectAllItems = "SELECT * FROM `items`";
			
			if($result = mysqli_query($db, $selectAllItems)){
				$allItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
			}else{
				$error .= "<b>Ошибка запроса в базу:</b> не могу получить список товаров";
			}
		}else{
			$error .= "<b>Ошибка:</b> Нет подключение к базе данных";
		}
		
		$tmpFile = 'main.php';
	}
	
	include('template.php');
?>