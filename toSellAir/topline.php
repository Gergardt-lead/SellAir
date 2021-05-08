			<div id="topwrapper">
			<div class="navbar navbar-default">
			  <div class="container">
				<div class="navbar-header">
				 	<a href="../" class="navbar-brand">
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


						<li class="dropdown">
						  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Компьютеры <span class="caret"></span></a>
						  <ul class="dropdown-menu" aria-labelledby="themes">
							<li><a href="#">Настольные ПК</a></li>
							<li><a href="#">Ноутбуки</a></li>
							<li><a href="#">Моноблоки</a></li>
						  </ul>
						</li>

						<li class="dropdown">
						  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Комплектующие <span class="caret"></span></a>
						  <ul class="dropdown-menu" aria-labelledby="themes">
						  <?php
							foreach($allCategory as $id=>$category){
								echo "<li><a href='/?action=category&id={$id}'>{$category}</a></li>";
							}
						  ?>
						  </ul>
						</li>



						<li>
						  <a href="#"><span class="glyphicon glyphicon-earphone cont_icon"></span><span class="cont_text">Контакты</span></a>
						</li>

					  </ul>

					  <ul class="nav navbar-nav navbar-right">
						<li><a href="#" target="_blank">+7 (747) 363 64 22</a></li>

						<li>
							<a href="/?action=basket">
								<span class="glyphicon glyphicon-shopping-cart basket_icon">
									<span class="basket_count">0</span>
								</span>
								<span class="basket_text">Корзина (0)</span>
							</a>
						</li>

					  </ul>

					</div>
				  </div>
				</div>
			</div>
