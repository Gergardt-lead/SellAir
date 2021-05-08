<div id="item">
	<div id="itemleft">
		<div id="itemImages">
			<div class="fotorama" data-nav="thumbs" data-loop="true" data-allowfullscreen="native" data-arrows="always">
				<img src="/images/<?=$item['itemMainImg']?>" />
				<?
					if($dopImg){
						foreach($dopImg as $imgSrc){
							echo '<img src="/images/'.$imgSrc.'" />';
						}
					}
				?>
			</div>
		</div>
		<div id="itemDescription">
			<div id="itemDescrTitle"><span>Описание товара:</span></div>
			<div id="itemDescrText"><?=$item['itemDescription']?></div>
		</div>
	</div>
	<div id="itemright">
		<div id="itemInfo">
			<div class="itemInfoBox" id="itemPrice"><span>Цена: <b><?=$item['itemCost']?></b></span></div>
			<div id="addToCart"><span>Добавть в корзину</span></div>
			<div class="itemInfoBox">
				<ul>
					<li>Бренд: <b><?=$item['itemManufacturer']?></b></li>
					<li>Категория товара: <b><?=$allCategory[$item['itemCategory']]?></b></li>
					<li>Дата добавления: <b><?=date("d.m.Y", $item['addDate'])?></b></li>
				</ul>
			</div>
		</div>
	</div>
</div>