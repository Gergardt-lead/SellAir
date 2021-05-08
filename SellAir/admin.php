<?php
	// включаем сессию
	session_start();

	// error_reporting(0); // отключение выводи всех уровней ошибок

	$title = "Админпанель сайта STORE.KZ";
	$act_title = ""; // записываем в эту переменную действие, которое сейчас выполняем
	$action = $_GET['action'];
	$content = ""; // сюда пишем то, что нужно выводить в блоке контента на определенных действия в админке

	// подключение библиотек
	/*include('functions.php');*/

	// Подключение к базе данных
	$db = mysqli_connect('localhost', 'root', "", "sellair");

	if($db){
		if($action == "addnewitem"){
			$title = "Добавление нового товара";
			$act_title = "Добавление нового товара на сайт";

			if($_SERVER["REQUEST_METHOD"] === "POST"){

				$trust = '';
				if(empty($_POST['itemName']) OR strlen($_POST['itemName']) < 6) $trust .= "Поле <b>'Имя товара'</b> не заплнено или его длина менее 6 симвволов! <br/>";
				if(empty($_POST['itemCost'])) $trust .= "Поле <b>'Цена товара'</b> не заполнено<br/>";
				if(empty($_POST['itemManufacturer'])) $trust .= "Поле <b>'Производитель'</b> не заполнено<br/>";
				if(empty($_POST['itemCategory'])) $trust .= "Вы не уазали <b>'Категорию'</b> товара<br/>";
				if(empty($_POST['itemDescription']) OR strlen($_POST['itemDescription']) < 50) $trust .= "Вы не заполнили <b>'Описание'</b> товара<br/>";
				if(empty($_FILES['itemMainImg']['name'])) $trust .= "Главное изображение товара <b>не загружено или не указано</b>!<br/>";
				if($_FILES['itemMainImg']['name'] AND $_FILES['itemMainImg']['size'] > 1000000) $trust .= "Ошибка: <b>Главное изображение не может весить более 1мб!</b><br/>";
				if(!empty($_FILES['itemMainImg']['error'])) $trust .= "Выбранное Вами главное изображение не подходит для загрузки на сервер<br/>";
				// if($_FILES['itemMainImg']['type'] != 'image/jpeg' or $_FILES['itemMainImg']['type'] != 'image/jpg' or !$_FILES['itemMainImg']['type'] != 'image/png' or $_FILES['itemMainImg']['type'] != 'image/gif') $trust .= "Главное изображение не подходит по формату, доступные форматы: <b>jpg, jpeg, png, gif</b>";

				if(empty($trust)){
					// изображение прошло проверки, можно его загружать
					$uploadedFiles = dirname(__FILE__)."/images/";
					$mainImg = mktime().'_'.$_FILES['itemMainImg']['name'];

					move_uploaded_file($_FILES['itemMainImg']['tmp_name'], $uploadedFiles.$mainImg);

					$finalDopImg = '';

					if($_FILES['itemDopImg']['name'][0]){
						$dopImages = $_FILES['itemDopImg'];

						$dopImg = [];

						foreach($dopImages as $key=>$element){
							if($key == "name"){
								foreach($element as $imgName){
									$dopImg[]['fileName'] = $imgName;
								}
							}

							if($key == "type"){
								foreach($element as $imgId=>$fileType){
									$dopImg[$imgId]['fileType'] = $fileType;
								}
							}

							if($key == 'tmp_name'){
								foreach($element as $imgId=>$fileTmp){
									$dopImg[$imgId]['fileTmp'] = $fileTmp;
								}
							}

							if($key == 'error'){
								foreach($element as $imgId=>$fileError){
									$dopImg[$imgId]['fileError'] = $fileError;
								}
							}

							if($key == 'size'){
								foreach($element as $imgId=>$fileSize){
									$dopImg[$imgId]['fileSize'] = $fileSize;
								}
							}
						}

						$finalDopImg = [];

						foreach($dopImg as $oneImage){
							$fileName = mktime().'_'.$oneImage['fileName'];

							$finalDopImg[] = $fileName;

							move_uploaded_file($oneImage['fileTmp'], $uploadedFiles.$fileName);
						}

						$finalDopImg = serialize($finalDopImg);
					}


					$addDate = mktime();
					$itemName = trim($_POST['itemName']);
					$itemCost = trim($_POST['itemCost']);
					$itemManufacturer = trim($_POST['itemManufacturer']);
					$itemCategory = trim($_POST['itemCategory']);
					$itemDescription = trim($_POST['itemDescription']);

					$insertQuery = "INSERT INTO `items` (addDate, itemName, itemCost, itemManufacturer, itemCategory, itemDescription, itemMainImg, itemDopImg) VALUES ('{$addDate}', '{$itemName}', '{$itemCost}', '{$itemManufacturer}', '{$itemCategory}', '{$itemDescription}', '{$mainImg}', '{$finalDopImg}')";

					if(mysqli_query($db, $insertQuery)){
						$content .= "Товар добавлен, <a href='/admin.php?action=allitems'>к списку всех товаров</a>";
					}else{
						$content .= "Ошибка: Товар не добавлен. Информация для отладки: <b>MSQLERROR: ".mysqli_errno($db).", <b>MYSQL MSG:</b> ".mysqli_error($db)."</b>";
					}
				}else{
					$content .= "Ошибка заполнения данных, Вы не указали след.поля: <br/>";
					$content .= $trust;
				}
			}else{
				$content .= "Заполните необходимые поля: <br/>";
				$content .= <<<HTML
				<form method="POST" action="" enctype="multipart/form-data">
					<input type="text" name="itemName" placeholder="Укажите наименование товара" /><br/>
					<input type="number" name="itemCost" placeholder="Цена" /><br/>
					<input type="text" name="itemManufacturer" placeholder="Наименование производителя" /><br/>
					<select class="select" name="itemCategory">
						<option>Выбрать категорию</option>
HTML;
				$content .= displayAllCategory();
				$content .= <<<HTML
					</select><br/>
					<textarea name="itemDescription" placeholder="Опишите товар"></textarea>

					<input type="file" name="itemMainImg" />
					<input type="file" name="itemDopImg[]" multiple />

					<input type="submit" value="Добавить товар" />
				</form>
HTML;
			}
		}elseif($action == "edititem"){
			$title = "Редактирование товара";
			$act_title = "Редактирование товара в базе данных";

			$itemId = (int) $_GET['id'];

			if($itemId){
				$selectQuery = "SELECT * FROM `items` WHERE id='{$itemId}'";

				if($result = mysqli_query($db, $selectQuery)){
					$item = mysqli_fetch_assoc($result);

					if($item){
						if($_SERVER['REQUEST_METHOD'] === "POST"){
							$trust = '';
							if(empty($_POST['itemName']) OR strlen($_POST['itemName']) < 6) $trust .= "Поле <b>'Имя товара'</b> не заплнено или его длина менее 6 симвволов! <br/>";
							if(empty($_POST['itemCost'])) $trust .= "Поле <b>'Цена товара'</b> не заполнено<br/>";
							if(empty($_POST['itemManufacturer'])) $trust .= "Поле <b>'Производитель'</b> не заполнено<br/>";
							if(empty($_POST['itemCategory'])) $trust .= "Вы не уазали <b>'Категорию'</b> товара<br/>";
							if(empty($_POST['itemDescription']) OR strlen($_POST['itemDescription']) < 50) $trust .= "Вы не заполнили <b>'Описание'</b> товара<br/>";

							$uploadedFiles = dirname(__FILE__)."/images/";

							if($_FILES['itemMainImg']['name']){
								$mainImg = mktime().'_'.$_FILES['itemMainImg']['name'];

								move_uploaded_file($_FILES['itemMainImg']['tmp_name'], $uploadedFiles.$mainImg);
							}

							$finalDopImg = '';

							if($_FILES['itemDopImg']['name'][0]){
								$dopImages = $_FILES['itemDopImg'];

								$dopImg = [];

								foreach($dopImages as $key=>$element){
									if($key == "name"){
										foreach($element as $imgName){
											$dopImg[]['fileName'] = $imgName;
										}
									}

									if($key == "type"){
										foreach($element as $imgId=>$fileType){
											$dopImg[$imgId]['fileType'] = $fileType;
										}
									}

									if($key == 'tmp_name'){
										foreach($element as $imgId=>$fileTmp){
											$dopImg[$imgId]['fileTmp'] = $fileTmp;
										}
									}

									if($key == 'error'){
										foreach($element as $imgId=>$fileError){
											$dopImg[$imgId]['fileError'] = $fileError;
										}
									}

									if($key == 'size'){
										foreach($element as $imgId=>$fileSize){
											$dopImg[$imgId]['fileSize'] = $fileSize;
										}
									}
								}

								$finalDopImg = [];

								foreach($dopImg as $oneImage){
									$fileName = mktime().'_'.$oneImage['fileName'];

									$finalDopImg[] = $fileName;

									move_uploaded_file($oneImage['fileTmp'], $uploadedFiles.$fileName);
								}

								$finalDopImg = serialize($finalDopImg);
							}

							if(empty($trust)){
								$itemName = trim($_POST['itemName']);
								$itemCost = trim($_POST['itemCost']);
								$itemManufacturer = trim($_POST['itemManufacturer']);
								$itemCategory = trim($_POST['itemCategory']);
								$itemDescription = trim($_POST['itemDescription']);

								$updateQuery = "
								UPDATE `items` SET
									itemName='{$itemName}',
									itemCost='{$itemCost}',
									itemManufacturer='{$itemManufacturer}',
									itemCategory='{$itemCategory}',
									itemDescription='{$itemDescription}'";
									if($mainImg) $updateQuery .= ", itemMainImg='{$mainImg}'";
									if($finalDopImg) $updateQuery .= ", itemDopImg='{$finalDopImg}'";
								$updateQuery .= "
								WHERE id='{$itemId}'";

								if(mysqli_query($db, $updateQuery)){
									$content .= "Данные сохранены, <a href='/admin.php?action=allitems'>к списку всех товаров</a>";
								}else{
									$cotnent .= "Ошибка: Не удалось выполнить запрос изменения товара. Информация для отладки: <b>MSQLERROR: ".mysqli_errno($db).", <b>MYSQL MSG:</b> ".mysqli_error($db)."</b>";
								}
							}else{
								$content .= "Ошибка заполнения данных, Вы не указали след.поля: <br/>";
								$content .= $trust;
							}
						}else{
							if($item['itemDopImg']){
								$dopImg = unserialize($item['itemDopImg']);
							}

							$content .= "Заполните необходимые поля: <br/>";
							$content .= <<<HTML
							<form method="POST" action="" enctype="multipart/form-data">
								<input type="text" name="itemName" value="{$item['itemName']}" placeholder="Укажите наименование товара" /><br/>
								<input type="number" name="itemCost" value="{$item['itemCost']}" placeholder="Цена" /><br/>
								<input type="text" name="itemManufacturer" value="{$item['itemManufacturer']}" placeholder="Наименование производителя" /><br/>
								<select class="select" name="itemCategory">
									<option>Выбрать категорию</option>
HTML;
							$content .= displayAllCategory($item['itemCategory']);
							$content .= <<<HTML
								</select><br/>
								<textarea name="itemDescription" placeholder="Опишите товар">{$item['itemDescription']}</textarea>
								<input type="file" name="itemMainImg" /> <img src="/images/{$item['itemMainImg']}" style="width:64px; border:3px solid #cecece; margin-bottom:15px;"/>
								<input type="file" name="itemDopImg[]" multiple />
								<div style="oveflow:hidden;">
HTML;
							if($dopImg) {
								foreach($dopImg as $image){
									$content .= '<img src="/images/'.$image.'" style="width:64px; float:left; border:3px solid #cecece; margin-right:7px;" />';
								}
							}
							$content .= <<<HTML
								</div>
								<div style="clear:both; margin-bottom:15px;"></div>
								<input type="submit" value="Сохранить изменения" />
							</form>
HTML;
						}

					}else{
						$content .= "Товара с таким ID нет";
					}

				}else{
					$content .= 'Ошибка: Не удалось выполнить запрос на получение информации о редактируемом товаре';
				}
			}else{
				$content .= "Вы не указали ID редактируемого товара";
			}

		}elseif($action == "deleteitem"){
			$title = "Удаление товара";
			$act_title = "Удаление товара из базы";

			$itemId = (int) $_GET['id'];
			if($itemId){
				if($_SERVER['REQUEST_METHOD'] == "POST" AND $_POST['like'] == 'yes'){
					$deleteQuery = "DELETE FROM `items` WHERE id='{$itemId}'";

					if(mysqli_query($db, $deleteQuery)){
						if(mysqli_affected_rows($db)){
							$content .= "Товар удален, <a href='/admin.php?action=allitems'>вернуться к списку всех товаров</a>";
						}else{
							$content .= "Такого товара нет в базе";
						}
					}else{
						$content .= "<b>Ошибка:</b> Не удалось удалить товар!";
					}
				}else{
					$content .= <<<HTML
						<form method="POST" action="">
							<input type="hidden" name="like" value="yes" />
							<input type="submit" value="Подтвердить удаление товара" />
						</form>
HTML;
				}
			}else{
				$content .= "<b>Ошибка:</b> Не указан ID удаляемого товара";
			}

		}elseif($action == "allitems"){
			$title = "Список всех товаров";
			$act_title = "Список всех товаров сайта";

			$selectQuery = "SELECT * FROM `items`";

			if($result = mysqli_query($db, $selectQuery)){
				$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

				$content .= <<<HTML
				<style>
					th{
						text-align:center;
						background-color:#F2F2F2;
						padding:3px;
					}
					.item-action{
						text-align:center;
					}
					td{
						padding:7px;
					}
					.tr-content:hover{
						background-color:#F7F7F7;
					}
				</style>

				<table border="1px" bordercolor="#cecece" style="width:100%;">
HTML;
				$content .= "<tr>
								<th>ID товара в базе</th>
								<th>Наименование товара</th>
								<th>Производитель</th>
								<th>Цена</th>
								<th>Действие</th>
							</tr>";

				if(!empty($items)){ // если в переменной $items не пусто, то true
					foreach($items as $item){
						$content .= "<tr class='tr-content'>
										<td>{$item['id']}</td>
										<td>{$item['itemName']}</td>
										<td>{$item['itemManufacturer']}</td>
										<td style='text-align:center;'>{$item['itemCost']}</td>
										<td class='item-action'>
											<a href='/admin.php?action=edititem&id={$item['id']}'><span class='glyphicon glyphicon-pencil'></span></a>
											<a href='/admin.php?action=deleteitem&id={$item['id']}'><span class='glyphicon glyphicon-remove'></span></a>
										</td>
									</tr>";
						}
				}else{
					$content .= "<center>В базе нет товаров</center>";
				}

				$content .= <<<HTML
				</table>
HTML;
			}else{
				$content .= "<b>Ошибка: </b> Не удалось выполнить запрос всех товаров из базы данных";
			}



		}elseif($action == "allorders"){
			$title = "Список всех заказов";
			$act_title = "Список всех заказов на сайте";

		}elseif($action == "allnews"){
			$title = "Список всех новостей";
			$act_title = "Список всех новостей сайта";

		}else{
			$title = "Админпанель сайта ASTORE.KZ";
			$act_title = "Список возможных действий в админпанели:";

		}
	}else{
			$act_title = "Ошибка: Нет соединения с базой данных!";
	}

    include('topline.php');
