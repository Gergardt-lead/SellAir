<div id="category-wrapper">
	<?php
		if($items){
			foreach($items as $item){
				
				$descr = mb_substr($item['itemDescription'], 0, 25);
				
				echo <<<HTML
				<div class="newitem">
						<div class="item-img"><a href="/?action=item&id={$item['id']}"><div class="itmbg"><img src="/images/{$item['itemMainImg']}" /></div></a></div>
						<div class="item-info">
							<div class="itminf-title"><div class="itmtitle-bg"><a href="/?action=item&id={$item['id']}"><span>{$item['itemName']}</span></a> <a href="/admin.php?action=edititem&id={$item['id']}" target="_Blank"><span class="glyphicon glyphicon-edit"></span></a></div></div>
							<div class="itminf-descr">
								<div class="itmdescr-cont">
									<ul>
										<li>Цена: <b>{$item['itemCost']}</b></li>
										<li>Производитель: <b>{$item['itemManufacturer']}</b></li>
										<li>Описание: {$descr}... <a href='/?action=item&id={$item['id']}'>подробнее</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
HTML;

			}
		}else{
			echo "<br><b>В данной категории еще нет товаров</b>";
		}
	?>
</div>