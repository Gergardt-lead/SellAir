<?php

$allCategory = [
	1 => 'Настльные ПК',
	2 => 'Ноутбуки',
	3 => 'Моноблоки',
	4 => 'Комплектующие',
	5 => 'Мат.платы',
	6 => 'Жесткие диски',
	7 => 'SSD диски',
	8 => 'Блоки питания'
];

function displayAllCategory($selectCat = false){
	$options = '';
	global $allCategory;
	
	foreach($allCategory as $key=>$category){
		if($selectCat and $key == $selectCat) $options .= "<option value='{$key}' selected>{$category} </option>";
		else $options .= "<option value='{$key}'>{$category}</option>";
	}
	
	return $options;
}

?>