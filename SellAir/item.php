<div id="item">
    <div id="itemLeft">
        <div id="itemImage">

        </div>
        <div id="itemDescr">
            <div id="itemDescrTitle">
                <span>Описание товара:</span>
            </div>
            <div>
                <?=$item['itemDescription']?>
            </div>
        </div>
    </div>
    <div id="itemRight">
        <div id="itemInfo">
            <div class="itemInfoBox"><span id="itemPrice">Цена: <b><?=$item['itemCost']?></b></span></div>
                <div id="addToCard"><span>Добавить в корзину</span></div>
            <div class="itemInfoBox">
                <ul>
                    <li>Бренд: <?=$item['itemManufacture']?></li>
                    <li>Дата добавления на сайт: <?=$item['addDate']?></li>
                    <li>Категория: <?=$item['itemCategory']?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