?>


    <!DOCTYPE html>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title><?=$title?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <link rel="stylesheet" href="https://bootswatch.com/3/slate/bootstrap.min.css" crossorigin="anonymous">
    		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">

            <link rel="stylesheet" href="css/styles.css?v=29">
        </head>
        <body>
            <div id="topline">
                <div id="topwrapper">
                                    <div class="navbar navbar-default navbar-fixed-top">
                         <div class="container">
                           <div class="navbar-header">
                             <a href="http://sellair/admin.php" class="navbar-brand">
                                <span id="logo">
                                    Sell
                                </span>

                                <span id="logo1">
                                    AIR
                                </span>
                             </a>
                             <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                             </button>
                           </div>
                           <div class="navbar-collapse collapse" id="navbar-main">
                             <ul class="nav navbar-nav">
                               <li>
                                   <a href="http://sellair/admin.php?action=additem">Добавить товар</a>
                               </li>
                              <li>
                                <a href="http://sellair/admin.php?action=allitems">Все товары</a>
                              </li>

                               <li>
                                    <a href="http://sellair/admin.php?action=allorders">Список заказов</a>
                               </li>
                               <li>
                                 <a href="http://sellair/admin.php?action=allnews">Новости сайта</a>
                               </li>


                             </ul>

                             <!-- <li>
                               <a href="../help/">Help</a>
                             </li> -->


                             <ul class="nav navbar-nav navbar-right">
                               <li><a href="http://sellair/">На сайт</a></li>
                               <li>
                                   <a href="">
                                       <!-- <span id="num-tov-basket">99</span> -->
                                       <span class="glyphicon glyphicon-user" id="topbasket"> </span>
                                       <!-- <span id="baskettext">Корзина</span></a></li> -->
                                   </a>
                             </ul>

                           </div>
                         </div>
                       </div>
                  </div>
    			</div>
            </div>

            <div id="wrapper">
                <div class="conthead">
                    <h1 style="color:black;"><?=$actTitle?></h1>
                    <!-- <div id="vozmojnosty">
                        <br/>
                        <a href="">Посмотреть главные новости</a>
                        <br/>
                        <br/>
                        <a href="">Все товары</a>
                        <br/>
                        <br/>
                        <a href="">Все заказы</a>
                        <br/>
                        <br/>
                        <a href="">Добавить товар</a>
                        <br/>
                    </div> -->
                    <div id="admincontent">
                        <?=$content?>
                    </div>



                </div>

            </div>







            <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
        </body>
    </html>
