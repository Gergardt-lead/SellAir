		<div class="uk-modal dialog_window uk-open" aria-hidden="false" style="display: block; overflow-y: scroll;">
			<div class="uk-modal-dialog" style="top: 30.5px;">
				<a class="uk-modal-close uk-close" onclick="clearInterval(redirecttimer);" style="font-size: 15pt;" id="changename_close"></a>
				
							<h2>Оплата выбранной услуги</h2>
							<div class="uk-text-small">
								К сожалению на Вашем внутреннем балансе StreamCraft.net нет необходимой суммы денег.<br>
								Через несколько секунд Вы будете перенаправлены на страницу платежного агрегатора UnitPay.<br>
								Сразу после оплаты выбранная Вами услуга будет активна.
							</div><hr>
							<div>Услуга: <b><span class="uk-text-primary">Приобретение возможности летать (1 месяц)</span></b></div>
							<div>Полная стоимость выбранной услуги: <b>99 руб.</b></div>
							<div>Для оплаты необходимо: <b class="uk-text-success">99 руб.</b></div>
							<div>На Вашем балансе есть: <b>0 руб.</b> </div>
							<br>
							<a href="https://unitpay.ru/pay/37321-6aa03?sum=99&amp;account=L0Lka&amp;desc=Оплата+услуги+на+StreamCraft.net"><button class="uk-width-1-1" type="button">Перейти на страницу оплаты выбранной услуги [<span id="redirect_sec">6</span> сек.]</button></a>
							<script>RunTimeOutRedirect('https://unitpay.ru/pay/37321-6aa03?sum=99&account=L0Lka&desc=Оплата+услуги+на+StreamCraft.net', 20)</script>
						
			</div>
		</div>

if(getStoreValue('flyPriceDisc')) {
		$flyPriceMinus = round((getStoreValue('flyPrice')*getStoreValue('flyPriceDisc'))/100, 2);
		$flyPrice = getStoreValue('flyPrice') - $flyPriceMinus;
		$realPricefly = "<span style='position: absolute;margin-top: -15px;font-size: 10pt;' class='line uk-text-danger'><s>".getStoreValue('flyPrice')." Руб</s></span> ";
		$flySk = "<div style='font-size: 16pt; $dop' class='uk-text-danger'>-".getStoreValue('flyPriceDisc')."%</div>";
	}


			                          $error
			<div id='#shop' class='uk-modal uk-open' aria-hidden='false' style='display: none; overflow-y: scroll;'>
			    <div class='uk-modal-dialog'>
                    <a class='uk-modal-close uk-close'></a>
			        <div class='modal_content'>
							        <b>ПРОСМОТР ВЫБРАННОГО ТОВАРА</b>
							        <div class='modal_content'>
								        <table class='uk-width-1-1'>
								        	<tbody><tr>
								        		<td width='120px'><img src='{$select['icon']}' width='110px'></td>
								        		<td valign='top'>
								        			<table class='uk-width-1-1 uk-table uk-table-striped'>
								        				<tbody><tr>
								        					<td>Название товара</td>
								        					<td align='right'><b>{$select['itemname']}</b></td>
								        				</tr>
								        				<tr>
								        					<td>Стоимость</td>
								        					<td align='right'>$priceText$price $word</td>
								        				</tr>
								        				<tr>
								        					<td>Количество за стоимость выше</td>
								        					<td align='right'>$stack $wordCount шт.</td>
								        				</tr>
								        			</tbody></table>
								        		</td>
								        	</tr>
								        </tbody></table>
								        
								        <table class='uk-width-1-1 uk-table uk-table-striped' style='width: 459px;'>
										    
								        	<tbody><tr>
								        		<td style='padding: 5px;' width='300px'><div style='margin-top: 4px;'><b>Сколько товара хотите получить?</b></div></td>
								        		<td align='right' style='padding: 5px;'>
								        			<div style='font-size: 14pt;'><i class='uk-icon-minus' id='lessItem' data-stack='10' data-cost='3' style='cursor: pointer;'></i> 
								        			<span id='countitems'>$stack</span> шт. 
								        			<i class='uk-icon-plus' style='cursor: pointer;' data-stack='10' data-cost='3' id='moreItem'></i></div>
								        		</td>
								        	</tr>
								        	<tr>
								        		<td style='padding: 5px;' width='300px'><div style='margin-top: 4px;'><b>ОБЩАЯ СТОИМОСТЬ</b></div></td>
								        		<td align='right' style='padding: 5px;'>
								        			<div style='font-size: 14pt;'><b><span id='megatotalprice'>$price</span> руб.</b></div>
								        		</td>
								        	</tr>
								        </tbody></table>
								        <div id='buyOutput'></div>
					        					<input type='submit' class='uk-button uk-button-success uk-width-1-1' style='border-bottom-right-radius: 0px; margin-right: -3px; border-top-right-radius: 0px; color: white' name='buy' value='КУПИТЬ'>
										
							        </div>
							    </div>